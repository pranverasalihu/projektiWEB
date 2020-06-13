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
	$dbh = Database::connect();	
    $id  = $_GET['id'];
    $product = 'SELECT * FROM categories WHERE `id` ='.$id;
    $sth = $dbh->prepare($product);
	$sth->execute();
	$p = $sth->fetchAll();
	$name = $p[0]['name'];
?>
	<div class="container" style="margin-top: 20px;">
		<div class="row">
			<a href="indexCategory.php" class="button-type">Back</a>
			<table>
				<caption><h1 class="table-title">Edit Category</h1></caption>
				<thead>
					<tr>
						<th>Name</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<form action="updateCategory.php" method="post">
						<td><input type="text" name="name" placeholder="Name" value="<?php echo $name;?>"></td>
						<input type="hidden" name="id" value="<?php echo $id;?>">
						<td><input type="submit" value="Submit" ></td>
					</form>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
