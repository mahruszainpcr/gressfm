<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Event extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Event_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('event/event_list');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->Event_model->json();
    }

    public function read($id)
    {
        $row = $this->Event_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama_event' => $row->nama_event,
		'foto' => $row->foto,
		'lokasi' => $row->lokasi,
		'deskripsi' => $row->deskripsi,
		'waktu_mulai' => $row->waktu_mulai,
		'waktu_selesai' => $row->waktu_selesai,
		'date_created' => $row->date_created,
		'is_active' => $row->is_active,
	    );
            $this->load->view('event/event_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('event'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('event/create_action'),
	    'id' => set_value('id'),
	    'nama_event' => set_value('nama_event'),
	    'foto' => set_value('foto'),
	    'lokasi' => set_value('lokasi'),
	    'deskripsi' => set_value('deskripsi'),
	    'waktu_mulai' => set_value('waktu_mulai'),
	    'waktu_selesai' => set_value('waktu_selesai'),
	    'date_created' => set_value('date_created'),
	    'is_active' => set_value('is_active'),
	);
        $this->load->view('event/event_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_event' => $this->input->post('nama_event',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'lokasi' => $this->input->post('lokasi',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'waktu_mulai' => $this->input->post('waktu_mulai',TRUE),
		'waktu_selesai' => $this->input->post('waktu_selesai',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'is_active' => $this->input->post('is_active',TRUE),
	    );

            $this->Event_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('event'));
        }
    }

    public function update($id)
    {
        $row = $this->Event_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('event/update_action'),
		'id' => set_value('id', $row->id),
		'nama_event' => set_value('nama_event', $row->nama_event),
		'foto' => set_value('foto', $row->foto),
		'lokasi' => set_value('lokasi', $row->lokasi),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
		'waktu_mulai' => set_value('waktu_mulai', $row->waktu_mulai),
		'waktu_selesai' => set_value('waktu_selesai', $row->waktu_selesai),
		'date_created' => set_value('date_created', $row->date_created),
		'is_active' => set_value('is_active', $row->is_active),
	    );
            $this->load->view('event/event_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('event'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama_event' => $this->input->post('nama_event',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'lokasi' => $this->input->post('lokasi',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'waktu_mulai' => $this->input->post('waktu_mulai',TRUE),
		'waktu_selesai' => $this->input->post('waktu_selesai',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'is_active' => $this->input->post('is_active',TRUE),
	    );

            $this->Event_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('event'));
        }
    }

    public function delete($id)
    {
        $row = $this->Event_model->get_by_id($id);

        if ($row) {
            $this->Event_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('event'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('event'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('nama_event', 'nama event', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('lokasi', 'lokasi', 'trim|required');
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('waktu_mulai', 'waktu mulai', 'trim|required');
	$this->form_validation->set_rules('waktu_selesai', 'waktu selesai', 'trim|required');
	$this->form_validation->set_rules('date_created', 'date created', 'trim|required');
	$this->form_validation->set_rules('is_active', 'is active', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}