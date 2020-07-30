<?php 
    session_start();
    include '../../config/config.php';
	if($_SESSION['status']!="login"){
		header("location:_login.php");
	}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome, Member</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/lib/chosen/chosen.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Left Panel -->
    <aside id="" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav"> 
                    <li class="menu-title">Profile</li><!-- /.menu-title -->
                    <li>
                        <a href="_profile_info.php"> <i class="menu-icon ti-user"></i>Personal Info </a>
                    </li>
                    <li>
                        <a href="_profile_secure.php"> <i class="menu-icon ti-lock"></i>Security </a>
                    </li>
                    <li class="menu-title">EVENT</li><!-- /.menu-title -->
                    <li>
                        <a href="_profile_event.php"> <i class="menu-icon ti-calendar"></i>My Event </a>
                    </li>
                    <li>
                        <a href="_profile_transaksi.php"> <i class="menu-icon ti-wallet"></i>Transaksi </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="../../function/db_logout.php""><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1><a href="_profile_event.php"><i class="fa fa-arrow-left">&nbsp; Back</i></a></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                Tambah Event
                            </div>
                            <form action="../../function/db_eo.php?act=event_add" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="card-body card-block">
                                    <?php
                                    $query = mysqli_query($conn, "SELECT max(id_event) as kodeTerbesar FROM _event");
                                    $data = mysqli_fetch_array($query);
                                    $kode = $data['kodeTerbesar'];
                                    $urutan = (int) substr($kode, 2, 3);
                                    $urutan++;
                                    $huruf = "EV";
                                    $kode = $huruf . sprintf("%03s", $urutan);
                                    ?>
                                    <input type="hidden" id="input-small" name="id" value="<?php echo $kode;?>" placeholder="" class="input-sm form-control-sm form-control">
                                    <input type="hidden" id="input-small" name="id_eo" value="<?php echo $_SESSION['id_eo'];?>" placeholder="" class="input-sm form-control-sm form-control">
                                    <div class="row form-group">
                                        <div class="col col-sm-3"><label for="input-small" class=" form-control-label">Kategori</label></div>
                                        <div class="col col-sm-9">
                                            <select data-placeholder="Pili Ketegori" name="kategori" class="standardSelect" tabindex="1">
                                                <option value="" label="default"></option>
                                                <option value="Seminar">Seminar</option>
                                                <option value="Workshop">Workshop</option>
                                                <option value="Music Fest">Music Fest</option>
                                                <option value="Lomba">Lomba</option>
                                                <option value="dll">dll</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-sm-3"><label for="input-small" class=" form-control-label">Judul Kegiatan</label></div>
                                        <div class="col col-sm-9"><input type="text" id="input-small" name="judul" placeholder="" class="input-sm form-control-sm form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-sm-3"><label for="input-small" class=" form-control-label">Kota :</label></div>
                                        <div class="col col-sm-9">
                                            <select name="kota" id="kota" class="standardSelect">
                                                <option disabled selected value="" >Pilih Kota</option>
                                                <?php
                                                $sql = mysqli_query($conn, "SELECT * FROM _kota");
                                                while($data = mysqli_fetch_array($sql)){
                                                ?>
                                                <option value="<?= $data['nama']?>"><?= $data['nama']?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-sm-3"><label for="input-small" class=" form-control-label">Waktu Pelaksanaan</label></div>
                                        <div class="col col-sm-9"><input type="time" id="input-small" name="waktu" placeholder="" class="input-sm form-control-sm form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-sm-3"><label for="input-small" class=" form-control-label">Tanggal Pelaksanaan</label></div>
                                        <div class="col col-sm-9"><input type="date" id="input-small" name="tanggal" placeholder="" class="input-sm form-control-sm form-control"required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-sm-3"><label for="input-small" class=" form-control-label">Tempat Pelaksanaan</label></div>
                                        <div class="col col-sm-9"><input type="text" id="input-small" name="tempat" placeholder="" class="input-sm form-control-sm form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-sm-3"><label for="input-small" class=" form-control-label">Harga Tiket</label></div>
                                        <div class="col col-sm-9"><input type="text" id="input-small" name="harga" placeholder="" class="input-sm form-control-sm form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-sm-3"><label for="input-small" class=" form-control-label">Deskripsi Kegiatan</label></div>
                                        <div class="col col-sm-9"><textarea name="desc" id="textarea-input" rows="9" placeholder="Deskripsi kegiatan..." class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-sm-3"><label for="input-small" class=" form-control-label">Kuota Peserta</label></div>
                                        <div class="col col-sm-9"><input type="time" id="input-small" name="kuota" placeholder="" class="input-sm form-control-sm form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-sm-3"><label for="input-small" class=" form-control-label">Gambar Poster</label></div>
                                        <div class="col col-sm-9"><input type="file" id="file-input" name="foto" class="form-control-file"></div>
                                    </div>
                                
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                            </form>
                        </div>
                    </div><!-- /# column -->
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2020 MYEVENT
                    </div>
                    <div class="col-sm-6 text-right">
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>


    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>
</body>
</html>
