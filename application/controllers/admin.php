<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
 
    public function index()
    {
        $this->load->view('admin');   
    }
    
    public function additem()
    {
        if($this->input->post('password') === '37182')
        {
            $this->load->view('addform'); 
        } else{
            $this->auth();
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
    
    public function delete()
    {
        $this->load->helper('text');
        
        $this->load->model('Get_model');
        
        $data['result'] = $this->Get_model->getall();
        
        $this->load->view('delete', $data);  
    }
    
    public function perfDelete()
    {
        $this->load->model('Delete_model');
        
        $id = $this->input->post('id');
        
        foreach($id as $id){
            $this->Delete_model->delete($id);
        }
        
        header('Location: .'); //Go back to the form.
    }
    
    function editWhat()
    {
        $what = $this->uri->segment(3);
        
        return $what;
    }
    
    function edit()
    {
       $this->load->model('Get_model');
       
       $this->load->helper('text');
       
       if(!is_numeric($this->uri->segment(3)))
       {
            $data['result'] = $this->Get_model->getall();
            
            $this->load->view('select_for_editing', $data);
       }
       else{
            $id             = $this->uri->segment(3);
            $data['result'] = $this->Get_model->getone($id);
            $data['id']     = $id;
            
            $this->load->view('editform', $data);
       }
    }
    
    function perfEdit()
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
    }
    
}