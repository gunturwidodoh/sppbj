<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $judul; ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body" style="overflow-x:auto">

                        <!-- navs -->
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <nav class="nav nav-pills">
                                    <a class="nav-link active" href="#" id="navAwal">Awal</a>
                                    <a class="nav-link" href="#" id="navDRP">DRP & SPPBJ</a>
                                    <a class="nav-link" href="#" id="navKontrak">Kontrak</a>
                                </nav>
                            </div>
                            <div class="col-sm-6 float-right">
                                <form action="" method="post">
                                    <div class="input-group input-group-sm float-right mb-2 mr-2" style="width: 150px;">
                                        <input type="text" name="keyword" class="form-control float-right" placeholder="Cari data">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary">Cari</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Tabel Awal -->
                        <div class="table-responsive">
                            <table id="tableAwal" class="table table-sm table-striped table-bordered table-hover" role="grid" style="width: 100%" width="100%" cellspacing="0">
                                <thead>
                                    <tr role="row" style="white-space: nowrap">
                                        <th>ID</th>
                                        <th>Nama Pengadaan</th>
                                        <th>Kategori</th>
                                        <th>Tahun</th>
                                        <th>Deskripsi</th>
                                        <th>PIC</th>
                                        <th>Target Selesai</th>
                                        <th>Program Utama</th>
                                        <th>Mata Anggaran</th>
                                        <th>Jenis Anggaran</th>
                                        <th>Waktu Project Selesai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tabel as $tb) : ?>
                                        <tr>
                                            <td><?= $tb['code']; ?></td>
                                            <td><?= $tb['nama']; ?></td>
                                            <td><?= $tb['kategori']; ?></td>
                                            <td><?= $tb['tahun']; ?></td>
                                            <td><?= $tb['deskripsi']; ?></td>
                                            <td><?= $tb['pic']; ?></td>
                                            <td><?= $tb['target']; ?></td>
                                            <td><?= $tb['program']; ?></td>
                                            <td><?= $tb['mata_anggaran']; ?></td>
                                            <td><?= $tb['jenis_anggaran']; ?></td>
                                            <td><?= $tb['modified_date']; ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <div>

                                <!-- Tabel DRP & SAPPBJ -->
                                <div class="table-responsive">
                                    <table id="tableDRP" class="table table-sm table-striped table-bordered table-hover" role="grid" style="width: 100%" width="100%" cellspacing="0">
                                        <thead>
                                            <tr role="row" style="white-space: nowrap">
                                                <th>ID</th>
                                                <th>Nama Pengadaan</th>
                                                <th>No. DRP</th>
                                                <th>Anggaran DRP</th>
                                                <th>No. SPPBJ</th>
                                                <th>Nilai SPPBJ (Include PPN 10%)</th>
                                                <th>Tgl. Terbit SPPBJ</th>
                                                <th>Waktu Project Selesai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($tabel as $tb) : ?>
                                                <tr>
                                                    <td><?= $tb['code']; ?></td>
                                                    <td><?= $tb['nama']; ?></td>
                                                    <td><?= $tb['no_drp']; ?></td>
                                                    <td><?= $tb['anggaran_edrp']; ?></td>
                                                    <td><?= $tb['no_sppbj']; ?></td>
                                                    <td><?= $tb['nilai_sppbj']; ?></td>
                                                    <td><?= $tb['tanggal']; ?></td>
                                                    <td><?= $tb['modified_date']; ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Tabel Kontrak -->
                                <div class="table-responsive">
                                    <table id="tableKontrak" class="table table-sm table-striped table-bordered table-hover" role="grid" style="width: 100%" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="justify-content-center" role="row" style="white-space: nowrap">
                                                <th rowspan="2">ID</th>
                                                <th rowspan="2">Nama Pengadaan</th>
                                                <th rowspan="2">No. Kontrak</th>
                                                <th rowspan="2">Nilai Kontrak (Include PPN 10%)</th>
                                                <th rowspan="2">No. PO</th>
                                                <th rowspan="2">Tanggal Kontrak</th>
                                                <th rowspan="2">Jangka Waktu Pengerjaan</th>
                                                <th rowspan="2">Tanggal Berakhir Kontrak</th>
                                                <th rowspan="2">Jaminan Pelaksanaan</th>
                                                <th rowspan="2">Nama Rekanan Pelaksanaan</th>
                                                <th rowspan="2">NPWP Rekanan</th>
                                                <th rowspan="2">Nama AM</th>
                                                <th rowspan="2">Alamat Rekanan</th>
                                                <th colspan="7">Termin</th>
                                                <th colspan="6">Realisasi</th>
                                                <th rowspan="2">Perbandingan Nilai Kontrak dan Pembayaran</th>
                                                <th rowspan="2">Waktu Project Selesai</th>
                                            </tr>
                                            <tr>
                                                <th>Termin 1</th>
                                                <th>Termin 2</th>
                                                <th>Termin 3</th>
                                                <th>Termin 4</th>
                                                <th>Termin 5</th>
                                                <th>Total Pembayaran</th>
                                                <th>Selisih Termin</th>
                                                <th>Q1</th>
                                                <th>Q2</th>
                                                <th>Q3</th>
                                                <th>Q4</th>
                                                <th>Opex (Biaya)</th>
                                                <th>Capex (Investasi)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($tabel as $tb) : ?>
                                                <tr>
                                                    <td><?= $tb['code']; ?></td>
                                                    <td><?= $tb['nama']; ?></td>
                                                    <td><?= $tb['nomor_kontrak']; ?></td>
                                                    <td><?= $tb['nilai_kontrak']; ?></td>
                                                    <td><?= $tb['nomor_po']; ?></td>
                                                    <td><?= $tb['tanggal_kontrak']; ?></td>
                                                    <td><?= $tb['jangka_waktu']; ?></td>
                                                    <td><?= $tb['tanggal_berakhir']; ?></td>
                                                    <td><?= $tb['jaminan_pelaksanaan']; ?></td>
                                                    <td><?= $tb['rekanan']; ?></td>
                                                    <td><?= $tb['npwp_rekanan']; ?></td>
                                                    <td><?= $tb['nama_am']; ?></td>
                                                    <td><?= $tb['alamat_rekanan']; ?></td>
                                                    <td><?= $tb['termin_1']; ?></td>
                                                    <td><?= $tb['termin_2']; ?></td>
                                                    <td><?= $tb['termin_3']; ?></td>
                                                    <td><?= $tb['termin_4']; ?></td>
                                                    <td><?= $tb['termin_5']; ?></td>
                                                    <td><?= $tb['tot_pembayaran']; ?></td>
                                                    <td><?= $tb['selisih']; ?></td>
                                                    <td><?= $tb['q1']; ?></td>
                                                    <td><?= $tb['q2']; ?></td>
                                                    <td><?= $tb['q3']; ?></td>
                                                    <td><?= $tb['q4']; ?></td>
                                                    <td><?= $tb['opex']; ?></td>
                                                    <td><?= $tb['capex']; ?></td>
                                                    <td><?= $tb['perbandingan']; ?></td>
                                                    <td><?= $tb['modified_date']; ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div><!-- /.container-fluid -->
    </section>
</div>

<div class="modal" id="modalStatus" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Status Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>SPPBJ Telah di Tanda Tangani Oleh : </p>
                <p>Status Keseluruhan : </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>