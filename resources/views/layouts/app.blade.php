<!DOCTYPE html>
<html lang="en">
	<head>
		<title>JoeGutierrez.dev</title>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="" name="description">
		<meta content="" name="keywords">

		<!-- Favicons -->
		<link href="/img/favicon.ico" rel="icon">
		<link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		<!-- Vendor CSS Files -->
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<?php /*
		<link href="css/aos.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-icons.css" rel="stylesheet">
		<link href="css/boxicons.min.css" rel="stylesheet">
		<link href="css/glightbox.min.css" rel="stylesheet">
		<link href="css/swiper-bundle.min.css" rel="stylesheet">

		<!-- Portfolio Main CSS File -->
		<link href="css/portfolio.css" rel="stylesheet">

		<link href="css/style.css" rel="stylesheet">

		<!-- =======================================================
		* Template Name: MyResume - v4.0.1
		* Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
		* Author: BootstrapMade.com
		* License: https://bootstrapmade.com/license/
		======================================================== -->
*/ ?>
	</head>
	<body>
		<!-- ======= Mobile nav toggle button ======= -->
		<!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
		<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
		<!-- ======= Header ======= -->
		<header id="header" class="d-flex flex-column justify-content-center">

			<nav id="navbar" class="navbar nav-menu">
				<ul>
					<li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
					<li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
					<li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
					<li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
					<li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
					<li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
				</ul>
			</nav><!-- .nav-menu -->

		</header><!-- End Header -->

		<!-- ======= Hero Section ======= -->
		<section id="hero" class="hpVideo">
			<div class="container-fluid">
				<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" id="videoDesktop">
					<source src="/videos/services.mp4" type="video/mp4">
				</video>
				<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" id="videoMobile">
					<source src="/videos/services-mobile.mp4" type="video/mp4">
				</video>
			</div>
		</section>
		<!-- End Hero -->

		<main id="main">
@yield( 'content' )
		</main><!-- End #main -->

		<!-- ======= Footer ======= -->
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
					&copy;{{ now()->year }} Copyright <?php //<strong><span> ?>JoeGutierrez.dev<?php //</span></strong> ?>. All Rights Reserved.
				</div>
			</div>
		</footer><!-- End Footer -->

		<div id="preloader"></div>{{-- This is the spinner that shows when the page is loading. --}}
		<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php /*
		<script type="application/javascript" src="/js/aos.js"></script><!-- Vendor JS Files -->
		<script type="application/javascript" src="/js/bootstrap.bundle.js"></script>
		<script type="application/javascript" src="/js/glightbox.js"></script>
		<script type="application/javascript" src="/js/isotope.pkgd.js"></script>
		<script type="application/javascript" src="/js/purecounter.js"></script>
		<script type="application/javascript" src="/js/swiper-bundle.min.js"></script>
		<script type="application/javascript" src="/js/typed.js"></script>
		<script type="application/javascript" src="/js/noframework.waypoints.js"></script>
		<script type="application/javascript" src="/js/main.js"></script><!-- Template Main JS File -->
		<script type="application/javascript" src="/js/script.js"></script><!-- Main JS File -->
*/ ?>
		<script type="application/javascript" src="/js/app.js"></script>

	</body>
</html>
