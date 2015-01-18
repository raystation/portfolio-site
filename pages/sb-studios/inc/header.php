<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo $title ;?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	
	<link rel="stylesheet" href="slick/slick.css">	
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
	
</head>
<body>
	
	<!--header-->
	
	

	<?php  

	if ( $title == "Suspended Belief Studios") {
		echo '<div class="container add-bottom"><div class="sixteen columns center logocontainer ">
			<a href="home"><img src="img/sb_logo_white.svg" class="scale-with-grid"/></a>
		</div>';
	} else {
		echo '<div class="container add-top"><div class="sixteen columns"><a href="home"><h4 class="blurb">Suspended Belief Studios</h4></a></div>';
	}

	;?>

	</div>
	
	<?php if ( $title=="Suspended Belief Studios" ) {
		echo '<div class="container add-bottom" style="top: -100px">';
	} else {
		echo '<div class="container add-bottom">';
	}
	;?>