<!DOCTYPE html>
<html lang="en">
	<head>
		<title>JoeGutierrez.dev</title>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="" name="description">
		<meta content="" name="keywords">

		<!-- Favicons -->
		<link href="{{ asset( 'img/favicon.ico' ) }}" rel="icon">
		<link href="{{ asset( 'img/apple-touch-icon.png' ) }}" rel="apple-touch-icon">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		<!-- CSS -->
		<link rel="stylesheet" href="{{ asset( 'css/app.css' ) }}">
		<link rel="stylesheet" href="{{ asset( 'css/style.css' ) }}">
	</head>
	<body>
		<i class="bi bi-list mobile-nav-toggle d-xl-none"></i><!-- Mobile nav toggle button. -->

		<!-- Header -->
		<header id="header" class="d-flex flex-column justify-content-center">

			<nav id="navbar" class="navbar nav-menu">
				<ul>
					<li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
					<li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
					<li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
					<li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
					<li><a href="#abilities" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Abilities</span></a></li>
					<li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
				</ul>
			</nav><!-- End .nav-menu. -->

		</header><!-- End header. -->

		<!-- Hero section. -->
		<section id="hero" class="hpVideo">
			<div class="container-fluid">
				<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" id="videoDesktop">
					<source src="{{ asset( 'videos/abilities.mp4' ) }}" type="video/mp4">
				</video>
				<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" id="videoMobile">
					<source src="{{ asset( 'videos/abilities-mobile.mp4' ) }}" type="video/mp4">
				</video>
			</div>
		</section><!-- End #hero section. -->

		<main id="main">
@yield( 'content' )
		</main>

		<!-- Footer -->
		<footer id="footer">
			<div class="container">
<?php /*
				<h3>JoeGutierrez.dev</h3>
				<p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
				<div class="social-links">
					<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
					<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
					<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
					<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
					<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
				</div>
*/ ?>
				<div class="copyright">
					&copy;{{ now()->year }} JoeGutierrez.dev. <br class="d-sm-none">All Rights Reserved.
				</div>
			</div>
		</footer><!-- End footer. -->

		<div id="preloader"></div><!-- Page loading spinner. -->
		<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

		<script type="application/javascript" src="{{ asset( 'js/app.js' ) }}"></script>
		<script type="application/javascript" src="{{ asset( 'js/script.js' ) }}"></script>{{-- Added: 07/18/2021. --}}
	</body>
</html>
