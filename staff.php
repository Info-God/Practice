<?php 

class staff extends CI_Controller{
    function staffData(){
        $this->viewData();
    }

    function regForm(){
        $this->load->view("student_form");
    }

    function editForm(){
        extract($_POST);
        $gender = null;

        if(isset($Male)){
            $gender = "male";
        }
        else{
            $gender = "female";
        }
    
        $student_details["details"] = [
            "name" => $studentName,
            "address" => $address,
            "gender" => $gender,
            "department" => $department,
            "date" => $date,
            "blood_group" => $bloodGroup,
            "phone_number" => $phonenumber
        ];

        $this->load->view("output",$student_details);

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
           // $this->load->view("welcome_message");
        }
        else{
            echo "Not insert";
        }
    }

    function viewData(){
        $this->load->model("student_data");
        $fetchData["student_data"] = $this->student_data->getData();
        $this->load->view("welcome_message",$fetchData);
    }

    function editData(){
        $id = $this->uri->segment(3);
        $this->load->model("student_data");
        $getData["editData"] = $this->student_data->changeData($id);
        $this->load->view("welcome_message",$getData);
    }

    function updateData(){
        extract($_POST);
        $user_id = $id;
        $changeData = [
            "name" => $studentName,
            "address" => $address,
            "gender" => $gender,
            "department" => $department,
            "date" => $date,
            "blood_group" => $bloodGroup,
            "phone_number" => $phonenumber
        ];
        $this->load->model("student_data");
        $updated = $this->student_data->update($user_id,$changeData);
        if($updated){
            $this->viewData();
        }


    }

    function delete(){
        $id = $this->uri->segment(3);
        $this->load->model("student_data");
        $result = $this->student_data->deleteData($id);
        if(isset($result)){
            $this->viewData();
        }
    }


}