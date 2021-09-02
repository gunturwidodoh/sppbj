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
                            <input type="text" value="<?= $row['id'] ?>" class="form-control" id="inputKode" name="inputKode">
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