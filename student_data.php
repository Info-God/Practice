<?php 
class student_data extends CI_Model{
    function storeData($studentData){
        $this->load->database();
        return $this->db->insert("staff",$studentData);
    }

}