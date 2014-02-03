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
                    <li><a href="#about">About</a>
                    </li>
                    <li><a href="#contact">Contact</a>
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
            </div>
<!-- <hr> -->

             <div class="col-lg-4">
                <h3>About Hannah and Tanner</h3>
                <hr>
                <div class="about-us"></div>
                <div class="about-us-text"><p>We love each other. Our hometown is Kaysville, Utah. We live in Richmond, Utah, and we have a wonderful dog named Watson and a baby on the way.</p></div>
             </div> 


     <!--        <div class="col-lg-2">
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            <div> -->
                    <!-- <h4>Popular Blog Categories</h4> -->
                    <!-- <div class="row"> -->
<!--                         <div class="col-lg-2">
                            <ul class="list-unstyled">
                                <li><a href="#dinosaurs">Dinosaurs</a>
                                </li>
                                <li><a href="#spaceships">Spaceships</a>
                                </li>
                                <li><a href="#fried-foods">Fried Foods</a>
                                </li>
                                <li><a href="#wild-animals">Wild Animals</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2">
                            <ul class="list-unstyled">
                                <li><a href="#alien-abductions">Alien Abductions</a>
                                </li>
                                <li><a href="#business-casual">Business Casual</a>
                                </li>
                                <li><a href="#robots">Robots</a>
                                </li>
                                <li><a href="#fireworks">Fireworks</a>
                                </li>
                            </ul>
                        </div>
 -->                    <!-- </div> -->
                </div>
                <!-- /well -->
               
                <!-- /well -->
            </div>
</div>
    


  <!-- pager -->
            <div class="col-md-8">
                    
                <ul class="pager">
                    <li class="previous"><a href="#">&larr; Older</a>
                    </li>
                    <li class="next"><a href="#">Newer &rarr;</a>
                    </li>
                </ul>
            </div>


        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2014</p>
                </div>
            </div>
        </footer>



    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
