<?php

class pesan_model extends CI_Model
{

    public function getAllPesan()
    {
        return $this->db->get('request')->result_array();
    }
    public function index()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('admin/index');
        $this->load->view('templates/admin/footer');
    }
    public function tambah_pesan()
    {
        $tanggal = date("Y-m-d H:i:s");
        $data = [
            "email" => $this->input->post('email', true),
            "subjek" => $this->input->post('subjek', true),
            "pesan" => $this->input->post('pesan', true),
            "tanggal" => $tanggal
        ];
        $this->db->insert('request', $data);
    }
    public function hapus($id)
    {
        $this->db->where('id_request', $id);
        $this->db->delete('request');
    }
    public function detail($id)
    {
        return $this->db->get_where('request', ['id_request' => $id])->row_array();
    }
}
