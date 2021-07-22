<?php

class Auth extends CI_Controller {
        /*
        *This function will show register page
        */

        public function register(){

                $this->load->library('form_validation');


                $this->form_validation->set_rules('first_name','First name','required');
                $this->form_validation->set_rules('last_name','Last name','required');
                $this->form_validation->set_rules('email','Email','required|valid_email');
                $this->form_validation->set_rules('phone','Phone','required');
                $this->form_validation->set_rules('password','Password','required');

                if($this->form_validation->run() == false) {
                        //Here we will load our view
                        $this->load->view('templates/header');
                        $this->load->view('register');
                        $this->load->view('templates/footer');
                } else {
                        //Here we will save data in database
                        //echo "data inserted successfully";
                        //$this->load->view('register');

                        $this->load->model('Auth_model');
                        $formArray = array();
                        $formArray['first_name'] = $this->input->post('first_name');
                        $formArray['last_name'] = $this->input->post('last_name');
                        $formArray['email'] = $this->input->post('email');
                        $formArray['phone'] = $this->input->post('phone');
                        $formArray['password'] = md5($this->input->post('password'));
                        $formArray['created_at'] = date('Y-m-d H:i:s');
                        $this->Auth_model->create($formArray);

                        $this->session->set_flashdata('msg','Your account created successfully.');
                        redirect(base_url().'Auth/register');
                }

                
        }
}