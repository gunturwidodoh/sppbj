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

        //style
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //inisialisasi
        $this->pagination->initialize($config);

        //get data
        $data['start'] = $this->uri->segment(3);
        $data['tabel'] = $this->Tabel_model->getData($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['tabel'] = $this->Tabel_model->cariDataProject();
        }

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

    // public function update($id)
    // {
    //     // get data pada row yg di-update
    //     $data['row'] = $this->Tabel_model->getDataById($id);
    //     $data['role'] = $this->session->userdata('role');

    //     // view
    //     $data['judul'] = 'Update Data';
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/navbar');
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('user/tabel/update', $data);
    //     $this->load->view('templates/footer');

    //     // fungsi update
    //     if ($this->input->post()) {
    //         $this->Tabel_model->updateData($id);
    //         redirect('tabel');
    //     }
    // }

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
        redirect('tabel/history');
    }

    public function moveData($id)
    {
        $this->Tabel_model->moveDataById($id);
        $this->session->set_flashdata('message', 'Project Telah Selesai !');
        redirect('tabel');
    }

    public function tambah_awal()
    {
        // view
        $data['tahun'] = $this->Tabel_model->tahun();
        $data['kategori'] = $this->Tabel_model->kategori();
        $data['mataAnggaran'] = $this->Tabel_model->mata_anggaran();
        $data['jenisAnggaran'] = $this->Tabel_model->jenis_anggaran();
        $data['judul'] = 'Tambah Data Awal';
        $data['role'] = $this->session->userdata('role');
        $this->form_validation->set_rules($this->Tabel_model->rulesTambahAwal());
        if ($this->form_validation->run() == FALSE) {
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
        } else {

            // fungsi add
            if ($this->input->post()) {
                $this->Tabel_model->addDataTambahAwal();
                $this->session->set_flashdata('message', 'Data Telah Ditambahkan !');
                redirect('tabel');
            }
        }
    }


    public function edit_data($id)
    {
        // view
        $data['tahun'] = $this->Tabel_model->tahun();
        $data['kategori'] = $this->Tabel_model->kategori();
        $data['mataAnggaran'] = $this->Tabel_model->mata_anggaran();
        $data['jenisAnggaran'] = $this->Tabel_model->jenis_anggaran();
        $data['row'] = $this->Tabel_model->getDataById($id);
        $data['judul'] = 'Edit Data';
        $data['role'] = $this->session->userdata('role');
        $this->form_validation->set_rules($this->Tabel_model->rulesEdit());
        if ($this->form_validation->run() == FALSE) {
            if ($data["role"] == '1') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('user/tabel/edit', $data);
                $this->load->view('templates/footer');
            } else if ($data["role"] == '2') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('user/tabel/edit', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->view('templates/header', $data);
                $this->load->view('errors/html/error_session');
                $this->load->view('templates/footer');
            }
        } else {
            // fungsi add
            if ($this->input->post()) {
                $this->Tabel_model->editData();
                $this->session->set_flashdata('message', 'Data Telah Diedit !');
                redirect('tabel');
            }
        }
    }

    public function history()
    {
        $data['judul'] = 'Tabel History Aplikasi';

        //pagination
        //config
        $config['base_url'] = 'http://localhost:8080/sppbj/index.php/tabel/history';
        $config['total_rows'] = $this->Tabel_model->countAllDataHistory();
        $config['per_page'] = 10;
        //inisialisasi
        $this->pagination->initialize($config);

        //get data
        $data['start'] = $this->uri->segment(3);
        $data['tabel'] = $this->Tabel_model->getDataHistory($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['tabel'] = $this->Tabel_model->cariDataHistory();
        }

        $data['role'] = $this->session->userdata('role');
        if ($data["role"] == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/history', $data);
            $this->load->view('templates/footer');
        } else if ($data["role"] == '2') {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('user/tabel/history', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('errors/html/error_session');
            $this->load->view('templates/footer');
        }
    }
}

// public function edit_awal($id)
//     {
//         // view
//         $data['row'] = $this->Tabel_model->getDataById($id);
//         $data['judul'] = 'Edit Data Awal';
//         $data['role'] = $this->session->userdata('role');
//         if ($data["role"] == '1') {
//             $this->load->view('templates/header', $data);
//             $this->load->view('templates/navbar');
//             $this->load->view('templates/sidebar');
//             $this->load->view('user/tabel/edit_awal', $data);
//             $this->load->view('templates/footer');
//         } else if ($data["role"] == '2') {
//             $this->load->view('templates/header', $data);
//             $this->load->view('templates/navbar');
//             $this->load->view('templates/sidebar');
//             $this->load->view('user/tabel/edit_awal', $data);
//             $this->load->view('templates/footer');
//         } else {
//             $this->load->view('templates/header', $data);
//             $this->load->view('errors/html/error_session');
//             $this->load->view('templates/footer');
//         }

//         // fungsi add
//         if ($this->input->post()) {
//             $this->Tabel_model->editDataAwal();
//             $this->session->set_flashdata('message', 'Data Awal Telah Diedit !');
//             redirect('tabel');
//         }
//     }
//     //End of Tambah dan Edit Data Awal

//     //Controller Update dan Edit data sppbj
//     public function update_sppbj($id)
//     {
//         // view
//         $data['row'] = $this->Tabel_model->getDataById($id);
//         $data['judul'] = 'Update Data SPPBJ';
//         $data['role'] = $this->session->userdata('role');
//         if ($data["role"] == '1') {
//             $this->load->view('templates/header', $data);
//             $this->load->view('templates/navbar');
//             $this->load->view('templates/sidebar');
//             $this->load->view('user/tabel/update_sppbj', $data);
//             $this->load->view('templates/footer');
//         } else if ($data["role"] == '2') {
//             $this->load->view('templates/header', $data);
//             $this->load->view('templates/navbar');
//             $this->load->view('templates/sidebar');
//             $this->load->view('user/tabel/update_sppbj', $data);
//             $this->load->view('templates/footer');
//         } else {
//             $this->load->view('templates/header', $data);
//             $this->load->view('errors/html/error_session');
//             $this->load->view('templates/footer');
//         }

//         // fungsi add
//         if ($this->input->post()) {
//             $this->Tabel_model->updateDataSPPBJ($id);
//             $this->session->set_flashdata('message', 'Data Awal Telah Diupdate !');
//             redirect('tabel');
//         }
//     }

//     public function update_kontrak($id)
//     {
//         // view
//         $data['row'] = $this->Tabel_model->getDataById($id);
//         $data['judul'] = 'Update Data Kontrak';
//         $data['role'] = $this->session->userdata('role');
//         if ($data["role"] == '1') {
//             $this->load->view('templates/header', $data);
//             $this->load->view('templates/navbar');
//             $this->load->view('templates/sidebar');
//             $this->load->view('user/tabel/update_kontrak', $data);
//             $this->load->view('templates/footer');
//         } else if ($data["role"] == '2') {
//             $this->load->view('templates/header', $data);
//             $this->load->view('templates/navbar');
//             $this->load->view('templates/sidebar');
//             $this->load->view('user/tabel/update_kontrak', $data);
//             $this->load->view('templates/footer');
//         } else {
//             $this->load->view('templates/header', $data);
//             $this->load->view('errors/html/error_session');
//             $this->load->view('templates/footer');
//         }

//         // fungsi add
//         if ($this->input->post()) {
//             $this->Tabel_model->updateDataKontrak($id);
//             $this->session->set_flashdata('message', 'Data SPPBJ Telah Diedit !');
//             redirect('tabel');
//         }
//     }

//     public function edit_kontrak($id)
//     {
//         // view
//         $data['row'] = $this->Tabel_model->getDataById($id);
//         $data['judul'] = 'Edit Data Kontrak';
//         $data['role'] = $this->session->userdata('role');
//         if ($data["role"] == '1') {
//             $this->load->view('templates/header', $data);
//             $this->load->view('templates/navbar');
//             $this->load->view('templates/sidebar');
//             $this->load->view('user/tabel/edit_kontrak', $data);
//             $this->load->view('templates/footer');
//         } else if ($data["role"] == '2') {
//             $this->load->view('templates/header', $data);
//             $this->load->view('templates/navbar');
//             $this->load->view('templates/sidebar');
//             $this->load->view('user/tabel/edit_kontrak', $data);
//             $this->load->view('templates/footer');
//         } else {
//             $this->load->view('templates/header', $data);
//             $this->load->view('errors/html/error_session');
//             $this->load->view('templates/footer');
//         }

//         // fungsi add
//         if ($this->input->post()) {
//             $this->Tabel_model->editDataKontrak($id);
//             $this->session->set_flashdata('message', 'Data Kontrak Telah Diedit !');
//             redirect('tabel');
//         }
//     }
//     //End of Controller Update dan Edit data kontrak
