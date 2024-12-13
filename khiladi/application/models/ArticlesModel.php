<?php
class ArticlesModel extends CI_Model{
    public function getArticles(){
        $this->db->select("articles.*, categories.name as category_name, categories.url as category_url, authors.name as author_name");
        $this->db->from('articles');
        $this->db->join('categories', 'articles.category_id = categories.id');
        $this->db->join('authors', 'articles.author_id = authors.id');
        $this->db->order_by('articles.created_at','DESC');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function addArticle(){
        $values = array(
            'category_id' => $this->input->post('category_id'),
            'title' => $this->input->post('title'),
            'url' => $this->input->post('url'),
            'description1' => $this->input->post('description1'),
            'description2' => $this->input->post('description2'),
            'image' => $this->input->post('image'),
            'read_time' => $this->input->post('read_time'),
            'meta_title' => $this->input->post('meta_title'),
            'meta_description' => $this->input->post('meta_description'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'author_id' => $this->input->post('author_id'),
            'article_date' => $this->input->post('article_date')
        );
        $this->db->insert('articles', $values);
    }
    public function editArticle($article_id){
        $values = array(
            'category_id' => $this->input->post('category_id'),
            'title' => $this->input->post('title'),
            'url' => $this->input->post('url'),
            'description1' => $this->input->post('description1'),
            'description2' => $this->input->post('description2'),
            'image' => $this->input->post('image'),
            'read_time' => $this->input->post('read_time'),
            'meta_title' => $this->input->post('meta_title'),
            'meta_description' => $this->input->post('meta_description'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'author_id' => $this->input->post('author_id'),
            'article_date' => $this->input->post('article_date')
        );
        $this->db->where('id', $article_id);
        $this->db->update('articles', $values);
    }
}
?>