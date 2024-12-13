<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends LD_Controller {

	function __construct(){
        parent::__construct();
			if($this->userId() == false){
				redirect("login");
			}
	}

	public function index()
	{
		$title = "Dashboard";
		$html = $this->load->view('dashboard', '', true);
		$this->displayAppPage($title, $html);
	}
	
}
?>