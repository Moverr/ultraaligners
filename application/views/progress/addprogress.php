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
					<select  required="true" class="form-control" id="patient" name="patient">
						<?php
						foreach ($data as $record) {
							if ($record->first_name != "") {


						?>
								<option <?php if(isset($patient)    ){ if($patient == $record->id) {echo  "selected=true"; } } ?>    value="<?= @$record->id; ?>"> <?= @$record->first_name . " " . $record->last_name; ?></option>
						<?php
							}
						}
						?>
					</select>
				</div>


				<div class="form-group">
					<label for="title">
						Title
					</label>
					<input value="<?=@$title; ?>"  required="true" type="text" class="form-control" id="title" name="title" />
				</div>


				<div class="form-group">
					<label for="details">
						Details
					</label>
					<textarea type="text" class="form-control" id="details" name="details"><?=@$details;?></textarea>
				</div>





				<div class="form-group">
					<label for="start_date">
						Start Date
					</label>
					<input  value="<?=@date('mm/dd/yyyy',$start_date);; ?>"   required="true" type="datetime-local" class="form-control" id="start_date" name="start_date" />
				</div>



				<div class="form-group">
					<label for="duration">
						Duration <note>[Hrs]</note>
					</label>
					<input value="<?=@intval($duration); ?>" type="number" required="true" min="0" max="5" class="form-control" id="duration" name="duration" />
				</div>



		 




				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>
