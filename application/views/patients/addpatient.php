<?php

var_dump($data);
if (isset($data)) {
?>
	<h1> Edit Patient </h1>
<?php

} else {
?>
	<h1> Add Patient </h1>
<?php
}

?>

<div class="container-fluid">
	<div class="" style="width: 800px !important;">
		<div class="col-md-12">
			<?php
			if (isset($error)) {
			?>
				<div class="alert alert-danger" role="alert"><?= $error; ?></div>
			<?php
			}
			?>


			<form role="form" method="POST">


				<div class="form-group">
					<label for="firstname">
						Firstname
					</label>
					<input type="text" value="<?=isset($data->first_name) ?$data->first_name :"" ; ?>   "  class="form-control" id="firstname" name="firstname" />
				</div>


				<div class="form-group">
					<label for="lastname">
						Lastname
					</label>
					<input type="text" class="form-control" id="lastname" name="lastname" />
				</div>




				<div class="form-group">

					<label for="email">
						Email address
					</label>
					<input type="email" class="form-control" id="email" name="email" />
				</div>




				<div class="form-group">

					<label for="password">
						Password
					</label>
					<br />
					<note>Make sure u copy this password to the patient</note>
					<input type="text" class="form-control" id="password" name="password" />
				</div>

				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>
