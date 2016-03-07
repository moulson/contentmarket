
<?php 
	session_start(); 
	include("includes/db.php");
if(!$_SESSION[started]){
	$sql = "SELECT MAX(visitno) AS max_visitno FROM Logs";
	$result = $connect->query($sql);
	$row = $result->fetch_assoc();
	$visitno = $row['max_visitno'];
	$visitno++;
	$date = date('m/d/Y h:i:s a', time());
	$userip = $_SERVER['REMOTE_ADDR'];
	$sql = "INSERT INTO Logs
	(dateofvisit, remote, visitno )
	VALUES( '$date', '$userip', '$visitno' )";
	$connect->query($sql);	
}
$_SESSION[started] = true;
?>

<html>
	<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" desc="content market" tag="content market">
	<title>Content and Blog Writing Service Leeds Harrogate</title>
    <meta name="description" content="The Content Market is a content marketing and blog writing service that creates original, quality content for your business or agency.">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<script src="js/npm.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</head>
	<body>
  <div class="container">
    <div class="row">
	 	<div class="row navbar">
          <? if($_SESSION[loggedin])
	 	{
	 	?>
          <div class="row" style="margin-top: 20px; color: #eee">
          	<div class="col-xs-12 center">
              	<h2 > Hello, <? echo $_SESSION[firstname];
	 			if($_SESSION[usertype] == "Superadmin" or $_SESSION[usertype] == "Admin"){ ?>
	 				<br/><small> You are logged in as an administrator</small>
	 			<? } ?>
                  </h2>
                  <a href="logout.php">Logout</a>
          	</div>
          </div>
          <?
	 	}
	 	?>
	 		<div class="col-xs-12 top hidden-sm hidden-md hidden-lg">
	 			<div class="col-xs-8" style="padding-left: 10%">
	 			<img src="img/logo.png" style="text-align: left" class="img-responsive">
	 			</div>
	 			<ul class="nav nav-pills col-xs-4">
	 				<li class="dropdown pull-right">
	 					<a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-th-large"></span> <b class="caret"></b></a>
	 					<ul class="dropdown-menu">
	 						<li><a href="about.php">About Us</a></li>
	 						<li><a href="contact.php">Contact Us</a></li>
	 						<li><a href="blog.php">Blog</a></li>
	 					</ul>
	 				</li>
	 			</ul>
	 			</div>
	 		</div> <!-- navbar -->
	 		<div class="col-xs-10 col-xs-offset-1 top hidden-xs">
	 			<img src="img/logo.png" style="text-align: left">
	 			<div class="row" style="padding-top: 3%">
	 			<ul class="nav nav-pills center">
	 			<div class="col-sm-3 nav nav-pills">
	 			<li role="presentation" class="active" style="width: 100%; text-align: center"><a href="#">HOME</a></li>
	 			</div>
	 			<div class="col-sm-3 nav nav-pills">
	 			<li role="presentation" style="width: 100%; text-align: center"><a href="about.php">ABOUT US</a></li>
	 			</div>
	 			<div class="col-sm-3 nav nav-pills">
	 			<li role="presentation" style="width: 100%; text-align: center"><a href="contact.php">CONTACT US</a></li>
	 			</div>
	 			<div class="col-sm-3 nav nav-pills">
	 			<li role="presentation" style="width: 100%; text-align: center"><a href="blog.php">BLOG</a></li>
	 			</div>
	 			</ul>
	 			</div>
	 		</div>
          </div>
    <div class="row main"style="background-image: url('img/new-home.jpg');background-size:100%; background-repeat: no-repeat;height: auto;width: 100%;padding-top: 50%;">
    	<div class="col-md-6 col-md-offset-3">
          <div class="row" style="padding-top: 50px"></div>
    	</div>
    </div>
    <div class="row" style="background-color: #fefefe; padding: 5% 0%">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 center" style="font-size: 20px">
                <h2 class="page-header center">We are a digital content agency providing high quality journalistic content for businesses and agencies</h2>
            </div>
            <div class="col-xs-10 col-xs-offset-1" style="padding-top: 3%; text-align: justify">
                <h4><p>The Content Market is a new breed of PR and marketing agency that uses high quality content to drive brand awareness and visibility across multiple channels.</p>
                    <p>As a digital content agency we do everything a traditional PR agency does and much more.</p>
                    <p>And because we're journalists we know exactly how to tell your story in a way that captures people's attention and gets them talking.</p>
                    <p>From blog writing and LinkedIn posts to research and specialist articles we write content that engages your audience and makes a powerful impact on your brand.</p>
                </h4>
            </div>
        <div class="row col-xs-10 col-xs-offset-1 center"><a href="about.php"><h4>Meet the team</h4></a></div>
        </div>
        <div class="col-md-12 center hidden-xs hidden-sm">
            <div class="col-md-3 iconbox">
                <a href="web-content.html"><img src="img/web-icon.png" style="width: 40%"></a></br>
                <div class="row" style="padding-top: 5%; text-align: center">
                  <a href="web-content.html" style="color: #222222">Web Content</a>
                </div>
            </div>
            <div class="col-md-3 iconbox">
                <a href="thought-leadership.html"><img src="img/lectern.png" style="width: 40%"></a></br>
                <div class="row" style="padding-top: 5%; text-align: center">
                <span class="center" ><a href="thought-leadership.html" style="color: #222222">Thought Leadership</a></span>
                </div>
            </div>
            <div class="col-md-3 iconbox">
                <a href="social-media.html"><img src="img/speech.png" style="width: 40%"></a></br>
                <div class="row" style="padding-top: 5%; text-align: center">
                <span class="center" ><a href="social-media.html" style="color: #222222">Social Media</a></span>
                </div>
            </div>
            <div class="col-md-3 ">
                <a href="visual-content.html"><img src="img/camera.png" style="width: 40%"></a></br>
                <div class="row" style="padding-top: 5%; text-align: center">
                <span class="center" ><a href="visual-content.html" style="color: #222222">Visual Content</a></span>
                </div>
            </div>
        </div>
        <div class="col-xs-10 col-xs-offset-1 center hidden-md hidden-lg">
            <div class="col-xs-12 iconboxsm center">
                <a href="web-content.html"><img src="img/web-icon.png" class="img-responsive"></a></br>
                <div class="row" style="padding: 5%; text-align: center">
                    <span class="center" ><a href="web-content.html" style="color: #222222">Web Content</a></span>
                </div>
            </div>
            <div class="col-xs-12 iconboxsm" style="padding-top: 3%">
                <a href="thought-leadership.html"><img src="img/lectern.png" class="img-responsive"></a></br>
                <div class="row" style="padding: 5%; text-align: center">
                <span class="center" ><a href="thought-leadership.html" style="color: #222222">Thought Leadership</a></span>
                </div>
            </div>
            <div class="col-xs-12 iconboxsm" style="padding-top: 3%">
                <a href="social-media.html"><img src="img/speech.png" class="img-responsive"></a></br>
                <div class="row" style="padding: 5%; text-align: center">
                <span class="center" ><a href="social-media.html" style="color: #222222">Social Media</a></span>
                </div>
            </div>
            <div class="col-xs-12" style="padding-top: 3%"\>
                <a href="visual-content.html"><img src="img/camera.png" class="img-responsive"></a></br>
                <div class="row" style="padding: 5%; text-align: center">
                    <span class="center" ><a href="visual-content.html" style="color: #222222">Visual Content</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row hidden-md hidden-lg" style="background-color: #222222">
        <h2 class="page-header center white">News</h2>
        <div class="col-xs-10 col-xs-offset-1">
            <div class="col-xs-6 white center">
                <div><a href="why-apostrophes-are-like-shoes.html"><h4>Why apostrophes are like shoes</h4></a></div>
                <div><a href="why-apostrophes-are-like-shoes.html"><img src="img/boots.jpg"></a></div>
                <div class="justify padding-5">Anyone who runs a business knows that appearances are important. We all like to say we don't judge a book by its cover - we take the time to get to know someone before deciding whether we like them.</div>
                
            </div>
            <div class="col-xs-6 white center">
                <div><a href="6-reasons-to-have-a-blog.html"><h4>6 reasons to have a blog on your website</h4></a></div>
                <div><a href="6-reasons-to-have-a-blog.html"><img src="img/blog-writing.jpg"></a></div>
                <div class="justify padding-5">You've been told it's a good idea to have a blog on your website but now it's there you never seem to find the time to write anything. When you do find a spare moment you can't decide what to write or how to begin.</div>
                
            </div>
        </div>
    </div>
    <div class="row hidden-xs hidden-sm" style="background-color: #222222">
        <h2 class="page-header center white">News</h2>
        <div class="col-xs-10 col-xs-offset-1">
            <div class="col-xs-6 white center">
                <div><a href="why-apostrophes-are-like-shoes.html"><h4>Why apostrophes are like shoes</h4></a></div>
                <div><a href="why-apostrophes-are-like-shoes.html"><img src="img/boots-200.jpg"></a></div>
                <div class="justify padding-5">Anyone who runs a business knows that appearances are important. We all like to say we don't judge a book by its cover - we take the time to get to know someone before deciding whether we like them.</div>
                
            </div>
            <div class="col-xs-6 white center">
                <div><a href="6-reasons-to-have-a-blog.html"><h4>6 reasons to have a blog on your website</h4></a></div>
                <div><a href="6-reasons-to-have-a-blog.html"><img src="img/blog-200.png"></a></div>
                <div class="justify padding-5">You've been told it's a good idea to have a blog on your website but now it's there you never seem to find the time to write anything. When you do find a spare moment you can't decide what to write or how to begin.</div>
                
            </div>
            <div class="col-xs-8 col-xs-offset-2 padding-5 center"><a href="blog.php" style="font-size: 16px">More news <span class="glyphicon glyphicon-triangle-right"></span></a></div>
        </div>
    </div>
    <div class="row padding-3">
      <div class="col-xs-12">
        <div class="row">
          <div class="col-xs-6">
            <img src="img/hcm-logo.jpg" class="img-responsive"/>
          </div>
          <div class="col-xs-6">
            <img src="img/rock-up-logo.jpg" class="img-responsive"/>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <img src="img/ogden-logo.jpg" class="img-responsive"/>
          </div>
          <div class="col-xs-6">
            <img src="img/hicks-logo.png" class="img-responsive"/>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <img src="img/hctc-logo.jpg" class="img-responsive"/>
          </div>
          <div class="col-xs-6">
            <img src="img/twisted-willow-logo.jpg" class="img-responsive"/>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-8 col-xs-offset-2">
            <img src="img/loch-fyne-logo.jpg" class="img-responsive"/>
          </div>
        </div>
      </div>
    </div>
    <div class="row padding-3">
        <div class="col-xs-10 col-xs-offset-1">
            <div class="col-xs-4 center">
                <a href="http://facebook.com/TheContentMarket"><img src="img/fb.png"></a>
            </div>
            <div class="col-xs-4 center">
                <a href="https://twitter.com/Content_Market_"><img src="img/twitter.png"></a>
            </div>
            <div class="col-xs-4 center">
                <a href=" https://www.linkedin.com/company/the-content-market"><img src="img/linkedin.png"></a>
            </div>             
        </div>
    </div>
    <div class="row" style="background-color: #222222">
      <div class="center col-xs-12">
        <h5 class="white"><a href="assets/content-market-privacy-policy.docx">Privacy Policy</a> | copyright &copy; The Content Market 2016</h5>
      </div>
    </div>
  </div>
	</body>
</html>