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
		<? 
			echo $$meta[0,0];
			echo $$meta[0,1];
		?>
	</body>
</html>