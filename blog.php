<?php
session_start();
?>
<html>
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> The Content Market - Home </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<script src="js/npm.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	</head>
	<body class="container-fluid">
	<script src="js/bootstrap.min.js"></script>
		<div class="row navbar-inverse">
			<div class="col-xs-12 top hidden-sm hidden-md hidden-lg">
				<div class="col-xs-8">
				<img src="img/logo.png" style="text-align: left" class="img-responsive">
				</div>
				<ul class="nav nav-pills col-xs-4">
					<li class="dropdown pull-right">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-th-large"></span> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="contact.php">Contact Us</a></li>
							<li><a href="about.php">About Us</a></li>
						</ul>
					</li>
				</ul>
				</div>
			</div> <!-- navbar -->
			<div class="col-xs-12 top hidden-xs black" style="width: 100%">
      	<div style="padding-left: 10%">
      	   <img src="img/logo.png" style="text-align: left">
      	   <div class="row" style="padding-top: 3%">
      	   <ul class="nav nav-pills center">
      	   <div class="col-sm-3 nav nav-pills">
      	   <li role="presentation" style="width: 100%; text-align: center"><a href="index.php">Home</a></li>
      	   </div>
      	   <div class="col-sm-3 nav nav-pills">
      	   <li role="presentation" style="width: 100%; text-align: center"><a href="about.php">About Us</a></li>
      	   </div>
      	   <div class="col-sm-3 nav nav-pills">
      	   <li role="presentation" style="width: 100%; text-align: center"><a href="contact.php">Contact Us</a></li>
      	   </div>
      	   <div class="col-sm-3 nav nav-pills">
      	   <li role="presentation" class="active" style="width: 100%; text-align: center"><a href="#">Blog</a></li>
      	   </div>
      	   </ul>
      	   </div>
      	</div>
			</div>
		</div>
    </div>
    <div class="row padding-5">
        <div class="col-xs-10 col-xs-offset-1">
        <h1 class="page-header center">Blog</h1>
        </div>
    </div>
    <?php
	if($_SESSION[loggedin]){
	?>
    <div class="row">
    	<div class="col-xs-4 col-xs-offset-4 center">
        	<a href="writeblog.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> New Blog</a>
        </div>
    </div>
	<? } ?>
	<!-- New Blogs -->

	<div class="row hidden-xs">
		<div class="col-xs-3 center padding-3"> <!--NEW BLOG -->
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="in-house-or-outsourced.html">
						<img src="img/in-house/blog.jpg" class="img-responsive"/>
					</a>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 center">
					<a href="in-house-or-outsourced.html">
						<h4>In-house or Outsourced?</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 blog-sample">
					There's no doubt that social media can be a powerful marketing tool if it's done well but should businesses opt for in-house or outsourced social media management?
				</div>
			</div>
		</div>
		<div class="col-xs-3 center padding-3">	<!--NEW BLOG -->
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="6-reasons-to-have-a-blog.html">
						<img src="img/6-reasons/blog.jpg" class="img-responsive"/>
					</a>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 center">
					<a href="6-reasons-to-have-a-blog.html">
						<h4>6 reasons to have a blog on your website</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 blog-sample">
		            You've been told it's a good idea to have a blog on your website but now it's there 
		            you never seem to find the time to write anything.
				</div>
			</div>
		</div>
		<div class="col-xs-3 center padding-3">	<!--NEW BLOG -->
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="why-apostrophes-are-like-shoes.html">
						<img src="img/apostrophes-shoes/blog.jpg" class="img-responsive"/>
					</a>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 center">
					<a href="why-apostrophes-are-like-shoes.html">
						<h4>Why apostrophes are like shoes - and other reasons to get your grammar right</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 blog-sample">
					Anyone who runs a business knows that appearances are important.
				</div>
			</div>
		</div>
		<div class="col-xs-3 center padding-3">	<!--NEW BLOG -->
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="everybody-got-a-blog.html">
						<img src="img/everybody-got-blog/blog.jpg" class="img-responsive"/>
					</a>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 center">
					<a href="everybody-got-a-blog.html">
						<h4>Everyone's got a blog - Make yours different</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 blog-sample">
					What blogs do you enjoy reading most? Well written ones? Visual ones? Finding your style is one thing but making yours stand out from the millions of blogs out there takes thought.
				</div>
			</div>
		</div>
	</div>
	<div class="row hidden-xs">
		<div class="col-xs-3 center padding-3">	<!--NEW BLOG -->
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="how-to-do-your-own-pr.html">
						<img src="img/how-to-do-your-own-pr/blog.jpg" class="img-responsive"/>
					</a>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 center">
					<a href="how-to-do-your-own-pr.html">
						<h4>How to do your own PR - and why you should</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 blog-sample">
					Have you ever seen your competitor featured in the newspaper or online and thought: "We do that too" or "I did that ages ago and they never covered the story".
				</div>
			</div>
		</div>
		<div class="col-xs-3 center padding-3">	<!--NEW BLOG -->
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="how-to-approach-content-strategy.html">
						<img src="img/how-to-approach-writing/blog.jpg" class="img-responsive"/>
					</a>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 center">
					<a href="how-to-approach-content-strategy.html">
						<h4>How to approach writing a content strategy for your business</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 blog-sample">
					People in business talk endlessly about strategy when in fact all they're really doing is planning ahead.
				</div>
			</div>
		</div>
		<div class="col-xs-3 center padding-3">	<!--NEW BLOG -->
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="why-you-should-invest-in-visual.html">
						<img src="img/why-you-should-invest/blog.jpg" class="img-responsive"/>
					</a>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 center">
					<a href="why-you-should-invest-in-visual.html">
						<h4>Why you should invest in visual content</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 blog-sample">
					Online content is highly visual. Every story should have an image to draw readers in and help them identify with the content.
				</div>
			</div>
		</div>
		<div class="col-xs-3 center padding-3">	<!--NEW BLOG -->
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="business-awards.php">
						<img src="img/business-awards/blog.jpg" class="img-responsive"/>
					</a>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 center">
					<a href="business-awards.php">
						<h4>Business awards - are they worth it?</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 blog-sample">
					Business awards can be a great way of showcasing what your business offers, what it has achieved and where it's heading.
				</div>
			</div>
		</div>
	</div>
	<div class="row visibe-xs hidden-md hidden-sm hidden-lg visibe-xs">
		<div class="col-xs-12 center padding-3"> <!--NEW BLOG -->
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="in-house-or-outsourced.html">
						<img src="img/in-house/blog.jpg" class="img-responsive"/>
					</a>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 center">
					<a href="in-house-or-outsourced.html">
						<h4>In-house or Outsourced?</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 blog-sample">
					There's no doubt that social media can be a powerful marketing tool if it's done well but should businesses opt for in-house or outsourced social media management?
				</div>
			</div>
		</div>
	</div>
	<div class="row visibe-xs hidden-md hidden-sm hidden-lg visibe-xs">
		<div class="col-xs-12 center padding-3">	<!--NEW BLOG -->
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="6-reasons-to-have-a-blog.html">
						<img src="img/6-reasons/blog.jpg" class="img-responsive"/>
					</a>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 center">
					<a href="6-reasons-to-have-a-blog.html">
						<h4>6 reasons to have a blog on your website</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 blog-sample">
		            You've been told it's a good idea to have a blog on your website but now it's there 
		            you never seem to find the time to write anything.
				</div>
			</div>
		</div>
	</div>
	<div class="row visibe-xs hidden-md hidden-sm hidden-lg visibe-xs">
		<div class="col-xs-12 center padding-3">	<!--NEW BLOG -->
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="why-apostrophes-are-like-shoes.html">
						<img src="img/apostrophes-shoes/blog.jpg" class="img-responsive"/>
					</a>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 center">
					<a href="why-apostrophes-are-like-shoes.html">
						<h4>Why apostrophes are like shoes - and other reasons to get your grammar right</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 blog-sample">
					Anyone who runs a business knows that appearances are important.
				</div>
			</div>
		</div>
	</div>
	<div class="row visibe-xs hidden-md hidden-sm hidden-lg visibe-xs">
		<div class="col-xs-12 center padding-3">	<!--NEW BLOG -->
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="everybody-got-a-blog.html">
						<img src="img/everybody-got-blog/blog.jpg" class="img-responsive"/>
					</a>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 center">
					<a href="everybody-got-a-blog.html">
						<h4>Everyone's got a blog - Make yours different</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 blog-sample">
					What blogs do you enjoy reading most? Well written ones? Visual ones? Finding your style is one thing but making yours stand out from the millions of blogs out there takes thought.
				</div>
			</div>
		</div>	
	</div>
	<div class="row visibe-xs hidden-md hidden-sm hidden-lg visibe-xs">
		<div class="col-xs-12 center padding-3">	<!--NEW BLOG -->
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="how-to-do-your-own-pr.html">
						<img src="img/how-to-do-your-own-pr/blog.jpg" class="img-responsive"/>
					</a>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 center">
					<a href="how-to-do-your-own-pr.html">
						<h4>How to do your own PR - and why you should</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 blog-sample">
					Have you ever seen your competitor featured in the newspaper or online and thought: "We do that too" or "I did that ages ago and they never covered the story".
				</div>
			</div>
		</div>
	</div>
	<div class="row visibe-xs hidden-md hidden-sm hidden-lg visibe-xs">
		<div class="col-xs-12 center padding-3">	<!--NEW BLOG -->
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="how-to-approach-content-strategy.html">
						<img src="img/how-to-approach-writing/blog.jpg" class="img-responsive"/>
					</a>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 center">
					<a href="how-to-approach-content-strategy.html">
						<h4>How to approach writing a content strategy for your business</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 blog-sample">
					People in business talk endlessly about strategy when in fact all they're really doing is planning ahead.
				</div>
			</div>
		</div>
	</div>
	<div class="row visibe-xs hidden-md hidden-sm hidden-lg visibe-xs">
		<div class="col-xs-12 center padding-3">	<!--NEW BLOG -->
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="why-you-should-invest-in-visual.html">
						<img src="img/why-you-should-invest/blog.jpg" class="img-responsive"/>
					</a>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 center">
					<a href="why-you-should-invest-in-visual.html">
						<h4>Why you should invest in visual content</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 blog-sample">
					Online content is highly visual. Every story should have an image to draw readers in and help them identify with the content.
				</div>
			</div>
		</div>x	
	</div>
	<div class="row visibe-xs hidden-md hidden-sm hidden-lg visibe-xs">
		<div class="col-xs-12 center padding-3">	<!--NEW BLOG -->
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="business-awards.html">
						<img src="img/business-awards/blog.jpg" class="img-responsive"/>
					</a>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 center">
					<a href="business-awards.html">
						<h4>Business awards - are they worth it?</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 blog-sample">
					Business awards can be a great way of showcasing what your business offers, what it has achieved and where it's heading.
				</div>
			</div>
		</div>
	</div>
    <div class="padding-5"></div>
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
	</body>
</html>
<? 
	//619
	//u dont c me
?>