<?php 

class staff extends CI_Controller{
    function staffData(){
        $this->load->view("student_form");
    }

    function student_info(){
        extract($_POST);
        $gender = null;
        if(isset($Male)){
            $gender = "male";
        }
        else{
            $gender = "female";
        }
    
        $student_details = [
            "name" => $studentName,
            "address" => $address,
            "gender" => $gender,
            "department" => $department,
            "date" => $date,
            "blood_group" => $bloodGroup,
            "phone_number" => $phonenumber
        ];

        $this->load->model("student_data");
        $result = $this->student_data->storeData($student_details);
        if($result){
            redirect(base_url("staff/staffData"));
        }
        else{
            echo "Not insert";
        }
    }


}