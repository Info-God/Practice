<?php 
class student_data extends CI_Model{
    function storeData($studentData){
        $this->load->database();
        return $this->db->insert("staff",$studentData);
    }

    function getData(){
        $this->load->database();
        return $this->db->get("staff")->result();
    }

    function changeData($id){
        $this->load->database();
        $this->db->where("roll_no",$id);
        return $this->db->get("staff")->result();
    }
    function update($id,$data){
        $this->load->database();
        $this->db->where("roll_no",$id);
        return $this->db->update("staff",$data);
    }

    function deleteData($id){
        $this->load->database();
        $this->db->where("roll_no",$id);
        //$data = $this->changeData($id);
        return $this->db->delete("staff");
    }

}