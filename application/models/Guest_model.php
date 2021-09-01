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
}
