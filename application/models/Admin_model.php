<?php

class Admin_model extends CI_model
{

    public function getAllDataLogin()
    {
        return $this->db->get('login')->result_array();
    }

    public function getAllDataAplikasi()
    {
        return $this->db->get('aplikasi_eksisting')->result_array();
    }

    public function rules()
    {
        return
            [
                [
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'trim|required'
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

    public function addDataRegistrasi()
    {
        $data = [
            "username" => $this->input->post('username', true),
            "password" => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            "role" => $this->input->post('role', true)
        ];

        $this->db->insert('login', $data);
    }

    public function deleteData($id)
    {
        $this->db->delete('login', ['id' => $id]);
    }
}
