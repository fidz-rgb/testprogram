<?php 
/**
 * @property Author_mdl $Author_mdl
 * @property form_validation $form_validation
 * @property session $session
 */
class Author extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Author_mdl');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Halaman Author';
        $data['author'] = $this->Author_mdl->getAllAuthor();
        $this->load->view('templates/header', $data);
        $this->load->view('author/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form tambah data';
        $this->form_validation->set_rules('nm_author', 'Name Author', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('author/tambah');
            $this->load->view('templates/footer');
        } else{
            $this->Author_mdl->tambahDataAuthor();
            $this->session->set_flashdata('flash', ' Ditambahkan');
            redirect('author');
        }
    }

    public function hapus($id_author)
    {
        $this->Author_mdl->hapusDataAuthor($id_author);
        $this->session->set_flashdata('flash', ' Dihapus');
        redirect('author');
    }

    public function detail($id_author)
    {
        $data['judul'] = 'Detail Data Author';
        $data['author'] = $this->Author_mdl->getAuthorbyId($id_author);
        $this->load->view('templates/header', $data);
        $this->load->view('author/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_author)
    {
        $data['judul'] = 'Form Ubah Data Author';
        $data['author'] = $this->Author_mdl->getAuthorbyId($id_author);

        $this->form_validation->set_rules('nm_author', 'Name Author', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('author/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Author_mdl->ubahDataAuthor();
            $this->session->set_flashdata('flash', ' Diubah');
            redirect('author');
        }
    }
}
?>