<? 
	session_start();
	include('includes/db.php'); 
?>
<html>
	<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" desc="content market" tag="content market">
	<title> The Content Market - Home </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<script src="js/npm.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</head>
    <body>
    
    <div clas="row">
    	<div class="col-xs-8 col-xs-offset-2">
        	<div class="well">
            	<div class="row">
    				<div class="col-xs-12">
        				<h1><? echo $_POST[blogtitle]; ?></h1>
       				 </div>
    			</div>
                <div class="row">
                	<div class="col-xs-12">
                    	<? echo $_POST[blogtext]; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>