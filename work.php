<?php 
	$project = $_GET["project"];
	$section="work";
	switch ( $project ) {
		default:
		$pageTitle = "Ray Yuen | Work";
		break;

		case '100-principles-of-game-design':
		$title = '100 Principles of Game&nbsp;Design';
		break;

		case 'abriendo-puertas':
		$title = 'Abriendo Puertas / Opening&nbsp;Doors';
		break;

		case 'project-animore':
		$title = 'Project Animore';
		break;

		case 'arceus':
		$title = 'Arceus and the Jewel of&nbsp;Life';
		break;

		case 'art-and-paris':
		$title = 'Art + Paris';
		break;

		case 'chronicles-of-old-boston':
		$title = 'Chronicles of Old&nbsp;Boston';
		break;

		case 'chronicles-of-old-las-vegas':
		$title = 'Chronicles of Old Las&nbsp;Vegas';
		break;

		case 'chronicles-of-old-new-york':
		$title = 'Chronicles of Old New&nbsp;York';
		break;

		case 'chronicles-of-old-london':
		$title = 'Chronicles of Old&nbsp;London';
		break;

		case 'chronicles-of-old-rome':
		$title = 'Chronicles of Old&nbsp;Rome';
		break;

		case 'city-style':
		$title = 'City Style';
		break;

		case 'color-chameleon':
		$title = 'Color Chameleon';
		break;

		case 'darkrai':
		$title = 'The Rise of Darkrai';
		break;

		case 'edgeware':
		$title = 'Edgeware';
		break;

		case 'egg-baby':
		$title = 'Egg Baby';
		break;

		case 'indiginauts':
		$title = 'Indiginauts';
		break;

		case 'malado-baldwin-wordpress':
		$title = 'Malado Baldwin Wordpress site';
		break;

		case 'malado-baldwin-indexhibit':
		$title = 'Malado Baldwin';
		break;

		case 'monkey-mo':
		$title = 'Monkey Mo, Monkey&nbsp;Go!';
		break;

		case 'nerd-comics':
		$title = 'Nerd Comics';
		break;

		case '15th-anniversary':
		$title = 'Pok&eacute;mon: 15th Anniversary';
		break;

		case 'feature-shop':
		$title = "Pok&eacute;mon: Toys'R'Us Feature Shop";
		break;

		case 'sarah-walko-wordpress':
		$title = 'Sarah Walko website';
		break;

		case 'scavenger-hunt':
		$title = 'Scavenger Hunt';
		break;

		case 'storymaps':
		$title = 'StoryMaps';
		break;

		case 'suspended-belief-studios':
		$title = 'Suspended Belief Studios';
		break;

		case 'the3':
		$title = 'The 3';
		break;

	}
	
if ( is_null($title) ) { $pageTitle = "Ray Yuen | Work"; } else { $pageTitle = "Ray Yuen | " . $title; }
include('inc/header.php');
if ( is_null($project) ) {} else { include('inc/content.php'); }
include('inc/thumbnails.php');
include('inc/footer.php'); 
