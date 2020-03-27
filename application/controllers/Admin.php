<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{

    public function index()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('login', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {

                redirect('home');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('admin');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');

            redirect('admin');
        }
    }
    public function home()
    {
        $data['title'] = 'Admin | Home';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/admin/footer');
    }
    public function belajar()
    {
        $this->load->model('belajar_model');
        $data['title'] = 'Admin | Belajar';
        $data['belajar'] = $this->belajar_model->getAllBelajar();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/belajar', $data);
        $this->load->view('templates/admin/footer');
    }
    public function pesan()
    {
        $this->load->model('pesan_model');
        $data['title'] = 'Admin | Pesan';
        $data['request'] = $this->pesan_model->getAllPesan();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/pesan', $data);
        $this->load->view('templates/admin/footer');
    }
    public function pesan_hapus($id)
    {
        $this->load->model('pesan_model');
        $this->pesan_model->hapus($id);
        $this->session->set_flashdata('flash', 'Pesan Sudah dihapus');
        redirect('admin/pesan');
    }
    public function pesan_detail($id)
    {
        $this->load->model('pesan_model');
        $data['title'] = 'Admin | Pesan';
        $data['request'] = $this->pesan_model->detail($id);
        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/pesan_detail', $data);
        $this->load->view('templates/admin/footer');
    }
}
