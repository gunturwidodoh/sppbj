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

        //pagination
        //config
        $config['base_url'] = 'http://localhost:8080/sppbj/index.php/tabel/index';
        $config['total_rows'] = $this->Tabel_model->countAllData();
        $config['per_page'] = 10;
        //inisialisasi
        $this->pagination->initialize($config);

        //get data
        $data['start'] = $this->uri->segment(3);
        $data['tabel'] = $this->Tabel_model->getData($config['per_page'], $data['start']);

        //cek role yang sedang login
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

    public function status($id)
    {
        $this->Tabel_model->getDataById($id);
    }

    //Controlle Tambah dan Edit Data Awal
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

    public function edit_awal($id)
    {
        // view
        $data['row'] = $this->Tabel_model->getDataById($id);
        $data['judul'] = 'Edit Data Awal';
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/edit_awal', $data);
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
            $this->Tabel_model->editDataAwal();
            redirect('tabel');
        }
    }
    //End of Tambah dan Edit Data Awal

    //Controller Update dan Edit data sppbj
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
            $this->Tabel_model->updateDataSPPBJ($id);
            redirect('tabel');
        }
    }

    public function edit_sppbj($id)
    {
        // view
        $data['row'] = $this->Tabel_model->getDataById($id);
        $data['judul'] = 'Edit Data SPPBJ';
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/edit_sppbj', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/edit_sppbj', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }

        // fungsi add
        if ($this->input->post()) {
            $this->Tabel_model->editDataSPPBJ($id);
            redirect('tabel');
        }
    }
    //End of Controller Update dan Edit data sppbj

    //Controller Update dan Edit data kontrak
    public function update_kontrak($id)
    {
        // view
        $data['row'] = $this->Tabel_model->getDataById($id);
        $data['judul'] = 'Update Data Kontrak';
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/update_kontrak', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/update_kontrak', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }

        // fungsi add
        if ($this->input->post()) {
            $this->Tabel_model->updateDataKontrak($id);
            redirect('tabel');
        }
    }

    public function edit_kontrak($id)
    {
        // view
        $data['row'] = $this->Tabel_model->getDataById($id);
        $data['judul'] = 'Edit Data Kontrak';
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/edit_kontrak', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/edit_kontrak', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }

        // fungsi add
        if ($this->input->post()) {
            $this->Tabel_model->editDataKontrak($id);
            redirect('tabel');
        }
    }
    //End of Controller Update dan Edit data kontrak
}
