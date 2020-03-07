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
        date_default_timezone_set("Asia/Jakarta");

    }

    public function index()
    {
		$data['dj'] = $this->Dj_model->get_all();
		$data['event3'] = $this->Event_model->get_3();
		$data['news2'] = $this->News_model->get_2();
		$data['show'] = $this->Show_list_model->get_all();
        $this->load->view('landing/templates/header',$data);
        $this->load->view('landing/templates/home',$data);
        $this->load->view('landing/templates/menu');
        $this->load->view('landing/pages/index',$data);
        $this->load->view('landing/templates/footer',$data);
    }
    public function beritaNext($id_news)
    {
        $where = array('id_news' => $id_news);
		$data['news2'] = $this->News_model->get_2();


		$data['newsDetail'] = $this->News_model->detail_data($where,'news')->result();
        $this->load->view('landing/templates/header');
        $this->load->view('landing/templates/menu');
        $this->load->view('landing/pages/news',$data);
        $this->load->view('landing/templates/footer');
    }
    public function aboutPage()
    {
        $this->load->view('landing/templates/header');
        $this->load->view('landing/templates/menu');
        $this->load->view('landing/pages/about');
        $this->load->view('landing/templates/footer');
    }
    public function galleryPage()
    {
        $this->load->view('landing/templates/header');
        $this->load->view('landing/templates/menu');
        $this->load->view('landing/pages/gallery');
        $this->load->view('landing/templates/footer');
    }

}