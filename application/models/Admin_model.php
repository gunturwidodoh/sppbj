<?php

class Admin_model extends CI_model
{

    public function getAllDataLogin()
    {
        return $this->db->get('login')->result_array();
    }

    public function jumlah_akun()
    {
        $query = $this->db->query('SELECT * FROM login');
        return $query->num_rows();
    }

    public function jumlah_aplikasi()
    {
        $query = $this->db->query('SELECT * FROM aplikasi_eksisting');
        return $query->num_rows();
    }

    public function rules()
    {
        return
            [
                [
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'trim|required|is_unique[login.username]'
                ],

                [
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'trim|required'
                ],

                [
                    'field' => 'pass',
                    'label' => 'Password',
                    'rules' => 'trim|required|matches[password]'
                ]
            ];
    }

    public function rulesApp()
    {
        return
            [
                [
                    'field' => 'inputNamaApp',
                    'label' => 'Nama Aplikasi',
                    'rules' => 'trim|required'
                ],
            ];
    }

    public function addDataRegistrasi()
    {
        $data = [
            "username" => $this->input->post('username', true),
            "password" => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            "role" => $this->input->post('role', true)
        ];

        $this->db->insert('login', $data);
    }

    public function addDataAplikasi()
    {
        $data = [
            "nama_aplikasi" => $this->input->post('inputNamaApp', true),
            "business_owner" => $this->input->post('inputBusinessOwner', true),
            "domain_aplikasi" => $this->input->post('inputDomain', true),
            "ip_local" => $this->input->post('inputIpLocal', true),
            "ip_public" => $this->input->post('inputIpPublic', true)
        ];

        $this->db->insert('aplikasi_eksisting', $data);
    }

    public function deleteData($id)
    {
        $this->db->delete('login', ['id' => $id]);
    }
}
