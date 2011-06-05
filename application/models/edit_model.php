<?php

class Edit_model extends CI_Model {

    public function perfEdit_model($title, $category, $image, $thumb, $description, $id)
    {
        $query_str = "UPDATE `main` SET `title` = ?, `category` = ?, `image` = ?, `thumbnail` = ?, `description` = ? WHERE`id` = $id";
        
        $this->db->query($query_str, array($title, $category, $image, $thumb, $description));
    }
   
}