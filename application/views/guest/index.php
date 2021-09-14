<?php
$username = $this->session->userdata('username');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1>Selamat Datang <span style="text-transform: uppercase"><?= $username; ?></span> di Project Tracker</h1>
                </div>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo site_url(); ?>/guest/ticket" type="submit" class="btn btn-primary btn-sm mb-2 btn-block">Request Ticket</a>
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
                        <a href="<?= site_url() ?>/guest/view_project_awal" class="small-box-footer">Lihat Tabel Project Eksisting <i class="fas fa-arrow-circle-right"></i></a>
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
                        <a href="<?= site_url() ?>/guest/view_history_awal" class="small-box-footer">Lihat Project Selesai <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $jumlahAplikasi; ?></h3>
                            <p>Jumlah Aplikasi Eksisting</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-desktop"></i>
                        </div>
                        <a href="<?= site_url() ?>/guest/view_aplikasi" class="small-box-footer">Lihat Aplikais Eksisting <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            <div class="row m-auto">
                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title">Progress Project</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered m-0">
                                <thead>
                                    <tr>
                                        <th rowspan="2">ID</th>
                                        <th rowspan="2">Nama Project</th>
                                        <th rowspan="2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tabel as $tb) : ?>
                                        <tr>
                                            <td><?= $tb['code']; ?></td>
                                            <td><?= $tb['nama']; ?></td>
                                            <td><?= $tb['status']; ?>%</td>
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
    </section>
</div>