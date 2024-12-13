<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class LD_Controller extends CI_Controller{
    public function userId(){
        if($this->session->userdata('userId') == false){
            return false;
        }else{
            return $this->session->userdata('userId');
        }
    }

    public function userName(){
        if($this->session->userdata('userName') == false){
            return false;
        }else{
            return $this->session->userdata('userName');
        }
    }

    public function userType(){
        if($this->session->userdata('userType') == false){
            return FALSE;
        }else{
            return $this->session->userdata('userType');
        }
    }
    public function userImage(){
        if($this->session->userdata('userImage') == false){
            return FALSE;
        }else{
            return $this->session->userdata('userImage');
        }
    }
    public function orgId(){
        if($this->session->userdata('orgId') == false){
            return false;
        }else{
            return $this->session->userdata('orgId');
        }
    }

    public function displayAppPage($title, $content){
        $data['title'] = $title;
        $data['content'] = $content;
        $data['userId'] = $this->userId();
        $data['username'] = $this->userName();
        $data['usertype'] = $this->userType();
        $data['userimage'] = $this->userImage();
        $data['orgId'] = $this->orgId();

        $html = $this->load->view("design/header", $data, true);
        $html .= $this->load->view("design/aside", $data, true);
        $html .= $this->load->view("design/topbar", $data, true);
        $html .= $this->load->view("design/footer", $data, true);
        echo $html;
    }
}
?>