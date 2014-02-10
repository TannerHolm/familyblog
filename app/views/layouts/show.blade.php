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
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/posts">HanTan</a> 

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="/about">About</a>
						</li>
						<li><a href="/contact">Contact</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
		<div class="blog-container">
			<div class="row">
				<div class="col-lg-8">
					@yield('content')
					<!-- @yield('comment') -->
				</div>
				<div class="col-lg-4">
					@yield('sidebar')
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p style="color:white;">Copyright &copy; Company 2014</p>
			</div>
		</div>
	</footer>

	<!-- JavaScript -->
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/bootstrap.js"></script>

</body>

</html>
