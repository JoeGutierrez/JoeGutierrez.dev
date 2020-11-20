<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		{{-- Favicon --}}
		<link rel="shortcut icon" href="./assets/favicon/favicon.ico" type="image/x-icon" />

		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<script src="{{ asset('js/app.js') }}" defer></script>

		{{-- Title --}}
		<title>JoeGutierrez.dev</title>
	</head>
	<body>

		{{-- NAVBAR --}}
		<nav class="navbar navbar-expand-lg navbar-light bg-white">
			<div class="container">

				{{-- Brand --}}
				<a class="navbar-brand" href="/">
					<img src="/images/logo-jgdev.png" class="navbar-brand-img" alt="...">
				</a>

			</div>
		</nav>

		<style>
			header {
				position: relative;
				background-color: black;
				min-height: 385px;
				width: 100%;
				overflow: hidden;
			}

			header video {
				position: absolute;
				top: 50%;
				left: 50%;
				min-width: 100%;
				min-height: 100%;
				width: auto;
				height: auto;
				z-index: 0;
				-ms-transform: translateX(-50%) translateY(-50%);
				-moz-transform: translateX(-50%) translateY(-50%);
				-webkit-transform: translateX(-50%) translateY(-50%);
				transform: translateX(-50%) translateY(-50%);
			}

			header .container {
				position: relative;
				z-index: 2;
			}

			header .overlay {
				position: absolute;
				top: 0;
				left: 0;
				height: 100%;
				width: 100%;
				background-color: black;
				opacity: 0.5;
				z-index: 1;
			}

			@media only screen and (max-width: 991px) {

				/* At 991px, the nav menu collapses into a hamburger. */
				header.video {
					min-height: 360px;
					padding-top: 60px !important;
				}

				/* The extra padding on top allows the video to be taller on mobile. */
			}

			@media only screen and (max-width: 400px) {
				header.video {
					min-height: 160px;
				}
			}

			@media only screen and (min-width: 992px) {

				/* 768px is the lowest width before going into single column. */
				br.typedJsBreak {
					display: none;
				}

				/* The <br> is only needed in narrow views to prevent the Typed.js from dynamically breaking text lines. Just show the <br> by default instead. */
			}

		</style>

		{{-- Source: https://startbootstrap.com/snippets/video-header/ Added: 10/20/2020. --}}
		<header class="bg-white p-0 video">
			<section class="pt-4 pt-md-11">
				<div class="container">
					<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
						<source src="/videos/services.mp4" type="video/mp4">
					</video>
				</div>
			</section>
		</header>

		{{-- WELCOME --}}
		<section class="pt-4 pt-md-11">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-md-5 col-lg-4 order-md-2 text-center">

						<div class="w-md-150 w-lg-130 position-relative" data-aos="fade-left">

							{{-- Shape --}}
							<div class="shape shape-fluid-y shape-blur-4 svg-shim text-gray-200">
								<svg viewBox="0 0 803 662" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="@include( 'shape' )" fill="currentColor" />
								</svg>
							</div>

							{{-- Image --}}
							<div class="img-skewed img-skewed-left">
								<img src="/images/home-page/joe.jpg" class="screenshot img-fluid img-skewed-item" alt="...">
							</div>

						</div>

					</div>
					<div class="col-12 col-md-7 col-lg-8 order-md-1 pl-0" data-aos="fade-right">

						{{-- Heading --}}
						<h1 class="text-center text-md-left" style="font-size: 2.1rem;">
							Welcome to <span class="font-weight-bolder text-primary">joegutierrez.dev |<br class="typedJsBreak"></span>

							<span class="text-success" data-typed='{ "strings": [ "developer", "designer", "server admin" ] }'></span>

						</h1>

						{{-- Text --}}
						<p class="lead text-center text-md-left text-muted mb-6 mb-lg-8">
							Hi! I'm Joe, a full stack Web Developer & Designer. I've been working in this field since 2010. Linux, Nginx / Apache, MySQL, PHP and Node.js are my specialties on the backend. On the frontend, I'm passionate about JavaScript, AJAX, HTML and CSS.
						</p>

					</div>
				</div> {{-- / .row --}}
			</div> {{-- / .container --}}
		</section>

	</body>
</html>
