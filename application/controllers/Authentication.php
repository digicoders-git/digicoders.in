<?php
defined('BASEPATH') or exit('direct access not allowrd');

class Authentication extends CI_Controller
{
	public function __construct()
	{
		date_default_timezone_set("asia/kolkata");
		parent::__construct();
		$this->data = array(
			"app_name" => "Software Development | Website Development | Mobile Application Development | Digital Marketing | Summer Training | Internship | Apprenticeship",
			"date" => date('Y-m-d'),
			"time" => date('h:i:sA'),
			"mobile_no" => "9198483820",
			"telephone_no" => "0522-4235604",
			"email" => "info@digicoders.in"


		);
	}

	public function AdminLogin()
	{
		$this->load->view('Admin/Index');
	}

	public function SendOTP()
	{
		if ($this->input->is_ajax_request()) {
			$email = trim($this->input->post('email'));
			$query = $this->db->get_where('admin_login', array("email" => $email));
			if ($query->num_rows() > 0) {
				$latitude = trim($this->input->post('latitude'));
				$longitude = trim($this->input->post('longitude'));
				$address = trim($this->input->post('address'));

				// Mandatory Location Access Enforcement
				if (empty($latitude) || empty($longitude) || $latitude === 'N/A' || $longitude === 'N/A' || strpos($address, 'Permission Denied') !== false) {
					$this->output
						->set_content_type('application/json')
						->set_output(json_encode(array("status" => "error", "msg" => "Location permission is required to login to Admin. Please allow location access in your browser.")));
					return;
				}

				$otp = rand(100000, 999999);
				$otp_expiry = time() + 120; // 2 minutes strictly

				$this->session->set_userdata('login_otp', $otp);
				$this->session->set_userdata('otp_email', $email);
				$this->session->set_userdata('otp_expiry', $otp_expiry);
				$this->session->set_userdata('login_latitude', $latitude);
				$this->session->set_userdata('login_longitude', $longitude);
				$this->session->set_userdata('login_address', $address);

				// Save OTP to database
				$this->db->update('admin_login', array('otp' => $otp, 'otp_expiry' => $otp_expiry), array('email' => $email));

				// Insert Login Attempt History immediately
				$this->load->library('LoginDetails');
				$logindetails_data = array(
					"LoginID" => $query->row()->id,
					"IP" => $this->logindetails->get_ip(),
					"MAC" => $this->logindetails->get_mac(),
					"UserName" => $this->logindetails->get_username(),
					"BrowserName" => $this->logindetails->get_useragent(),
					"OSName" => $this->logindetails->get_os(),
					"Date" => $this->data['date'],
					"Time" => $this->data['time'],
					"Latitude" => $latitude,
					"Longitude" => $longitude,
					"Address" => $address
				);
				$this->db->insert("tbl_adminlogindetails", $logindetails_data);

				// Send Email via Gmail SMTP
				try {
					send_admin_login_otp_email($email, $otp, $logindetails_data, $latitude, $longitude, $address);
				} catch (Exception $e) {
					// Ignore email exception
				}

				$this->output
					->set_content_type('application/json')
					->set_output(json_encode(array(
						"status" => "success",
						"msg" => "OTP sent to your email."
					)));
			} else {
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode(array("status" => "error", "msg" => "Invalid Email Address.")));
			}
		}
	}

	public function VerifyOTP()
	{
		if ($this->input->is_ajax_request()) {
			$user_otp = trim($this->input->post('otp'));
			$email = $this->session->userdata('otp_email');

			if (empty($email)) {
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode(array("status" => "error", "msg" => "Session expired. Please send OTP again.")));
				return;
			}

			$admin_rec = $this->db->get_where('admin_login', array("email" => $email))->row();
			if (!$admin_rec) {
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode(array("status" => "error", "msg" => "Invalid Email Address.")));
				return;
			}

			// Strictly check database OTP only
			if ($admin_rec->otp != $user_otp) {
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode(array("status" => "error", "msg" => "Invalid OTP. Please enter the correct OTP sent to your email.")));
				return;
			}

			// Strictly check 2-minute OTP expiry
			if (time() > $admin_rec->otp_expiry) {
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode(array("status" => "error", "msg" => "OTP Expired (valid for 2 minutes only). Please click Resend OTP.")));
				return;
			}

			// Database OTP matches & is valid!
			$this->session->set_userdata("AdminEmail", $admin_rec->email);
			$this->session->set_userdata("AdminID", $admin_rec->id);
			$this->session->set_userdata("OTP_Verified", TRUE);
			$this->session->unset_userdata('Password_Verified'); // Account password verification required next

			$this->output
				->set_content_type('application/json')
				->set_output(json_encode(array(
					"status" => "success",
					"msg" => "OTP Verified. Redirecting...",
					"redirectLink" => base_url('Admin/Dashboard')
				)));
		}
	}

	public function VerifyPassword()
	{
		if ($this->input->is_ajax_request()) {
			$raw_password = trim($this->input->post('password'));
			$hashed_password = md5($raw_password);
			$email = $this->session->userdata('AdminEmail');

			if (empty($email)) {
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode(array("status" => "error", "msg" => "Session expired. Please login again.")));
				return;
			}

			$admin = $this->db->get_where('admin_login', array("email" => $email))->row();
			if (!$admin) {
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode(array("status" => "error", "msg" => "Account not found.")));
				return;
			}

			// Strictly match database account password (MD5 or plain text stored in database)
			if ($admin->password === $hashed_password || $admin->password === $raw_password) {
				$data_arr = array(
					"login_date" => $this->data['date'],
					"login_time" => $this->data['time'],
					"status" => 'true'
				);
				$this->db->where('id', $admin->id)->update('admin_login', $data_arr);

				$this->session->set_userdata("Password_Verified", TRUE);

				$this->output
					->set_content_type('application/json')
					->set_output(json_encode(array("status" => "success", "msg" => "Login Successful.")));
			} else {
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode(array("status" => "error", "msg" => "Incorrect Password. Please enter your correct account password.")));
			}
		}
	}

	public function AdminLogin_Old()
	{
		if ($this->uri->segment(3) == "Authenticate" && $this->input->is_ajax_request()) {

			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', '', 'required');

			if ($this->form_validation->run() == false) {
				// echo "validation Error";
				echo json_encode(array("status" => "error", "msg" => "Form Validation Error", "title" => "All Required Fields.", "reload" => "false", "redirect" => 'false'));
			} else {
				$email = $this->input->post("email");
				$password = $this->input->post("password");
				$password = md5($password);
				$url = $this->input->post("url");

				$query = $this->db->get_where('admin_login', array("email" => $email));
				if ($query->num_rows() > 0) {
					$result = $query->row();
					if ($result->password == $password) {

						$data_arr = array(
							"login_date" => $this->data['date'],
							"login_time" => $this->data['time'],
							"status" => 'true'
						);

						if ($this->db->where('email', $result->email)->update('admin_login', $data_arr)) {


							##login Histroy

							# Login Login Library and get all the system details

							$this->load->library('LoginDetails');
							$ip = $this->logindetails->get_ip();
							$mac = $this->logindetails->get_mac();
							$os = $this->logindetails->get_os();
							$useragent = $this->logindetails->get_useragent();
							$username = $this->logindetails->get_username();

							# Create array for login details insertion
							$logindetails_data = array(
								"LoginID" => $result->id,
								"IP" => $ip,
								"MAC" => $mac,
								"UserName" => $username,
								"BrowserName" => $useragent,
								"OSName" => $os,
								"Date" => $this->data['date'],
								"Time" => $this->data['time']
							);
							# Save login details
							$this->db->insert("tbl_adminlogindetails", $logindetails_data);

							##login Histroy
							$this->session->set_userdata("AdminEmail", $email);
							$this->session->set_userdata("AdminID", $result->id);
							echo json_encode(array("status" => "success", "msg" => "", "title" => "Welcome To Dashboard.", "reload" => "false", "redirect" => 'true', "redirectLink" => base_url('Admin/Dashboard')));
						} else {
							echo "login data not update";
						}
					} else {
						echo json_encode(array("status" => "error", "msg" => "Please enter valid password..", "title" => "Invalid Password", "reload" => "false", "redirect" => 'false'));
					}
				} else {
					echo json_encode(array("status" => "error", "msg" => "Please enter valid email address.", "title" => "Invalid Login ID.", "reload" => "false", "redirect" => 'false'));
				}
			}
		}
	}

	public function logout()
	{
		if ($this->uri->segment(3) == "logout" && $this->input->is_ajax_request()) {

			if (!empty($this->session->userdata('AdminEmail'))) {
				$email = $this->session->userdata('AdminEmail');
				$data_arr = array(
					"logout_date" => $this->data['date'],
					"logout_time" => $this->data['time'],
					"status" => 'false'
				);
				if ($this->db->where('email', $email)->update('admin_login', $data_arr)) {
					$this->session->sess_destroy();
					echo json_encode(array("status" => "success", "msg" => "Session destroy", "title" => "Welcome", "reload" => "false", "redirect" => 'true', "redirectLink" => base_url('Home/Login')));
				}
			} else {
				echo "session not found";
			}
		}
	}
}
