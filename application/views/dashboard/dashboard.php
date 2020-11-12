<?php
$this->load->view("header");
?>


<body>
	<style type="text/css">
		.alert-danger {
			background-color: #E13300 !important;
		}
	</style>

	<section class="menu02 cid-seKUfbqItn" once="menu" id="menu2-1z">

		<?php
		$this->load->view("nav");
		?>
	</section>

	<div class="container-fluid" style="    margin-top: 280px;">

		<div class="row" style="margin-left: 190px;">



			<div class="col-md-2">
				<!-- Patients  -->
				<div class="list-item">
					<a href="<?= base_url() ?>dashboard/patients" class="list-group-item list-group-item-action   google-drive-opener">Paients <span class="badge badge-light badge-pill"> 14</span></a>
				</div>
				<!-- Enquiries  -->
				<div class="list-item"> <a href="<?= base_url() ?>dashboard/enquiries" class="list-group-item list-group-item-action   google-drive-opener">Enquiries <span class="badge badge-light badge-pill">14</span></a>
				</div>

				<!-- Appointments  -->
				<div class="list-item"> <a href="<?= base_url() ?>dashboard/appointments" class="list-group-item list-group-item-action   google-drive-opener">Appointments <span class="badge badge-light badge-pill">14</span></a>
				</div>


				<!-- Patient Progress  -->
				<div class="list-item"> <a href="<?= base_url() ?>dashboard/progress" class="list-group-item list-group-item-action   google-drive-opener">Patient Progress <span class="badge badge-light badge-pill">14</span></a>
				</div>


				<!-- Product Tracking  -->
				<div class="list-item"> <a href="<?= base_url() ?>dashboard/tracking" class="list-group-item list-group-item-action   google-drive-opener">Product Tracking <span class="badge badge-light badge-pill">14</span></a>
				</div>




			</div>
			<div class="col-md-9">
				<h5>Dashboard </h5>
				<?php
				var_dump($role);

				switch ($section) {
					case "patients":
						if ($role == 1) return $this->load->view("patients/patients");

						break;

					case "patient_form":
						if ($role == 1)  return	$this->load->view("patients/addpatient");
						break;
					case "appointment_form":
						if ($role == 1) 	$this->load->view("appointments/addappointment");
						break;

					case "progress_form":
						if ($role == 1) 	$this->load->view("progress/addprogress");
						break;

					case "tracking_form":
						if ($role == 1) $this->load->view("tracking/addtracking");
						break;


					case "enquiries":
						$this->load->view("enquiries/enquiries");
						break;
					case "appointments":
						$this->load->view("appointments/appointments");

						break;
					case "progress":
						$this->load->view("progress/progress");

						break;

					case "tracking":
						$this->load->view("tracking/tracking");
						break;
					default:
				?>
						<p> Welcome to Dashboard </p>
				<?php
						break;
				}

				?>
			</div>

		</div>
	</div>

	<footer style="
  position: fixed;
    bottom: 0;
	width: 100%;
	">
		<div style="margin: auto; width:150px; margin-bottom:20px; ">&copy; 2020 Ultra Ligners </div>
	</footer>
</body>

</html>
