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
        $data['tahun'] = $this->Tabel_model->tahun();
        $data['kategori'] = $this->Tabel_model->kategori();
        $data['mataAnggaran'] = $this->Tabel_model->mata_anggaran();
        $data['jenisAnggaran'] = $this->Tabel_model->jenis_anggaran();
        $data['judul'] = 'Tambah Data';
        $data['role'] = $this->session->userdata('role');
        $this->form_validation->set_rules($this->Tabel_model->rulesValidation());
        if ($this->form_validation->run() == FALSE) {
            if ($data["role"] == '1') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('user/tabel/add_data', $data);
                $this->load->view('templates/footer');
            } else if ($data["role"] == '2') {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('user/tabel/add_data', $data);
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
        $data['tahun'] = $this->Tabel_model->tahun();
        $data['kategori'] = $this->Tabel_model->kategori();
        $data['mataAnggaran'] = $this->Tabel_model->mata_anggaran();
        $data['jenisAnggaran'] = $this->Tabel_model->jenis_anggaran();
        $data['tandaTangan'] = $this->Tabel_model->tanda_tangan();
        $data['row'] = $this->Tabel_model->getDataById($id);
        $data['judul'] = 'Edit Data';
        $data['role'] = $this->session->userdata('role');

        // form validation
        $this->form_validation->set_rules($this->Tabel_model->rulesValidation());
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
                $this->load->view('templates/headererror', $data);
                $this->load->view('errors/html/error_session');
                $this->load->view('templates/footer');
            }
        } else {
            // fungsi edit
            if ($this->input->post()) {
                $this->Tabel_model->editData();
                $this->session->set_flashdata('message', 'Data Telah Diedit !');
                redirect('tabel');
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
}

// public function tambah()
    // {
    //     // view
    //     $data['judul'] = 'Tambah Data';
    //     $data['role'] = $this->session->userdata('role');
    //     if ($data["role"] == '1') {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/navbar');
    //         $this->load->view('templates/sidebar');
    //         $this->load->view('user/tabel/tambah', $data);
    //         $this->load->view('templates/footer');
    //     } else if ($data["role"] == '2') {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/navbar');
    //         $this->load->view('templates/sidebar');
    //         $this->load->view('user/tabel/tambah', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('errors/html/error_session');
    //         $this->load->view('templates/footer');
    //     }

    //     // fungsi add
    //     if ($this->input->post()) {
    //         $this->Tabel_model->addData();
    //         redirect('tabel');
    //     }
    // }

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
