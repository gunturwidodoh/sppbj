<div class="content-wrapper">
    <section class="content-header py-3">
        <div class="container">

            <!-- Judul -->
            <div class="row mb-3">
                <div class="col-6">
                    <h1><b><?= $judul; ?></b></h1>
                </div>
            </div>

            <!-- Form -->
            <form action="" method="post">
                <!-- Hidden ID Form -->
                <input type="hidden" value="<?= $row['id']; ?>" class="form-control" id="id" name="id">
                <!-- Card Umum -->
                <div class="card mb-4">
                    <h6 class="card-header bg-primary"><b>Informasi Umum</b></h5>
                        <div class="card-body">
                            <div class="row">
                                <!-- Form Column 1 -->
                                <div class="col-6">
                                    <!-- Form Group: ID -->
                                    <div class="form-group">
                                        <label for="inputKode">ID</label>
                                        <input type="text" value="<?= isset($_POST["inputKode"]) ? $_POST["inputKode"] : ''; ?>" class="form-control" id="inputKode" name="inputKode">
                                        <?php if (form_error('inputKode')) : ?>
                                            <div id="idError" class="form-text text-danger">
                                                <small><?= form_error('inputKode'); ?></small>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <!-- Form Group: Nama Pengadaan -->
                                    <div class="form-group">
                                        <label for="inputNamaPengadaan">Nama Pengadaan</label>
                                        <input disabled type="text" value="<?= $row['project_name'] ?>" class="form-control" id="inputNamaPengadaan" name="inputNamaPengadaan">
                                        <input type="hidden" value="<?= $row['project_name'] ?>" class="form-control" id="inputNamaPengadaan" name="inputNamaPengadaan">
                                    </div>
                                    <!-- Form Group: Kategori -->
                                    <div class="form-group">
                                        <label for="inputKategori">Kategori</label>
                                        <select class="form-control" id="inputKategori" name="inputKategori">
                                            <?php foreach ($kategori as $kt) : ?>
                                                <?php if ($kt == $row['kategori']) : ?>
                                                    <option value="<?= $kt; ?>" selected><?= $kt; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $kt; ?>"><?= $kt; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <!-- Form: Group Tahun -->
                                    <div class="form-group">
                                        <label for="inputTahun">Tahun</label>
                                        <select class="form-control" id="inputTahun" name="inputTahun">
                                            <?php foreach ($tahun as $th) : ?>
                                                <?php if ($th == $row['tahun']) : ?>
                                                    <option value="<?= $th; ?>" selected><?= $th; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $th; ?>"><?= $th; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <!-- Form: Group Deskripsi -->
                                    <div class="form-group">
                                        <label for="inputDeskripsi">Deskripsi</label>
                                        <textarea class="form-control" id="inputDeskripsi" name="inputDeskripsi"></textarea>
                                    </div>
                                </div>

                                <!-- Form Column 2 -->
                                <div class="col-6">
                                    <!-- Form Group: PIC -->
                                    <div class="form-group">
                                        <label for="inputPIC">Person In Charge</label>
                                        <input disabled type="text" value="<?= $row['nama_pic'] ?>" class="form-control" id="inputPIC" name="inputPIC">
                                        <input type="hidden" value="<?= $row['nama_pic'] ?>" class="form-control" id="inputPIC" name="inputPIC">
                                    </div>
                                    <!-- Form Group: Target Selesai -->
                                    <div class="form-group">
                                        <label for="inputTarget">Target Selesai</label>
                                        <input type="date" value="" class="form-control" id="inputTarget" name="inputTarget">
                                    </div>
                                    <!-- Form Group: Program Utama -->
                                    <div class="form-group">
                                        <label for="inputProgramUtama">Program Utama</label>
                                        <input type="text" value="" class="form-control" id="inputProgramUtama" name="inputProgramUtama">
                                    </div>
                                    <!-- Form Group: Mata Anggaran -->
                                    <div class="form-group">
                                        <label for="inputMataAnggaran">Mata Anggaran</label>
                                        <select class="form-control" id="inputMataAnggaran" name="inputMataAnggaran">
                                            <?php foreach ($mataAnggaran as $ma) : ?>
                                                <?php if ($ma == $row['mata_anggaran']) : ?>
                                                    <option value="<?= $ma; ?>" selected><?= $ma; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $ma; ?>"><?= $ma; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- Card DRP & SPPBJ -->
                <div class="card mb-4">
                    <h6 class="card-header bg-primary"><b>DRP & SPPBJ</b></h5>
                        <div class="card-body">
                            <div class="row">
                                <!-- Form Column 1 -->
                                <div class="col-6">
                                    <!-- Form Group: No. DRP -->
                                    <div class="form-group">
                                        <label for="inputNoDRP">No. DRP</label>
                                        <input type="text" class="form-control" id="inputNoDRP" name="inputNoDRP">
                                    </div>
                                    <!-- Form Group: Anggaran DRP -->
                                    <div class="form-group">
                                        <label for="inputAnggaranDRP">Anggaran DRP</label>
                                        <input type="text" class="form-control" id="inputAnggaranDRP" name="inputAnggaranDRP">
                                    </div>
                                    <!-- Form Group: Jenis DRP -->
                                    <div class="form-group">
                                        <label for="inputJenisAnggaran">Jenis Anggaran</label>
                                        <select class="form-control" id="inputJenisAnggaran" name="inputJenisAnggaran">
                                            <?php foreach ($jenisAnggaran as $ja) : ?>
                                                <option value="<?= $ja; ?>"><?= $ja; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- Form Column 2 -->
                                <div class="col-6">
                                    <!-- Form Group: No. SPPBJ -->
                                    <div class="form-group">
                                        <label for="inputNomorSPPBJ">No. SPPBJ</label>
                                        <input type="text" class="form-control" id="inputNomorSPPBJ" name="inputNomorSPPBJ">
                                    </div>
                                    <!-- Form Group: Input Nilai SPPBJ -->
                                    <div class="form-group">
                                        <label for="inputNilaiSPPBJ">Nilai SPPBJ</label>
                                        <input type="text" class="form-control" id="inputNilaiSPPBJ" name="inputNilaiSPPBJ">
                                    </div>
                                    <!-- Form Group: Input Tanggal Terbit -->
                                    <div class="form-group">
                                        <label for="inputTanggalTerbit">Tanggal Terbit SPPBJ</label>
                                        <input type="date" class="form-control" id="inputTanggalTerbit" name="inputTanggalTerbit">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- Card Kontrak -->
                <div class="card mb-4">
                    <h6 class="card-header bg-primary"><b>Kontrak</b></h5>
                        <div class="list-group list-group-flush">
                            <!-- List Group Item 1 -->
                            <div class="list-group-item py-4">
                                <h6 class="mb-3 text-muted"><i>INFORMASI KONTRAK</i></h5>
                                    <div class="row">
                                        <!-- Form Column 1 -->
                                        <div class="col-6">
                                            <!-- Form Group: No. Kontrak -->
                                            <div class="form-group">
                                                <label for="inputNoKontrak">No. Kontrak</label>
                                                <input type="text" class="form-control" id="inputNoKontrak" name="inputNoKontrak">
                                            </div>
                                            <!-- Form Group: Nilai Kontrak -->
                                            <div class="form-group">
                                                <label for="inputNilaiKontrak">Nilai Kontrak (+PPN 10%)</label>
                                                <input type="text" class="form-control" id="inputNilaiKontrak" name="inputNilaiKontrak">
                                            </div>
                                            <!-- Form Group: No. PO -->
                                            <div class="form-group">
                                                <label for="inputNoPo">No. PO</label>
                                                <input type="text" class="form-control" id="inputNoPo" name="inputNoPo">
                                            </div>
                                            <!-- Form Group: Tanggal Kontrak -->
                                            <div class="form-group">
                                                <label for="inputTanggalKontrak">Tanggal Kontrak</label>
                                                <input type="date" class="form-control" id="inputTanggalKontrak" name="inputTanggalKontrak">
                                            </div>
                                        </div>
                                        <!-- Form Column 2 -->
                                        <div class="col-6">
                                            <!-- Form Group: Waktu Pengerjaan -->
                                            <div class="form-group">
                                                <label for="inputWaktuPengerjaan">Jangka Waktu Pengerjaan</label>
                                                <input type="text" class="form-control" id="inputWaktuPengerjaan" name="inputWaktuPengerjaan">
                                            </div>
                                            <!-- Form Group: Tanggal Berakhir -->
                                            <div class="form-group">
                                                <label for="inputTanggalBerakhir">Tanggal Berakhir Kontrak</label>
                                                <input type="date" class="form-control" id="inputTanggalBerakhir" name="inputTanggalBerakhir">
                                            </div>
                                            <!-- Form Group: Jaminan Pelaksanaan -->
                                            <div class="form-group">
                                                <label for="inputJaminanPelaksanaan">Jaminan Pelaksanaan</label>
                                                <input type="text" class="form-control" id="inputJaminanPelaksanaan" name="inputJaminanPelaksanaan">
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <!-- List Group Item 2 -->
                            <div class="list-group-item py-4">
                                <h6 class="mb-3 text-muted"><i>INFORMASI REKANAN</i></h5>
                                    <div class="row">
                                        <!-- Form Column 1 -->
                                        <div class="col-6">
                                            <!-- Form Group: Rekanan Pelaksanaan -->
                                            <div class="form-group">
                                                <label for="inputNamaRekanan">Nama Rekanan Pelaksanaan</label>
                                                <input type="text" class="form-control" id="inputNamaRekanan" name="inputNamaRekanan">
                                            </div>
                                            <!-- Form Group: NPWP Rekanan -->
                                            <div class="form-group">
                                                <label for="inputNPWPRekanan">NPWP Rekanan</label>
                                                <input type="text" class="form-control" id="inputNPWPRekanan" name="inputNPWPRekanan">
                                            </div>

                                        </div>
                                        <!-- Form Column 2 -->
                                        <div class="col-6">
                                            <!-- Form Group: Nama AM -->
                                            <div class="form-group">
                                                <label for="inputNamaAM">Nama AM</label>
                                                <input type="text" class="form-control" id="inputNamaAM" name="inputNamaAM">
                                            </div>
                                            <!-- Form Group: Alamat Rekanan -->
                                            <div class="form-group">
                                                <label for="inputAlamatRekanan">Alamat Rekanan</label>
                                                <input type="text" class="form-control" id="inputAlamatRekanan" name="inputAlamatRekanan">
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <!-- List Group Item 3 -->
                            <div class="list-group-item py-4">
                                <h6 class="mb-3 text-muted"><i>RENCANA NILAI PEMBAYARAN</i></h5>
                                    <div class="row">
                                        <!-- Form Column 1 -->
                                        <div class="col-4">
                                            <!-- Form Group: Termin 1 -->
                                            <div class="form-group">
                                                <label for="inputTerminSatu">Termin 1</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="inputTerminSatu" name="inputTerminSatu">
                                                </div>
                                            </div>
                                            <!-- Form Group: Termin 4 -->
                                            <div class="form-group">
                                                <label for="inputTerminEmpat">Termin 4</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="inputTerminEmpat" name="inputTerminEmpat">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Form Column 2 -->
                                        <div class="col-4">
                                            <!-- Form Group: Termin 2 -->
                                            <div class="form-group">
                                                <label for="inputTerminDua">Termin 2</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="inputTerminDua" name="inputTerminDua">
                                                </div>
                                            </div>
                                            <!-- Form Group: Termin 5 -->
                                            <div class="form-group">
                                                <label for="inputTerminLima">Termin 5</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="inputTerminLima" name="inputTerminLima">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Form Column 3 -->
                                        <div class="col-4">
                                            <div class="form-group">
                                                <!-- Form Group: Termin 3 -->
                                                <label for="inputTerminTiga">Termin 3</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="inputTerminTiga" name="inputTerminTiga">
                                                </div>
                                            </div>
                                            <!-- Form Group: Selisih Termin -->
                                            <div class="form-group">
                                                <label for="inputSelisihTermin">Selisih Termin</label>
                                                <input type="text" class="form-control" id="inputSelisihTermin" name="inputSelisihTermin">
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <!-- List Group Item 4 -->
                            <div class="list-group-item py-4">
                                <h6 class="mb-3 text-muted"><i>BULAN PEMBAYARAN TERREALISASI</i></h5>
                                    <div class="row">
                                        <!-- Form Column 1 -->
                                        <div class="col-6">
                                            <!-- Form Group: Q1 -->
                                            <div class="form-group">
                                                <label for="inputQSatu">Q1</label>
                                                <input type="text" class="form-control" id="inputQSatu" name="inputQSatu">
                                            </div>
                                            <!-- Form Group: Q3 -->
                                            <div class="form-group">
                                                <label for="inputQTiga">Q3</label>
                                                <input type="text" class="form-control" id="inputQTiga" name="inputQTiga">
                                            </div>
                                            <!-- Form Group: Opex -->
                                            <div class="form-group">
                                                <label for="inputOpex">Opex (Biaya)</label>
                                                <input type="text" class="form-control" id="inputOpex" name="inputOpex">
                                            </div>
                                            <!-- Form Group: Perbandingan -->
                                            <div class="form-group">
                                                <label for="inputPerbandinganNilai">Perbandingan Nilai Kontrak dan Pembayaran</label>
                                                <input type="text" class="form-control" id="inputPerbandinganNilai" name="inputPerbandinganNilai">
                                            </div>
                                        </div>
                                        <!-- Form Column 2 -->
                                        <div class="col-6">
                                            <!-- Form Group: Q2 -->
                                            <div class="form-group">
                                                <label for="inputQDua">Q2</label>
                                                <input type="text" class="form-control" id="inputQDua" name="inputQDua">
                                            </div>
                                            <!-- Form Group: Q4 -->
                                            <div class="form-group">
                                                <label for="inputQEmpat">Q4</label>
                                                <input type="text" class="form-control" id="inputQEmpat" name="inputQEmpat">
                                            </div>
                                            <!-- Form Group: Capex -->
                                            <div class="form-group">
                                                <label for="inputCapex">Capex (Investasi)</label>
                                                <input type="text" class="form-control" id="inputCapex" name="inputCapex">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                </div>

                <!-- Card Status -->
                <div class="card mb-4">
                    <h6 class="card-header bg-warning"><b>Status</b></h5>
                        <div class="card-body">
                            <div class="row">
                                <!-- Form Column 1 -->
                                <div class="col-6">
                                    <!-- Form Group Keterangan -->
                                    <div class="form-group">
                                        <label for="inputKeterangan">Keterangan</label>
                                        <input type="text" value="" class="form-control" id="inputKeterangan" name="inputKeterangan">
                                    </div>
                                </div>

                                <!-- Form Column 2 -->
                                <div class="col-6">
                                    <!-- Form Group Status -->
                                    <div class="form-group">
                                        <label for="inputProgress">Progress</label>
                                        <div class="input-group">
                                            <input type="text" value="" class="form-control" id="inputProgress" name="inputProgress">
                                            <div class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                        <!-- form-error (harus 0-100) -->
                                        <?php if (form_error('inputProgress')) : ?>
                                            <small class="form-text text-danger" id="progressError">
                                                <?= form_error('inputProgress'); ?>
                                            </small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- Tombol Submit -->
                <div class="row">
                    <div class="col-2">
                        <button class="btn btn-primary w-100" type="submit" style="display: flex; justify-content: space-evenly; align-items: center;">
                            <i class="fas fa-save"></i>
                            <b>Tambah Baru</b>
                        </button>
                    </div>
                    <div class="col-2">
                        <a href="<?= site_url(); ?>/tabel/index" class="btn btn-secondary w-100" style="display: flex; justify-content: space-evenly; align-items: center;">
                            <i class="fas fa-arrow-left"></i>
                            <b>Kembali</b>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>