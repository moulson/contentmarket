<head>
	<script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
	<script>
		tinymce.init({
		  selector: 'textarea',
		  height: 500,
		  plugins: [
			'advlist autolink lists link image charmap print preview anchor',
			'searchreplace visualblocks code fullscreen',
			'insertdatetime media table contextmenu paste code'
		  ],
		  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		  content_css: [
			'//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
			'//www.tinymce.com/css/codepen.min.css'
		  ]
		});
    </script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">	
    <script src="js/npm.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<form method="post" action="post-blog.php">
    	<div class="row" style="margin-top: 10px">
        	<div class="col-xs-8 col-xs-offset-2 center">
            	<input type="text" name="blogtitle" class="form-control" placeholder="Blog Title"/>
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
        	<div class="col-xs-8 col-xs-offset-2 center">
            	<input type="file" name="blogimage"/>
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-xs-8 col-xs-offset-2">
                <textarea name="blogtext">
                	<h3>use the tools above ^^ to format your blog</h3>
                	<h1> Enter blog contents here</h1>
                </textarea>
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
        	<div class="col-xs-12 center">
            	<input type="submit" class="btn btn-primary"/>
            </div>
        </div>
    </form>
	
</body>