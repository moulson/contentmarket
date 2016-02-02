<?php 
session_start();
if($_SESSION[usertype] != "Superadmin"){
	header("Location: http://content-market.co.uk");
	}

include("includes/db.php");


//Get the required rows

	$sql = "SELECT * FROM Logs ORDER BY visitno DESC";
	$result = $connect->query($sql);
	
?>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Admin Page | The Content Market</title>
</head>
<body>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <div class="well">
                <h2 class="center page-header"> Logs </h2>
                <table class="table center">
                    <th class="center">Visitor Number</th>
                    <th class="center">Remote IP Address</th>
                    <th class="center">Time of visit</th>
                    <th></th>
                    <?
                        while($row = $result->fetch_assoc()){
                            ?>
                            <tr>
                                <td><? echo $row['visitno']; ?></td>
                                <td><a href="http://www.whatsmyip.org/ip-geo-location/?ip=<? echo $row['remote'];?>"><? echo $row['remote']; ?></a> </td>
                                <td><? echo $row['dateofvisit'];?></td>
                                <td><a href="admin.php?r=<? echo $row['visitno']; ?>" class="btn btn-danger">DESTROY</a></td>
                            </tr>
                            <?
                            }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <? 
	if($_GET[r] != ""){
		$sql = "DELETE FROM Logs
				WHERE visitno='$_GET[r]'";
		$connect->query($sql);
		?>
        <script>
		window.location.href = "admin.php";
		</script>
        <?
		}
	?>
</body>
