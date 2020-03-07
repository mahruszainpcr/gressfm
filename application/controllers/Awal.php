<?php

<<<<<<< HEAD
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Awal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
=======
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Awal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Dj_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
>>>>>>> d04ba2d49e43028dd6155ac08abcc8bcf2a6132c
    }

    public function index()
    {
        $this->load->view('landing/templates/header');
<<<<<<< HEAD
        $this->load->view('landing/templates/home');
        $this->load->view('landing/templates/menu');
        $this->load->view('landing/pages/index');
        $this->load->view('landing/templates/footer');
    }
    public function beritaNext()
    {
        $this->load->view('landing/templates/header');
        $this->load->view('landing/templates/menu');
        $this->load->view('landing/pages/news');
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
=======
        $this->load->view('landing/pages/index');
        $this->load->view('landing/templates/footer');
    }
    public function beritaNext(){
        $this->load->view('landing/templates/header');
        $this->load->view('landing/pages/news');
        $this->load->view('landing/templates/footer');
    }
    public function aboutPage(){
        $this->load->view('landing/templates/header');
        $this->load->view('landing/pages/about');
        $this->load->view('landing/templates/footer');
    }
    public function galleryPage(){
        $this->load->view('landing/templates/header');
>>>>>>> d04ba2d49e43028dd6155ac08abcc8bcf2a6132c
        $this->load->view('landing/pages/gallery');
        $this->load->view('landing/templates/footer');
    }

}