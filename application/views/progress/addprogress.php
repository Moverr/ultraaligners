<h1> Add Patient Progress </h1>
<div class="container-fluid">
	<div class="row">
		<?php

		//	echo $patient;
		?>
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
					<label for="patient">
						Patient
					</label>
					<select required="true" class="form-control" id="patient" name="patient">
						<?php
						foreach ($data as $record) {
							if ($record->first_name != "") {


						?>
								<option <?php if (isset($patient)) {
											if ($patient == $record->id) {
												echo  "selected=true";
											}
										} ?> value="<?= @$record->id; ?>"> <?= @$record->first_name . " " . $record->last_name; ?></option>
						<?php
							}
						}
						?>
					</select>
				</div>




				<div class="form-group">
					<label for="details">
						Details
					</label>
					<textarea type="text" class="form-control" id="details" name="details"><?= @$details; ?></textarea>
				</div>






				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>
