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
                    <form action="<?= base_url('Operator/update_dt_ekskul/'.$dt_ekskul['id_ekskul']) ;?>" method="post">
                    <div class="card-body">
                            <div class="form-group">
                                <label for="kriteria" class=" form-control-label">Ekskul</label>
                                <select class="form-control" name="kriteria" id="kriteria">
                                    <option disabled>--Pilih--</option>
                                    <optgroup label="Pilihan Lama">
                                        <option value="<?= $dt_ekskul['id_ekskul'] ;?>" selected><?= $dt_ekskul['nama_ekskul'] ;?></option>
                                    </optgroup>
                                    <?php foreach($ekskul as $data) :?>
                                        <option value="<?= $data['id_ekskul'] ;?>"><?= $data['ekskul'] ;?></option>
                                    <?php endforeach ;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kriteria" class=" form-control-label">Kriteria</label>
                                <select class="form-control" name="kriteria" id="kriteria">
                                    <option disabled >--Pilih--</option>
                                    <optgroup label="Pilihan Lama">
                                        <option value="<?= $dt_ekskul['id_kriteria'] ;?>" selected><?= $dt_ekskul['nama_kriteria'] ;?></option>
                                    </optgroup>
                                    <?php foreach($kriteria as $data) :?>
                                        <option value="<?= $data['id_kriteria'] ;?>"><?= $data['kriteria'] ;?></option>
                                    <?php endforeach ;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ket" class=" form-control-label">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" cols="10" rows="10"></textarea>
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