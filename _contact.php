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
		<?php include 'components/_navbar.php';?>
		
		<!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Contact</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.php">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Cara Booking</span>
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
        			<div class="col-lg-12 col-12">
        				<div class="contact-form-wrap">
        					<h2 class="contact__title">Contact Us</h2>
        					<p>Isi form dibawah untuk kirim kami pesan  :</p>
                            <form id="contact-form" action="function/db_contact.php?act=contact_add" method="post">
                                <div class="single-contact-form space-between">
                                    <input type="text" name="firstname" placeholder="First Name*">
                                    <input type="text" name="lastname" placeholder="Last Name*">
                                </div>
                                <div class="single-contact-form space-between">
                                    <input type="email" name="email" placeholder="Email*">
                                </div>
                                <div class="single-contact-form">
                                    <input type="text" name="subjek" placeholder="Subject*">
                                </div>
                                <div class="single-contact-form message">
                                    <textarea name="pesan" placeholder="Type your message here.."></textarea>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit">Send</button>
                                </div>
                            </form>
                        </div> 
                        <div class="form-output">
                            <p class="form-messege">
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