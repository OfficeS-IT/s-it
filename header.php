<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Making mobile applications.">
    <meta name="author" content="Viktorija Verebes">
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon" />

    <!--  Facebook meta tags  -->
    <meta property="og:title" content="S-IT Engineering"/>
    <meta property="og:url" content="http://www.s-it.cc/index.php"/>
    <meta property="og:site_name" content="S-IT Engineering web site"/>
    <meta property="og:description" content="S-IT Engineering">
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="http://www.s-it.cc"/>

    <title>Web sites S-IT Engineering</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/bootstrap_customization.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <!-- revision 1.0.1 -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <!-- Optional theme -->
    <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">-->  
    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  
    <script>
        $(document).ready(function(){
            $('.dropdown-toggle').dropdown();            
        });
    </script>
    <!-- end revision 1.0.1 -->
    
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-47470142-2', 's-it.cc');
	  ga('send', 'pageview');

	</script>
</head>
<body>
<!-- Fixed navbar -->
<div class="navbar navbar-default" role="navigation">
    <div id="top"></div>
    <div class="container container-nav">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logo3-01.png" alt="Logo of S-IT Engineering"/>
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a id="<?php if($link=="index") echo ("active-link"); ?>" href="index.php">HOME</a></li>
                <li><a id="<?php if($link=="about") echo("active-link"); ?>" href="about.php">WHAT WE DO</a></li>
                <li><a id="<?php if($link=="products") echo("active-link"); ?>" href="products.php">WHAT WE USE</a></li>
                <li><a id="<?php if($link=="references") echo("active-link"); ?>" href="references.php">CAREER</a></li>
                <li><a id="<?php if($link=="contact") echo("active-link"); ?>" href="contact.php">CONTACT</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="">English</a></li>
                        <li class="divider"></li>
                        <li><a href="sr/">Serbian</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<div class="container holder">
    <div class="triangle-with-shadow2"><img src="assets/img/triangle.png"></div>
</div>
