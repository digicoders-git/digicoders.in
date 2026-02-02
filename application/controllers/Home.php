<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		// ✅ 1. Model load FIRST
		$this->load->model('Service_model');

		// ✅ 2. Data fetch
		$states = $this->Service_model->getStates();

		if (!empty($states)) {
			foreach ($states as $state) {
				$state->cities = $this->Service_model
					->getCitiesByState($state->state_name);
			}
		}

		$this->load->vars([
			'states' => $states
		]);
		$data['cities'] = $this->Service_model->get_active_cities_with_pages();
		$data['services'] = $this->db->order_by('id', 'desc')->get('seo_pages')->result();
		$allservice = $this->db
			->select('service_name, url_slug')
			->where('status', 'true')
			->group_by('service_name')
			->get('seo_pages')
			->result();


		// ✅ SERVICES (tooltip ke liye)
		$services = $this->Service_model->getServices();

		// ✅ FOOTER KE LIYE GLOBAL VARIABLES
		$this->load->vars([
			'states' => $states,
			'services' => $services,
			'allservice' => $allservice,

		]);

		date_default_timezone_set("Asia/Kolkata");



		$this->data = array(
			"app_name" => "Software Development | Website Development | Mobile Application Development | Digital Marketing | Summer Training | Internship | Apprenticeship",
			"date" => date('Y-m-d'),
			"time" => date('h:i:s A'),
			"mobile_no" => "9198483820",
			"telephone_no" => "0522-4235604",
			"email" => "info@digicoders.in"
		);
	}


	public function Test()
	{
		// $res = $this->db->get('blog')->result();

		$res = $this->db->query("select * from productcost")->result();

		echo "<pre>";
		print_r($res);
		die();
	}
	public function BlogsDetails($id = NULL)
	{
		// If the ID is missing, show a 404 error
		if ($id === NULL) {
			echo ("hiii");// Show 404 error if ID is missing
		}

		// Fetch the blog based on the ID
		$data['blog'] = $this->db->where('id', $id)->get('blog')->row();

		// Debugging: If no blog is found, show an error message
		if (!$data['blog']) {
			echo "Error: Blog not found for ID = " . $id;
			die();  // Stop further execution
		}

		// Loading the blog details page with the fetched data
		$this->load->view('Home/BlogsDetails', $data);
	}




	public function Login()
	{
		$this->load->view('Admin/Index');
	}

	public function SubmitForm()
	{

		if ($this->uri->segment(3)) {
			##Call Back Request From
			if ($this->uri->segment(3) == 'callBackReq' && $this->input->is_ajax_request()) {
				$this->form_validation->set_rules('Name', 'Name', 'required');
				$this->form_validation->set_rules('Mobile', 'Mobile', 'required');
				$this->form_validation->set_rules('Date1', 'Date', 'required');
				$this->form_validation->set_rules('Date1', 'Timing', 'required');

				if ($this->form_validation->run() == false) {
					echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
				} else {
					$data_arr = array(
						"name" => $this->input->post('Name'),
						"mobile" => $this->input->post('Mobile'),
						"req_date" => $this->input->post('Date1'),
						"timing" => $this->input->post('Date1'),
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
					);

					if ($this->db->insert('call_request', $data_arr)) {
						echo json_encode(array("status" => "success", "msg" => "Your Request Saved successfully.", "title" => "Saved", "reload" => "true", "redirect" => 'false'));
					} else {
						echo json_encode(array("status" => "error", "msg" => "Something Went Wrong .", "title" => "", "reload" => "true", "redirect" => 'false'));
					}

				}
			}
			##contact Us form submit
			if ($this->uri->segment(3) == 'contactForm' && $this->input->is_ajax_request()) {
				$this->form_validation->set_rules('Name', 'Name', 'required');
				$this->form_validation->set_rules('Email', 'Email', 'required');
				$this->form_validation->set_rules('Mobile', 'Mobile', 'required');
				$this->form_validation->set_rules('Enquiry', 'Enquiry', 'required');
				$this->form_validation->set_rules('Message', 'Message', 'required');

				if ($this->form_validation->run() == false) {
					echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
				} else {
					$data_arr = array(
						"name" => $this->input->post('Name'),
						"email" => $this->input->post('Email'),
						"mobile" => $this->input->post('Mobile'),
						"enquiry" => $this->input->post('Enquiry'),
						"message" => $this->input->post('Message'),
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
					);
					if ($this->db->insert('contact', $data_arr)) {
						echo json_encode(array("status" => "success", "msg" => "Your Contact Request Saved Successfully!.", "title" => "Saved", "reload" => "true", "redirect" => 'false'));
					} else {
						echo json_encode(array("status" => "error", "msg" => "Something Went Wrong .", "title" => "", "reload" => "true", "redirect" => 'false'));
					}

				}
			}
			##career form Submit Action
			if ($this->uri->segment(3) == 'career' && $this->input->is_ajax_request()) {
				$this->form_validation->set_rules('ApplyFor', 'ApplyFor', 'required');
				$this->form_validation->set_rules('Name', 'Name', 'required');
				$this->form_validation->set_rules('Email', 'Email', 'required');
				$this->form_validation->set_rules('Mobile', 'Mobile', 'required');
				$this->form_validation->set_rules('Message', 'Message', 'required');
				if (empty($_FILES['UploadFile']['name'])) {
					$this->form_validation->set_rules('UploadFile', 'Resume', 'required');
				}
				if ($this->form_validation->run() == false) {
					echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
				} else {
					$upload_status = 'true';
					$ext = pathinfo($_FILES["UploadFile"]["name"], PATHINFO_EXTENSION);
					$filename = md5(time()) . "_resume" . "." . $ext;

					$config['upload_path'] = './public/uploads/career/';
					$config['allowed_types'] = 'jpg|png|jpeg|pdf';
					$config['max_size'] = 8024; // In KB
					$filesize = $config['max_size'];
					$config['file_name'] = $filename;
					$this->load->library('upload', $config);

					if (!$this->upload->do_upload('UploadFile')) {
						$upload_status = "false";
					} else {
						$upload_status = "true";
					}
					$data_arr = array(
						"name" => $this->input->post('Name'),
						"email" => $this->input->post('Email'),
						"mobile" => $this->input->post('Mobile'),
						"appaly_for" => $this->input->post('ApplyFor'),
						"resume" => $filename,
						"message" => $this->input->post('Message'),
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
					);
					if ($upload_status = "true") {
						if ($this->db->insert('career', $data_arr)) {
							echo json_encode(array("status" => "success", "msg" => "Career Successfully Saved", "title" => "Successfully Saved!", "reload" => "true", "redirect" => 'false'));
						} else {
							echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
						}
					} else {
						echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
					}

				}
			}

			##Request Proposal Enquiey From submit
			if ($this->uri->segment(3) == 'proposalReq' && $this->input->is_ajax_request()) {
				$this->form_validation->set_rules('Name', 'Name', 'required');
				$this->form_validation->set_rules('Email', 'Email', 'required');
				$this->form_validation->set_rules('Mobile', 'Mobile', 'required');
				$this->form_validation->set_rules('Company', 'Company', 'required');
				$this->form_validation->set_rules('Job', 'Job', 'required');
				$this->form_validation->set_rules('Message', 'Message', 'required');

				if ($this->form_validation->run() == false) {
					echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
				} else {
					$data_arr = array(
						"name" => $this->input->post('Name'),
						"email" => $this->input->post('Email'),
						"mobile" => $this->input->post('Mobile'),
						"company" => $this->input->post('Company'),
						"job" => $this->input->post('Job'),
						"message" => $this->input->post('Message'),
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
					);

					if ($this->db->insert('proposal_req', $data_arr)) {
						echo json_encode(array("status" => "success", "msg" => "Proposal Successfully Saved", "title" => "Successfully Saved!", "reload" => "true", "redirect" => 'false'));
					} else {
						echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
					}

				}

			}
			##quick Enquiey From submit
			if ($this->uri->segment(3) == 'quickEnq' && $this->input->is_ajax_request()) {
				$this->form_validation->set_rules('Name', 'Name', 'required');
				$this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'required');

				if ($this->form_validation->run() == false) {
					echo json_encode(array("status" => "error", "msg" => "Please check the Captcha!", "title" => "Validation Error", "reload" => "false", "redirect" => 'false'));
				} else {
					// Verify Google Captcha
					$recaptchaResponse = $this->input->post('g-recaptcha-response');
					$secretKey = 'YOUR_SECRET_KEY_HERE'; // Replace with your actual secret key

					$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $recaptchaResponse);
					$responseData = json_decode($verifyResponse);

					if (!$responseData->success) {
						echo json_encode(array("status" => "error", "msg" => "Robot verification failed!", "title" => "Error", "reload" => "false", "redirect" => 'false'));
						return;
					}
					$data_arr = array(
						"name" => $this->input->post('Name'),
						"mobile" => $this->input->post('Mobile'), // Assuming Mobile is still needed, but not in validation rules
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
					);
					if ($this->db->insert('quick_enquiry', $data_arr)) {
						echo json_encode(array("status" => "success", "msg" => "Enquiry Successfully Saved", "title" => "Successfully Saved!", "reload" => "true", "redirect" => 'false'));
					} else {
						echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
					}

				}

			}


		}
	}
	public function index()
	{
		$data['clientdata'] = $this->db->order_by('id', 'desc')->limit(25)->get('client')->result();
		$data['userdata'] = $this->db->order_by('id', 'desc')->get('projects')->result();
		$data['blogdata'] = $this->db->order_by('id', 'desc')->limit(2)->get('blog')->result();
		$data['sliderdata'] = $this->db->order_by('id', 'desc')->get_where('slider', array('status' => 'true'))->result();

		$this->load->view('Home/Index', $data);
	}
	public function AboutDigiCoders()
	{
		$this->load->view('Home/AboutDigiCoders');
	}
	public function AboutTheDigiCoders()
	{
		$this->load->view('Home/AboutTheDigiCoders');
	}
	public function AboutDigiCodersTechnologies()
	{
		$this->load->view('Home/AboutDigiCodersTechnologies');
	}
	public function AboutCodersAdda()
	{
		$this->load->view('Home/AboutCodersAdda');
	}
	public function AboutDigitalCoders()
	{
		$this->load->view('Home/AboutDigitalCoders');
	}
	public function Leadership()
	{
		$this->load->view('Home/Leadership');
	}
	public function OurExperts()
	{
		$data['userdata'] = $this->db->order_by('sequence', 'asc')->get_where('expert', ['status' => 'true'])->result();
		$data['interndata'] = $this->db->order_by('sequence', 'asc')->get_where('intern', ['status' => 'true'])->result();
		$this->load->view('Home/OurExperts', $data);
	}
	public function WhyChooseUs()
	{
		$this->load->view('Home/WhyChooseUs');
	}
	public function Our_Products()
	{

		$this->load->view('Home/Our_Products');
	}
	public function OurHistory()
	{
		$this->load->view('Home/OurHistory');
	}
	public function FAQs()
	{
		$this->load->view('Home/FAQs');
	}
	public function Career()
	{
		$data['jobdata'] = $this->db->get_where('jobs', array('status =' => 'true'))->result();
		$this->load->view('Home/Career', $data);
	}
	public function ContactUs()
	{
		$this->load->view('Home/ContactUs');
	}
	public function ITServices()
	{
		$this->load->view('Home/ITServices');
	}
	public function SoftwareDevelopment()
	{
		$this->load->view('Home/SoftwareDevelopment');
	}
	public function WebsiteDevelopment()
	{
		$this->load->view('Home/WebsiteDevelopment');
	}
	public function MobileApplicationDevelopment()
	{
		$this->load->view('Home/MobileApplicationDevelopment');
	}
	public function DigitalMarketing()
	{
		$this->load->view('Home/DigitalMarketing');
	}
	public function GraphicsDesigning()
	{
		$this->load->view('Home/GraphicsDesigning');
	}
	public function DomainAndHosting()
	{
		$this->load->view('Home/DomainAndHosting');
	}
	public function ERPandCRMDevelopment()
	{
		$this->load->view('Home/ERPandCRMDevelopment');
	}
	public function MaintenanceServices()
	{
		$this->load->view('Home/MaintenanceServices');
	}
	public function OurPortfolio()
	{
		$this->load->view('Home/OurPortfolio');
	}
	public function OurProjects()
	{
		$data['userdata'] = $this->db->order_by('id', 'desc')->get('projects')->result();
		$this->load->view('Home/OurProjects', $data);
	}
	public function OurClient()
	{
		$data['userdata'] = $this->db->order_by('id', 'desc')->get('client')->result();
		$this->load->view('Home/OurClient', $data);

	}
	public function Products()
	{
		$data['product'] = $this->db->order_by('id', 'asc')->get('productcost')->result();
		$this->load->view('Home/Products', $data);
	}
	public function Cricket_fantasy_in_digicoder_in_lucknow()
	{
		$this->load->view('Home/Cricket_fantasy');
	}
	public function School_management_system_in_digicoder_in_lucknow()
	{
		$this->load->view('Home/schoolsoftware');
	}
	public function HRMS_in_digicoder_in_lucknow()
	{
		$this->load->view('Home/HRMS');
	}
	public function CRM_in_digicoder_in_lucknow()
	{
		$this->load->view('Home/CRM');
	}
	public function ERP_in_digicoder_in_lucknow()
	{
		$this->load->view('Home/ERP');
	}
	public function lead_management_digicoder_in_lucknow()
	{
		$this->load->view('Home/leadsoftware');
	}
	public function fee_management_digicoder_in_lucknow()
	{
		$this->load->view('Home/feesoftware');
	}
	// public function multigame_plateform_in_digicoder_in_lucknow()
	// {
	// 	$this->load->view('Home/multigame');
	// }
	// public function Food_delivery_App_in_digicoder_in_lucknow()
	// {
	// 	$this->load->view('Home/Food_delivery');
	//}
	public function Packages()
	{
		$this->load->view('Home/Packages');
	}
	public function Blogs()
	{
		// Fetching all blogs and ordering by ID descending
		$data['blogdata'] = $this->db->order_by('id', 'desc')->get('blog')->result();

		// Loading the Blogs view with the fetched blog data
		$this->load->view('Home/Blogs', $data);
	}
	public function DigiCodersInNews()
	{
		//  $data['newsdata'] = $this->db->order_by('id', 'desc')->get('news')->result();
		$data['newsdata'] = $this->db->get_where('news', array('status =' => 'true'))->result();
		$this->load->view('Home/DigiCodersInNews', $data);
	}
	public function RequestProposal()
	{
		$this->load->view('Home/RequestProposal');
	}
	public function RefundAndCancellation()
	{
		$this->load->view('Home/RefundAndCancellation');
	}
	public function TermsAndConditions()
	{
		$this->load->view('Home/TermsAndConditions');
	}
	public function PrivacyPolicies()
	{
		$this->load->view('Home/PrivacyPolicies');
	}
	public function TermOfPayment()
	{
		$this->load->view('Home/TermOfPayment');
	}
	public function OurGallery()
	{
		$data['userdata'] = $this->db->order_by('id', 'desc')->get('gallery')->result();
		$this->load->view('Home/OurGallery', $data);
	}

	public function OurVideo()
	{
		$data['userdata'] = $this->db->order_by('id', 'desc')->get('gallery')->result();
		$this->load->view('Home/OurVideo', $data);
	}
	public function Jobs()
	{
		$this->load->view('Home/Jobs');
	}
	public function city_pages($city_slug)
	{
		$city_name = str_replace('-', ' ', $city_slug);

		$pages = $this->db
			->where('city_name', $city_name)
			->where('status', 'true')
			->get('seo_pages')
			->result();

		if (empty($pages)) {
			show_404();
		}

		$data['city_name'] = ucwords($city_name);
		$data['pages'] = $pages;

		$data['webs'] = $this->db
			->where('city_name', $city_name)
			->like('title', 'Web Development')
			->order_by('service_name', 'ASC')
			->get('seo_pages')
			->result();

		$data['mobile_app'] = $this->db
			->where('city_name', $city_name)
			->like('title', 'Mobile App Development')
			->order_by('service_name', 'ASC')
			->get('seo_pages')
			->result();

		$data['ecommerce'] = $this->db
			->where('city_name', $city_name)
			->like('title', 'Ecommerce Website Development')
			->order_by('service_name', 'ASC')
			->get('seo_pages')
			->result();

		$data['software'] = $this->db
			->where('city_name', $city_name)
			->like('title', 'Software Development')
			->order_by('service_name', 'ASC')
			->get('seo_pages')
			->result();
		$data['projects'] = $this->db->order_by('id', 'desc')->limit(9)->get('projects')->result();
		$this->load->view('Home/city_pages', $data);
	}


	public function servicepage($slug = null)
	{
		if (empty($slug)) {
			show_404();
		}

		$page = $this->Service_model->get_page_by_slug($slug);

		if (empty($page)) {
			show_404();
		}

		// 🔥 MAIN FIX (IMPORTANT)
		$data['service_name'] = $page->service_name;
		$data['city_name'] = $page->city_name;
		$data['state_name'] = $page->state_name;

		// 🔹 For dropdown / internal linking
		$data['cities'] = $this->db
			->distinct()
			->select('city_name')
			->where('status', 'true')
			->get('seo_pages')
			->result();

		$data['services'] = $this->db
			->distinct()
			->select('service_name')
			->where('status', 'true')
			->get('seo_pages')
			->result();

		// 🔹 Full page data
		$data['page'] = $page;
		$city_name = $page->city_name;
		$data['webs'] = $this->db
			->where('city_name', $city_name)
			->like('title', 'Web Development')
			->order_by('service_name', 'ASC')
			->get('seo_pages')
			->result();

		$data['mobile_app'] = $this->db
			->where('city_name', $city_name)
			->like('title', 'Mobile App Development')
			->order_by('service_name', 'ASC')
			->get('seo_pages')
			->result();

		$data['ecommerce'] = $this->db
			->where('city_name', $city_name)
			->like('title', 'Ecommerce Website Development')
			->order_by('service_name', 'ASC')
			->get('seo_pages')
			->result();

		$data['software'] = $this->db
			->where('city_name', $city_name)
			->like('title', 'Software Development')
			->order_by('service_name', 'ASC')
			->get('seo_pages')
			->result();
		$data['projects'] = $this->db->order_by('id', 'desc')->limit(9)->get('projects')->result();
		$this->load->view('Home/Service_page', $data);
	}

	public function service($slug)
	{
		// old URL redirect
		if (strpos($slug, 'development') !== false) {
			$clean_slug = explode('-development-', $slug)[0];
			redirect(base_url($clean_slug), '301');
			exit;
		}

		$page = $this->db
			->like('url_slug', $slug, 'after')
			->where('status', 'true')
			->get('seo_pages')
			->row();

		if (!$page) {
			show_404();
		}

		$data['page'] = $page;
		$data['service_name'] = $page->service_name;
		$data['projects'] = $this->db->order_by('id', 'desc')->limit(9)->get('projects')->result();

		$this->load->view('Home/service', $data);
	}



}

