<div class="container">
    <div class="row">
        <div class="col-sm-4 mr-auto">
            <img src="<?= base_url('assets/image'); ?>/error2.png" alt="Error Page Not Found">
            </i>
        </div>
        <div class="col-md-5 m-auto">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    Wrong Session</h2>
                <div class="error-details">
                    Maaf, kami tidak dapat menemukan halaman yang anda minta!
                </div>
                <div class="row ml-auto">
                    <div class="error-actions">
                        <!-- go back 1 page -->
                        <a href="javascript:history.go(-1)" class="btn btn-primary "><span class="glyphicon glyphicon-home"></span>
                            Kembali</a>
                    </div>
                    <div class="error-actions ml-1">
                        <!-- go back 1 page -->
                        <a href="<?= site_url() ?>" class="btn btn-primary "><span class="glyphicon glyphicon-home"></span>
                            Login Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>