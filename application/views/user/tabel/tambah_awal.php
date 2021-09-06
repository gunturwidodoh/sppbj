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
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputKode">ID</label>
                            <input type="text" value="" class="form-control" id="inputKode" name="inputKode">
                            <?php if (form_error('inputKode')) : ?>
                                <div id="idError" class="form-text text-danger">
                                    <?= form_error('inputKode'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="inputNamaPengadaa n">Nama Pengadaan</label>
                            <input type="text" value="" class="form-control" id="inputNamaPengadaan" name="inputNamaPengadaan">
                        </div>
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
                        <div class="form-group">
                            <label for="inputDeskripsi">Deskripsi</label>
                            <input type="text" value="" class="form-control" id="inputDeskripsi" name="inputDeskripsi">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputPIC">Person In Charge</label>
                            <input type="text" value="" class="form-control" id="inputPIC" name="inputPIC">
                        </div>
                        <div class="form-group">
                            <label for="inputTarget">Target Selesai</label>
                            <input type="date" value="" class="form-control" id="inputTarget" name="inputTarget">
                        </div>
                        <div class="form-group">
                            <label for="inputProgramUtama">Program Utama</label>
                            <input type="text" value="" class="form-control" id="inputProgramUtama" name="inputProgramUtama">
                        </div>
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
                <div class="row mb-2">
                    <div>
                        <h3>Status</h3>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col sm-6">
                        <div class="form-group">
                            <label for="inputKeterangan">Keterangan</label>
                            <input type="text" value="" class="form-control" id="inputKeterangan" name="inputKeterangan">
                        </div>
                    </div>
                    <div class="col sm-6">
                        <div class="form-group">
                            <label for="inputProgress">Progress</label>
                            <input type="text" value="" class="form-control" id="inputProgress" name="inputProgress">
                            <?php if (form_error('inputProgress')) : ?>
                                <div id="progressError" class="form-text text-danger">
                                    <?= form_error('inputProgress'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-2">
                        <input class="btn btn-primary" type="submit" value="Simpan">
                        <a href="<?= site_url(); ?>/tabel/index" class="btn btn-secondary"><span class="glyphicon glyphicon-home"></span>
                            Kembali</a>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
    </section>
</div>