<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Belajar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('belajar_model');
    }
    public function index()
    {
        $data['title'] = 'JP | Belajar';
        if ($this->input->post('keyword')) {
            $data['title'] = 'JP | Search';
            $data['belajar'] = $this->belajar_model->cariDataBelajar();
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/search');
            $this->load->view('templates/user/home_footer');
        } else {
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/belajar');
            $this->load->view('templates/user/home_footer');
        }
    }

    public function persiapan()
    {
        $data['title'] = 'JP | Belajar';
        if ($this->input->post('keyword')) {
            $data['title'] = 'JP | Search';
            $data['belajar'] = $this->belajar_model->cariDataBelajar();
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/search');
            $this->load->view('templates/user/home_footer');
        } else {
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/belajar/persiapan');
            $this->load->view('templates/user/home_footer');
        }
    }
    public function program_pertama()
    {
        $data['title'] = 'JP | Belajar';
        if ($this->input->post('keyword')) {
            $data['title'] = 'JP | Search';
            $data['belajar'] = $this->belajar_model->cariDataBelajar();
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/search');
            $this->load->view('templates/user/home_footer');
        } else {
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/belajar/program_pertama');
            $this->load->view('templates/user/home_footer');
        }
    }
    public function tipe_data()
    {
        $data['title'] = 'JP | Belajar';
        if ($this->input->post('keyword')) {
            $data['title'] = 'JP | Search';
            $data['belajar'] = $this->belajar_model->cariDataBelajar();
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/search');
            $this->load->view('templates/user/home_footer');
        } else {
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/belajar/tipe_data');
            $this->load->view('templates/user/home_footer');
        }
	}
	
	public function perulangan()
    {
        $data['title'] = 'JP | Belajar';
        if ($this->input->post('keyword')) {
            $data['title'] = 'JP | Search';
            $data['belajar'] = $this->belajar_model->cariDataBelajar();
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/search');
            $this->load->view('templates/user/home_footer');
        } else {
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/belajar/perulangan');
            $this->load->view('templates/user/home_footer');
        }
    }
    public function percabangan()
    {
            $data['title'] = 'JP | Belajar';
            if ($this->input->post('keyword'))
            {
                $data['title'] = 'JP | Search';
                $data['belajar'] = $this->belajar_model->cariDataBelajar();
                $this->load->view('templates/user/home_header', $data);
                $this->load->view('public/search');
                $this->load->view('templates/user/home_footer');
            } else {
                $this->load->view('templates/user/home_header', $data);
                $this->load->view('public/belajar/percabangan');
                $this->load->view('templates/user/home_footer');
            }
    }
    public function operator()
    {
        $data['title'] = 'JP | Belajar';
        if ($this->input->post('keyword')) {
            $data['title'] = 'JP | Search';
            $data['belajar'] = $this->belajar_model->cariDataBelajar();
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/search');
            $this->load->view('templates/user/home_footer');
        } else {
            $this->load->view('templates/user/home_header', $data);
            $this->load->view('public/belajar/operator');
            $this->load->view('templates/user/home_footer');
        }
    }
}
