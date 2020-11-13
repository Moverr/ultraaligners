<h1> Manage Patients </h1>
 
	<div class="container">
	 

			<form class="form-inline" method="GET" action="<?=base_url()?>patient/search">
				<a href="<?= base_url(); ?>patient" class="btn btn-default">Add</a>
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
							First Name
						</th>
						<th>
							Last Name
						</th>
						<th>
							Email Address
						</th>
						<th> Action </th>
					</tr>
				</thead>

				<tbody>

					<?php
					if (isset($data)) {


						foreach ($data as $record) {

					?>
							<tr>
								<td>
									<?= @$record->id; ?>
								</td>
								<td>
									<?= @$record->first_name; ?>
								</td>
								<td>
									<?= @$record->last_name; ?>
								</td>
								<td>
									<?= @$record->email; ?>
								</td>
								<td>
									<a href="<?=base_url();?>patient/edit/<?=@$record->id?>" class="btn btn-default">EDIT</a> &nbsp;
									<a href="<?=base_url();?>patient/del/<?=@$record->id?>" class="btn btn-default">DEL</a>
								</td>
							</tr>
					<?php

						}
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
 
