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
    $categories_query = 'SELECT * FROM categories';
    $id  = $_GET['id'];
    $product = 'SELECT * FROM articles WHERE `id` ='.$id;
    $sth = $pdo->prepare($product);
	$sth->execute();
	$p = $sth->fetchAll();
	$title = $p[0]['title'];
	$description = $p[0]['description'];
	$image = $p[0]['image_path'];
	$category_id = $p[0]['category_id'];
?>
	<div class="container" style="margin-top: 20px;">
		<div class="row">
			<a href="indexArticle.php" class="button-type">Back</a>
			<table>
				<caption><h1 class="table-title">Edit Article</h1></caption>
				<thead>
					<tr>
						<th>Title</th>
						<th>Category</th>
						<th>Description</th>
						<th>Image</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<form action="updateArticle.php" method="post" enctype="multipart/form-data">
						<td><input type="text" name="title" placeholder="Title" value="<?php echo $title;?>"></td>
						<td><select name="category_id">
							<?php 
								foreach($pdo->query($categories_query) as $type){
							?>
									<option value="<?php echo $type['id']; ?>" <?php echo $type['id'] == $category_id ? 'selected' : ''; ?>><?php echo $type['name'];?></option>
							<?php }
	
								Database::disconnect();
							?>
						</select></td>
						<td><textarea name="description"> <?php echo $description;?> </textarea></td>
						<?php if(!empty($image)){?>
							<td><p><?php echo substr($image, 14, 29); ?></p><input type="file" name="image" ></td>
						<?php }else{ ?>
							<td><p><?php echo 'No image for this product'; ?></p><input type="file" name="image" ></td>
						<?php } ?>
						<input type="hidden" name="id" value="<?php echo $id;?>">
						<input type="hidden" name="delete_file" value="<?php echo $image;?>">
						<td><input type="submit" value="Submit" ></td>
					</form>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
