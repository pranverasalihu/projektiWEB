<?php require_once('./../functions.php');
	  require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiweb-master/views/showRooms.php');
?>
<?php get_header(); ?>
<section class="block_section">
	<div class="row">
		<a href="create.php" class="button-create">Create new Room</a>
		<table>
			<caption><h1 class="table-title">Rooms</h1></caption>
			<thead>
				<tr>
					<th>Id</th>
					<th>Title</th>
					<th>Price</th>
					<th>Image</th>
					<th>Created by</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				$r = new ShowRooms();
				$rooms = $r->get_Rooms(); 
			?>
			<?php foreach ($rooms as $room): ?>
				<tr>
					<td><?php echo $room['id']; ?></td>
					<td><?php echo $room['title']; ?></td>
					<td><?php echo $room['price']; ?></td>
					<?php if ($room['image']): ?>
						<td><img src="<?php echo $room['image']; ?>" width="100" height="100"></td>
					<?php else: ?>
						<td>No image Selected</td>
					<?php endif?>
					<td><?php echo $room['username']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $room['id']; ?>" style="color:green;">
							<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
						</a>
						<a href="lib/delete.php?id=<?php echo $room['id']; ?>" style="color:red;">
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