<?php

class Add extends CI_Model {
    
    public function additem($title, $category, $image, $thumb, $description)
    {
        $query_str = "INSERT INTO main (`title` , `category` , `image` , `thumbnail` , `description` ) VALUES (?,?,?,?,?)";
        
        $this->db->query($query_str, array($title, $category, $image, $thumb, $description));
    }

}
