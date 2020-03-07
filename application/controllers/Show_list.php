<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Show_list extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Show_list_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('show_list/show_list_list');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->Show_list_model->json();
    }

    public function read($id)
    {
        $row = $this->Show_list_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'judul' => $row->judul,
		'foto' => $row->foto,
		'jam_mulai' => $row->jam_mulai,
		'jam_selesai' => $row->jam_selesai,
		'date_created' => $row->date_created,
		'is_active' => $row->is_active,
	    );
            $this->load->view('show_list/show_list_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('show_list'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('show_list/create_action'),
	    'id' => set_value('id'),
	    'judul' => set_value('judul'),
	    'foto' => set_value('foto'),
	    'jam_mulai' => set_value('jam_mulai'),
	    'jam_selesai' => set_value('jam_selesai'),
	    'date_created' => set_value('date_created'),
	    'is_active' => set_value('is_active'),
	);
        $this->load->view('show_list/show_list_form', $data);
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
		'jam_mulai' => $this->input->post('jam_mulai',TRUE),
		'jam_selesai' => $this->input->post('jam_selesai',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'is_active' => $this->input->post('is_active',TRUE),
	    );

            $this->Show_list_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('show_list'));
        }
    }

    public function update($id)
    {
        $row = $this->Show_list_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('show_list/update_action'),
		'id' => set_value('id', $row->id),
		'judul' => set_value('judul', $row->judul),
		'foto' => set_value('foto', $row->foto),
		'jam_mulai' => set_value('jam_mulai', $row->jam_mulai),
		'jam_selesai' => set_value('jam_selesai', $row->jam_selesai),
		'date_created' => set_value('date_created', $row->date_created),
		'is_active' => set_value('is_active', $row->is_active),
	    );
            $this->load->view('show_list/show_list_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('show_list'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'jam_mulai' => $this->input->post('jam_mulai',TRUE),
		'jam_selesai' => $this->input->post('jam_selesai',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'is_active' => $this->input->post('is_active',TRUE),
	    );

            $this->Show_list_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('show_list'));
        }
    }

    public function delete($id)
    {
        $row = $this->Show_list_model->get_by_id($id);

        if ($row) {
            $this->Show_list_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('show_list'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('show_list'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('jam_mulai', 'jam mulai', 'trim|required');
	$this->form_validation->set_rules('jam_selesai', 'jam selesai', 'trim|required');
	$this->form_validation->set_rules('date_created', 'date created', 'trim|required');
	$this->form_validation->set_rules('is_active', 'is active', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}