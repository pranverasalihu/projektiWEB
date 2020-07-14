<?php require_once('./../functions.php');
	  require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/views/showServices.php');

?>
<?php get_header(); ?>
<section class="block_section">
	<div class="row">
		<a href="create.php" class="button-create">Create new Service</a>
		<table>
			<caption><h1 class="table-title">Services</h1></caption>
			<thead>
				<tr>
					<th>Id</th>
					<th>Title</th>
					<th>Image</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				$s = new ShowServices();
				$services = $s->get_Services(); 
			?>
			<?php foreach ($services as $service): ?>
				<tr>
					<td><?php echo $service['id']; ?></td>
					<td><?php echo $service['title']; ?></td>
					<?php if ($service['image']): ?>
						<td><img src="<?php echo $service['image']; ?>" width="100" height="100"></td>
					<?php else: ?>
						<td>No image Selected</td>
					<?php endif?>
					<td>
						<a href="edit.php?id=<?php echo $service['id']; ?>" style="color:green;">
							<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
						</a>
						<a href="lib/delete.php?id=<?php echo $service['id']; ?>" style="color:red;">
							<i class="fa fa-times fa-2x" aria-hidden="true"></i>
						</a>
					</td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
</section>
<?php get_footer(); ?>