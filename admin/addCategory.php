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
	<div class="container" style="margin-top: 20px;">
		<div class="row">
			<a href="indexCategory.php" class="button-type">Back</a>
			<table>
				<caption><h1 class="table-title"> Add Category</h1></caption>
				<thead>
					<tr>
						<th>Name</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<form action="postCategory.php" method="post">
						<td><input type="text" name="name" placeholder="Name"></td>
						<td><input type="submit" value="Submit" ></td>
					</form>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
