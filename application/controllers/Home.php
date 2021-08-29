<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Utama';
        $data['role'] = $this->session->userdata('role');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
