<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tabel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Tabel</li>
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
                    <div class="card-header">
                        <h3 class="card-title">Data Tabel</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="overflow-x:auto">
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
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">

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