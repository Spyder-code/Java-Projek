<?php
defined('BASEPATH') or exit('No direct script access allowed');
class belajar_model extends CI_Model
{
    public function getAllBelajar()
    {
        return $this->db->get('belajar')->result_array();
    }
    public function index()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('admin/index');
        $this->load->view('templates/admin/footer');
    }
    public function tambah_belajar()
    {
        $data = [
            "nama" => $this->input->post('email', true),
            "deskripsi" => $this->input->post('subjek', true),
            "alamat" => $this->input->post('pesan', true),
        ];
        $this->db->insert('belajar', $data);
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('belajar');
    }
    public function detail($id)
    {
        return $this->db->get_where('belajar', ['id' => $id])->row_array();
    }
    public function cariDataBelajar()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('deskripsi', $keyword);
        return $this->db->get('belajar')->result_array();
    }
}
