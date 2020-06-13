<?php require_once('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<?php  
	$pdo = Database::connect();	
    $sql = 'SELECT * FROM categories';
?>
	<div class="container" style="margin-top: 20px;">
		<div class="row">
			<a href="indexArticle.php" class="button-type">Back</a>
			<table>
				<caption><h1 class="table-title"> Add Article</h1></caption>
				<thead>
					<tr>
						<th>Title</th>
						<th>Type</th>
						<th>Description</th>
						<th>Image</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<form action="postArticle.php" method="post" enctype="multipart/form-data">
						<td><input type="text" name="title" placeholder="Title"></td>
						<td><select name="category_id">
							<?php foreach($pdo->query($sql) as $type){ ?>
								<option value="<?php echo $type['id']; ?>"><?php echo $type['name'];?></option>
							<?php }
							Database::disconnect();
							?>
						</select></td>
						<td><textarea name="description"></textarea></td>
						<td><input type="file" name="image" ></td>
						<td><input type="submit" value="Submit" ></td>
					</form>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
