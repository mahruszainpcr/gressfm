<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Awal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dj_model');
        $this->load->model('Event_model');
        $this->load->model('News_model');
        $this->load->model('Show_list_model');
        $this->load->model('Komentar_model');
        $this->load->model('Galeri_model');
        date_default_timezone_set("Asia/Jakarta");

    }

    public function index()
    {
		$data['dj'] = $this->Dj_model->get_all();
		$data['galeri'] = $this->Galeri_model->get_all();
		$data['event3'] = $this->Event_model->get_3();
		$data['news2'] = $this->News_model->get_2();
		$data['show'] = $this->Show_list_model->get_all();
        $this->load->view('landing/templates/header',$data);
        $this->load->view('landing/templates/home',$data);
        $this->load->view('landing/templates/menu');
        $this->load->view('landing/pages/index',$data);
        $this->load->view('landing/templates/footer',$data);
    }
    public function insertKomentar(){
        
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $pesan = $this->input->post('pesan');
        
            $data = array(
                'nama' => $nama,
                'email' =>  $email,
                'pesan' => $pesan,
               
            );
            var_dump($data);
            die;
            $this->db->insert('komentar', $data);
        
            redirect('index');
        }
    
    public function beritaNext($id_news)
    {
        $where = array('id_news' => $id_news);
		$data['news2'] = $this->News_model->get_2();


		$data['newsDetail'] = $this->News_model->detail_data($where,'news')->result();
        $this->load->view('landing/templates/header',$data);
        $this->load->view('landing/templates/menu',$data);
        $this->load->view('landing/pages/news',$data);
        $this->load->view('landing/templates/footer',$data);
    }
    public function aboutPage()
    {
		$data['news2'] = $this->News_model->get_2();

        $this->load->view('landing/templates/header',$data);
        $this->load->view('landing/templates/menu',$data);
        $this->load->view('landing/pages/about',$data);
        $this->load->view('landing/templates/footer',$data);
    }
    public function galleryPage()
    {
		$data['galeri'] = $this->Galeri_model->get_all();
		$data['galeri_judul'] = $this->Galeri_model->get_uniq();
		$data['news2'] = $this->News_model->get_2();

        $this->load->view('landing/templates/header',$data);
        $this->load->view('landing/templates/menu',$data);
        $this->load->view('landing/pages/gallery',$data);
        $this->load->view('landing/templates/footer',$data);
    }

}