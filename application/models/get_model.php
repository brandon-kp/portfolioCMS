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
     
     public function getone($id)
     {
        $query = $this->db->query("SELECT * FROM `main` WHERE id = $id");
        
        if ($query->num_rows() == 0)  
        {  
            show_error('Database is empty!');  
        }else{  
            return $query->result();  
        }
     }

}