<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		// Model load
		$this->load->model('Service_model');

		// Admin login check
		if (!$this->session->userdata('AdminEmail')) {
			redirect(base_url('Home/Login'));
		}

		// Check if password verified (for 2nd step)
		if (!$this->session->userdata('Password_Verified')) {
			$this->show_password_modal = true;
		} else {
			$this->show_password_modal = false;
		}

		date_default_timezone_set("Asia/Kolkata");
		$this->data = array(
			"app_name" => "Software Development | Website Development | Mobile Application Development | Digital Marketing | Summer Training | Internship | Apprenticeship",
			"date" => date('Y-m-d'),
			"time" => date('h:i:s A'),
			"mobile_no" => "9198483820",
			"telephone_no" => "0522-4235604",
			"email" => "info@digicoders.in",
			"show_password_modal" => $this->show_password_modal
		);
	}

	public function addpage()
	{
		if ($_POST) {
			// Slug generate
			$slug = url_title(
				$this->input->post('service_name') . '-development-in-' .
				$this->input->post('city_name'),
				'-',
				TRUE
			);

			// Slug duplicate check (optional but safe)
			$exists = $this->db
				->where('url_slug', $slug)
				->get('seo_pages')
				->num_rows();

			if ($exists > 0) {
				$slug = $slug . '-' . time();
			}

			$data_arr = array(
				'service_name' => $this->input->post('service_name'),
				'city_name' => $this->input->post('city_name'),
				'url_slug' => $slug,
				'title' => $this->input->post('title'),
				'heading' => $this->input->post('heading'),
				'content' => $this->input->post('content'),
				'meta_description' => $this->input->post('meta_description'),
				'keywords' => $this->input->post('keywords'),
				'state_name' => $this->input->post('state_name'),
				'date' => $this->data['date'],
				'time' => $this->data['time']
			);

			if ($this->db->insert('seo_pages', $data_arr)) {
				$this->session->set_flashdata('status', 'success');
				$this->session->set_flashdata('msg', 'SEO Page Added Successfully');
				redirect(base_url('Admin/servicepage'));
			} else {
				$this->session->set_flashdata('status', 'error');
				$this->session->set_flashdata('msg', 'Something Went Wrong');
				redirect(base_url('Admin/servicepage'));
			}
		} else {
			// Form load
			$this->load->view('Admin/service_page');
		}
	}
	public function editpage()
	{
		if ($_POST) {
			$id = $this->input->post('id');

			$slug = url_title(
				$this->input->post('service_name') . '-development-in-' .
				$this->input->post('city_name'),
				'-',
				TRUE
			);

			$data_arr = array(
				'service_name' => $this->input->post('service_name'),
				'city_name' => $this->input->post('city_name'),
				'url_slug' => $slug,
				'title' => $this->input->post('title'),
				'heading' => $this->input->post('heading'),
				'content' => $this->input->post('content'),
				'meta_description' => $this->input->post('meta_description'),
				'keywords' => $this->input->post('keywords'),
				'state_name' => $this->input->post('state_name'),
				'date' => $this->data['date'],
				'time' => $this->data['time']
			);

			if ($this->db->where('id', $id)->update('seo_pages', $data_arr)) {
				$this->session->set_flashdata('status', 'success');
				$this->session->set_flashdata('msg', 'SEO Page Updated');
			} else {
				$this->session->set_flashdata('status', 'error');
				$this->session->set_flashdata('msg', 'Something Went Wrong');
			}

			redirect(base_url('Admin/servicepage'));
		} else {
			$id = $this->uri->segment(3);

			$data['userdata'] = $this->db
				->get_where('seo_pages', array('id' => $id))
				->row();

			$this->load->view('Admin/service_page', $data);
		}
	}
	public function deletepage()
	{
		$id = $this->uri->segment(3);

		if ($this->db->where('id', $id)->delete('seo_pages')) {
			$this->session->set_flashdata('status', 'success');
			$this->session->set_flashdata('msg', 'SEO Page Deleted');
		} else {
			$this->session->set_flashdata('status', 'error');
			$this->session->set_flashdata('msg', 'Delete Failed');
		}

		redirect(base_url('Admin/servicepage'));
	}

	public function servicepage()
	{
		$data['userdata'] = $this->db
			->order_by('id', 'desc')
			->get('seo_pages')
			->result();

		$data['cities'] = $this->db
			->select('id, city_name')
			->where('status', 1)
			->order_by('city_name', 'ASC')
			->get('cities')
			->result();

		$data['states'] = $this->db
			->distinct()
			->select('state_name')
			->where('status', 1)
			->order_by('state_name', 'ASC')
			->get('cities')
			->result();


		$this->load->view('Admin/service_page', $data);
	}
	public function getCitiesByState()
	{
		$state_name = $this->input->post('state_name');

		$cities = $this->db
			->select('city_name')
			->where('state_name', $state_name)
			->where('status', 1)
			->order_by('city_name', 'ASC')
			->get('cities')
			->result();

		echo json_encode($cities);
	}



	public function Test()
	{
		$res = $this->db->query("select * from intern")->result();
		echo "<pre>";
		var_dump($res);
		die();
	}




	//Admin Proifile
	public function profile()
	{
		$data['userdata'] = $this->db->get('admin_login')->result();
		$data['logindata'] = $this->db->order_by('id', 'desc')->get('tbl_adminlogindetails')->result();
		$this->load->view('Admin/Profile', $data);
	}
	//Change Password
	public function ManagePassword()
	{
		if ($this->uri->segment(3)) {
			if ($this->uri->segment(3) == 'ChangePassword') {
				$this->form_validation->set_rules('oldPassword', 'Old Password', 'required');
				$this->form_validation->set_rules('newPassword', 'New Password', 'required');
				$this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required');
				if ($this->form_validation->run() == false) {
					echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
				} else {
					$oldPassword = $this->input->post('oldPassword');
					$oldPassword = md5($oldPassword);
					$confirmPassword = $this->input->post('confirmPassword');
					$newPassword = $this->input->post('newPassword');
					if ($confirmPassword == $newPassword) {
						$newPassword = md5($newPassword);
						//select data form table 
						$query = $this->db->get_where('admin_login', array("password" => $oldPassword));
						if ($query->num_rows() > 0) {
							$data_arr = array(
								"password" => $newPassword
							);

							if ($this->db->update('admin_login', $data_arr)) {
								echo json_encode(array("status" => "success", "msg" => "Password Successfully Changed.", "title" => "Changed!", "reload" => "true", "redirect" => 'false'));
							} else {
								echo json_encode(array("status" => "error", "msg" => "Something Went Wrong.", "title" => "Error!", "reload" => "false", "redirect" => 'false'));
							}
						} else {
							echo json_encode(array("status" => "error", "msg" => "Try ! Again , Old Password Not Matched.", "title" => "Error!", "reload" => "false", "redirect" => 'false'));
						}

					} else {
						//    echo "confirm password not match";
						echo json_encode(array("status" => "error", "msg" => "Confirm Password not matched", "title" => "Try ! Again, Confirm Password not match.", "reload" => "false", "redirect" => 'false'));
					}
				}
			}
		} else {
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
		$data['sliders'] = $this->db->get('slider')->num_rows();
		$data['clientlist'] = $this->db->get('client')->num_rows();
		$data['joblist'] = $this->db->get('jobs')->num_rows();
		$data['experts'] = $this->db->get('expert')->num_rows();
		$data['interns'] = $this->db->get('intern')->num_rows();
		$data['callbackreq'] = $this->db->get('call_request')->num_rows();
		$data['gallery'] = $this->db->get('gallery')->num_rows();
		$data['news'] = $this->db->get('news')->num_rows();
		$data['products'] = $this->db->get('productcost')->num_rows();
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

		if ($this->uri->segment(3)) {
			if ($this->uri->segment(3) == 'Add') {
				$this->form_validation->set_rules('type', 'Type', 'required');
				$this->form_validation->set_rules('project_name', 'Title', 'required|is_unique[projects.title]');
				$this->form_validation->set_rules('date', 'Date', 'required');
				// $this->form_validation->set_rules('link', 'Link', 'required');
				if (empty($_FILES['image']['name'])) {
					$this->form_validation->set_rules('image', 'Image', 'required');
				}
				if ($this->form_validation->run() == false) {
					echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
				} else {

					$upload_status = 'true';
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
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
						"link_status" => $this->input->post('link_status') ? $this->input->post('link_status') : 'true',
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
			if ($this->uri->segment(3) == 'Update') {
				// echo "ok";die();

				$userdata = $this->db->get_where('projects', array('id' => $this->input->post('id')))->row();
				$old_img = $userdata->image;
				$upload_status = 'true';
				$filename = $old_img;
				if (!empty($_FILES['image']['name'])) {
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
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
					"link_status" => $this->input->post('link_status') ? $this->input->post('link_status') : 'true',
					"date" => $this->data['date'],
					"time" => $this->data['time']
				);

				if ($upload_status == 'true') {
					$table_name = "projects";
					$unlink_filename = $old_img;
					$unlink_folder = "projects";

					if ($this->db->where('id', $userdata->id)->update('projects', $data_arr)) {
						if ($filename != $old_img) {
							unlink('./public/uploads/' . $unlink_folder . '/' . $unlink_filename);
						}
						echo json_encode(array("status" => "success", "msg" => "Project Successfully Updated", "title" => "Successfully Updated!", "reload" => "true", "redirect" => 'false'));
					} else {
						echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
					}
				} else {
					echo json_encode(array("status" => "error", "msg" => "Image Upload Failed", "title" => "Upload Error!", "reload" => "false", "redirect" => 'false'));
				}
			}
		} else {
			$this->load->view('Admin/AllprojectList', $data);
		}
	}




	//Manage Blog
	public function ManageBlog()
	{

		$data['userdata'] = $this->db->order_by('id', 'desc')->get('blog')->result();

		$seg3 = $this->uri->segment(3);
		if ($seg3 == 'Add') {
			$upload_status = 'true';
			$file_input_key = !empty($_FILES['img']['name']) ? 'img' : (!empty($_FILES['image']['name']) ? 'image' : 'img');
			$filename = '';

			if (!empty($_FILES[$file_input_key]['name'])) {
				$ext = pathinfo($_FILES[$file_input_key]["name"], PATHINFO_EXTENSION);
				$title = $this->input->post('title');
				$title_slug = url_title($title, '-', TRUE);
				if (empty($title_slug)) {
					$title_slug = md5(time()) . "_blog";
				}
				$filename = $title_slug . "." . $ext;

				$config['upload_path'] = './public/uploads/Blog/';
				$config['allowed_types'] = 'jpg|png|jpeg|webp|gif|JPG|PNG|JPEG|WEBP|GIF';
				$config['max_size'] = 5120; // 5MB in KB
				$config['file_name'] = $filename;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if (!$this->upload->do_upload($file_input_key)) {
					$upload_status = "false";
					$upload_error = strip_tags($this->upload->display_errors());
				} else {
					$upload_data = $this->upload->data();
					$filename = $upload_data['file_name'];
				}
			}

			// FAQs array processing
			$questions = $this->input->post('faq_questions');
			$answers = $this->input->post('faq_answers');
			$faqs = array();
			if (!empty($questions) && !empty($answers)) {
				for ($i = 0; $i < count($questions); $i++) {
					if (!empty(trim($questions[$i])) && !empty(trim($answers[$i]))) {
						$faqs[] = array(
							'question' => trim($questions[$i]),
							'answer' => trim($answers[$i])
						);
					}
				}
			}
			$faqs_json = !empty($faqs) ? json_encode($faqs, JSON_UNESCAPED_UNICODE) : null;

			$content_val = $this->input->post('content') ?: $this->input->post('discription');
			$meta_desc_val = $this->input->post('meta_description') ?: $this->input->post('short_discription');

			$data_arr = array(
				"title" => $this->input->post('title'),
				"url" => $this->input->post('url'),
				"meta_description" => $meta_desc_val,
				"short_discription" => $meta_desc_val,
				"keywords" => $this->input->post('keywords'),
				"location" => $this->input->post('location'),
				"content" => $content_val,
				"full_discription" => $content_val,
				"img" => $filename,
				"image" => $filename,
				"faqs" => $faqs_json,
				"Blog_date" => $this->input->post('date') ?: $this->data['date'],
				"status" => 'true',
				"date" => $this->data['date'],
				"time" => $this->data['time']
			);

			if ($upload_status != 'false') {
				if ($this->db->insert('blog', $data_arr)) {
					if (ob_get_length()) ob_clean();
					header('Content-Type: application/json');
					echo json_encode(array("status" => "success", "msg" => "Blog Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
					exit;
				} else {
					if (ob_get_length()) ob_clean();
					header('Content-Type: application/json');
					echo json_encode(array("status" => "error", "msg" => "Database Insert Failed", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
					exit;
				}
			} else {
				if (ob_get_length()) ob_clean();
				header('Content-Type: application/json');
				echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Upload Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
				exit;
			}

		} elseif ($seg3 == 'Edit' || $seg3 == 'Update') {
			$userdata = $this->db->get_where('blog', array('id' => $this->input->post('id')))->row();
			if (!$userdata) {
				if (ob_get_length()) ob_clean();
				header('Content-Type: application/json');
				echo json_encode(array("status" => "error", "msg" => "Blog record not found!", "reload" => "false"));
				exit;
			}
			$old_img = !empty($userdata->img) ? $userdata->img : $userdata->image;
			$upload_status = 'true';
			$filename = $old_img;

			$file_input_key = !empty($_FILES['img']['name']) ? 'img' : (!empty($_FILES['image']['name']) ? 'image' : '');

			if (!empty($file_input_key) && !empty($_FILES[$file_input_key]['name'])) {
				$ext = pathinfo($_FILES[$file_input_key]["name"], PATHINFO_EXTENSION);
				$title = $this->input->post('title');
				$title_slug = url_title($title, '-', TRUE);
				if (empty($title_slug)) {
					$title_slug = md5(time()) . "_blog";
				}
				$filename = $title_slug . "." . $ext;

				$config['upload_path'] = './public/uploads/Blog/';
				$config['allowed_types'] = 'jpg|png|jpeg|webp|gif|JPG|PNG|JPEG|WEBP|GIF';
				$config['max_size'] = 5120; // 5MB in KB
				$config['file_name'] = $filename;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if (!$this->upload->do_upload($file_input_key)) {
					$upload_status = "false";
					$upload_error = strip_tags($this->upload->display_errors());
				} else {
					$upload_data = $this->upload->data();
					$filename = $upload_data['file_name'];
					if (!empty($old_img) && file_exists('./public/uploads/Blog/' . $old_img)) {
						@unlink('./public/uploads/Blog/' . $old_img);
					}
				}
			}

			// FAQs array processing
			$questions = $this->input->post('faq_questions');
			$answers = $this->input->post('faq_answers');
			$faqs = array();
			if (!empty($questions) && !empty($answers)) {
				for ($i = 0; $i < count($questions); $i++) {
					if (!empty(trim($questions[$i])) && !empty(trim($answers[$i]))) {
						$faqs[] = array(
							'question' => trim($questions[$i]),
							'answer' => trim($answers[$i])
						);
					}
				}
			}
			$faqs_json = !empty($faqs) ? json_encode($faqs, JSON_UNESCAPED_UNICODE) : null;

			$content_val = $this->input->post('content') ?: $this->input->post('discription') ?: $this->input->post('full_discription');
			$meta_desc_val = $this->input->post('meta_description') ?: $this->input->post('short_discription');

			$data_arr = array(
				"title" => $this->input->post('title'),
				"url" => $this->input->post('url'),
				"meta_description" => $meta_desc_val,
				"short_discription" => $meta_desc_val,
				"keywords" => $this->input->post('keywords'),
				"location" => $this->input->post('location'),
				"content" => $content_val,
				"full_discription" => $content_val,
				"img" => $filename,
				"image" => $filename,
				"faqs" => $faqs_json,
				"Blog_date" => $this->input->post('Blog_date') ?: ($this->input->post('date') ?: $userdata->Blog_date),
				"status" => 'true',
				"date" => $this->data['date'],
				"time" => $this->data['time']
			);

			if ($upload_status == 'true') {
				if ($this->db->where('id', $userdata->id)->update('blog', $data_arr)) {
					if (ob_get_length()) ob_clean();
					header('Content-Type: application/json');
					echo json_encode(array("status" => "success", "msg" => "Blog Successfully Updated", "title" => "Successfully Updated!", "reload" => "true", "redirect" => 'false'));
					exit;
				} else {
					if (ob_get_length()) ob_clean();
					header('Content-Type: application/json');
					echo json_encode(array("status" => "error", "msg" => "Update Failed", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
					exit;
				}
			} else {
				if (ob_get_length()) ob_clean();
				header('Content-Type: application/json');
				echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Upload Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
				exit;
			}
		} else {
			$this->load->view('Admin/Blog', $data);
		}
	}

	public function Blog()
	{
		$this->ManageBlog();
	}

	public function UploadSummernoteImage()
	{
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
		
		while (ob_get_level()) {
			ob_end_clean();
		}

		$file_key = !empty($_FILES['image']['name']) ? 'image' : (!empty($_FILES['file']['name']) ? 'file' : '');

		if (!empty($file_key) && !empty($_FILES[$file_key]['name'])) {
			$upload_dir = './public/uploads/summernote/';
			if (!is_dir($upload_dir)) {
				@mkdir($upload_dir, 0777, true);
			}

			$ext = pathinfo($_FILES[$file_key]['name'], PATHINFO_EXTENSION);
			$clean_name = url_title(pathinfo($_FILES[$file_key]['name'], PATHINFO_FILENAME), '-', TRUE);
			if (empty($clean_name)) {
				$clean_name = md5(time() . rand(1000, 9999));
			}
			$filename = time() . '_' . $clean_name . '.' . $ext;

			$config['upload_path']   = $upload_dir;
			$config['allowed_types'] = 'jpg|jpeg|png|gif|webp|svg|JPG|JPEG|PNG|GIF|WEBP|SVG';
			$config['max_size']      = 10240; // 10MB in KB
			$config['file_name']     = $filename;

			$this->load->library('upload');
			$this->upload->initialize($config);

			if (!$this->upload->do_upload($file_key)) {
				header('Content-Type: text/plain', true, 400);
				echo strip_tags($this->upload->display_errors('', ''));
			} else {
				$data = $this->upload->data();
				header('Content-Type: text/plain', true, 200);
				echo base_url('public/uploads/summernote/' . $data['file_name']);
			}
		} else {
			header('Content-Type: text/plain', true, 400);
			echo "No image provided in upload request.";
		}
		exit;
	}



	//manage Client
	public function ManageClient()
	{
		$data['userdata'] = $this->db->order_by('id', 'desc')->get('client')->result();

		if ($this->uri->segment(3)) {
			if ($this->uri->segment(3) == 'Add') {
				$title = $this->input->post('title', TRUE);
				$filename = '';
				$upload_status = "false";
				$upload_error = "";

				if (!empty($_FILES['image']['name'])) {
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$slug = url_title($title ?: 'client', '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;

					$config['upload_path'] = './public/uploads/client/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';
					$config['max_size'] = 2048; // In KB
					$config['file_name'] = $filename;

					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('image')) {
						$upload_status = "true";
					} else {
						$upload_status = "false";
						$upload_error = strip_tags($this->upload->display_errors());
					}
				} else {
					$upload_error = "Please select an image.";
				}

				if ($upload_status == "true") {
					$data_arr = array(
						"title" => $title,
						"image" => $filename,
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
					);

					if ($this->db->insert('client', $data_arr)) {
						$this->session->set_flashdata("status", "success");
						$this->session->set_flashdata("msg", "Client Added Successfully");
					} else {
						$this->session->set_flashdata("status", "error");
						$this->session->set_flashdata("msg", "Something Went Wrong");
					}
				} else {
					$this->session->set_flashdata("status", "error");
					$this->session->set_flashdata("msg", !empty($upload_error) ? $upload_error : "Image upload failed");
				}
				redirect(base_url('Admin/ManageClient'));
			} else if ($this->uri->segment(3) == 'Edit') {
				$id = $this->input->post('id', TRUE);
				$title = $this->input->post('title', TRUE);
				$old_data = $this->db->get_where('client', array('id' => $id))->row();

				$filename = $old_data ? $old_data->image : '';

				if (!empty($_FILES['image']['name'])) {
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$slug = url_title($title ?: 'client', '-', TRUE);
					$new_filename = $slug . "-" . time() . "." . $ext;

					$config['upload_path'] = './public/uploads/client/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';
					$config['max_size'] = 2048; // In KB
					$config['file_name'] = $new_filename;

					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('image')) {
						if ($old_data && !empty($old_data->image)) {
							$file_path = './public/uploads/client/' . $old_data->image;
							if (file_exists($file_path)) {
								@unlink($file_path);
							}
						}
						$filename = $new_filename;
					}
				}

				$data_arr = array(
					"title" => $title,
					"image" => $filename
				);

				if ($this->db->where('id', $id)->update('client', $data_arr)) {
					$this->session->set_flashdata("status", "success");
					$this->session->set_flashdata("msg", "Client Updated Successfully");
				} else {
					$this->session->set_flashdata("status", "error");
					$this->session->set_flashdata("msg", "Something Went Wrong");
				}
				redirect(base_url('Admin/ManageClient'));
			}
		} else {
			$this->load->view('Admin/OurClient', $data);
		}
	}
	//Manage Experts
	public function ManageSlider()
	{
		$data['userdata'] = $this->db->order_by('id', 'desc')->get('slider')->result();
		if ($this->uri->segment(3)) {
			if ($this->uri->segment(3) == 'Add') {

				$this->form_validation->set_rules('title', 'Title', 'required');
				if (empty($_FILES['image']['name'])) {
					$this->form_validation->set_rules('image', 'Image', 'required');
				}

				if ($this->form_validation->run() == false) {
					echo json_encode(array("status" => "error", "msg" => "Validatino Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
				} else {
					$upload_status = 'true';
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$slug = url_title($this->input->post('title') ?: ($this->input->post('name') ?: ($this->input->post('project_name') ?: 'upload')), '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;

					$config['upload_path'] = './public/uploads/sliders/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';


					$config['max_size'] = 200; // In KB
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

						"title" => $this->input->post('title'),
						"image" => $filename,
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
					);

					if ($upload_status == "true") {
						if ($this->db->insert('slider', $data_arr)) {
							echo json_encode(array("status" => "success", "msg" => "Slider Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
							// echo "success";
						} else {
							echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
							// echo "failed";
						}
					}
				}
			} elseif ($this->uri->segment(3) == 'Edit') {

				$userdata = $this->db->get_where('slider', array('id' => $this->input->post('id')))->row();
				$old_img = $userdata->image;
				$upload_status = 'true';
				$filename = $old_img;
				if (!empty($_FILES['image']['name'])) {
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$slug = url_title($this->input->post('title') ?: ($this->input->post('name') ?: ($this->input->post('project_name') ?: 'upload')), '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;

					$config['upload_path'] = './public/uploads/sliders/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';


					$config['max_size'] = 200; // In KB
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

					"title" => $this->input->post('title'),
					"image" => $filename,
					"status" => 'true',
					"date" => $this->data['date'],
					"time" => $this->data['time']
				);


				if ($upload_status == 'true') {
					$table_name = "slider";
					$unlink_filename = $old_img;
					$unlink_folder = "sliders";
					if ($this->db->where('id', $userdata->id)->update('slider', $data_arr)) {

						$this->session->set_flashdata("status", "success");
						$this->session->set_flashdata("msg", "Slider Successfully Updated");
						if ($filename != $old_img && !empty($old_img)) { // Add unlink logic
							$file_path = './public/uploads/' . $unlink_folder . '/' . $unlink_filename;
							if (file_exists($file_path)) {
								@unlink($file_path);
							}
						}
						redirect(base_url('Admin/ManageSlider'));
					} else {
						$this->session->set_flashdata("status", "error");
						$this->session->set_flashdata("msg", "Something Went Wrong");
						redirect(base_url('Admin/ManageSlider'));

					}

				}

			}
		} else {
			$this->load->view('Admin/ManageSlider', $data);
		}
	}
	public function ManageExpertList()
	{
		$data['userdata'] = $this->db->order_by('id', 'desc')->get('expert')->result();
		if ($this->uri->segment(3)) {
			if ($this->uri->segment(3) == 'Add') {
				$this->form_validation->set_rules('name', 'Name', 'required');
				$this->form_validation->set_rules('role', 'Role', 'required');
				$this->form_validation->set_rules('sequence', 'Sequence', 'required');
				if (empty($_FILES['image']['name'])) {
					$this->form_validation->set_rules('image', 'Image', 'required');
				}

				if ($this->form_validation->run() == false) {
					echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
				} else {
					$upload_status = 'true';
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$slug = url_title(trim($this->input->post('name') . ' ' . $this->input->post('role')), '-', TRUE);
					$filename = $slug . "." . strtolower($ext);

					$config['upload_path'] = './public/uploads/expert/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';
					$config['overwrite'] = TRUE;
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
						"sequence" => $this->input->post('sequence'),
						"image" => $filename,
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
					);

					if ($upload_status == "true") {
						if ($this->db->insert('expert', $data_arr)) {
							echo json_encode(array("status" => "success", "msg" => "Expert Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
						} else {
							echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
						}
					}
				}
			} elseif ($this->uri->segment(3) == 'Edit') {

				$userdata = $this->db->get_where('expert', array('id' => $this->input->post('id')))->row();
				$old_img = $userdata->image;
				$upload_status = 'true';
				
				$name = $this->input->post('name');
				$role = $this->input->post('role');

				if (!empty($_FILES['image']['name'])) {
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$slug = url_title(trim($name . ' ' . $role), '-', TRUE);
					$filename = $slug . "." . strtolower($ext);

					$config['upload_path'] = './public/uploads/expert/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';
					$config['overwrite'] = TRUE;
					$config['file_name'] = $filename;
					$this->load->library('upload', $config);

					if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
						$upload_error = strip_tags($this->upload->display_errors());
					} else {
						$upload_status = "true";
					}
				} else {
					if (!empty($old_img) && file_exists('./public/uploads/expert/' . $old_img)) {
						$ext = pathinfo($old_img, PATHINFO_EXTENSION);
						$slug = url_title(trim($name . ' ' . $role), '-', TRUE);
						$new_filename = $slug . "." . strtolower($ext);
						if ($new_filename !== $old_img) {
							@rename('./public/uploads/expert/' . $old_img, './public/uploads/expert/' . $new_filename);
							$filename = $new_filename;
						} else {
							$filename = $old_img;
						}
					} else {
						$filename = $old_img;
					}
				}

				$data_arr = array(
					"name" => $name,
					"role" => $role,
					"sequence" => $this->input->post('sequence'),
					"image" => $filename,
					"status" => 'true',
					"date" => $this->data['date'],
					"time" => $this->data['time']
				);

				if ($upload_status == 'true') {
					if ($this->db->where('id', $userdata->id)->update('expert', $data_arr)) {
						if (!empty($_FILES['image']['name']) && $filename !== $old_img && !empty($old_img)) {
							$file_path = './public/uploads/expert/' . $old_img;
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
				}
			}
		} else {
			$this->load->view('Admin/OurExperts', $data);
		}
	}

	public function Manageintern()
	{
		$data['interndata'] = $this->db->order_by('id', 'desc')->get('intern')->result();
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
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
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
						if ($this->db->insert('intern', $data_arr)) {
							echo json_encode(array("status" => "success", "msg" => "intern Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
							// echo "success";
						} else {
							echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
							// echo "failed";
						}
					}
				}
			} elseif ($this->uri->segment(3) == 'Edit') {

				$userdata = $this->db->get_where('intern', array('id' => $this->input->post('id')))->row();
				$old_img = $userdata->image;
				$upload_status = 'true';
				$filename = $old_img;
				if (!empty($_FILES['image']['name'])) {
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
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
					$table_name = "intern";
					$unlink_filename = $old_img;
					$unlink_folder = "expert";
					if ($this->db->where('id', $userdata->id)->update('intern', $data_arr)) {

						$this->session->set_flashdata("status", "success");
						$this->session->set_flashdata("msg", "Expert Successfully Updated");
						if ($filename != $old_img && !empty($old_img)) {
							$file_path = './public/uploads/' . $unlink_folder . '/' . $unlink_filename;
							if (file_exists($file_path)) {
								@unlink($file_path);
							}
						}
						redirect(base_url('Admin/Manageintern'));
					} else {
						$this->session->set_flashdata("status", "error");
						$this->session->set_flashdata("msg", "Something Went Wrong");
						redirect(base_url('Admin/Manageintern'));

					}

				}

			}
		} else {
			$this->load->view('Admin/Manageintern', $data);
		}
	}

	//Our Product
	public function OurProduct()
	{
		$data['userdata'] = $this->db->order_by('id', 'desc')->get('productcost')->result();

		if ($this->uri->segment(3)) {
			if ($this->uri->segment(3) == 'Add') {
				$this->form_validation->set_rules('name', 'Name', 'required');
				$this->form_validation->set_rules('price', 'Price', 'required');
				if (empty($_FILES['image']['name'])) {
					$this->form_validation->set_rules('image', 'Image', 'required');
				}

				if ($this->form_validation->run() == false) {
					echo json_encode(array("status" => "error", "msg" => "Validatino Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
				} else {
					$upload_status = 'true';
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$slug = url_title($this->input->post('title') ?: ($this->input->post('name') ?: ($this->input->post('project_name') ?: 'upload')), '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;

					$config['upload_path'] = './public/uploads/product/';
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
						"title" => $this->input->post('name'),
						"price" => $this->input->post('price'),
						"img" => $filename,
						"status" => 'true'

					);

					if ($upload_status == "true") {
						if ($this->db->insert('productcost', $data_arr)) {
							echo json_encode(array("status" => "success", "msg" => "Product Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
							// echo "success";
						} else {
							echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
							// echo "failed";
						}
					}
				}
			} elseif ($this->uri->segment(3) == 'Edit') {

				$userdata = $this->db->get_where('productcost', array('id' => $this->input->post('id')))->row();
				$old_img = $userdata->img;
				$upload_status = 'true';
				$filename = $old_img;
				if (!empty($_FILES['image']['name'])) {
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$slug = url_title($this->input->post('title') ?: ($this->input->post('name') ?: ($this->input->post('project_name') ?: 'upload')), '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;

					$config['upload_path'] = './public/uploads/product/';
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
					"title" => $this->input->post('name'),
					"price" => $this->input->post('price'),
					"img" => $filename,
					"status" => 'true'

				);


				if ($upload_status == 'true') {
					$table_name = "productcost";
					$unlink_filename = $old_img;
					$unlink_folder = "product";
					if ($this->db->where('id', $userdata->id)->update('productcost', $data_arr)) {

						// $this->session->set_flashdata("status", "success");
						// $this->session->set_flashdata("msg", "Product Successfully Updated");
						if ($filename != $old_img && !empty($old_img)) {
							$file_path = './public/uploads/' . $unlink_folder . '/' . $unlink_filename;
							if (file_exists($file_path)) {
								@unlink($file_path);
							}
						}
						// redirect(base_url('Admin/OurProduct'));
						echo json_encode(array("status" => "success", "msg" => "Product Successfully Updated", "title" => "Successfully Updated!", "reload" => "true", "redirect" => 'false'));
					} else {
						// $this->session->set_flashdata("status", "error");
						// $this->session->set_flashdata("msg", "Something Went Wrong");
						// redirect(base_url('Admin/OurProduct'));
						echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));

					}

				}

			}
		} else {
			$this->load->view('Admin/OurProduct', $data);
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
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
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
			} elseif ($this->uri->segment(3) == 'Edit') {

				$userdata = $this->db->get_where('news', array('id' => $this->input->post('id')))->row();
				$old_img = $userdata->image;
				$upload_status = 'true';
				$filename = $old_img;
				if (!empty($_FILES['image']['name'])) {
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
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
					$unlink_filename = $old_img;
					$unlink_folder = "news";

					if ($this->db->where('id', $userdata->id)->update('news', $data_arr)) {

						$this->session->set_flashdata("status", "success");
						$this->session->set_flashdata("msg", "News Successfully Updated");
						if ($filename != $old_img && !empty($old_img)) {
							$file_path = './public/uploads/' . $unlink_folder . '/' . $unlink_filename;
							if (file_exists($file_path)) {
								@unlink($file_path);
							}
						}
						redirect(base_url('Admin/ManageNews'));
						// echo json_encode(array("status" => "success", "msg" => " Job successfully Updated.", "title" => "Created", "reload" => "true", "redirect" => 'false'));
					} else {

						$this->session->set_flashdata("status", "success");
						$this->session->set_flashdata("msg", "News Successfully Updated");
						redirect(base_url('Admin/ManageNews'));
						// echo json_encode(array("status" => "error", "msg" => "Something Went Wrong .", "title" => "", "reload" => "true", "redirect" => 'false'));
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
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
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
							$this->session->set_flashdata("status", "success");
							$this->session->set_flashdata("msg", "Picture Successfully Added");
							redirect(base_url('Admin/ManageGallery'));
						} else {
							$this->session->set_flashdata("status", "error");
							$this->session->set_flashdata("msg", isset($upload_error) ? $upload_error : "Something Went Wrong");
							redirect(base_url('Admin/ManageGallery'));
						}
					} else {
						$this->session->set_flashdata("status", "error");
						$this->session->set_flashdata("msg", isset($upload_error) ? $upload_error : "Something Went Wrong");
						redirect(base_url('Admin/ManageGallery'));
					}
				}
			} elseif ($this->uri->segment(3) == 'Edit') {

				$userdata = $this->db->get_where('gallery', array('id' => $this->input->post('id')))->row();
				$old_img = $userdata->image;
				$upload_status = 'true';
				$filename = $old_img;
				if (!empty($_FILES['image']['name'])) {
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
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

				// var_dump($data_arr);die();

				if ($upload_status == 'true') {
					$table_name = "gallery";
					$unlink_filename = $old_img;
					$unlink_folder = "gallery";
					if ($this->db->where('id', $userdata->id)->update('gallery', $data_arr)) {
						$this->session->set_flashdata("status", "success");
						$this->session->set_flashdata("msg", "Picture Successfully Updated");
						if ($filename != $old_img && !empty($old_img)) {
							$file_path = './public/uploads/' . $unlink_folder . '/' . $unlink_filename;
							if (file_exists($file_path)) {
								@unlink($file_path);
							}
						}
						redirect(base_url('Admin/ManageGallery'));
					} else {

						$this->session->set_flashdata("status", "error");
						$this->session->set_flashdata("msg", "Something Went Wrong");
						redirect(base_url('Admin/ManageGallery'));
					}

				} else {
					$this->session->set_flashdata("status", "error");
					$this->session->set_flashdata("msg", isset($upload_error) ? $upload_error : "Something Went Wrong");
					redirect(base_url('Admin/ManageGallery'));
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

	// Toggle Hiring Status (OPEN / CLOSED)
	public function toggleHiringStatus()
	{
		$current_status = get_hiring_status();
		$new_status = ($current_status === 'open') ? 'closed' : 'open';
		set_hiring_status($new_status);

		if ($this->input->is_ajax_request()) {
			echo json_encode(array(
				"status" => "success",
				"hiring_status" => $new_status,
				"msg" => "Hiring status successfully updated to " . strtoupper($new_status) . "!",
				"title" => "Status Updated!"
			));
			exit;
		}
		redirect(base_url('Admin/ManageCareer'));
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
	//Delete with files
	public function deleteWithFilename()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			$id = $data['id'];
			$table_name = $data['tablename'];
			$unlink_filename = isset($data['filename']) ? $data['filename'] : '';
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
					if (isset($item->$field) && !empty($item->$field)) {
						$db_filename = $item->$field;
					} elseif (isset($item->img) && !empty($item->img)) {
						$db_filename = $item->img;
					} elseif (isset($item->image) && !empty($item->image)) {
						$db_filename = $item->image;
					}
				}
			}

			$status = $this->db->where('id', $id)->delete($table_name);

			if (ob_get_length()) ob_clean();
			header('Content-Type: application/json');

			if ($status) {
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
				echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
			}
			exit;
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

				$img_filename = '';
				if (isset($item->$field) && !empty($item->$field)) {
					$img_filename = $item->$field;
				} elseif (isset($item->img) && !empty($item->img)) {
					$img_filename = $item->img;
				} elseif (isset($item->image) && !empty($item->image)) {
					$img_filename = $item->image;
				}

				if (!empty($img_filename)) {
					$file_path = './public/uploads/' . $folder . '/' . $img_filename;
					if (file_exists($file_path)) {
						@unlink($file_path);
					}
				}
			}
		}

		$status = $this->db->where('id', $id)->delete($table);

		if (ob_get_length()) ob_clean();
		header('Content-Type: application/json');

		if ($status) {
			echo json_encode(array("status" => "success", "msg" => "Successfully Deleted.", "title" => "Success", "reload" => "true", "redirect" => 'true'));
		} else {
			echo json_encode(array("status" => "error", "msg" => "Something Went Wrong.", "title" => "", "reload" => "true", "redirect" => 'false'));
		}
		exit;
	}

	//Delete Data
	public function EditData()
	{
		$table = $this->uri->segment(3);
		$id = $this->uri->segment(4);

		if (empty($table) || empty($id)) {
			echo "Invalid Request";
			return;
		}

		$userdata = $this->db->get_where($table, ['id' => $id])->row();

		$cities = $this->db
			->select('id, city_name')
			->where('status', 1)
			->order_by('city_name', 'ASC')
			->get('cities')
			->result();

		$data['states'] = $this->db
			->distinct()
			->select('state_name')
			->where('status', 1)
			->get('cities')
			->result();
		if (!$userdata) {
			echo "No data found";
			return;
		}

		$data['table'] = $table;
		$data['userdata'] = $userdata;
		$data['cities'] = $cities;

		$this->load->view('Admin/Modal', $data);
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
				return $this->output->set_content_type('application/json')->set_output(json_encode(array("status" => "success", "msg" => "Status Successfully Changed.", "title" => "Changed", "reload" => "true", "redirect" => 'false')));
			} else {
				return $this->output->set_content_type('application/json')->set_output(json_encode(array("status" => "error", "msg" => "Something Went Wrong.", "title" => "Error", "reload" => "true", "redirect" => 'false')));
			}
		}
	}

	// Change Project Link Status (Active / Disabled)
	public function ChangeLinkStatus()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			$id = $data['id'];
			$link_status = isset($data['link_status']) ? $data['link_status'] : 'true';
			$table_name = isset($data['tablename']) ? $data['tablename'] : 'projects';
			
			if ($link_status == 'true' || $link_status == '1') {
				$new_status = 'false';
			} else {
				$new_status = 'true';
			}

			$data_arr = array(
				"link_status" => $new_status,
			);

			$this->db->where('id', $id);
			if ($this->db->update($table_name, $data_arr)) {
				return $this->output->set_content_type('application/json')->set_output(json_encode(array("status" => "success", "msg" => "Project Link Status Successfully Changed.", "title" => "Status Updated", "reload" => "true", "redirect" => 'false')));
			} else {
				return $this->output->set_content_type('application/json')->set_output(json_encode(array("status" => "error", "msg" => "Something Went Wrong.", "title" => "Error", "reload" => "false", "redirect" => 'false')));
			}
		}
	}
	public function addcity()
	{
		$response = ['success' => false, 'message' => ''];

		$city_name = trim($this->input->post('city_name', TRUE));
		$state_name = trim($this->input->post('state_name', TRUE));
		$status = $this->input->post('status', TRUE); // 1 or 0

		// Validation
		if ($city_name == '') {
			$response['message'] = 'City name is required';
			echo json_encode($response);
			return;
		}

		// Duplicate check
		$exists = $this->db
			->where('city_name', $city_name)
			->get('cities')
			->row();

		if ($exists) {
			$response['message'] = 'City already exists';
			echo json_encode($response);
			return;
		}

		// Insert data (table ke exactly according)
		$data = [
			'state_name' => ucwords(strtolower($state_name)),
			'city_name' => ucwords(strtolower($city_name)),
			'status' => ($status == 1) ? 1 : 0
			// created_at DB khud handle karega
		];

		if ($this->db->insert('cities', $data)) {
			$response['success'] = true;
			$response['message'] = 'City added successfully';
			$response['city_id'] = $this->db->insert_id();
			$response['city_name'] = $data['city_name'];
		} else {
			$response['message'] = 'Database insert failed';
		}

		echo json_encode($response);
	}

	public function getCities()
	{
		$cities = $this->db
			->select('id, city_name')
			->where('status', 1)
			->order_by('city_name', 'ASC')
			->get('cities')
			->result();

		echo json_encode([
			'success' => true,
			'cities' => $cities
		]);
	}
	public function ManageProjectEnquiries()
	{
		$data['enquiries'] = $this->db->order_by('id', 'desc')->get('project_enquiries')->result();
		$this->load->view('Admin/ManageProjectEnquiries', $data);
	}

	public function ManageExpertBanners()
	{
		$data['userdata'] = $this->db->order_by('id', 'desc')->get('expert_banners')->result();
		if ($this->uri->segment(3)) {
			if ($this->uri->segment(3) == 'Add') {
				$this->form_validation->set_rules('name', 'Name', 'required');
				if (empty($_FILES['image']['name'])) {
					$this->form_validation->set_rules('image', 'Image', 'required');
				}

				if ($this->form_validation->run() == false) {
					echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
				} else {
					$upload_status = 'true';
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$slug = url_title($this->input->post('name'), '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;

					$config['upload_path'] = './public/uploads/expert_banners/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
					$config['max_size'] = 2048; // In KB
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
						"image" => $filename,
						"status" => 'true'
					);

					if ($upload_status == "true") {
						if ($this->db->insert('expert_banners', $data_arr)) {
							echo json_encode(array("status" => "success", "msg" => "Banner Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
						} else {
							echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
						}
					} else {
						echo json_encode(array("status" => "error", "msg" => isset($upload_error) ? $upload_error : "Upload failed", "title" => "Error!", "reload" => "false", "redirect" => 'false'));
					}
				}
			} elseif ($this->uri->segment(3) == 'Edit') {

				$userdata = $this->db->get_where('expert_banners', array('id' => $this->input->post('id')))->row();
				$old_img = $userdata->image;
				$upload_status = 'true';
				$filename = $old_img;
				if (!empty($_FILES['image']['name'])) {
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$slug = url_title($this->input->post('name'), '-', TRUE);
					$filename = $slug . "-" . time() . "." . $ext;

					$config['upload_path'] = './public/uploads/expert_banners/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
					$config['max_size'] = 2048; // In KB
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
					"image" => $filename,
					"status" => 'true'
				);

				if ($upload_status == 'true') {
					if ($this->db->where('id', $userdata->id)->update('expert_banners', $data_arr)) {
						$this->session->set_flashdata("status", "success");
						$this->session->set_flashdata("msg", "Banner Successfully Updated");
						if ($filename != $old_img && !empty($old_img)) {
							$file_path = './public/uploads/expert_banners/' . $old_img;
							if (file_exists($file_path)) {
								@unlink($file_path);
							}
						}
						redirect(base_url('Admin/ManageExpertBanners'));
					} else {
						$this->session->set_flashdata("status", "error");
						$this->session->set_flashdata("msg", "Something Went Wrong");
						redirect(base_url('Admin/ManageExpertBanners'));
					}
				} else {
					$this->session->set_flashdata("status", "error");
					$this->session->set_flashdata("msg", isset($upload_error) ? $upload_error : "Upload failed");
					redirect(base_url('Admin/ManageExpertBanners'));
				}

			} elseif ($this->uri->segment(3) == 'Delete') {
				$id = $this->input->post('id');
				$userdata = $this->db->get_where('expert_banners', array('id' => $id))->row();
				if ($userdata) {
					if (file_exists('./public/uploads/expert_banners/' . $userdata->image)) {
						@unlink('./public/uploads/expert_banners/' . $userdata->image);
					}
					if ($this->db->where('id', $id)->delete('expert_banners')) {
						echo json_encode(array("status" => "success", "msg" => "Banner Successfully Deleted", "title" => "Success!", "reload" => "true", "redirect" => 'false'));
					} else {
						echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Error!", "reload" => "false", "redirect" => 'false'));
					}
				}
			}
		} else {
			$this->load->view('Admin/expert_banners', $data);
		}
	}
}