<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends LD_Controller {

	function __construct(){
        parent::__construct();
			if($this->userId() == false){
				redirect("login");
			}
	}
    

	public function index()
	{
		$title = "Categories";
		$html = $this->load->view('dashboard', '', true);
		$this->displayAppPage($title, $html);
	}
	
}
?>