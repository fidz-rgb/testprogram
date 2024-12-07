<?php 
// code dibawah brguna untuk memberitahu/memperjelas phpIntellephense kalau variabel ini terdefenisi
/**
 *@property Article_mdl $Article_mdl
 *@property form_validation $form_validation
 *@property session $session
 */
class Article extends CI_Controller {
    //jika library database dibutuhkan untuk banyak method di sebuah controller,maka sebaiknya gunakan __construct agar mempermudah dan tidak memanggil2 ulang lagi disetiap methodnya
    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
        $this->load->model('Article_mdl');
        $this->load->library('form_validation');
    }
    public function index()
    {
        // $this->load->database(); berguna untuk memanggil library database jika memang yang memerlukan pemanggilan hanya 1 method saja

        $data['judul'] = 'Halaman Articles';
        $data['article'] = $this->Article_mdl->getAllArticle();
        $this->load->view('templates/header', $data);
        $this->load->view('article/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form tambah data';
        $this->form_validation->set_rules('title_article', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $this->form_validation->set_rules('id_author', 'Author ID', 'required|numeric');
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('article/tambah');
            $this->load->view('templates/footer');
        } else{
            $this->Article_mdl->tambahDataArticle();
            $this->session->set_flashdata('flash', ' Ditambahkan');
            redirect('article');
        }
    }

    public function hapus($id_article)
    {
        $this->Article_mdl->hapusDataArticle($id_article);
        $this->session->set_flashdata('flash', ' Dihapus');
        redirect('article');
    }

    public function detail($id_article)
    {
        $data['judul'] = 'Detail Data Article';
        $data['article'] = $this->Article_mdl->getArticlebyId($id_article);
        $this->load->view('templates/header', $data);
        $this->load->view('article/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_article)
    {
        $data['judul'] = 'Form Ubah Data Article';
        $data['article'] = $this->Article_mdl->getArticlebyId($id_article);

        $this->form_validation->set_rules('title_article', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $this->form_validation->set_rules('id_author', 'Author ID', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('article/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Article_mdl->ubahDataArticle();
            $this->session->set_flashdata('flash', ' Diubah');
            redirect('article');
        }
    }
}
?>