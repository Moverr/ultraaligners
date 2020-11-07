<?php 
$this->load->view("header"); 
?>
<body>
<section class="menu02 cid-seKUfbqItn" once="menu" id="menu2-1z">

<?php
	  $this->load->view("nav");
	  ?>
</section>
 
	<!-- Carousel.  -->
	<section class="carousel slide cid-seC9He4ZFw" data-interval="false" id="slider1-x">



		<div class="full-screen">
			<div class="mbr-slider slide carousel" data-keyboard="false" data-ride="carousel" data-interval="8000" data-pause="true">
				<ol class="carousel-indicators">
					<li data-app-prevent-settings="" data-target="#slider1-x" class=" active" data-slide-to="0"></li>
					<li data-app-prevent-settings="" data-target="#slider1-x" data-slide-to="1"></li>
					<li data-app-prevent-settings="" data-target="#slider1-x" data-slide-to="2"></li>
					<li data-app-prevent-settings="" data-target="#slider1-x" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/image-05-09-2020-at-22.14-2-1340x804.jpg);">
						<div class="container container-slide">
							<div class="image_wrapper">
								<div class="mbr-overlay" style="opacity: 0; background-color: rgb(19, 9, 71);"></div><img src="assets/images/image-05-09-2020-at-22.14-2-1340x804.jpg" alt="" title="">
								<div class="carousel-caption justify-content-center">
									<div class="col-10 align-left">
										<h2 class="mbr-fonts-style display-1">Our Assurance</h2>
										<p class="lead mbr-text mbr-fonts-style display-5"><strong>Journey To Perfect Smile</strong></p>
										<div class="mbr-section-btn" buttons="0"><a class="btn display-4 btn-info" href="getstarted.html">AM I A CANDIDATE?</a> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/int-ban-lg12-820x469.jpg);">
						<div class="container container-slide">
							<div class="image_wrapper">
								<div class="mbr-overlay" style="opacity: 0; background-color: rgb(19, 9, 71);"></div><img src="assets/images/int-ban-lg12-820x469.jpg" alt="" title="">
								<div class="carousel-caption justify-content-center">
									<div class="col-10 align-left">
										<h2 class="mbr-fonts-style display-1">New smile time: Avg. 4-6 months, Hours: - 22 hours per day</h2>
										<p class="lead mbr-text mbr-fonts-style display-5"><strong>Standard Aligners</strong><br></p>
										<div class="mbr-section-btn" buttons="0"><a class="btn display-4 btn-info" href="getstarted.html">Get Started</a> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/hero-braces-woman-reviews-1800x1200.jpg);">
						<div class="container container-slide">
							<div class="image_wrapper">
								<div class="mbr-overlay" style="opacity: 0; background-color: rgb(19, 9, 71);"></div><img src="assets/images/hero-braces-woman-reviews-1800x1200.jpg" alt="" title="">
								<div class="carousel-caption justify-content-center">
									<div class="col-10 align-left">
										<h2 class="mbr-fonts-style display-1">New smile time: Avg. 10 – 12 months, Hours: - 10 - 12 hours per day</h2>
										<p class="lead mbr-text mbr-fonts-style display-5"><strong>Night Aligners</strong></p>
										<div class="mbr-section-btn" buttons="0"><a class="btn display-4 btn-info" href="getstarted.html">Get Started</a> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/retainer-care-2000x1333.jpg);">
						<div class="container container-slide">
							<div class="image_wrapper">
								<div class="mbr-overlay" style="opacity: 0; background-color: rgb(19, 9, 71);"></div><img src="assets/images/retainer-care-2000x1333.jpg" alt="" title="">
								<div class="carousel-caption justify-content-center">
									<div class="col-10 align-left">
										<h2 class="mbr-fonts-style display-1">Maintain your nice smile by wearing retainers at night: Hours: - 8 hours per day&nbsp;</h2>
										<p class="lead mbr-text mbr-fonts-style display-5"><strong>Night Time Retainers</strong><br></p>
										<div class="mbr-section-btn" buttons="0"><a class="btn display-4 btn-info" href="getstarted.html">Get Started</a> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-x"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-x"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a>
			</div>
		</div>

	</section>




	<!--ENd of Corousel -->

	<section class="features3 cid-rSb9WtunRS" id="features3-2">





		<div class="container">
			<div class="media-container-row">

				<?php

				if (isset($howitworks->icontabs)) {
					// var_dump($howitworks->icontabs);

					$icontabs = $howitworks->icontabs;
					foreach ($icontabs as $record) {
				?>
						<div class="card p-3 col-12 col-md-6 col-lg-4">
							<div class="card-wrapper">
								<div class="card-img">
									<div class="card-icon">
										<span class="<?= $record->icon; ?>"></span>
									</div>
								</div>
								<div class="card-box">
									<h4 class="card-title pb-3 mbr-fonts-style mbr-bold display-7"><?= $record->title; ?></h4>
									<p class="mbr-text mbr-fonts-style mbr-regular display-4"><?= $record->slang; ?></p>
								</div>
							</div>
						</div>


				<?php
					}
				}

				?>



			</div>
		</div>
	</section>

	<section class="extHeader cid-s9KqqIropw" id="extHeader9-5">



		<div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(255, 255, 255);">
		</div>



		<div class="container">
			<div class="media-container-row">
				<div class="mb-4 content-container" style="width: 85%;">
					<h1 class="mbr-section-title pb-3 mbr-fonts-style display-2"><?= $howitworks->title; ?></h1>
					<p class="mbr-text pb-3 mbr-fonts-style display-7"><?= $howitworks->brief; ?><br></p>

				</div>
			</div>
		</div>



		<div class="container-boxes mbr-white">


			<?php

			if (isset($howitworks->extendedtabs)) {
				// var_dump($howitworks->extendedtabs);
				$extendedtabs = $howitworks->extendedtabs;
				$count = 0;
				foreach ($extendedtabs as $record) {
					$count = $count + 1;
			?>
					<div class="box-item">
						<div class="icon-block-top pb-4">
							<span class="mbr-iconfont mdi-image-filter-<?= $count; ?> display-2"></span>
						</div>
						<h4 class="box-item-title pb-3 mbr-fonts-style display-5"> <?= $record->title; ?></h4>
						<p class="box-item-text mbr-fonts-style display-7"><?= $record->brief; ?></p>
						<h5 class="mbr-fonts-style display-5"></h5>
					</div>


			<?php
				}
			}
			?>


		</div>
	</section>

	<section class="tabs1 cid-rSbaWNDWqC">

		<div class="container">
			<div class="top-part">
				<h3 class="mbr-section-subtitle mbr-fonts-style align-center mbr-bold display-2">Our Products</h3>

				<h1 class="mbr-fonts-style mbr-section-title align-center mbr-bold display-4"> Learn more about our wide range of alingers and how they can best fit your needs.</h1>
			</div>
		</div>
	</section>

	<?php

	if (isset($howitworks->rowtabs)) {
		// var_dump($howitworks->rowtabs);
		$rowtabs = $howitworks->rowtabs;
		$count = 0;
		foreach ($rowtabs as $record) {
			$count = $count + 1;
			$class = "header04 cid-rSb9WTfBCL";
			if ($count % 2 == 0) {
				$class = "header04 cid-s9KzqxnkB3";
			}
	?>
			<section class="<?= $class; ?>" id="header4-3">




				<div class="container-fluid">
					<div class="row align-items-center content-row">
						<div class="col-lg-6 wrap-block">
							<div class="contents">

								<h1 class="mbr-section-title mbr-fonts-style mbr-bold display-2"><?= $record->title; ?></h1>
								<h3 class="mbr-section-text mbr-fonts-style mbr-bold boldSubtitle display-7"></h3>
								<h4 class="mbr-section-text mbr-fonts-style mbr-light display-4"><?= $record->brief; ?></h4>
							</div>

						</div>
						<div class="col-lg-6 photo-split">
							<div class="element-inner">
								<span class="widget-icon mbr-iconfont icon54-v1-medical-symbol"></span>
							</div>
							<div class="element-outer">
							</div>
							<div class="element-outer2">
							</div>
							<div class="image-wrap">
								<img src="<?= $record->image->data->full_url; ?>" alt="" title="">
							</div>
						</div>
					</div>
				</div>
			</section>
	<?php
		}
	}
	?>




	<section class="carousel slide testimonials-slider features4 cid-s9KC384tHB" data-interval="false" id="features4-8">





		<div class="container text-center">



			<h2 class="mbr-fonts-style mbr-section-title align-center mbr-bold display-2">Treatable malocclusions</h2>
			<p class="mbr-text mbr-fonts-style align-center mbr-regular display-7">
				We generally treat mild and moderate malocclusions. Your dentists will give you an accurate diagnosis:</p>
		</div>
		<div class="carousel slide container" role="listbox" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
			<div class="carousel-inner">


				<div class="carousel-item">
					<div class="row justify-content-center">


						<div class="col-md-4">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/abnormal-eruption-1-578x377.jpg" title="" alt="">

								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-image-blur-on"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">Crowded teeth</h4>


							</div>
						</div>

						<div class="col-md-4 d-none d-md-block">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/invisalign-gap-4-315x315.jpeg" title="" alt="">
								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-communication-invert-colors-on"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">Gaps between teeth</h4>


							</div>
						</div>

						<div class="col-md-4 d-none d-md-block">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/problems-that-may-be-associated-with-crooked-teeth-300x229.jpg" title="" alt="">
								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-action-wallet-giftcard"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">Crooked teeth</h4>


							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row justify-content-center">
						<div class="col-md-4">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/04.jpg" title="">
								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-editor-format-paint"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">Testimonials</h4>


							</div>
						</div>

						<div class="col-md-4 d-none d-md-block">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/05.jpg" title="">
								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-av-radio"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">Forms</h4>


							</div>
						</div>

						<div class="col-md-4 d-none d-md-block">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/06.jpg" title="">
								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-action-thumbs-up-down"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">New Patients</h4>


							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row justify-content-center">
						<div class="col-md-4">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/04.jpg" title="">
								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-editor-format-paint"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">Testimonials</h4>


							</div>
						</div>

						<div class="col-md-4 d-none d-md-block">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/05.jpg" title="">
								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-av-radio"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">Forms</h4>


							</div>
						</div>

						<div class="col-md-4 d-none d-md-block">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/06.jpg" title="">
								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-action-thumbs-up-down"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">New Patients</h4>


							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-indicators">
				<li data-slide-to="0" class="active"></li>
				<li data-slide-to="1"></li>
				<li data-slide-to="2"></li>







			</div>

			<div class="carousel-controls">
				<a class="carousel-control-prev" role="button" data-slide="prev">
					<span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
					<span class="sr-only">Previous</span>
				</a>

				<a class="carousel-control-next" role="button" data-slide="next">
					<span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

	</section>

	<section class="tabs2 cid-s9VM64QEZx" id="tabs2-k">




		<div class="container">
			<h2 class="align-left mbr-bold pb-3 mbr-fonts-style display-2">Our Practices</h2>
			<div class="row">
				<div class="col-md-4">
					<ul class="nav nav-tabs" role="tablist">

						<?php

						if (isset($practices)) {

							foreach ($practices as $record) {
						?>
								<li class="nav-item first"><a class="nav-link mbr-fonts-style show active display-4" role="tab" data-toggle="tab" href="#tabs2-k_tab<?= $record->id ?>" aria-selected="true">
										<?= $record->title; ?><span class="mdi-hardware-keyboard-arrow-right mbr-iconfont mbr-iconfont-btn"></span></a></li>

						<?php
							}
						}
						?>



					</ul>
					<div class="widget">
						<div class="textwidget">
							<div class="single-service-contact">
								<div class="img-wrap">
									<img src="assets/images/traceybrown2.2019-11-2813-30.gif" alt="" title="">
								</div>
								<div class="single-service-contact-inner">
									<div class="iconbox">
										<span class="mbr-iconfont mbr-iconfont-btn sli-earphones-alt"></span>
									</div>
									<h2 class="align-center mbr-bold mbr-fonts-style display-2">Book an Appointment</h2>
									<p class="mbr-text mbr-fonts-style align-center display-7"></p>
									<div class="mbr-section-btn align-center"><a class="btn btn-lg btn-white display-4" href="Candidates.html#top">BOOK NOW</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="tab-content">
						<?php if (isset($practices)) {

							foreach ($practices as $record) {
						?>
								<div id="tab<?= $record->id ?>" class="tab-pane in active" role="tabpanel">
									<div class="row">
										<div class="col-md-12">
											<img src="<?= $record->image->data->full_url; ?>" alt="" title="">
											<h2 class="mbr-fonts-style mbr-section-title align-left mbr-bold display-5"><?= $record->title; ?></h2>

											<?= $record->details; ?>



										</div>
									</div>
								</div>


						<?php
							}
						}
						?>


					</div>
				</div>
			</div>
		</div>

	</section>

	<section class="carousel slide testimonials-slider features4 cid-rSb9Xi0Evp" data-interval="false" id="features4-4">





		<div class="container text-center">

			<h3 class="mbr-section-subtitle mbr-fonts-style align-center mbr-bold display-4">OUR PHILOSOPHY</h3>

			<h2 class="mbr-fonts-style mbr-section-title align-center mbr-bold display-2">
				Experience, Trust, and Proven Success
			</h2>
			<p class="mbr-text mbr-fonts-style align-center mbr-regular display-7">
				Leo duis ut diam quam nulla porttitor massa id neque. Sed risus pretium quam vulputate. Habitasse platea
				dictumst vestibulum rhoncus est pellentesque elit ullamcorper.</p>
		</div>
		<div class="carousel slide container" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="5000">
			<div class="carousel-inner">


				<div class="carousel-item">
					<div class="row justify-content-center">

						<div class="col-md-4">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/01.jpg" title="">

								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-image-blur-on"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">A softer touch</h4>
								<div class="mbr-text mbr-fonts-style align-center card-text display-7">
									<p>No suffering from gum disease.</p>
								</div>

							</div>
						</div>

						<div class="col-md-4 d-none d-md-block">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/02.jpg" title="">
								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-communication-invert-colors-on"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">No judgement ever</h4>
								<div class="mbr-text mbr-fonts-style align-center card-text display-7">
									No failed implant.</div>

							</div>
						</div>

						<div class="col-md-4 d-none d-md-block">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/03.jpg" title="">
								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-action-wallet-giftcard"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">Zero waiting</h4>
								<div class="mbr-text mbr-fonts-style align-center card-text display-7">
									No missing tooth.</div>

							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row justify-content-center">
						<div class="col-md-4">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/04.jpg" title="">
								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-editor-format-paint"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">Testimonials</h4>
								<div class="mbr-text mbr-fonts-style align-center card-text display-7">
									We see excellent results with electric toothbrushes
								</div>

							</div>
						</div>

						<div class="col-md-4 d-none d-md-block">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/05.jpg" title="">
								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-av-radio"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">Forms</h4>
								<div class="mbr-text mbr-fonts-style align-center card-text display-7">
									There are also tiny brushes that clean between your teeth
								</div>

							</div>
						</div>

						<div class="col-md-4 d-none d-md-block">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/06.jpg" title="">
								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-action-thumbs-up-down"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">New Patients</h4>
								<div class="mbr-text mbr-fonts-style align-center card-text display-7">
									If these are used improperly you could injure the gums</div>

							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row justify-content-center">
						<div class="col-md-4">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/04.jpg" title="">
								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-editor-format-paint"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">Testimonials</h4>
								<div class="mbr-text mbr-fonts-style align-center card-text display-7">
									We see excellent results with electric toothbrushes
								</div>

							</div>
						</div>

						<div class="col-md-4 d-none d-md-block">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/05.jpg" title="">
								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-av-radio"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">Forms</h4>
								<div class="mbr-text mbr-fonts-style align-center card-text display-7">
									There are also tiny brushes that clean between your teeth
								</div>

							</div>
						</div>

						<div class="col-md-4 d-none d-md-block">
							<div class="card">
								<div class="card-img">
									<img src="assets/images/06.jpg" title="">
								</div>
								<div class="service-icon">
									<div class="service-icon-wrapper">
										<span class="front mbr-iconfont mdi-action-thumbs-up-down"></span>
									</div>
								</div>
								<h4 class="mbr-fonts-style signature mbr-bold align-center display-7">New Patients</h4>
								<div class="mbr-text mbr-fonts-style align-center card-text display-7">
									If these are used improperly you could injure the gums</div>

							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-indicators">
				<li data-slide-to="0" class="active"></li>
				<li data-slide-to="1"></li>
				<li data-slide-to="2"></li>







			</div>

			<div class="carousel-controls">
				<a class="carousel-control-prev" role="button" data-slide="prev">
					<span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
					<span class="sr-only">Previous</span>
				</a>

				<a class="carousel-control-next" role="button" data-slide="next">
					<span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

	</section>

	<section class="progress-bars-2 cid-rSb9XEn0Np mbr-parallax-background" id="progress-bars2-5">



		<div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(16, 52, 166);">
		</div>

		<div class="main container">
			<div class="row">
				<div class="row content-row col-lg-5">
					<h3 class="mbr-section-subtitle mbr-fonts-style align-center mbr-bold display-4">OUR EXPERIENCE</h3>
					<h2 class="mbr-section-title mbr-fonts-style mbr-bold align-left display-2">Periodontal Therapy Skills.</h2>

					<div class="video-wrap d-flex align-items-center w-100 justify-content-center">
						<div class="mbr-media show-modal align-center d-flex align-items-center" data-modal=".modalWindow">
							<div class="icon-wrap">
								<span class="mbr-iconfont fa-play fa"></span>
							</div>
						</div>
						<h4 class="video-text mbr-fonts-style align-self-center ml-3 my-auto display-4">
							See our video
						</h4>
					</div>
				</div>

				<div class="second-col col-lg-7">
					<!--  pt-5 mt-2 -->
					<div class="row justify-content-center">
						<div class="card align-center">
							<div class="wrap">
								<div class="pie_progress progress1" role="progressbar" data-goal="72">
									<p class="pie_progress__number mbr-fonts-style mbr-bold display-5">
										100%</p>
								</div>
							</div>
							<div class="mbr-crt-title pt-3">
								<h4 class="card-title py-2 mbr-fonts-style mbr-semibold display-4">
									Cosmetic Care</h4>
							</div>
						</div>

						<div class="card align-center">
							<div class="wrap">
								<div class="pie_progress progress2" role="progressbar" data-goal="79">
									<p class="pie_progress__number mbr-fonts-style mbr-bold display-5">56%
									</p>
								</div>
							</div>
							<div class="mbr-crt-title pt-3">
								<h4 class="card-title py-2 mbr-fonts-style mbr-semibold display-4">
									Extractions</h4>
							</div>
						</div>

						<div class="card align-center">
							<div class="wrap">
								<div class="pie_progress progress3" role="progressbar" data-goal="86">
									<p class="pie_progress__number mbr-fonts-style mbr-bold display-5">53%
									</p>
								</div>
							</div>
							<div class="mbr-crt-title pt-3">
								<h4 class="card-title py-2 mbr-fonts-style  mbr-semibold display-4">
									Implants</h4>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
		<div>
			<div class="modalWindow" style="display: none;">
				<div class="modalWindow-container">
					<div class="modalWindow-video-container">
						<div class="modalWindow-video">
							<iframe width="100%" height="100%" frameborder="0" allowfullscreen="1" data-src="https://www.youtube.com/watch?v=J21qu_vspfg"></iframe>
						</div>
						<a class="close" role="button" data-dismiss="modal">
							<span aria-hidden="true" class="mbri-close mbr-iconfont closeModal"></span>
							<span class="sr-only">Close</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="tabs1 cid-rSbaWNDWqC" id="tabs1-6">




		<div class="container">
			<div class="top-part">
				<h3 class="mbr-section-subtitle mbr-fonts-style align-center mbr-bold display-4">OUR PHILOSOPHY</h3>

				<h1 class="mbr-fonts-style mbr-section-title align-center mbr-bold display-2">Family of valued patients.</h1>
			</div>
			<div class="row">
				<div class="col-12 col-md-12">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item first"><a class="nav-link mbr-fonts-style show active display-7" role="tab" data-toggle="tab" href="#tabs1-6_tab0" aria-selected="true"><span class="mdi-action-info-outline mbr-iconfont mbr-iconfont-btn"></span>Metal Braces</a></li>
						<li class="nav-item"><a class="nav-link mbr-fonts-style show active display-7" role="tab" data-toggle="tab" href="#tabs1-6_tab1" aria-selected="true">
								<span class="mdi-av-my-library-add mbr-iconfont mbr-iconfont-btn"></span>Wisdom Teeth Surgery</a></li>
						<li class="nav-item"><a class="nav-link mbr-fonts-style show display-7" role="tab" data-toggle="tab" href="#tabs1-6_tab2" aria-selected="false">
								<span class="mdi-image-healing mbr-iconfont mbr-iconfont-btn"></span>Conventional Implants</a></li>
						<li class="nav-item"><a class="nav-link mbr-fonts-style show active display-7" role="tab" data-toggle="tab" href="#tabs1-6_tab3" aria-selected="true">
								<span class="mdi-action-swap-vert-circle mbr-iconfont mbr-iconfont-btn"></span>Root Canal Treatment</a></li>


					</ul>
					<div class="tab-content">
						<div id="tab1" class="tab-pane in active" role="tabpanel">
							<div class="row">
								<div class="col-md-6">
									<img src="assets/images/mbr-1380x1084.jpg" alt="" title="">
								</div>
								<div class="col-md-6">
									<h2 class="mbr-fonts-style mbr-section-title align-center mbr-bold display-5">
										Say everything with your smile.</h2>
									<p class="mbr-text pt-4 mbr-fonts-style display-7">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore t dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum
										dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
										labore t dolore magna aliqua.
									</p>
									<div class="mbr-list mbr-fonts-style display-4">
										<ul class="list">
											<li>Tight Schedule? No worries!</li>
											<li>Committed to Quality Materials</li>
											<li>Healthy Smiles Radiate Confidence</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div id="tab2" class="tab-pane" role="tabpanel">
							<div class="row">
								<div class="col-md-6">
									<img src="assets/images/06.jpg">
								</div>
								<div class="col-md-6">
									<h2 class="mbr-fonts-style mbr-section-title align-center mbr-bold display-5">Here's the deal.</h2>
									<p class="mbr-text pt-4 mbr-fonts-style display-7">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore t dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum
										dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
										labore t dolore magna aliqua.
									</p>
									<div class="mbr-list mbr-fonts-style display-4">
										<ul class="list">
											<li>Book an appointment online.</li>
											<li>Choose from one of our 4 locations</li>
											<li>Find a time that works.
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div id="tab3" class="tab-pane" role="tabpanel">
							<div class="row">
								<div class="col-md-6">
									<img src="assets/images/07.jpg">
								</div>
								<div class="col-md-6">
									<h2 class="mbr-fonts-style mbr-section-title align-center mbr-bold display-5">A healthy smile is a happy smile.</h2>
									<p class="mbr-text pt-4 mbr-fonts-style display-7">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore t dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum
										dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
										labore t dolore magna aliqua.
									</p>
									<div class="mbr-list mbr-fonts-style display-4">
										<ul class="list">
											<li>Checkups and exams</li>
											<li>Fillings and crowns</li>
											<li>Dental Crowns</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div id="tab4" class="tab-pane" role="tabpanel">
							<div class="row">
								<div class="col-md-6">
									<img src="assets/images/08.jpg">
								</div>
								<div class="col-md-6">
									<h2 class="mbr-fonts-style mbr-section-title align-center mbr-bold display-5">
										Patient safety is the main concern
									</h2>
									<p class="mbr-text pt-4 mbr-fonts-style display-7">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore t dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum
										dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
										labore t dolore magna aliqua.
									</p>
									<div class="mbr-list mbr-fonts-style display-4">
										<ul class="list">
											<li>Invisalign</li>
											<li>Implants</li>
											<li>Dental Crowns</li>
										</ul>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
	</section>




	<?php



	if (isset($ourteam)) {
	?> <section class="team1 cid-rSbcpd8ZX6" id="team1-7">
			<div class="container">
				<h3 class="mbr-section-subtitle mbr-fonts-style align-center mbr-bold display-4">OUR TEAM</h3>

				<h2 class="mbr-fonts-style mbr-section-title mbr-bold display-2"><?= $ourteam->title; ?></h2>
				<p class="mbr-text mbr-fonts-style align-center display-7"> <?= $ourteam->brief; ?></p>
				<div class="row justify-content-center">

					<?php
					if (isset($ourteam->members)) {
						$members = $ourteam->members;

						foreach ($members as $record) {
					?>
							<div class="card col-sm-6 col-md-4 mt-5 col-lg-4 col-lg-3">
								<div class="card-wrap">
									<div class="card-img">
										<img class="img-icon" src="assets/images/face1.jpg" alt="">
									</div>
									<div class="card-box align-center">
										<h4 class="card-title mbr-fonts-style mbr-bold display-7">Michael Miles</h4>
										<h5 class="user-desc mbr-fonts-style display-4">
											GENERAL DENTIST</h5>

										<div class="social-list justify-content-center">
											<div class="soc-item">
												<a href="https://twitter.com/mobirise" target="_blank">
													<span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social mobi-mbri"></span>
												</a>
											</div>
											<div class="soc-item">
												<a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
													<span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social mobi-mbri"></span>
												</a>
											</div>
											<div class="soc-item">
												<a href="https://instagram.com/mobirise" target="_blank">
													<span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social mobi-mbri"></span>
												</a>
											</div>

										</div>
									</div>
								</div>
							</div>
					<?php
						}
					}
					?>




					<div class="card col-sm-6 col-md-4 align-center mt-5 col-lg-4 col-lg-3">
						<div class="card-wrap">
							<div class="card-img ">
								<img class="img-icon" src="assets/images/face2.jpg" alt="">
							</div>
							<div class="card-box">
								<h4 class="card-title mbr-fonts-style mbr-bold display-7">
									Helen Lewis</h4>
								<h5 class="user-desc mbr-fonts-style display-4">
									COSMETIC DENTIST</h5>

								<div class="social-list justify-content-center">
									<div class="soc-item">
										<a href="https://twitter.com/mobirise" target="_blank">
											<span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social mobi-mbri"></span>
										</a>
									</div>
									<div class="soc-item">
										<a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
											<span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social mobi-mbri"></span>
										</a>
									</div>
									<div class="soc-item">
										<a href="https://instagram.com/mobirise" target="_blank">
											<span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social mobi-mbri"></span>
										</a>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="card col-sm-6 col-md-4 align-center mt-5 col-lg-4 col-lg-3">
						<div class="card-wrap">
							<div class="card-img ">
								<img class="img-icon" src="assets/images/face3.jpg" alt="">
							</div>
							<div class="card-box">
								<h4 class="card-title mbr-fonts-style mbr-bold display-7">
									Daniel Kennedy</h4>
								<h5 class="user-desc mbr-fonts-style display-4">IMPLANTS SPECIALIST</h5>

								<div class="social-list justify-content-center">
									<div class="soc-item">
										<a href="https://twitter.com/mobirise" target="_blank">
											<span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social mobi-mbri"></span>
										</a>
									</div>
									<div class="soc-item">
										<a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
											<span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social mobi-mbri"></span>
										</a>
									</div>
									<div class="soc-item">
										<a href="https://instagram.com/mobirise" target="_blank">
											<span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social mobi-mbri"></span>
										</a>
									</div>

								</div>
							</div>
						</div>
					</div>




				</div>
			</div>
		</section>
	<?php
	}
	?>




	<section class="info1 cid-rSbcpvqg12" id="info1-8">



		<div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(16, 52, 166);">
		</div>

		<div class="container align-center">
			<div class="row justify-content-md-center">
				<div class="col-md-8">
					<div class="wrap d-flex">
						<div class="img">
							<span class="mbr-iconfont mdi-notification-event-available"></span>
						</div>
						<div class="wrap-text d-flex flex-column ml-4">
							<p class="mbr-text align-left mbr-fonts-style mbr-bold display-7">
								SPECIAL OFFER
							</p>
							<h1 class="mbr-section-title align-left mbr-bold mbr-fonts-style display-2">Get a free medical
								checkup</h1>
						</div>
					</div>
				</div>
				<div class="col-md-4 align-self-center">
					<div class="mbr-section-btn"><a class="btn btn-md btn-white-outline display-4" href="<?= base_url(); ?>#extContacts3-9">CONTACT US</a></div>
				</div>
			</div>
		</div>


	</section>

	<section class="extClients cid-rSbcrxkFw2" id="clients1-a">
		<!-- Block parameters controls (Blue "Gear" panel) -->

		<!-- End block parameters -->
		<div class="container-fluid">
			<div class="row justify-content-space-between">
				<div class="col-md-12">

				</div>
				<div class="col-lg-1 col-md-3 card">
					<img src="assets/images/1.png">
				</div>
				<div class="col-lg-1 col-md-3 card">
					<img src="assets/images/2.png">
				</div>
				<div class="col-lg-1 col-md-3 card">
					<img src="assets/images/3.png">
				</div>
				<div class="col-lg-1 col-md-3 card">
					<img src="assets/images/4.png">
				</div>
				<div class="col-lg-1 col-md-3 card">
					<img src="assets/images/5.png">
				</div>



			</div>
		</div>
	</section>

	<section class="timeline1 cid-rSbcrP70zJ" id="timeline1-b">

		<!-- Who We are Section -->

		<div class="container align-center">
			<h3 class="mbr-subtitle mbr-fonts-style mbr-bold display-5">WHO WE ARE</h3>



			<div class="timelines-container" mbri-timelines="">

				<?php

				function cmp($a, $b)
				{
					return strcmp($a->year, $b->year);
				}



				if (isset($whoweare)) {

					usort($whoweare, "cmp");

					foreach ($whoweare as $record) {

				?>
						<!--1-->
						<div class="row timeline-element first-separline separline">
							<div class="timeline-date-panel col-xs-12 col-md-3 align-left">
								<div class="time-line-date-content">
									<div class="mbr-figure">
										<img src="<?= $record->featured_image->data->full_url ?>" alt="<?= $record->title; ?>" title="<?= $record->title; ?>">
									</div>

								</div>
							</div>
							<div class="date col-xs-12 col-md-2">
								<p class="mbr-timeline-date mbr-fonts-style display-7">
									<?= $record->year; ?>
								</p>
							</div>
							<span class="iconBackground"></span>
							<div class="col-xs-12 col-md-7">
								<div class="timeline-text-content">
									<h4 class="mbr-timeline-title mbr-fonts-style display-5"> <?= $record->title; ?></h4>

									<p class="mbr-timeline-text mbr-fonts-style display-7">
										<?= $record->details; ?>
									</p>
								</div>
							</div>
						</div>


				<?php
					}
				}

				?>



			</div>
		</div>
	</section>

	<section class="extFooter cid-s9KNLdXsZJ" id="extContacts3-9">





		<div class="container">
			<div class="row content justify-content-center mbr-black">
				<div class="col-12 col-md-6 col-lg-4 first-column pb-3">
					<div class="address">
						<h3 class="address-title mbr-fonts-style pb-2 display-5">
							Address
						</h3>
						<p class="address-block mbr-fonts-style pb-3 display-7">
							1234 Street Name<br>
							City, AA 99999
						</p>
					</div>
					<div class="contacts">
						<h3 class="contacts-title mbr-fonts-style pb-2 display-5">
							Contacts
						</h3>
						<p class="contacts-block mbr-fonts-style pb-3 display-7">
							Email: info@site.com<br>
							Phone: +1 (0) 000 0000 001<br>
							Fax: +1 (0) 000 0000 002
						</p>
					</div>
					<div class="social-list align-left">
						<h3 class="follow-title mbr-fonts-style pb-2 display-5">
							Follow Us</h3>
						<div class="soc-item">
							<a href="https://twitter.com/mobirise" target="_blank">
								<span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon" style="color: rgb(16, 52, 166); fill: rgb(16, 52, 166);"></span>
							</a>
						</div>
						<div class="soc-item">
							<a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
								<span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" style="color: rgb(16, 52, 166); fill: rgb(16, 52, 166);"></span>
							</a>
						</div>
						<div class="soc-item">
							<a href="https://www.youtube.com/c/mobirise" target="_blank">
								<span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon" style="color: rgb(16, 52, 166); fill: rgb(16, 52, 166);"></span>
							</a>
						</div>
						<div class="soc-item">
							<a href="https://instagram.com/mobirise" target="_blank">
								<span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon" style="color: rgb(16, 52, 166); fill: rgb(16, 52, 166);"></span>
							</a>
						</div>


					</div>
				</div>
				<div class="form-block col-sm-12 col-md-5 col-lg-4">
					<h3 class="form-title pb-3 mbr-fonts-style display-5">
						Contact Us
					</h3>
					<div class="form-1" data-form-type="formoid">
						<!---Formbuilder Form--->
						<form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="My Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="2GMHUa8YohWesvKNZMdogStFZCytEpDHi/CxCbp4lb74AZ+AGeY1TWJBld0aqHQ9EQ1HG4z+FyWvfc78mmP8nh+Lko0uJVbTGx4x6DeiYp49/0RmeYRRfyrlV4RB1MYO.a3Igmj37vzIt0NMjL5AETBRC+u+1FK5y5HZzPQdEZPo1YHjPI9RMkn667n5+bSXtS8bms2RyVjK4jZ+CIAR+JYmM+47E+QbkwPiStr0SVjGjmnktRpLk2JA8EmWlwtYC">
							<div class="row">
								<div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
								<div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
								</div>
							</div>
							<div class="dragArea row">
								<div class="col-md-12 form-group" data-for="name">
									<input type="text" name="name" placeholder="Name" data-form-field="Name" required="required" class="form-control display-7" id="name-extContacts3-9">
								</div>
								<div class="col-md-12 form-group" data-for="email">
									<input type="text" name="email" placeholder="E-mail" data-form-field="E-mail" required="required" class="form-control display-7" id="email-extContacts3-9">
								</div>

								<div data-for="message" class="col-md-12 form-group">
									<textarea name="message" placeholder="Message" data-form-field="Message" class="form-control display-7" id="message-extContacts3-9"></textarea>
								</div>
								<div class="col-md-12 input-group-btn"><button type="submit" class="btn btn-form btn-primary-outline display-4">Send</button></div>
							</div>
						</form>
						<!---Formbuilder Form--->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="mbr-section form2 cid-rSbcs4in9i" id="form2-c">





		<div class="container">
			<div class="row py-2 justify-content-center">
				<div class="col-lg-4">
					<div class="brand">
						<span class="logo">
							<a href="#">
								<img src="assets/images/logo0.png" alt="" style="height: 3.8rem;">
							</a>
						</span>
						<span class="caption-wrap"><a href="#" class="brand-link mbr-white mbr-bold display-5">Ultra Aligner</a></span>
					</div>
				</div>
				<div class="col-lg-5 align-self-center" data-form-type="formoid">
					<!---Formbuilder Form--->
					<form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="WctDvLr+pk0QHfXpcXxX9s9eVRMsCLCf3fQ7tKIPWzmgs7XiWOzlHOku35GghvxIjXqJc2ZpaxI3eUG4BkGqIISvdWX4BrVwBy5u0Z4Lo114IPqcWdeRiF/wRl1DHEfo.1vmDfMdAm9QQ5Ulk91HCJFykmvKIudc+LYDin/dzYhog5Kn6mZa4HCE8tTe3tPi1I0rQZjgt2YNyeOctnVRkpam45cscrodjbMWxaZzq+2XTVqM2DqYRFey2BhXyfucI">
						<div class="form-row">
							<div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out
								the form!</div>
							<div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"></div>
						</div>
						<div class="dragArea form-row">
							<div class="col form-group " data-for="email">
								<input type="email" name="email" placeholder="Your email address" data-form-field="Email" required="required" class="form-control display-7" id="email-form2-c">
							</div>
							<div class="col-auto input-group-btn">
								<button type="submit" class="btn btn-primary btn-bgr display-4">SUBSCRIBE</button>
							</div>
						</div>
					</form>
					<!---Formbuilder Form--->
				</div>
				<div class="col-lg-3">
					<div class="social-list h-100 align-items-center">
						<div class="soc-item">
							<a href="https://twitter.com/mobirise" target="_blank">
								<span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>
							</a>
						</div>
						<div class="soc-item">
							<a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
								<span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
							</a>
						</div>
						<div class="soc-item">
							<a href="https://www.youtube.com/c/mobirise" target="_blank">
								<span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon"></span>
							</a>
						</div>
						<div class="soc-item">
							<a href="#" target="_blank">
								<span class="mbr-iconfont mbr-iconfont-social socicon-telegram socicon"></span>
							</a>
						</div>




					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="footer1 cid-rU2mRVEMcQ" id="footer1-0">




		<div class="container">
			<div class="media-container-row content text-white">

				<div class="col-12 col-md-6 col-lg-3">
					<h5 class="align-left widget-title mbr-semibold mbr-fonts-style display-7">
						ABOUT US</h5>
					<div class="line-wrap align-left">
						<div class="line"></div>
					</div>
					<p class="mbr-text mbr-normal mbr-fonts-style display-4">
						Contrary to popular belief, Lorem simply random text. It has roots in a piece of classical Latin
						literature.</p>
					<div class="item">
						<div class="card-img"><span class="mbr-iconfont img1 mobi-mbri-map-pin mobi-mbri"></span>
						</div>
						<div class="card-box">
							<h4 class="item-title align-left mbr-fonts-style display-4">Address: 7654 Street Name</h4>
						</div>
					</div>
					<div class="item">
						<div class="card-img"><span class="mbr-iconfont img1 mdi-communication-phone"></span></div>
						<div class="card-box">
							<h4 class="item-title align-left mbr-fonts-style display-4">Phone: +(999) 5554432</h4>
						</div>
					</div>
					<div class="item">
						<div class="card-img"><span class="mbr-iconfont img1 mobi-mbri-letter mobi-mbri"></span>
						</div>
						<div class="card-box">
							<h4 class="item-title align-left mbr-fonts-style display-4">
								Email: ex@yourmail.com</h4>
						</div>
					</div>


				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<h5 class="align-left widget-title mbr-semibold mbr-fonts-style display-7">
						COMPANY</h5>
					<div class="line-wrap align-left">
						<div class="line"></div>
					</div>

					<div class="link">
						<div class="card-img"><span class="mbr-iconfont img2 mobi-mbri-arrow-next mobi-mbri"></span>
						</div>
						<div class="card-box">
							<h4 class="link-title align-left mbr-fonts-style display-4"><a href="#" class="text-white mbr-fonts-style">About
									Us</a></h4>
						</div>
					</div>
					<div class="link">
						<div class="card-img"><span class="mbr-iconfont img2 mobi-mbri-arrow-next mobi-mbri"></span></div>
						<div class="card-box">
							<h4 class="link-title align-left mbr-fonts-style display-4"><a href="#" class="text-white">Company</a></h4>
						</div>
					</div>
					<div class="link">
						<div class="card-img"><span class="mbr-iconfont img2 mobi-mbri-arrow-next mobi-mbri"></span>
						</div>
						<div class="card-box">
							<h4 class="link-title align-left mbr-fonts-style display-4"><a href="#" class="text-white">
									Press &amp; Blog</a></h4>
						</div>
					</div>

					<div class="link">
						<div class="card-img"><span class="mbr-iconfont img2 mobi-mbri-arrow-next mobi-mbri"></span>
						</div>
						<div class="card-box">
							<h4 class="link-title align-left mbr-fonts-style display-4"><a href="#" class="text-white">Privacy
									Policy</a></h4>
						</div>
					</div>

					<div class="link">
						<div class="card-img"><span class="mbr-iconfont img2 mobi-mbri-arrow-next mobi-mbri"></span>
						</div>
						<div class="card-box">
							<h4 class="link-title align-left mbr-fonts-style display-4"><a href="#" class="text-white">Faq</a>
							</h4>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<h5 class="align-left widget-title mbr-semibold mbr-fonts-style display-7">
						LATEST POSTS</h5>
					<div class="line-wrap align-left">
						<div class="line"></div>
					</div>
					<div class="list">
						<div class="list-item d-flex">
							<img class="tips" src="assets/images/benefits-invisalign-hcp.gif" alt="" title="">
							<div class="content d-flex flex-column justify-content-center">
								<h4 class="link-wrap mbr-fonts-style display-4">Dental Hygien for
									children
								</h4>
								<h4 class="date-wrap mbr-fonts-style display-4">February 25, 2020
								</h4>
							</div>
						</div>
						<div class="list-item d-flex">
							<img class="tips" src="assets/images/traceybrown2.2019-11-2813-30.gif" alt="" title="">
							<div class="content d-flex flex-column justify-content-center">
								<h4 class="link-wrap mbr-fonts-style display-4">Improvements In
									Technology
								</h4>
								<h4 class="date-wrap mbr-fonts-style display-4">February 21, 2020
								</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<h5 class="align-left widget-title mbr-semibold mbr-fonts-style display-7">
						OPENING HOURS</h5>
					<div class="line-wrap align-left">
						<div class="line"></div>
					</div>
					<div class="box-list mbr-fonts-style display-4">








						<li class="clearfix">Mon - Tue<span>11.00 - 19.00</span></li>
						<li class="clearfix">Wed - Thur<span>09.30 - 16.30</span></li>
						<li class="clearfix">Fri - Sat<span>11.30 - 20.00</span></li>
						<li class="clearfix">Saturday<span>10.30 - 12.00</span></li>
						<li class="clearfix">Sunday<span>Closed</span></li>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="footer2 cid-rSbcsFlJOV" id="footer2-e">





		<div class="container">

			<div class="row">
				<div class="col-sm-12">
					<p class="mbr-text links mbr-fonts-style display-4">
						© Copyright 2020 <a href="#">Ultra Aligner</a> - All Rights
						Reserved
					</p>
				</div>
			</div>
		</div>
	</section>


	<script src="<?= base_url() ?>assets/web/assets/jquery/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/popper/popper.min.js"></script>
	<script src="<?= base_url() ?>assets/tether/tether.min.js"></script>
	<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets/web/assets/cookies-alert-plugin/cookies-alert-core.js"></script>
	<script src="<?= base_url() ?>assets/web/assets/cookies-alert-plugin/cookies-alert-script.js"></script>
	<script src="<?= base_url() ?>assets/smoothscroll/smooth-scroll.js"></script>
	<script src="<?= base_url() ?>assets/dropdown/js/nav-dropdown.js"></script>
	<script src="<?= base_url() ?>assets/dropdown/js/navbar-dropdown.js"></script>
	<script src="<?= base_url() ?>assets/touchswipe/jquery.touch-swipe.min.js"></script>
	<script src="<?= base_url() ?>assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
	<script src="<?= base_url() ?>assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
	<script src="<?= base_url() ?>assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
	<script src="<?= base_url() ?>assets/parallax/jarallax.min.js"></script>
	<script src="<?= base_url() ?>assets/playervimeo/vimeo_player.js"></script>
	<script src="<?= base_url() ?>assets/formstyler/jquery.formstyler.js"></script>
	<script src="<?= base_url() ?>assets/formstyler/jquery.formstyler.min.js"></script>
	<script src="<?= base_url() ?>assets/datepicker/jquery.datetimepicker.full.js"></script>
	<script src="<?= base_url() ?>assets/theme/js/script.js"></script>
	<script src="<?= base_url() ?>assets/slidervideo/script.js"></script>
	<script src="<?= base_url() ?>assets/formoid.min.js"></script>



	<input name="cookieData" type="hidden" data-cookie-customDialogSelector='null' data-cookie-colorText='#424a4d' data-cookie-colorBg='rgba(234, 239, 241, 0.99)' data-cookie-textButton='Agree' data-cookie-colorButton='' data-cookie-colorLink='#424a4d' data-cookie-underlineLink='true' data-cookie-text="We use cookies to give you the best experience. Read our <a href='privacy.html'>cookie policy</a>.">
	<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>

</body>

</html>
