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
                        <table id="tableBarang" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                    <th>Kondisi</th>
                                    <th>Lokasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tabel as $tb) : ?>
                                    <tr>
                                        <td class="text-center"><?= $tb['nama']; ?></td>
                                        <td class="text-center"><?= $tb['jumlah']; ?></td>
                                        <td class="text-center"><?= $tb['status']; ?></td>
                                        <td class="text-center"><?= $tb['kondisi']; ?></td>
                                        <td class="text-center"><?= $tb['lokasi']; ?></td>
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