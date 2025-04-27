<?php 

    class Employee_Controller extends CI_Controller{

        function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('form_validation');
            $this->load->model('Employee_Model');
            $this->load->library('session');
        }

        // Get active employees Data From The Database

        function index(){
            $data['employees'] = $this->Employee_Model->get_active_employees();
            $this->load->view('index',$data);
        }

        // Add Employee In The Database

        function Add_employee(){

            if($this->input->post()){
                $this->form_validation->set_rules('name','Name','trim|required');
                $this->form_validation->set_rules('email','Email','trim|required');
                $this->form_validation->set_rules('phone','Phone','trim|required');
                $this->form_validation->set_rules('department','Department','trim|required');
                $this->form_validation->set_rules('designation','Designation','trim|required');
                $this->form_validation->set_rules('salary','Salary','trim|required');

                if($this->form_validation->run()==false){
                    $data['employees'] = $this->Employee_Model->get_active_employees();

                    $this->load->view('index',$data);
                }else{
                    $data = array(
                        'name' => $this->input->post('name'),
                        'email' => $this->input->post('email'),
                        'phone' => $this->input->post('phone'),
                        'department' => $this->input->post('department'),
                        'designation' => $this->input->post('designation'),
                        'salary' => $this->input->post('salary'),
                    );

                    $result = $this->Employee_Model->insert_employee($data);

                    if($result === 'email_exist'){

                        $this->session->set_flashdata('error','This Email Has Been Already Exists');
                        redirect(base_url('index'));

                    }elseif($result === 'phone_exist'){

                        $this->session->set_flashdata('error','This Phone Has Been Already Exists');
                        redirect(base_url('index'));

                    }else{
                        $this->session->set_flashdata('added','The Employee Has Been Added Successfully');
                        redirect(base_url('index'));
                    }

                }

            }

            

        }

        // Get the eomployees id data on the Edit

        function Edit($id){
            $data['employee'] = $this->Employee_Model->get_employee($id);
            $this->load->view('update',$data);
        }

        // Here We can Updated The Employees Data

        function update_employee($id){

            if($this->input->post()){
                $this->form_validation->set_rules('name','Name','trim|required');
                $this->form_validation->set_rules('email','Email','trim|required');
                $this->form_validation->set_rules('phone','Phone','trim|required');
                $this->form_validation->set_rules('department','Department','trim|required');
                $this->form_validation->set_rules('designation','Designation','trim|required');
                $this->form_validation->set_rules('salary','Salary','trim|required');

                if($this->form_validation->run()==false){
                    $data['employees'] = $this->Employee_Model->get_active_employees();
                    $this->load->view('update',$data);
                }else{
                    $data = array(
                        'name' => $this->input->post('name'),
                        'email' => $this->input->post('email'),
                        'phone' => $this->input->post('phone'),
                        'department' => $this->input->post('department'),
                        'designation' => $this->input->post('designation'),
                        'salary' => $this->input->post('salary'),
                    );

                    $result = $this->Employee_Model->update_employee($id,$data);

                    $this->session->set_flashdata('updated','The Employee Has Been Updated Successfully');
                    redirect(base_url('index'));
                  

                }

            }


            
        }

        // Delete The Employee Data

        function Delete($id){

            $this->Employee_Model->delete_employee($id);
            $this->session->set_flashdata('delete','The Employee Has Been Successfully Deleted');
            redirect(base_url('index'));

        }

        // Get Tge Data For The View
        function View($id){
            $data['views'] = $this->Employee_Model->get_data($id);
            $this->load->view('views',$data);


        }



















    }




?>
