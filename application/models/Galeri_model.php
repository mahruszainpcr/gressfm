<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Galeri_model extends CI_Model
{

    public $table = 'galeri';
    public $id = 'id_galeri';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id_galeri,judul,foto,tanggal');
        $this->datatables->from('galeri');
        //add this line for join
        //$this->datatables->join('table2', 'galeri.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('galeri/read/$1'),'Read')." | ".anchor(site_url('galeri/update/$1'),'Update')." | ".anchor(site_url('galeri/delete/$1'),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id_galeri');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }
    function get_uniq()
    {
        
        $this->db->select('judul');
        $this->db->distinct();
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_galeri', $q);
	$this->db->or_like('judul', $q);
	$this->db->or_like('foto', $q);
	$this->db->or_like('tanggal', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_galeri', $q);
	$this->db->or_like('judul', $q);
	$this->db->or_like('foto', $q);
	$this->db->or_like('tanggal', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

