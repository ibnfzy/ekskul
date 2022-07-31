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
                    <form action="<?= base_url('Operator/store_dt_kriteria') ;?>" method="post">
                    <div class="card-body">
                            <div class="form-group">
                                <label for="kriteria" class=" form-control-label">Kriteria</label>
                                <select class="form-control" name="kriteria" id="kriteria">
                                    <option disabled selected>--Pilih--</option>
                                    <?php foreach($kriteria as $data) :?>
                                        <option value="<?= $data['id_kriteria'] ;?>"><?= $data['kriteria'] ;?></option>
                                    <?php endforeach ;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ket" class=" form-control-label">Keterangan</label>
                                <input type="text" id="ket" name="ket" placeholder="Masukkan Keterangan ..." class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nilai" class=" form-control-label">Nilai</label>
                                <input type="text" id="nilai" name="nilai" placeholder="Masukkan nilai ..." class="form-control">
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