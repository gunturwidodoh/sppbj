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
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('tabel/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        // view
        $data['judul'] = 'Tambah Data';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('tabel/tambah', $data);
        $this->load->view('templates/footer');

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

        // view
        $data['judul'] = 'Update Data';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('tabel/update', $data);
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
}
