<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('News_model');
        $this->load->library('form_validation');

        if (!$this->session->userdata('logined') || $this->session->userdata('logined') != true) {
            redirect('/');
        }
        $this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('news/news_list');
    }

    public function json()
    {
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

        $data = array(
            'judul' => $this->input->post('judul', true),
            'foto' => $this->_uploadImage(),
            'berita' => $this->input->post('berita', true),
            'tanggal' => $this->input->post('tanggal', true),
            'kategori' => $this->input->post('kategori', true),
        );

        $this->News_model->insert($data);
        $this->session->set_flashdata('message', 'Create Record Success');
        redirect(site_url('news'));
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
        if (!empty($_FILES["foto"]["name"])) {
            $row = $this->Galeri_model->get_by_id($this->input->post('id', true));

            if ($row->foto != "default.jpg") {
                $filename = explode(".", $row->foto)[0];
                array_map('unlink', glob(FCPATH . "assets/galeri/$filename.*"));
            }
            $data = array(
                'judul' => $this->input->post('judul', true),
                'foto' => $this->_uploadImage(),
                'berita' => $this->input->post('berita', true),
                'tanggal' => $this->input->post('tanggal', true),
                'kategori' => $this->input->post('kategori', true),
            );

        } else {
            $data = array(
                'judul' => $this->input->post('judul', true),
                // 'foto' => $this->input->post('foto', true),
                'berita' => $this->input->post('berita', true),
                'tanggal' => $this->input->post('tanggal', true),
                'kategori' => $this->input->post('kategori', true),
            );

        }

        $this->News_model->update($this->input->post('id_news', true), $data);
        $this->session->set_flashdata('message', 'Update Record Success');
        redirect(site_url('news'));

    }

    public function delete($id)
    {
        $row = $this->News_model->get_by_id($id);

        if ($row) {
            if ($row->foto != "default.jpg") {
                $filename = explode(".", $row->foto)[0];
                array_map('unlink', glob(FCPATH . "assets/news/$filename.*"));
            }

            $this->News_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('news'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('news'));
        }
    }
    private function _uploadImage()
    {
        $config['upload_path'] = './assets/news/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = 'news_' . time();
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