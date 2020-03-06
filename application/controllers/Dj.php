<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dj extends CI_Controller
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
    }

    public function index()
    {
        $this->load->view('dj/dj_list');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->Dj_model->json();
    }

    public function read($id)
    {
        $row = $this->Dj_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama_dj' => $row->nama_dj,
		'quote' => $row->quote,
		'foto' => $row->foto,
		'is_active' => $row->is_active,
	    );
            $this->load->view('dj/dj_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dj'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('dj/create_action'),
	    'id' => set_value('id'),
	    'nama_dj' => set_value('nama_dj'),
	    'quote' => set_value('quote'),
	    'foto' => set_value('foto'),
	    'is_active' => set_value('is_active'),
	);
        $this->load->view('dj/dj_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_dj' => $this->input->post('nama_dj',TRUE),
		'quote' => $this->input->post('quote',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'is_active' => $this->input->post('is_active',TRUE),
	    );

            $this->Dj_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('dj'));
        }
    }

    public function update($id)
    {
        $row = $this->Dj_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('dj/update_action'),
		'id' => set_value('id', $row->id),
		'nama_dj' => set_value('nama_dj', $row->nama_dj),
		'quote' => set_value('quote', $row->quote),
		'foto' => set_value('foto', $row->foto),
		'is_active' => set_value('is_active', $row->is_active),
	    );
            $this->load->view('dj/dj_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dj'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama_dj' => $this->input->post('nama_dj',TRUE),
		'quote' => $this->input->post('quote',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'is_active' => $this->input->post('is_active',TRUE),
	    );

            $this->Dj_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('dj'));
        }
    }

    public function delete($id)
    {
        $row = $this->Dj_model->get_by_id($id);

        if ($row) {
            $this->Dj_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('dj'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dj'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('nama_dj', 'nama dj', 'trim|required');
	$this->form_validation->set_rules('quote', 'quote', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('is_active', 'is active', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}