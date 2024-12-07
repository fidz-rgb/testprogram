<?php 

class Article_mdl extends CI_Model{
    public function getAllArticle()
    {
        return $this->db->get('article')->result_array();
    }

    public function tambahDataArticle()
    {
        $data = [
            "title_article" => $this->input->post('title_article', true),
            "content" => $this->input->post('content', true),
            "id_author" => $this->input->post('id_author', true)
        ];
        $this->db->insert('article', $data);
    }

    public function hapusDataArticle($id_article)
    {
        $this->db->delete('article', ['id_article' => $id_article]);
    }
}