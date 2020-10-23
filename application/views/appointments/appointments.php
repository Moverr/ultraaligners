<h1> Manage Appointments </h1>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<form class="form-inline" method="GET" action="<?=base_url()?>enquiry/search">
				<!-- <a href="<?= base_url(); ?>enquiry" class="btn btn-default">Add</a> -->
				&nbsp;&nbsp;

				<div class="form-group">
					<label for="exampleInputEmail2">Search : </label>
					<input type="search" class="form-control" id="search" name="search" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Search</button>
			</form>



			<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Patient
						</th>					 
						<th>
							Title
						</th>
						<th>
							Details
						</th>

						<th>
							Event Data
						</th>

						<th>
							Duration [Hrs]
						</th>

						<th>
							Status
						</th>
					</tr>
				</thead>

				<tbody>

					<?php
					foreach ($data as $record) {
					?>
						<tr>
							<td>
								1
							</td>
							<td>
								<?=@$record->patient->first_name; ?> <?=@$record->patient->last_name; ?>
							</td>
						 
							<td>
								<?=@$record->title; ?>
							</td>
							<td>
							<?=@$record->details; ?>
							</td>

							<td>
							<?=@$record->start_date; ?>
							</td>
							<td>
							<?=@$record->duration; ?>
							</td>

							 
							<td>
							ACTIVE
							</td>
						</tr>
					<?php

					}

					?>
 
				 
				</tbody>
			</table>

			<nav>
				<ul class="pagination">
					<li>
						<a href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
						<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>


		</div>
	</div>
</div>
