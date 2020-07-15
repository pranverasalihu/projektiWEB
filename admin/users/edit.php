<?php require_once('./../functions.php');
	  require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/views/showUsers.php');
?>
<?php get_header(); ?>
<?php 
	$id = isset($_GET['id']) ? $_GET['id'] : null;
	$users = new ShowUsers();
	$user = $users->get_User($id);
?>
<section class="block_section">
	<div class="row">
		<div class="d-flex">
			<a href="index.php" class="button-type">Back</a>
			<?php 
				if(!$user){
					echo '<h1 class="h1">User with ID: ' . $id . ' doesn\'t exist!</h1>';
				}
			?>
		</div>
		<?php if ($user): ?>
			<table>
				<caption><h1 class="table-title">Edit User</h1></caption>
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
				<tr>
					<form action="./lib/update.php" method="post" enctype="multipart/form-data">
						<td><?php echo $id ?></td>
						<td><input type="text" name="username" placeholder="Username" value="<?php echo $user['username'];?>"></td>
						<td><input type="text" name="email" placeholder="Email" value="<?php echo $user['email'];?>"></td>
						<td><input type="password" name="password" placeholder="Password" value="<?php echo $user['password'];?>"></td>
						<td><input type = "text" name="role" placeholder="Role" value="<?php echo $user['role'];?>"></td>
						<input type="hidden" name="id" value="<?php echo $id;?>">
						<td><input type="submit" value="Submit"></td>
					</form>
				</tr>
				</tbody>
			</table>
		<?php endif ?>
	</div>
</section>
<?php get_footer(); ?>