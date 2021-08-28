<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Login_model');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Utama';
        $this->load->view('templates/headerlogin', $data);
        $this->load->view('login/index', $data);
        $this->load->view('templates/footer');
    }

    public function masuk()
    {
        $this->form_validation->set_rules($this->Login_model->rules());
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Halaman Utama';
            $this->load->view('templates/headerlogin', $data);
            $this->load->view('login/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->_login();
            redirect('home');
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('login', ['username' => $username])->row_array();
        if ($user) {
            //cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'role' => $user['role']
                ];
                $this->session->set_userdata($data);
                redirect('home');
            } else {
                $this->session->set_flashdata('message', 'Password salah');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', 'Username tidak ditemukan');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', 'Anda telah logout');
        redirect('login');
    }
}
