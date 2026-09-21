<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$ci = &get_instance();
if(isset($ci) && is_object($ci)) {
    $ci->output->set_status_header('404');
    $ci->load->view('Home/NotFound');
} else {
    include(APPPATH . 'views/Home/NotFound.php');
}
