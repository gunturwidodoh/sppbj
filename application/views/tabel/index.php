<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $judul; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $judul; ?></li>
                    </ol>
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
                        <nav class="nav nav-tabs">
                            <a class="nav-link active" href="#">Active</a>
                            <a class="nav-link" href="#">Link</a>
                            <a class="nav-link" href="#">Link</a>
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </nav>
                        <table id="dataTable" class="table table-bordered table-striped dataTable" role="grid" style="width: 100%" width="100%" cellspacing="0">
                            <thead>
                                <tr role="row" style="white-space: nowrap">
                                    <th class="sortting_asc" rowspan="1" colspan="1" width="50px" style="text-align: center;">No. DRP</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">No. SPPBJ</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">Tanggal</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">ID</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">Nama Pengadaan</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">Kategori</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">Tahun</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">Deskripsi</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">Program Utama</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">Person in Charge</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">Target Selesai</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">Mata Anggaran</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">Jenis Anggaran</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">Anggaran EDRP</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">Nilai SPPBJ</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">Status</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">Keterangan</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">Action</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                <?php foreach ($tabel as $tb) : ?>
                                    <tr>
                                        <td><?= $tb['no_drp']; ?></td>
                                        <td><?= $tb['no_sppbj']; ?></td>
                                        <td><?= $tb['tanggal']; ?></td>
                                        <td><?= $tb['code']; ?></td>
                                        <td><?= $tb['nama']; ?></td>
                                        <td><?= $tb['kategori']; ?></td>
                                        <td><?= $tb['tahun']; ?></td>
                                        <td><?= $tb['deskripsi']; ?></td>
                                        <td><?= $tb['program']; ?></td>
                                        <td><?= $tb['pic']; ?></td>
                                        <td><?= $tb['target']; ?></td>
                                        <td><?= $tb['mata_anggaran']; ?></td>
                                        <td><?= $tb['jenis_anggaran']; ?></td>
                                        <td><?= $tb['anggaran_edrp']; ?></td>
                                        <td><?= $tb['nilai_sppbj']; ?></td>
                                        <td><?= $tb['status']; ?></td>
                                        <td><?= $tb['keterangan']; ?></td>
                                        <!-- Action -->
                                        <td>
                                            <a href="<?= site_url() ?>/tabel/update/<?= $tb['id']; ?>">update</a>
                                            <br>
                                            <a href="<?= site_url() ?>/tabel/delete/<?= $tb['id']; ?>">delete</a>
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