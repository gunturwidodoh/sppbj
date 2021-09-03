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
                    <input type="hidden" value="<?= $row['id']; ?>" class="form-control" id="id" name="id">
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