<?= $this->extend('Operator/base') ;?>
<?= $this->section('content') ;?>
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><a href="<?= base_url('Operator/add_dt_kriteria') ;?>" type="button" class="btn btn-primary"><i class="fa fa-plus-circle"></i>&nbsp;Tambah Detail Kriteria</a></strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id Detail Kriteria</th>
                                            <th>Nama Kriteria</th>
                                            <th>Keterangan</th>
                                            <th>Nilai</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                         foreach($dtkriteria as $data):
                                         ?>
                                         <tr>
                                            <td><?= $data['id_dt_kriteria'] ;?></td>
                                            <td><?= $data['kriteria'] ;?></td>
                                            <td><?= $data['keterangan'] ;?></td>
                                            <td><?= $data['nilai'] ;?></td>
                                            <td><a href="<?= base_url('Operator/edit_dt_kriteria/'.$data['id_dt_kriteria']) ;?>" type="button" class="btn btn-primary">Ubah</a><a href="<?= base_url('Operator/delete_dt_kriteria/'.$data['id_dt_kriteria']) ;?>" type="button" class="btn btn-danger">Hapus</a></td>
                                        </tr>
                                         <?php endforeach ;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div>
<?= $this->endSection() ;?>

<?= $this->section('script') ;?>
<script src="<?= base_url('vendors/datatables.net/js/jquery.dataTables.min.js') ;?>"></script>
    <script src="<?= base_url('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ;?>"></script>
    <script src="<?= base_url('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') ;?>"></script>
    <script src="<?= base_url('vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') ;?>"></script>
    <script src="<?= base_url('vendors/jszip/dist/jszip.min.js') ;?>"></script>
    <script src="<?= base_url('vendors/pdfmake/build/pdfmake.min.js') ;?>"></script>
    <script src="<?= base_url('vendors/pdfmake/build/vfs_fonts.js') ;?>"></script>
    <script src="<?= base_url('vendors/datatables.net-buttons/js/buttons.html5.min.js') ;?>"></script>
    <script src="<?= base_url('vendors/datatables.net-buttons/js/buttons.print.min.js') ;?>"></script>
    <script src="<?= base_url('vendors/datatables.net-buttons/js/buttons.colVis.min.js') ;?>"></script>
    <script src="<?= base_url('assets/js/init-scripts/data-table/datatables-init.js') ;?>"></script>
<?= $this->endSection() ;?>

