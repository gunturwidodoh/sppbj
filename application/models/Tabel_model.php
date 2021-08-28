<?php

class Tabel_model extends CI_model
{
    public function getAllData()
    {
        return $this->db->get('project')->result_array();
    }

    public function addData()
    {
        $data = [
            'no_drp' => $this->input->post('inputNoDRP', true),
            'no_sppbj' => $this->input->post('inputNoSPPBJ', true),
            'tanggal' => $this->input->post('inputTanggal', true),
            'code' => $this->input->post('inputKode', true),
            'nama' => $this->input->post('inputNamaPengadaan', true),
            'kategori' => $this->input->post('inputKategori', true),
            'tahun' => $this->input->post('inputTahun', true),
            'deskripsi' => $this->input->post('inputDeskripsi', true),
            'program' => $this->input->post('inputProgramUtama', true),
            'pic' => $this->input->post('inputPIC', true),
            'target' => $this->input->post('inputTarget', true),
            'mata_anggaran' => $this->input->post('inputMataAnggaran', true),
            'jenis_anggaran' => $this->input->post('inputJenisAnggaran', true),
            'anggaran_edrp' => $this->input->post('inputAnggaranEDRP', true),
            'nilai_sppbj' => $this->input->post('inputNilaiSPPBJ', true),
            'status' => $this->input->post('inputStatus', true),
            'keterangan' => $this->input->post('inputKeterangan', true),
        ];
        $this->db->insert('project', $data);
    }
}
