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
        $data['jumlah'] = $this->Admin_model->jumlah_akun();
        $data['jumlahAplikasi'] = $this->Admin_model->jumlah_aplikasi();
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('admin/dashboard/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function register()
    {
        $data['judul'] = 'Registration';
        $data['role'] = $this->session->userdata('role');
        $data['tabel'] = $this->Admin_model->getAllDataLogin();
        $this->form_validation->set_rules($this->Admin_model->rules());

        if ($this->form_validation->run() == FALSE) {
            if ($data["role"] == '1') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('admin/register/index', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->view('templates/header', $data);
                $this->load->view('errors/html/error_session');
                $this->load->view('templates/footer');
            }
        } else {
            $this->Admin_model->addDataRegistrasi();
            $this->session->set_flashdata('message', 'Data telah ditambahkan');
            redirect('admin');
        }
    }

    public function tambahAplikasi()
    {
        $data['judul'] = 'Tambah Aplikasi Eksisting';
        $data['role'] = $this->session->userdata('role');
        $this->form_validation->set_rules($this->Admin_model->rulesApp());

        if ($this->form_validation->run() == FALSE) {
            if ($data["role"] == '1') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('admin/aplikasi', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->view('templates/header', $data);
                $this->load->view('errors/html/error_session');
                $this->load->view('templates/footer');
            }
        } else {
            $this->Admin_model->addDataAplikasi();
            $this->session->set_flashdata('message', 'Data telah ditambahkan');
            redirect('admin');
        }
    }

    public function delete($id)
    {
        $this->Admin_model->deleteData($id);
        $this->session->set_flashdata('message', 'Data telah dihapus');
        redirect('admin');
    }
}
