<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends LD_Controller {

	function __construct(){
        parent::__construct();
  }

  public function index(){
    $this->session->sess_destroy();
    redirect("dashboard","refresh");
  }

}