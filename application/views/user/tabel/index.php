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
                        <div class="table-responsive">
                            <table id="tableAwal" class="table table-sm table-striped table-bordered table-hover" role="grid" style="width: 100%" width="100%" cellspacing="0">
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
                                        <th>Status</th>
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
                                            <td><a href="" data-toggle="modal" data-target="#modalStatus">Lihat Status</a></td>
                                            <!-- Action -->
                                            <td>
                                                <a href="<?= site_url() ?>/tabel/update/<?= $tb['id']; ?>" class="badge badge-info">Update</a>
                                                <br>
                                                <a href="<?= site_url() ?>/tabel/delete/<?= $tb['id']; ?>" class="badge badge-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        <div>

                        <!-- Tabel DRP & SAPPBJ -->
                        <div class="table-responsive">
                            <table id="tableDRP" class="table table-sm table-striped table-bordered table-hover" role="grid" style="width: 100%" width="100%" cellspacing="0">
                                <thead>
                                    <tr role="row" style="white-space: nowrap">
                                        <th>No.</th>
                                        <th>No. DRP</th>
                                        <th>Anggaran DRP</th>
                                        <th>No. SPPBJ</th>
                                        <th>Nilai SPPBJ (Include PPN 10%)</th>
                                        <th>Tgl. Terbit SPPBJ</th>
                                        <th>Status</th>
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
                                            <td><a href="" data-toggle="modal" data-target="#modalStatus">Lihat Status</a></td>
                                            <!-- Action -->
                                            <td>
                                                <a href="<?= site_url() ?>/tabel/update/<?= $tb['id']; ?>" class="badge badge-info">Update</a>
                                                <br>
                                                <a href="<?= site_url() ?>/tabel/delete/<?= $tb['id']; ?>" class="badge badge-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                                    
                        <!-- Tabel Kontrak -->
                        <div class="table-responsive">
                            <table id="tableKontrak" class="table table-sm table-striped table-bordered table-hover" role="grid" style="width: 100%" width="100%" cellspacing="0">
                                <thead>
                                    <tr role="row" style="white-space: nowrap">
                                        <th>No.</th>
                                        <th>No. Kontrak</th>
                                        <th>Nilai Kontrak (Include PPN 10%)</th>
                                        <th>No. PO</th>
                                        <th>Status</th>
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
                                            <td><a href="" data-toggle="modal" data-target="#modalStatus">Lihat Status</a></td>
                                            <!-- Action -->
                                            <td>
                                                <a href="<?= site_url() ?>/tabel/update/<?= $tb['id']; ?>" class="badge badge-info">Update</a>
                                                <br>
                                                <a href="<?= site_url() ?>/tabel/delete/<?= $tb['id']; ?>" class="badge badge-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
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
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>