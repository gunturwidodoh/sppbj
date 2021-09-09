<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $judul; ?></h1>
                </div>
            </div>
            <form action="" method="post">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputNamaApp">Nama Aplikasi</label>
                            <input type="text" value="" class="form-control" id="inputNamaApp" name="inputNamaApp">
                            <?php if (form_error('inputNamaApp')) : ?>
                                <div id="passError" class="form-text text-danger">
                                    <?= form_error('inputNamaApp'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="inputBusinessOwner">Business Owner</label>
                                <input type="test" value="" class="form-control" id="inputBusinessOwner" name="inputBusinessOwner">
                            </div>
                            <div class="form-group">
                                <label for="inputDomain">Domain Aplikasi</label>
                                <input type="test" value="" class="form-control" id="inputDomain" name="inputDomain">
                            </div>
                            <div class="form-group">
                                <label for="intputIpLocal">IP Local</label>
                                <input type="test" value="" class="form-control" id="intputIpLocal" name="intputIpLocal">
                            </div>
                            <div class="form-group">
                                <label for="inputIpPublic">IP Public</label>
                                <input type="test" value="" class="form-control" id="inputIpPublic" name="inputIpPublic">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
    </section>
</div>