<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['judul'] = 'Administration Page';
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/tempadm/navbaradm');
            $this->load->view('admin/tempadm/sidebaradm');
            $this->load->view('admin/dashboard/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('errors/html/error_404');
        }
    }

    public function register()
    {
        $data['judul'] = 'Registration';
        $data['role'] = $this->session->userdata('role');
        $this->form_validation->set_rules($this->Admin_model->rules());

        if ($this->form_validation->run() == FALSE) {
            if ($data["role"] == '1') {
                $this->load->view('templates/header', $data);
                $this->load->view('admin/tempadm/navbaradm');
                $this->load->view('admin/tempadm/sidebaradm');
                $this->load->view('admin/register/index', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->view('errors/html/error_404');
            }
        } else {
            $this->Admin_model->addDataRegistrasi();
            $this->session->set_flashdata('message', 'Data telah ditambahkan');
            redirect('admin');
        }
    }
}