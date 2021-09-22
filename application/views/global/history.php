<div class="content-wrapper">
    <section class="content-header py-3">
        <div class="container">

            <!-- Judul -->
            <div class="row mb-3">
                <div class="col-auto">
                    <h1><b><?= $judul; ?></b></h1>
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
                                    <th class="<?= $deleteClass; ?>">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tabel as $tb) : ?>
                                    <?php if ($tb['status'] != 100) : ?>
                                        <tr>
                                            <td class="text-center"><?= $tb['code']; ?></td>
                                            <td style="max-width: 300px; white-space: normal;">
                                                <?= $tb['nama']; ?><br>
                                                <small><a href="<?= site_url() ?>/guest/view_history_detail/<?= $tb['id']; ?>">Lihat Detail ></a></small>
                                            </td>
                                            <td class="text-center"><?= $tb['pic']; ?></td>
                                            <td class="text-center"><?= $tb['status']; ?>%</td>
                                            <td class="text-center"><?= $tb['modified_date']; ?></td>
                                            <!-- Action -->
                                            <td class="text-center <?= $deleteClass; ?>">
                                                <a href="<?= site_url() ?>/user/delete_history/<?= $tb['id']; ?>" class="badge badge-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                    <b class="ml-1">Delete Data</b>
                                                </a>
                                                <br/>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>