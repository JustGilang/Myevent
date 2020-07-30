<?php include 'config/config.php';?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home | MYEVENT.com</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="assets/images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 

	<!-- Stylesheets -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="style.css">

	<!-- Cusom css -->
   <link rel="stylesheet" href="assets/css/custom.css">

	<!-- Modernizer js -->
	<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
        <?php 
        include 'components/_navbar.php';
        $id = $_GET['id'];
        $sql = mysqli_query($conn, "SELECT * FROM _event WHERE id_event='".$id."'");
        $dat = mysqli_fetch_array($sql);
		?>
		
		<!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Detail Event</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.php">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Detail Event</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

        <!-- Start Contact Area -->
        <section class="wn_contact_area bg--white pt--80 pb--80">
        	<div class="container">
        		<div class="row">
                    <div class="modal-body" style="align-content: center;">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="function/gambar/<?php echo $dat['e_gambar'];?>" height="500px" width="400px">
                                </div>
                            </div>
                                    <!-- end product images -->
                            <div class="product-info">
                                <h1><?= $dat['e_judul']?></h1>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">IDR. <?php $htm = $dat['e_htm']; echo number_format($htm,2,',','.');?></span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    <?= $dat['e_desc']?>
                                </div>
                                <div class="select__color">
                                    <h2>Waktu : &nbsp;</h2>
                                    <?= $dat['e_waktu']?>
                                </div>
                                <div class="select__size">
                                    <h2>Tanggal : &nbsp;</h2>
                                     <?php echo date(' d/m/Y', strtotime($dat['e_tanggal']))?>
                                </div>
                                <div class="select__size">
                                    <h2>Tempat : &nbsp;</h2>
                                     <?= $dat['e_tempat']?>
                                </div>
                                <div class="select__size">
                                    <h2>Kuota Tersisa : &nbsp;</h2>
                                     <?= $dat['e_kuota']?>
                                </div>
                                
                                <div class="addtocart-btn">
                                    <form action="function/db_member.php?act=book_add" method="POST">
                                        <?php
                                        $query = "SELECT max(id_booking) as maxKode FROM _booking";
                                        $hasil = mysqli_query($conn,$query);
                                        $data = mysqli_fetch_array($hasil);
                                        $kode = $data['maxKode'];
                                        $noUrut = (int) substr($kode, 2, 3);
                                        
                                        $noUrut++;
                                        
                                        $char = "BK";
                                        $kode = $char . sprintf("%03s", $noUrut);
                                        date_default_timezone_set('Asia/Jakarta'); 
                                        ?>
                                        <input type="hidden" name="id" value="<?= $kode;?>">
                                        <input type="hidden" name="id_member" value="<?= $_SESSION['id_member'];?>">
                                        <input type="hidden" name="id_event" value="<?= $id;?>">
                                        <input type="hidden" name="waktu" value="<?= date("h:i:s");?>">
                                        <input type="hidden" name="tanggal" value="<?= date('yy-m-d')?>">
                                        <input type="submit" value="submit" class="ehe"> <a href="_event.php">Back</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
        		</div>
        	</div>
        </section>
        <!-- End Contact Area -->
		
		<!-- Footer Area -->
		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="footer-static-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">
									<p>Cari event dan bertransaksi lebih mudah dengan menggunakan myevent.com menyediakan fitur yang mudah digunakan.</p>
								</div>
								<div class="footer__content">
									<ul class="social__net social__net--2 d-flex justify-content-center">
										<li><a href="#"><i class="bi bi-facebook"></i></a></li>
										<li><a href="#"><i class="bi bi-google"></i></a></li>
										<li><a href="#"><i class="bi bi-twitter"></i></a></li>
										<li><a href="#"><i class="bi bi-linkedin"></i></a></li>
										<li><a href="#"><i class="bi bi-youtube"></i></a></li>
									</ul>
									<ul class="mainmenu d-flex justify-content-center">
										<li><a href="_event.php">Event</a></li>
										<li><a href="_booking.php">Cara Booking</a></li>
										<li><a href="_contact.php">Contact</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright__wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="copyright">
								<div class="copy__right__inner text-left">
									<p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">myevent.com</a> 2019 </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- //Footer Area -->
	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/active.js"></script>
	
</body>
</html>