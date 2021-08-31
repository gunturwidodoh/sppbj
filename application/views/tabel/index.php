<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $judul; ?></h1>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-2">
                    <a href="<?php echo site_url(); ?>/tabel/tambah" type="submit" class="btn btn-primary btn-block">Tambah Data</a>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body" style="overflow-x:auto">

                        <!-- navs -->
                        <nav class="nav nav-pills">
                            <a class="nav-link active" href="#" id="navAwal">Awal</a>
                            <a class="nav-link" href="#" id="navDRP">DRP & SPPBJ</a>
                            <a class="nav-link" href="#" id="navKontrak">Kontrak</a>
                        </nav>

                        <!-- Tabel Awal -->
                        <table id="tableAwal" class="table table-bordered table-striped dataTable" role="grid" style="width: 100%" width="100%" cellspacing="0">
                            <thead>
                                <tr role="row" style="white-space: nowrap">
                                    <th>No.</th>
                                    <th>ID</th>
                                    <th>Nama Pengadaan</th>
                                    <th>Kategori</th>
                                    <th>Tahun</th>
                                    <th>Deskripsi</th>
                                    <th>PIC</th>
                                    <th>Program Utama</th>
                                    <th>Mata Anggaran</th>
                                    <th>Jenis Anggaran</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tabel as $tb) : ?>
                                    <tr>
                                        <td><?= $tb['id']; ?></td>
                                        <td><?= $tb['code']; ?></td>
                                        <td><?= $tb['nama']; ?></td>
                                        <td><?= $tb['kategori']; ?></td>
                                        <td><?= $tb['tahun']; ?></td>
                                        <td><?= $tb['deskripsi']; ?></td>
                                        <td><?= $tb['pic']; ?></td>
                                        <td><?= $tb['program']; ?></td>
                                        <td><?= $tb['mata_anggaran']; ?></td>
                                        <td><?= $tb['jenis_anggaran']; ?></td>
                                        <!-- Action -->
                                        <td>
                                            <a href="<?= site_url() ?>/tabel/update/<?= $tb['id']; ?>">Update</a>
                                            <br>
                                            <a href="<?= site_url() ?>/tabel/delete/<?= $tb['id']; ?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>

                        <!-- Tabel DRP & SAPPBJ -->
                        <table id="tableDRP" class="table table-bordered table-striped dataTable" role="grid" style="width: 100%" width="100%" cellspacing="0">
                            <thead>
                                <tr role="row" style="white-space: nowrap">
                                    <th>No.</th>
                                    <th>No. DRP</th>
                                    <th>Anggaran DRP</th>
                                    <th>No. SPPBJ</th>
                                    <th>Nilai SPPBJ (Include PPN 10%)</th>
                                    <th>Tgl. Terbit SPPBJ</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tabel as $tb) : ?>
                                    <tr>
                                        <td><?= $tb['id']; ?></td>
                                        <td><?= $tb['no_drp']; ?></td>
                                        <td><?= $tb['anggaran_edrp']; ?></td>
                                        <td><?= $tb['no_sppbj']; ?></td>
                                        <td><?= $tb['nilai_sppbj']; ?></td>
                                        <td><?= $tb['tanggal']; ?></td>
                                        <!-- Action -->
                                        <td>
                                            <a href="<?= site_url() ?>/tabel/update/<?= $tb['id']; ?>">Update</a>
                                            <br>
                                            <a href="<?= site_url() ?>/tabel/delete/<?= $tb['id']; ?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>

                        <!-- Tabel Kontrak -->
                        <table id="tableKontrak" class="table table-bordered table-striped dataTable" role="grid" style="width: 100%" width="100%" cellspacing="0">
                            <thead>
                                <tr role="row" style="white-space: nowrap">
                                    <th>No.</th>
                                    <th>No. Kontrak</th>
                                    <th>Nilai Kontrak (Include PPN 10%)</th>
                                    <th>No. PO</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tabel as $tb) : ?>
                                    <tr>
                                        <td><?= $tb['id']; ?></td>
                                        <td><?= $tb['nomor_kontrak']; ?></td>
                                        <td><?= $tb['nilai_kontrak']; ?></td>
                                        <td><?= $tb['nomor_po']; ?></td>
                                        <!-- Action -->
                                        <td>
                                            <a href="<?= site_url() ?>/tabel/update/<?= $tb['id']; ?>">Update</a>
                                            <br>
                                            <a href="<?= site_url() ?>/tabel/delete/<?= $tb['id']; ?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>