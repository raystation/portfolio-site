<?
$meta_description="";
require_once 'inc/work-info.php';
require_once 'functions.php';

if ( basename($_SERVER['PHP_SELF'])=="today.php" ) {
	// $refresh="<meta http-equiv=\"refresh\" content=\"1800;URL='today.php'\">";
	$refresh="<meta http-equiv=\"refresh\" content=\"1800;URL='today.php'\">";
} else {
	$refresh="";
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Ray Yuen &#124; <?php pr($title); ?></title>
	<? echo $refresh;?>
	<meta name="description" content="<? if($meta_description){echo $meta_description; } else {echo "Ray Yuen is a designer and artist working in numerous media: books, games, game design and illustration."; } ?>">
	<meta name="author" content="Ray Yuen">
	<meta name="keywords" content="portfolio, design, illustration, web design">

	<meta property="og:site_name" content="Ray Yuen. Design + Illustration"/>
	<meta property="og:url" content="http://rayuen.com"/>
	<meta itemprop="url" content="http://rayuen.com"/>

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/style.css">

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
	  // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  // ga('create', 'UA-50284623-1', 'rayuen.com');
	  // ga('send', 'pageview');

	</script>

	<script type="text/javascript">
	  !function(){var analytics=window.analytics=window.analytics||[];if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.0.0";
	  analytics.load("a2k3w53h8e");
	  analytics.page()
	  }}();
	</script>

</head>

<body>

	<!-- Primary Page Layout
	================================================== -->

	<header class="navband headroom">
		<div class="container">
			<nav class="sixteen columns">
				<div class="title"><a href="./">Ray Yuen</a></div>
				<ul>
					<li><a class="<?php if ( $section == "work") { echo "active"; } ;?>" href="work">work</a></li>
					<li><a class="<?php if ( $section == "about") { echo "active"; } ;?>" href="about">about</a></li>

					<?php //<li><a href="projects.php">projects</a></li> ?>
				</ul>

			</nav>
		</div>
	</header>

	<div class="container add-bottom opacity-fade">