<?php 

    class Employee_Model extends CI_Model{

        function __construct(){
            parent :: __construct();
            $this->load->database();
        }   

        // Here Insert The Employee Data in The Database
        
        function insert_employee($data){

            // Checking The Duplicate Email and Phone 

            $email = $this->db->get_where('employee',array('email' => $data['email']))->row();

            if($email){
                return "email_exist";
            }

            $phone = $this->db->get_where('employee', array('phone' => $data['phone']))->row();

            if($phone){
                return "phone_exist";
            }

            return $this->db->insert('employee',$data);
        }

        // Here Get The ALL Active Employees

        function get_active_employees(){
            $this->db->where('status','active');
           return $this->db->get('employee')->result_array();
        }

        // Get Employee data for the edit employee record

        function get_employee($id){

            $this->db->where('id',$id);
            return $this->db->get('employee')->row_array();

        }
        // here update the employee data
        function update_employee($id,$data){
            $this->db->where('id',$id);
            return $this->db->update('employee',$data);
        }

        // here we delete the employee data

        function delete_employee($id){
            $this->db->where('id',$id);
            return $this->db->delete('employee');
        }

        // here get the data for view file

        function get_data($id){
            $this->db->where('id',$id);
            return $this->db->get('employee')->row_array();
        }


    }





?>