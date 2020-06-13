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
			<a href="addCategory.php" class="button-create">Create Category</a>
			<a href="indexArticle.php" class="button-type">Back</a>
			<table>
				<caption><h1 class="table-title">Categories</h1></caption>
				<thead>
					<tr>
						<th>Name</th>
						<th>Options</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					$pdo = Database::connect();	
                    $sql = 'SELECT * FROM categories ORDER BY id DESC';
					/* associative array */
					if(!$pdo->query($sql)){
						echo '<tr>
							<td>NULL</td>
							<td>NULL</td>
						</tr>';
					}else{
						foreach($pdo->query($sql) as $category) {?>
							<tr>
								<td><?php echo $category['name']; ?></td>
								<td>
									<a href="editCategory.php?id=<?php echo $category['id']; ?>" style="color:green;"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
									<a href="deleteCategory.php?id=<?php echo $category['id']; ?>" style="color:red;"><i class="fa fa-times fa-2x" aria-hidden="true"></i></a>
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
