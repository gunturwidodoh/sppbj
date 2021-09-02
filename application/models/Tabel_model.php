<?php

class Tabel_model extends CI_model
{
    public function getAllData()
    {
        return $this->db->get('project')->result_array();
    }

    public function getDataById($id)
    {
        return $this->db->get_where('project', ['id' => $id])->row_array();
    }

    //Model Penambahan Data
    //Data Awal
    public function addDataTambahAwal()
    {
        $data = [
            'code' => $this->input->post('inputKode', true),
            'nama' => $this->input->post('inputNamaPengadaan', true),
            'kategori' => $this->input->post('inputKategori', true),
            'tahun' => $this->input->post('inputTahun', true),
            'deskripsi' => $this->input->post('inputDeskripsi', true),
            'pic' => $this->input->post('inputPIC', true),
            'target' => $this->input->post('inputTarget', true),
            'program' => $this->input->post('inputProgramUtama', true),
            'mata_anggaran' => $this->input->post('inputMataAnggaran', true),
            'jenis_anggaran' => $this->input->post('inputJenisAnggaran', true),
        ];
        $this->db->insert('project', $data);
    }

    //Data SPPBJ
    public function updateDataSPPBJ()
    {
        $data = [
            'no_drp' => $this->input->post('inputNoDRP', true),
            'anggaran_edrp' => $this->input->post('inputAnggaranDRP', true),
            'no_sppbj' => $this->input->post('inputNomorSPPBJ', true),
            'nilai_sppbj' => $this->input->post('inputNilaiSPPBJ', true),
            'tanggal' => $this->input->post('inputTanggalTerbit', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->insert('project', $data);
    }

    //Data Kontrak
    public function updateDataKontrak()
    {
        $data = [
            'nomor_kontrak' => $this->input->post('inputNoKontrak', true),
            'nilai_kontrak' => $this->input->post('inputNilaiKontrak', true),
            'nomor_po' => $this->input->post('inputNoPo', true),
            'tanggal_kontrak' => $this->input->post('inputTanggalKontrak', true),
            'jangka_waktu' => $this->input->post('inputWaktuPengerjaan', true),
            'tanggal_berakhir' => $this->input->post('inputTanggalBerakhir', true),
            'jaminan_pelaksanaan' => $this->input->post('inputJaminanPelaksanaan', true),
            'rekanan' => $this->input->post('inputNamaRekanan', true),
            'npwp_rekanan' => $this->input->post('inputNPWPRekanan', true),
            'nama_am' => $this->input->post('inputNamaAM', true),
            'alamat_rekanan' => $this->input->post('inputAlamatRekanan', true),
            'termin_1' => $this->input->post('inputTerminSatu', true),
            'termin_2' => $this->input->post('inputTerminDua', true),
            'termin_3' => $this->input->post('inputTerminTiga', true),
            'termin_4' => $this->input->post('inputTerminEmpat', true),
            'termin_5' => $this->input->post('inputTerminLima', true),
            'tot_pembayaran' => $this->input->post('inputTotalPembayaran', true),
            'selisih' => $this->input->post('inputSelisihTermin', true),
            'q1' => $this->input->post('inputQSatu', true),
            'q2' => $this->input->post('inputQDua', true),
            'q3' => $this->input->post('inputQTiga', true),
            'q4' => $this->input->post('inputQEmpat', true),
            'opex' => $this->input->post('inputOpex', true),
            'capex' => $this->input->post('inputCapex', true),
            'perbandingan' => $this->input->post('inputPerbandinganNilai', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->insert('project', $data);
    }
    //End Model Tambah Data

    //Model Edit Data
    //Data Awal

    public function editDataAwal()
    {
        $data = [
            'code' => $this->input->post('inputKode', true),
            'nama' => $this->input->post('inputNamaPengadaan', true),
            'kategori' => $this->input->post('inputKategori', true),
            'tahun' => $this->input->post('inputTahun', true),
            'deskripsi' => $this->input->post('inputDeskripsi', true),
            'pic' => $this->input->post('inputPIC', true),
            'target' => $this->input->post('inputTarget', true),
            'program' => $this->input->post('inputProgramUtama', true),
            'mata_anggaran' => $this->input->post('inputMataAnggaran', true),
            'jenis_anggaran' => $this->input->post('inputJenisAnggaran', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('project', $data);
    }

    //Data SPPBJ
    public function editDataSPPBJ()
    {
        $data = [
            'no_drp' => $this->input->post('inputNoDRP', true),
            'anggaran_edrp' => $this->input->post('inputAnggaranDRP', true),
            'no_sppbj' => $this->input->post('inputNomorSPPBJ', true),
            'nilai_sppbj' => $this->input->post('inputNilaiSPPBJ', true),
            'tanggal' => $this->input->post('inputTanggalTerbit', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('project', $data);
    }

    //Data Kontrak
    public function editDataKontrak()
    {
        $data = [
            'nomor_kontrak' => $this->input->post('inputNoKontrak', true),
            'nilai_kontrak' => $this->input->post('inputNilaiKontrak', true),
            'nomor_po' => $this->input->post('inputNoPo', true),
            'tanggal_kontrak' => $this->input->post('inputTanggalKontrak', true),
            'jangka_waktu' => $this->input->post('inputWaktuPengerjaan', true),
            'tanggal_berakhir' => $this->input->post('inputTanggalBerakhir', true),
            'jaminan_pelaksanaan' => $this->input->post('inputJaminanPelaksanaan', true),
            'rekanan' => $this->input->post('inputNamaRekanan', true),
            'npwp_rekanan' => $this->input->post('inputNPWPRekanan', true),
            'nama_am' => $this->input->post('inputNamaAM', true),
            'alamat_rekanan' => $this->input->post('inputAlamatRekanan', true),
            'termin_1' => $this->input->post('inputTerminSatu', true),
            'termin_2' => $this->input->post('inputTerminDua', true),
            'termin_3' => $this->input->post('inputTerminTiga', true),
            'termin_4' => $this->input->post('inputTerminEmpat', true),
            'termin_5' => $this->input->post('inputTerminLima', true),
            'tot_pembayaran' => $this->input->post('inputTotalPembayaran', true),
            'selisih' => $this->input->post('inputSelisihTermin', true),
            'q1' => $this->input->post('inputQSatu', true),
            'q2' => $this->input->post('inputQDua', true),
            'q3' => $this->input->post('inputQTiga', true),
            'q4' => $this->input->post('inputQEmpat', true),
            'opex' => $this->input->post('inputOpex', true),
            'capex' => $this->input->post('inputCapex', true),
            'perbandingan' => $this->input->post('inputPerbandinganNilai', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('project', $data);
    }
    //End Modal Edit Data

    public function updateData($id)
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
        $this->db->where('id', $id);
        $this->db->update('project', $data);
    }

    public function deleteData($id)
    {
        $this->db->delete('project', ['id' => $id]);
    }
}
