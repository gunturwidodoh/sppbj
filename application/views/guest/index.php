<?php
$nama = $this->session->userdata('nama_user');
$username = $this->session->userdata('username');
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1>Selamat Datang <span style="text-transform: uppercase"><?= $nama; ?></span> di Project Tracker</h1>
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
            <button class="btn btn-primary mb-3" data-toggle="collapse" data-target="#demo">Request Tiket</button>
            <?php if (form_error('inputNamaProject')) : ?>
                <small class="form-text text-danger" id="progressError">
                    <?= form_error('inputNamaProject'); ?>
                </small>
            <?php endif; ?>
            <div class="collapse" id="demo">
                <form action="" method="post">
                    <div class="row">
                        <input hidden type="text" value="<?= $username; ?>" class="form-control" id="inputUsername" name="inputUsername"></input>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputNamaProject">Nama Project</label>
                                <textarea type="text" value="" class="form-control" id="inputNamaProject" name="inputNamaProject"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputDetail">Detail</label>
                                <textarea type="text" value="" class="form-control" id="inputDetail" name="inputDetail"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputNamaPic">Nama PIC</label>
                                <input Disabled type="text" value="<?= $nama; ?>" class="form-control"></input>
                                <input hidden type="text" value="<?= $nama; ?>" class="form-control" id="inputNamaPic" name="inputNamaPic"></input>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mb-4" type="submit">Request</button>
                </form>
            </div>

            <?php if ($this->session->flashdata('message')) : ?>
                <div style="color:green;"><?= $this->session->flashdata('message'); ?></div>
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tableBelum" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Tiket yang belum diproses</th>
                                    <th>Waktu pengajuan tiket</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($guest as $gs) : ?>
                                    <?php if ($gs['stat'] == 0 || $gs['stat'] == 2) : ?>
                                        <tr>
                                            <td><?= $gs['project_name']; ?></td>
                                            <td><?= $gs['created_date']; ?></td>
                                            <td>
                                                <?php if ($gs['stat'] == 0) : ?>
                                                    <span class="badge badge-secondary">Menunggu persetujuan</span>
                                                <?php elseif ($gs['stat'] == 2) : ?>
                                                    <span class="badge badge-danger">Ditolak</span>
                                                <?php else : ?>
                                                    <span> </span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if ($gs['stat'] == 0) : ?>
                                                    <span> </span>
                                                <?php elseif ($gs['stat'] == 2) : ?>
                                                    <a href="<?= site_url() ?>/guest/move_data/<?= $gs['id'] ?>" class="badge badge-danger">Hapus</a>
                                                <?php else : ?>
                                                    <span> </span>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tableSedang" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tiket yang sedang diproses</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th>Progress</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tabel as $tb) : ?>
                                    <tr>
                                        <td><?= $tb['code']; ?></td>
                                        <td><?= $tb['nama']; ?></td>
                                        <td><?= $tb['keterangan']; ?></td>
                                        <td>
                                            <?php if ($tb['status'] == 100) : ?>
                                                <span class="badge badge-success">Selesai</span>
                                                <a href="<?= site_url() ?>/guest/move_data/<?= $tb['id'] ?>" class="badge badge-danger">Hapus</a>
                                            <?php else :  ?>
                                                <span class="badge badge-warning">Sedang diproses</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?= $tb['status']; ?>%</td>
                                        <td>
                                            <?php if ($tb['status'] == 100) : ?>
                                                <a href="<?= site_url() ?>/guest/move_data/<?= $tb['id'] ?>" class="badge badge-danger">Hapus</a>
                                            <?php else :  ?>
                                                <a href="<?= site_url() ?>/guest/view_project" class="badge badge-primary">Lihat tabel</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </section>
</div>