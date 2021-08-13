@extends( 'layouts.app' )

@section( 'content' )

			<!-- About section. -->
			<section id="about" class="about">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>About</h2>
<?php // 				<p>Welcome to my online portfolio. I'm Joe, a Full Stack Engineer since 2010. My passion for programming and note-taking comes from having studied Computer Science and Journalism in college. I have experience in information systems with a career history of achievement, facilitating company growth through the implementation and maintenance of progressive IT, web application and automation initiatives.</p> ?>
					</div>

					<div class="row">
						<div class="col-lg-3 text-center">
							<img data-src="{{ asset( 'img/joe.jpg' ) }}" class="img-fluid lozad" alt="">
						</div>
						<div class="col-lg-6 pt-4 pt-lg-0 content">
							<h3>Joe Gutierrez, <br class="d-sm-none">Full Stack Engineer</h3>
							<p>Welcome to my online portfolio! I'm Joe, currently working as a Senior Web Developer. My passion for programming and note-taking comes from having studied Computer Science and Journalism in college. I have experience in information systems with a career history of achievement, facilitating company growth through the implementation and maintenance of progressive IT, web application and automation initiatives.</p>
							<p>Possessing a unique combination of analytical expertise and creative know-how, my abilities include: Linux, SQL, JavaScript, PHP, Nginx, Apache and Node.js. I'm also passionate about data analytics, consuming and scaling web APIs, AJAX and the Laravel framework.</p>
<?php /*					<div class="row">
								<div class="col-lg-6">
									<ul>
										<li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>New York, USA</span></li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul>
										<li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>email@example.com</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
									</ul>
								</div>
							</div>
*/ ?>
<?php //					<p>Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.</p> ?>
						</div>
					</div>

				</div>
			</section><!-- End #about section. -->

			<!-- Skills section. -->
			<section id="skills" class="skills section-bg">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>Tech Stack</h2>
<?php //				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> ?>
					</div>

					<div class="row skills-content">

						<div class="col-lg-6">

							<div class="progress">
								<span class="skill">Laravel<i class="val">100%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>

							<div class="progress">
								<span class="skill">SQL<i class="val">100%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>

							<div class="progress">
								<span class="skill">JavaScript<i class="val">100%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>

							<div class="progress">
								<span class="skill">HTML5<i class="val">100%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>

							<div class="progress">
								<span class="skill">jQuery<i class="val">100%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>

							<div class="progress">
								<span class="skill">CSS<i class="val">100%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>

							<div class="progress">
								<span class="skill">Nginx<i class="val">100%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>

						</div>

						<div class="col-lg-6">

							<div class="progress">
								<span class="skill">PHP<i class="val">100%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>

							<div class="progress">
								<span class="skill">Linux<i class="val">100%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>

							<div class="progress">
								<span class="skill">Node.js<i class="val">100%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>

							<div class="progress">
								<span class="skill">WordPress<i class="val">100%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>

							<div class="progress">
								<span class="skill">Web APIs<i class="val">100%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>

							<div class="progress">
								<span class="skill">Bootstrap<i class="val">100%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>

							<div class="progress">
								<span class="skill">Adobe Creative Suite<i class="val">100%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>

						</div>

					</div>

				</div>
			</section><!-- End #skills section. -->

			<!-- Resume section. -->
			<section id="resume" class="resume">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>Résumé</h2>
<?php //				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> ?>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<h3 class="resume-title">Summary</h3>
							<div id="resumeSummary" class="resume-item pb-0">
								<h4>Joe Gutierrez</h4>
								<p><em>Experienced Web Developer with 11+ years of experience across the full stack of software development.</em></p>
								<ul>
									<li><i class="bi bi-geo-alt-fill"></i> Las Vegas, Nevada</li>
									<li><i class="bi bi-phone-fill"></i> (818) 220-0079</li>
									<li><i class="bi bi-envelope-fill"></i> joegutierrezdev&#64;gmail.com</li>
									<li><i class="bi bi-github"></i> <a href="https://github.com/JoeGutierrez" target="_blank">GitHub</a></li>
									<li><i class="bi bi-linkedin"></i> <a href="http://www.linkedin.com/in/gtsjoe" target="_blank">LinkedIn</a></li>
								</ul>
							</div>

							<h3 class="resume-title">Objective</h3>
							<div class="resume-item pb-0">
								<p class="m-0"><em>Seeking a position as a Web Developer to utilize my experience in application development, database and systems management.</em></p>
							</div>

							<h3 class="resume-title">Education</h3>
							<div class="resume-item">
								<h4>Bachelor's Degree in Journalism</h4>
								<h5><i class="bi bi-calendar3"></i> 2000 - 2003</h5>
								<p><em>California State University, Northridge</em></p>
							</div>

							<div class="resume-item">
								<h4>Computer Science</h4>
								<h5><i class="bi bi-calendar3"></i> 1997 - 2000</h5>
								<p><em>Los Angeles Valley College</em></p>
								<p>Classes in Programming Logic, Data Structures and Relational Database Management Systems using the following languages: Pascal, C, C++, PHP, SQL.</p>
							</div>

							<h3 class="resume-title">Skills</h3>
							<div class="resume-item pb-0">
								<p class="m-0"><em>Laravel<br>PHP<br>SQL<br>JavaScript<br>Bootstrap</em></p>
							</div>
						</div>
						<div class="col-lg-6">
							<h3 class="resume-title">Professional Experience</h3>
							<div class="resume-item">
								<h4>Senior Web Developer</h4>
								<h5><i class="bi bi-calendar3"></i> 2020 - Present</h5>
								<p><em>Nevada Corporate Headquarters, Las Vegas, NV</em></p>
								<ul>
									<li>Developed Client Portal application on a cloud server using a Laravel backend and SQL database.</li>
									<li>Connected Web Apps to company CRM consuming REST API & working with JSON data.</li>
									<li>Created main company website, including database integration and UI / UX.</li>
									<li>Maintain all webservers implementing security and data protection.</li>
								</ul>
							</div>
							<div class="resume-item">
								<h4>Web Developer</h4>
								<h5><i class="bi bi-calendar3"></i> 2016 - 2020</h5>
								<p><em>Discount Dance, Anaheim, CA</em></p>
								<ul>
									<li>Extensive coding experience for ecommerce stores in PHP, MySQL, JavaScript, CSS and Node.js.</li>
									<li>Developed asynchronous dashboard using jQuery AJAX to manage and monitor inventory.</li>
									<li>Integrated custom APIs to send and receive data using cURL and AJAX in JSON and XML.</li>
									<li>Created responsive user interfaces using Media Queries optimized for mobile, tablet and desktop.</li>
									<li>Implemented Web APIs from Mouseflow, InkSoft and Cordial.</li>
								</ul>
							</div>
							<div class="resume-item">
								<h4>Lead Web Developer &amp; System Admin</h4>
								<h5><i class="bi bi-calendar3"></i> 2015 - 2016</h5>
								<p><em>Zero Six Media, Irwindale, CA</em></p>
								<ul>
									<li>Used Magento and WooCommerce to make e-commerce shops accepting payments through credit cards, Amazon Pay, Stripe, Authorize.Net and PayPal.</li>
									<li>Created blogs and landing pages using WordPress Content Management System.</li>
									<li>Configured and administered Linux webservers. Ubuntu, CentOS and RHEL distros.</li>
									<li>Configured and optimized Apache and NGINX servers with Varnish HTTP Cache Accelerator.</li>
								</ul>
							</div>
							<div class="resume-item">
								<h4>Web Designer</h4>
								<h5><i class="bi bi-calendar3"></i> 2010 - 2014</h5>
								<p><em>United Truck Centers, Sylmar, CA</em></p>
								<ul>
									<li>Successfully launched 2 e-commerce stores.</li>
									<li>Used PHP and MySQL extensively to create dynamic, database-driven websites.</li>
									<li>Redesigned the company's corporate site using HTML5, CSS & Bootstrap for responsive functionality.</li>
									<li>Search Engine Optimization (SEO) and Google Analytics to rank higher in search engines.</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</section><!-- End #resume section. -->

			<!-- Portfolio section. -->
<?php /*
			- The portfolio section uses the isotope-layout npm package for a dynamic layout. https://isotope.metafizzy.co/ https://www.npmjs.com/package/isotope-layout
			- When you open a Project Information page, the order of the left/right arrows is determined by the order you list your projects in the <div class="portfolio-container"> element. Projects on the top will appear first. Source: Myself. Added: 05/24/2021.
*/ ?>
			<section id="portfolio" class="portfolio section-bg">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>Portfolio</h2>
<?php //				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> ?>
					</div>

					<div class="row">
						<div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
							<ul id="portfolio-flters">
								<li data-filter="*" class="filter-active">All</li>
								<li data-filter=".filter-laravel">Laravel</li>
								<li data-filter=".filter-ecommerce">Ecommerce</li>
								<li data-filter=".filter-web">Web</li>
							</ul>
						</div>
					</div>

					<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

						<div class="col-lg-4 col-md-6 portfolio-item filter-laravel">
							<a href="/nch" class="portfolio-details-lightbox" data-glightbox="type: external">
								<div class="portfolio-wrap">
									<img data-src="{{ asset( 'img/portfolio/nch-1-tn.jpg' ) }}" class="img-fluid lozad" alt="">
<?php // Comment out the div.portfolio-info elements so there's no overlay on hover with the project's title, + sign icon link to the project's image and a chain icon link to the project's details. I removed this so when users click on a project's image, it'll take them straight to the project details page. ?>
<?php /*
									<div class="portfolio-info">
										<h4>Web 1</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
											<a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
*/ ?>
								</div>
							</a>
						</div>

						<div class="col-lg-4 col-md-6 portfolio-item filter-ecommerce">
							<a href="/dd" class="portfolio-details-lightbox" data-glightbox="type: external">
								<div class="portfolio-wrap">
									<img data-src="{{ asset( 'img/portfolio/dd-1-tn.jpg' ) }}" class="img-fluid lozad" alt="">
<?php /*
									<div class="portfolio-info">
										<h4>Ecommerce 1</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="/img/portfolio/dd-1-tn.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
											<a href="/dd" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
*/ ?>
								</div>
							</a>
						</div>

						<div class="col-lg-4 col-md-6 portfolio-item filter-laravel">
							<a href="/portal" class="portfolio-details-lightbox" data-glightbox="type: external">
								<div class="portfolio-wrap">
									<img data-src="{{ asset( 'img/portfolio/portal-1-tn.jpg' ) }}" class="img-fluid lozad" alt="">
<?php /*
									<div class="portfolio-info">
										<h4>Web 2</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
											<a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
*/ ?>
								</div>
							</a>
						</div>

						<div class="col-lg-4 col-md-6 portfolio-item filter-web">
							<a href="{{ route( 'paul' ) }}" class="portfolio-details-lightbox" data-glightbox="type: external">
								<div class="portfolio-wrap">
									<img data-src="{{ asset( 'img/portfolio/paul-1-tn.jpg' ) }}" class="img-fluid lozad" alt="">
<?php /*
									<div class="portfolio-info">
										<h4>Web 3</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
											<a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
*/ ?>
								</div>
							</a>
						</div>

						<div class="col-lg-4 col-md-6 portfolio-item filter-web">
							<a href="{{ route( 'vault' ) }}" class="portfolio-details-lightbox" data-glightbox="type: external">
								<div class="portfolio-wrap">
									<img data-src="{{ asset( 'img/portfolio/vault-1-tn.jpg' ) }}" class="img-fluid lozad" alt="">
<?php /*
									<div class="portfolio-info">
										<h4>Web 3</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
											<a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
*/ ?>
								</div>
							</a>
						</div>

						<div class="col-lg-4 col-md-6 portfolio-item filter-laravel">
							<a href="{{ route( 'csc' ) }}" class="portfolio-details-lightbox" data-glightbox="type: external">
								<div class="portfolio-wrap">
									<img data-src="{{ asset( 'img/portfolio/csc-1-tn.jpg' ) }}" class="img-fluid lozad" alt="">
<?php /*
									<div class="portfolio-info">
										<h4>Web 2</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
											<a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
*/ ?>
								</div>
							</a>
						</div>

						<div class="col-lg-4 col-md-6 portfolio-item filter-ecommerce">
							<a href="/ce" class="portfolio-details-lightbox" data-glightbox="type: external">
								<div class="portfolio-wrap">
									<img data-src="{{ asset( 'img/portfolio/ce-1-tn.jpg' ) }}" class="img-fluid lozad" alt="">
<?php /*
									<div class="portfolio-info">
										<h4>Ecommerce 1</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="/img/portfolio/dd-1-tn.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
											<a href="/dd" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
*/ ?>
								</div>
							</a>
						</div>

						<div class="col-lg-4 col-md-6 portfolio-item filter-ecommerce">
							<a href="/up" class="portfolio-details-lightbox" data-glightbox="type: external">
								<div class="portfolio-wrap">
									<img data-src="{{ asset( 'img/portfolio/up-1-tn.jpg' ) }}" class="img-fluid lozad" alt="">
<?php /*
									<div class="portfolio-info">
										<h4>Ecommerce 1</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="/img/portfolio/dd-1-tn.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
											<a href="/dd" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
*/ ?>
								</div>
							</a>
						</div>

						<div class="col-lg-4 col-md-6 portfolio-item filter-web">
							<a href="{{ route( 'vital' ) }}" class="portfolio-details-lightbox" data-glightbox="type: external">
								<div class="portfolio-wrap">
									<img data-src="{{ asset( 'img/portfolio/vital-1-tn.jpg' ) }}" class="img-fluid lozad" alt="">
<?php /*
									<div class="portfolio-info">
										<h4>Web 3</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
											<a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
*/ ?>
								</div>
							</a>
						</div>

					</div>

				</div>
			</section><!-- End #portfolio section. -->

			<!-- Services section. -->
			<section id="services" class="services">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>My Services</h2>
<?php //				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> ?>
					</div>

					<div class="row">

						<div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
							<div class="icon-box iconbox-blue">
								<div class="icon">
									<img data-src="{{ asset( 'img/services-bg-shape-1.svg' ) }}" alt="Services background shape 1" class="servicesBackgroundShape lozad">
									<i class="bx bx-code-alt"></i>
								</div>
								<h4>Development</h4>
								<p>I build custom-tailored solutions based on your technical specifications.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
							<div class="icon-box iconbox-orange">
								<div class="icon">
									<img data-src="{{ asset( 'img/services-bg-shape-2.svg' ) }}" alt="Services background shape 2" class="servicesBackgroundShape lozad">
									<i class="bx bx-table"></i>
								</div>
								<h4>Database Administration</h4>
								<p>Custom SQL queries, detailed report creation and administration while maintaining data integrity.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
							<div class="icon-box iconbox-pink">
								<div class="icon">
									<img data-src="{{ asset( 'img/services-bg-shape-3.svg' ) }}" alt="Services background shape 3" class="servicesBackgroundShape lozad">
									<i class="bx bxs-network-chart"></i>
								</div>
								<h4>APIs</h4>
								<p>I'm passionate about the latest web APIs, whether it's building my own, scaling an API or consuming API data in JSON or XML formats.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
							<div class="icon-box iconbox-yellow">
								<div class="icon">
									<img data-src="{{ asset( 'img/services-bg-shape-4.svg' ) }}" alt="Services background shape 4" class="servicesBackgroundShape lozad">
									<i class="bx bx-rocket"></i>
								</div>
								<h4>Search Engine Optimization</h4>
								<p>Algorithmic backend design, content strategy and refined SEO to increase organic traffic.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
							<div class="icon-box iconbox-red">
								<div class="icon">
									<img data-src="{{ asset( 'img/services-bg-shape-5.svg' ) }}" alt="Services background shape 5" class="servicesBackgroundShape lozad">
									<i class="bx bx-cart"></i>
								</div>
								<h4>E-Commerce</h4>
								<p>Customized e-commerce solutions for your business using the WooCommerce or Magento platforms.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
							<div class="icon-box iconbox-teal">
								<div class="icon">
									<img data-src="{{ asset( 'img/services-bg-shape-6.svg' ) }}" alt="Services background shape 6" class="servicesBackgroundShape lozad">
									<i class="bx bx-lock"></i>
								</div>
								<h4>DNS & SSL Certificates</h4>
								<p>SSL certificate configuration for secure HTTPS access, web server migration and everything else related to domain name services.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
							<div class="icon-box iconbox-orange">
								<div class="icon">
									<img data-src="{{ asset( 'img/services-bg-shape-1.svg' ) }}" alt="Services background shape 1" class="servicesBackgroundShape lozad">
									<i class='bx bx-data'></i>
								</div>
								<h4>Automation</h4>
								<p>Whether it's automatic templates, cron jobs, emails or server backups, automation is a key of an efficient workflow.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
							<div class="icon-box iconbox-blue">
								<div class="icon">
									<img data-src="{{ asset( 'img/services-bg-shape-2.svg' ) }}" alt="Services background shape 2" class="servicesBackgroundShape lozad">
									<i class="bx bx-server"></i>
								</div>
								<h4>Server Admin</h4>
								<p>Monitor systems to ensure they're running smoothly, install updates, configure and optimize web servers.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
							<div class="icon-box iconbox-yellow">
								<div class="icon">
									<img data-src="{{ asset( 'img/services-bg-shape-3.svg' ) }}" alt="Services background shape 3" class="servicesBackgroundShape lozad">
									<i class="bx bx-line-chart"></i>
								</div>
								<h4>Analytics</h4>
								<p>Build a complete picture with analytics to understand how users are engaging with your content.</p>
							</div>
						</div>

					</div>

				</div>
			</section><!-- End #services section. -->

			<!-- Contact section. -->
			<section id="contact" class="contact">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>Contact</h2>
					</div>

					<div class="row mt-1">

						<div id="homePageContactFormContainer" class="col-lg-8 mt-5 mt-lg-0 mx-auto">

							@include( 'home-page-contact-form' )

						</div><!-- End #homePageContactFormContainer. -->

					</div>

				</div>
			</section><!-- End #contact section. -->

@endsection
