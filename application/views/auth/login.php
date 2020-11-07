<?php
$this->load->view("header");
?>

<body>
	<style>
		.alert-danger {
			background-color: #E13300 !important;
		}
	</style>

	<section class="menu02 cid-seKUfbqItn" once="menu" id="menu2-1z">

		<?php
		$this->load->view("nav");
		?>
	</section>
	<section class="title1 medicalm4_title1 cid-seKUf5cpSo" id="title1-1u">



		<div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);">
		</div>

		<div class="container align-center">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="wrap d-flex flex-column align-items-center">

						<h1 class="mbr-section-title align-center mbr-fonts-style display-2">
							Get Started</h1>
						<p class="mbr-text align-center pt-4 mbr-fonts-style display-7">Here’s how Ultra Aligners helps deliver a smile you’ll love - safely, simply, and without monthly office visits. <br>Our clear aligner system is designed for minor to moderate teeth correction.<br>Take 30 seconds to answer these questions and find out if we are the right choice for you.</p>
						<div class="buttons-wrap w-100 mt-4">
							<div class="mbr-section-btn align-center"><a class="btn btn-lg btn-white-outline display-4" href="tel:+447795116069"><span class="mdi-hardware-phone-iphone mbr-iconfont mbr-iconfont-btn" style="font-size: 18px;"></span>Call Us</a> <a class="btn btn-lg btn-white-outline display-4" href="https://wa.me/447795116069"><span class="socicon socicon-whatsapp mbr-iconfont mbr-iconfont-btn" style="font-size: 18px;"></span>Whatsapp</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="form cid-seKUf5JnNO" id="formbuilder-1v">


		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
					<!--Formbuilder Form-->
					<form role="form" method="POST" action="<?= base_url() ?>auth" class="mbr-form form-with-styler">
						<div class="form-row">
							<div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
							<div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some problem!</div>
						</div>
						<div class="dragArea form-row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<h4 class="mbr-fonts-style display-5">
								</h4>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12">

								<div class="container-fluid">

									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									</div>

									<div class="col-md-12  loginformwrapper ">
										<?php
										if (isset($error)) {
										?>
											<div class="alert alert-danger" role="alert"><?= $error; ?></div>
										<?php
										}
										?>

										<h1>LOGIN</h1>
										<form role="form" method="POST" action="<?= base_url() ?>auth">
											<div class="form-group">

												<label for="exampleInputEmail1">
													Username
												</label>
												<input type="email" name="username" class="form-control" id="exampleInputEmail1" />
											</div>
											<div class="form-group">

												<label for="exampleInputPassword1">
													Password
												</label>
												<input type="password" name="password" class="form-control" id="exampleInputPassword1" />
											</div>


											<button type="submit" class="btn btn-primary submitbutton ">
												Submit
											</button>
										</form>
									</div>

								</div>

								<hr>
							</div>



						</div>

					</form>
					<!--Formbuilder Form-->
				</div>
			</div>
		</div>
	</section>

	<section class="extСontent cid-sfoOBQH3TE" id="extContent5-29">

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

	<section class="extClients cid-sfoOPU7l1h" id="clients1-2a">
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

	<section class="mbr-section form2 cid-seKUf8TVBf" id="form2-1w">





		<div class="container">
			<div class="row py-2 justify-content-center">
				<div class="col-lg-4">
					<div class="brand">


					</div>
				</div>
				<div class="col-lg-5 align-self-center" data-form-type="formoid">
					<!---Formbuilder Form--->
					<form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="HtEvZDMi/AycpN6DsVQOXVuEuHP8VKmRXYVCMPOGeesoE5TEOR8YbrzLgKtvpL6pBO2mgVxZkA/WcagcaFTjjaNVynAkiuOiKOfGupVck9v1Tqnqa4qD0bUI6X65uDKO">
						<div class="form-row">
							<div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
							<div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"></div>
						</div>
						<div class="dragArea form-row">
							<div class="col form-group " data-for="email">
								<input type="email" name="email" placeholder="Your email address" data-form-field="Email" required="required" class="form-control display-7" id="email-form2-1w">
							</div>
							<div class="col-auto input-group-btn"><button type="submit" class="btn btn-bgr btn-white-outline display-4">SUBSCRIBE</button></div>
						</div>
						<span class="gdpr-block">
							<label>
								<span class="textGDPR display-7" style="color: #000000"><input type="checkbox" name="gdpr" id="gdpr-form2-1w" required="">By continuing you agree to our <a style="color: #000000; text-decoration: underline;" href="terms.html">Terms of Service</a> and <a style="color: #000000; text-decoration: underline;" href="policy.html">Privacy Policy</a>.</span>
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

	<section class="footer03 cid-seKUf9qA4F" id="footer03-1x">





		<div class="container">
			<div class="row align-left mbr-white">

				<div class="col-12 col-md-4 col-lg-3 md-pb">
					<h3 class="col-title col-title1 mbr-bold mbr-fonts-style display-5"><span style="font-weight: normal;">Ultra</span>&nbsp;Aligners</h3>
					<ul class="list">





						<li class="item-wrap align-left">
							<h4 class="item mbr-regular mbr-fonts-style display-4">Journey To Perfect Smile!<br><br>You can contact us any way that is convenient for you. We are available 24/7 via fax or email.</h4>
						</li>
					</ul>

				</div>

				<div class="col-12 col-md-4 col-lg-3 md-pb">

					<h3 class="col-title mbr-semibold pb-2 mbr-fonts-style display-7"><strong>Get In Touch</strong></h3>
					<ul class="list">





						<li class="item-wrap">
							<h4 class="item mbr-regular mbr-fonts-style pb-3 display-4">Mayfield, Manor Road<br>London, United Kingdom<br>Zip/Post Code: SE25 4TA<br> </h4>
						</li>
						<li class="item-wrap">
							<h4 class="item mbr-regular mbr-fonts-style display-4"><a href="mailto:information@ultraaligners.com" class="text-white">information@ultraaligners.com</a></h4>
						</li>
					</ul>

				</div>


				<div class="col-12 col-md-4 col-lg-3 md-pb">

					<h3 class="col-title mbr-semibold pb-2 mbr-fonts-style display-7"><strong>Helpful Links</strong></h3>
					<ul class="list">






						<li class="item-wrap">
							<h4 class="item mbr-regular mbr-fonts-style display-4">Terms of Use</h4>
						</li>
						<li class="item-wrap">
							<h4 class="item mbr-regular mbr-fonts-style display-4">Privacy Policy</h4>
						</li>
						<li class="item-wrap">

							<h4 class="item mbr-regular mbr-fonts-style display-4">Coockies Policy</h4>
						</li>
						<li class="item-wrap">

							<h4 class="item mbr-regular mbr-fonts-style display-4"><a href="getstarted.html" class="text-white text-primary">Get Started</a></h4>
						</li>
					</ul>

				</div>

				<div class="col-12 col-md-12 col-lg-3 md-pb">

					<h3 class="col-title mbr-semibold pb-2 mbr-fonts-style display-7"><strong>Our Newsletter</strong></h3>
					<h4 class="item mbr-regular mbr-fonts-style display-4">Subscribe to our newsletter to get our news &amp; deals delivered to your
						inbox!</h4>
					<div class="form1" data-form-type="formoid">
						<!---Formbuilder Form--->
						<form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler px-2" data-form-title="My Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="WdYWCEWjOwYNt6iRbWnsI2GJylwJdbKuY15aFVNYmdjJw4qi3o7zryUdi0WjbOfb8Md8Wj4MFQhOQQv/o/FzjA2cZRM5Tq4iXFHD24AmDgkqf8rVAVHmtSAzVR8tXq6s">
							<div class="row">
								<div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for subscribing to your newsletters.</div>
								<div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"></div>
							</div>
							<div class="dragArea row">
								<div class="form-group col" data-for="email">
									<input type="text" name="email" placeholder="E-mail" data-form-field="E-mail" required="required" class="form-control display-4" id="email-footer03-1x">
								</div>
								<div class="mbr-section-btn"><button type="submit" class="btn btn-sm btn-white-outline display-4">JOIN</button></div>
							</div>
							<span class="gdpr-block">
								<label>
									<span class="textGDPR display-7" style="color: #000000"><input type="checkbox" name="gdpr" id="gdpr-footer03-1x" required="">By continuing you agree to our <a style="color: #000000; text-decoration: underline;" href="terms.html">Terms of Service</a> and <a style="color: #000000; text-decoration: underline;" href="policy.html">Privacy Policy</a>.</span>
								</label>
							</span>
						</form>
						<!---Formbuilder Form--->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="footer2 cid-seKUfa8CDm" id="footer2-1y">





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


	<script src="assets/web/assets/jquery/jquery.min.js"></script>
	<script src="assets/popper/popper.min.js"></script>
	<script src="assets/tether/tether.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/web/assets/cookies-alert-plugin/cookies-alert-core.js"></script>
	<script src="assets/web/assets/cookies-alert-plugin/cookies-alert-script.js"></script>
	<script src="assets/smoothscroll/smooth-scroll.js"></script>
	<script src="assets/formstyler/jquery.formstyler.js"></script>
	<script src="assets/formstyler/jquery.formstyler.min.js"></script>
	<script src="assets/datepicker/jquery.datetimepicker.full.js"></script>
	<script src="assets/dropdown/js/nav-dropdown.js"></script>
	<script src="assets/dropdown/js/navbar-dropdown.js"></script>
	<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
	<script src="assets/theme/js/script.js"></script>
	<script src="assets/formoid.min.js"></script>



	<input name="cookieData" type="hidden" data-cookie-customDialogSelector='null' data-cookie-colorText='#424a4d' data-cookie-colorBg='rgba(234, 239, 241, 0.99)' data-cookie-textButton='Agree' data-cookie-colorButton='' data-cookie-colorLink='#424a4d' data-cookie-underlineLink='true' data-cookie-text="We use cookies to give you the best experience. Read our <a href='privacy.html'>cookie policy</a>.">
	<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>

</body>

</html>
