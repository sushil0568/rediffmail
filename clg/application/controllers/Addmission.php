<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addmission extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
		
        //$this->load->model('addmission_model');        
        date_default_timezone_set('Asia/kolkata');
    }

    public function index()
    {
        $data['title'] = 'Addmission';
        $this->load->view('add',$data);
    }
}