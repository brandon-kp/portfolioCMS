<?php

class Settings_model extends CI_Model {
    
    public function settingsupdate_model($titleprefix, $twitter, $portrait)
    {
        $query_str = "UPDATE `userdata` SET `titleprefix` = ?, `twitter` = ?, `portrait` = ? LIMIT 1 ;";
        
        $this->db->query($query_str, array($titleprefix, $twitter, $portrait));
    }
    
    public function getsettings_model()
    {
        $query = $this->db->get('userdata');
        
        if ($query->num_rows() == 0)  
        {  
            show_error('Database is empty!');  
        }else{  
            return $query->result();  
        }   
    }

}
/*
UPDATE `userdata` SET `titleprefix` = ?, `twitter` = ?, `portrait` = ? LIMIT 1 ;
*/