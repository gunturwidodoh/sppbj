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

    public function delete($id)
    {
        $this->Tabel_model->deleteData($id);
        $this->session->set_flashdata('message', 'Data Telah Dihapus !');
        redirect('tabel');
    }

    public function deleteHistory($id)
    {
        $this->Tabel_model->deleteDataHistory($id);
        $this->session->set_flashdata('message', 'Data Telah Dihapus !');
        redirect('tabel/history_awal');
    }

    public function moveData($id)
    {
        $this->Tabel_model->moveDataById($id);
        $this->session->set_flashdata('message', 'Project Telah Selesai !');
        redirect('tabel');
    }

    public function index()
    {
        // view
        $data['judul'] = 'Data Awal';
        $data['tabel'] = $this->Tabel_model->getAllData();

        //cek role yang sedang login
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/tables/index', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/tables/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/headererror', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function tabel_drp()
    {
        // view
        $data['judul'] = 'Data DRP dan SPPBJ';
        $data['tabel'] = $this->Tabel_model->getAllData();

        //cek role yang sedang login
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/tables/table_drp', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/tables/table_drp', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/headererror', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function tabel_kontrak()
    {
        // view
        $data['judul'] = 'Data Kontrak';
        $data['tabel'] = $this->Tabel_model->getAllData();

        //cek role yang sedang login
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/tables/table_kontrak', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/tables/table_kontrak', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/headererror', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function add_data()
    {
        // view
        $data['judul'] = 'Tambah Data Baru';
        $data['tahun'] = $this->Tabel_model->tahun();
        $data['kategori'] = $this->Tabel_model->kategori();
        $data['mataAnggaran'] = $this->Tabel_model->mata_anggaran();
        $data['jenisAnggaran'] = $this->Tabel_model->jenis_anggaran();
        $data['role'] = $this->session->userdata('role');

        // form validation
        $this->form_validation->set_rules($this->Tabel_model->rulesValidation());
        if ($this->form_validation->run() == FALSE) {
            if ($data["role"] == '1') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('user/tabel/form', $data);
                $this->load->view('templates/footer');
            } else if ($data["role"] == '2') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('user/tabel/form', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->view('templates/headererror', $data);
                $this->load->view('errors/html/error_session');
                $this->load->view('templates/footer');
            }
        } else {
            // fungsi add
            if ($this->input->post()) {
                $this->Tabel_model->addData();
                $this->session->set_flashdata('message', 'Data Telah Ditambahkan!');
                redirect('tabel');
            }
        }
    }

    public function edit_data($id)
    {
        // view
        $data['judul'] = 'Edit Data';
        $data['tahun'] = $this->Tabel_model->tahun();
        $data['kategori'] = $this->Tabel_model->kategori();
        $data['mataAnggaran'] = $this->Tabel_model->mata_anggaran();
        $data['jenisAnggaran'] = $this->Tabel_model->jenis_anggaran();
        $data['tandaTangan'] = $this->Tabel_model->tanda_tangan();
        $data['row'] = $this->Tabel_model->getDataById($id);
        $data['role'] = $this->session->userdata('role');

        // form validation
        $this->form_validation->set_rules($this->Tabel_model->rulesValidation());
        if ($this->form_validation->run() == FALSE) {
            if ($data["role"] == '1') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('user/tabel/form', $data);
                $this->load->view('templates/footer');
            } else if ($data["role"] == '2') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('user/tabel/form', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->view('templates/headererror', $data);
                $this->load->view('errors/html/error_session');
                $this->load->view('templates/footer');
            }
        } else {
            // fungsi edit
            if ($this->input->post()) {
                $this->Tabel_model->editData($id);
                $this->session->set_flashdata('message', 'Data Telah Diedit !');
                redirect('tabel');
            }
        }
    }

    public function edit_data_ticket($id)
    {
        // view
        $data['judul'] = 'Edit Data';
        $data['tahun'] = $this->Tabel_model->tahun();
        $data['kategori'] = $this->Tabel_model->kategori();
        $data['mataAnggaran'] = $this->Tabel_model->mata_anggaran();
        $data['jenisAnggaran'] = $this->Tabel_model->jenis_anggaran();
        $data['tandaTangan'] = $this->Tabel_model->tanda_tangan();
        $data['row'] = $this->Tabel_model->getDataTicketById($id);
        $data['role'] = $this->session->userdata('role');

        // form validation
        $this->form_validation->set_rules($this->Tabel_model->rulesValidation());
        if ($this->form_validation->run() == FALSE) {
            if ($data["role"] == '1') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('user/tabel/form_ticket', $data);
                $this->load->view('templates/footer');
            } else if ($data["role"] == '2') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('user/tabel/form_ticket', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->view('templates/headererror', $data);
                $this->load->view('errors/html/error_session');
                $this->load->view('templates/footer');
            }
        } else {
            // fungsi edit
            if ($this->input->post()) {
                $this->Tabel_model->addDataTicket($id);
                $this->session->set_flashdata('message', 'Data Request Ticket Telah Ditambahkan');
                redirect('home');
            }
        }
    }

    public function history_awal()
    {
        $data['judul'] = 'Tabel History Aplikasi';

        $data['tabel'] = $this->Tabel_model->getAllDataHistory();
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/history/index', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/history/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/headererror', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function history_drp()
    {
        $data['judul'] = 'Tabel History Aplikasi';

        $data['tabel'] = $this->Tabel_model->getAllDataHistory();
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/history/history_drp', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/history/history_drp', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/headererror', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function history_kontrak()
    {
        $data['judul'] = 'Tabel History Aplikasi';

        $data['tabel'] = $this->Tabel_model->getAllDataHistory();
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/history/history_kontrak', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/history/history_kontrak', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/headererror', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function do_upload()
    {
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('message', $error);
            redirect('home');
        } else {
            array('upload_data' => $this->upload->data());
            $this->session->set_flashdata('message', 'Data telah diupload');
            redirect('home');
        }
    }
}
