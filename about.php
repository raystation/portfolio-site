<?php 	$id = $_GET["id"];	$section="about";		if ( is_null($id) ) {		$id = "";	} 	switch ( $id ) {		default:		$pageTitle = "Ray Yuen | About";		include 'inc/header.php';		include 'pages/about.php';		break;		case 'resume':		$pageTitle = "Ray Yuen | Resum&eacute;";		include 'inc/header.php';		include 'pages/resume.php';		break;		case 'jobs':		$pageTitle = "Ray Yuen | Jobs";		include 'inc/header.php';				include 'pages/jobs.php';		break;	}	include('inc/footer.php');