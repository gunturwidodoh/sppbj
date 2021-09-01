<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tabel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Tabel_model');
    }

    public function index()
    {
        // view
        $data['judul'] = 'Tabel';
        $data['tabel'] = $this->Tabel_model->getAllData();
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/index', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function tambah()
    {
        // view
        $data['judul'] = 'Tambah Data';
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/tambah', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }

        // fungsi add
        if ($this->input->post()) {
            $this->Tabel_model->addData();
            redirect('tabel');
        }
    }

    public function update($id)
    {
        // get data pada row yg di-update
        $data['row'] = $this->Tabel_model->getDataById($id);
        $data['role'] = $this->session->userdata('role');

        // view
        $data['judul'] = 'Update Data';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('user/tabel/update', $data);
        $this->load->view('templates/footer');

        // fungsi update
        if ($this->input->post()) {
            $this->Tabel_model->updateData($id);
            redirect('tabel');
        }
    }

    public function delete($id)
    {
        $this->Tabel_model->deleteData($id);
        redirect('tabel');
    }

    public function tambah_awal()
    {
        // view
        $data['judul'] = 'Tambah Data Awal';
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/tambah_awal', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/tambah_awal', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }

        // fungsi add
        if ($this->input->post()) {
            $this->Tabel_model->addDataTambahAwal();
            redirect('tabel');
        }
    }

    public function update_sppbj($id)
    {
        // view
        $data['row'] = $this->Tabel_model->getDataById($id);
        $data['judul'] = 'Update Data SPPBJ';
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/update_sppbj', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/update_sppbj', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }

        // fungsi add
        if ($this->input->post()) {
            $this->Tabel_model->addDataUpdateSPPBJ($id);
            redirect('tabel');
        }
    }
}
