<?php require_once('./../functions.php');
	  require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/views/showPages.php');
?>
<?php get_header(); ?>
<section class="block_section">
	<div class="row">
		<a href="create.php" class="button-create">Create new Page</a>
		<table>
			<caption><h1 class="table-title">Pages</h1></caption>
			<thead>
				<tr>
					<th>Id</th>
					<th>Title</th>
					<th>Excerpt</th>
					<th>Image</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				$p = new ShowPages();
				$pages = $p->get_Pages(); 
			?>
			<?php foreach ($pages as $page): ?>
				<tr>
					<td><?php echo $page['id']; ?></td>
					<td><?php echo $page['title']; ?></td>
					<td><?php echo $page['excerpt']; ?></td>
					<?php if ($page['image']): ?>
						<td><img src="<?php echo $page['image']; ?>" width="100" height="100"></td>
					<?php else: ?>
						<td>No image Selected</td>
					<?php endif?>
					<td>
						<a href="edit.php?id=<?php echo $page['id']; ?>" style="color:green;">
							<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
						</a>
						<a href="lib/delete.php?id=<?php echo $page['id']; ?>" style="color:red;">
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