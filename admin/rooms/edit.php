<?php require_once('./../functions.php');
	   require_once ($_SERVER['DOCUMENT_ROOT'].'/2020/vanoa/views/showRooms.php');
?>
<?php get_header(); ?>
<?php 
	$id = isset($_GET['id']) ? $_GET['id'] : null;
	$rooms = new ShowRooms();
	$room = $rooms->get_Room($id);
?>
<section class="block_section">
	<div class="row">
		<div class="d-flex">
			<a href="index.php" class="button-type">Back</a>
			<?php 
				if(!$room){
					echo '<h1 class="h1">Room with ID: ' . $id . ' doesn\'t exist!</h1>';
				}
			?>
		</div>
		<?php if ($room): ?>
			<table>
				<caption><h1 class="table-title">Edit Room</h1></caption>
				<thead>
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>Price</th>
						<th>Image</th>
						<th>Description</th>
						<th>Options</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<form action="./lib/update.php" method="post" enctype="multipart/form-data">
						<td><?php echo $id ?></td>
						<td><input type="text" name="title" placeholder="Title" value="<?php echo $room['title'];?>"></td>
						<td><input type="text" name="price" placeholder="Price" value="<?php echo $room['price'];?>"></td>
						<?php if(!empty($room['image'])): ?>
							<td><p><?php echo substr($room['image'], 14, 29); ?></p><input type="file" name="image"></td>
						<?php else: ?>
							<td><p><?php echo 'No image for this room'; ?></p><input type="file" name="image"></td>
						<?php endif ?>
						<td><textarea name="description"><?php echo $room['description']?> </textarea></td>
						<input type="hidden" name="id" value="<?php echo $id;?>">
						<input type="hidden" name="delete_file" value="<?php echo $room['image'] ?>">
						<td><input type="submit" value="Submit"></td>
					</form>
				</tr>
				</tbody>
			</table>
		<?php endif ?>
	</div>
</section>
<?php get_footer(); ?>