<h1> Manage Enquiries </h1>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<button class="btn btn-primary">Add</button>
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
							Email
						</th>
						<th>
							Title
						</th>
						<th>
							Details
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
								<?=@$record->patient->email; ?>  
							</td>
							<td>
								<?=@$record->title; ?>
							</td>
							<td>
							<?=@$record->details; ?>
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
