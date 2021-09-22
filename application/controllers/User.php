<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_model');
    }

    public function delete($id)
    {
        $this->User_model->deleteData($id);
        $this->session->set_flashdata('message', 'Data Telah Dihapus!');
        redirect('user');
    }

    public function delete_history($id)
    {
        $this->User_model->deleteDataHistory($id);
        $this->session->set_flashdata('message', 'Data Telah Dihapus!');
        redirect('global/history');
    }

    public function move_data($id)
    {
        $this->User_model->moveDataById($id);
        $this->session->set_flashdata('message', 'Project Telah Selesai!');
        redirect('user');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Utama';
        $data['jumlah'] = $this->User_model->jumlah_project();
        $data['jumlahHistory'] = $this->User_model->jumlah_history_project();
        $data['tabel'] = $this->User_model->getDataGuest();

        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/index', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/headererror', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function tabel()
    {
        // view
        $data['judul'] = 'Data Pengadaan';
        $data['tabel'] = $this->User_model->getAllData();
        $data['addClass'] = '';
        $data['editClass'] = '';
        $data['detailPath'] = '/user/detail/';

        //cek role yang sedang login
        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('global/table', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('global/table', $data);
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
        $data['judulSubmit'] = 'Simpan Data Baru';
        $data['judulBack'] = 'Batal Tambah Data';
        $data['tahun'] = $this->User_model->tahun();
        $data['kategori'] = $this->User_model->kategori();
        $data['mataAnggaran'] = $this->User_model->mata_anggaran();
        $data['jenisAnggaran'] = $this->User_model->jenis_anggaran();
        $data['quartal'] = $this->User_model->quartal();
        $data['colorCode'] = 'primary';
        $data['role'] = $this->session->userdata('role');

        // form validation
        $this->form_validation->set_rules($this->User_model->rulesValidation());
        if ($this->form_validation->run() == FALSE) {
            if ($data["role"] == '1') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('user/form', $data);
                $this->load->view('templates/footer');
            } else if ($data["role"] == '2') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('user/form', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->view('templates/headererror', $data);
                $this->load->view('errors/html/error_session');
                $this->load->view('templates/footer');
            }
        } else {
            // fungsi add
            if ($this->input->post()) {
                $this->User_model->addData();
                $this->session->set_flashdata('message', 'Data Telah Ditambahkan!');
                redirect('user');
            }
        }
    }

    public function edit_data($id)
    {
        // view
        $data['judul'] = 'Edit Data';
        $data['judulSubmit'] = 'Simpan Edit';
        $data['judulBack'] = 'Batal Edit';
        $data['tahun'] = $this->User_model->tahun();
        $data['kategori'] = $this->User_model->kategori();
        $data['mataAnggaran'] = $this->User_model->mata_anggaran();
        $data['jenisAnggaran'] = $this->User_model->jenis_anggaran();
        $data['quartal'] = $this->User_model->quartal();
        $data['tandaTangan'] = $this->User_model->tanda_tangan();
        $data['row'] = $this->User_model->getDataById($id);
        $data['colorCode'] = 'info';
        $data['role'] = $this->session->userdata('role');

        // form validation
        $this->form_validation->set_rules($this->User_model->rulesValidation());
        if ($this->form_validation->run() == FALSE) {
            if ($data["role"] == '1') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('user/form', $data);
                $this->load->view('templates/footer');
            } else if ($data["role"] == '2') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('user/form', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->view('templates/headererror', $data);
                $this->load->view('errors/html/error_session');
                $this->load->view('templates/footer');
            }
        } else {
            // fungsi edit
            if ($this->input->post()) {
                $this->User_model->editData($id);
                $this->session->set_flashdata('message', 'Data Telah Diedit!');
                redirect('user');
            }
        }
    }

    public function edit_data_ticket($id)
    {
        // view
        $data['judul'] = 'Edit Data';
        $data['tahun'] = $this->User_model->tahun();
        $data['kategori'] = $this->User_model->kategori();
        $data['mataAnggaran'] = $this->User_model->mata_anggaran();
        $data['jenisAnggaran'] = $this->User_model->jenis_anggaran();
        $data['tandaTangan'] = $this->User_model->tanda_tangan();
        $data['row'] = $this->User_model->getDataTicketById($id);
        $data['role'] = $this->session->userdata('role');

        // form validation
        $this->form_validation->set_rules($this->User_model->rulesValidation());
        if ($this->form_validation->run() == FALSE) {
            if ($data["role"] == '1') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('user/form_ticket', $data);
                $this->load->view('templates/footer');
            } else if ($data["role"] == '2') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('user/form_ticket', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->view('templates/headererror', $data);
                $this->load->view('errors/html/error_session');
                $this->load->view('templates/footer');
            }
        } else {
            // fungsi edit
            if ($this->input->post()) {
                $this->User_model->addDataTicket($id);
                $this->session->set_flashdata('message', 'Data Request Ticket Telah Ditambahkan');
                redirect('user');
            }
        }
    }

    public function reject_tiket($id)
    {

        $this->User_model->reject($id);
        $this->session->set_flashdata('message', 'Data Request Ticket Telah Direject');
        redirect('user');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data';
        $data['tabel'] = $this->User_model->getDataById($id);
        $data['role'] = $this->session->userdata('role');
        $data['editClass'] = '';

        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('global/detail', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('global/detail', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/headererror', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function history()
    {
        // view
        $data['judul'] = 'History Pengadaan';
        $data['tabel'] = $this->User_model->getAllDataHistory();
        $data['role'] = $this->session->userdata('role');
        $data['deleteClass'] = '';

        // cek role
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('global/history', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('global/history', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/headererror', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function history_detail($id)
    {
        // view
        $data['judul'] = 'Detail History Pengadaan';
        $data['tabel'] = $this->User_model->getDataHistoryById($id);
        $data['role'] = $this->session->userdata('role');
        $data['editClass'] = '';

        // cek role
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('global/detail', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('global/detail', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/headererror', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }

    public function upload_data($id)
    {
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'docx|xlsx|xldm|csv|jpg|png';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('message', $error);
            redirect('user');
        } else {
            $upload_data = $this->upload->data();
            $filename = $upload_data['file_name'];
            $path = $upload_data['full_path'];
            $this->User_model->uploadData($filename, $path, $id);
            $this->session->set_flashdata('message', 'Data telah diupload');
            redirect('user');
        }
    }

    public function download_data($id)
    {
        $this->load->helper('download');
        $data = $this->db->get_where('project', ['id' => $id])->row_array();
        $path = $data['path'];

        force_download($path, NULL);
    }
}
