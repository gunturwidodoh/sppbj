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
                                    <a class="nav-item nav-link" href="<?= site_url() ?>/guest/view_project_awal" id="nav-home-tab">Awal</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" href="<?= site_url() ?>/guest/view_project_drp">DRP & SPPBJ</a>
                                    <a class="nav-link active" id="nav-contact-tab" data-toggle="tab" href="#nav-contact">Kontrak</a>
                                </nav>
                            </div>
                        </div>
                        <!-- Tabel Kontrak -->
                        <div class="table-responsive">
                            <table id="table3" class="table table-striped table-bordered table-hover" role="grid" style="width: 100%" width="100%" cellspacing="0">
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
                                        <th colspan="7">Rencana Realisasi Pembayaran</th>
                                        <th colspan="6">Realisasi</th>
                                        <th rowspan="2">Perbandingan Nilai Kontrak dan Pembayaran</th>
                                        <th colspan="2">Status</th>
                                        <th rowspan="2">Terakhir Diupdate</th>
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
                                        <th>Keterangan</th>
                                        <th>Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tabel as $tb) : ?>
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
                                            <td><?= $tb['keterangan']; ?></td>
                                            <td class="text-center font-weight-bold"><span><?= $tb['status']; ?></span>%</td>
                                            <td><?= $tb['modified_date']; ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
</div><!-- /.container-fluid -->
</div>
</div>
</section>
</div>

<div class="modal" id="modalStatus" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>