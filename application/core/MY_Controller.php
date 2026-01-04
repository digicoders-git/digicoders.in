<?php
defined('BASEPATH') OR exit('No direct access allowed');

class MY_Controller extends CI_Controller{


    public $data;

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


}

?>