<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $judul;
                        echo ' ';
                        echo $row['nama']; ?></h1>
                </div>
            </div>
            <form action="" method="post">
                <input type="hidden" value="<?= $row['id']; ?>" class="form-control" id="id" name="id">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputKode">ID</label>
                            <input type="text" value="<?= $row['code'] ?>" class="form-control" id="inputKode" name="inputKode">
                        </div>
                        <div class="form-group">
                            <label for="inputNamaPengadaa n">Nama Pengadaan</label>
                            <input type="text" value="<?= $row['nama'] ?>" class="form-control" id="inputNamaPengadaan" name="inputNamaPengadaan">
                        </div>
                        <div class="form-group">
                            <label for="inputKategori">Kategori</label>
                            <input type="text" value="<?= $row['kategori'] ?>" class="form-control" id="inputKategori" name="inputKategori">
                        </div>
                        <div class="form-group">
                            <label for="inputTahun">Tahun</label>
                            <select class="form-control" id="inputTahun" name="inputTahun">
                                <option>2019</option>
                                <option>2020</option>
                                <option selected>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputDeskripsi">Deskripsi</label>
                            <input type="text" value="<?= $row['deskripsi'] ?>" class="form-control" id="inputDeskripsi" name="inputDeskripsi">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputPIC">Person In Charge</label>
                            <input type="text" value="<?= $row['pic'] ?>" class="form-control" id="inputPIC" name="inputPIC">
                        </div>
                        <div class="form-group">
                            <label for="inputTarget">Target Selesai</label>
                            <input type="date" value="<?= $row['target'] ?>" class="form-control" id="inputTarget" name="inputTarget">
                        </div>
                        <div class="form-group">
                            <label for="inputProgramUtama">Program Utama</label>
                            <input type="text" value="<?= $row['program'] ?>" class="form-control" id="inputProgramUtama" name="inputProgramUtama">
                        </div>
                        <div class="form-group">
                            <label for="inputMataAnggaran">Mata Anggaran</label>
                            <!-- Input Group "Rp." -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="text" value="<?= $row['mata_anggaran'] ?>" class="form-control" id="inputMataAnggaran" name="inputMataAnggaran">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputJenisAnggaran">Jenis Anggaran</label>
                            <input type="text" value="<?= $row['jenis_anggaran'] ?>" class="form-control" id="inputJenisAnggaran" name="inputJenisAnggaran">
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputNoDRP">No. DRP</label>
                            <input type="text" value="<?= $row['no_drp'] ?>" class="form-control" id="inputNoDRP" name="inputNoDRP">
                        </div>
                        <div class="form-group">
                            <label for="inputAnggaranDRP">Anggaran DRP</label>
                            <input type="text" value="<?= $row['anggaran_edrp'] ?>" class="form-control" id="inputAnggaranDRP" name="inputAnggaranDRP">
                        </div>
                        <div class="form-group">
                            <label for="inputNomorSPPBJ">Nomor SPPBJ</label>
                            <input type="text" value="<?= $row['no_sppbj'] ?>" class="form-control" id="inputNomorSPPBJ" name="inputNomorSPPBJ">
                        </div>
                        <div class="form-group">
                            <label for="inputNilaiSPPBJ">Nilai SPPBJ (+PPN 10%)</label>
                            <input type="text" value="<?= $row['nilai_sppbj'] ?>" class="form-control" id="inputNilaiSPPBJ" name="inputNilaiSPPBJ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputTanggalTerbit">Tanggal Terbit SPPBJ</label>
                        <input type="date" value="<?= $row['tanggal'] ?>" class="form-control" id="inputTanggalTerbit" name="inputTanggalTerbit">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Kontrak Project</h3>
                    </div>
                    <div class="col-sm-5">
                        <h3>Informasi Rekanan</h3>
                    </div>
                </div>
                <div class="row mb-2">
                    <input type="hidden" value="<?= $row['id']; ?>" class="form-control" id="id" name="id">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputNoKontrak">No. Kontrak</label>
                            <input type="text" value="<?= $row['nomor_kontrak'] ?>" class="form-control" id="inputNoKontrak" name="inputNoKontrak">
                        </div>
                        <div class="form-group">
                            <label for="inputNilaiKontrak">Nilai Kontrak (+PPN 10%)</label>
                            <input type="text" value="<?= $row['nilai_kontrak'] ?>" class="form-control" id="inputNilaiKontrak" name="inputNilaiKontrak">
                        </div>
                        <div class="form-group">
                            <label for="inputNoPo">No. PO</label>
                            <input type="text" value="<?= $row['nomor_po'] ?>" class="form-control" id="inputNoPo" name="inputNoPo">
                        </div>
                        <div class="form-group">
                            <label for="inputTanggalKontrak">Tanggal Kontrak</label>
                            <input type="date" value="<?= $row['tanggal_kontrak'] ?>" class="form-control" id="inputTanggalKontrak" name="inputTanggalKontrak">
                        </div>
                        <div class="form-group">
                            <label for="inputWaktuPengerjaan">Jangka Waktu Pengerjaan</label>
                            <input type="text" value="<?= $row['jangka_waktu'] ?>" class="form-control" id="inputWaktuPengerjaan" name="inputWaktuPengerjaan">
                        </div>
                        <div class="form-group">
                            <label for="inputTanggalBerakhir">Tanggal Berakhir Kontrak</label>
                            <input type="date" value="<?= $row['tanggal_berakhir'] ?>" class="form-control" id="inputTanggalBerakhir" name="inputTanggalBerakhir">
                        </div>
                        <div class="form-group">
                            <label for="inputJaminanPelaksanaan">Jaminan Pelaksanaan</label>
                            <input type="text" value="<?= $row['jaminan_pelaksanaan'] ?>" class="form-control" id="inputJaminanPelaksanaan" name="inputJaminanPelaksanaan">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputNamaRekanan">Nama Rekanan Pelaksanaan</label>
                            <input type="text" value="<?= $row['rekanan'] ?>" class="form-control" id="inputNamaRekanan" name="inputNamaRekanan">
                        </div>
                        <div class="form-group">
                            <label for="inputNPWPRekanan">NPWP Rekanan</label>
                            <input type="text" value="<?= $row['npwp_rekanan'] ?>" class="form-control" id="inputNPWPRekanan" name="inputNPWPRekanan">
                        </div>
                        <div class="form-group">
                            <label for="inputNamaAM">Nama AM</label>
                            <input type="text" value="<?= $row['nama_am'] ?>" class="form-control" id="inputNamaAM" name="inputNamaAM">
                        </div>
                        <div class="form-group">
                            <label for="inputAlamatRekanan">Alamat Rekanan</label>
                            <input type="text" value="<?= $row['alamat_rekanan'] ?>" class="form-control" id="inputAlamatRekanan" name="inputAlamatRekanan">
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <h3>Termin</h3>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="inputTerminSatu">Termin 1</label>
                            <input type="text" value="<?= $row['termin_1'] ?>" class="form-control" id="inputTerminSatu" name="inputTerminSatu">
                        </div>
                        <div class="form-group">
                            <label for="inputTerminDua">Termin 2</label>
                            <input type="text" value="<?= $row['termin_2'] ?>" class="form-control" id="inputTerminDua" name="inputTerminDua">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="inputTerminTiga">Termin 3</label>
                            <input type="text" value="<?= $row['termin_3'] ?>" class="form-control" id="inputTerminTiga" name="inputTerminTiga">
                        </div>
                        <div class="form-group">
                            <label for="inputTerminEmpat">Termin 4</label>
                            <input type="text" value="<?= $row['termin_4'] ?>" class="form-control" id="inputTerminEmpat" name="inputTerminEmpat">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="inputTerminLima">Termin 5</label>
                            <input type="text" value="<?= $row['termin_5'] ?>" class="form-control" id="inputTerminLima" name="inputTerminLima">
                        </div>
                        <div class="form-group">
                            <label for="inputSelisihTermin">Selisih Termin</label>
                            <input type="text" value="<?= $row['selisih'] ?>" class="form-control" id="inputSelisihTermin" name="inputSelisihTermin">
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <h3>Quarter Pembayaran</h3>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputQSatu">Q1</label>
                            <input type="text" value="<?= $row['q1'] ?>" class="form-control" id="inputQSatu" name="inputQSatu">
                        </div>
                        <div class="form-group">
                            <label for="inputQDua">Q2</label>
                            <input type="text" value="<?= $row['q2'] ?>" class="form-control" id="inputQDua" name="inputQDua">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputQTiga">Q3</label>
                            <input type="text" value="<?= $row['q3'] ?>" class="form-control" id="inputQTiga" name="inputQTiga">
                        </div>
                        <div class="form-group">
                            <label for="inputQEmpat">Q4</label>
                            <input type="text" value="<?= $row['q4'] ?>" class="form-control" id="inputQEmpat" name="inputQEmpat">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputOpex">Opex (Biaya)</label>
                            <input type="text" value="<?= $row['capex'] ?>" class="form-control" id="inputOpex" name="inputOpex">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputCapex">Capex (Investasi)</label>
                            <input type="text" value="<?= $row['opex'] ?>" class="form-control" id="inputCapex" name="inputCapex">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPerbandinganNilai">Perbandingan Nilai Kontrak dan Pembayaran</label>
                    <input type="text" value="<?= $row['perbandingan'] ?>" class="form-control" id="inputPerbandinganNilai" name="inputPerbandinganNilai">
                </div>
                <div class="row mb-2">
                    <div>
                        <h3>Status</h3>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col sm-6">
                        <div class="form-group">
                            <label for="inputTtd">SPPBJ telah ditandatangani oleh</label>
                            <input type="text" value="" class="form-control" id="inputTtd" name="inputTtd">
                        </div>
                    </div>
                    <div class="col sm-6">
                        <div class="form-group">
                            <label for="inputStatus">Status Keseluruhan</label>
                            <input type="text" value="" class="form-control" id="inputStatus" name="inputStatus">
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-2">
                        <input class="btn btn-primary" type="submit" value="Simpan">
                        <button href="javascript:history.go(-1)" class="btn btn-secondary"><span class="glyphicon glyphicon-home"></span>
                            Kembali</button>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
    </section>
</div>