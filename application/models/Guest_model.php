<?php

class Guest_model extends CI_model
{
    public function rules()
    {
        return
            [
                [
                    'field' => 'inputNamaProject',
                    'label' => 'Nama Project',
                    'rules' => 'trim|required'
                ],
            ];
    }

    public function jumlah_project()
    {
        $query = $this->db->query('SELECT * FROM project');
        return $query->num_rows();
    }

    public function jumlah_history_project()
    {
        $query = $this->db->query('SELECT * FROM history');
        return $query->num_rows();
    }

    public function jumlah_aplikasi_eksisting()
    {
        $query = $this->db->query('SELECT * FROM aplikasi_eksisting');
        return $query->num_rows();
    }

    public function getAllDataAplikasi()
    {
        return $this->db->get('aplikasi_eksisting')->result_array();
    }

    public function getAllDataHistory()
    {
        return $this->db->get('history')->result_array();
    }

    public function getDataHistoryById($id)
    {
        return $this->db->get_where('history', ['id' => $id])->row_array();
    }

    public function getAllData()
    {
        return $this->db->get('project')->result_array();
    }

    public function getDataById($id)
    {
        return $this->db->get_where('project', ['id' => $id])->row_array();
    }

    public function getAllDataHistoryTiket()
    {
        return $this->db->get('history_guest')->result_array();
    }

    public function getData($limit)
    {
        //return $this->db->get('project', $limit, $start)->result_array();
        $this->db->select('*');
        $this->db->from('project');
        $this->db->order_by('modified_date', 'desc');
        $this->db->limit($limit);
        return $this->db->get()->result_array();
    }

    public function getDataAplikasi($limit, $start)
    {
        //return $this->db->get('project', $limit, $start)->result_array();
        $this->db->select('*');
        $this->db->from('aplikasi_eksisting');
        $this->db->limit($limit, $start);
        return $this->db->get()->result_array();
    }

    public function getDataHistory($limit, $start)
    {
        //return $this->db->get('project', $limit, $start)->result_array();
        $this->db->select('*');
        $this->db->from('history');
        $this->db->order_by('modified_date', 'desc');
        $this->db->limit($limit, $start);
        return $this->db->get()->result_array();
    }

    public function countAllDataProject()
    {
        return $this->db->get('project')->num_rows();
    }

    public function countAllDataAplikasi()
    {
        return $this->db->get('aplikasi_eksisting')->num_rows();
    }

    public function countAllDataHistory()
    {
        return $this->db->get('history')->num_rows();
    }

    public function cariDataProject()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama', $keyword);
        $this->db->or_like('code', $keyword);
        $this->db->or_like('tahun', $keyword);
        return $this->db->get('project')->result_array();
    }

    public function cariDataAplikasi()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama_aplikasi', $keyword);
        $this->db->or_like('business_owner', $keyword);
        $this->db->or_like('domain_aplikasi', $keyword);
        $this->db->or_like('ip_local', $keyword);
        $this->db->or_like('ip_public', $keyword);
        return $this->db->get('aplikasi_eksisting')->result_array();
    }

    public function cariDataHistory()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama', $keyword);
        $this->db->or_like('code', $keyword);
        $this->db->or_like('tahun', $keyword);
        return $this->db->get('history')->result_array();
    }

    //insert data
    public function addDataRequest()
    {
        $data = [
            'guest_username' => $this->input->post('inputUsername', true),
            'nama_pic' => $this->input->post('inputNamaPic', true),
            'project_name' => $this->input->post('inputNamaProject', true),
            'detail' => $this->input->post('inputDetail', true)
        ];

        $this->db->set('created_date', 'NOW()', FALSE);
        $this->db->insert('guest', $data);
    }

    public function getDataGuest($username)
    {
        //return $this->db->get_where('guest', ['guest_username' => $username])->row_array();
        $this->db->select('*');
        $this->db->from('guest');
        $this->db->where('guest_username', $username);
        return $this->db->get()->result_array();
    }

    public function getGuest($username)
    {
        $queryMenu =   "SELECT *
                        FROM `project` 
                        JOIN `guest`
                        ON `code` = `project_id`
                        WHERE `guest_username` = '$username'                   
                        ";
        return $this->db->query($queryMenu)->result_array();
    }

    public function getGuestHistory($username)
    {
        $queryMenu =   "SELECT *
                        FROM `project` 
                        JOIN `history_guest`
                        ON `code` = `project_id`
                        WHERE `guest_username` = '$username'                   
                        ";
        return $this->db->query($queryMenu)->result_array();
    }

    public function getAllGuest()
    {
        return $this->db->get('guest')->result_array();
    }

    public function moveDataById($id)
    {
        //update modified_date
        $this->db->where('id', $id);
        $this->db->set('modified_date', 'NOW()', FALSE);
        $this->db->update('guest');

        //move row db project ke db history
        $data = $this->db->get_where('guest', ['id' => $id])->row_array();
        $this->db->insert('history_guest', $data);
        $this->db->delete('guest', ['id' => $id]);
    }

    // public function getProgress($username)
    // {

    //     return $this->db->query($queryMenu)->result_array();
    // }
}
