<?php require_once('./../functions.php') ;
	  require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/views/showServices.php');
?>
<?php get_header(); ?>
<?php 
	$id = isset($_GET['id']) ? $_GET['id'] : null;
	$services = new ShowServices();
	$service = $services->get_Service($id);
?>
<section class="block_section">
	<div class="row">
		<div class="d-flex">
			<a href="index.php" class="button-type">Back</a>
			<?php 
				if(!$service){
					echo '<h1 class="h1">Service with ID: ' . $id . ' doesn\'t exist!</h1>';
				}
			?>
		</div>
		<?php if ($service): ?>
			<table>
				<caption><h1 class="table-title">Edit Service</h1></caption>
				<thead>
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>Description</th>
						<th>Image</th>
						<th>Options</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<form action="./lib/update.php" method="post" enctype="multipart/form-data">
						<td><?php echo $id ?></td>
						<td><input type="text" name="title" placeholder="Title" value="<?php echo $service['title'];?>"></td>
						<td><textarea name="description"><?php echo $service['description']?> </textarea></td>
						<?php if(!empty($service['image'])): ?>
							<td><p><?php echo substr($service['image'], 14, 29); ?></p><input type="file" name="image"></td>
						<?php else: ?>
							<td><p><?php echo 'No image for this service'; ?></p><input type="file" name="image"></td>
						<?php endif ?>
						<input type="hidden" name="id" value="<?php echo $id;?>">
						<input type="hidden" name="delete_file" value="<?php echo $service['image'] ?>">
						<td><input type="submit" value="Submit"></td>
					</form>
				</tr>
				</tbody>
			</table>
		<?php endif ?>
	</div>
</section>
<?php get_footer(); ?>