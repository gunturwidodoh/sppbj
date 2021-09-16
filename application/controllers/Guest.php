<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guest_model');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Utama';
        $data['jumlah'] = $this->Guest_model->jumlah_project();
        $data['jumlahHistory'] = $this->Guest_model->jumlah_history_project();
        $data['jumlahAplikasi'] = $this->Guest_model->jumlah_aplikasi_eksisting();
        $data['username'] = $this->session->userdata('username');
        $data['tabel'] = $this->Guest_model->getGuest($data['username']);
        $data['role'] = $this->session->userdata('role');

        $this->form_validation->set_rules($this->Guest_model->rules());
        if ($this->form_validation->run() == FALSE) {
            if ($data["role"] != NULL) {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('guest/index', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->view('templates/header', $data);
                $this->load->view('errors/html/error_session');
                $this->load->view('templates/footer');
            }
        } else {
            if ($this->input->post()) {
                $this->Guest_model->addDataRequest();
                $this->session->set_flashdata('message', 'Data Telah Ditambahkan!');
                redirect('guest');
            }
        }
    }

    public function view_project_awal()
    {
        // view
        $data['judul'] = 'Tabel Project Awal';
        $data['tabel'] = $this->Guest_model->getAllData();
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] != NULL) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('guest/viewproject/view_project_awal', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function view_project_drp()
    {
        // view
        $data['judul'] = 'Tabel Project DRP';


        $data['tabel'] = $this->Guest_model->getAllData();
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] != NULL) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('guest/viewproject/view_project_drp', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function view_project_kontrak()
    {
        // view
        $data['judul'] = 'Tabel Project Kontrak';


        $data['tabel'] = $this->Guest_model->getAllData();
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] != NULL) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('guest/viewproject/view_project_kontrak', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function view_aplikasi()
    {
        $data['judul'] = 'Tabel Aplikasi Eksisting';
        $data['tabel'] = $this->Guest_model->getAllDataAplikasi();
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] != NULL) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('guest/view_aplikasi', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/headererror', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function view_history_awal()
    {
        $data['judul'] = 'Tabel History Aplikasi';
        $data['role'] = $this->session->userdata('role');
        $data['tabel'] = $this->Guest_model->getAllDataHistory();
        if ($data["role"] != NULL) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('guest/viewhistory/view_history_awal', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/headererror', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function view_history_drp()
    {
        $data['judul'] = 'Tabel History Aplikasi';
        $data['role'] = $this->session->userdata('role');
        $data['tabel'] = $this->Guest_model->getAllDataHistory();
        if ($data["role"] != NULL) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('guest/viewhistory/view_history_drp', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/headererror', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function view_history_kontrak()
    {
        $data['judul'] = 'Tabel History Aplikasi';
        $data['role'] = $this->session->userdata('role');
        $data['tabel'] = $this->Guest_model->getAllDataHistory();
        if ($data["role"] != NULL) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('guest/viewhistory/view_history_kontrak', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/headererror', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function ticket()
    {
        $data['judul'] = 'Request Tiket';
        $data['role'] = $this->session->userdata('role');
        $data['tabel'] = $this->Guest_model->getAllData();
        if ($data["role"] != NULL) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('guest/ticket/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/headererror', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }
}
