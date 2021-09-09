<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $judul; ?></h1>
                </div>
            </div>
            <?php if ($this->session->flashdata('message')) : ?>
                <div style="color:red;"><?= $this->session->flashdata('message'); ?></div>
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>
            <div class="row">
                <div class="card">
                    <div class="card-body" style="overflow-x:auto">

                        <!-- navs -->
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <nav class="nav nav-pills">
                                    <a class="nav-link active" href="#" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Awal</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" href="<?= site_url() ?>/tabel/history_drp">DRP & SPPBJ</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" href="<?= site_url() ?>/tabel/history_kontrak">Kontrak</a>
                                </nav>
                            </div>
                        </div>
                        <!-- Tabel Awal -->
                        <div class="table-responsive">
                            <table id="table1" class="table table-striped table-bordered table-hover" role="grid" style="width: 100%" width="100%" cellspacing="0">
                                <thead>
                                    <tr role="row" style="white-space: nowrap">
                                        <th rowspan="2">ID</th>
                                        <th rowspan="2">Nama Pengadaan</th>
                                        <th rowspan="2">Kategori</th>
                                        <th rowspan="2">Tahun</th>
                                        <th rowspan="2">Deskripsi</th>
                                        <th rowspan="2">PIC</th>
                                        <th rowspan="2">Target Selesai</th>
                                        <th rowspan="2">Program Utama</th>
                                        <th rowspan="2">Mata Anggaran</th>
                                        <th colspan="2">Status</th>
                                        <th rowspan="2">Waktu Project Selesai</th>
                                        <th rowspan="2"> Action</th>
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
                                            <td><?= $tb['kategori']; ?></td>
                                            <td><?= $tb['tahun']; ?></td>
                                            <td><?= $tb['deskripsi']; ?></td>
                                            <td><?= $tb['pic']; ?></td>
                                            <td><?= $tb['target']; ?></td>
                                            <td><?= $tb['program']; ?></td>
                                            <td><?= $tb['mata_anggaran']; ?></td>
                                            <td><?= $tb['keterangan']; ?></td>
                                            <td class="text-center font-weight-bold"><span><?= $tb['status']; ?></span>%</td>
                                            <td><?= $tb['modified_date']; ?></td>
                                            <!-- Action -->
                                            <td>
                                                <a href="<?= site_url() ?>/tabel/deleteHistory/<?= $tb['id']; ?>" class="badge badge-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
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