<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('belajar_model');
    }

    public function index()
    {
        $data['title'] = 'JP | Home';
        if ($this->input->post('keyword')) {
            $data['title'] = 'JP | Search';
            $data['belajar'] = $this->belajar_model->cariDataBelajar();
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/search');
            $this->load->view('templates/user/home_footer');
        } else {
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/index');
            $this->load->view('templates/user/home_footer');
        }
    }

    public function about()
    {
        $data['title'] = 'JP | About';
        if ($this->input->post('keyword')) {
            $data['title'] = 'JP | Search';
            $data['belajar'] = $this->belajar_model->cariDataBelajar();
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/search');
            $this->load->view('templates/user/home_footer');
        } else {
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/about');
            $this->load->view('templates/user/home_footer');
        }
    }
    public function projek()
    {
        $data['title'] = 'JP | Projek';
        if ($this->input->post('keyword')) {
            $data['title'] = 'JP | Search';
            $data['belajar'] = $this->belajar_model->cariDataBelajar();
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/search');
            $this->load->view('templates/user/home_footer');
        } else {
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/projek');
            $this->load->view('templates/user/home_footer');
        }
    }
    public function request()
    {

        $data['title'] = 'JP | Request';

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/request');
            $this->load->view('templates/user/home_footer');
        } else {
            $this->load->model('pesan_model');
            $this->pesan_model->tambah_pesan();
            $this->session->set_flashdata('message', 'Pesan terkirim');

            redirect('user/request');
        }
    }
}
