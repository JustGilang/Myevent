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
		?>
        <!-- Start Slider area -->
        <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
            </div>
            <!-- End Single Slide -->
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
            </div>
            <!-- End Single Slide -->
        </div>
        <!-- End Slider area -->
		
		<!-- Start Best Seller Area -->
		<section class="wn__bestseller__area bg--white pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">New <span class="color--theme">Event</span></h2>
							<p>Dibawah adalah beberapa event yang terbaru, silahkan lihat dap pilih event sesuai keinginan mu</p>
							<br>
						</div>
					</div>
				</div>
				<div class="tab__container">
					<!-- Start Single Tab Content -->
					<div class="" id="" role="">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							<!-- Start Single Product -->
							<?php
							$sql = mysqli_query($conn, "SELECT * FROM _event WHERE stats = 'published'");
							while($data = mysqli_fetch_array($sql)){
								$_GET['id_event'] = $data['id_event'];
								$id = $_GET['id_event'];
							?>

								<!-- Start Single Product -->
							<div class="col-lg-3 col-md-4 col-sm-6 col-12">
								<div class="product product__style--3">
									<div class="product__thumb">
										<a class="first__img" href="_event_dtl.php?id=<?= $data['id_event']?>"><img src="function/gambar/<?= $data['e_gambar']?>"></a>
										<div class="hot__box">
											<span class="hot-label">New</span>
										</div>
									</div>
									<div class="product__content content--center">
										<br>
										<ul class="prize d-flex">
											<li><?= $data['e_htm']?></li>
										</ul>
										<div class="action">
											<div class="actions_inner">
												<ul class="add_to_links">
													<li><a href="_produk.php"><i class="bi bi-search"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="product__hover--content">
											<br>
										</div>
									</div>
								</div>
							</div>
								<!-- Start Single Product -->

							<?php } ?>
						</div>
					</div>
					<!-- End Single Tab Content -->
				</div>
			</div>
		</section>
		<!-- Start BEst Seller Area -->
		
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

		<!-- QUICKVIEW PRODUCT -->
		<div id="quickview-wrapper">
		    <!-- Modal -->
		    <div class="modal fade" id="productmodal<?= $data['id_user']?>" tabindex="-1" role="dialog">
		        <div class="modal-dialog modal__container" role="document">
		            <div class="modal-content">
		                <div class="modal-header modal__header">
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                </div>
		                <div class="modal-body">
		                    <div class="modal-product">
		                        <!-- Start product images -->
		                        <div class="product-images">
		                            <div class="main-image images">
		                                <img alt="big images" src="assets/images/product/big-img/1.jpg">
		                            </div>
		                        </div>
		                        <!-- end product images -->
		                        <div class="product-info">
		                            <h1><?= $dat['id_event']?></h1>
		                            <div class="rating__and__review">
		                                <ul class="rating">
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                </ul>
		                                <div class="review">
		                                    <a href="#">4 customer reviews</a>
		                                </div>
		                            </div>
		                            <div class="price-box-3">
		                                <div class="s-price-box">
		                                    <span class="new-price">$17.20</span>
		                                    <span class="old-price">$45.00</span>
		                                </div>
		                            </div>
		                            <div class="quick-desc">
		                                Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
		                            </div>
		                            <div class="select__color">
		                                <h2>Select color</h2>
		                                <ul class="color__list">
		                                    <li class="red"><a title="Red" href="#">Red</a></li>
		                                    <li class="gold"><a title="Gold" href="#">Gold</a></li>
		                                    <li class="orange"><a title="Orange" href="#">Orange</a></li>
		                                    <li class="orange"><a title="Orange" href="#">Orange</a></li>
		                                </ul>
		                            </div>
		                            <div class="select__size">
		                                <h2>Select size</h2>
		                                <ul class="color__list">
		                                    <li class="l__size"><a title="L" href="#">L</a></li>
		                                    <li class="m__size"><a title="M" href="#">M</a></li>
		                                    <li class="s__size"><a title="S" href="#">S</a></li>
		                                    <li class="xl__size"><a title="XL" href="#">XL</a></li>
		                                    <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
		                                </ul>
		                            </div>
		                            <div class="social-sharing">
		                                <div class="widget widget_socialsharing_widget">
		                                    <h3 class="widget-title-modal">Share this product</h3>
		                                    <ul class="social__net social__net--2 d-flex justify-content-start">
		                                        <li class="facebook"><a href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
		                                        <li class="linkedin"><a href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
		                                        <li class="pinterest"><a href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
		                                        <li class="tumblr"><a href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
		                                    </ul>
		                                </div>
		                            </div>
		                            <div class="addtocart-btn">
		                                <a href="#">Add to cart</a>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- END QUICKVIEW PRODUCT -->
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