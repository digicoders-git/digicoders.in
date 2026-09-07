<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Enable CORS so other websites can fetch this API without domain restrictions
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
        
        // Handle preflight OPTIONS request
        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            http_response_code(200);
            exit();
        }
    }

    /**
     * API Index Route
     */
    public function index()
    {
        header("Content-Type: application/json; charset=UTF-8");
        echo json_encode(array(
            "status" => true,
            "message" => "DigiCoders API is running",
            "endpoints" => array(
                "projects" => base_url('api/projects')
            )
        ), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }

    /**
     * Get All Projects API
     * Supports query params:
     * - type: Filter by project category (e.g. Website, Mobile, Software)
     * - limit: Limit maximum items (e.g. 10)
     * - offset: Offset for pagination
     */
    public function projects()
    {
        header("Content-Type: application/json; charset=UTF-8");

        $type = $this->input->get('type', TRUE);
        $limit = $this->input->get('limit', TRUE);
        $offset = $this->input->get('offset', TRUE);

        $this->db->where('status', 'true');

        if (!empty($type)) {
            $this->db->like('type', $type);
        }

        $this->db->order_by('id', 'desc');

        if (!empty($limit) && is_numeric($limit)) {
            $offset_val = (!empty($offset) && is_numeric($offset)) ? (int)$offset : 0;
            $this->db->limit((int)$limit, $offset_val);
        }

        $projects = $this->db->get('projects')->result();

        $formatted_projects = array();
        foreach ($projects as $project) {
            $image_url = !empty($project->image) ? base_url('public/uploads/projects/' . $project->image) : null;
            $date = !empty($project->add_date) ? strtotime($project->add_date) : false;
            $formatted_date = $date ? date('M Y', $date) : null;

            $formatted_projects[] = array(
                "id" => $project->id,
                "title" => $project->title,
                "type" => $project->type,
                "image" => $project->image,
                "image_url" => $image_url,
                "url" => $project->url,
                "link_status" => (isset($project->link_status) && ($project->link_status == 'true' || $project->link_status == '1')),
                "add_date" => $project->add_date,
                "formatted_date" => $formatted_date,
                "status" => $project->status
            );
        }

        echo json_encode(array(
            "status" => true,
            "message" => "Projects fetched successfully",
            "total" => count($formatted_projects),
            "data" => $formatted_projects
        ), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
}
