<?php
defined('BASEPATH') or exit('direct access not allowed');

class AdminSoftware extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('AdminEmail'))) {
            redirect('Authentication/AdminLogin');
        }
        
        // Auto-add additional_images column if not exists
        if (!$this->db->field_exists('additional_images', 'software_products')) {
            $this->db->query("ALTER TABLE software_products ADD COLUMN additional_images TEXT DEFAULT NULL");
        }
        if (!$this->db->field_exists('meta_title', 'software_products')) {
            $this->db->query("ALTER TABLE software_products ADD COLUMN meta_title TEXT DEFAULT NULL");
        }
        if (!$this->db->field_exists('meta_description', 'software_products')) {
            $this->db->query("ALTER TABLE software_products ADD COLUMN meta_description TEXT DEFAULT NULL");
        }
    }

    public function index()
    {
        $this->data['softwares'] = $this->db->order_by('id', 'desc')->get('software_products')->result();
        $this->load->view('Admin/software/index', $this->data);
    }

    public function add()
    {
        $this->load->view('Admin/software/add', $this->data);
    }

    public function save()
    {
        $title = $this->input->post('title');
        $slug = $this->input->post('slug') ?: url_title($title, 'dash', true);
        
        $features = $this->input->post('features') ? json_encode($this->input->post('features')) : '[]';
        
        $image = "";

        // Handle additional images
        $additional_images = [];
        if (!empty($_FILES['additional_images']['name'][0])) {
            $filesCount = count($_FILES['additional_images']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $_FILES['file']['name']     = $_FILES['additional_images']['name'][$i];
                $_FILES['file']['type']     = $_FILES['additional_images']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['additional_images']['tmp_name'][$i];
                $_FILES['file']['error']    = $_FILES['additional_images']['error'][$i];
                $_FILES['file']['size']     = $_FILES['additional_images']['size'][$i];
                
                $config['upload_path'] = './public/uploads/software/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';

                if (!is_dir($config['upload_path'])) {
                    mkdir($config['upload_path'], 0777, TRUE);
                }
                $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
                $config['file_name']     = time() . '_' . rand(1000, 9999) . '_' . $_FILES['file']['name'];
                
                $this->load->library('upload');
                $this->upload->initialize($config);
                if ($this->upload->do_upload('file')) {
                    $uploaded_file = $this->upload->data('file_name');
                    $additional_images[] = $uploaded_file;
                    if(empty($image)) {
                        $image = $uploaded_file;
                    }
                }
            }
        }

        $data = array(
            'title' => $title,
            'slug' => $slug,
            'short_description' => $this->input->post('short_description'),
            'features' => $features,
            'selling_price' => $this->input->post('selling_price'),
            'image' => $image,
            'additional_images' => json_encode($additional_images),
            'book_demo_link' => $this->input->post('book_demo_link'),
            'status' => $this->input->post('status'),
            'meta_title' => $this->input->post('meta_title'),
            'meta_description' => $this->input->post('meta_description'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        );

        $this->db->insert('software_products', $data);
        $software_id = $this->db->insert_id();

        // Save panels
        $panel_names = $this->input->post('panel_names');
        $panel_urls = $this->input->post('demo_urls');
        
        if (!empty($panel_names)) {
            for ($i = 0; $i < count($panel_names); $i++) {
                if (!empty($panel_names[$i]) && !empty($panel_urls[$i])) {
                    $panel_data = array(
                        'software_id' => $software_id,
                        'panel_name' => $panel_names[$i],
                        'panel_type' => 'link',
                        'panel_value' => $panel_urls[$i]
                    );
                    $this->db->insert('software_panels', $panel_data);
                }
            }
        }

        $this->session->set_flashdata('msg', 'Software added successfully');
        $this->session->set_flashdata('status', 'success');
        redirect('AdminSoftware/index');
    }

    public function edit($id)
    {
        $this->data['software'] = $this->db->get_where('software_products', array('id' => $id))->row();
        $this->data['panels'] = $this->db->get_where('software_panels', array('software_id' => $id))->result();
        $this->load->view('Admin/software/edit', $this->data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $slug = $this->input->post('slug') ?: url_title($title, 'dash', true);
        
        $features = $this->input->post('features') ? json_encode($this->input->post('features')) : '[]';
        
        $data = array(
            'title' => $title,
            'slug' => $slug,
            'short_description' => $this->input->post('short_description'),
            'features' => $features,
            'selling_price' => $this->input->post('selling_price'),
            'book_demo_link' => $this->input->post('book_demo_link'),
            'status' => $this->input->post('status'),
            'meta_title' => $this->input->post('meta_title'),
            'meta_description' => $this->input->post('meta_description'),
            'updated_at' => date('Y-m-d H:i:s')
        );

        if (!empty($_FILES['additional_images']['name'][0])) {
            $additional_images = [];
            $filesCount = count($_FILES['additional_images']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $_FILES['file']['name']     = $_FILES['additional_images']['name'][$i];
                $_FILES['file']['type']     = $_FILES['additional_images']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['additional_images']['tmp_name'][$i];
                $_FILES['file']['error']    = $_FILES['additional_images']['error'][$i];
                $_FILES['file']['size']     = $_FILES['additional_images']['size'][$i];
                
                $config['upload_path'] = './public/uploads/software/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';

                if (!is_dir($config['upload_path'])) {
                    mkdir($config['upload_path'], 0777, TRUE);
                }
                $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
                $config['file_name']     = time() . '_' . rand(1000, 9999) . '_' . $_FILES['file']['name'];
                
                $this->load->library('upload');
                $this->upload->initialize($config);
                if ($this->upload->do_upload('file')) {
                    $uploaded_file = $this->upload->data('file_name');
                    $additional_images[] = $uploaded_file;
                    if($i == 0) {
                        $data['image'] = $uploaded_file;
                    }
                }
            }
            if(!empty($additional_images)) {
                // Delete old additional images
                $old_data = $this->db->get_where('software_products', array('id' => $id))->row();
                if($old_data && !empty($old_data->additional_images)) {
                    $old_add_imgs = json_decode($old_data->additional_images, true);
                    if(is_array($old_add_imgs)) {
                        foreach($old_add_imgs as $o_img) {
                            if(file_exists('./public/uploads/software/' . $o_img)) {
                                unlink('./public/uploads/software/' . $o_img);
                            }
                        }
                    }
                }
                $data['additional_images'] = json_encode($additional_images);
            }
        }

        $this->db->where('id', $id)->update('software_products', $data);

        // Delete old panels and add new
        $this->db->where('software_id', $id)->delete('software_panels');
        $panel_names = $this->input->post('panel_names');
        $panel_urls = $this->input->post('demo_urls');
        
        if (!empty($panel_names)) {
            for ($i = 0; $i < count($panel_names); $i++) {
                if (!empty($panel_names[$i]) && !empty($panel_urls[$i])) {
                    $panel_data = array(
                        'software_id' => $id,
                        'panel_name' => $panel_names[$i],
                        'panel_type' => 'link',
                        'panel_value' => $panel_urls[$i]
                    );
                    $this->db->insert('software_panels', $panel_data);
                }
            }
        }

        $this->session->set_flashdata('msg', 'Software updated successfully');
        $this->session->set_flashdata('status', 'success');
        redirect('AdminSoftware/index');
    }

    public function delete($id)
    {
        $old_data = $this->db->get_where('software_products', array('id' => $id))->row();
        if ($old_data && $old_data->image && file_exists('./public/uploads/software/' . $old_data->image)) {
            unlink('./public/uploads/software/' . $old_data->image);
        }
        if($old_data && !empty($old_data->additional_images)) {
            $old_add_imgs = json_decode($old_data->additional_images, true);
            if(is_array($old_add_imgs)) {
                foreach($old_add_imgs as $o_img) {
                    if(file_exists('./public/uploads/software/' . $o_img)) {
                        unlink('./public/uploads/software/' . $o_img);
                    }
                }
            }
        }
        
        $this->db->where('id', $id)->delete('software_products'); // Will cascade delete panels due to foreign key
        $this->session->set_flashdata('msg', 'Software deleted successfully');
        $this->session->set_flashdata('status', 'success');
        redirect('AdminSoftware/index');
    }

    public function demo_requests()
    {
        $this->data['requests'] = $this->db->order_by('id', 'desc')->get('software_demo_requests')->result();
        $this->load->view('Admin/software/demo_requests', $this->data);
    }
    public function remove_image()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('software_id');
            $image_name = $this->input->post('image_name');
            
            $software = $this->db->get_where('software_products', array('id' => $id))->row();
            if ($software && !empty($software->additional_images)) {
                $images = json_decode($software->additional_images, true);
                if (($key = array_search($image_name, $images)) !== false) {
                    unset($images[$key]);
                    $images = array_values($images); // Re-index array
                    
                    // Update database
                    $this->db->where('id', $id)->update('software_products', array('additional_images' => json_encode($images)));
                    
                    // Unlink file
                    if (file_exists('./public/uploads/software/' . $image_name)) {
                        unlink('./public/uploads/software/' . $image_name);
                    }
                    
                    echo json_encode(array('status' => 'success', 'msg' => 'Image removed successfully'));
                    return;
                }
            }
            echo json_encode(array('status' => 'error', 'msg' => 'Image not found'));
        }
    }
}
?>
