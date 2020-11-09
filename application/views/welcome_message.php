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

	<section class="title1 medicalm4_title1 cid-seKioa1EGj" id="title1-1k">


		<div class="container align-center">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="wrap d-flex flex-column align-items-center">

						<h1 class="mbr-section-title align-center mbr-fonts-style display-5">
							Our Products</h1>
						<p class="mbr-text align-center pt-4 mbr-fonts-style display-7">Learn more about our wide range of alingers and how they can best fit your needs.</p>
						<div class="buttons-wrap w-100 mt-4">

						</div>
					</div>
				</div>
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
			<section class="extСontent cid-sfn472e9tx" id="extContent7-27">


				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 img-col order-2">
							<a href="<?= base_url() ?>getstarted"><img src="assets/images/woman-putting-in-invisalign-scaled-1380x920.jpg" alt="Ultra Aligners"></a>


						</div>

						<div class="col-lg-6 text-col align-left">
							<h3 class="mbr-section-subtitle mbr-regular pb-2 mbr-fonts-style display-2"><strong>Standard Aligners</strong></h3>
							<h1 class="mbr-section-title mbr-semibold pb-4 mbr-fonts-style display-7"><strong>New smile time: Avg. 4-6 months</strong>
								<div><strong>Hours: - 22 hours per day</strong></div>
							</h1>
							<p class="mbr-text mbr-black mbr-regular mbr-light mbr-fonts-style display-7">At Ultra Aligners we work at the highest medical level. Thanks to our app, we can provide you with the best service and can help you to achieve the best possible results.</p>
						</div>
					</div>
				</div>

			</section>
	<?php
		}
	}
	?>



	<section class="features2 medicalm4_features2 cid-seD4CHJ5LV" id="features2-10">





		<div class="container">
			<div class="contents">

				<h1 class="mbr-section-title mbr-fonts-style mbr-bold display-2">Treatable Cases&nbsp;</h1>
				<h2 class="mbr-section-text mbr-fonts-style mbr-light display-7">We generally treat mild and moderate malocclusions. Your dentists will give you an accurate diagnosis:</h2>
			</div>
			<div class="row justify-content-center">
				<div class="card p-3 col-12 col-md-6 col-lg-3">
					<div class="card-wrapper">
						<div class="card-img">
							<a href="getstarted.html"><img src="assets/images/invisalign-gap-4-315x315.jpeg" alt="Ultra Aligners" title=""></a>
							<div class="mbr-link-btn meta-category"><a class="btn btn-md btn-white-outline display-4" href="#">Gaps</a></div>
						</div>
						<div class="card-box align-left">

							<h4 class="card-title align-left mbr-fonts-style display-5">Gaps In Teeth</h4>
							<p class="mbr-text align-left mbr-fonts-style display-4">When you have extra space between two or more of your teeth.<br><br><br></p>

							<div class="mbr-link-btn"><a class="btn btn-md btn-info-outline display-4" href="getstarted.html"><span class="mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>LEARN MORE</a></div>

						</div>
					</div>
				</div>

				<div class="card p-3 col-12 col-md-6 col-lg-3">
					<div class="card-wrapper">
						<div class="card-img">
							<a href="getstarted.html"><img src="assets/images/reading-smiles-invisalign-crowded-teeth-b1-506x379.jpg" alt="Ultra Aligners" title=""></a>
							<div class="mbr-link-btn meta-category"><a class="btn btn-md btn-white-outline display-4" href="#">Crowded</a></div>
						</div>
						<div class="card-box align-left">

							<h4 class="card-title align-left mbr-fonts-style display-5">Crowded Teeth</h4>
							<p class="mbr-text align-left mbr-fonts-style display-4">If you don't have enough room in your jaw to accommodate your teeth, the teeth can bunch up, overlap and twist, and get pushed to the front or the back.<br> </p>

							<div class="mbr-link-btn"><a class="btn btn-md btn-info-outline display-4" href="getstarted.html"><span class="mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>LEARN MORE</a></div>
						</div>
					</div>
				</div>

				<div class="card p-3 col-12 col-md-6 col-lg-3">
					<div class="card-wrapper">
						<div class="card-img">
							<a href="getstarted.html"><img src="assets/images/problems-that-may-be-associated-with-crooked-teeth-300x229.jpg" alt="Ultra Aligners" title=""></a>
							<div class="mbr-link-btn meta-category"><a class="btn btn-md btn-white-outline display-4" href="#">ORAL</a>
							</div>
						</div>
						<div class="card-box align-left">

							<h4 class="card-title align-left mbr-fonts-style display-5">Teeth Straightening</h4>
							<p class="mbr-text align-left mbr-fonts-style display-4">Teeth straightening for teeth facing in different directions.<br><br><br><br> </p>

							<div class="mbr-link-btn"><a class="btn btn-md btn-info-outline display-4" href="getstarted.html"><span class="mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>LEARN MORE</a></div>
						</div>
					</div>
				</div>

				<div class="card p-3 col-12 col-md-6 col-lg-3">
					<div class="card-wrapper">
						<div class="card-img">
							<a href="getstarted.html"><img src="assets/images/overbite-506x388.jpg" alt="Ultra Aligners" title=""></a>
							<div class="mbr-link-btn meta-category"><a class="btn btn-md btn-white-outline display-4" href="#">COSMETIC</a>
							</div>
						</div>
						<div class="card-box align-left">

							<h4 class="card-title align-left mbr-fonts-style display-5">Overbite
							</h4>
							<p class="mbr-text align-left mbr-fonts-style display-4">An overbite is when your upper front teeth overlap with your lower front teeth.<br><br><br> </p>

							<div class="mbr-link-btn"><a class="btn btn-md btn-info-outline display-4" href="getstarted.html"><span class="mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>LEARN MORE</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="features2 medicalm4_features2 cid-seD9TS9YNg" id="features2-11">





		<div class="container">
			<div class="contents">



			</div>
			<div class="row justify-content-center">
				<div class="card p-3 col-12 col-md-6 col-lg-4">
					<div class="card-wrapper">
						<div class="card-img">
							<a href="getstarted.html"><img src="assets/images/underbite-696x522.jpg" alt="Ultra Aligners" title=""></a>
							<div class="mbr-link-btn meta-category"><a class="btn btn-md btn-white-outline display-4" href="#">Underbite</a></div>
						</div>
						<div class="card-box align-left">

							<h4 class="card-title align-left mbr-fonts-style display-5">Underbite</h4>
							<p class="mbr-text align-left mbr-fonts-style display-4">An underbite is when you bite down and your lower front teeth are in front of your upper teeth. </p>

							<div class="mbr-link-btn"><a class="btn btn-md btn-info-outline display-4" href="getstarted.html"><span class="mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>LEARN MORE</a></div>

						</div>
					</div>
				</div>

				<div class="card p-3 col-12 col-md-6 col-lg-4">
					<div class="card-wrapper">
						<div class="card-img">
							<a href="getstarted.html"><img src="assets/images/crossbite-696x522.jpg" alt="Ultra Aligners" title=""></a>
							<div class="mbr-link-btn meta-category"><a class="btn btn-md btn-white-outline display-4" href="#">Crossbite</a></div>
						</div>
						<div class="card-box align-left">

							<h4 class="card-title align-left mbr-fonts-style display-5">Crossbite</h4>
							<p class="mbr-text align-left mbr-fonts-style display-4">If you bite down and some of your upper teeth are sitting inside your lower teeth rather than on the outside. </p>

							<div class="mbr-link-btn"><a class="btn btn-md btn-info-outline display-4" href="getstarted.html"><span class="mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>LEARN MORE</a></div>
						</div>
					</div>
				</div>

				<div class="card p-3 col-12 col-md-6 col-lg-4">
					<div class="card-wrapper">
						<div class="card-img">
							<a href="getstarted.html"><img src="assets/images/open-bite-696x522.jpg" alt="Ultra Aligners" title=""></a>
							<div class="mbr-link-btn meta-category"><a class="btn btn-md btn-white-outline display-4" href="#">Open bite</a></div>
						</div>
						<div class="card-box align-left">

							<h4 class="card-title align-left mbr-fonts-style display-5">Open bite</h4>
							<p class="mbr-text align-left mbr-fonts-style display-4">If your upper and lower teeth don't touch when you bite down.<br><br></p>

							<div class="mbr-link-btn"><a class="btn btn-md btn-info-outline display-4" href="getstarted.html"><span class="mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>LEARN MORE</a></div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>



	<section class="extСontent cid-sfmHAPqXfa" id="extContent5-22">

		<div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(16, 52, 166);">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-12">
					<div class="content-wrapper align-left">
						<h3 class="mbr-section-subtitle mbr-light mbr-white pb-3 mbr-fonts-style display-5"><strong>INSTALLMENT&nbsp;</strong>/ Special Offers</h3>
						<h1 class="mbr-section-title mbr-semibold mbr-white pb-4 mbr-fonts-style display-1">
							Transform your business
						</h1>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="content-wrapper align-left">
						<p class="mbr-text mbr-white mbr-regular mbr-white mbr-fonts-style pt-4 display-7">Lorem ipsum dolor sit amet,
							consectetur adipiscing elit. Aliquam tortor purus, suscipit a accumsan quis, blandit a dolor.
							Morbi quis purus at ipsum tristique varius.</p>
						<div class="mbr-section-btn pt-4"><a class="btn btn-lg btn-white-outline display-4" href="mailto:information@ultraaligners.com"><span class="mobi-mbri mobi-mbri-right mbr-iconfont mbr-iconfont-btn"></span>CONTACT US TO LEARN MORE</a></div>
					</div>
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
					<h1 class="mbr-section-title mbr-bold pb-3 align-center mbr-fonts-style display-2">Our Partners</h1>
				</div>
				<div class="col-lg-1 col-md-3 card">
					<img src="assets/images/1.png" alt="">
				</div>
				<div class="col-lg-1 col-md-3 card">
					<img src="assets/images/2.png" alt="">
				</div>
				<div class="col-lg-1 col-md-3 card">
					<img src="assets/images/3.png" alt="">
				</div>
				<div class="col-lg-1 col-md-3 card">
					<img src="assets/images/4.png" alt="">
				</div>
				<div class="col-lg-1 col-md-3 card">
					<img src="assets/images/5.png" alt="">
				</div>
				<div class="col-lg-1 col-md-3 card">
					<img src="assets/images/2.png" alt="" title="">
				</div>
				<div class="col-lg-1 col-md-3 card">
					<img src="assets/images/1.png" alt="">
				</div>
				<div class="col-lg-1 col-md-3 card">
					<img src="assets/images/2.png" alt="">
				</div>
			</div>
		</div>
	</section>


	<section class="info1 cid-rSbcpvqg12 mbr-parallax-background" id="info1-8">



		<div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(16, 52, 166);">
		</div>

		<div class="container align-center">
			<div class="row justify-content-md-center">
				<div class="col-md-8">
					<div class="wrap d-flex">
						<div class="img">
							<span class="mbr-iconfont mbrib-gift"></span>
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
					<div class="mbr-section-btn"><a class="btn btn-md btn-white-outline display-4" href="index.html#extContacts3-9">CONTACT US</a></div>
				</div>
			</div>
		</div>


	</section>

	<section class="extFooter cid-s9KNLdXsZJ" id="extContacts3-9">





		<div class="container">
			<div class="row content justify-content-center mbr-black">
				<div class="col-12 col-md-6 col-lg-4 first-column pb-3">

					<div class="contacts">
						<h3 class="contacts-title mbr-fonts-style pb-2 display-5">
							Contacts
						</h3>
						<p class="contacts-block mbr-fonts-style pb-3 display-7">
							Email: information@ultraaligners.com<br>
							Phone: <a href="tel:+447795116069" class="text-primary">(+44) 7795116069</a><br></p>
					</div>
					<div class="social-list align-left">
						<h3 class="follow-title mbr-fonts-style pb-2 display-5">
							Follow Us</h3>
						<div class="soc-item">
							<a href="https://twitter.com/" target="_blank">
								<span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon" style="color: rgb(16, 52, 166); fill: rgb(16, 52, 166);"></span>
							</a>
						</div>
						<div class="soc-item">
							<a href="https://www.facebook.com/" target="_blank">
								<span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" style="color: rgb(16, 52, 166); fill: rgb(16, 52, 166);"></span>
							</a>
						</div>
						<div class="soc-item">
							<a href="https://www.instagram.com/" target="_blank">
								<span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon" style="color: rgb(16, 52, 166); fill: rgb(16, 52, 166);"></span>
							</a>
						</div>
						<div class="soc-item">
							<a href="https://wa.me/447795116069">
								<span class="mbr-iconfont mbr-iconfont-social socicon-whatsapp socicon" style="color: rgb(16, 52, 166); fill: rgb(16, 52, 166);"></span>
							</a>
						</div>


					</div>
				</div>
				<div class="form-block col-sm-12 col-md-5 col-lg-4">
					<h3 class="form-title pb-3 mbr-fonts-style display-5">
						Contacts &amp; Inquiries</h3>
					<div class="form-1" data-form-type="formoid">
						<!--Formbuilder Form-->
						<form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="My Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="0n2gI8fE9pUznQs9W6/vraEoLXymUvSmigPh4HLWOV03hudTLkOa1VAxoqGAc4ShszcmSE1AAJw5y/1ewdKuazaAB16ZtYuKBhCba1h003udLA5CcD8UP0yUj9l/fRRd">
							<div class="row">
								<div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
								<div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"> </div>
							</div>
							<div class="dragArea row">
								<div class="col-md-12 form-group" data-for="name">
									<input type="text" name="name" placeholder="Name" data-form-field="Name" required="required" class="form-control display-7" value="" id="name-extContacts3-9">
								</div>
								<div class="col-md-12 form-group" data-for="email">
									<input type="text" name="email" placeholder="E-mail" data-form-field="E-mail" required="required" class="form-control display-7" value="" id="email-extContacts3-9">
								</div>
								<div data-for="phone" class="col-md-12 form-group">
									<input type="text" name="phone" placeholder="Phone" data-form-field="Phone" class="form-control display-7" required="required" value="" id="phone-extContacts3-9">
								</div>
								<div data-for="message" class="col-md-12 form-group">
									<textarea name="message" placeholder="Message" data-form-field="Message" class="form-control display-7" id="message-extContacts3-9"></textarea>
								</div>
								<div class="col-md-12 input-group-btn">
									<button type="submit" class="btn btn-form btn-primary-outline display-4">Send</button>
								</div>
							</div>
							<span class="gdpr-block">
								<label>
									<span class="textGDPR display-7" style="color: #000000"><input type="checkbox" name="gdpr" id="gdpr-extContacts3-9" required="">By continuing you agree to our <a style="color: #000000; text-decoration: underline;" href="terms.html">Terms of Service</a> and <a style="color: #000000; text-decoration: underline;" href="policy.html">Privacy Policy</a>.</span>
								</label>
							</span>
						</form>
						<!--Formbuilder Form-->
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="tabs1 cid-rSbaWNDWqC" id="tabs1-6">





		<section class="mbr-section form2 cid-seKvEcAykr" id="form2-1s">





			<div class="container">
				<div class="row py-2 justify-content-center">
					<div class="col-lg-4">
						<div class="brand">


						</div>
					</div>
					<div class="col-lg-5 align-self-center" data-form-type="formoid">
						<!---Formbuilder Form--->
						<form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="obqA+oA6O+MKhW1tOkV1pLCbEKNjj41iP+GYMjdX/8xO7U3VjPYlZeUm5rzKFB5e9uUJGdEXW1MbzjWt2EEKKAb44vfYjwPxRZsp52osyu40HdD3N69IQ/ZxhMbPxOJ4">
							<div class="form-row">
								<div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
								<div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"></div>
							</div>
							<div class="dragArea form-row">
								<div class="col form-group " data-for="email">
									<input type="email" name="email" placeholder="Your email address" data-form-field="Email" required="required" class="form-control display-7" id="email-form2-1s">
								</div>
								<div class="col-auto input-group-btn"><button type="submit" class="btn btn-primary btn-bgr display-4">SUBSCRIBE</button></div>
							</div>
							<span class="gdpr-block">
								<label>
									<span class="textGDPR display-7" style="color: #000000"><input type="checkbox" name="gdpr" id="gdpr-form2-1s" required="">By continuing you agree to our <a style="color: #000000; text-decoration: underline;" href="terms.html">Terms of Service</a> and <a style="color: #000000; text-decoration: underline;" href="policy.html">Privacy Policy</a>.</span>
								</label>
							</span>
						</form>
						<!---Formbuilder Form--->
					</div>
					<div class="col-lg-3">
						<div class="social-list h-100 align-items-center">
							<div class="soc-item">
								<a href="https://twitter.com/" target="_blank">
									<span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>
								</a>
							</div>
							<div class="soc-item">
								<a href="https://www.facebook.com/" target="_blank">
									<span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
								</a>
							</div>
							<div class="soc-item">
								<a href="https://www.youtube.com" target="_blank">
									<span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
								</a>
							</div>
							<div class="soc-item">

								<span class="mbr-iconfont mbr-iconfont-social socicon-whatsapp socicon"></span>

							</div>




						</div>
					</div>
				</div>
			</div>
		</section>



		<section class="footer03 cid-seKvCCSPx9" id="footer03-1r">





			<div class="container">
				<div class="row align-left mbr-white">

					<div class="col-12 col-md-4 col-lg-3 md-pb">
						<h3 class="col-title col-title1 mbr-bold mbr-fonts-style display-5"><span style="font-weight: normal;">Ultra</span>&nbsp;Aligners</h3>
						<ul class="list">





							<li class="item-wrap align-left">
								<h4 class="item mbr-regular mbr-fonts-style display-4">Journey To Perfect Smile!<br><br>You can contact us any way that is convenient for you. We are available 24/7 via call or email.</h4>
							</li>
						</ul>

					</div>

					<div class="col-12 col-md-4 col-lg-3 md-pb">

						<h3 class="col-title mbr-semibold pb-2 mbr-fonts-style display-7"><strong>Get In Touch</strong></h3>
						<ul class="list">





							<li class="item-wrap">
								<h4 class="item mbr-regular mbr-fonts-style pb-3 display-4">information@ultraaligners.com</h4>
							</li>
						</ul>

					</div>


					<div class="col-12 col-md-4 col-lg-3 md-pb">

						<h3 class="col-title mbr-semibold pb-2 mbr-fonts-style display-7"><strong>Helpful Links</strong></h3>
						<ul class="list">






							<li class="item-wrap">
								<h4 class="item mbr-regular mbr-fonts-style display-4"><a href="https://ultraaligners.com/" class="text-white text-primary">Terms of Use</a></h4>
							</li>
							<li class="item-wrap">
								<h4 class="item mbr-regular mbr-fonts-style display-4"><a href="https://ultraaligners.com/" class="text-white">Privacy Policy</a></h4>
							</li>
							<li class="item-wrap">

								<h4 class="item mbr-regular mbr-fonts-style display-4"><a href="https://ultraaligners.com/" class="text-white">Cookies Policy</a></h4>
							</li>
							<li class="item-wrap">

								<h4 class="item mbr-regular mbr-fonts-style display-4"><a href="getstarted.html" class="text-white">Get Started</a></h4>
							</li>
							<li class="item-wrap">

								<h4 class="item mbr-regular mbr-fonts-style display-4"><a href="index.html" class="text-white text-primary">Ultra Aligners</a></h4>
							</li>
						</ul>

					</div>

					<div class="col-12 col-md-12 col-lg-3 md-pb">

						<h3 class="col-title mbr-semibold pb-2 mbr-fonts-style display-7"><strong>Our Newsletter</strong></h3>
						<h4 class="item mbr-regular mbr-fonts-style display-4">Subscribe to our newsletter to get our news &amp; deals delivered to your
							inbox!</h4>
						<div class="form1" data-form-type="formoid">
							<!---Formbuilder Form--->
							<form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler px-2" data-form-title="My Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="P5i7iayixswbe1mE6m85rLvCqA24lTaHVNToIqBJwKyaGdXlCLb5VK2znrBNpLCOWZOqug6hSNiksbm6QUFauSjSl2Q9qi4Lao4I1hi1O/GPYbwdQaG0ucEB+jQjwQ8Z">
								<div class="row">
									<div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for subscribing to your newsletters.</div>
									<div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"></div>
								</div>
								<div class="dragArea row">
									<div class="form-group col" data-for="email">
										<input type="text" name="email" placeholder="E-mail" data-form-field="E-mail" required="required" class="form-control display-4" id="email-footer03-1r">
									</div>
									<div class="mbr-section-btn"><button type="submit" class="btn btn-sm btn-white-outline display-4">JOIN</button></div>
								</div>
								<span class="gdpr-block">
									<label>
										<span class="textGDPR display-7" style="color: #000000"><input type="checkbox" name="gdpr" id="gdpr-footer03-1r" required="">By continuing you agree to our <a style="color: #000000; text-decoration: underline;" href="terms.html">Terms of Service</a> and <a style="color: #000000; text-decoration: underline;" href="policy.html">Privacy Policy</a>.</span>
									</label>
								</span>
							</form>
							<!---Formbuilder Form--->
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
