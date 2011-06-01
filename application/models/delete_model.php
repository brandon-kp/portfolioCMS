<?php

class Delete_model extends CI_Model {
    
    public function delete($id)
    {
        //DELETE FROM `portfolio`.`main` WHERE `main`.`id` = 3
        $this->db->query('DELETE FROM `main` WHERE `id` = '.$id);
    }
    
}