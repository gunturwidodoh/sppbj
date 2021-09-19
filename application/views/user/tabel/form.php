<div class="content-wrapper">
    <section class="content-header py-3">
        <div class="container">

            <!-- Judul -->
            <div class="row mb-3">
                <div class="col-auto">
                    <h1><b><?= $judul; ?></b></h1>
                </div>
                <div class="col-auto">
                    <a href="#" onclick="history.go(-1)" type="submit" class="btn btn-secondary">
                        <i class="fas fa-times"></i>
                        <b class="ml-2"><?= $judulBack; ?></b>
                    </a>
                </div>
            </div>

            <!-- Form -->
            <form action="" method="post">
                <!-- Hidden ID Form -->
                <?php $value = isset($_POST['id']) ? $_POST['id'] : (isset($row['id']) ? $row['id'] : ''); ?>
                <input type="hidden" value="<?= $value ?>" class="form-control" id="id" name="id">
                <!-- Card Umum -->
                <div class="card mb-4">
                    <h6 class="card-header bg-<?= $colorCode ?>"><b>Informasi Umum</b></h6>
                    <div class="card-body">
                        <div class="row">
                            <!-- Form Column 1 -->
                            <div class="col-6">
                                <!-- Form Group: ID -->
                                <div class="form-group">
                                    <label for="inputKode">ID</label>
                                    <?php $value = isset($_POST['inputKode']) ? $_POST['inputKode'] : (isset($row['code']) ? $row['code'] : ''); ?>
                                    <input type="text" value="<?= $value ?>" class="form-control" id="inputKode" name="inputKode">
                                    <?php if (form_error('inputKode')) : ?>
                                        <div id="idError" class="form-text text-danger">
                                            <small><?= form_error('inputKode'); ?></small>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <!-- Form Group: Nama Pengadaan -->
                                <div class="form-group">
                                    <label for="inputNamaPengadaan">Nama Pengadaan</label>
                                    <?php $value = isset($_POST['inputNamaPengadaan']) ? $_POST['inputNamaPengadaan'] : (isset($row['nama']) ? $row['nama'] : ''); ?>
                                    <textarea class="form-control" id="inputNamaPengadaan" name="inputNamaPengadaan"><?= $value ?></textarea>
                                </div>
                                <!-- Form Group: Kategori -->
                                <div class="form-group">
                                    <label for="inputKategori">Kategori</label>
                                    <select class="form-control" id="inputKategori" name="inputKategori">
                                        <?php foreach ($kategori as $kt) : ?>
                                            <?php if (isset($_POST['inputKategori'])) : ?>
                                                <?php if ($kt == $_POST['inputKategori']) : ?>
                                                    <option value="<?= $kt; ?>" selected><?= $kt; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $kt; ?>"><?= $kt; ?></option>
                                                <?php endif; ?>
                                            <?php elseif (isset($row['kategori'])) : ?>
                                                <?php if ($kt == $row['kategori']) : ?>
                                                    <option value="<?= $kt; ?>" selected><?= $kt; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $kt; ?>"><?= $kt; ?></option>
                                                <?php endif; ?>
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
                                            <?php if (isset($_POST['inputTahun'])) : ?>
                                                <?php if ($th == $_POST['inputTahun']) : ?>
                                                    <option value="<?= $th; ?>" selected><?= $th; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $th; ?>"><?= $th; ?></option>
                                                <?php endif; ?>
                                            <?php elseif (isset($row['tahun'])) : ?>
                                                <?php if ($th == $row['tahun']) : ?>
                                                    <option value="<?= $th; ?>" selected><?= $th; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $th; ?>"><?= $th; ?></option>
                                                <?php endif; ?>
                                            <?php else : ?>
                                                <option value="<?= $th; ?>"><?= $th; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <!-- Form: Group Deskripsi -->
                                <div class="form-group">
                                    <label for="inputDeskripsi">Deskripsi</label>
                                    <?php $value = isset($_POST['inputDeskripsi']) ? $_POST['inputDeskripsi'] : (isset($row['deskripsi']) ? $row['deskripsi'] : ''); ?>
                                    <textarea class="form-control" id="inputDeskripsi" name="inputDeskripsi"><?= $value ?></textarea>
                                </div>
                            </div>

                            <!-- Form Column 2 -->
                            <div class="col-6">
                                <!-- Form Group: PIC -->
                                <div class="form-group">
                                    <label for="inputPIC">Person In Charge</label>
                                    <?php $value = isset($_POST['inputPIC']) ? $_POST['inputPIC'] : (isset($row['pic']) ? $row['pic'] : ''); ?>
                                    <input type="text" value="<?= $value ?>" class="form-control" id="inputPIC" name="inputPIC">
                                </div>
                                <!-- Form Group: Target Selesai -->
                                <div class="form-group">
                                    <label for="inputTarget">Target Selesai</label>
                                    <?php $value = isset($_POST['inputTarget']) ? $_POST['inputTarget'] : (isset($row['target']) ? $row['target'] : ''); ?>
                                    <input type="date" value="<?= $value ?>" class="form-control" id="inputTarget" name="inputTarget">
                                </div>
                                <!-- Form Group: Program Utama -->
                                <div class="form-group">
                                    <label for="inputProgramUtama">Program Utama</label>
                                    <?php $value = isset($_POST['inputProgramUtama']) ? $_POST['inputProgramUtama'] : (isset($row['program']) ? $row['program'] : ''); ?>
                                    <input type="text" value="<?= $value ?>" class="form-control" id="inputProgramUtama" name="inputProgramUtama">
                                </div>
                                <!-- Form Group: Mata Anggaran -->
                                <div class="form-group">
                                    <label for="inputMataAnggaran">Mata Anggaran</label>
                                    <select class="form-control" id="inputMataAnggaran" name="inputMataAnggaran">
                                        <?php foreach ($mataAnggaran as $ma) : ?>
                                            <?php if (isset($_POST['inputMataAnggaran'])) : ?>
                                                <?php if ($ma == $_POST['inputMataAnggaran']) : ?>
                                                    <option value="<?= $ma; ?>" selected><?= $ma; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $ma; ?>"><?= $ma; ?></option>
                                                <?php endif; ?>
                                            <?php elseif (isset($row['mata_anggaran'])) : ?>
                                                <?php if ($ma == $row['mata_anggaran']) : ?>
                                                    <option value="<?= $ma; ?>" selected><?= $ma; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $ma; ?>"><?= $ma; ?></option>
                                                <?php endif; ?>
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
                    <h6 class="card-header bg-<?= $colorCode ?>"><b>DRP & SPPBJ</b></h6>
                    <div class="card-body">
                        <div class="row">
                            <!-- Form Column 1 -->
                            <div class="col-6">
                                <!-- Form Group: No. DRP -->
                                <div class="form-group">
                                    <label for="inputNoDRP">No. DRP</label>
                                    <?php $value = isset($_POST['inputNoDRP']) ? $_POST['inputNoDRP'] : (isset($row['no_drp']) ? $row['no_drp'] : ''); ?>
                                    <input type="text" value="<?= $value; ?>" class="form-control" id="inputNoDRP" name="inputNoDRP">
                                </div>
                                <!-- Form Group: Anggaran DRP -->
                                <div class="form-group">
                                    <label for="inputAnggaranDRP">Anggaran DRP</label>
                                    <?php $value = isset($_POST['inputAnggaranDRP']) ? $_POST['inputAnggaranDRP'] : (isset($row['anggaran_edrp']) ? $row['anggaran_edrp'] : ''); ?>
                                    <input type="text" value="<?= $value; ?>" class="form-control" id="inputAnggaranDRP" name="inputAnggaranDRP">
                                </div>
                                <!-- Form Group: Jenis DRP -->
                                <div class="form-group">
                                    <label for="inputJenisAnggaran">Jenis Anggaran</label>
                                    <select class="form-control" id="inputJenisAnggaran" name="inputJenisAnggaran">
                                        <?php foreach ($jenisAnggaran as $ja) : ?>
                                            <?php if (isset($_POST['inputJenisAnggaran'])) : ?>
                                                <?php if ($ja == $_POST['inputJenisAnggaran']) : ?>
                                                    <option value="<?= $ja; ?>" selected><?= $ja; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $ja; ?>"><?= $ja; ?></option>
                                                <?php endif; ?>
                                            <?php elseif (isset($row['jenis_anggaran'])) : ?>
                                                <?php if ($ja == $row['jenis_anggaran']) : ?>
                                                    <option value="<?= $ja; ?>" selected><?= $ja; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $ja; ?>"><?= $ja; ?></option>
                                                <?php endif; ?>
                                            <?php else : ?>
                                                <option value="<?= $ja; ?>"><?= $ja; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Form Column 2 -->
                            <div class="col-6">
                                <!-- Form Group: No. SPPBJ -->
                                <div class="form-group">
                                    <label for="inputNoSPPBJ">No. SPPBJ</label>
                                    <?php $value = isset($_POST['inputNoSPPBJ']) ? $_POST['inputNoSPPBJ'] : (isset($row['no_sppbj']) ? $row['no_sppbj'] : ''); ?>
                                    <input type="text" value="<?= $value; ?>" class="form-control" id="inputNoSPPBJ" name="inputNoSPPBJ">
                                </div>
                                <!-- Form Group: Input Nilai SPPBJ -->
                                <div class="form-group">
                                    <label for="inputNilaiSPPBJ">Nilai SPPBJ</label>
                                    <?php $value = isset($_POST['inputNilaiSPPBJ']) ? $_POST['inputNilaiSPPBJ'] : (isset($row['nilai_sppbj']) ? $row['nilai_sppbj'] : ''); ?>
                                    <input type="text" value="<?= $value; ?>" class="form-control" id="inputNilaiSPPBJ" name="inputNilaiSPPBJ">
                                </div>
                                <!-- Form Group: Input Tanggal Terbit -->
                                <div class="form-group">
                                    <label for="inputTanggalTerbit">Tanggal Terbit SPPBJ</label>
                                    <?php $value = isset($_POST['inputTanggalTerbit']) ? $_POST['inputTanggalTerbit'] : (isset($row['tanggal']) ? $row['tanggal'] : ''); ?>
                                    <input type="date" value="<?= $value; ?>" class="form-control" id="inputTanggalTerbit" name="inputTanggalTerbit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Kontrak -->
                <div class="card mb-4">
                    <h6 class="card-header bg-<?= $colorCode ?>"><b>Kontrak</b></h6>
                    <div class="list-group list-group-flush">
                        <!-- List Group Item 1 -->
                        <div class="list-group-item py-4">
                            <h6 class="mb-3 text-muted"><i>INFORMASI KONTRAK</i></h6>
                            <div class="row">
                                <!-- Form Column 1 -->
                                <div class="col-6">
                                    <!-- Form Group: No. Kontrak -->
                                    <div class="form-group">
                                        <label for="inputNoKontrak">No. Kontrak</label>
                                        <?php $value = isset($_POST['inputNoKontrak']) ? $_POST['inputNoKontrak'] : (isset($row['nomor_kontrak']) ? $row['nomor_kontrak'] : ''); ?>
                                        <input type="text" value="<?= $value; ?>" class="form-control" id="inputNoKontrak" name="inputNoKontrak">
                                    </div>
                                    <!-- Form Group: Nilai Kontrak -->
                                    <div class="form-group">
                                        <label for="inputNilaiKontrak">Nilai Kontrak (+PPN 10%)</label>
                                        <?php $value = isset($_POST['inputNilaiKontrak']) ? $_POST['inputNilaiKontrak'] : (isset($row['nilai_kontrak']) ? $row['nilai_kontrak'] : ''); ?>
                                        <input type="text" value="<?= $value; ?>" class="form-control" id="inputNilaiKontrak" name="inputNilaiKontrak">
                                    </div>
                                    <!-- Form Group: No. PO -->
                                    <div class="form-group">
                                        <label for="inputNoPo">No. PO</label>
                                        <?php $value = isset($_POST['inputNoPo']) ? $_POST['inputNoPo'] : (isset($row['nomor_po']) ? $row['nomor_po'] : ''); ?>
                                        <input type="text" value="<?= $value; ?>" class="form-control" id="inputNoPo" name="inputNoPo">
                                    </div>
                                    <!-- Form Group: Tanggal Kontrak -->
                                    <div class="form-group">
                                        <label for="inputTanggalKontrak">Tanggal Kontrak</label>
                                        <?php $value = isset($_POST['inputTanggalKontrak']) ? $_POST['inputTanggalKontrak'] : (isset($row['tanggal_kontrak']) ? $row['tanggal_kontrak'] : ''); ?>
                                        <input type="date" value="<?= $value; ?>" class="form-control" id="inputTanggalKontrak" name="inputTanggalKontrak">
                                    </div>
                                </div>
                                <!-- Form Column 2 -->
                                <div class="col-6">
                                    <!-- Form Group: Waktu Pengerjaan -->
                                    <div class="form-group">
                                        <label for="inputWaktuPengerjaan">Jangka Waktu Pengerjaan</label>
                                        <?php $value = isset($_POST['inputWaktuPengerjaan']) ? $_POST['inputWaktuPengerjaan'] : (isset($row['jangka_waktu']) ? $row['jangka_waktu'] : ''); ?>
                                        <input type="text" value="<?= $value; ?>" class="form-control" id="inputWaktuPengerjaan" name="inputWaktuPengerjaan">
                                    </div>
                                    <!-- Form Group: Tanggal Berakhir -->
                                    <div class="form-group">
                                        <label for="inputTanggalBerakhir">Tanggal Berakhir Kontrak</label>
                                        <?php $value = isset($_POST['inputTanggalBerakhir']) ? $_POST['inputTanggalBerakhir'] : (isset($row['tanggal_berakhir']) ? $row['tanggal_berakhir'] : ''); ?>
                                        <input type="date" value="<?= $value; ?>" class="form-control" id="inputTanggalBerakhir" name="inputTanggalBerakhir">
                                    </div>
                                    <!-- Form Group: Jaminan Pelaksanaan -->
                                    <div class="form-group">
                                        <label for="inputJaminanPelaksanaan">Jaminan Pelaksanaan</label>
                                        <?php $value = isset($_POST['inputJaminanPelaksanaan']) ? $_POST['inputJaminanPelaksanaan'] : (isset($row['jaminan_pelaksanaan']) ? $row['jaminan_pelaksanaan'] : ''); ?>
                                        <input type="text" value="<?= $value; ?>" class="form-control" id="inputJaminanPelaksanaan" name="inputJaminanPelaksanaan">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- List Group Item 2 -->
                        <div class="list-group-item py-4">
                            <h6 class="mb-3 text-muted"><i>INFORMASI REKANAN</i></h6>
                            <div class="row">
                                <!-- Form Column 1 -->
                                <div class="col-6">
                                    <!-- Form Group: Rekanan Pelaksanaan -->
                                    <div class="form-group">
                                        <label for="inputNamaRekanan">Nama Rekanan Pelaksanaan</label>
                                        <?php $value = isset($_POST['inputNamaRekanan']) ? $_POST['inputNamaRekanan'] : (isset($row['rekanan']) ? $row['rekanan'] : ''); ?>
                                        <input type="text" value="<?= $value; ?>" class="form-control" id="inputNamaRekanan" name="inputNamaRekanan">
                                    </div>
                                    <!-- Form Group: NPWP Rekanan -->
                                    <div class="form-group">
                                        <label for="inputNPWPRekanan">NPWP Rekanan</label>
                                        <?php $value = isset($_POST['inputNPWPRekanan']) ? $_POST['inputNPWPRekanan'] : (isset($row['npwp_rekanan']) ? $row['npwp_rekanan'] : ''); ?>
                                        <input type="text" value="<?= $value; ?>" class="form-control" id="inputNPWPRekanan" name="inputNPWPRekanan">
                                    </div>

                                </div>
                                <!-- Form Column 2 -->
                                <div class="col-6">
                                    <!-- Form Group: Nama AM -->
                                    <div class="form-group">
                                        <label for="inputNamaAM">Nama AM</label>
                                        <?php $value = isset($_POST['inputNamaAM']) ? $_POST['inputNamaAM'] : (isset($row['nama_am']) ? $row['nama_am'] : ''); ?>
                                        <input type="text" value="<?= $value; ?>" class="form-control" id="inputNamaAM" name="inputNamaAM">
                                    </div>
                                    <!-- Form Group: Alamat Rekanan -->
                                    <div class="form-group">
                                        <label for="inputAlamatRekanan">Alamat Rekanan</label>
                                        <?php $value = isset($_POST['inputAlamatRekanan']) ? $_POST['inputAlamatRekanan'] : (isset($row['alamat_rekanan']) ? $row['alamat_rekanan'] : ''); ?>
                                        <input type="text" value="<?= $value; ?>" class="form-control" id="inputAlamatRekanan" name="inputAlamatRekanan">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- List Group Item 3 -->
                        <div class="list-group-item py-4">
                            <h6 class="mb-3 text-muted"><i>RENCANA NILAI PEMBAYARAN</i></h6>
                            <div class="row">
                                <!-- Form Column 1 -->
                                <div class="col-4">
                                    <!-- Form Group: Termin 1 -->
                                    <div class="form-group">
                                        <label for="inputTerminSatu">Termin 1</label>
                                        <?php $value = isset($_POST['inputTerminSatu']) ? $_POST['inputTerminSatu'] : (isset($row['termin_1']) ? $row['termin_1'] : ''); ?>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="text" value="<?= $value; ?>" class="form-control" id="inputTerminSatu" name="inputTerminSatu">
                                        </div>
                                    </div>
                                    <!-- Form Group: Termin 4 -->
                                    <div class="form-group">
                                        <label for="inputTerminEmpat">Termin 4</label>
                                        <?php $value = isset($_POST['inputTerminEmpat']) ? $_POST['inputTerminEmpat'] : (isset($row['termin_4']) ? $row['termin_4'] : ''); ?>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="text" value="<?= $value; ?>" class="form-control" id="inputTerminEmpat" name="inputTerminEmpat">
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Column 2 -->
                                <div class="col-4">
                                    <!-- Form Group: Termin 2 -->
                                    <div class="form-group">
                                        <label for="inputTerminDua">Termin 2</label>
                                        <?php $value = isset($_POST['inputTerminDua']) ? $_POST['inputTerminDua'] : (isset($row['termin_2']) ? $row['termin_2'] : ''); ?>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="text" value="<?= $value; ?>" class="form-control" id="inputTerminDua" name="inputTerminDua">
                                        </div>
                                    </div>
                                    <!-- Form Group: Termin 5 -->
                                    <div class="form-group">
                                        <label for="inputTerminLima">Termin 5</label>
                                        <?php $value = isset($_POST['inputTerminLima']) ? $_POST['inputTerminLima'] : (isset($row['termin_5']) ? $row['termin_5'] : ''); ?>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="text" value="<?= $value; ?>" class="form-control" id="inputTerminLima" name="inputTerminLima">
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Column 3 -->
                                <div class="col-4">
                                    <div class="form-group">
                                        <!-- Form Group: Termin 3 -->
                                        <label for="inputTerminTiga">Termin 3</label>
                                        <?php $value = isset($_POST['inputTerminTiga']) ? $_POST['inputTerminTiga'] : (isset($row['termin_3']) ? $row['termin_3'] : ''); ?>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="text" value="<?= $value; ?>" class="form-control" id="inputTerminTiga" name="inputTerminTiga">
                                        </div>
                                    </div>
                                    <!-- Form Group: Selisih Termin -->
                                    <div class="form-group">
                                        <label for="inputSelisihTermin">Selisih Termin</label>
                                        <?php $value = isset($_POST['inputSelisihTermin']) ? $_POST['inputSelisihTermin'] : (isset($row['selisih']) ? $row['selisih'] : ''); ?>
                                        <input type="text" value="<?= $value; ?>" class="form-control" id="inputSelisihTermin" name="inputSelisihTermin">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- List Group Item 4 -->
                        <div class="list-group-item py-4">
                            <h6 class="mb-3 text-muted"><i>REALISASI PEMBAYARAN</i></h6>
                            <div class="row">
                                <!-- Form Column 1 -->
                                <div class="col-6">
                                    <!-- Form Group: Q1 -->
                                    <div class="form-group">
                                        <label for="inputQSatu">Q1</label>
                                        <select class="form-control" id="inputQSatu" name="inputQSatu">
                                            <?php foreach ($quartal['q1'] as $q1) : ?>
                                                <?php if (isset($_POST['inputQSatu'])) : ?>
                                                    <?php if ($q1 == $_POST['inputQSatu']) : ?>
                                                        <option value="<?= $q1; ?>" selected><?= $q1; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $q1; ?>"><?= $q1; ?></option>
                                                    <?php endif; ?>
                                                <?php elseif (isset($row['q1'])) : ?>
                                                    <?php if ($q1 == $row['q1']) : ?>
                                                        <option value="<?= $q1; ?>" selected><?= $q1; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $q1; ?>"><?= $q1; ?></option>
                                                    <?php endif; ?>
                                                <?php else : ?>
                                                    <option value="<?= $q1; ?>"><?= $q1; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <!-- Form Group: Q2 -->
                                    <div class="form-group">
                                        <label for="inputQDua">Q2</label>
                                        <select class="form-control" id="inputQDua" name="inputQDua">
                                            <?php foreach ($quartal['q2'] as $q2) : ?>
                                                <?php if (isset($_POST['inputQDua'])) : ?>
                                                    <?php if ($q2 == $_POST['inputQDua']) : ?>
                                                        <option value="<?= $q2; ?>" selected><?= $q2; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $q2; ?>"><?= $q2; ?></option>
                                                    <?php endif; ?>
                                                <?php elseif (isset($row['q2'])) : ?>
                                                    <?php if ($q2 == $row['q2']) : ?>
                                                        <option value="<?= $q2; ?>" selected><?= $q2; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $q2; ?>"><?= $q2; ?></option>
                                                    <?php endif; ?>
                                                <?php else : ?>
                                                    <option value="<?= $q2; ?>"><?= $q2; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <!-- Form Group: Q3 -->
                                    <div class="form-group">
                                        <label for="inputQTiga">Q3</label>
                                        <select class="form-control" id="inputQTiga" name="inputQTiga">
                                            <?php foreach ($quartal['q3'] as $q3) : ?>
                                                <?php if (isset($_POST['inputQTiga'])) : ?>
                                                    <?php if ($q3 == $_POST['inputQTiga']) : ?>
                                                        <option value="<?= $q3; ?>" selected><?= $q3; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $q3; ?>"><?= $q3; ?></option>
                                                    <?php endif; ?>
                                                <?php elseif (isset($row['q3'])) : ?>
                                                    <?php if ($q3 == $row['q3']) : ?>
                                                        <option value="<?= $q3; ?>" selected><?= $q3; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $q3; ?>"><?= $q3; ?></option>
                                                    <?php endif; ?>
                                                <?php else : ?>
                                                    <option value="<?= $q3; ?>"><?= $q3; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <!-- Form Group: Q4 -->
                                    <div class="form-group">
                                        <label for="inputQEmpat">Q4</label>
                                        <select class="form-control" id="inputQEmpat" name="inputQEmpat">
                                            <?php foreach ($quartal['q4'] as $q4) : ?>
                                                <?php if (isset($_POST['inputQEmpat'])) : ?>
                                                    <?php if ($q4 == $_POST['inputQEmpat']) : ?>
                                                        <option value="<?= $q4; ?>" selected><?= $q4; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $q4; ?>"><?= $q4; ?></option>
                                                    <?php endif; ?>
                                                <?php elseif (isset($row['q4'])) : ?>
                                                    <?php if ($q4 == $row['q4']) : ?>
                                                        <option value="<?= $q4; ?>" selected><?= $q4; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $q4; ?>"><?= $q4; ?></option>
                                                    <?php endif; ?>
                                                <?php else : ?>
                                                    <option value="<?= $q4; ?>"><?= $q4; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Form Column 2 -->
                                <div class="col-6">
                                    <!-- Form Group: Opex -->
                                    <div class="form-group">
                                        <label for="inputOpex">Opex (Biaya)</label>
                                        <?php $value = isset($_POST['inputOpex']) ? $_POST['inputOpex'] : (isset($row['opex']) ? $row['opex'] : ''); ?>
                                        <input type="text" value="<?= $value; ?>" class="form-control" id="inputOpex" name="inputOpex">
                                    </div>
                                    <!-- Form Group: Capex -->
                                    <div class="form-group">
                                        <label for="inputCapex">Capex (Investasi)</label>
                                        <?php $value = isset($_POST['inputCapex']) ? $_POST['inputCapex'] : (isset($row['capex']) ? $row['capex'] : ''); ?>
                                        <input type="text" value="<?= $value; ?>" class="form-control" id="inputCapex" name="inputCapex">
                                    </div>
                                    <!-- Form Group: Perbandingan -->
                                    <div class="form-group">
                                        <label for="inputPerbandinganNilai">Perbandingan Nilai Kontrak dan Pembayaran</label>
                                        <?php $value = isset($_POST['inputPerbandinganNilai']) ? $_POST['inputPerbandinganNilai'] : (isset($row['perbandingan']) ? $row['perbandingan'] : ''); ?>
                                        <input type="text" value="<?= $value; ?>" class="form-control" id="inputPerbandinganNilai" name="inputPerbandinganNilai">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Status -->
                <div class="card mb-4">
                    <h6 class="card-header bg-warning"><b>Status</b></h6>
                    <div class="card-body">
                        <div class="row">
                            <!-- Form Column 1 -->
                            <div class="col-6">
                                <!-- Form Group Keterangan -->
                                <div class="form-group">
                                    <label for="inputKeterangan">Keterangan</label>
                                    <?php $value = isset($_POST['inputKeterangan']) ? $_POST['inputKeterangan'] : (isset($row['keterangan']) ? $row['keterangan'] : ''); ?>
                                    <input type="text" value="<?= $value; ?>" class="form-control" id="inputKeterangan" name="inputKeterangan">
                                </div>
                            </div>

                            <!-- Form Column 2 -->
                            <div class="col-6">
                                <!-- Form Group Status -->
                                <div class="form-group">
                                    <label for="inputProgress">Progress</label>
                                    <?php $value = isset($_POST['inputProgress']) ? $_POST['inputProgress'] : (isset($row['status']) ? $row['status'] : ''); ?>
                                    <div class="input-group">
                                        <input type="text" value="<?= $value; ?>" class="form-control" id="inputProgress" name="inputProgress">
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
                    <div class="col-auto">
                        <button class="btn btn-<?= $colorCode ?> w-100" type="submit" style="display: flex; justify-content: space-evenly; align-items: center;">
                            <i class="fas fa-check"></i>
                            <b class="ml-2"><?= $judulSubmit; ?></b>
                        </button>
                    </div>
                    <div class="col-auto">
                        <a href="#" onclick="history.go(-1)" class="btn btn-secondary w-100" style="display: flex; justify-content: space-evenly; align-items: center;">
                            <i class="fas fa-times"></i>
                            <b class="ml-2"><?= $judulBack; ?></b>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>