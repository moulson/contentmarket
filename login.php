<?php 
	session_start();
	include("includes/db.php");
?><head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>


<div class="row" style="background-color: #222222; padding-top: 50px">

</div>

<div class="row">
	<div class="col-xs-4 col-xs-offset-4">
    	<img src="img/logo.png" class="img-responsive"/>
    </div>
</div>
<?php if($_GET[e] == 1){ ?>
    <div class="row">
    	<div class="col-xs-8 col-xs-offset-2">
        	<div class="alert-danger">
            	<span>Error: Wrong username or password</span>
            </div>
        </div>
    </div>
<?php } ?>
<div class="row">
	<div class="col-xs-8 col-xs-offset-2">
    	<form method="post" action="postlogin.php">
        	<div class="well">
            	<div class="row">
        			<input type="text" class="form-control" name="user" required="required" placeholder="Username" />
                </div>
                <div class="row">
            		<input type="password" class="form-control" name="pass" required="required" placeholder="Password" />
                </div>
                
            	<input type="submit" class="btn btn-primary" />
            </div>
        </form>
	</div>
</div>