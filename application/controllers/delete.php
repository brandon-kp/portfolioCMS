<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete extends CI_Controller {
 
    public function index()
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
    
}