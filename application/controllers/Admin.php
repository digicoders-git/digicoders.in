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
					$filename = md5(time()) . "_project" . "." . $ext;

					$config['upload_path'] = './public/uploads/projects/';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = 8024; // In KB
					$filesize = $config['max_size'];
					$config['file_name'] = $filename;
					$this->load->library('upload', $config);

					if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
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
							echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
							// echo "failed";
						}
					} else {
						echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
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
					$filename = md5(time()) . "_project" . "." . $ext;
				}

				$config['upload_path'] = './public/uploads/projects/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 8024; // In KB
				$filesize = $config['max_size'];
				$config['file_name'] = $filename;
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('image')) {
					$upload_status = "false";
				} else {
					$upload_status = 'true';
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

				if ($upload_status = 'true') {
					$table_name = "projects";
					$unlink_filename = $old_img;
					$unlink_folder = "projects";

					if ($this->db->where('id', $userdata->id)->update('projects', $data_arr)) {
						$this->session->set_flashdata("status", "success");
						$this->session->set_flashdata("msg", "Project Successfully Updated");
						redirect(base_url('Admin/ManageProject'));
						unlink('./public/uploads/' . $unlink_folder . '/' . $unlink_filename);
					} else {
						$this->session->set_flashdata("status", "error");
						$this->session->set_flashdata("msg", "Somethimg Wemt Wrong");
						redirect(base_url('Admin/ManageProject'));
					}


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
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$filename = md5(time()) . "_blog" . "." . $ext;

					$config['upload_path'] = './public/uploads/Blog/';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = 8024; // In KB
					$filesize = $config['max_size'];
					$config['file_name'] = $filename;
					$this->load->library('upload', $config);

					if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
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
							// echo json_encode(array("status" => "success", "msg" => "Blog Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));

							$this->session->set_flashdata("status", "success");
							$this->session->set_flashdata("msg", "Blog Successfully Added");
							redirect(base_url('Admin/ManageBlog'));

							// echo "success";
						} else {
							echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));

							// $this->session->set_flashdata("status", "error");
							// $this->session->set_flashdata("msg", "Something Went Wrong");
							// redirect(base_url('Admin/ManageBlog'));
							// echo "failed";
						}
					} else {
						echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));

						// $this->session->set_flashdata("status", "error");
						// $this->session->set_flashdata("msg", "Something Went Wrong");
						// redirect(base_url('Admin/ManageBlog'));
						// echo "upload status false";
					}
				}
			} elseif ($this->uri->segment(3) == 'Edit') {
				$userdata = $this->db->get_where('blog', array('id' => $this->input->post('id')))->row();
				$old_img = $userdata->image;
				$upload_status = 'true';
				$filename = $old_img;
				if (!empty($_FILES['image']['name'])) {
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$filename = md5(time()) . "_project" . "." . $ext;
				}


				$config['upload_path'] = './public/uploads/Blog/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 8024; // In KB
				$filesize = $config['max_size'];
				$config['file_name'] = $filename;
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('image')) {
					$upload_status = "false";
				} else {
					$upload_status = 'true';
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


				if ($upload_status = 'true') {
					$table_name = "blog";
					$unlink_filename = $old_img;
					$unlink_folder = "Blog";

					if ($this->db->where('id', $userdata->id)->update('blog', $data_arr)) {
						$this->session->set_flashdata("status", "success");
						$this->session->set_flashdata("msg", "Blog Successfully Updated");
						unlink('./public/uploads/' . $unlink_folder . '/' . $unlink_filename);
						redirect(base_url('Admin/ManageBlog'));
					} else {
						$this->session->set_flashdata("status", "error");
						$this->session->set_flashdata("msg", "Somethimg Wemt Wrong");
						redirect(base_url('Admin/ManageBlog'));
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
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$filename = md5(time()) . "_client" . "." . $ext;

					$config['upload_path'] = './public/uploads/client/';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = 1024 * 10; // In KB
					$filesize = $config['max_size'];
					$config['file_name'] = $filename;

					$this->load->library('upload', $config);

					if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
					} else {
						$upload_status = "true";
					}

					$data_arr = array(
						"image" => $filename,
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
					);


					if ($upload_status = 'true') {
						if ($this->db->insert('client', $data_arr)) {
							// redirect(base_url('Admin/ManageClient'));
							echo json_encode(array("status" => "success", "msg" => "Client Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
						} else {
							echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
						}
					} else {
						echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
					}
				}
			} elseif ($this->uri->segment(3) == 'Edit') {

				$userdata = $this->db->get_where('client', array('id' => $this->input->post('id')))->row();
				$old_img = $userdata->image;
				$upload_status = 'true';
				$filename = $old_img;
				// var_dump($filename);die();
				if (!empty($_FILES['image']['name'])) {
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$filename = md5(time()) . "_client" . "." . $ext;
				}

				$config['upload_path'] = './public/uploads/client/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 8024; // In KB
				$filesize = $config['max_size'];
				$config['file_name'] = $filename;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('image')) {
					$upload_status = "false";
				} else {
					$upload_status = "true";
				}

				$data_arr = array(
					"image" => $filename,
					"status" => 'true',
					"date" => $this->data['date'],
					"time" => $this->data['time']
				);

				if ($upload_status = 'true') {
					$table_name = "client";
					$unlink_filename = $old_img;
					$unlink_folder = "client";

					if ($this->db->where('id', $userdata->id)->update('client', $data_arr)) {
						$this->session->set_flashdata("status", "success");
						$this->session->set_flashdata("msg", "Client Update Successfull");
						unlink('./public/uploads/' . $unlink_folder . '/' . $unlink_filename);
						redirect(base_url('Admin/ManageClient'));
					} else {
						$this->session->set_flashdata("status", "error");
						$this->session->set_flashdata("msg", "Something Went Wrong");
						redirect(base_url('Admin/ManageClient'));
					}
				}
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
					$filename = md5(time()) . "_Digicoders_slider" . "." . $ext;

					$config['upload_path'] = './public/uploads/sliders/';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = 8024; // In KB
					$filesize = $config['max_size'];
					$config['file_name'] = $filename;
					$this->load->library('upload', $config);

					if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
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

					if ($upload_status = "true") {
						if ($this->db->insert('slider', $data_arr)) {
							echo json_encode(array("status" => "success", "msg" => "Slider Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
							// echo "success";
						} else {
							echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
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
					$filename = md5(time()) . "_Digicoders_sliders" . "." . $ext;
				}


				$config['upload_path'] = './public/uploads/sliders/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 8024; // In KB
				$filesize = $config['max_size'];
				$config['file_name'] = $filename;
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('image')) {
					$upload_status = "false";
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


				if ($upload_status = 'true') {
					$table_name = "slider";
					$unlink_filename = $old_img; 
					$unlink_folder = "sliders"; 
					if ($this->db->where('id', $userdata->id)->update('slider', $data_arr)) {

						$this->session->set_flashdata("status", "success");
						$this->session->set_flashdata("msg", "Slider Successfully Updated");
						if ($filename != $old_img) { // Add unlink logic
							unlink('./public/uploads/' . $unlink_folder . '/' . $unlink_filename);
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
					echo json_encode(array("status" => "error", "msg" => "Validatino Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
				} else {
					$upload_status = 'true';
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$filename = md5(time()) . "_expert" . "." . $ext;

					$config['upload_path'] = './public/uploads/expert/';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = 8024; // In KB
					$filesize = $config['max_size'];
					$config['file_name'] = $filename;
					$this->load->library('upload', $config);

					if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
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

					if ($upload_status = "true") {
						if ($this->db->insert('expert', $data_arr)) {
							echo json_encode(array("status" => "success", "msg" => "Expert Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
							// echo "success";
						} else {
							echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
							// echo "failed";
						}
					}
				}
			} elseif ($this->uri->segment(3) == 'Edit') {

				$userdata = $this->db->get_where('expert', array('id' => $this->input->post('id')))->row();
				$old_img = $userdata->image;
				$upload_status = 'true';
				$filename = $old_img;
				if (!empty($_FILES['image']['name'])) {
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$filename = md5(time()) . "_expert" . "." . $ext;
				}


				$config['upload_path'] = './public/uploads/expert/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 8024; // In KB
				$filesize = $config['max_size'];
				$config['file_name'] = $filename;
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('image')) {
					$upload_status = "false";
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


				if ($upload_status = 'true') {
					$table_name = "expert";
					$unlink_filename = $old_img;
					$unlink_folder = "expert";
					if ($this->db->where('id', $userdata->id)->update('expert', $data_arr)) {

						$this->session->set_flashdata("status", "success");
						$this->session->set_flashdata("msg", "Expert Successfully Updated");
						if ($filename != $old_img) {
							unlink('./public/uploads/' . $unlink_folder . '/' . $unlink_filename);
						}
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
					$filename = md5(time()) . "_intern" . "." . $ext;

					$config['upload_path'] = './public/uploads/expert/';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = 8024; // In KB
					$filesize = $config['max_size'];
					$config['file_name'] = $filename;
					$this->load->library('upload', $config);

					if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
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

					if ($upload_status = "true") {
						if ($this->db->insert('intern', $data_arr)) {
							echo json_encode(array("status" => "success", "msg" => "intern Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
							// echo "success";
						} else {
							echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
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
					$filename = md5(time()) . "_intern" . "." . $ext;
				}


				$config['upload_path'] = './public/uploads/expert/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 8024; // In KB
				$filesize = $config['max_size'];
				$config['file_name'] = $filename;
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('image')) {
					$upload_status = "false";
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


				if ($upload_status = 'true') {
					$table_name = "intern";
					$unlink_filename = $old_img;
					$unlink_folder = "expert";
					if ($this->db->where('id', $userdata->id)->update('intern', $data_arr)) {

						$this->session->set_flashdata("status", "success");
						$this->session->set_flashdata("msg", "Expert Successfully Updated");
						if ($filename != $old_img) {
							unlink('./public/uploads/' . $unlink_folder . '/' . $unlink_filename);
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
					$filename = md5(time()) . "_product" . "." . $ext;

					$config['upload_path'] = './public/uploads/product/';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = 8024; // In KB
					$filesize = $config['max_size'];
					$config['file_name'] = $filename;
					$this->load->library('upload', $config);

					if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
					} else {
						$upload_status = "true";
					}

					$data_arr = array(
						"title" => $this->input->post('name'),
						"price" => $this->input->post('price'),
						"img" => $filename,
						"status" => 'true'

					);

					if ($upload_status = "true") {
						if ($this->db->insert('productcost', $data_arr)) {
							echo json_encode(array("status" => "success", "msg" => "Product Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
							// echo "success";
						} else {
							echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
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
					$filename = md5(time()) . "_product" . "." . $ext;
				}


				$config['upload_path'] = './public/uploads/product/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 8024; // In KB
				$filesize = $config['max_size'];
				$config['file_name'] = $filename;
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('image')) {
					$upload_status = "false";
				} else {
					$upload_status = "true";
				}

				$data_arr = array(
					"title" => $this->input->post('name'),
					"price" => $this->input->post('price'),
					"img" => $filename,
					"status" => 'true'

				);


				if ($upload_status = 'true') {
					$table_name = "productcost";
					$unlink_filename = $old_img;
					$unlink_folder = "product";
					if ($this->db->where('id', $userdata->id)->update('productcost', $data_arr)) {

						$this->session->set_flashdata("status", "success");
						$this->session->set_flashdata("msg", "Product Successfully Updated");
						if ($filename != $old_img) {
							unlink('./public/uploads/' . $unlink_folder . '/' . $unlink_filename);
						}
						redirect(base_url('Admin/OurProduct'));
					} else {
						$this->session->set_flashdata("status", "error");
						$this->session->set_flashdata("msg", "Something Went Wrong");
						redirect(base_url('Admin/OurProduct'));

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
					$filename = md5(time()) . "_news" . "." . $ext;

					$config['upload_path'] = './public/uploads/news/';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = 8024; // In KB
					$filesize = $config['max_size'];
					$config['file_name'] = $filename;
					$this->load->library('upload', $config);

					if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
					} else {
						$upload_status = "true";
					}

					$data_arr = array(
						"image" => $filename,
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
					);

					if ($upload_status = 'true') {
						if ($this->db->insert('news', $data_arr)) {
							echo json_encode(array("status" => "success", "msg" => "News Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
							// echo "success";
						} else {
							echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
							// echo "failed";
						}
					} else {
						echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
					}
				}
			} elseif ($this->uri->segment(3) == 'Edit') {

				$userdata = $this->db->get_where('news', array('id' => $this->input->post('id')))->row();
				$old_img = $userdata->image;
				$upload_status = 'true';
				$filename = $old_img;
				if (!empty($_FILES['image']['name'])) {
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$filename = md5(time()) . "_news" . "." . $ext;
				}


				$config['upload_path'] = './public/uploads/news/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 8024; // In KB
				$filesize = $config['max_size'];
				$config['file_name'] = $filename;
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('image')) {
					$upload_status = "false";
				} else {
					$upload_status = "true";
				}

				$data_arr = array(
					"image" => $filename,
					"status" => 'true',
					"date" => $this->data['date'],
					"time" => $this->data['time']
				);

				if ($upload_status = 'true') {
					$table_name = "news";
					$unlink_filename = $old_img;
					$unlink_folder = "news";

					if ($this->db->where('id', $userdata->id)->update('news', $data_arr)) {

						$this->session->set_flashdata("status", "success");
						$this->session->set_flashdata("msg", "News Successfully Updated");
						if ($filename != $old_img) {
							unlink('./public/uploads/' . $unlink_folder . '/' . $unlink_filename);
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
					$filename = md5(time()) . "_gallery" . "." . $ext;

					$config['upload_path'] = './public/uploads/gallery/';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = 8024; // In KB
					$filesize = $config['max_size'];
					$config['file_name'] = $filename;
					$this->load->library('upload', $config);

					if (!$this->upload->do_upload('image')) {
						$upload_status = "false";
					} else {
						$upload_status = "true";
					}

					$data_arr = array(
						"image" => $filename,
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
					);

					if ($upload_status = 'true') {
						if ($this->db->insert('gallery', $data_arr)) {
							echo json_encode(array("status" => "success", "msg" => "Picture Successfully Added", "title" => "Successfully Added!", "reload" => "true", "redirect" => 'false'));
							// echo "success";
						} else {
							echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
							// echo "failed";
						}
					} else {
						echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
					}
				}
			} elseif ($this->uri->segment(3) == 'Edit') {

				$userdata = $this->db->get_where('gallery', array('id' => $this->input->post('id')))->row();
				$old_img = $userdata->image;
				$upload_status = 'true';
				$filename = $old_img;
				if (!empty($_FILES['image']['name'])) {
					$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
					$filename = md5(time()) . "_gallery" . "." . $ext;
				}

				$config['upload_path'] = './public/uploads/gallery/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 8024; // In KB
				$filesize = $config['max_size'];
				$config['file_name'] = $filename;
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('image')) {
					$upload_status = "false";
				} else {
					$upload_status = "true";
				}

				$data_arr = array(
					"image" => $filename,
					"status" => 'true',
					"date" => $this->data['date'],
					"time" => $this->data['time']
				);

				// var_dump($data_arr);die();

				if ($upload_status = 'true') {
					$table_name = "gallery";
					$unlink_filename = $old_img;
					$unlink_folder = "gallery";
					if ($this->db->where('id', $userdata->id)->update('gallery', $data_arr)) {
						$this->session->set_flashdata("status", "success");
						$this->session->set_flashdata("msg", "Picture Successfully Updated");
						unlink('./public/uploads/' . $unlink_folder . '/' . $unlink_filename);
						redirect(base_url('Admin/ManageGallery'));
					} else {

						$this->session->set_flashdata("status", "error");
						$this->session->set_flashdata("msg", "Something Went Wrong");
						redirect(base_url('Admin/ManageGallery'));
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


			$result = $this->db->where('id', $data['id'])->get($data['tablename']);

			$resdata = $result->result_array();

			if ($this->db->where('id', $data['id'])->delete($data['tablename'])) {
				$file_path = './public/uploads/' . $unlink_folder . '/' . $unlink_filename;
				if (file_exists($file_path)) {
					unlink($file_path);
				}
				echo json_encode(array("status" => "success", "msg" => "Item Successfully Deleted", "title" => "Successfully Deleted!", "reload" => "true", "redirect" => 'false'));
			} else {
				echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
			}
		}
	}

	//Delete
	public function Delete()
	{

		if ($this->db->where('id', $this->input->post('id'))->delete($this->input->post('table'))) {
			echo json_encode(array("status" => "success", "msg" => "Successfully Deleted.", "title" => "Success", "reload" => "true", "redirect" => 'true'));
		} else {
			echo json_encode(array("status" => "error", "msg" => "Something Went Wrong .", "title" => "", "reload" => "true", "redirect" => 'false'));
		}
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
				echo json_encode(array("status" => "success", "msg" => "Status Successfully Chamged.", "title" => "Changed", "reload" => "true", "redirect" => 'false'));
			} else {
				echo json_encode(array("status" => "error", "msg" => "Something Went Wrong .", "title" => "", "reload" => "true", "redirect" => 'false'));
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

}