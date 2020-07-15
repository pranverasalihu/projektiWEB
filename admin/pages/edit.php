<?php require_once('./../functions.php');
	  require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/views/showPages.php');
?>
<?php get_header(); ?>
<?php 
	$id = isset($_GET['id']) ? $_GET['id'] : null;
	$p = new ShowPages();
	$page = $p->get_Page($id);
?>
<section class="block_section">
	<div class="row">
		<div class="d-flex">
			<a href="index.php" class="button-type">Back</a>
			<?php 
				if(!$page){
					echo '<h1 class="h1">Page with ID: ' . $id . ' doesn\'t exist!</h1>';
				}
			?>
		</div>
		<?php if ($page): ?>
			<table>
				<caption><h1 class="table-title">Edit Page</h1></caption>
				<thead>
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>Excerpt</th>
						<th>Image</th>
						<th>Description</th>
						<th>Options</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<form action="./lib/update.php" method="post" enctype="multipart/form-data">
						<td><?php echo $id ?></td>
						<td><input type="text" name="title" placeholder="Title" value="<?php echo $page['title'];?>"></td>
						<td><input type="text" name="excerpt" placeholder="Excerpt" value="<?php echo $page['excerpt'];?>"></td>
						<?php if(!empty($page['image'])): ?>
							<td><p><?php echo substr($page['image'], 14, 29); ?></p><input type="file" name="image"></td>
						<?php else: ?>
							<td><p><?php echo 'No image for this page'; ?></p><input type="file" name="image"></td>
						<?php endif ?>
						<td><textarea name="description"><?php echo $page['description']?> </textarea></td>
						<input type="hidden" name="id" value="<?php echo $id;?>">
						<input type="hidden" name="delete_file" value="<?php echo $page['image'] ?>">
						<td><input type="submit" value="Submit"></td>
					</form>
				</tr>
				</tbody>
			</table>
		<?php endif ?>
	</div>
</section>
<?php get_footer(); ?>