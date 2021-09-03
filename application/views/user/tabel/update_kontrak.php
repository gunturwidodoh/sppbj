<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $judul; ?></h1>
                </div>
            </div>
            <form action="" method="post">
                <div class="row mb-2">
                    <input type="hidden" value="<?= $row['id']; ?>" class="form-control" id="id" name="id">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputNoKontrak">No. Kontrak</label>
                            <input type="text" value="" class="form-control" id="inputNoKontrak" name="inputNoKontrak">
                        </div>
                        <div class="form-group">
                            <label for="inputNilaiKontrak">Nilai Kontrak (+PPN 10%)</label>
                            <input type="text" value="" class="form-control" id="inputNilaiKontrak" name="inputNilaiKontrak">
                        </div>
                        <div class="form-group">
                            <label for="inputNoPo">No. PO</label>
                            <input type="text" value="" class="form-control" id="inputNoPo" name="inputNoPo">
                        </div>
                        <div class="form-group">
                            <label for="inputTanggalKontrak">Tanggal Kontrak</label>
                            <input type="date" value="" class="form-control" id="inputTanggalKontrak" name="inputTanggalKontrak">
                        </div>
                        <div class="form-group">
                            <label for="inputWaktuPengerjaan">Jangka Waktu Pengerjaan</label>
                            <input type="text" value="" class="form-control" id="inputWaktuPengerjaan" name="inputWaktuPengerjaan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputTanggalBerakhir">Tanggal Berakhir Kontrak</label>
                        <input type="date" value="" class="form-control" id="inputTanggalBerakhir" name="inputTanggalBerakhir">
                    </div>
                    <div class="form-group">
                        <label for="inputJaminanPelaksanaan">Jaminan Pelaksanaan</label>
                        <input type="text" value="" class="form-control" id="inputJaminanPelaksanaan" name="inputJaminanPelaksanaan">
                    </div>
                    <div class="form-group">
                        <label for="inputNamaRekanan">Nama Rekanan Pelaksanaan</label>
                        <input type="text" value="" class="form-control" id="inputNamaRekanan" name="inputNamaRekanan">
                    </div>
                    <div class="form-group">
                        <label for="inputNPWPRekanan">NPWP Rekanan</label>
                        <input type="text" value="" class="form-control" id="inputNPWPRekanan" name="inputNPWPRekanan">
                    </div>
                    <div class="form-group">
                        <label for="inputNamaAM">Nama AM</label>
                        <input type="text" value="" class="form-control" id="inputNamaAM" name="inputNamaAM">
                    </div>
                    <div class="form-group">
                        <label for="inputAlamatRekanan">Alamat Rekanan</label>
                        <input type="text" value="" class="form-control" id="inputAlamatRekanan" name="inputAlamatRekanan">
                    </div>
                    <div class="form-group">
                        <label for="inputTerminSatu">Termin 1</label>
                        <input type="text" value="" class="form-control" id="inputTerminSatu" name="inputTerminSatu">
                    </div>
                    <div class="form-group">
                        <label for="inputTerminDua">Termin 2</label>
                        <input type="text" value="" class="form-control" id="inputTerminDua" name="inputTerminDua">
                    </div>
                    <div class="form-group">
                        <label for="inputTerminTiga">Termin 3</label>
                        <input type="text" value="" class="form-control" id="inputTerminTiga" name="inputTerminTiga">
                    </div>
                    <div class="form-group">
                        <label for="inputTerminEmpat">Termin 4</label>
                        <input type="text" value="" class="form-control" id="inputTerminEmpat" name="inputTerminEmpat">
                    </div>
                    <div class="form-group">
                        <label for="inputTerminLima">Termin 5</label>
                        <input type="text" value="" class="form-control" id="inputTerminLima" name="inputTerminLima">
                    </div>
                    <div class="form-group">
                        <label for="inputSelisihTermin">Selisih Termin</label>
                        <input type="text" value="" class="form-control" id="inputSelisihTermin" name="inputSelisihTermin">
                    </div>
                    <div class="form-group">
                        <label for="inputQSatu">Q1</label>
                        <input type="text" value="" class="form-control" id="inputQSatu" name="inputQSatu">
                    </div>
                    <div class="form-group">
                        <label for="inputQDua">Q2</label>
                        <input type="text" value="" class="form-control" id="inputQDua" name="inputQDua">
                    </div>
                    <div class="form-group">
                        <label for="inputQTiga">Q3</label>
                        <input type="text" value="" class="form-control" id="inputQTiga" name="inputQTiga">
                    </div>
                    <div class="form-group">
                        <label for="inputQEmpat">Q4</label>
                        <input type="text" value="" class="form-control" id="inputQEmpat" name="inputQEmpat">
                    </div>
                    <div class="form-group">
                        <label for="inputOpex">Opex (Biaya)</label>
                        <input type="text" value="" class="form-control" id="inputOpex" name="inputOpex">
                    </div>
                    <div class="form-group">
                        <label for="inputCapex">Capex (Investasi)</label>
                        <input type="text" value="" class="form-control" id="inputCapex" name="inputCapex">
                    </div>
                    <div class="form-group">
                        <label for="inputPerbandinganNilai">Perbandingan Nilai Kontrak dan Pembayaran</label>
                        <input type="text" value="" class="form-control" id="inputPerbandinganNilai" name="inputPerbandinganNilai">
                    </div>
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
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
    </section>
</div>