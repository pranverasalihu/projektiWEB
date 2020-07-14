<?php require_once('./../functions.php') ;
	  require_once ($_SERVER['DOCUMENT_ROOT'].'/2020/vanoa/views/showUsers.php');
?>
<?php get_header(); ?>
<section class="block_section">
	<div class="row">
		<a href="create.php" class="button-create">Create new User</a>
		<table>
			<caption><h1 class="table-title">Users</h1></caption>
			<thead>
				<tr>
					<th>Id</th>
					<th>Username</th>
					<th>Email</th>
					<th>Password</th>
					<th>Role</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				$u = new ShowUsers();
				$users = $u->get_Users(); 
			?>
			<?php foreach ($users as $user): ?>
				<tr>
					<td><?php echo $user['user_id']; ?></td>
					<td><?php echo $user['username']; ?></td>
					<td><?php echo $user['email']; ?></td>
					<td><?php echo $user['password']; ?></td>
					<td><?php echo $user['role']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $user['id']; ?>" style="color:green;">
							<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
						</a>
						<a href="lib/delete.php?id=<?php echo $user['id']; ?>" style="color:red;">
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