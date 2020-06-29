<?php require_once('./../functions.php') ?>
<?php get_header(); ?>

<section class="block_section">
	<div class="row">
		<div class="d-flex">
			<a href="index.php" class="button-type">Back</a>
		</div>
		<table>
			<caption><h1 class="table-title">Create new Service</h1></caption>
			<thead>
				<tr>
					<th>Title</th>
					<th>Description</th>
					<th>Image</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
			<tr>
				<form action="./lib/insert.php" method="post" enctype="multipart/form-data">
					<td><input type="text" name="title" placeholder="Title"></td>
					<td><textarea name="description"></textarea></td>
					<td><input type="file" name="image" ></td>					
					<td><input type="submit" value="Submit"></td>
				</form>
			</tr>
			</tbody>
		</table>
	</div>
</section>
<?php get_footer(); ?>