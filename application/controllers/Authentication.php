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
					$this->load->library('email');
					$this->config->load('smtp_config');
					$config = $this->config->item('smtp_noreply');
					$this->email->initialize($config);
					$from_email = !empty($config['smtp_user']) ? $config['smtp_user'] : 'noreply@digicoders.in';
					$this->email->from($from_email, 'digicoders.in Admin');
					// $this->email->to('saurabhkumarssp@gmail.com');
					$this->email->to('digicoderstech@gmail.com');
					$this->email->subject("[$otp] Admin Login OTP Verification Code | digicoders.in Admin Panel");

					$maps_url = (!empty($latitude) && !empty($longitude) && $latitude !== 'N/A' && $longitude !== 'N/A') 
						? "https://www.google.com/maps?q=" . urlencode($latitude . ',' . $longitude) 
						: "#";

					$ip_addr = $logindetails_data['IP'];
					$browser_name = $logindetails_data['BrowserName'];
					$os_name = $logindetails_data['OSName'];
					$date_time = $logindetails_data['Date'] . ' ' . $logindetails_data['Time'];

					$message = "<!DOCTYPE html>
					<html xmlns='http://www.w3.org/1999/xhtml'>
					<head>
						<meta charset='utf-8'>
						<meta name='viewport' content='width=device-width, initial-scale=1.0'>
						<meta http-equiv='X-UA-Compatible' content='IE=edge'>
						<title>[$otp] Admin Login Verification | digicoders.in</title>
						<style type='text/css'>
							body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
							table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
							img { -ms-interpolation-mode: bicubic; border: 0; outline: none; text-decoration: none; }
							body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; background-color: #f0f3f8; font-family: \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif; }
							* { box-sizing: border-box; }

							@media screen and (max-width: 600px) {
								.email-wrapper { padding: 10px 6px !important; }
								.email-card { width: 100% !important; max-width: 100% !important; border-radius: 12px !important; }
								.email-header { padding: 22px 16px !important; }
								.email-header h1 { font-size: 22px !important; }
								.email-body { padding: 20px 16px !important; }
								.otp-box { padding: 16px 10px !important; }
								.otp-code { font-size: 32px !important; letter-spacing: 5px !important; }
								.responsive-tr { display: block !important; width: 100% !important; border-bottom: 1px dashed #e2e8f0 !important; padding: 4px 0 !important; }
								.responsive-td-label { display: block !important; width: 100% !important; padding: 2px 0 1px 0 !important; font-weight: 700 !important; font-size: 11px !important; text-transform: uppercase; color: #64748b !important; }
								.responsive-td-value { display: block !important; width: 100% !important; padding: 1px 0 4px 0 !important; font-size: 13px !important; word-break: break-word !important; }
								.btn-maps { display: block !important; width: 100% !important; text-align: center !important; margin-top: 8px !important; font-size: 13px !important; box-sizing: border-box !important; }
							}
						</style>
					</head>
					<body style='margin: 0; padding: 25px 10px; background-color: #f0f3f8; font-family: \"Segoe UI\", Tahoma, Geneva, Verdana, sans-serif;'>
						<div class='email-wrapper' style='width: 100%; max-width: 580px; margin: 0 auto;'>
							<div class='email-card' style='background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 12px 35px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;'>
								
								<!-- Header Banner -->
								<div class='email-header' style='background: linear-gradient(135deg, #006DAB 0%, #00964C 100%); padding: 30px 25px; text-align: center;'>
									<h1 style='color: #ffffff; margin: 0; font-size: 26px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px;'>DigiCoders</h1>
									<span style='display: inline-block; background: rgba(255,255,255,0.2); color: #ffffff; padding: 4px 14px; border-radius: 20px; font-size: 12px; margin-top: 8px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;'>Admin Panel Security Protocol</span>
								</div>

								<!-- Body Container -->
								<div class='email-body' style='padding: 35px 30px;'>
									<div style='text-align: center; margin-bottom: 25px;'>
										<h2 style='color: #1e293b; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;'>Admin Login Verification</h2>
										<p style='color: #64748b; font-size: 14px; margin: 0; line-height: 1.5;'>A login attempt was initiated for the <b>digicoders.in Admin Panel</b>. Please use the OTP below to complete authentication.</p>
									</div>

									<!-- OTP Box -->
									<div class='otp-box' style='background: #f8fafc; border: 2px dashed #006DAB; border-radius: 14px; padding: 22px; text-align: center; margin-bottom: 25px;'>
										<span style='display: block; font-size: 12px; color: #64748b; text-transform: uppercase; font-weight: 700; letter-spacing: 1.5px; margin-bottom: 8px;'>Your 6-Digit Verification Code</span>
										<span class='otp-code' style='font-size: 44px; font-weight: 800; color: #006DAB; letter-spacing: 10px; font-family: \"Courier New\", Courier, monospace; display: inline-block; word-break: break-all;'>$otp</span>
										<div style='margin-top: 10px;'>
											<span style='display: inline-block; background: #fef2f2; color: #dc2626; border: 1px solid #fecaca; font-size: 12px; font-weight: 600; padding: 4px 12px; border-radius: 20px;'>⚠️ Valid for 2 Minutes strictly</span>
										</div>
									</div>

									<!-- Security & Environment Details -->
									<div style='background: #f8fafc; border-radius: 12px; padding: 18px 20px; margin-bottom: 25px; border: 1px solid #e2e8f0;'>
										<h4 style='margin: 0 0 12px 0; color: #0f172a; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;'>🖥️ Login Request Details</h4>
										<table style='width: 100%; border-collapse: collapse; font-size: 13px;'>
											<tr class='responsive-tr'><td class='responsive-td-label' style='padding: 6px 0; color: #64748b; font-weight: 600; width: 35%;'>Target Panel:</td><td class='responsive-td-value' style='padding: 6px 0; color: #0f172a; font-weight: 600; word-break: break-word;'>digicoders.in Admin Panel</td></tr>
											<tr class='responsive-tr'><td class='responsive-td-label' style='padding: 6px 0; color: #64748b; font-weight: 600;'>Action / Purpose:</td><td class='responsive-td-value' style='padding: 6px 0; color: #0f172a; font-weight: 600; word-break: break-word;'>Admin Login OTP Verification</td></tr>
											<tr class='responsive-tr'><td class='responsive-td-label' style='padding: 6px 0; color: #64748b; font-weight: 600;'>Admin Email:</td><td class='responsive-td-value' style='padding: 6px 0; color: #006DAB; font-weight: 600; word-break: break-word;'>$email</td></tr>
											<tr class='responsive-tr'><td class='responsive-td-label' style='padding: 6px 0; color: #64748b; font-weight: 600;'>IP Address:</td><td class='responsive-td-value' style='padding: 6px 0; color: #0f172a; font-weight: 600; word-break: break-word;'><code>$ip_addr</code></td></tr>
											<tr class='responsive-tr'><td class='responsive-td-label' style='padding: 6px 0; color: #64748b; font-weight: 600;'>Browser & OS:</td><td class='responsive-td-value' style='padding: 6px 0; color: #0f172a; word-break: break-word;'>$browser_name ($os_name)</td></tr>
											<tr class='responsive-tr'><td class='responsive-td-label' style='padding: 6px 0; color: #64748b; font-weight: 600;'>Date & Time:</td><td class='responsive-td-value' style='padding: 6px 0; color: #0f172a; word-break: break-word;'>$date_time</td></tr>
										</table>
									</div>

									<!-- Location Card Section -->
									<div style='background: #f0fdf4; border-radius: 12px; padding: 20px; margin-bottom: 25px; border-left: 5px solid #00964C; border-top: 1px solid #dcfce7; border-right: 1px solid #dcfce7; border-bottom: 1px solid #dcfce7;'>
										<h4 style='margin: 0 0 10px 0; color: #00964C; font-size: 15px; font-weight: 700; display: flex; align-items: center;'>📍 Login Attempt Location Info</h4>
										<table style='width: 100%; border-collapse: collapse; font-size: 13px; margin-bottom: 12px;'>
											<tr class='responsive-tr'><td class='responsive-td-label' style='padding: 5px 0; color: #15803d; font-weight: 600; width: 35%;'>Location Address:</td><td class='responsive-td-value' style='padding: 5px 0; color: #0f172a; font-weight: 500; line-height: 1.4; word-break: break-word;'>" . (!empty($address) ? htmlspecialchars($address) : 'N/A') . "</td></tr>
											<tr class='responsive-tr'><td class='responsive-td-label' style='padding: 5px 0; color: #15803d; font-weight: 600;'>Lat & Long Coords:</td><td class='responsive-td-value' style='padding: 5px 0; color: #0f172a; font-weight: 600; word-break: break-word;'><code>" . (!empty($latitude) ? $latitude : 'N/A') . ", " . (!empty($longitude) ? $longitude : 'N/A') . "</code></td></tr>
										</table>";

					if ($maps_url !== '#') {
						$message .= "<div style='text-align: left; margin-top: 8px;'>";
						$message .= "<a href='$maps_url' target='_blank' class='btn-maps' style='display: inline-block; background: #00964C; color: #ffffff; text-decoration: none; padding: 9px 18px; border-radius: 8px; font-size: 13px; font-weight: 600; box-shadow: 0 3px 10px rgba(0,150,76,0.25); word-break: break-word;'>🗺️ Open Location on Google Maps</a>";
						$message .= "</div>";
					}
					$message .= "</div>";

					// Warning Box
					$message .= "<div style='background: #fff7ed; border: 1px solid #ffedd5; border-radius: 10px; padding: 14px 16px; text-align: left;'>";
					$message .= "<p style='color: #c2410c; margin: 0; font-size: 12px; line-height: 1.5;'><strong>⚠️ Security Notice:</strong> If you did not initiate this login request on digicoders.in Admin Panel, please change your password immediately and inform the system administrator.</p>";
					$message .= "</div>";
					$message .= "</div>";

					// Footer
					$message .= "<div style='background: #f8fafc; padding: 20px; text-align: center; border-top: 1px solid #e2e8f0;'>";
					$message .= "<p style='color: #94a3b8; font-size: 12px; margin: 0;'>This is an automated security email from digicoders.in Admin System.</p>";
					$message .= "<p style='color: #cbd5e1; font-size: 11px; margin-top: 6px;'>&copy; " . date('Y') . " DigiCoders Technologies. All rights reserved.</p>";
					$message .= "</div>";

					$message .= "</div></div></body></html>";

					$this->email->message($message);
					@$this->email->send();
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
