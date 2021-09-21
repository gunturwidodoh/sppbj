<div class="content-wrapper">
    <section class="content-header py-3">
        <div class="container">

            <!-- Judul -->
            <div class="row mb-3">
                <div class="col-auto">
                    <h1><b><?= $judul; ?></b></h1>
                </div>
                <div class="col-auto">
                    <a href="<?php echo site_url(); ?>/user/add_data" type="submit" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        <b class="ml-2">Tambah Data Baru</b>
                    </a>
                </div>
            </div>
            <?php if ($this->session->flashdata('message')) : ?>
                <div style="color:green;"><?= $this->session->flashdata('message'); ?></div>
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>
            <!-- Card Tabel -->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tableIndex" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Pengadaan</th>
                                    <th>PIC</th>
                                    <th>Progress</th>
                                    <th>Terakhir Diupdate</th>
                                    <th>Action</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tabel as $tb) : ?>
                                    <tr>
                                        <td class="text-center"><?= $tb['code']; ?></td>
                                        <td style="max-width: 300px; white-space: normal;">
                                            <?= $tb['nama']; ?><br>
                                            <small><a href="<?= site_url() ?>/user/detail/<?= $tb['id']; ?>">Lihat Detail ></a></small>
                                        </td>
                                        <td class="text-center"><?= $tb['pic']; ?></td>
                                        <td class="text-center"><?= $tb['status']; ?>%</td>
                                        <td class="text-center"><?= $tb['modified_date']; ?></td>
                                        <!-- Action -->
                                        <td class="text-center">
                                            <a href="<?= site_url() ?>/user/edit_data/<?= $tb['id']; ?>" class="badge badge-info">
                                                <i class="fas fa-pen"></i>
                                                <b class="ml-1">Edit Data</b>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <?php if ($tb['path'] != NULL) : ?>
                                                <a href="<?= site_url() ?>/user/download_data/<?= $tb['id']; ?>" class="badge badge-info">
                                                    <i class="fas fa-file-download"></i>
                                                    <b class="ml-1">Download File</b>
                                                </a>
                                            <?php else : ?>
                                                <span class="badge badge-danger">Belum upload file</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>