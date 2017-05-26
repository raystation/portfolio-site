<?

$footer_add="";
$work_class = "";
$about_class = "";
$extra_padding = "";
$meta_data = "";
$og_img_size = "";

$project = (isset( $_GET["project"] ) ? $_GET["project"] : null );
$header_add = isset($header_add) ? $header_add : null;

$home_path = "http://www.rayuen.com";

// grabs the project details
require_once 'inc/work-info.php';
require_once 'functions.php';

$id = (isset( $_GET["id"] ) ? $_GET["id"] : null );
if ( isset($id) ) {
	$id_html = "?id=$id";
} else {
	$id_html="";
}

if (isset($section)) {
	if ($section=="work" ) {
		$work_class="active";
	}
	if ($section=="about") {
		$about_class="active";
	}
	if ( $section=="work" && $id ) {
		$extra_padding = "class='subhead-padding'";
	}
}

// COMING FROM THE JOB LANDING PAGE, THIS WILL GENERATE A SECONDARY NAV BAR ON THE BOTTOM
if ( $id ) {
	include_once "inc/company-info.php";
	if ($sample_projects_array) {
		$sample_projects_html="";
		foreach ($sample_projects_array as $key => $sample_project) {

			$project_number = $key+1;

			if ($sample_project['path'] == $project) {
				$active_style = "active";
			} else {
				$active_style = "";
			}

			$sample_projects_html.="
				<a href='work?project=$sample_project[path]&id=$id' class='tooltip $active_style' title='$sample_project[name]'>#$project_number</a>
			";
		}
	}
	//subhead
	$landing_page_nav = "
		<div class='back-to-landing-page-menu'>
			<div>
				<a class='tooltip' title='back to job inquiry' href='./lets-talk?id=$id'>&#11013;</a>
				<strong><span class='desktop'>Highlighted</span> Projects for $hiring_company:</strong>
				$sample_projects_html
			</div>
		</div>
	";
} else {
	$landing_page_nav="";
}

// META DATA
if ( !isset($meta_description) ) {
	$meta_description = "Ray Yuen is a designer and artist working in numerous media: books, games, game design and illustration.";
}

// OPEN GRAPH DATA

	// IF A PROJECT IS SET
	if ( isset($project) ) {
		$og_thumb = check_for_img_format("img/$project","thumb-hd", array("jpg","png") );
		if ($og_thumb==FALSE) {
			$og_thumb = check_for_img_format("img/$project","thumb", array("jpg","png") );
		}
		if ($og_thumb==FALSE) {
			$og_thumb = "img/logo-banner.jpg";
		}
	} else {
		$og_thumb = "img/logo-banner.jpg";
		// $og_img_size = "
		// 	<meta name='og:image:width' content='1200'>
		// 	<meta name='og:image:height' content='630'>
		// ";
	}
	$meta_data = "
		<meta charset='utf-8'>
		<meta name='author' content='Ray Yuen' />
		<meta property='article:author' content='http://rayuen.com' />
		<meta name='keywords' content='portfolio, design, illustration, web design' />
		<meta name='description' content='$meta_description' />

		<meta property='og:site_name' content='Ray Yuen. Design + Illustration'/>
		<meta property='og:url' content='http://rayuen.com/$project'/>

		<meta property='og:type' content='article' />
		<meta property='og:title' content='Ray Yuen. $title' />
		<meta property='og:image' content='$home_path/$og_thumb' />
		<meta name='og:image:width' content='1200'>
		<meta name='og:image:height' content='630'>
		$og_img_size
		<meta property='og:description' content='Food truck Portland swag Pitchfork mustache semiotics.'>
	";
	// <meta itemprop='url' content='http://rayuen.com'/>

	// passes ID to homepage
	if ( isset($id) ) {
		$id_html = "?id=$id";
	} else {
		$id_html="";
	}

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head prefix="og: http://ogp.me/ns#">

	<!-- Basic Page Needs
  ================================================== -->
	<title>Ray Yuen &#124; <?php pr($title); ?></title>
	<? echo $meta_data; ?>

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	<? echo $header_add; ?>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="img/icon/favicon.ico">
	<link rel="apple-touch-icon" href="img/icon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/icon/apple-touch-icon-114x114.png">

	<script>
		// google anal
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

<body <? echo $extra_padding;?>>

	<!-- Primary Page Layout
	================================================== -->

	<!--<header class="navband headroom" style='display:none;'>
		<div class="container">
			<nav class="sixteen columns">
				<div class="title"><a href="./">Ray Yuen</a></div>
				<ul>
					<li><a class="<? echo $work_class;?>" href="work<? echo $id_html;?>">work</a></li>
					<li><a class="<? echo $about_class;?>" href="about<? echo $id_html;?>">about</a></li>
				</ul>

			</nav>
		</div>
	</header>-->

	<header class="navband headroom">
		<div class="header">
			<div id="title">
				<a href="./<? echo $id_html; ?>">Ray Yuen</a>
			</div>
			<div id='nav'>
				<div class='nav-item nav-page'><a class="<? echo $work_class;?>" href="work<? echo $id_html;?>">work</a></div>
				<div class='nav-item nav-page'><a class="<? echo $about_class;?>" href="about<? echo $id_html;?>">about</a></div>
				<div class='nav-item header-icon' id='email'><a href="mailto:rayuen@gmail.com"><img src="img/icon/email.svg"></a></div>
				<div class='nav-item header-icon'><a href="http://www.linkedin.com/in/rayuen" target='_blank'><img src="img/icon/linkedin.svg"></a></div>
				<div class='nav-item header-icon'><a href="https://dribbble.com/raystation" target='_blank'><img src="img/icon/dribbble.svg"></a></div>
			</div>
		</div>
	</header>

	<div class="container main-container add-bottom opacity-fade" >