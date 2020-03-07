<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Galeri_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('galeri/galeri_list');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->Galeri_model->json();
    }

    public function read($id)
    {
        $row = $this->Galeri_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_galeri' => $row->id_galeri,
		'judul' => $row->judul,
		'foto' => $row->foto,
		'tanggal' => $row->tanggal,
	    );
            $this->load->view('galeri/galeri_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('galeri'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('galeri/create_action'),
	    'id_galeri' => set_value('id_galeri'),
	    'judul' => set_value('judul'),
	    'foto' => set_value('foto'),
	    'tanggal' => set_value('tanggal'),
	);
        $this->load->view('galeri/galeri_form', $data);
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
		'tanggal' => $this->input->post('tanggal',TRUE),
	    );

            $this->Galeri_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('galeri'));
        }
    }

    public function update($id)
    {
        $row = $this->Galeri_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('galeri/update_action'),
		'id_galeri' => set_value('id_galeri', $row->id_galeri),
		'judul' => set_value('judul', $row->judul),
		'foto' => set_value('foto', $row->foto),
		'tanggal' => set_value('tanggal', $row->tanggal),
	    );
            $this->load->view('galeri/galeri_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('galeri'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_galeri', TRUE));
        } else {
            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
	    );

            $this->Galeri_model->update($this->input->post('id_galeri', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('galeri'));
        }
    }

    public function delete($id)
    {
        $row = $this->Galeri_model->get_by_id($id);

        if ($row) {
            $this->Galeri_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('galeri'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('galeri'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

	$this->form_validation->set_rules('id_galeri', 'id_galeri', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}