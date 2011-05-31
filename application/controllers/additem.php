<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Additem extends CI_Controller {
    
	public function index()
	{
	   $this->auth();
		//$this->load->view('addform');
	}
    
    public function addform()
    {
        if($this->input->post('password') === '37182')
        {
            $this->load->view('addform'); 
        } else{
            echo 'No go.';
        }
    }
    
    public function auth()
    {
        $viewdata['pageTitle'] = 'Authorization';
        $this->load->view('authform', $viewdata);
    }
    
    public function add()
    {
        echo "Loading model...";
        
        $input = $this->input;
        
        $title       =   $input->post('title');
        $category    =   $input->post('category');
        $image       =   $input->post('image');
        $thumb       =   $input->post('thumb');
        $description =   $input->post('description');
        
        $this->load->model('Add');
        
        $this->Add->additem($title, $category, $image, $thumb, $description);
    }
}
