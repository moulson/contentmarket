<nav class="navbar navbar-default navbar-inverse" style="padding-bottom: 5px">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">
        <img alt="Brand" src="../img/logo.png">
      </a>
    </div>
    <? if($_SESSION[loggedin]){ ?>
    	<p class="navbar-text" style="padding-top: 32px">Signed in as 
		<? echo$_SESSION[firstname];
		if($_SESSION[usertype] == "Superadmin"){ 
			echo " (Administrator)";
	 	} ?>
     	</p>
    <? } ?>
    <style>
	.nav-tabs:hover{
		border-color: #222;
		}
		.nav-tabs{
		border-bottom-color: #222;
		}
	</style>
    <ul class="nav nav-tabs nav-justified">
    	<li><a href="index.php">Home</a></li>
        <li><a href="index.php">About Us</a></li>
        <li><a href="index.php">Contact Us</a></li>
        <li><a href="index.php">Blog</a></li>
        <li><a href="index.php">Services</a></li>
    </ul>
  </div>
</nav>