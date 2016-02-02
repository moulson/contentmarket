<?
	if($_POST[user] == "cmjenni" && $_POST[pass] == "barndoor")
	{
		$_SESSION[loggedin] = true;
		$_SESSION[name] = "Jenni";
		$_SESSION[userType] = "User";
		echo $_SESSION[loggedin];
	}
	if($_POST[user] == "cmkatie" && $_POST[pass] == "barndoor")
	{
		$_SESSION[loggedin] = true;
		$_SESSION[name] = "Katie";
		$_SESSION[userType] = "User";
	} 
	if($_POST[user] == "cmvicky" && $_POST[pass] == "barndoor" )
	{
		$_SESSION[loggedin] = true;
		$_SESSION[name] = "Vicky";
		$_SESSION[userType] = "User";
	}
	if($_POST[user] == "admin" && $_POST[pass] == "Jasper2013" )
	{
		$_SESSION[loggedin] = true;
		$_SESSION[name] = "Dan";
		$_SESSION[userType] = "Admin";
	} 
?>