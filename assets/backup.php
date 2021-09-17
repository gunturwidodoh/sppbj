<!-- TTD SPPBJ -->
<div class="form-group">
    <label for="inputTtd">SPPBJ Telah Ditandatangani Oleh</label>
    <select class="form-control" id="inputTtd" name="inputTtd">
        <?php foreach ($tandaTangan as $tt) : ?>
            <?php if ($tt == $row['ttd']) : ?>
                <option value="<?= $tt; ?>" selected><?= $tt; ?></option>
            <?php else : ?>
                <option value="<?= $tt; ?>"><?= $tt; ?></option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>
</div>

<!-- jenis anggaran -->
<div class="form-group">
    <label for="inputJenisAnggaran">Jenis Anggaran</label>
    <select class="form-control" id="inputJenisAnggaran" name="inputJenisAnggaran">
        <?php foreach ($jenisAnggaran as $ja) : ?>
            <?php if ($ja == $row['jenis_anggaran']) : ?>
                <option value="<?= $ja; ?>" selected><?= $ja; ?></option>
            <?php else : ?>
                <option value="<?= $ja; ?>"><?= $ja; ?></option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>
</div>


<!-- Pagination -->
//pagination
//config
$config['base_url'] = 'http://localhost:8080/sppbj/index.php/tabel/index';
$config['total_rows'] = $this->Tabel_model->countAllData();
$config['per_page'] = 10;

//style
$config['full_tag_open'] = '<nav aria-label="Page navigation example">
    <ul class="pagination">';
        $config['full_tag_close'] = '</ul>
</nav>';

$config['first_link'] = 'First';
$config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li>';

$config['last_link'] = 'Last';
$config['last_tag_open'] = '<li class="page-item">';
    $config['last_tag_close'] = '</li>';

$config['next_link'] = '&raquo';
$config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';

$config['prev_link'] = '&laquo';
$config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';

$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

$config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';

$config['attributes'] = array('class' => 'page-link');

//inisialisasi
$this->pagination->initialize($config);

//get data
$data['start'] = $this->uri->segment(3);
$data['tabel'] = $this->Tabel_model->getData($config['per_page'], $data['start']);
if ($this->input->post('keyword')) {
$data['tabel'] = $this->Tabel_model->cariDataProject();
}

//Data SPPBJ
// public function updateDataSPPBJ()
// {
// $data = [
// 'no_drp' => $this->input->post('inputNoDRP', true),
// 'anggaran_edrp' => $this->input->post('inputAnggaranDRP', true),
// 'no_sppbj' => $this->input->post('inputNomorSPPBJ', true),
// 'nilai_sppbj' => $this->input->post('inputNilaiSPPBJ', true),
// 'tanggal' => $this->input->post('inputTanggalTerbit', true),
// 'ttd' => $this->input->post('inputTtd', true),
// 'status' => $this->input->post('inputStatus', true),
// ];
// $this->db->where('id', $this->input->post('id'));
// $this->db->set('modified_date', 'NOW()', FALSE);
// $this->db->update('project', $data);
// }

//Data Kontrak
// public function updateDataKontrak()
// {
// $terminSatu = $this->input->post('inputTerminSatu', true);
// $terminDua = $this->input->post('inputTerminDua', true);
// $terminTiga = $this->input->post('inputTerminTiga', true);
// $terminEmpat = $this->input->post('inputTerminEmpat', true);
// $terminLima = $this->input->post('inputTerminLima', true);
// $total_pembayaran = (int)$terminSatu + (int)$terminDua + (int)$terminTiga + (int)$terminEmpat + (int)$terminLima;
// // var_dump((string)$total_pembayaran);
// // die;

// $data = [
// 'nomor_kontrak' => $this->input->post('inputNoKontrak', true),
// 'nilai_kontrak' => $this->input->post('inputNilaiKontrak', true),
// 'nomor_po' => $this->input->post('inputNoPo', true),
// 'tanggal_kontrak' => $this->input->post('inputTanggalKontrak', true),
// 'jangka_waktu' => $this->input->post('inputWaktuPengerjaan', true),
// 'tanggal_berakhir' => $this->input->post('inputTanggalBerakhir', true),
// 'jaminan_pelaksanaan' => $this->input->post('inputJaminanPelaksanaan', true),
// 'rekanan' => $this->input->post('inputNamaRekanan', true),
// 'npwp_rekanan' => $this->input->post('inputNPWPRekanan', true),
// 'nama_am' => $this->input->post('inputNamaAM', true),
// 'alamat_rekanan' => $this->input->post('inputAlamatRekanan', true),
// 'termin_1' => $this->input->post('inputTerminSatu', true),
// 'termin_2' => $this->input->post('inputTerminDua', true),
// 'termin_3' => $this->input->post('inputTerminTiga', true),
// 'termin_4' => $this->input->post('inputTerminEmpat', true),
// 'termin_5' => $this->input->post('inputTerminLima', true),
// 'selisih' => $this->input->post('inputSelisihTermin', true),
// 'q1' => $this->input->post('inputQSatu', true),
// 'q2' => $this->input->post('inputQDua', true),
// 'q3' => $this->input->post('inputQTiga', true),
// 'q4' => $this->input->post('inputQEmpat', true),
// 'opex' => $this->input->post('inputOpex', true),
// 'capex' => $this->input->post('inputCapex', true),
// 'perbandingan' => $this->input->post('inputPerbandinganNilai', true),
// 'ttd' => $this->input->post('inputTtd', true),
// 'status' => $this->input->post('inputStatus', true),
// ];
// $this->db->set('tot_pembayaran', $total_pembayaran);
// $this->db->set('modified_date', 'NOW()', FALSE);
// $this->db->where('id', $this->input->post('id'));
// $this->db->update('project', $data);
// }
// //End Model Tambah Data

// //Model Edit Data
// //Data Awal

// public function editDataAwal()
// {
// $data = [
// 'code' => $this->input->post('inputKode', true),
// 'nama' => $this->input->post('inputNamaPengadaan', true),
// 'kategori' => $this->input->post('inputKategori', true),
// 'tahun' => $this->input->post('inputTahun', true),
// 'deskripsi' => $this->input->post('inputDeskripsi', true),
// 'pic' => $this->input->post('inputPIC', true),
// 'target' => $this->input->post('inputTarget', true),
// 'program' => $this->input->post('inputProgramUtama', true),
// 'mata_anggaran' => $this->input->post('inputMataAnggaran', true),
// 'jenis_anggaran' => $this->input->post('inputJenisAnggaran', true),
// 'ttd' => $this->input->post('inputTtd', true),
// 'status' => $this->input->post('inputStatus', true),
// ];
// $this->db->where('id', $this->input->post('id'));
// $this->db->set('modified_date', 'NOW()', FALSE);
// //FALSE untuk mengubah 'NOW()' menjadi NOW()
// $this->db->update('project', $data);
// }

// //Data SPPBJ
// public function editDataSPPBJ()
// {
// $data = [
// 'no_drp' => $this->input->post('inputNoDRP', true),
// 'anggaran_edrp' => $this->input->post('inputAnggaranDRP', true),
// 'no_sppbj' => $this->input->post('inputNomorSPPBJ', true),
// 'nilai_sppbj' => $this->input->post('inputNilaiSPPBJ', true),
// 'tanggal' => $this->input->post('inputTanggalTerbit', true),
// 'ttd' => $this->input->post('inputTtd', true),
// 'status' => $this->input->post('inputStatus', true),
// ];
// $this->db->where('id', $this->input->post('id'));
// $this->db->set('modified_date', 'NOW()', FALSE);
// $this->db->update('project', $data);
// }

// //Data Kontrak
// public function editDataKontrak()
// {
// $terminSatu = $this->input->post('inputTerminSatu', true);
// $terminDua = $this->input->post('inputTerminDua', true);
// $terminTiga = $this->input->post('inputTerminTiga', true);
// $terminEmpat = $this->input->post('inputTerminEmpat', true);
// $terminLima = $this->input->post('inputTerminLima', true);
// $total_pembayaran = (int)$terminSatu + (int)$terminDua + (int)$terminTiga + (int)$terminEmpat + (int)$terminLima;
// $data = [
// 'nomor_kontrak' => $this->input->post('inputNoKontrak', true),
// 'nilai_kontrak' => $this->input->post('inputNilaiKontrak', true),
// 'nomor_po' => $this->input->post('inputNoPo', true),
// 'tanggal_kontrak' => $this->input->post('inputTanggalKontrak', true),
// 'jangka_waktu' => $this->input->post('inputWaktuPengerjaan', true),
// 'tanggal_berakhir' => $this->input->post('inputTanggalBerakhir', true),
// 'jaminan_pelaksanaan' => $this->input->post('inputJaminanPelaksanaan', true),
// 'rekanan' => $this->input->post('inputNamaRekanan', true),
// 'npwp_rekanan' => $this->input->post('inputNPWPRekanan', true),
// 'nama_am' => $this->input->post('inputNamaAM', true),
// 'alamat_rekanan' => $this->input->post('inputAlamatRekanan', true),
// 'termin_1' => $this->input->post('inputTerminSatu', true),
// 'termin_2' => $this->input->post('inputTerminDua', true),
// 'termin_3' => $this->input->post('inputTerminTiga', true),
// 'termin_4' => $this->input->post('inputTerminEmpat', true),
// 'termin_5' => $this->input->post('inputTerminLima', true),
// 'selisih' => $this->input->post('inputSelisihTermin', true),
// 'q1' => $this->input->post('inputQSatu', true),
// 'q2' => $this->input->post('inputQDua', true),
// 'q3' => $this->input->post('inputQTiga', true),
// 'q4' => $this->input->post('inputQEmpat', true),
// 'opex' => $this->input->post('inputOpex', true),
// 'capex' => $this->input->post('inputCapex', true),
// 'perbandingan' => $this->input->post('inputPerbandinganNilai', true),
// 'ttd' => $this->input->post('inputTtd', true),
// 'status' => $this->input->post('inputStatus', true),
// ];
// $this->db->set('tot_pembayaran', $total_pembayaran);
// $this->db->set('modified_date', 'NOW()', FALSE);
// $this->db->where('id', $this->input->post('id'));
// $this->db->update('project', $data);
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

// public function tambah()
// {
// // view
// $data['judul'] = 'Tambah Data';
// $data['role'] = $this->session->userdata('role');
// if ($data["role"] == '1') {
// $this->load->view('templates/header', $data);
// $this->load->view('templates/navbar');
// $this->load->view('templates/sidebar');
// $this->load->view('user/tabel/tambah', $data);
// $this->load->view('templates/footer');
// } else if ($data["role"] == '2') {
// $this->load->view('templates/header', $data);
// $this->load->view('templates/navbar');
// $this->load->view('templates/sidebar');
// $this->load->view('user/tabel/tambah', $data);
// $this->load->view('templates/footer');
// } else {
// $this->load->view('templates/header', $data);
// $this->load->view('errors/html/error_session');
// $this->load->view('templates/footer');
// }

// // fungsi add
// if ($this->input->post()) {
// $this->Tabel_model->addData();
// redirect('tabel');
// }
// }

// public function update($id)
// {
// // get data pada row yg di-update
// $data['row'] = $this->Tabel_model->getDataById($id);
// $data['role'] = $this->session->userdata('role');

// // view
// $data['judul'] = 'Update Data';
// $this->load->view('templates/header', $data);
// $this->load->view('templates/navbar');
// $this->load->view('templates/sidebar');
// $this->load->view('user/tabel/update', $data);
// $this->load->view('templates/footer');

// // fungsi update
// if ($this->input->post()) {
// $this->Tabel_model->updateData($id);
// redirect('tabel');
// }
// }

// public function edit_awal($id)
// {
// // view
// $data['row'] = $this->Tabel_model->getDataById($id);
// $data['judul'] = 'Edit Data Awal';
// $data['role'] = $this->session->userdata('role');
// if ($data["role"] == '1') {
// $this->load->view('templates/header', $data);
// $this->load->view('templates/navbar');
// $this->load->view('templates/sidebar');
// $this->load->view('user/tabel/edit_awal', $data);
// $this->load->view('templates/footer');
// } else if ($data["role"] == '2') {
// $this->load->view('templates/header', $data);
// $this->load->view('templates/navbar');
// $this->load->view('templates/sidebar');
// $this->load->view('user/tabel/edit_awal', $data);
// $this->load->view('templates/footer');
// } else {
// $this->load->view('templates/header', $data);
// $this->load->view('errors/html/error_session');
// $this->load->view('templates/footer');
// }

// // fungsi add
// if ($this->input->post()) {
// $this->Tabel_model->editDataAwal();
// $this->session->set_flashdata('message', 'Data Awal Telah Diedit !');
// redirect('tabel');
// }
// }
// //End of Tambah dan Edit Data Awal

// //Controller Update dan Edit data sppbj
// public function update_sppbj($id)
// {
// // view
// $data['row'] = $this->Tabel_model->getDataById($id);
// $data['judul'] = 'Update Data SPPBJ';
// $data['role'] = $this->session->userdata('role');
// if ($data["role"] == '1') {
// $this->load->view('templates/header', $data);
// $this->load->view('templates/navbar');
// $this->load->view('templates/sidebar');
// $this->load->view('user/tabel/update_sppbj', $data);
// $this->load->view('templates/footer');
// } else if ($data["role"] == '2') {
// $this->load->view('templates/header', $data);
// $this->load->view('templates/navbar');
// $this->load->view('templates/sidebar');
// $this->load->view('user/tabel/update_sppbj', $data);
// $this->load->view('templates/footer');
// } else {
// $this->load->view('templates/header', $data);
// $this->load->view('errors/html/error_session');
// $this->load->view('templates/footer');
// }

// // fungsi add
// if ($this->input->post()) {
// $this->Tabel_model->updateDataSPPBJ($id);
// $this->session->set_flashdata('message', 'Data Awal Telah Diupdate !');
// redirect('tabel');
// }
// }

// public function update_kontrak($id)
// {
// // view
// $data['row'] = $this->Tabel_model->getDataById($id);
// $data['judul'] = 'Update Data Kontrak';
// $data['role'] = $this->session->userdata('role');
// if ($data["role"] == '1') {
// $this->load->view('templates/header', $data);
// $this->load->view('templates/navbar');
// $this->load->view('templates/sidebar');
// $this->load->view('user/tabel/update_kontrak', $data);
// $this->load->view('templates/footer');
// } else if ($data["role"] == '2') {
// $this->load->view('templates/header', $data);
// $this->load->view('templates/navbar');
// $this->load->view('templates/sidebar');
// $this->load->view('user/tabel/update_kontrak', $data);
// $this->load->view('templates/footer');
// } else {
// $this->load->view('templates/header', $data);
// $this->load->view('errors/html/error_session');
// $this->load->view('templates/footer');
// }

// // fungsi add
// if ($this->input->post()) {
// $this->Tabel_model->updateDataKontrak($id);
// $this->session->set_flashdata('message', 'Data SPPBJ Telah Diedit !');
// redirect('tabel');
// }
// }

// public function edit_kontrak($id)
// {
// // view
// $data['row'] = $this->Tabel_model->getDataById($id);
// $data['judul'] = 'Edit Data Kontrak';
// $data['role'] = $this->session->userdata('role');
// if ($data["role"] == '1') {
// $this->load->view('templates/header', $data);
// $this->load->view('templates/navbar');
// $this->load->view('templates/sidebar');
// $this->load->view('user/tabel/edit_kontrak', $data);
// $this->load->view('templates/footer');
// } else if ($data["role"] == '2') {
// $this->load->view('templates/header', $data);
// $this->load->view('templates/navbar');
// $this->load->view('templates/sidebar');
// $this->load->view('user/tabel/edit_kontrak', $data);
// $this->load->view('templates/footer');
// } else {
// $this->load->view('templates/header', $data);
// $this->load->view('errors/html/error_session');
// $this->load->view('templates/footer');
// }

// // fungsi add
// if ($this->input->post()) {
// $this->Tabel_model->editDataKontrak($id);
// $this->session->set_flashdata('message', 'Data Kontrak Telah Diedit !');
// redirect('tabel');
// }
// }
// //End of Controller Update dan Edit data kontrak