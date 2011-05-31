<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

    public function index()
    {
        $this->auth();    
    }
    
    public function settingsform()
    {
        if($this->input->post('password') === '37182')
        {
            $this->load->model('Settings_model');
            
            $data['settings'] = $this->Settings_model->getsettings_model();
            
            $this->load->view('settingsform', $data); 
        } else{
            $this->auth();
        }
    }
    
    public function auth()
    {
        $viewdata['pageTitle'] = 'Authorization';
        $this->load->view('settingsauth', $viewdata);
    }
    
    public function settingsupdate()
    {
        $this->load->model('Settings_model');
        
        $input = $this->input;
        
        $titleprefix = $input->post('titleprefix');
        $twitter     = $input->post('twitter');
        $portrait    = $input->post('portrait');
        
        $this->Settings_model->settingsupdate_model($titleprefix, $twitter, $portrait);
        echo "Settings updated!<script>history.go(-1);</script>";
    }
    
}