<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Galeri_model');
        $this->load->library('form_validation');

        if (!$this->session->userdata('logined') || $this->session->userdata('logined') != true) {
            redirect('/');
        }
        $this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('galeri/galeri_list');
    }

    public function json()
    {
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

        $data = array(
            'judul' => $this->input->post('judul', true),
            'foto' => $this->_uploadImage(),
            'tanggal' => $this->input->post('tanggal', true),
        );

        $this->Galeri_model->insert($data);
        $this->session->set_flashdata('message', 'Create Record Success');
        redirect(site_url('galeri'));

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
        if (!empty($_FILES["foto"]["name"])) {
            $row = $this->Galeri_model->get_by_id($this->input->post('id', true));

            if ($row->foto != "default.jpg") {
                $filename = explode(".", $row->foto)[0];
                array_map('unlink', glob(FCPATH . "assets/galeri/$filename.*"));
            }
            $data = array(
                'judul' => $this->input->post('judul', true),
                'foto' => $this->_uploadImage(),
                'tanggal' => $this->input->post('tanggal', true),
            );
        } else {
            $data = array(
                'judul' => $this->input->post('judul', true),
                // 'foto' => $this->input->post('foto', true),
                'tanggal' => $this->input->post('tanggal', true),
            );

        }
        $this->Galeri_model->update($this->input->post('id_galeri', true), $data);
        $this->session->set_flashdata('message', 'Update Record Success');
        redirect(site_url('galeri'));

    }

    public function delete($id)
    {
        $row = $this->Galeri_model->get_by_id($id);

        if ($row) {
            if ($row->foto != "default.jpg") {
                $filename = explode(".", $row->foto)[0];
                array_map('unlink', glob(FCPATH . "assets/galeri/$filename.*"));
            }
            $this->Galeri_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('galeri'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('galeri'));
        }
    }
    private function _uploadImage()
    {
        $config['upload_path'] = './assets/galeri/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = 'galeri_' . time();
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