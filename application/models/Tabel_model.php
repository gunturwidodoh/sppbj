<?php

class Tabel_model extends CI_model
{
    public function getAllData()
    {
        return $this->db->get('project')->result_array();
    }

    public function addData()
    {
        
    }
}
