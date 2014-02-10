<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>HanTan</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href="/assets/css/bootstrap.css" rel="stylesheet">

	<!-- Add custom CSS here -->
	<link rel="stylesheet" href="/assets/css/blog.css">

</head>


<body>
	<div class="cover-all">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
				
					<a class="navbar-brand link-hover" href="/">HanTan</a> 
					<a class="navbar-brand link-hover" href="/posts">Index</a> 
					<a class="navbar-brand link-hover" href="/contact">About</a> 
					<a class="navbar-brand link-hover" href="/contact">Contact</a>
 

				</div>
			</div>
			<!-- /.container -->
		</nav>
		<div class="hero"></div>
		<div class="blog-container">
			<div class="row">
				<div class="col-lg-8">
					@yield('content')
				</div>
				<div class="col-lg-4 border">
					@yield('sidebar')
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p style="color:white;">Copyright &copy; HanTan 2014</p>
			</div>
		</div>
	</footer>

	<!-- JavaScript -->
	<script src="js/jquery-1.10.2.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>

</html>
