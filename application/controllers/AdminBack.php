<?php
	defined('BASEPATH') or exit('No direct script access allowed');
	
	class Admin extends MY_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			
			if ($this->session->userdata('AdminEmail') && $this->session->userdata('AdminEmail')) {
				} else {
				redirect(base_url('Home/Login'));
			}
		}
		
		
		
		public function Test()
		{
			// $res = $this->db->query("UPDATE `transaction` SET `type`='paid',`date`='15-12-2022' WHERE txn_id='TXN167282882243620'");
			$res = $this->db->query("CREATE TABLE `blog` (`id` INT(10) NOT NULL AUTO_INCREMENT , `image` VARCHAR(100) NOT NULL , `Blog_date` VARCHAR(100) NOT NULL , `title` VARCHAR(100) NOT NULL , `short_discription` VARCHAR(100) NOT NULL , `full_discription` VARCHAR(100) NOT NULL , `status` VARCHAR(100) NOT NULL , `date` VARCHAR(100) NOT NULL , `time` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
			
			//$res = $this->db->get('state_applicant')->result();
			
			echo "<pre>";
			var_dump($res);
			die();
			
			
			// $output['data'] = $res;
			// echo json_encode([$output], JSON_UNESCAPED_UNICODE);
			
		}
		
		//Admin Proifile
		public function profile(){
			$data['userdata'] = $this->db->get('admin_login')->result();
			$data['logindata'] = $this->db->order_by('id', 'desc')->get('tbl_adminlogindetails')->result();
			$this->load->view('Admin/Profile',$data);
		}
		//Change Password
		public function ManagePassword()
		{
			if ($this->uri->segment(3)) {
				if ($this->uri->segment(3) == 'ChangePassword')
				{
					$this->form_validation->set_rules('oldPassword', 'Old Password', 'required');
					$this->form_validation->set_rules('newPassword', 'New Password', 'required');
					$this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required');
					if ($this->form_validation->run() == false)
					{
						echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
					} 
					else
					{
						$oldPassword =   $this->input->post('oldPassword');
						$oldPassword = md5($oldPassword);
						$confirmPassword =   $this->input->post('confirmPassword');
						$newPassword =  $this->input->post('newPassword');
						if($confirmPassword == $newPassword)
						{
							$newPassword = md5($newPassword);
							//select data form table 
							$query = $this->db->get_where('admin_login',array("password"=>$oldPassword));
							if($query->num_rows()>0)
							{
								$data_arr = array(
								"password" => $newPassword
								);
								
								if($this->db->update('admin_login', $data_arr))
								{
									echo json_encode(array("status" => "success", "msg" => "Password Successfully Changed.", "title" => "Changed!", "reload" => "true", "redirect" => 'false'));
								}
								else
								{
									echo json_encode(array("status" => "error", "msg" => "Something Went Wrong.", "title" => "Error!", "reload" => "false", "redirect" => 'false'));
								}
							}
							else
							{
								echo json_encode(array("status" => "error", "msg" => "Try ! Again , Old Password Not Matched.", "title" => "Error!", "reload" => "false", "redirect" => 'false'));
							}
							
						}
						else
						{
							//    echo "confirm password not match";
							echo json_encode(array("status" => "error", "msg" => "Confirm Password not matched", "title" => "Try ! Again, Confirm Password not match.", "reload" => "false", "redirect" => 'false'));
						}
					}
				}
			}
			else
			{
				$this->load->view('Admin/ChangePassword');
			}
		}
		
		public function Dashboard()
		{
			$data['proposalreq'] = $this->db->get('proposal_req')->num_rows();
			$data['contact'] = $this->db->get('contact')->num_rows();
			$data['career'] = $this->db->get('career')->num_rows();
			$data['quickenq'] = $this->db->get('quick_enquiry')->num_rows();
			$data['projects'] = $this->db->get('projects')->num_rows();
			$data['Blog'] = $this->db->get('blog')->num_rows();
			$data['clientlist'] = $this->db->get('client')->num_rows();
			$data['joblist'] = $this->db->get('jobs')->num_rows();
			$data['experts'] = $this->db->get('expert')->num_rows();
			$data['callbackreq'] = $this->db->get('call_request')->num_rows();
			$data['gallery'] = $this->db->get('gallery')->num_rows();
			$data['news'] = $this->db->get('news')->num_rows();
			$this->load->view('Admin/Dashboard', $data);
		}
		
		//manage Job
		public function ManageJob()
		{
			$data['userdata'] = $this->db->order_by('id', 'desc')->get('jobs')->result();
			
			if ($this->uri->segment(3)) {
				if ($this->uri->segment(3) == 'Add') {
					$this->form_validation->set_rules('title', 'Email', 'required');
					$this->form_validation->set_rules('profile', 'Profile', 'required');
					$this->form_validation->set_rules('location', 'Location', 'required');
					$this->form_validation->set_rules('salary', 'Salary', 'required');
					$this->form_validation->set_rules('eligibility', 'Eligibility', 'required');
					$this->form_validation->set_rules('skill', 'Skill', 'required');
					$this->form_validation->set_rules('experience', 'Experience', 'required');
					$this->form_validation->set_rules('discription', 'Discription', 'required');
					
					if ($this->form_validation->run() == false) {
						// echo "form validation failed";
						echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
						} else {
						$data_arr = array(
						"title" => $this->input->post('title'),
						"job_profile" => $this->input->post('profile'),
						"location" => $this->input->post('location'),
						"salary" => $this->input->post('salary'),
						"eligibility" => $this->input->post('eligibility'),
						"skills" => $this->input->post('skill'),
						"experience" => $this->input->post('experience'),
						"description" => $this->input->post('discription'),
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
						);
						
						if ($this->db->insert('jobs', $data_arr)) {
							echo json_encode(array("status" => "success", "msg" => "Job Added successfully.", "title" => "Created", "reload" => "true", "redirect" => 'false'));
							} else {
							echo json_encode(array("status" => "error", "msg" => "Something Went Wrong .", "title" => "", "reload" => "true", "redirect" => 'false'));
						}
					}
				}
				if ($this->uri->segment(3) == 'EditJob') {
					$this->form_validation->set_rules('id', 'ID', 'required');
					$this->form_validation->set_rules('title', 'Email', 'required');
					$this->form_validation->set_rules('profile', 'Profile', 'required');
					$this->form_validation->set_rules('location', 'Location', 'required');
					$this->form_validation->set_rules('salary', 'Salary', 'required');
					$this->form_validation->set_rules('eligibility', 'Eligibility', 'required');
					$this->form_validation->set_rules('skill', 'Skill', 'required');
					$this->form_validation->set_rules('experience', 'Experience', 'required');
					$this->form_validation->set_rules('discription', 'Discription', 'required');
					
					if ($this->form_validation->run() == false) {
						echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
						} else {
						
						$userdata = $this->db->get_where('jobs', array('id' => $this->input->post('id')))->row();
						
						
						$data_arr = array(
						"title" => $this->input->post('title'),
						"job_profile" => $this->input->post('profile'),
						"location" => $this->input->post('location'),
						"salary" => $this->input->post('salary'),
						"eligibility" => $this->input->post('eligibility'),
						"skills" => $this->input->post('skill'),
						"experience" => $this->input->post('experience'),
						"description" => $this->input->post('discription'),
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
						);
						
						if ($this->db->where('id', $userdata->id)->update('jobs', $data_arr)) {
							$this->session->set_flashdata("status", "success");
							$this->session->set_flashdata("msg", "Job Successfully Updated");
							redirect(base_url('Admin/ManageJob'));
							// echo json_encode(array("status" => "success", "msg" => " Job successfully Updated.", "title" => "Created", "reload" => "true", "redirect" => 'false'));
							} else {
							$this->session->set_flashdata("status", "error");
							$this->session->set_flashdata("msg", "Something Went Wrong");
							redirect(base_url('Admin/ManageJob'));
							// echo json_encode(array("status" => "error", "msg" => "Something Went Wrong .", "title" => "", "reload" => "true", "redirect" => 'false'));
						}
					}
				}
				} else {
				$this->load->view('Admin/AllJobList', $data);
			}
		}
		
		//Manage Projects
		public function ManageProject()
		{
			
			$data['userdata'] = $this->db->order_by('id', 'desc')->get('projects')->result();
			
			if ($this->uri->segment(3)) 
			{
				if ($this->uri->segment(3) == 'Add') 
				{
					$this->form_validation->set_rules('type', 'Type', 'required');
					$this->form_validation->set_rules('project_name', 'Title', 'required|is_unique[projects.title]');
					$this->form_validation->set_rules('date', 'Date', 'required');
					$this->form_validation->set_rules('link', 'Link', 'required');
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'Image', 'required');
					}
					
					if ($this->form_validation->run() == false) {
						echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
						} else {
						
						$upload_status = 'true';
						$ext  = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
						$slug = url_title($this->input->post('title') ?: ($this->input->post('name') ?: ($this->input->post('project_name') ?: 'upload')), '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;
						
						$config['upload_path'] = './public/uploads/projects/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';


						$config['max_size'] = 100; // In KB
						$filesize = $config['max_size'];
						$config['file_name'] = $filename;
						$this->load->library('upload', $config);
						
						if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
						$upload_error = strip_tags($this->upload->display_errors());
					}
						
						$data_arr = array(
						"type" => $this->input->post('type'),
						"title" => $this->input->post('project_name'),
						"add_date" => $this->input->post('date'),
						"url" => $this->input->post('link'),
						"image" => $filename,
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
						);
						
						if ($upload_status != 'false') {
							if ($this->db->insert('projects', $data_arr)) {
								echo json_encode(array("status" => "success", "msg" => "Project Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
								// echo "success";
								} else {
								echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
								// echo "failed";
							}
							} else {
							echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
							// echo "upload status false";
						}
					}
					
				}
				elseif ($this->uri->segment(3) == 'Edit') 
				{
					// echo "ok";die();
					$this->form_validation->set_rules('id', 'ID', 'required');
					$this->form_validation->set_rules('type', 'Type', 'required');
					$this->form_validation->set_rules('project_name', 'Title', 'required');
					$this->form_validation->set_rules('date', 'Date', 'required');
					$this->form_validation->set_rules('link', 'Link', 'required');
					
					if ($this->form_validation->run() == false) {
						echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
					} else {
						$userdata = $this->db->get_where('projects', array('id' => $this->input->post('id')))->row();
						$img = $userdata->image;
						$upload_status = 'true';
						$filename = $img;

						if (!empty($_FILES['image']['name'])) {
							$ext  = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
							$slug = url_title($this->input->post('title') ?: ($this->input->post('name') ?: ($this->input->post('project_name') ?: 'upload')), '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;
							
							$config['upload_path'] = './public/uploads/projects/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';


							$config['max_size'] = 100; // In KB
							$filesize = $config['max_size'];
							$config['file_name'] = $filename;
							$this->load->library('upload', $config);
							
							if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
						$upload_error = strip_tags($this->upload->display_errors());
					} else {
								$upload_status = 'true';
							}
						}
						
						$data_arr = array(
							"type" => $this->input->post('type'),
							"title" => $this->input->post('project_name'),
							"add_date" => $this->input->post('date'),
							"url" => $this->input->post('link'),
							"image" => $filename,
							"status" => 'true',
							"date" => $this->data['date'],
							"time" => $this->data['time']
						);
						
						if ($upload_status == 'true') {
							$table_name = "projects";
							$unlink_filename = $img;
							$unlink_folder = "projects";
							if ($this->db->where('id', $userdata->id)->update('projects', $data_arr)) {
								if ($filename != $img && !empty($img)) {
									$file_path = './public/uploads/' . $unlink_folder . '/' . $unlink_filename;
									if (file_exists($file_path)) {
										@unlink($file_path);
									}
								}
								$this->session->set_flashdata("status", "success");
								$this->session->set_flashdata("msg", "Project Successfully Updated");
								redirect(base_url('Admin/ManageProject'));
							} else {
								$this->session->set_flashdata("status", "error");
								$this->session->set_flashdata("msg", "Something Went Wrong");
								redirect(base_url('Admin/ManageProject'));
							}
						} else {
							echo json_encode(array("status" => "error", "msg" => "Image Upload Failed", "title" => "Upload Error!", "reload" => "false", "redirect" => 'false'));
						}
					}
				}
			} 
			else 
			{
				$this->load->view('Admin/AllprojectList', $data);
			}
		}
		
		
		
		
		//Manage Blog
		public function ManageBlog()
		{
			
			$data['userdata'] = $this->db->order_by('id', 'desc')->get('blog')->result();
			
			
			if ($this->uri->segment(3)) {
				if ($this->uri->segment(3) == 'Add') {
					$this->form_validation->set_rules('discription', 'discription', 'required');
					$this->form_validation->set_rules('date', 'date', 'required');
					$this->form_validation->set_rules('title', 'title', 'required');
					$this->form_validation->set_rules('short_discription', 'short_discription', 'required');
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'image', 'required');
					}
					
					if ($this->form_validation->run() == false) {
						echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
						} else {
						
						$upload_status = 'true';
						$ext  = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
						$slug = url_title($this->input->post('title') ?: ($this->input->post('name') ?: ($this->input->post('project_name') ?: 'upload')), '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;
						
						$config['upload_path'] = './public/uploads/Blog/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';


						$config['max_size'] = 100; // In KB
						$filesize = $config['max_size'];
						$config['file_name'] = $filename;
						$this->load->library('upload', $config);
						
						if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
						$upload_error = strip_tags($this->upload->display_errors());
					}
						
						$data_arr = array(
						
						"Blog_date" => $this->input->post('date'),
						"title" => $this->input->post('title'),
						"short_discription" => $this->input->post('short_discription'),
						"full_discription" => $this->input->post('discription'),
						"image" => $filename,
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
						);
						
						if ($upload_status != 'false') {
							if ($this->db->insert('blog', $data_arr)) {
								echo json_encode(array("status" => "success", "msg" => "Blog Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
								// echo "success";
								} else {
								echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
								// echo "failed";
							}
							} else {
							echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
							// echo "upload status false";
						}
					}
				}
				
				if ($this->uri->segment(3) == 'Edit') {
					$this->form_validation->set_rules('discription', 'discription', 'required');
					$this->form_validation->set_rules('date', 'date', 'required');
					$this->form_validation->set_rules('title', 'title', 'required');
					$this->form_validation->set_rules('short_discription', 'short_discription', 'required');
					
					if ($this->form_validation->run() == false) {
						echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
					}  else {
						$userdata = $this->db->get_where('blog', array('id' => $this->input->post('id')))->row();
						$img = $userdata->image;
						$upload_status = 'true';
						$filename = $img;

						if (!empty($_FILES['image']['name'])) {
							$ext  = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
							$slug = url_title($this->input->post('title') ?: ($this->input->post('name') ?: ($this->input->post('project_name') ?: 'upload')), '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;
							
							$config['upload_path'] = './public/uploads/Blog/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';


							$config['max_size'] = 100; // In KB
							$filesize = $config['max_size'];
							$config['file_name'] = $filename;
							$this->load->library('upload', $config);
							
							if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
						$upload_error = strip_tags($this->upload->display_errors());
					} else {
								$upload_status = 'true';
							}
						}
						
						$data_arr = array(
							"Blog_date" => $this->input->post('Blog_date'),
							"title" => $this->input->post('title'),
							"short_discription" => $this->input->post('short_discription'),
							"full_discription" => $this->input->post('full_discription'),
							"image" => $filename,
							"status" => 'true',
							"date" => $this->data['date'],
							"time" => $this->data['time']
						);
						
						if ($upload_status == 'true') {
							$table_name = "blog";
							$unlink_filename = $img;
							$unlink_folder = "Blog";
							if ($this->db->where('id', $userdata->id)->update('blog', $data_arr)) {
								if ($filename != $img && !empty($img)) {
									$file_path = './public/uploads/' . $unlink_folder . '/' . $unlink_filename;
									if (file_exists($file_path)) {
										@unlink($file_path);
									}
								}
								$this->session->set_flashdata("status", "success");
								$this->session->set_flashdata("msg", "Blog Successfully Updated");
								redirect(base_url('Admin/ManageBlog'));
							} else {
								$this->session->set_flashdata("status", "error");
								$this->session->set_flashdata("msg", "Something Went Wrong");
								redirect(base_url('Admin/ManageBlog'));
							}
						} else {
							echo json_encode(array("status" => "error", "msg" => "Image Upload Failed", "title" => "Upload Error!", "reload" => "false", "redirect" => 'false'));
						}
					}
				}
				} else {
				$this->load->view('Admin/Blog', $data);
			}
		}
		
		
		
		//manage Client
		public function ManageClient()
		{
			$data['userdata'] = $this->db->order_by('id', 'desc')->get('client')->result();
			
			if ($this->uri->segment(3)) {
				if ($this->uri->segment(3) == 'Add') {
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'Image', 'required');
						} else {
						$ext  = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
						$slug = url_title($this->input->post('title') ?: ($this->input->post('name') ?: ($this->input->post('project_name') ?: 'upload')), '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;
						
						$config['upload_path'] = './public/uploads/client/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';


						$config['max_size'] = 100; // In KB
							$filesize = $config['max_size'];
							$config['file_name'] = $filename;
							
							$this->load->library('upload', $config);
							
							if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
						$upload_error = strip_tags($this->upload->display_errors());
					} else {
								$upload_status = "true";
							}
						}
						
						$data_arr = array(
							"image" => $filename,
							"status" => 'true',
							"date" => $this->data['date'],
							"time" => $this->data['time']
						);
						
						if ($upload_status == 'true') {
							$table_name = "client";
							$unlink_filename = $img;
							$unlink_folder = "client";
							if ($this->db->where('id', $userdata->id)->update('client', $data_arr)) {
								if ($filename != $img && !empty($img)) {
									$file_path = './public/uploads/' . $unlink_folder . '/' . $unlink_filename;
									if (file_exists($file_path)) {
										@unlink($file_path);
									}
								}
								$this->session->set_flashdata("status", "success");
								$this->session->set_flashdata("msg", "Client Update Successfull");
								redirect(base_url('Admin/ManageClient'));
							} else {
								$this->session->set_flashdata("status", "error");
								$this->session->set_flashdata("msg", "Something Went Wrong");
								redirect(base_url('Admin/ManageClient'));
							}
						} else {
							echo json_encode(array("status" => "error", "msg" => "Image Upload Failed", "title" => "Upload Error!", "reload" => "false", "redirect" => 'false'));
						}
					}
				}
			} 
			else {
				$this->load->view('Admin/OurClient', $data);
			}
		}
		//Manage Experts
		public function ManageExpertList()
		{
			$data['userdata'] = $this->db->order_by('id', 'desc')->get('expert')->result();
			if ($this->uri->segment(3)) {
				if ($this->uri->segment(3) == 'Add') {
					$this->form_validation->set_rules('name', 'Name', 'required');
					$this->form_validation->set_rules('role', 'Role', 'required');
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'Image', 'required');
					}
					
					if ($this->form_validation->run() == false) {
						echo json_encode(array("status" => "error", "msg" => "Validatino Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
						} else {
						$upload_status = 'true';
						$ext  = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
						$slug = url_title($this->input->post('title') ?: ($this->input->post('name') ?: ($this->input->post('project_name') ?: 'upload')), '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;
						
						$config['upload_path'] = './public/uploads/expert/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';


						$config['max_size'] = 100; // In KB
						$filesize = $config['max_size'];
						$config['file_name'] = $filename;
						$this->load->library('upload', $config);
						
						if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
						$upload_error = strip_tags($this->upload->display_errors());
					} else {
							$upload_status = "true";
						}
						
						$data_arr = array(
						"name" => $this->input->post('name'),
						"role" => $this->input->post('role'),
						"image" => $filename,
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
						);
						
						if ($upload_status == "true") {
							if ($this->db->insert('expert', $data_arr)) {
								echo json_encode(array("status" => "success", "msg" => "Expert Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
								// echo "success";
								} else {
								echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
								// echo "failed";
							}
						}
					}
				}
				if ($this->uri->segment(3) == 'Edit') {
					$this->form_validation->set_rules('id', 'ID', 'required');
					$this->form_validation->set_rules('name', 'Name', 'required');
					$this->form_validation->set_rules('role', 'Role', 'required');
					if ($this->form_validation->run() == false) {
						echo json_encode(array("status" => "error", "msg" => "Validatino Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
					} else {
						$userdata = $this->db->get_where('expert', array('id' => $this->input->post('id')))->row();
						$img = $userdata->image;
						$upload_status = 'true';
						$filename = $img;

						if (!empty($_FILES['image']['name'])) {
							$ext  = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
							$slug = url_title($this->input->post('title') ?: ($this->input->post('name') ?: ($this->input->post('project_name') ?: 'upload')), '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;
							
							$config['upload_path'] = './public/uploads/expert/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';


							$config['max_size'] = 100; // In KB
							$filesize = $config['max_size'];
							$config['file_name'] = $filename;
							$this->load->library('upload', $config);
							
							if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
						$upload_error = strip_tags($this->upload->display_errors());
					} else {
								$upload_status = "true";
							}
						}
						
						$data_arr = array(
							"name" => $this->input->post('name'),
							"role" => $this->input->post('role'),
							"image" => $filename,
							"status" => 'true',
							"date" => $this->data['date'],
							"time" => $this->data['time']
						);
						
						if ($upload_status == 'true') {
							$table_name = "expert";
							$unlink_filename = $img;
							$unlink_folder = "expert";
							if ($this->db->where('id', $userdata->id)->update('expert', $data_arr)) {
								if ($filename != $img && !empty($img)) {
									$file_path = './public/uploads/' . $unlink_folder . '/' . $unlink_filename;
									if (file_exists($file_path)) {
										@unlink($file_path);
									}
								}
								$this->session->set_flashdata("status", "success");
								$this->session->set_flashdata("msg", "Expert Successfully Updated");
								redirect(base_url('Admin/ManageExpertList'));
							} else {
								$this->session->set_flashdata("status", "error");
								$this->session->set_flashdata("msg", "Something Went Wrong");
								redirect(base_url('Admin/ManageExpertList'));
							}
						} else {
							echo json_encode(array("status" => "error", "msg" => "Image Upload Failed", "title" => "Upload Error!", "reload" => "false", "redirect" => 'false'));
						}
					}
				}
				} else {
				$this->load->view('Admin/OurExperts', $data);
			}
		}
		
		//Manage News
		public function ManageNews()
		{
			$data['userdata'] = $this->db->order_by('id', 'desc')->get('news')->result();
			
			if ($this->uri->segment(3)) {
				if ($this->uri->segment(3) == 'Add') {
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'Image', 'required');
						} else {
						$ext  = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
						$slug = url_title($this->input->post('title') ?: ($this->input->post('name') ?: ($this->input->post('project_name') ?: 'upload')), '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;
						
						$config['upload_path'] = './public/uploads/news/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';


						$config['max_size'] = 100; // In KB
						$filesize = $config['max_size'];
						$config['file_name'] = $filename;
						$this->load->library('upload', $config);
						
						if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
						$upload_error = strip_tags($this->upload->display_errors());
					} else {
							$upload_status = "true";
						}
						
						$data_arr = array(
						"image" => $filename,
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
						);
						
						if ($upload_status == 'true') {
							if ($this->db->insert('news', $data_arr)) {
								echo json_encode(array("status" => "success", "msg" => "News Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
								// echo "success";
								} else {
								echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
								// echo "failed";
							}
							} else {
							echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
						}
					}
				}
				if ($this->uri->segment(3) == 'Edit') {
					$this->form_validation->set_rules('id', 'ID', 'required');
					if ($this->form_validation->run() == false) {
						echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
					} else {
						$userdata = $this->db->get_where('news', array('id' => $this->input->post('id')))->row();
						$img = $userdata->image;
						$upload_status = 'true';
						$filename = $img;

						if (!empty($_FILES['image']['name'])) {
							$ext  = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
							$slug = url_title($this->input->post('title') ?: ($this->input->post('name') ?: ($this->input->post('project_name') ?: 'upload')), '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;
							
							$config['upload_path'] = './public/uploads/news/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';


							$config['max_size'] = 100; // In KB
							$filesize = $config['max_size'];
							$config['file_name'] = $filename;
							$this->load->library('upload', $config);
							
							if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
						$upload_error = strip_tags($this->upload->display_errors());
					} else {
								$upload_status = "true";
							}
						}
						
						$data_arr = array(
							"image" => $filename,
							"status" => 'true',
							"date" => $this->data['date'],
							"time" => $this->data['time']
						);
						
						if ($upload_status == 'true') {
							$table_name = "news";
							$unlink_filename = $img;
							$unlink_folder = "news";
							if ($this->db->where('id', $userdata->id)->update('news', $data_arr)) {
								if ($filename != $img && !empty($img)) {
									$file_path = './public/uploads/' . $unlink_folder . '/' . $unlink_filename;
									if (file_exists($file_path)) {
										@unlink($file_path);
									}
								}
								$this->session->set_flashdata("status", "success");
								$this->session->set_flashdata("msg", "News Successfully Updated");
								redirect(base_url('Admin/ManageNews'));
							} else {
								$this->session->set_flashdata("status", "error");
								$this->session->set_flashdata("msg", "Something Went Wrong");
								redirect(base_url('Admin/ManageNews'));
							}
						} else {
							echo json_encode(array("status" => "error", "msg" => "Image Upload Failed", "title" => "Upload Error!", "reload" => "false", "redirect" => 'false'));
						}
					}
				}
				} else {
				$this->load->view('Admin/NewsList', $data);
			}
		}
		
		//Manage Contact
		public function ManageContact()
		{
			$data['userdata'] = $this->db->order_by('id', 'desc')->get('contact')->result();
			if ($this->uri->segment(3)) {
				if ($this->uri->segment(3) == 'Add') {
				}
				} else {
				$this->load->view('Admin/ContactList', $data);
			}
		}
		//manage gallery
		public function ManageGallery()
		{
			$data['userdata'] = $this->db->order_by('id', 'desc')->get('gallery')->result();
			if ($this->uri->segment(3)) {
				if ($this->uri->segment(3) == 'Add') {
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'Image', 'required');
						} else {
						$ext  = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
						$slug = url_title($this->input->post('title') ?: ($this->input->post('name') ?: ($this->input->post('project_name') ?: 'upload')), '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;
						
						$config['upload_path'] = './public/uploads/gallery/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';


						$config['max_size'] = 100; // In KB
						$filesize = $config['max_size'];
						$config['file_name'] = $filename;
						$this->load->library('upload', $config);
						
						if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
						$upload_error = strip_tags($this->upload->display_errors());
					} else {
							$upload_status = "true";
						}
						
						$data_arr = array(
						"image" => $filename,
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
						);
						
						if ($upload_status == 'true') {
							if ($this->db->insert('gallery', $data_arr)) {
								echo json_encode(array("status" => "success", "msg" => "Picture Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
								// echo "success";
								} else {
								echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
								// echo "failed";
							}
							} else {
							echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
						}
					}
				}
				if ($this->uri->segment(3) == 'Edit') {
					$this->form_validation->set_rules('id', 'ID', 'required');
					if ($this->form_validation->run() == false) {
						echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
					} else {
						$userdata = $this->db->get_where('gallery', array('id' => $this->input->post('id')))->row();
						$img = $userdata->image;
						$upload_status = 'true';
						$filename = $img;

						if (!empty($_FILES['image']['name'])) {
							$ext  = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
							$slug = url_title($this->input->post('title') ?: ($this->input->post('name') ?: ($this->input->post('project_name') ?: 'upload')), '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;
							
							$config['upload_path'] = './public/uploads/gallery/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';


							$config['max_size'] = 100; // In KB
							$filesize = $config['max_size'];
							$config['file_name'] = $filename;
							$this->load->library('upload', $config);
							
							if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
						$upload_error = strip_tags($this->upload->display_errors());
					} else {
								$upload_status = "true";
							}
						}
						
						$data_arr = array(
							"image" => $filename,
							"status" => 'true',
							"date" => $this->data['date'],
							"time" => $this->data['time']
						);
						
						if ($upload_status == 'true') {
							$table_name = "gallery";
							$unlink_filename = $img;
							$unlink_folder = "gallery";
							if ($this->db->where('id', $userdata->id)->update('gallery', $data_arr)) {
								if ($filename != $img && !empty($img)) {
									$file_path = './public/uploads/' . $unlink_folder . '/' . $unlink_filename;
									if (file_exists($file_path)) {
										@unlink($file_path);
									}
								}
								$this->session->set_flashdata("status", "success");
								$this->session->set_flashdata("msg", "Picture Successfully Updated");
								redirect(base_url('Admin/ManageGallery'));
							} else {
								$this->session->set_flashdata("status", "error");
								$this->session->set_flashdata("msg", "Something Went Wrong");
								redirect(base_url('Admin/ManageGallery'));
							}
						} else {
							echo json_encode(array("status" => "error", "msg" => "Image Upload Failed", "title" => "Upload Error!", "reload" => "false", "redirect" => 'false'));
						}
					}
				}
				} else {
				$this->load->view('Admin/Gallery', $data);
			}
		}
		
		//Manage Career
		public function ManageCareer()
		{
			$data['userdata'] = $this->db->order_by('id', 'desc')->get('career')->result();
			if ($this->uri->segment(3)) {
				if ($this->uri->segment(3) == 'Delete') {
				}
				} else {
				$this->load->view('Admin/Career', $data);
			}
		}
		
		//Manage call back request
		public function ManageCallBackReq()
		{
			$data['userdata'] = $this->db->order_by('id', 'desc')->get('call_request')->result();
			
			$this->load->view('Admin/CallBackReq', $data);
		}
		//Manage Enquiry
		public function ManageEnquiry()
		{
			$data['userdata'] = $this->db->order_by('id', 'desc')->get('quick_enquiry')->result();
			
			$this->load->view('Admin/QuickEnquiry', $data);
		}
		//Manage Proposal Request
		public function ManageProposalReq()
		{
			$data['userdata'] = $this->db->order_by('id', 'desc')->get('proposal_req')->result();
			
			$this->load->view('Admin/ProposalReq', $data);
		}
		
		//Delete with files
		public function deleteWithFilename()
		{
			if ($this->input->post()) {
				$data = $this->input->post();
				$id = $data['id'];
				$table_name = $data['tablename'];
				$unlink_filename = $data['filename'];
				$unlink_folder = $data['tablename'];

				if ($table_name == 'productcost') {
					$unlink_folder = 'product';
				}
				if ($table_name == 'intern') {
					$unlink_folder = 'expert';
				}
				if ($table_name == 'slider') {
					$unlink_folder = 'sliders';
				}
				if ($table_name == 'blog') {
					$unlink_folder = 'Blog';
				}

				// Also fetch the file name from the database before deleting, in case the posted one is empty or mismatching
				$item = $this->db->get_where($table_name, array('id' => $id))->row();
				$db_filename = '';
				if ($item) {
					$file_mappings = array(
						'projects' => 'image',
						'blog' => 'image',
						'client' => 'image',
						'slider' => 'image',
						'expert' => 'image',
						'intern' => 'image',
						'productcost' => 'img',
						'news' => 'image',
						'gallery' => 'image',
						'career' => 'resume'
					);
					if (isset($file_mappings[$table_name])) {
						$field = $file_mappings[$table_name];
						$db_filename = $item->$field;
					}
				}

				if ($this->db->where('id', $id)->delete($table_name)) {
					// Delete the posted file name
					if (!empty($unlink_filename)) {
						$file_path = './public/uploads/' . $unlink_folder . '/' . $unlink_filename;
						if (file_exists($file_path)) {
							@unlink($file_path);
						}
					}
					// Delete the database-registered file name if different
					if (!empty($db_filename) && $db_filename !== $unlink_filename) {
						$file_path2 = './public/uploads/' . $unlink_folder . '/' . $db_filename;
						if (file_exists($file_path2)) {
							@unlink($file_path2);
						}
					}
					echo json_encode(array("status" => "success", "msg" => "Item Successfully Deleted", "title" => "Successfully Deleted!", "reload" => "true", "redirect" => 'false'));
				} else {
					echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
				}
			}
		}

		//Delete
		public function Delete()
		{
			$id = $this->input->post('id');
			$table = $this->input->post('table');

			// Fetch the item first to get the filename if any before deleting it
			$item = $this->db->get_where($table, array('id' => $id))->row();
			if ($item) {
				$file_mappings = array(
					'projects' => array('field' => 'image', 'folder' => 'projects'),
					'blog' => array('field' => 'image', 'folder' => 'Blog'),
					'client' => array('field' => 'image', 'folder' => 'client'),
					'slider' => array('field' => 'image', 'folder' => 'sliders'),
					'expert' => array('field' => 'image', 'folder' => 'expert'),
					'intern' => array('field' => 'image', 'folder' => 'expert'),
					'productcost' => array('field' => 'img', 'folder' => 'product'),
					'news' => array('field' => 'image', 'folder' => 'news'),
					'gallery' => array('field' => 'image', 'folder' => 'gallery'),
					'career' => array('field' => 'resume', 'folder' => 'career')
				);

				if (isset($file_mappings[$table])) {
					$mapping = $file_mappings[$table];
					$field = $mapping['field'];
					$folder = $mapping['folder'];
					if (!empty($item->$field)) {
						$file_path = './public/uploads/' . $folder . '/' . $item->$field;
						if (file_exists($file_path)) {
							@unlink($file_path);
						}
					}
				}
			}

			if ($this->db->where('id', $id)->delete($table)) {
				echo json_encode(array("status" => "success", "msg" => "Successfully Deleted.", "title" => "Success", "reload" => "true", "redirect" => 'false'));
			} else {
				echo json_encode(array("status" => "error", "msg" => "Something Went Wrong .", "title" => "", "reload" => "true", "redirect" => 'false'));
			}
		}
		
		//Delete Data
		public function EditData()
		{
			$table = $this->uri->segment(3);
			$id = $this->uri->segment(4);
			$arr = [];
			if (empty($table) && empty($id)) {
				$arr['res'] = "error";
				$arr['msg'] = "Something went wrong!";
				} else {
				$userdata = $this->db->get_where($table, array('id' => $id));
				
				if ($userdata->num_rows()) {
					$data['table'] = $table;
					$data['userdata'] = $userdata->row();
					
					$this->load->view('Admin/Modal', $data);
					
					} else {
					$arr['res'] = "error";
					$arr['msg'] = "No data found!";
				}
			}
		}
		
		//Change Statuts
		public function ChangeStatus()
		{
			if ($this->input->post()) {
				$data = $this->input->post();
				$id = $data['id'];
				$status = $data['status'];
				$table_name = $data['tablename'];
				if ($status == 'true') {
					$status = 'false';
					} else {
					$status = 'true';
				}
				
				$data_arr = array(
				"status" => $status,
				);
				
				$this->db->where('id', $id);
				if ($this->db->update($table_name, $data_arr)) {
					echo json_encode(array("status" => "success", "msg" => "Status Successfully Chamged.", "title" => "Changed", "reload" => "true", "redirect" => 'false'));
					} else {
					echo json_encode(array("status" => "error", "msg" => "Something Went Wrong .", "title" => "", "reload" => "true", "redirect" => 'false'));
				}
			}
		}
	}
