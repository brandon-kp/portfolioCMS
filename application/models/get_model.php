<?php

class Get_model extends CI_Model {
 
     public function getall()
     {
        $query = $this->db->get('main');
        
        if ($query->num_rows() == 0)  
        {  
            show_error('Database is empty!');  
        }else{  
            return $query->result();  
        }
     }

}