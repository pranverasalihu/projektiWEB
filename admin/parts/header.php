<?php 
	session_start();
	if ( !isset( $_SESSION['is_admin'] ) && !$_SESSION['is_admin'] ) {
		header("Location: ".get_home_url()."/loginForm.php");
	}
	else if ( isset( $_SESSION['is_admin'] ) && !$_SESSION['is_admin'] ) {
		header("Location: ".get_home_url()."/index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo get_admin_url() ?>/css/grid.css">
    <link rel="stylesheet" href="<?php echo get_admin_url() ?>/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header class="main_header">
		<div class="container">
			<a href="<?php echo get_admin_url() ?>" class="logo h1">DASHBOARD</a>
			<nav class="main_navigation">
				<ul>
					<li><a href="<?php echo get_admin_url() ?>/pages">Pages</a></li>
					<li><a href="<?php echo get_admin_url() ?>/rooms">Rooms</a></li>
					<li><a href="<?php echo get_admin_url() ?>/users">Users</a></li>
					<li><a href="<?php echo get_admin_url() ?>/services">Services</a></li>
					<li><a href="<?php echo get_home_url() ?>/logout.php">Logout</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="container" style="margin-top: 20px;">