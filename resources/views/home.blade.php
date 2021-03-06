@extends( 'layouts.app' )

@section( 'content' )
			<!-- ======= About Section ======= -->
			<section id="about" class="about">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>About</h2>
<?php // 				<p>Welcome to my online portfolio. I'm Joe, a Full Stack Engineer since 2010. My passion for programming and note-taking comes from having studied Computer Science and Journalism in college. I have experience in information systems with a career history of achievement, facilitating company growth through the implementation and maintenance of progressive IT, web application and automation initiatives.</p> ?>
					</div>

					<div class="row" style="justify-content: center;">
						<div class="col-lg-3 text-center">
							<img data-src="/img/joe.jpg" class="img-fluid lozad" alt="">
						</div>
						<div class="col-lg-6 pt-4 pt-lg-0 content">
							<h3>Full Stack Engineer</h3>
							<p>Welcome to my online portfolio, my name is Joe Gutierrez. I'm currently working as a Senior Web Developer. My passion for programming and note-taking comes from having studied Computer Science and Journalism in college. I have experience in information systems with a career history of achievement, facilitating company growth through the implementation and maintenance of progressive IT, web application and automation initiatives.</p>
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
			</section><!-- End About Section -->

{{--
			<!-- ======= Facts Section ======= -->
			<section id="facts" class="facts">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>Facts</h2>
						<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
					</div>

					<div class="row">

						<div class="col-lg-3 col-md-6">
							<div class="count-box">
								<i class="bi bi-emoji-smile"></i>
								<span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
								<p>Happy Clients</p>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 mt-5 mt-md-0">
							<div class="count-box">
								<i class="bi bi-journal-richtext"></i>
								<span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
								<p>Projects</p>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
							<div class="count-box">
								<i class="bi bi-headset"></i>
								<span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
								<p>Hours Of Support</p>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
							<div class="count-box">
								<i class="bi bi-award"></i>
								<span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
								<p>Awards</p>
							</div>
						</div>

					</div>

				</div>
			</section><!-- End Facts Section -->
--}}

			<!-- ======= Skills Section ======= -->
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
			</section><!-- End Skills Section -->

			<!-- ======= Resume Section ======= -->
			<section id="resume" class="resume">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>Résumé</h2>
<?php //						<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> ?>
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
									<li>Developed asynchronous dashboard using React to manage and monitor inventory.</li>
									<li>Integrated custom APIs to send and receive data using cURL and AJAX in JSON and XML.</li>
									<li>Created responsive user interfaces using Media Queries optimized for mobile, tablet and desktop.</li>
									<li>Implemented Web APIs from Mouseflow, InkSoft and Cordial.</li>
								</ul>
							</div>
							<div class="resume-item">
								<h4>Web Developer &amp; System Admin</h4>
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
			</section><!-- End Resume Section -->

<?php /*
			<!-- ======= Portfolio Section ======= -->
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
									<img data-src="/img/portfolio/nch-1-tn.jpg" class="img-fluid lozad" alt="">
<?php // Comment out the div.portfolio-info elements so there's no overlay on hover with the project's title, + sign icon link to the project's image and a chain icon link to the project's details. I removed this so when users click on a project's image, it'll take them straight to the project details page. ?>
{{--
									<div class="portfolio-info">
										<h4>Web 1</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
											<a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
--}}
								</div>
							</a>
						</div>

						<div class="col-lg-4 col-md-6 portfolio-item filter-ecommerce">
							<a href="/dd" class="portfolio-details-lightbox" data-glightbox="type: external">
								<div class="portfolio-wrap">
									<img data-src="/img/portfolio/dd-1-tn.jpg" class="img-fluid lozad" alt="">
{{--
									<div class="portfolio-info">
										<h4>Ecommerce 1</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="/img/portfolio/dd-1-tn.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
											<a href="/dd" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
--}}
								</div>
							</a>
						</div>

						<div class="col-lg-4 col-md-6 portfolio-item filter-laravel">
							<a href="/portal" class="portfolio-details-lightbox" data-glightbox="type: external">
								<div class="portfolio-wrap">
									<img data-src="/img/portfolio/portal-1-tn.jpg" class="img-fluid lozad" alt="">
{{--
									<div class="portfolio-info">
										<h4>Web 2</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
											<a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
--}}
								</div>
							</a>
						</div>

						<div class="col-lg-4 col-md-6 portfolio-item filter-web">
							<a href="{{ route( 'paul' ) }}" class="portfolio-details-lightbox" data-glightbox="type: external">
								<div class="portfolio-wrap">
									<img data-src="/img/portfolio/paul-1-tn.jpg" class="img-fluid lozad" alt="">
{{--
									<div class="portfolio-info">
										<h4>Web 3</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
											<a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
--}}
								</div>
							</a>
						</div>

						<div class="col-lg-4 col-md-6 portfolio-item filter-web">
							<a href="{{ route( 'vault' ) }}" class="portfolio-details-lightbox" data-glightbox="type: external">
								<div class="portfolio-wrap">
									<img data-src="/img/portfolio/vault-1-tn.jpg" class="img-fluid lozad" alt="">
{{--
									<div class="portfolio-info">
										<h4>Web 3</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
											<a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
--}}
								</div>
							</a>
						</div>

						<div class="col-lg-4 col-md-6 portfolio-item filter-laravel">
							<a href="{{ route( 'csc' ) }}" class="portfolio-details-lightbox" data-glightbox="type: external">
								<div class="portfolio-wrap">
									<img data-src="/img/portfolio/csc-1-tn.jpg" class="img-fluid lozad" alt="">
{{--
									<div class="portfolio-info">
										<h4>Web 2</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
											<a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
--}}
								</div>
							</a>
						</div>

						<div class="col-lg-4 col-md-6 portfolio-item filter-ecommerce">
							<a href="/ce" class="portfolio-details-lightbox" data-glightbox="type: external">
								<div class="portfolio-wrap">
									<img data-src="/img/portfolio/ce-1-tn.jpg" class="img-fluid lozad" alt="">
{{--
									<div class="portfolio-info">
										<h4>Ecommerce 1</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="/img/portfolio/dd-1-tn.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
											<a href="/dd" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
--}}
								</div>
							</a>
						</div>

						<div class="col-lg-4 col-md-6 portfolio-item filter-ecommerce">
							<a href="/up" class="portfolio-details-lightbox" data-glightbox="type: external">
								<div class="portfolio-wrap">
									<img data-src="/img/portfolio/up-1-tn.jpg" class="img-fluid lozad" alt="">
{{--
									<div class="portfolio-info">
										<h4>Ecommerce 1</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="/img/portfolio/dd-1-tn.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
											<a href="/dd" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
--}}
								</div>
							</a>
						</div>

						<div class="col-lg-4 col-md-6 portfolio-item filter-web">
							<a href="{{ route( 'vital' ) }}" class="portfolio-details-lightbox" data-glightbox="type: external">
								<div class="portfolio-wrap">
									<img data-src="/img/portfolio/vital-1-tn.jpg" class="img-fluid lozad" alt="">
{{--
									<div class="portfolio-info">
										<h4>Web 3</h4>
										<p>Web</p>
										<div class="portfolio-links">
											<a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
											<a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"><i class="bx bx-link"></i></a>
										</div>
									</div>
--}}
								</div>
							</a>
						</div>

					</div>

				</div>
			</section><!-- End Portfolio Section -->

			<!-- ======= Services Section ======= -->
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
									<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
										<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
									</svg>
									<i class="bx bx-code-alt"></i>
								</div>
								<h4>Development</h4>
								<p>I build custom-tailored solutions based on your technical specifications.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
							<div class="icon-box iconbox-orange">
								<div class="icon">
									<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
										<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
									</svg>
									<i class="bx bx-table"></i>
								</div>
								<h4>Database Administration</h4>
								<p>Custom SQL queries, detailed report creation and administration while maintaining data integrity.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
							<div class="icon-box iconbox-pink">
								<div class="icon">
									<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
										<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
									</svg>
									<i class="bx bxs-network-chart"></i>
								</div>
								<h4>APIs</h4>
								<p>I'm passionate about the latest web APIs, whether it's building my own, scaling an API or consuming API data in JSON or XML formats.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
							<div class="icon-box iconbox-yellow">
								<div class="icon">
									<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
										<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
									</svg>
									<i class="bx bx-rocket"></i>
								</div>
								<h4>Search Engine Optimization</h4>
								<p>Algorithmic backend design, content strategy and refined SEO to increase organic traffic.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
							<div class="icon-box iconbox-red">
								<div class="icon">
									<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
										<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
									</svg>
									<i class="bx bx-cart"></i>
								</div>
								<h4>E-Commerce</h4>
								<p>Customized e-commerce solutions for your business using the WooCommerce or Magento platforms.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
							<div class="icon-box iconbox-teal">
								<div class="icon">
									<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
										<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
									</svg>
									<i class="bx bx-lock"></i>
								</div>
								<h4>DNS & SSL Certificates</h4>
								<p>SSL certificate configuration for secure HTTPS access, web server migration and everything else related to domain name services.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
							<div class="icon-box iconbox-orange">
								<div class="icon">
									<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
										<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
									</svg>
									<i class='bx bx-data'></i>
								</div>
								<h4>Automation</h4>
								<p>Whether it's automatic templates, cron jobs, emails or server backups, automation is a key of an efficient workflow.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
							<div class="icon-box iconbox-blue">
								<div class="icon">
									<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
										<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
									</svg>
									<i class="bx bx-server"></i>
								</div>
								<h4>Server Admin</h4>
								<p>Monitor systems to ensure they're running smoothly, install updates, configure and optimize web servers.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
							<div class="icon-box iconbox-yellow">
								<div class="icon">
									<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
										<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
									</svg>
									<i class="bx bx-line-chart"></i>
								</div>
								<h4>Analytics</h4>
								<p>Build a complete picture with analytics to understand how users are engaging with your content.</p>
							</div>
						</div>

					</div>

				</div>
			</section><!-- End Services Section -->

<?php /*
			<!-- ======= Testimonials Section ======= -->
			<section id="testimonials" class="testimonials section-bg">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>Testimonials</h2>
					</div>

					<div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
						<div class="swiper-wrapper">

							<div class="swiper-slide">
								<div class="testimonial-item">
									<img src="/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
									<h3>Saul Goodman</h3>
									<h4>Ceo &amp; Founder</h4>
									<p>
										<i class="bx bxs-quote-alt-left quote-icon-left"></i>
										Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
										<i class="bx bxs-quote-alt-right quote-icon-right"></i>
									</p>
								</div>
							</div><!-- End testimonial item -->

							<div class="swiper-slide">
								<div class="testimonial-item">
									<img src="/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
									<h3>Sara Wilsson</h3>
									<h4>Designer</h4>
									<p>
										<i class="bx bxs-quote-alt-left quote-icon-left"></i>
										Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
										<i class="bx bxs-quote-alt-right quote-icon-right"></i>
									</p>
								</div>
							</div><!-- End testimonial item -->

							<div class="swiper-slide">
								<div class="testimonial-item">
									<img src="/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
									<h3>Jena Karlis</h3>
									<h4>Store Owner</h4>
									<p>
										<i class="bx bxs-quote-alt-left quote-icon-left"></i>
										Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
										<i class="bx bxs-quote-alt-right quote-icon-right"></i>
									</p>
								</div>
							</div><!-- End testimonial item -->

							<div class="swiper-slide">
								<div class="testimonial-item">
									<img src="/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
									<h3>Matt Brandon</h3>
									<h4>Freelancer</h4>
									<p>
										<i class="bx bxs-quote-alt-left quote-icon-left"></i>
										Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
										<i class="bx bxs-quote-alt-right quote-icon-right"></i>
									</p>
								</div>
							</div><!-- End testimonial item -->

							<div class="swiper-slide">
								<div class="testimonial-item">
									<img src="/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
									<h3>John Larson</h3>
									<h4>Entrepreneur</h4>
									<p>
										<i class="bx bxs-quote-alt-left quote-icon-left"></i>
										Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
										<i class="bx bxs-quote-alt-right quote-icon-right"></i>
									</p>
								</div>
							</div><!-- End testimonial item -->

						</div>
						<div class="swiper-pagination"></div>
					</div>

				</div>
			</section><!-- End Testimonials Section -->
*/ ?>

			<!-- ======= Contact Section ======= -->
			<section id="contact" class="contact">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>Contact</h2>
					</div>

					<div class="row mt-1">

<?php /*						<div class="col-lg-4">
							<div class="info">
								<div class="address">
									<i class="bi bi-geo-alt"></i>
									<h4>Location:</h4>
									<p>A108 Adam Street, New York, NY 535022</p>
								</div>
								<div class="email">
									<i class="bi bi-envelope"></i>
									<h4>Email:</h4>
									<p>info@example.com</p>
								</div>
								<div class="phone">
									<i class="bi bi-phone"></i>
									<h4>Call:</h4>
									<p>(555) 555-5555</p>
								</div>
							</div>
						</div>
*/ ?>

						<div class="col-lg-8 mt-5 mt-lg-0 mx-auto">
							<form action="forms/contact.php" method="post" role="form" class="php-email-form">
								<div class="row">
									<div class="col-md-6 form-group">
										<input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
									</div>
									<div class="col-md-6 form-group mt-3 mt-md-0">
										<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
								</div>
								<div class="form-group mt-3">
									<textarea class="form-control" name="message" rows="5" placeholder="Message" required style="resize: none;"></textarea>
								</div>
								<div class="my-3">
									<div class="loading">Loading</div>
									<div class="error-message"></div>
									<div class="sent-message">Your message has been sent. Thank you!</div>
								</div>
								<div class="text-center"><button type="submit">Send Message</button></div>
							</form>
						</div>

					</div>

				</div>
			</section><!-- End Contact Section -->

@endsection
