<?php
$this->load->view("header");
?>

<body>
	<style>
		.alert-success {
			background-color: goldenrod !important;
		}

		.alert-danger {
			background-color: #E13300 !important;
		}

		.table tr ,.table td{
			border-bottom: 1px solid; padding: 15px;
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


	</section>

	<section class="form cid-seKUf5JnNO" id="formbuilder-1v">


		<div class=" ">

			<div class="row">
				<div class="col-lg-3">
					<ul>
						<li>
							<a href="<?= base_url() ?>dashboard/patients" class="list-group-item list-group-item-action   google-drive-opener">Paients <span class="badge badge-light badge-pill"> 14</span></a>
						</li>

						<li>
							<a href="<?= base_url() ?>dashboard/enquiries" class="list-group-item list-group-item-action   google-drive-opener">Enquiries <span class="badge badge-light badge-pill">14</span></a>
						</li>


						<li>
							<a href="<?= base_url() ?>dashboard/appointments" class="list-group-item list-group-item-action   google-drive-opener">Appointments <span class="badge badge-light badge-pill">14</span></a>
						</li>


						<li>
							<a href="<?= base_url() ?>dashboard/progress" class="list-group-item list-group-item-action   google-drive-opener">Patient Progress <span class="badge badge-light badge-pill">14</span></a>
						</li>


						<li>
							<a href="<?= base_url() ?>dashboard/tracking" class="list-group-item list-group-item-action   google-drive-opener">Product Tracking <span class="badge badge-light badge-pill">14</span></a> </li>



					</ul>
				</div>
				<div class="col-lg-9">
					 
					<?php
				 

					if ($section == "patients") {
						if ($role == 1)   $this->load->view("patients/patients");
					} elseif ($section == "patient_form") {
						if ($role == 1)   	$this->load->view("patients/addpatient");
					} elseif ($section == "appointment_form") {
						if ($role == 1) 	$this->load->view("appointments/addappointment");
					} elseif ($section == "progress_form") {
						if ($role == 1) 	$this->load->view("progress/addprogress");
					} elseif ($section == "tracking_form") {
						if ($role == 1) $this->load->view("tracking/addtracking");
					} elseif ($section == "enquiries") {
						$this->load->view("enquiries/enquiries");
					} elseif ($section == "appointments") {
						$this->load->view("appointments/appointments");
					} elseif ($section == "progress") {
						$this->load->view("progress/progress");
					} elseif ($section == "tracking") {
						$this->load->view("tracking/tracking");
					} else {
					?>
						<p> Welcome to Dashboard </p>
					<?php


					}
					?>
				</div>

			</div>

		</div>
	</section>







	<section class="footer2 cid-seKUfa8CDm" id="footer2-1y" style="vertical-align: bottom; bottom:-300px;">





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
