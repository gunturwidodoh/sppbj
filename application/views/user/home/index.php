<?php
$username = $this->session->userdata('username');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Selamat Datang <span style="text-transform: uppercase"><?= $username; ?></span> di Project Tracker</h1>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3><?= $jumlah; ?></h3>
                            <p>Jumlah Project Eksisting</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-clipboard"></i>
                        </div>
                        <a href="<?= site_url() ?>/tabel/add_data" class="small-box-footer">Tambah Project Baru <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $jumlahHistory; ?></h3>
                            <p>Jumlah Project Selesai</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-checkmark-circle"></i>
                        </div>
                        <a href="<?= site_url() ?>/tabel/history_awal" class="small-box-footer">Lihat Project Selesai <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <?php if ($this->session->flashdata('message')) : ?>
                <div style="color:green;"><?= $this->session->flashdata('message'); ?></div>
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>
            <div class="row m-auto">
                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title">Request Pengadaan Project</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="table5" class="table table-bordered m-0">
                                <thead>
                                    <tr>
                                        <th rowspan="2">Nama Project</th>
                                        <th rowspan="2">Nama Person in Charge</th>
                                        <th rowspan="2">Action</th>
                                        <th rowspan="2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tabel as $tb) : ?>
                                        <tr>
                                            <td><?= $tb['project_name']; ?></td>
                                            <td><?= $tb['nama_pic']; ?></td>
                                            <td>
                                                <?php if ($tb['stat'] == 0) : ?>
                                                    <a href="<?= site_url() ?>/tabel/edit_data_ticket/<?= $tb['id'] ?>" class="badge badge-primary">Tambah</a>
                                                    <a href="<?= site_url() ?>/tabel/rejectTiket/<?= $tb['id'] ?>" class="badge badge-danger">Reject</a>
                                                <?php else : ?>
                                                    <a href="<?= site_url() ?>/tabel" class="badge badge-success">Lihat tabel</a>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if ($tb['stat'] == 0) : ?>
                                                    <span class="badge badge-warning">Belum ditambahkan</span>
                                                <?php elseif ($tb['stat'] == 2) : ?>
                                                    <span class="badge badge-danger">Tiket direject</span>
                                                <?php else : ?>
                                                    <span class="badge badge-success">Tiket telah ditambahkan</span>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <a href="<?= site_url() ?>/tabel" class="btn btn-sm btn-primary float-right">Lihat Tabel</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
</div><!-- /.container-fluid -->
</section>
</div>