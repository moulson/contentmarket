<?php
	session_start();
	include 'config/db.php';
?>
<html>
	<head>
		<? 
		include 'layout/resources.php';
		?>
	</head>
	<body>
		<div class="container-fluid">
			<? 
			include 'layout/navbar.php';
			 ?>
			<div class="row">
				<div class="col-xs-12">
				</div>
			</div>
			<? include 'layout/footer.php'; ?>
		</div>
		<script>var pageName = "index";</script>
	</body>
</html>