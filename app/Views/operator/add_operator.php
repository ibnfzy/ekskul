<?= $this->extend('Operator/base'); ?>
<?= $this->section('content'); ?>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><button type="button" onclick="history.back()" class="btn btn-primary"><i class="fa fa-plus-circle"></i>&nbsp; Kembali</button></strong>
                    </div>
                    <form action="<?= base_url('Operator/store_operator') ;?>" method="post">
                    <div class="card-body">
                            <div class="form-group">
                                <label for="username" class=" form-control-label">Username</label>
                                <input type="text" id="username" name="username" placeholder="Masukkan Username ..." class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name" class=" form-control-label">Nama Lengkap</label>
                                <input type="text" id="name" name="name" placeholder="Masukkan Nama Lengkap ..." class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class=" form-control-label">Password</label>
                                <input type="password" id="password" name="password" placeholder="Masukkan Password ..." class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="kpassword" class=" form-control-label">Konfirmasi Password</label>
                                <input type="password" id="kpassword" name="kpassword" placeholder="Konfirmasi Password ..." class="form-control">
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Simpan
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<?= $this->endSection(); ?>