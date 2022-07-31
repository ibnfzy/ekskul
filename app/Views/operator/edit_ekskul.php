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
                    <form action="<?= base_url('Operator/update_ekskul/'.$ekskul['id_ekskul']) ;?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                            <div class="form-group">
                                <label for="ekskul" class=" form-control-label">Nama Ekskul</label>
                                <input type="text" id="ekskul" name="ekskul" placeholder="Masukkan Nama Ekskul ..." class="form-control" value="<?= $ekskul['ekskul'] ;?>">
                            </div>
                            <div class="form-group">
                                <label for="gambar" class=" form-control-label">Gambar <img src="<?= base_url('uploads/'.$ekskul['gambar_ekskul']) ;?>" width="50"></label>
                                <input type="file" id="gambar" name="gambar" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="ekskul" class=" form-control-label">Deskripsi</label>
                                <textarea name="text" id="text" cols="10" rows="10" class="form-control"><?= $ekskul['deskripsi_ekskul'] ;?></textarea>
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