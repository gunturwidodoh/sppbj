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
                        <table id="tableHistoryTiket" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Project</th>
                                    <th>Status</th>
                                    <th>Tanggal Pembuatan Tiket</th>
                                    <th>Tanggal Selesai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tabel as $tb) : ?>
                                    <tr>
                                        <td class="text-center"><?= $tb['code']; ?></td>
                                        <td style="max-width: 300px; white-space: normal;">
                                            <?= $tb['project_name']; ?><br>
                                            <small><a href="">Lihat Detail ></a></small>
                                        </td>
                                        <?php if ($tb['stat'] == 4) : ?>
                                            <td class="text-center"><span class="badge badge-success">Selesai</span></td>
                                        <?php elseif ($tb['stat'] == 2) : ?>
                                            <td class="text-center"><span class="badge badge-success">Ditolak</span></td>
                                        <?php else : ?>
                                            <td class="text-center"><span class="badge badge-success"> </span></td>
                                        <?php endif; ?>
                                        <td class="text-center"><?= $tb['created_date']; ?></td>
                                        <td class="text-center"><?= $tb['modified_date']; ?></td>
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