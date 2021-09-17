<?php

class Tabel_model extends CI_model
{
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

    public function rulesValidation()
    {
        return
            [
                [
                    'field' => 'inputNamaPengadaan',
                    'label' => 'Nama Pengadaan',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'inputKode',
                    'label' => 'ID',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'inputNilaiSPPBJ',
                    'label' => 'Nilai SPPBJ',
                    'rules' => 'trim|integer'
                ],
                [
                    'field' => 'inputAnggaranDRP',
                    'label' => 'Anggaran DRP',
                    'rules' => 'trim|integer'
                ],
                [
                    'field' => 'inputTerminSatu',
                    'label' => 'Termin 1',
                    'rules' => 'trim|integer'
                ],
                [
                    'field' => 'inputTerminDua',
                    'label' => 'Termin 2',
                    'rules' => 'trim|integer'
                ],
                [
                    'field' => 'inputTerminTiga',
                    'label' => 'Termin 3',
                    'rules' => 'trim|integer'
                ],
                [
                    'field' => 'inputTerminEmpat',
                    'label' => 'Termin 4',
                    'rules' => 'trim|integer'
                ],
                [
                    'field' => 'inputTerminLima',
                    'label' => 'Termin 5',
                    'rules' => 'trim|integer'
                ],
                [
                    'field' => 'inputNoPo',
                    'label' => 'No. PO',
                    'rules' => 'trim|integer'
                ],
                [
                    'field' => 'inputOpex',
                    'label' => 'Opex (Biaya)',
                    'rules' => 'trim|integer'
                ],
                [
                    'field' => 'inputCapex',
                    'label' => 'Capex (Investasi)',
                    'rules' => 'trim|integer'
                ],
                [
                    'field' => 'inputProgress',
                    'label' => 'Progress',
                    'rules' => 'trim|required|numeric|less_than_equal_to[100]|greater_than[0]'
                ]
            ];
    }

    public function tahun()
    {
        return
            [
                NULL, '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024', '2025'
            ];
    }

    public function quartal()
    {
        return
            [
                'q1' => [NULL, 'Januari', 'Februari', 'Maret'],
                'q2' => [NULL, 'April', 'Mei', 'Juni'],
                'q3' => [NULL, 'Juli', 'Agustus', 'September'],
                'q4' => [NULL, 'Oktober', 'November', 'Desember']
            ];
    }

    public function kategori()
    {
        return
            [
                NULL, 'Rutin', 'Project'
            ];
    }

    public function mata_anggaran()
    {
        return
            [
                NULL,
                'Peralatan Teknologi Dan Komunikasi', 'Pemeliharaan Alat Teknologi Komunikasi', 'Pemeliharaan Instalasi Jaringan',
                'Beban Koneksi Data', 'Jasa Sistem', 'Beban Tenaga Kerja', 'Perjalanan Dinas', 'Alat & Perlengkapan Kantor',
                'Pelatihan Karyawan', 'Beban Jamuan Rapat'

            ];
    }

    public function jenis_anggaran()
    {
        return
            [
                NULL, 'Investasi', 'Biaya'
            ];
    }

    public function tanda_tangan()
    {
        return
            [
                NULL, 'Manager Operasional TI', 'Manager Pelayanan TI', 'Manager Pengembangan TI', 'Vice President TI', 'Direktur Keuangan, TI, dan Management Resiko',
                'Vice President Perencanaan dan Pengendalian Keuangan', 'Vice Supply Chain Management'
            ];
    }

    public function getAllData()
    {
        return $this->db->get('project')->result_array();
    }

    public function getAllDataHistory()
    {
        return $this->db->get('history')->result_array();
    }

    public function getDataById($id)
    {
        return $this->db->get_where('project', ['id' => $id])->row_array();
    }

    public function moveDataById($id)
    {
        //update modified_date
        $this->db->where('id', $id);
        $this->db->set('modified_date', 'NOW()', FALSE);
        $this->db->update('project');

        //move row db project ke db history
        $data = $this->db->get_where('project', ['id' => $id])->row_array();
        $this->db->insert('history', $data);
        $this->db->delete('project', ['id' => $id]);
    }

    public function addData()
    {
        $data = [
            'no_drp' => $this->input->post('inputNoDRP', true),
            'no_sppbj' => $this->input->post('inputNoSPPBJ', true),
            'tanggal' => $this->input->post('inputTanggalTerbit', true),
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
            'anggaran_edrp' => $this->input->post('inputAnggaranDRP', true),
            'nilai_sppbj' => $this->input->post('inputNilaiSPPBJ', true),
            'nilai_kontrak' => $this->input->post('inputNilaiKontrak', true),            
            'status' => $this->input->post('inputStatus', true),
            'nomor_po' => $this->input->post('inputNoPo', true),
            'nomor_kontrak' => $this->input->post('inputNoKontrak', true),
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
            'status' => $this->input->post('inputProgress', true),
            'q1' => $this->input->post('inputQSatu', true),
            'q2' => $this->input->post('inputQDua', true),
            'q3' => $this->input->post('inputQTiga', true),
            'q4' => $this->input->post('inputQEmpat', true),
            'opex' => $this->input->post('inputOpex', true),
            'capex' => $this->input->post('inputCapex', true),
            'perbandingan' => $this->input->post('inputPerbandinganNilai', true),
            'keterangan' => $this->input->post('inputKeterangan', true)
        ];

        // total pembayaran = SUM termin 1 - 5
        $terminSatu = $this->input->post('inputTerminSatu', true);
        $terminDua = $this->input->post('inputTerminDua', true);
        $terminTiga = $this->input->post('inputTerminTiga', true);
        $terminEmpat = $this->input->post('inputTerminEmpat', true);
        $terminLima = $this->input->post('inputTerminLima', true);
        $total_pembayaran = (int)$terminSatu + (int)$terminDua + (int)$terminTiga + (int)$terminEmpat + (int)$terminLima;
        $this->db->set('tot_pembayaran', $total_pembayaran);
        $this->db->insert('project', $data);
    }

    public function editData($id)
    {
        $data = [
            'no_drp' => $this->input->post('inputNoDRP', true),
            'no_sppbj' => $this->input->post('inputNoSPPBJ', true),
            'tanggal' => $this->input->post('inputTanggalTerbit', true),
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
            'anggaran_edrp' => $this->input->post('inputAnggaranDRP', true),
            'nilai_sppbj' => $this->input->post('inputNilaiSPPBJ', true),
            'nilai_kontrak' => $this->input->post('inputNilaiKontrak', true),            
            'status' => $this->input->post('inputStatus', true),
            'nomor_po' => $this->input->post('inputNoPo', true),
            'nomor_kontrak' => $this->input->post('inputNoKontrak', true),
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
            'status' => $this->input->post('inputProgress', true),
            'q1' => $this->input->post('inputQSatu', true),
            'q2' => $this->input->post('inputQDua', true),
            'q3' => $this->input->post('inputQTiga', true),
            'q4' => $this->input->post('inputQEmpat', true),
            'opex' => $this->input->post('inputOpex', true),
            'capex' => $this->input->post('inputCapex', true),
            'perbandingan' => $this->input->post('inputPerbandinganNilai', true),
            'keterangan' => $this->input->post('inputKeterangan', true)
        ];

        // total pembayaran = SUM termin 1 - 5
        $terminSatu = $this->input->post('inputTerminSatu', true);
        $terminDua = $this->input->post('inputTerminDua', true);
        $terminTiga = $this->input->post('inputTerminTiga', true);
        $terminEmpat = $this->input->post('inputTerminEmpat', true);
        $terminLima = $this->input->post('inputTerminLima', true);
        $total_pembayaran = (int)$terminSatu + (int)$terminDua + (int)$terminTiga + (int)$terminEmpat + (int)$terminLima;
        $this->db->set('tot_pembayaran', $total_pembayaran);
        
        // get current time
        $this->db->set('modified_date', 'NOW()', FALSE); //FALSE untuk mengubah 'NOW()' menjadi NOW()

        // where id="id"
        $this->db->where('id', $id);
        $this->db->update('project', $data);
    }

    public function deleteData($id)
    {
        $this->db->delete('project', ['id' => $id]);
    }

    public function deleteDataHistory($id)
    {
        $this->db->delete('history', ['id' => $id]);
    }

    //pagination
    public function getData($limit)
    {
        //return $this->db->get('project', $limit, $start)->result_array();
        $this->db->select('*');
        $this->db->from('project');
        $this->db->order_by('modified_date', 'desc');
        $this->db->limit($limit);
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

    public function getDataHistory($limit, $start)
    {
        //return $this->db->get('project', $limit, $start)->result_array();
        $this->db->select('*');
        $this->db->from('history');
        $this->db->order_by('modified_date', 'desc');
        $this->db->limit($limit, $start);
        return $this->db->get()->result_array();
    }

    public function countAllDataHistory()
    {
        return $this->db->get('history')->num_rows();
    }

    public function cariDataHistory()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama', $keyword);
        $this->db->or_like('code', $keyword);
        $this->db->or_like('tahun', $keyword);
        return $this->db->get('history')->result_array();
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
