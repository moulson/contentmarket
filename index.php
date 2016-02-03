<?php
	session_start();
	include 'config/db.php';
?>
<html>
	<head>
		<? 
		include('layout/resources.php'); 
		include('config/meta.php');
		?>
	</head>
	<body>
		<div class="container-fluid">
			<? include('layout/navbar.php'); ?>
		</div>
	</body>
</html>