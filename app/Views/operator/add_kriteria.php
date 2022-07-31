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
                    <form action="<?= base_url('Operator/store_kriteria') ;?>" method="post">
                    <div class="card-body">
                            <div class="form-group">
                                <label for="kriteria" class=" form-control-label">Kriteria</label>
                                <input type="text" id="kriteria" name="kriteria" placeholder="Masukkan Kriteria ..." class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="bobot" class=" form-control-label">Bobot</label>
                                <input type="text" id="bobot" name="bobot" placeholder="Masukkan Bobot ..." class="form-control">
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