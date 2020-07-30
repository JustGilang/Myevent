<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "myevent");
if(isset($_SESSION['id_member'])){
    $iduser = $_SESSION['id_member'];
	$queryUser = mysqli_query($conn, "SELECT * FROM _member WHERE id_member='$iduser'");
	$arrayUser = mysqli_fetch_array($queryUser);
    echo '
    <!-- Header -->
        <header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="index.html">
								<img src="assets/images/logo/logo.png" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item active"><a href="index.php">Home</a></li>
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
												<span>Account</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="users/member/_profile.php">Profile</a></span>
														<span><a href="function/db_logout.php">Logout</a></span>
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
    ';
} else {
    echo '
    <!-- Header -->
        <header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="index.html">
								<img src="assets/images/logo/logo.png" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item active"><a href="index.php">Home</a></li>
								<li><a href="_event.php">Event</a></li>
								<li><a href="_booking.php">Cara Booking</a></li>
								<li><a href="_contact.php">Contact</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                            <li class="setting__bar__icon"><a class="setting__active" href="_login.php" title="Login"></a>
                            <div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Login</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="users/member/_login.php">Login member</a></span>
														<span><a href="users/eo/_login.php">Login EO</a></span>
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
    ';
}
?>