<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="<?= base_url('images/logo.png')?>" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="<?= base_url('images/logo2.png')?>" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?= base_url('Operator/dashboard') ;?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Operator/dashboard') ;?>"> <i class="menu-icon fa fa-table"></i>Perhitungan </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Operator</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="<?= base_url('Operator/operator') ;?>">Table Operator</a></li>
                            <li><i class="fa fa-table"></i><a href="<?= base_url('Operator/add_operator') ;?>">Tambah sOperator</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Siswa</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="<?= base_url('Operator/siswa') ;?>">Table Siswa</a></li>
                            <li><i class="fa fa-table"></i><a href="<?= base_url('Operator/add_siswa') ;?>">Tambah Siswa</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Table Login Siswa</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Tambah Login Siswa</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Ekskul</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="<?= base_url('Operator/ekskul') ;?>">Table Ekskul</a></li>
                            <li><i class="fa fa-table"></i><a href="<?= base_url('Operator/dt_ekskul') ;?>">Table Detail Ekskul</a></li>
                            <li><i class="fa fa-table"></i><a href="<?= base_url('Operator/add_ekskul') ;?>">Tambah Ekskul</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Kriteria</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="<?= base_url('Operator/kriteria') ;?>">Table Kriteria</a></li>
                            <li><i class="fa fa-table"></i><a href="<?= base_url('Operator/add_kriteria') ;?>">Tambah Kriteria</a></li>
                            <li><i class="fa fa-table"></i><a href="<?= base_url('Operator/dtkriteria') ;?>">Table Detail Kriteria</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>