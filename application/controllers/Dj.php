<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Dj extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Dj_model');
        $this->load->library('form_validation');

        if (!$this->session->userdata('logined') || $this->session->userdata('logined') != true) {
            redirect('/');
        }
        $this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('dj/dj_list');
    }

    public function json()
    {
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

        $data = array(
            'nama_dj' => $this->input->post('nama_dj', true),
            'quote' => $this->input->post('quote', true),
            'foto' => $this->_uploadImage(),
            'is_active' => 1,
        );

        $this->Dj_model->insert($data);
        $this->session->set_flashdata('message', 'Create Record Success');
        redirect(site_url('dj'));

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
                // 'foto' => set_value('foto', $row->foto),
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
        if (!empty($_FILES["foto"]["name"])) {
            $row = $this->Dj_model->get_by_id($this->input->post('id', true));

            if ($row->foto != "default.jpg") {
                $filename = explode(".", $row->foto)[0];
                array_map('unlink', glob(FCPATH . "assets/dj/$filename.*"));
            }
            $data = array(
                'nama_dj' => $this->input->post('nama_dj', true),
                'quote' => $this->input->post('quote', true),
                'foto' => $this->_uploadImage(),
                'is_active' => 1,
            );

        } else {
            $data = array(
                'nama_dj' => $this->input->post('nama_dj', true),
                'quote' => $this->input->post('quote', true),
                'is_active' => 1,
            );
        }
        $this->Dj_model->update($this->input->post('id', true), $data);
        $this->session->set_flashdata('message', 'Update Record Success');
        redirect(site_url('dj'));

    }

    public function delete($id)
    {
        $row = $this->Dj_model->get_by_id($id);

        if ($row) {
            if ($row->foto != "default.jpg") {
                $filename = explode(".", $row->foto)[0];
                array_map('unlink', glob(FCPATH . "assets/dj/$filename.*"));
            }

            $this->Dj_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('dj'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dj'));
        }
    }
    private function _uploadImage()
    {
        $config['upload_path'] = './assets/dj/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = 'dj_' . time();
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