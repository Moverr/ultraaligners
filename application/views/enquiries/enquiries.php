<h1> Manage Enquiries </h1>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

		<form class="form-inline" method="GET" action="<?=base_url()?>enquiry/search">
				<!-- <a href="<?= base_url(); ?>enquiry" class="">Add</a> -->
				&nbsp;&nbsp;

				<div class="form-group">
					<label for="exampleInputEmail2">Search : </label>
					<input type="search"   id="search" name="search" placeholder="Search">
				</div>
				<button type="submit" class="">Search</button>
			</form>


		 
			<table class="table">
				<thead>
					<tr>
						<th>
							#
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
							Closed
						</th>

						<th>
							Action
						</th>
					</tr>
				</thead>

				<tbody>

					<?php
					foreach ($data as $record) {
					?>
						<tr>
							<td>
							<?=@$record->id; ?>
							</td>
							<td>
								<?=@$record->email; ?>
							</td>

							<td>
								<?=@$record->title; ?>
							</td>
							<td>
							<?=@$record->details; ?>
							</td>
							<td>
							<?php
							if(isset($record->closed) && $record->closed == 1){
								echo "true";
							}else{
								echo "false";
							}
							
							 ?>
							</td>
							<td>
									<a href="<?=base_url();?>patient/edit/<?=@$record->id?>" class="">CLOSE</a> &nbsp;
									<a href="<?=base_url();?>patient/del/<?=@$record->id?>" class="">RESPONSES</a>
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
