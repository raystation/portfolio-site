<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo $pageTitle; ?></title>
	<meta name="description" content="Ray Yuen is a designer and artist working in numerous media: books, games, game design and illustration.">
	<meta name="author" content="Ray Yuen">

	<meta property="og:site_name" content="Ray Yuen. Design + Illustration"/>
	<meta property="og:url" content="http://rayuen.com"/>
	<meta itemprop="url" content="http://rayuen.com"/>
	
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">

	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" href="css/lightbox.css">	

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="img/icon/favicon.ico">
	<link rel="apple-touch-icon" href="img/icon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/icon/apple-touch-icon-114x114.png">
	
	<!-- google anal -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-50284623-1', 'rayuen.com');
	  ga('require', 'displayfeatures');
	  ga(‘set’, ‘&uid’, {{USER_ID}}); 
	  ga('send', 'pageview');
	</script>

</head>
<?php require 'inc/work-info.php';?>
<body>
		
	<!-- Primary Page Layout
	================================================== -->
		
	<header class="container add-top">

		<nav class="sixteen columns">
			
			<h2 class="title"><a href="index">Ray Yuen</a></h2>
			
			<ul class="add-bottom">
				<li><a href="work">work</a></li>
				<?php //<li>•</li>
				//<li><a href="projects.php">projects</a></li> ?>
				<li>•</li>
				<li><a href="about">about</a></li>
			</ul>				

		</nav>
		
	</header>

	<div class="container add-bottom opacity-fade">