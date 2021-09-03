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
        $data['role'] = $this->session->userdata('role');
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
    }

    public function view_project()
    {
        // view
        $data['judul'] = 'Tabel Project';

        //pagination
        //config
        $config['base_url'] = 'http://localhost:8080/sppbj/index.php/guest/view_project';
        $config['total_rows'] = $this->Guest_model->countAllDataProject();
        $config['per_page'] = 10;
        //inisialisasi
        $this->pagination->initialize($config);

        //get data
        $data['start'] = $this->uri->segment(3);
        $data['tabel'] = $this->Guest_model->getData($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['tabel'] = $this->Guest_model->cariDataProject();
        }

        $data['role'] = $this->session->userdata('role');
        if ($data["role"] != NULL) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('guest/view_project', $data);
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

        //pagination
        //config
        $config['base_url'] = 'http://localhost:8080/sppbj/index.php/guest/view_aplikasi';
        $config['total_rows'] = $this->Guest_model->countAllDataAplikasi();
        $config['per_page'] = 10;
        //inisialisasi
        $this->pagination->initialize($config);

        //get data
        $data['start'] = $this->uri->segment(3);
        $data['tabel'] = $this->Guest_model->getDataAplikasi($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['tabel'] = $this->Guest_model->cariDataAplikasi();
        }
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] != NULL) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('guest/view_aplikasi', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function view_history_project()
    {
        $data['judul'] = 'Tabel History Aplikasi';

        //pagination
        //config
        $config['base_url'] = 'http://localhost:8080/sppbj/index.php/guest/view_history';
        $config['total_rows'] = $this->Guest_model->countAllDataHistory();
        $config['per_page'] = 10;
        //inisialisasi
        $this->pagination->initialize($config);

        //get data
        $data['start'] = $this->uri->segment(3);
        $data['tabel'] = $this->Guest_model->getDataHistory($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['tabel'] = $this->Guest_model->cariDataHistory();
        }

        $data['role'] = $this->session->userdata('role');
        if ($data["role"] != NULL) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('guest/view_history_project', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }
}
