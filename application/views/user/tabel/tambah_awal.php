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
                        </div>
                        <div class="form-group">
                            <label for="inputNamaPengadaa n">Nama Pengadaan</label>
                            <input type="text" value="" class="form-control" id="inputNamaPengadaan" name="inputNamaPengadaan">
                        </div>
                        <div class="form-group">
                            <label for="inputKategori">Kategori</label>
                            <input type="text" value="" class="form-control" id="inputKategori" name="inputKategori">
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
                            <!-- Input Group "Rp." -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="text" value="" class="form-control" id="inputMataAnggaran" name="inputMataAnggaran">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputJenisAnggaran">Jenis Anggaran</label>
                            <input type="text" value="" class="form-control" id="inputJenisAnggaran" name="inputJenisAnggaran">
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