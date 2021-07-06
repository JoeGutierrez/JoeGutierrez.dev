<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">

		<title>Portfolio Details - Personal Bootstrap Template</title>
		<meta content="" name="description">
		<meta content="" name="keywords">

		<!-- Favicons -->
		<link href="/img/favicon.png" rel="icon">
		<link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		<!-- Vendor CSS Files -->
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
{{--
		<link href="/css/aos.css" rel="stylesheet">
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/bootstrap-icons.css" rel="stylesheet">
		<link href="/css/boxicons.min.css" rel="stylesheet">
		<link href="/css/glightbox.min.css" rel="stylesheet">
		<link href="/css/swiper-bundle.min.css" rel="stylesheet">

		<!-- Template Main CSS File -->
		<link href="/css/portfolio.css" rel="stylesheet">
--}}

{{--
		<!-- =======================================================
		* Template Name: MyResume - v4.0.1
		* Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
		* Author: BootstrapMade.com
		* License: https://bootstrapmade.com/license/
		======================================================== -->
--}}
	</head>
	<body>
		<main id="main">
			<!-- ======= Portfolio Details Section ======= -->
			<section id="portfolio-details" class="portfolio-details">
				<div class="container">

					<div class="row gy-4">

						<div class="col-lg-8">
							<div class="portfolio-details-slider swiper-container">
								<div class="swiper-wrapper align-items-top">
@isset( $imgs[ 0 ] )
									<div class="swiper-slide">
										<img src="{{ asset( 'img/portfolio/' . $imgs[ 0 ] ) }}" alt="{{ $title }} image 1">
									</div>
@endisset
@isset( $imgs[ 1 ] )
									<div class="swiper-slide">
										<img src="{{ asset( 'img/portfolio/' . $imgs[ 1 ] ) }}" alt="{{ $title }} image 2">
									</div>
@endisset
@isset( $imgs[ 2 ] )
									<div class="swiper-slide">
										<img src="{{ asset( 'img/portfolio/' . $imgs[ 2 ] ) }}" alt="{{ $title }} image 3">
									</div>
@endisset
								</div>
								<div class="swiper-pagination"></div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="portfolio-info">
								<h3>Project Information</h3>
								<ul>
									<li><strong>Title</strong>: {{ $title }}</li>
									<li><strong>Category</strong>: {{ $category }}</li>
									<li><strong>Tech Stack</strong>: {{ $tech_stack }}</li>
{{--
									<li><strong>Project date</strong>: 01 March, 2020</li>
--}}
@if( !empty( $url ) )
									<li><strong>Project URL</strong>: <a href="{{ $url }}" target="_blank" rel="noreferrer noopener">{{ $url }}</a></li>{{-- For the rel="noreferrer noopener" attribute. Sources: https://www.wpbeginner.com/beginners-guide/what-is-relnoopener-in-wordpress-explained/ https://stackoverflow.com/questions/50709625/link-with-target-blank-and-rel-noopener-noreferrer-still-vulnerable#50709760 Added: 05/31/2021. --}}
@endif
								</ul>
							</div>
							<div class="portfolio-description">
								<h2>Description</h2>
								<p>{{ $description }}</p>
							</div>
						</div>

					</div>

				</div>
			</section><!-- End Portfolio Details Section -->

		</main><!-- End #main -->

		<div id="preloader"></div>
		<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

{{--
		<script src="/js/aos.js"></script><!-- Vendor JS Files -->
		<script src="/js/bootstrap.bundle.js"></script>
		<script src="/js/glightbox.js"></script>
		<script src="/js/isotope.pkgd.js"></script>
		<script src="/js/purecounter.js"></script>
		<script src="/js/swiper-bundle.min.js"></script>
		<script src="/js/typed.js"></script>
		<script src="/js/noframework.waypoints.js"></script>
		<script src="/js/main.js"></script><!-- Portfolio JS File -->
		<script src="/js/script.js"></script><!-- Main JS File -->
--}}

		<script src="/js/app.js"></script>
	</body>
</html>
