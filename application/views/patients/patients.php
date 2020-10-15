<h1> Manage Patients </h1>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<a href="<?=base_url();?>patient" class="btn btn-primary">Add</a>
			<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							First Name
						</th>
						<th>
							Last Name
						</th>
						<th>
							Email Address
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
								<?=@$record->first_name; ?>
							</td>
							<td>
							<?=@$record->last_name; ?>
							</td>
							<td>
							<?=@$record->email; ?>
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
