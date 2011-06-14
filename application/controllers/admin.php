<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
 
    public function index()
    {   
        $user_table = 'userdata';
        
        if($this->session->userdata('logged_in')) {
            $this->load->view('admin');
        } else {
            $this->auth();
        }     
    }
    
    function flexiadmin()
    {
        $this->load->view('admin/admin');   
    }
    
	function login()
	{	
	    $this->load->library('form_validation');
        
		$rules['login_username']	= "required|min_length[4]|max_length[32]|alpha_dash";
		$rules['login_password']	= "required|min_length[4]|max_length[32]|alpha_dash";		

		$this->form_validation->set_rules($rules);

		$fields['login_username'] = 'Username';
		$fields['login_password'] = 'Password';
		
		$this->form_validation->set_fields($fields);
				
		if ($this->form_validation->run() == false) {
			redirect('/admin/');			
		} else {
			//Create account
			if($this->simplelogin->login($this->input->post('login_username'), $this->input->post('login_password'))) {
				redirect('/admin/');	
			} else {
				redirect('/admin/');			
			}			
		}
	}
    
    public function additem()
    {
        if($this->session->userdata('logged_in'))
        {
            $this->load->view('admin/additem');
        } else 
        {
            $this->auth();
        }
    }
    
    public function auth()
    {
		$user_table = 'userdata';
        
		$this->load->helper('url');

		if(!$this->session->userdata('logged_in')) {
            $this->load->view('admin/login');
		}
    }
    
    public function add()
    {
        if($this->session->userdata('logged_in'))
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
        } else
        {
            $this->load->view('admin/login');
        }
    }
    
    public function delete()
    {
        if($this->session->userdata('logged_in'))
        {   
            $this->load->helper('text');
            
            $this->load->model('Get_model');
            
            $data['result'] = $this->Get_model->getall();
            $data['submitted']     = 0;
            $data['notifications'] = "";
            
            if($this->input->post('submit') === "Delete Checked")
            {
                $this->load->model('Delete_model');
                
                $id = $this->input->post('id');
                
                $data['notifications'] = "Item #{$id} Was successfully deleted.";
                
                if(!empty($id))
                {
                    foreach($id as $id){
                        $this->Delete_model->delete($id);
                    }
                } else
                {
                    $data['notifications'] = "You did not pick anything to delete.";
                }
                
                $data['submitted']     = 1; 
            }
            
            $this->load->view('admin/deleteitem', $data);
        } else
        {
            $this->load->view('admin/login');
        }
    }
    
    function editWhat()
    {
        $what = $this->uri->segment(3);
        
        return $what;
    }
    
    function edit()
    {
        if($this->session->userdata('logged_in'))
        {
           $this->load->model('Get_model');
           
           $this->load->helper('text');
           
           if(!is_numeric($this->uri->segment(3)))
           {
                $data['result'] = $this->Get_model->getall();
                
                $this->load->view('admin/seledit', $data);
           }
           else{
                $id             = $this->uri->segment(3);
                $data['result'] = $this->Get_model->getone($id);
                $data['id']     = $id;
                
                $this->load->view('admin/editthis', $data);
           }
        } else
        {
            $this->load->view('admin/login');
        }
    }
    
    function perfEdit()
    {
        if($this->session->userdata('logged_in'))
        {
            $input = $this->input;
            
            $title       =   $input->post('title');
            $category    =   $input->post('category');
            $image       =   $input->post('image');
            $thumb       =   $input->post('thumb');
            $description =   $input->post('description');
            $id          =   $this->uri->segment(3);
            
            $this->load->model('Edit_model');
            $this->Edit_model->perfEdit_model($title, $category, $image, $thumb, $description, $id);
            
            header('Location: ./edit');
        } else
        {
            $this->load->view('admin/login');
        }
    }
    
 	function logout()
	{
		$this->load->helper('url');

		$this->simplelogin->logout();
		redirect('/admin/');
	}
    
    public function settings()
    {
        if($this->session->userdata('logged_in'))
        { 
            $this->load->model('Settings_model');
            
            $data['settings'] = $this->Settings_model->getsettings_model();
            
            $this->load->view('admin/settings', $data); 
        } else{
            $this->auth();
        }
        
        if($this->input->post('submit') === 'Submit')
        {
            $this->load->model('Settings_model');
            
            $input = $this->input;
            
            $titleprefix = $input->post('titleprefix');
            $twitter     = $input->post('twitter');
            $portrait    = $input->post('portrait');
            
            $this->Settings_model->settingsupdate_model($titleprefix, $twitter, $portrait);
        }
    }
    
}