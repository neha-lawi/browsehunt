<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends LD_Controller {

	function __construct(){
        parent::__construct();
			if($this->userId() == false){
				redirect("login");
			}
            $this->load->model('ArticlesModel');
	}

	public function index()
	{
		$title = "Articles";
        $data['articles'] = $this->ArticlesModel->getArticles();
		$html = $this->load->view('articles/articles', $data, true);
		$this->displayAppPage($title, $html);
	}

	public function add(){
		if(!empty($this->input->post())){
            $this->ArticlesModel->addArticle();
			redirect('articles');
        }else{

            $data['categories'] = $this->db->get('categories')->result_array();
            $data['authors'] = $this->db->get('authors')->result_array();
            $html = $this->load->view('articles/addArticle', $data, true);
            $this->displayAppPage('Add Articles', $html);
        }
    }
	public function edit($article_id){
		if(!empty($this->input->post())){
            $this->ArticlesModel->editArticle($article_id);
			redirect('articles');
        }else{
			$data['article'] = $this->db->get_where('articles', array('id'=> $article_id))->row_array();
            $data['categories'] = $this->db->get('categories')->result_array();
            $data['authors'] = $this->db->get('authors')->result_array();
            $html = $this->load->view('articles/editArticle', $data, true);
            $this->displayAppPage('Edit Articles', $html);
        }
    }
	
}
?>