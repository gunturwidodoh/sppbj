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

    public function editData()
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
            'ttd' => $this->input->post('inputTtd', true),
            'status' => $this->input->post('inputStatus', true),
            'no_drp' => $this->input->post('inputNoDRP', true),
            'anggaran_edrp' => $this->input->post('inputAnggaranDRP', true),
            'no_sppbj' => $this->input->post('inputNomorSPPBJ', true),
            'nilai_sppbj' => $this->input->post('inputNilaiSPPBJ', true),
            'status' => $this->input->post('inputStatus', true),
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
            'selisih' => $this->input->post('inputSelisihTermin', true),
            'q1' => $this->input->post('inputQSatu', true),
            'q2' => $this->input->post('inputQDua', true),
            'q3' => $this->input->post('inputQTiga', true),
            'q4' => $this->input->post('inputQEmpat', true),
            'opex' => $this->input->post('inputOpex', true),
            'capex' => $this->input->post('inputCapex', true),
            'perbandingan' => $this->input->post('inputPerbandinganNilai', true),
            'ttd' => $this->input->post('inputTtd', true),
            'status' => $this->input->post('inputStatus', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->set('modified_date', 'NOW()', FALSE);
        //FALSE untuk mengubah 'NOW()' menjadi NOW()
        $this->db->update('project', $data);
    }



    public function deleteData($id)
    {
        $this->db->delete('project', ['id' => $id]);
    }

    //pagination
    public function getData($limit, $start)
    {
        //return $this->db->get('project', $limit, $start)->result_array();
        $this->db->select('*');
        $this->db->from('project');
        $this->db->order_by('modified_date', 'desc');
        $this->db->limit($limit, $start);
        return $this->db->get()->result_array();
    }

    public function countAllData()
    {
        return $this->db->get('project')->num_rows();
    }

    public function cariDataProject()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama', $keyword);
        $this->db->or_like('code', $keyword);
        $this->db->or_like('tahun', $keyword);
        return $this->db->get('project')->result_array();
    }
}

//Data SPPBJ
// public function updateDataSPPBJ()
// {
//     $data = [
//         'no_drp' => $this->input->post('inputNoDRP', true),
//         'anggaran_edrp' => $this->input->post('inputAnggaranDRP', true),
//         'no_sppbj' => $this->input->post('inputNomorSPPBJ', true),
//         'nilai_sppbj' => $this->input->post('inputNilaiSPPBJ', true),
//         'tanggal' => $this->input->post('inputTanggalTerbit', true),
//         'ttd' => $this->input->post('inputTtd', true),
//         'status' => $this->input->post('inputStatus', true),
//     ];
//     $this->db->where('id', $this->input->post('id'));
//     $this->db->set('modified_date', 'NOW()', FALSE);
//     $this->db->update('project', $data);
// }

//Data Kontrak
// public function updateDataKontrak()
// {
//     $terminSatu = $this->input->post('inputTerminSatu', true);
//     $terminDua = $this->input->post('inputTerminDua', true);
//     $terminTiga = $this->input->post('inputTerminTiga', true);
//     $terminEmpat = $this->input->post('inputTerminEmpat', true);
//     $terminLima = $this->input->post('inputTerminLima', true);
//     $total_pembayaran = (int)$terminSatu + (int)$terminDua + (int)$terminTiga + (int)$terminEmpat + (int)$terminLima;
//     // var_dump((string)$total_pembayaran);
//     // die;

//     $data = [
//         'nomor_kontrak' => $this->input->post('inputNoKontrak', true),
//         'nilai_kontrak' => $this->input->post('inputNilaiKontrak', true),
//         'nomor_po' => $this->input->post('inputNoPo', true),
//         'tanggal_kontrak' => $this->input->post('inputTanggalKontrak', true),
//         'jangka_waktu' => $this->input->post('inputWaktuPengerjaan', true),
//         'tanggal_berakhir' => $this->input->post('inputTanggalBerakhir', true),
//         'jaminan_pelaksanaan' => $this->input->post('inputJaminanPelaksanaan', true),
//         'rekanan' => $this->input->post('inputNamaRekanan', true),
//         'npwp_rekanan' => $this->input->post('inputNPWPRekanan', true),
//         'nama_am' => $this->input->post('inputNamaAM', true),
//         'alamat_rekanan' => $this->input->post('inputAlamatRekanan', true),
//         'termin_1' => $this->input->post('inputTerminSatu', true),
//         'termin_2' => $this->input->post('inputTerminDua', true),
//         'termin_3' => $this->input->post('inputTerminTiga', true),
//         'termin_4' => $this->input->post('inputTerminEmpat', true),
//         'termin_5' => $this->input->post('inputTerminLima', true),
//         'selisih' => $this->input->post('inputSelisihTermin', true),
//         'q1' => $this->input->post('inputQSatu', true),
//         'q2' => $this->input->post('inputQDua', true),
//         'q3' => $this->input->post('inputQTiga', true),
//         'q4' => $this->input->post('inputQEmpat', true),
//         'opex' => $this->input->post('inputOpex', true),
//         'capex' => $this->input->post('inputCapex', true),
//         'perbandingan' => $this->input->post('inputPerbandinganNilai', true),
//         'ttd' => $this->input->post('inputTtd', true),
//         'status' => $this->input->post('inputStatus', true),
//     ];
//     $this->db->set('tot_pembayaran', $total_pembayaran);
//     $this->db->set('modified_date', 'NOW()', FALSE);
//     $this->db->where('id', $this->input->post('id'));
//     $this->db->update('project', $data);
// }
// //End Model Tambah Data

// //Model Edit Data
// //Data Awal

// public function editDataAwal()
// {
//     $data = [
//         'code' => $this->input->post('inputKode', true),
//         'nama' => $this->input->post('inputNamaPengadaan', true),
//         'kategori' => $this->input->post('inputKategori', true),
//         'tahun' => $this->input->post('inputTahun', true),
//         'deskripsi' => $this->input->post('inputDeskripsi', true),
//         'pic' => $this->input->post('inputPIC', true),
//         'target' => $this->input->post('inputTarget', true),
//         'program' => $this->input->post('inputProgramUtama', true),
//         'mata_anggaran' => $this->input->post('inputMataAnggaran', true),
//         'jenis_anggaran' => $this->input->post('inputJenisAnggaran', true),
//         'ttd' => $this->input->post('inputTtd', true),
//         'status' => $this->input->post('inputStatus', true),
//     ];
//     $this->db->where('id', $this->input->post('id'));
//     $this->db->set('modified_date', 'NOW()', FALSE);
//     //FALSE untuk mengubah 'NOW()' menjadi NOW()
//     $this->db->update('project', $data);
// }

// //Data SPPBJ
// public function editDataSPPBJ()
// {
//     $data = [
//         'no_drp' => $this->input->post('inputNoDRP', true),
//         'anggaran_edrp' => $this->input->post('inputAnggaranDRP', true),
//         'no_sppbj' => $this->input->post('inputNomorSPPBJ', true),
//         'nilai_sppbj' => $this->input->post('inputNilaiSPPBJ', true),
//         'tanggal' => $this->input->post('inputTanggalTerbit', true),
//         'ttd' => $this->input->post('inputTtd', true),
//         'status' => $this->input->post('inputStatus', true),
//     ];
//     $this->db->where('id', $this->input->post('id'));
//     $this->db->set('modified_date', 'NOW()', FALSE);
//     $this->db->update('project', $data);
// }

// //Data Kontrak
// public function editDataKontrak()
// {
//     $terminSatu = $this->input->post('inputTerminSatu', true);
//     $terminDua = $this->input->post('inputTerminDua', true);
//     $terminTiga = $this->input->post('inputTerminTiga', true);
//     $terminEmpat = $this->input->post('inputTerminEmpat', true);
//     $terminLima = $this->input->post('inputTerminLima', true);
//     $total_pembayaran = (int)$terminSatu + (int)$terminDua + (int)$terminTiga + (int)$terminEmpat + (int)$terminLima;
//     $data = [
//         'nomor_kontrak' => $this->input->post('inputNoKontrak', true),
//         'nilai_kontrak' => $this->input->post('inputNilaiKontrak', true),
//         'nomor_po' => $this->input->post('inputNoPo', true),
//         'tanggal_kontrak' => $this->input->post('inputTanggalKontrak', true),
//         'jangka_waktu' => $this->input->post('inputWaktuPengerjaan', true),
//         'tanggal_berakhir' => $this->input->post('inputTanggalBerakhir', true),
//         'jaminan_pelaksanaan' => $this->input->post('inputJaminanPelaksanaan', true),
//         'rekanan' => $this->input->post('inputNamaRekanan', true),
//         'npwp_rekanan' => $this->input->post('inputNPWPRekanan', true),
//         'nama_am' => $this->input->post('inputNamaAM', true),
//         'alamat_rekanan' => $this->input->post('inputAlamatRekanan', true),
//         'termin_1' => $this->input->post('inputTerminSatu', true),
//         'termin_2' => $this->input->post('inputTerminDua', true),
//         'termin_3' => $this->input->post('inputTerminTiga', true),
//         'termin_4' => $this->input->post('inputTerminEmpat', true),
//         'termin_5' => $this->input->post('inputTerminLima', true),
//         'selisih' => $this->input->post('inputSelisihTermin', true),
//         'q1' => $this->input->post('inputQSatu', true),
//         'q2' => $this->input->post('inputQDua', true),
//         'q3' => $this->input->post('inputQTiga', true),
//         'q4' => $this->input->post('inputQEmpat', true),
//         'opex' => $this->input->post('inputOpex', true),
//         'capex' => $this->input->post('inputCapex', true),
//         'perbandingan' => $this->input->post('inputPerbandinganNilai', true),
//         'ttd' => $this->input->post('inputTtd', true),
//         'status' => $this->input->post('inputStatus', true),
//     ];
//     $this->db->set('tot_pembayaran', $total_pembayaran);
//     $this->db->set('modified_date', 'NOW()', FALSE);
//     $this->db->where('id', $this->input->post('id'));
//     $this->db->update('project', $data);
// }
// //End Modal Edit Data

/*public function updateData($id)
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
}*/
