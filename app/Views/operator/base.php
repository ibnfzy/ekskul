<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMK Muhammadiyah 2 Bontoala - <?= $title ;?></title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="<?=base_url('favicon.icon')?>">

    <link rel="stylesheet" href="<?= base_url('vendors/bootstrap/dist/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('vendors/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('vendors/themify-icons/css/themify-icons.css')?>">
    <link rel="stylesheet" href="<?= base_url('vendors/flag-icon-css/css/flag-icon.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('vendors/selectFX/css/cs-skin-elastic.css')?>">
    <link rel="stylesheet" href="<?= base_url('vendors/jqvmap/dist/jqvmap.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('vendor/toastr/build/toastr.min.css')?>">


    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->
    <?= $this->include('operator/layout/aside') ?>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?= $this->include('operator/layout/header') ?>
        <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-8">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>SMK Muhammadiyah 2 Bontoala</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><?= $title ;?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->renderSection('content') ?>
         <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="<?= base_url('vendors/jquery/dist/jquery.min.js')?>"></script>
    <script src="<?= base_url('vendors/popper.js/dist/umd/popper.min.js')?>"></script>
    <script src="<?= base_url('vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/js/main.js')?>"></script>


    <script src="<?= base_url('vendors/chart.js/dist/Chart.bundle.min.js')?>"></script>
    <script src="<?= base_url('assets/js/dashboard.js')?>"></script>
    <script src="<?= base_url('assets/js/widgets.js')?>"></script>
    <script src="<?= base_url('vendors/jqvmap/dist/jquery.vmap.min.js')?>"></script>
    <script src="<?= base_url('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')?>"></script>
    <script src="<?= base_url('vendors/jqvmap/dist/maps/jquery.vmap.world.js')?>"></script>
	<script src="<?= base_url('vendor/toastr/build/toastr.min.js')?>"></script>

    <?= $this->renderSection('script') ?>
    <?php
	if (session()->getFlashdata('massage')){
		echo '<script>toastr["'.session()->getFlashdata('type-status') . '"]("' . session()->getFlashdata('massage') . '")</script>';
	}
	?>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

	<script>
		toastr.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop":true,
			"progressBar": false,
			"positionClass": "toast-top-right",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeout": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut",
		}
	</script>

</body>

</html>
