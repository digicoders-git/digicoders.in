<?php
	defined('BASEPATH') or exit('direct access not allowrd');
	
	class Authentication extends CI_Controller
	{
		public function __construct()
		{
			date_default_timezone_set("asia/kolkata");
			parent::__construct();
			$this->data = array(
            "app_name"=>"Software Development | Website Development | Mobile Application Development | Digital Marketing | Summer Training | Internship | Apprenticeship",
            "date" => date('Y-m-d'),
            "time" =>date('h:i:sA'),
            "mobile_no"=> "9198483820",
            "telephone_no"=> "0522-4235604",
            "email"=> "info@digicoders.in"
            
			
			);
		}
		
		public function AdminLogin()
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
