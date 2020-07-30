<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:_login.php");
	}
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home | MYEVENT.com</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="../../assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="../../assets/images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/plugins.css">
	<link rel="stylesheet" href="../../style.css">

	<!-- Cusom css -->
   <link rel="stylesheet" href="../../assets/css/custom.css">

	<!-- Modernizer js -->
	<script src="../../assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="index.html">
								<img src="../../assets/images/logo/logo.png" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item active"><a href="#">Home</a></li>
								<li><a href="_event.php">Event</a></li>
								<li><a href="_booking.php">Cara Booking</a></li>
								<li><a href="_contact.php">Contact</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                            <li class="">Welcome <a class="setting__active" href="#" title="Login">&nbsp; Member</a>
                                <div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>EVENT</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="_myevent.php">EVENT &nbsp;&nbsp;&nbsp;<p class="badge badge-success">1</p></a></span>
													</div>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Account</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="_profile.php">Profile</a></span>
														<span><a href="_logout.php">Logout</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
                            </li>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="#">Home</a></li>
								<li><a href="_event.php">Event</a></li>
								<li><a href="_booking">Cara Booking</a></li>
								<li><a href="_contact.html">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
	            <div class="mobile-menu d-block d-lg-none">
	            </div>
	            <!-- Mobile Menu -->	
			</div>		
		</header>
		<!-- //Header -->

		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">MAIN EVENT</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="_event.php">Event</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Seminar Nasional</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start main Content -->
        <div class="maincontent bg--white pt--80 pb--55">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-12 col-12">
        				<div class="wn__single__product">
        					<div class="row">
        						<div class="col-lg-6 col-12">
        							<div class="wn__fotorama__wrapper">
	        							<div class="fotorama wn__fotorama__action" data-nav="thumbs">
		        							  <a href="1.jpg"><img src="../../assets/images/product/1.jpg" alt=""></a>
	        							</div>
        							</div>
        						</div>
        						<div class="col-lg-6 col-12">
        							<div class="product__info__main">
        								<h1>Learn Laravel Easily</h1>
        								<div class="price-box">
        									<span>IDR 30.000</span>
                                        </div>
                                        <p>Kuota tersisa : 25 <font color="green">&nbsp;&nbsp; Still Available</font></p>
										<div class="product__overview">
        									<p>Sudah siap untuk menerima ini ?</p>
        									<p>Kita akan mempelajari bagaimana mvc dalam laravel bekerja, materi kali ini juga akan menceritakan bagaimana standart laravel bekerja.</p>
        								</div>
        								<div class="box-tocart d-flex">
        									<div class="addtocart__actions">
                                                <a href="_checkout.php"><button class="tocart" type="submit" title="Booking now">Booking now</button></a>
                                                <button class="tocart" type="submit" title="Back">Back</button>
        									</div>
        								</div>
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="product__info__detailed">
							<div class="pro_details_nav nav justify-content-start" role="tablist">
	                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Details</a>
	                        </div>
	                        <div class="tab__container">
	                        	<!-- Start Single Tab Content -->
	                        	<div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
									<div class="description__attribute">
										<p>Laravel adalah sebuah framework yang sering digunakan oleh perusahaan perusahaan web developer pada saat ini, dikarenakan sangat efektif dalam membuat sebuah web apps dkarenakan meringkas beberapa fiturmenjadi sebuah library multifungsi, selain mempermudah dalam membuat web apps salah satu keunggulan laravel juga hadir dan memastikan fondasi keamanan mulai dari csrf, autentifikasi, sanitasi data, validasi, dll. Maka kida buat sebuah pelatihan yang mengarah bagaimana laravel bekerja yang diharapkan nantinya akan memudahkan orang dalam membangun aplikasi berbasis web dengan mudah dan keamanan yang terjamin.</p>
									</div>
	                        	</div>
	                        	<!-- End Single Tab Content -->
	                        </div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End main Content -->
		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form--2" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
		
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
	<script src="../../assets/js/vendor/jquery-3.2.1.min.js"></script>
	<script src="../../assets/js/popper.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>
	<script src="../../assets/js/plugins.js"></script>
	<script src="../../assets/js/active.js"></script>
	
</body>
</html>