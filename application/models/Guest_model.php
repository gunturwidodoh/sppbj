<?php

class Guest_model extends CI_model
{
    public function getAllDataAplikasi()
    {
        return $this->db->get('aplikasi_eksisting')->result_array();
    }

    public function getAllData()
    {
        return $this->db->get('project')->result_array();
    }

    public function getData($limit, $start)
    {
        return $this->db->get('project', $limit, $start)->result_array();
    }

    public function countAllData()
    {
        return $this->db->get('project')->num_rows();
    }
}
