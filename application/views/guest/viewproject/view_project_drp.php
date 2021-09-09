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
                                    <a class="nav-link active" id="nav-profile-tab" href="#nav-profile">DRP & SPPBJ</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" href="<?= site_url() ?>/guest/view_project_kontrak">Kontrak</a>
                                </nav>
                            </div>
                        </div>
                        <!-- Tabel DRP & SAPPBJ -->
                        <div class="table-responsive">
                            <table id="table2" class="table table-striped table-bordered table-hover" role="grid" style="width: 100%" width="100%" cellspacing="0">
                                <thead>
                                    <tr role="row" style="white-space: nowrap">
                                        <th rowspan="2">ID</th>
                                        <th rowspan="2">Nama Pengadaan</th>
                                        <th rowspan="2">No. DRP</th>
                                        <th rowspan="2">No. SPPBJ</th>
                                        <th rowspan="2">Tgl. Terbit SPPBJ</th>
                                        <th rowspan="2">Anggaran DRP</th>
                                        <th rowspan="2">Anggaran SPPBJ</th>
                                        <th rowspan="2">Jenis Anggaran</th>
                                        <th colspan="2">Status</th>
                                        <th rowspan="2">Terakhir Diupdate</th>

                                    </tr>
                                    <tr>
                                        <th>Keterangan</th>
                                        <th>Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tabel as $tb) : ?>
                                        <tr>
                                            <td><?= $tb['code']; ?></td>
                                            <td><?= $tb['nama']; ?></td>
                                            <td><?= $tb['no_drp']; ?></td>
                                            <td><?= $tb['no_sppbj']; ?></td>
                                            <td><?= $tb['tanggal']; ?></td>
                                            <td><?= $tb['anggaran_edrp']; ?></td>
                                            <td><?= $tb['nilai_sppbj']; ?></td>
                                            <td><?= $tb['jenis_anggaran']; ?></td>
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