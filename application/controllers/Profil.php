<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Profil_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('profil/profil_list');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->Profil_model->json();
    }

    public function read($id)
    {
        $row = $this->Profil_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_profil' => $row->id_profil,
		'nama_profil' => $row->nama_profil,
		'isi_profil' => $row->isi_profil,
	    );
            $this->load->view('profil/profil_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('profil'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('profil/create_action'),
	    'id_profil' => set_value('id_profil'),
	    'nama_profil' => set_value('nama_profil'),
	    'isi_profil' => set_value('isi_profil'),
	);
        $this->load->view('profil/profil_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_profil' => $this->input->post('nama_profil',TRUE),
		'isi_profil' => $this->input->post('isi_profil',TRUE),
	    );

            $this->Profil_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('profil'));
        }
    }

    public function update($id)
    {
        $row = $this->Profil_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('profil/update_action'),
		'id_profil' => set_value('id_profil', $row->id_profil),
		'nama_profil' => set_value('nama_profil', $row->nama_profil),
		'isi_profil' => set_value('isi_profil', $row->isi_profil),
	    );
            $this->load->view('profil/profil_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('profil'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_profil', TRUE));
        } else {
            $data = array(
		'nama_profil' => $this->input->post('nama_profil',TRUE),
		'isi_profil' => $this->input->post('isi_profil',TRUE),
	    );

            $this->Profil_model->update($this->input->post('id_profil', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('profil'));
        }
    }

    public function delete($id)
    {
        $row = $this->Profil_model->get_by_id($id);

        if ($row) {
            $this->Profil_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('profil'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('profil'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('nama_profil', 'nama profil', 'trim|required');
	$this->form_validation->set_rules('isi_profil', 'isi profil', 'trim|required');

	$this->form_validation->set_rules('id_profil', 'id_profil', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}