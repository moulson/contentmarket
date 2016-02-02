<?php 
	session_start(); 
	include("includes/db.php");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
<?
	$sql = "SELECT * 
			FROM users
			WHERE username='$_POST[user]'";
	$result = $connect->query($sql);
	$row = $result->fetch_assoc();
?>
	<?
	if($row['password'] == $_POST[pass]){
	$_SESSION[loggedin] = 1;
	$_SESSION[usertype] = $row['usertype'];
	$_SESSION[firstname] = $row['firstname'];
	$_SESSION[lastname] = $row['lastname'];
	}
	if($_SESSION[loggedin] == 1)
	{
		echo "Redirecting...";
		?>
        <script>window.location.href = "index.php"</script>
        <?
	}
	else
	{
		header("Location: login.html?e=1");
		echo "BAD LOGIN D:";
		?>
		<script>window.location.href = "login.php?e=1"</script>
		<?
	}?>
    
</body>
</html>