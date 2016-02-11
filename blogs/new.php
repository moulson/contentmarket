<? session_start(); 
include '../config/db.php';
?>
<html>
	<head>
		<? include '../layout/resources.php'; ?>
		<title>New Blog</title>
	</head>
	<body>
		<form>
			<input type="text">
		</form>
		<script>var pageName = "blog-new";</script>
	</body>
</html>