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
                        <input hidden type="text" value="<?= random_string('alnum', 16); ?>" class="form-control" id="inputId" name="inputId"></input>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="inputNamaProject">Nama Project</label>
                                <textarea type="text" value="" class="form-control" id="inputNamaProject" name="inputNamaProject"></textarea>
                            </div>

                        </div>
                        <div class="col-sm-5">
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

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Status Tiket</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table id="table1" class="table table-bordered m-0">
                            <thead>
                                <tr>
                                    <?php foreach ($guest as $gs) : ?>
                                        <?php if ($gs['stat'] == 0) : ?>
                                            <th rowspan="2">Tiket yang belum diproses</th>
                                            <th rowspan="2">Status</th>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($guest as $gs) : ?>
                                    <?php if ($gs['stat'] == 0) : ?>
                                        <tr>
                                            <td><?= $gs['project_name']; ?></td>
                                            <td>
                                                <?php if ($gs['stat'] == 0) : ?>
                                                    <span class="badge badge-danger">Menunggu penginputan</span>
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
                    <div class="table-responsive">
                        <table id="table1" class="table table-bordered m-0">
                            <thead>
                                <tr>
                                    <th rowspan="2">Tiket yang sedang diproses</th>
                                    <th rowspan="2">Keterangan</th>
                                    <th rowspan="2">Status</th>
                                    <th rowspan="2">Progress</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tabel as $tb) : ?>
                                    <tr>
                                        <td><?= $tb['project_name']; ?></td>
                                        <td><?= $tb['keterangan']; ?></td>
                                        <td>
                                            <?php if ($tb['status'] == 100) : ?>
                                                <span class="badge badge-success">Selesai</span>
                                            <?php else :  ?>
                                                <span class="badge badge-warning">Sedang diproses</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?= $tb['status']; ?>%</td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </section>
</div>