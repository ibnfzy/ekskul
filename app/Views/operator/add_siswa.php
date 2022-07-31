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
                    <form action="<?= base_url('Operator/store_siswa') ;?>" method="post">
                    <div class="card-body">
                            <div class="form-group">
                                <label for="nis" class=" form-control-label">NIS</label>
                                <input type="text" id="nis" name="nis" placeholder="Masukkan NIS ..." class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name" class=" form-control-label">Nama Lengkap Siswa</label>
                                <input type="text" id="name" name="name" placeholder="Masukkan Nama Lengkap Siswa ..." class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="kelas" class=" form-control-label">Kelas</label>
                                <input type="text" id="kelas" name="kelas" placeholder="Masukkan Kelas ..." class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jurusan" class=" form-control-label">Jurusan</label>
                                <input type="text" id="jurusan" name="jurusan" placeholder="Masukkan Jurusan ..." class="form-control">
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