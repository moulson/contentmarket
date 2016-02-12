<?php
session_start(); 
include('db.php');
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
	<body style="padding-left: 2%">
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
      	    <li role="presentation" class="active" style="width: 100%; text-align: center"><a href="blog.php">Blog</a></li>
      	    </div>
      	    </ul>
      	    </div>
      	</div>
			</div>
		</div>
    </div>
    <div class="row padding-5">
        <div class="col-xs-10 col-xs-offset-1">
        <h1 class="page-header center">Guest Blogging</h1>
            <div class="row center padding-5">
            	<div class="col-xs-6 col-xs-offset-3">
           	 		<img src="img/business-awards/blog.jpg" class="img-responsive">
            	</div>
            </div>
            <div class="row justify" style="font-size: 16px">
                <p class="blog-text">
								If you have a business blog, it's likely that you have sometimes wondered how you might reach the widest possible audience - and keep them interested in what you have to say.
								<br/>
								You probably have a core of regular readers and perhaps some who visit from time to time when a topic takes their interest. You share your blog via your social media channels and you blog as regularly as you can, on topics you think will be of interest to your potential customers.
                </p>
                <h2>So how do you reach more people with your blog?</h2>
                <p class="blog-text">
                The answer might be guest blogging - and there are two ways to use them to achieve your aim.
                <br/>
				So the first thing to ask yourself is: "Which award is the right one for my business?"
                <br/>
               	1. Write a guest blog for someone else: Whatever your business, it's likely there are others near you that do something related. For example, if you are a stove installer, there are probably other businesses in your area offering interior design, or perhaps bloggers who write about interiors. You could offer to write something for them on the latest trends in your field of expertise. Not only could you impress their readers, you could also capture new customers for your business by providing links to your own blog and website.
                <br/>
                2. Invite a guest blogger to your website: Again, wherever you see a connection with what someone else does, there's an opportunity to work together. If you can think of something your readers would be interested in that you don't have the expertise to write about yourself, why not invite someone else to do it for you? It's free content - with the added bonus that your guest brings some of their audience to your blog and they may well have a look at some of your previous posts.
                <br/>
                </p>
                <h2>The benefits</h2>
                <p class="blog-text">
                Guest blogging is a great way to boost your audience and firmly establish yourself as an expert in your field. It is also a great way to establish better links with other businesses, which may lead to further referrals in the future.
                <br/>
                If you want to know more about how guest blogging could work for you, get in touch. We'd be happy to help. 
                </p>
            </div>
        </div>
    </div>
    </div>
    <div class="row">
        <nav>
            <ul class="pager">
                <li><a href="blog.php">Menu</a></li>
            </ul>
        </nav>
    </div>
    <div class="padding-5"></div>
    <div class="row padding-3 black">
        <div class="col-xs-10 col-xs-offset-1">
            <div class="col-xs-4 center">
                <a href="http://facebook.com/TheContentMarket"><img src="img/fb-w.png"></a>
            </div>
            <div class="col-xs-4 center">
                <a href="https://twitter.com/Content_Market_"><img src="img/twitter-w.png"></a>
            </div>
            <div class="col-xs-4 center">
                <a href=" https://www.linkedin.com/company/the-content-market"><img src="img/linkedin-w.png"></a>
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