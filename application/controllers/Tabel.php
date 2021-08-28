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
        $data['judul'] = 'Rekap Pengadaan';
        $data['tabel'] = $this->Tabel_model->getAllData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('tabel/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('tabel/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $data['judul'] = 'Update Data';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('tabel/update', $data);
        $this->load->view('templates/footer');
    }
}
