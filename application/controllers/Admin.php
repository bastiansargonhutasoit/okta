<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Admin extends CI_Controller{
    
    public function index()
    {
        $this->load->view('admin/adm_panel');
    }
    
}
