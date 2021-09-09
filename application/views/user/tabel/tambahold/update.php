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
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputNoDRP">No. DRP</label>
                            <input type="text" value="<?php echo $row['no_drp']; ?>" class="form-control" id="inputNoDRP" name="inputNoDRP">
                        </div>
                        <div class="form-group">
                            <label for="inputNoSPPBJ">No. SPPBJ</label>
                            <input type="text" value="<?php echo $row['no_sppbj']; ?>" class="form-control" id="inputNoSPPBJ" name="inputNoSPPBJ">
                        </div>
                        <div class="form-group">
                            <label for="inputTanggal">Tanggal</label>
                            <input type="date" value="<?php echo $row['tanggal']; ?>" class="form-control" id="inputTanggal" name="inputTanggal">
                        </div>
                        <div class="form-group">
                            <label for="inputKode">Kode</label>
                            <input type="text" value="<?php echo $row['code']; ?>" class="form-control" id="inputKode" name="inputKode">
                        </div>
                        <div class="form-group">
                            <label for="inputNamaPengadaan">Nama Pengadaan</label>
                            <input type="text" value="<?php echo $row['nama']; ?>" class="form-control" id="inputNamaPengadaan" name="inputNamaPengadaan">
                        </div>
                        <div class="form-group">
                            <label for="inputKategori">Kategori</label>
                            <input type="text" value="<?php echo $row['kategori']; ?>" class="form-control" id="inputKategori" name="inputKategori">
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
                            <input type="text" value="<?php echo $row['deskripsi']; ?>" class="form-control" id="inputDeskripsi" name="inputDeskripsi">
                        </div>
                        <div class="form-group">
                            <label for="inputProgramUtama">Program Utama</label>
                            <input type="text" value="<?php echo $row['program']; ?>" class="form-control" id="inputProgramUtama" name="inputProgramUtama">
                        </div>
                        <div class="form-group">
                            <label for="inputPIC">Person In Charge</label>
                            <input type="text" value="<?php echo $row['pic']; ?>" class="form-control" id="inputPIC" name="inputPIC">
                        </div>
                        <div class="form-group">
                            <label for="inputTarget">Target</label>
                            <input type="date" value="<?php echo $row['target']; ?>" class="form-control" id="inputTarget" name="inputTarget">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputMataAnggaran">Mata Anggaran</label>
                            <!-- Input Group "Rp." -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="text" value="<?php echo $row['mata_anggaran']; ?>" class="form-control" id="inputMataAnggaran" name="inputMataAnggaran">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputJenisAnggaran">Jenis Anggaran</label>
                            <input type="text" value="<?php echo $row['jenis_anggaran']; ?>" class="form-control" id="inputJenisAnggaran" name="inputJenisAnggaran">
                        </div>
                        <div class="form-group">
                            <label for="inputAnggaranEDRP">Anggaran EDRP</label>
                            <!-- Input Group "Rp." -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="text" value="<?php echo $row['anggaran_edrp']; ?>" class="form-control" id="inputAnggaranEDRP" name="inputAnggaranEDRP">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputNilaiSPPBJ">Nilai SPPBJ</label>
                            <input type="text" value="<?php echo $row['nilai_sppbj']; ?>" class="form-control" id="inputNilaiSPPBJ" name="inputNilaiSPPBJ">
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Status</label>
                            <input type="text" value="<?php echo $row['status']; ?>" class="form-control" id="inputStatus" name="inputStatus">
                        </div>
                        <div class="form-group">
                            <label for="inputKeterangan">Keterangan</label>
                            <textarea class="form-control" id="inputKeterangan" name="inputKeterangan"><?php echo $row['keterangan']; ?></textarea>
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