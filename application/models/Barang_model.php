<?php

class Barang_model extends CI_model
{
    public function get_all()
    {
        return $this->db->get('barang')->result_array();
    }
}
