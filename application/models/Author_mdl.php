<?php 
class Author_mdl extends CI_Model{
    public function getAllAuthor()
    {
        return $this->db->get('author')->result_array();
    }

    public function tambahDataAuthor()
    {
        $data = [
            "nm_author" => $this->input->post('nm_author', true),
            "email" => $this->input->post('email', true)
        ];
        $this->db->insert('author', $data);
    }

    public function hapusDataAuthor($id_author)
    {
        $this->db->delete('author', ['id_author' => $id_author]);
    }

    public function getAuthorbyId($id_author)
    {
        return $this->db->get_where('author', ['id_author' => $id_author])->row_array();
    }

    public function ubahDataAuthor()
    {
        $data = [
            "nm_author" => $this->input->post('nm_author', true),
            "email" => $this->input->post('email', true)
        ];
        $this->db->where('id_author', $this->input->post('id_author'));
        $this->db->update('author', $data);
    }
}
?>