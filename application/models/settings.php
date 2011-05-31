<?php

class Settings extends CI_Model {
    
    public function settingsupdate_model($titleprefix, $twitter, $portrait)
    {
        $query_str = "UPDATE `userdata` SET `titleprefix` = ?, `twitter` = ?, `portrait` = ? LIMIT 1 ;";
        
        $this->db->query($query_str, array($titleprefix, $twitter, $portrait));
    }

}
/*
UPDATE `userdata` SET `titleprefix` = ?, `twitter` = ?, `portrait` = ? LIMIT 1 ;
*/