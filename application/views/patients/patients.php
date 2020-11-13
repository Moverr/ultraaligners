 <div class="container">


 	<form class="form-inline" method="GET" action="<?= base_url() ?>patient/search">
 		<a href="<?= base_url(); ?>patient" class=" ">Add</a>
 		&nbsp;&nbsp;

 		<div class="form-group">
 			<label for=" ">Search : </label>
 			<input type="search" id="search" name="search" placeholder="Search">
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
 					Names
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


 							<?= @$record->last_name; ?>
 						</td>
 						<td>
 							<?= @$record->email; ?>
 						</td>
 						<td>
 							<a href="<?= base_url(); ?>patient/edit/<?= @$record->id ?>" class=" ">EDIT</a> &nbsp;
 							<a href="<?= base_url(); ?>patient/del/<?= @$record->id ?>" class=" ">ARCHIVE</a>
 						</td>
 					</tr>
 			<?php

					}
				}

				?>


 		</tbody>
 	</table>

 	<style>
 		.pagination {
 			width: 100%;
 		}

 		.pagination li {
 			text-decoration: none;
 			float: left !important;
 			padding: 10px;
 			list-style: none;
 		}
 	</style>
 	<nav>
 		<ul class="pagination">
 			<li>
 				<a href="#" aria-label="Previous">
 					PREV
 				</a>
 			</li>

 			<li>
 				<a href="#" aria-label="Next">
 					NEXT
 				</a>
 			</li>
 		</ul>
 	</nav>


 </div>
