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
	public function BlogsDetails($slug_or_id = NULL)
	{
		if ($slug_or_id === NULL) {
			redirect(base_url('blogs'));
			return;
		}

		// Try fetching by url slug first, then fallback to id
		$blog = $this->db->get_where('blog', array('url' => $slug_or_id))->row();
		if (!$blog && is_numeric($slug_or_id)) {
			$blog = $this->db->get_where('blog', array('id' => $slug_or_id))->row();
		}

		if (!$blog) {
			show_404();
			return;
		}

		$data['blog'] = $blog;

		// Fetch recent blogs for sticky sidebar (excluding current)
		$data['recent_blogs'] = $this->db
			->where('id !=', $blog->id)
			->order_by('id', 'DESC')
			->limit(5)
			->get('blog')
			->result();

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
						"timing" => $this->input->post('Timing'),
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
					);

					if ($this->db->insert('call_request', $data_arr)) {
						send_form_email('New Call Back Request', $data_arr);
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
				$this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'required');

				if ($this->form_validation->run() == false) {
					echo json_encode(array("status" => "error", "msg" => "Please check the Captcha!", "title" => "Validation Error", "reload" => "false", "redirect" => 'false'));
				} else {
					// Verify Google Captcha
					$recaptchaResponse = $this->input->post('g-recaptcha-response');
					$secretKey = RECAPTCHA_SECRET_KEY;

					$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $recaptchaResponse);
					$responseData = json_decode($verifyResponse);

					if (!$responseData->success) {
						echo json_encode(array("status" => "error", "msg" => "Robot verification failed!", "title" => "Error", "reload" => "false", "redirect" => 'false'));
						return;
					}

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
						send_form_email('New Contact Us Enquiry', $data_arr);
						echo json_encode(array("status" => "success", "msg" => "Your Contact Request Saved Successfully!.", "title" => "Saved", "reload" => "true", "redirect" => 'false'));
					} else {
						echo json_encode(array("status" => "error", "msg" => "Something Went Wrong .", "title" => "", "reload" => "true", "redirect" => 'false'));
					}

				}
			}
			##career form Submit Action
			if ($this->uri->segment(3) == 'career' && $this->input->is_ajax_request()) {
				if (get_hiring_status() !== 'open') {
					echo json_encode(array("status" => "error", "msg" => "Currently we are not hiring! Follow our LinkedIn page for future job updates.", "title" => "Hiring Currently Closed", "reload" => "false", "redirect" => 'false'));
					exit;
				}

				$this->form_validation->set_rules('ApplyFor', 'ApplyFor', 'required');
				$this->form_validation->set_rules('Name', 'Name', 'required');
				$this->form_validation->set_rules('Email', 'Email', 'required');
				$this->form_validation->set_rules('Mobile', 'Mobile', 'required|exact_length[10]');
				$this->form_validation->set_rules('Message', 'Message', 'required');
				if (empty($_FILES['UploadFile']['name'])) {
					$this->form_validation->set_rules('UploadFile', 'Resume', 'required');
				}
				if ($this->form_validation->run() == false) {
					echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
				} else {
					$upload_status = 'true';
					$upload_error = '';
					$upload_dir = './public/uploads/career/';
					if (!is_dir($upload_dir)) {
						mkdir($upload_dir, 0777, true);
					}
					$ext = pathinfo($_FILES["UploadFile"]["name"], PATHINFO_EXTENSION);
					$clean_name = preg_replace('/[^a-zA-Z0-9_]/', '_', $this->input->post('Name'));
					$filename = $clean_name . "_" . $this->input->post('Mobile') . "_resume" . "." . $ext;
					$config['upload_path'] = $upload_dir;
					$config['allowed_types'] = 'jpg|png|jpeg|pdf';
					$config['max_size'] = 8024; // In KB
					$config['file_name'] = $filename;
					$this->load->library('upload', $config);

					if (!$this->upload->do_upload('UploadFile')) {
						$upload_status = "false";
						$upload_error = strip_tags($this->upload->display_errors());
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
					if ($upload_status == "true") {
						if ($this->db->insert('career', $data_arr)) {
							send_form_email('New Career Application', $data_arr);
							echo json_encode(array("status" => "success", "msg" => "Career Application Successfully Submitted!", "title" => "Successfully Submitted!", "reload" => "true", "redirect" => 'false'));
						} else {
							echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
						}
					} else {
						echo json_encode(array("status" => "error", "msg" => (!empty($upload_error) ? $upload_error : "Failed to upload resume file"), "title" => "Upload Error!", "reload" => "false", "redirect" => 'false'));
					}
				}
			}

			##Request Proposal Enquiey From submit
			if ($this->uri->segment(3) == 'proposalReq' && $this->input->is_ajax_request()) {
				$this->form_validation->set_rules('Name', 'Name', 'required');
				$this->form_validation->set_rules('Email', 'Email', 'required');
				$this->form_validation->set_rules('Mobile', 'Mobile', 'required|exact_length[10]');
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
						send_form_email('New Proposal Request', $data_arr);
						echo json_encode(array("status" => "success", "msg" => "Proposal Successfully Saved", "title" => "Successfully Saved!", "reload" => "true", "redirect" => 'false'));
					} else {
						echo json_encode(array("status" => "error", "msg" => "Something Went Wrong", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
					}

				}

			}
			##quick Enquiey From submit
			if ($this->uri->segment(3) == 'quickEnq' && $this->input->is_ajax_request()) {
				$this->form_validation->set_rules('Name', 'Name', 'required');
				$this->form_validation->set_rules('Mobile', 'Mobile', 'required|exact_length[10]');

				if ($this->form_validation->run() == false) {
					echo json_encode(array("status" => "error", "msg" => "Validation Error", "title" => "Something went wrong!", "reload" => "false", "redirect" => 'false'));
				} else {
					$data_arr = array(
						"name" => $this->input->post('Name'),
						"mobile" => $this->input->post('Mobile'),
						"status" => 'true',
						"date" => $this->data['date'],
						"time" => $this->data['time']
					);
					if ($this->db->insert('quick_enquiry', $data_arr)) {
						send_form_email('New Quick Enquiry', $data_arr);
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
		$data['userdata'] = $this->db->where('status', 'true')->order_by('id', 'desc')->limit(12)->get('projects')->result();
		$data['blogdata'] = $this->db->order_by('id', 'desc')->limit(2)->get('blog')->result();
		$data['sliderdata'] = $this->db->order_by('id', 'desc')->get_where('slider', array('status' => 'true'))->result();

		$data['expertdata'] = $this->db->order_by('sequence', 'asc')->get_where('expert', ['status' => 'true'])->result();

		// Fetch Software Products
		$softwares = $this->db->order_by('id', 'asc')->get_where('software_products', array('status' => 'Active'))->result();
		foreach ($softwares as &$sw) {
			$sw->panels = $this->db->get_where('software_panels', array('software_id' => $sw->id))->result();
		}
		$data['softwares'] = $softwares;

		$this->load->view('Home/Index', $data);
	}

	public function submitDemoRequest()
	{
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
		header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');
		if ($this->input->method() === 'options') {
			exit(0);
		}

		while (ob_get_level()) {
			ob_end_clean();
		}
		header('Content-Type: application/json');

		$data = array(
			'software_id' => $this->input->post('software_id'),
			'software_name' => $this->input->post('software_name'),
			'name' => $this->input->post('name'),
			'mobile' => $this->input->post('mobile'),
			'email' => $this->input->post('email'),
			'message' => $this->input->post('message'),
			'created_at' => date('Y-m-d H:i:s')
		);

		if ($this->db->insert('software_demo_requests', $data)) {
			try {
				send_form_email('New Demo Request', $data);
			} catch (Throwable $t) {
				log_message('error', 'Email error in submitDemoRequest: ' . $t->getMessage());
			}
			echo json_encode(array('status' => 'success', 'message' => 'Your demo request has been submitted successfully. Our team will contact you soon!', 'msg' => 'Your demo request has been submitted successfully. Our team will contact you soon!'));
			exit;
		} else {
			echo json_encode(array('status' => 'error', 'message' => 'Failed to submit request. Please try again.', 'msg' => 'Failed to submit request. Please try again.'));
			exit;
		}
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
	public function LucknowBranch()
	{
		$data['userdata'] = $this->db->where('status', 'true')->order_by('id', 'desc')->limit(8)->get('projects')->result();
		$data['expertdata'] = $this->db->order_by('sequence', 'asc')->get_where('expert', ['status' => 'true'])->result();
		$this->load->view('Home/LucknowBranch', $data);
	}
	public function KanpurBranch()
	{
		$data['userdata'] = $this->db->where('status', 'true')->order_by('id', 'desc')->limit(8)->get('projects')->result();
		$this->load->view('Home/KanpurBranch', $data);
	}
	public function GorakhpurBranch()
	{
		$data['userdata'] = $this->db->where('status', 'true')->order_by('id', 'desc')->limit(8)->get('projects')->result();
		$this->load->view('Home/GorakhpurBranch', $data);
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
		$data['userdata'] = $this->db->where('status', 'true')->order_by('id', 'desc')->get('projects')->result();
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
	public function multigame_plateform_in_digicoder_in_lucknow()
	{
		$this->load->view('Home/multigame');
	}
	public function Food_delivery_App_in_digicoder_in_lucknow()
	{
		$this->load->view('Home/Food_delivery');
	}
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
	public function ReturnPolicy()
	{
		$this->load->view('Home/ReturnPolicy');
	}
	public function ShippingPolicy()
	{
		$this->load->view('Home/ShippingPolicy');
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
		$data['projects'] = $this->db->where('status', 'true')->order_by('id', 'desc')->limit(9)->get('projects')->result();
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
		$data['projects'] = $this->db->where('status', 'true')->order_by('id', 'desc')->limit(9)->get('projects')->result();
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
		$data['projects'] = $this->db->where('status', 'true')->order_by('id', 'desc')->limit(9)->get('projects')->result();
		$this->load->view('Home/service', $data);
	}

	public function softwareDetails($slug = NULL)
	{
		if ($slug === NULL) {
			show_404();
		}

		$data['software'] = $this->db->get_where('software_products', array('slug' => $slug, 'status' => 'Active'))->row();

		if (!$data['software']) {
			show_404();
		}

		$data['panels'] = $this->db->get_where('software_panels', array('software_id' => $data['software']->id))->result();
		$data['softwares'] = $this->db->get_where('software_products', array('status' => 'Active'))->result();

		$this->load->view('Home/software_details', $data);
	}
	public function submitProjectEnquiry()
	{
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
		header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');
		if ($this->input->method() === 'options') {
			exit(0);
		}

		while (ob_get_level()) {
			ob_end_clean();
		}
		header('Content-Type: application/json');

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|numeric|exact_length[10]');
		$this->form_validation->set_rules('message', 'Message', 'required');

		if ($this->form_validation->run() == FALSE) {
			echo json_encode(['status' => 'error', 'msg' => strip_tags(validation_errors(' ', ' '))]);
			exit;
		}

		$data = array(
			'project_id' => $this->input->post('project_id'),
			'project_name' => $this->input->post('project_name'),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'mobile' => $this->input->post('mobile'),
			'message' => $this->input->post('message'),
			'add_date' => date('Y-m-d H:i:s'),
			'status' => 'Pending'
		);

		if ($this->db->insert('project_enquiries', $data)) {
			try {
				send_form_email('New Project Enquiry', $data);
			} catch (Throwable $t) {
				log_message('error', 'Email error in submitProjectEnquiry: ' . $t->getMessage());
			}
			echo json_encode(['status' => 'success', 'msg' => 'Your enquiry has been submitted successfully! We will contact you soon.']);
			exit;
		} else {
			echo json_encode(['status' => 'error', 'msg' => 'Failed to submit enquiry. Please try again.']);
			exit;
		}
	}
}

