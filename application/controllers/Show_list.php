<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Show_list extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Show_list_model');
        $this->load->library('form_validation');

        if (!$this->session->userdata('logined') || $this->session->userdata('logined') != true) {
            redirect('/');
        }
        $this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('show_list/show_list_list');
    }

    public function json()
    {
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

        $data = array(
            'judul' => $this->input->post('judul', true),
            'foto' => $this->_uploadImage(),
            'jam_mulai' => $this->input->post('jam_mulai', true),
            'jam_selesai' => $this->input->post('jam_selesai', true),
            'date_created' => 'now()',
            'is_active' => 1,
        );

        $this->Show_list_model->insert($data);
        $this->session->set_flashdata('message', 'Create Record Success');
        redirect(site_url('show_list'));
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
        if (!empty($_FILES["foto"]["name"])) {
            $row = $this->Show_list_model->get_by_id($this->input->post('id', true));

            if ($row->foto != "default.jpg") {
                $filename = explode(".", $row->foto)[0];
                array_map('unlink', glob(FCPATH . "assets/galeri/$filename.*"));
            }
            $data = array(
                'judul' => $this->input->post('judul', true),
                'foto' => $this->_uploadImage(),
                'jam_mulai' => $this->input->post('jam_mulai', true),
                'jam_selesai' => $this->input->post('jam_selesai', true),
                'date_created' => 'now()',
                'is_active' => 1,
            );

        } else {
            $data = array(
                'judul' => $this->input->post('judul', true),
                // 'foto' => $this->input->post('foto', true),
                'jam_mulai' => $this->input->post('jam_mulai', true),
                'jam_selesai' => $this->input->post('jam_selesai', true),
                'date_created' => 'now()',
                'is_active' => 1,
            );

        }

        $this->Show_list_model->update($this->input->post('id', true), $data);
        $this->session->set_flashdata('message', 'Update Record Success');
        redirect(site_url('show_list'));

    }

    public function delete($id)
    {
        $row = $this->Show_list_model->get_by_id($id);

        if ($row) {
            if ($row->foto != "default.jpg") {
                $filename = explode(".", $row->foto)[0];
                array_map('unlink', glob(FCPATH . "assets/show/$filename.*"));
            }

            $this->Show_list_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('show_list'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('show_list'));
        }
    }
    private function _uploadImage()
    {
        $config['upload_path'] = './assets/show/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = 'show_' . time();
        $config['overwrite'] = true;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $data = $this->upload->data();
            return $data['file_name'];
        }

        return "default_dj.jpg";
    }

    public function _rules()
    {

    }

}