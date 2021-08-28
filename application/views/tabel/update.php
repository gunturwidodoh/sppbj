<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?= site_url(); ?>/tabel">Tabel</a></li>
                        <li class="breadcrumb-item active">Tambah data</li>
                    </ol>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputNomorDRP">Nomor DRP</label>
                            <input type="text" value="" class="form-control" id="inputNomorDRP" name="inputNomorDRP">
                        </div>
                    </form>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputSPPBJ">Nomor SPPBJ</label>
                            <input type="text" value="" class="form-control" id="inputSPPBJ" name="inputSPPBJ">
                        </div>
                    </form>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputTanggal">Tanggal</label>
                            <input type="date" value="" class="form-control" id="inputTanggal" name="inputTanggal">
                        </div>
                    </form>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputID">ID</label>
                            <input type="date" value="" class="form-control" id="inputID" name="inputID">
                        </div>
                    </form>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputNamaPengadaan">Nama Pengadaan</label>
                            <input type="text" value="" class="form-control" id="inputNamaPengadaan" name="inputNamaPengadaan">
                        </div>
                    </form>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputKategori">Kategori</label>
                            <input type="text" value="" class="form-control" id="inputKategori" name="inputKategori">
                        </div>
                    </form>
                    <form action="" method="post">
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
                    </form>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputDeskripsi">Deskripsi</label>
                            <input type="text" value="" class="form-control" id="inputDeskripsi" name="inputDeskripsi">
                        </div>
                    </form>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputProgramUtama">Program Utama</label>
                            <input type="text" value="" class="form-control" id="inputProgramUtama" name="inputProgramUtama">
                        </div>
                    </form>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputPIC">Person In Charge</label>
                            <input type="text" value="" class="form-control" id="inputPIC" name="inputPIC">
                        </div>
                    </form>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputTarget">Target</label>
                            <input type="date" value="" class="form-control" id="inputTarget" name="inputTarget">
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputMataAnggaran">Mata Anggaran</label>
                            <!-- Input Group "Rp." -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" value="" class="form-control" id="inputMataAnggaran" name="inputMataAnggaran">
                            </div>
                        </div>
                    </form>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputJenisAnggaran">Jenis Anggaran</label>
                            <!-- Input Group "Rp." -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" value="" class="form-control" id="inputJenisAnggaran" name="inputJenisAnggaran">
                            </div>
                        </div>
                    </form>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputAnggaranEDRP">Anggaran EDRP</label>
                            <!-- Input Group "Rp." -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" value="" class="form-control" id="inputAnggaranEDRP" name="inputAnggaranEDRP">
                            </div>
                        </div>
                    </form>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputNilaiSPPBJ">Nilai SPPBJ</label>
                            <input type="text" value="" class="form-control" id="inputNilaiSPPBJ" name="inputNilaiSPPBJ">
                        </div>
                    </form>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputStatus">Status</label>
                            <input type="text" value="" class="form-control" id="inputStatus" name="inputStatus">
                        </div>
                    </form>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputKeterangan">Keterangan</label>
                            <textarea value="" class="form-control" id="inputKeterangan" name="inputKeterangan"></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-2">
                    <a href="#" type="submit" class="btn btn-primary btn-block">Simpan</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>