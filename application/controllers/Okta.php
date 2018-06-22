<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Okta extends CI_Controller {
    
    public function index()
    {
        
        $data = array(
            "title"=>"Okta Home",
            "keyword"=>"Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design",
			"description"=>"online shop kita",
        );
     
        $this->load->view("okta_view", $data);
        
    }
}