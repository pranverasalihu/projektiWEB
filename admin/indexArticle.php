<?php 
require_once('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container" style="margin-top: 20px;">
		<div class="row">
			<a href="addArticle.php" class="button-create">Create Article</a>
			<a href="indexCategory.php" class="button-type">Category of Articles</a>
			<a href="index.php" class="button-home">Home</a>
			<table>
				<caption><h1 class="table-title">Articles</h1></caption>
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Image</th>
						<th>Options</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					$pdo = Database::connect();	
                    $sql = 'SELECT * FROM articles ORDER BY id DESC';
					/* associative array */
					if(!$pdo->query($sql)){
						echo '<tr>
							<td>NULL</td>
							<td>NULL</td>
							<td>NULL</td>
							<td>NULL</td>
						</tr>';
					}else{
						foreach($pdo->query($sql) as $product) {?>
							<tr>
								<td><?php echo $product['id']; ?></td>
								<td><?php echo $product['title']; ?></td>
								<?php if ($product['image_path']){?>
									<td><img src="<?php echo $product['image_path']; ?>" width="100" height="100"></td>
								<?php }else{?>
									<td>No image Selected</td>
								<?php }?>
								<td>
									<a href="editArticle.php?id=<?php echo $product['id']; ?>" style="color:green;"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
									<a href="deleteArticle.php?id=<?php echo $product['id']; ?>" style="color:red;"><i class="fa fa-times fa-2x" aria-hidden="true"></i></a>
								</td>
							</tr>
						<?php } 
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
