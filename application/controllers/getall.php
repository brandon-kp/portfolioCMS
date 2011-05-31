<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getall extends CI_Controller {

    public function index()
    {
        $this->get();
    }
    
    public function get()
    {
        
        $this->load->model('Get_model');
        $this->load->model('Settings_model');
        
        //$this->Get_model->getall();
        
        $data['result'] = $this->Get_model->getall();
        $data['settings'] = $this->Settings_model->getsettings_model();
        
        $this->load->view('theme/index', $data);
    }
    
}
/*
@NOTE:
In order for images to work, the files that need editing are:
Screen.css
project.css
FancyZoom.js
*/