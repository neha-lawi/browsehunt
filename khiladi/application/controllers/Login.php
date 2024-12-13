<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends LD_Controller{
    function __construct(){
        parent::__construct();

        //Load Authentication Model to verify user
        $this->load->model("AuthModel", "auth");

        //Check if user session is set or if the user has logged out
        // if($this->userId() != false){
        //     redirect("dashboard");
        // }
    }

    public function index(){
        //Settiing validation rules [form validation library has been auto-loaded]

        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        $this->form_validation->set_rules('email', 'Email address', array('required','callback_email_requirement'));
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == false){
            $this->load->view('login');
        }else{
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $access = $this->auth->checkAccess($email, $password);
            if($access == false){
                $this->session->set_flashdata('errormsg', 'Invalid Credentials');
                redirect('login');
            }else{
                $logInDate = date('m/d/Y h:i:s a', time());
                
                $this->session->set_userdata('aside', $completeMenu);
                $this->session->set_userdata('userId', $access['id']);
                $this->session->set_userdata('userName', $access['name']);
                $this->session->set_userdata('userType', $access['type']);
                $this->session->set_userdata('userImage', $access['profile_image']);
                $this->session->set_userdata('orgId', $access['organisation_id']);
                redirect('dashboard');
            }
        }
    }

    public function email_requirement($email){
        if(!empty($email)){
            $exploded = explode('@', $email);
            if($exploded[1] == "mobavenue.com"){
                return TRUE;
            }else{
                $this->form_validation->set_message('email_requirement', 'Email should belong to Mobavenue co.');
                return FALSE;
            }
        }
    }
    
}
?>