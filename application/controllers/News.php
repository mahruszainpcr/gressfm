<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class News extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('News_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('news/news_list');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->News_model->json();
    }

    public function read($id)
    {
        $row = $this->News_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_news' => $row->id_news,
		'judul' => $row->judul,
		'foto' => $row->foto,
		'berita' => $row->berita,
		'tanggal' => $row->tanggal,
		'kategori' => $row->kategori,
	    );
            $this->load->view('news/news_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('news'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('news/create_action'),
	    'id_news' => set_value('id_news'),
	    'judul' => set_value('judul'),
	    'foto' => set_value('foto'),
	    'berita' => set_value('berita'),
	    'tanggal' => set_value('tanggal'),
	    'kategori' => set_value('kategori'),
	);
        $this->load->view('news/news_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'berita' => $this->input->post('berita',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'kategori' => $this->input->post('kategori',TRUE),
	    );

            $this->News_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('news'));
        }
    }

    public function update($id)
    {
        $row = $this->News_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('news/update_action'),
		'id_news' => set_value('id_news', $row->id_news),
		'judul' => set_value('judul', $row->judul),
		'foto' => set_value('foto', $row->foto),
		'berita' => set_value('berita', $row->berita),
		'tanggal' => set_value('tanggal', $row->tanggal),
		'kategori' => set_value('kategori', $row->kategori),
	    );
            $this->load->view('news/news_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('news'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_news', TRUE));
        } else {
            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'berita' => $this->input->post('berita',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'kategori' => $this->input->post('kategori',TRUE),
	    );

            $this->News_model->update($this->input->post('id_news', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('news'));
        }
    }

    public function delete($id)
    {
        $row = $this->News_model->get_by_id($id);

        if ($row) {
            $this->News_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('news'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('news'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('berita', 'berita', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');

	$this->form_validation->set_rules('id_news', 'id_news', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}