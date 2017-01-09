<?
	$project = (isset( $_GET["project"] ) ? $_GET["project"] : null );
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

		case 'chronicles-of-old-paris':
		$title = 'Chronicles of Old&nbsp;Paris';
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

		case '10th-anniversary':
		$title = 'Pok&eacute;mon: 10th Anniversary';
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

		case 'museyon-guides':
		$title = 'Museyon Guides';
		break;

		case 'pokemon':
		$title = 'The Pok&eacute;mon Company';
		break;

		case 'toy-fair':
		$title = 'Pok&eacute;mon: Toy Fair';
		break;

		case 'mystery-dungeon':
		$title = 'Pok&eacute;mon: Mystery&nbsp;Dungeon';
		break;

		case 'battle-revolution':
		$title = 'Battle Revolution';
		break;

		case 'pocket-pokedex':
		$title = 'Pocket Pok&eacute;dex';
		break;

		case 'dp-launch':
		$title = 'Pok&eacute;mon: Diamond & Pearl Launch';
		break;

		case 'licensing-show':
		$title = 'Licensing Show';
		break;

		case 'pokemon-logos':
		$title = 'Pok&eacute;mon: Logos';
		break;

		case 'portfolio-site':
		$title = 'Portfolio Site';
		break;

		case 'lesconcierges':
		$title = 'LesConcierges';
		break;

		case 'wired':
		$title = 'Wired';
		break;

		case 'holiday-2014':
		$title = 'Holiday Card 2014';
		break;

		case 'adelle-marcero':
		$title = 'Adelle Marcero Portfolio Site';
		break;

		case 'nextlesson':
		$title = 'NextLesson';
		break;

		case 'nextlesson-search-browse':
		$title = 'NextLesson Search and Browse Page';
		break;

		case 'nextlesson-interestid':
		$title = 'InterestID';
		break;

		case 'nextlesson-pt':
		$title = 'Interactive Performance Tasks';
		break;

		case 'nextlesson-avatars':
		$title = 'Avatars';
		break;

		case 'nextlesson-library':
		$title = 'Graphics Library';
		break;

		case 'nextlesson-glossary':
		$title = 'NextLesson Glossary Terms';
		break;

		case 'nextlesson-covers':
		$title = 'NextLesson Lesson Covers';
		break;
	}

if ( !isset($title) ) { $title = "Work"; }
include('inc/header.php');

// IF THE PROJECT IS SET
if ( isset($project) ) {

	// IF THE TEMPLATE IS SET
	if ( isset($template) ){

		// DOUBLE CHECKS TO SEE IF THE TEMPLATE FILE EXISTS, ELSE BASIC
		$template_path = "inc/templates/$template.php";
		if ( file_exists( $template_path ) ) { include $template_path; }
		else { include 'inc/templates/basic.php'; }

	} else {
		// TEMPLATE NOT SET, USE BASIC
		include 'inc/templates/basic.php';
	}
}
// TODO: have thumbnails not print on company page or consolidate

//produces thumbnails for homepage and below the projects
skeleton_print_thumbnail_4($works);

include('inc/footer.php');
