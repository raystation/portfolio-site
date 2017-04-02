<?
	$project = (isset( $_GET["project"] ) ? $_GET["project"] : null );
	$id = (isset( $_GET["id"] ) ? $_GET["id"] : null );

	$selected_filter = (isset( $_GET["f"] ) ? $_GET["f"] : null );
	$filter_list_html = get_filter_list_html($selected_filter);

	//projects to show on the front page
	$number_of_thumbnails = 99;

	if ( isset($id) ) {
		$id_html = "?id=$id";
	} else {
		$id_html="";
	}

	$section = "work";

	switch ( $project ) {
		default:
		$pageTitle = "Ray Yuen | Work";
		break;

		case '100-principles-of-game-design':
		$title = '100 Principles of Game Design';
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

		case 'malado-baldwin':
		$title = 'Malado Baldwin';
		break;

		// case 'malado-baldwin-indexhibit':
		// $title = 'Malado Baldwin';
		// break;

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

		case 'sarah-walko':
		$title = 'Sarah Walko';
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
		$title = 'Pok&eacute;mon: Mystery Dungeon';
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
		$title = 'Adelle Marcero';
		break;

		case 'idibon':
		$title = 'idibon';
		break;

		case 'nextlesson':
		$title = 'NextLesson';
		break;

		case 'nextlesson-search-browse':
		$title = 'NextLesson Search and Browse Page';
		break;

		case 'nextlesson-interestid':
		$title = 'NextLesson InterestID';
		break;

		case 'nextlesson-marketing':
		$title = 'NextLesson Marketing';
		break;

		case 'nextlesson-interactive':
		$title = 'NextLesson Interactive';
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

		case 'inktober-2016':
		$title = "#Inktober2016";
		break;

		case 'nextlesson-characters':
		$title = "NextLesson Characters";
		break;
	}

if ( !isset($title) ) { $title = "Work"; }

// COMING FROM THE JOB LANDING PAGE, THIS WILL GENERATE A SECONDARY NAV BAR ON THE BOTTOM
if ($id) {
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
	$landing_page_nav = "
		<div class='back-to-landing-page-menu'>
			<div>
				<a class='tooltip' title='back to job inquiry' href='./hire-me?id=$id'>&#11013;</a>
				<strong>Highlighted Projects for $hiring_company:</strong>
				$sample_projects_html
			</div>
		</div>
	";
} else {
	$landing_page_nav="";
}

include('inc/header.php');

// if (isset($title)) {
// 	foreach ($works as $key => $work) {
// 		if (array_search($title, $work)){
// 			$tags = $work['tags'];
// 			break;
// 		};
// 	}
// }

// IF THE PROJECT IS SET (VIEWING A PROJECT)
// THEN IT WILL TAKE THE PROJECT OUT OF THE WORK ARRAY SO YOU DON'T GET IT IN THE RECENT PROJECTS
if ( isset($project) ) {
	foreach ($works as $key => $work) {
		if (array_search($title, $work)){
			$current_project_tags = $work['tags'];
			// var_dump($tags);
			break;
		};
	}
	// $tags = $works[$key][$tags];
	unset($works[$key]);
	$works = array_values($works);
}

// GRABS THE TEMPLATE FILE
// IF THE PROJECT IS SET
if ( isset($project) ) {

	// IF THE TEMPLATE IS SET
	if ( isset($template) ){
		// DOUBLE CHECKS TO SEE IF THE TEMPLATE FILE EXISTS, ELSE BASIC
		$template_path = "inc/templates/$template.php";
		if ( file_exists( $template_path ) ) { include $template_path; }
	} else {
		// TEMPLATE NOT SET, USE BASIC
		$template = "basic";
		include 'inc/templates/basic.php';
	}
}
// TODO: have thumbnails not print on company page or consolidate

//produces thumbnails for homepage and below the projects

if ( !isset($template) ) {
	// DEFAULT VIEW
	echo "
		<div class='desltop-large desktop'>
			<div class='filters'>
				$filter_list_html
			</div>
		</div>
	";
	// echo "// <div class='sixteen columns'> // 	<h2>Selected Works</h2> // </div>";
	// skeleton_print_thumbnail_4($works);
	full_thumbnail($works);
}
elseif ($template=="company") {
	echo "
	<div class='container add-top'>
		<div class='sixteen columns add-bottom'><a href='work$id_html'>&#11013; Back to projects</a></div>
	</div>";
	}
else {
	// RECENT PROJECTS

	if (isset($company)) {
		// PRINTS RELATED PROJECTS BY COMPANY NAME [4]
		$function_name = strtolower($company);
		$function_name = replace_string( $function_name, " ", "_" );

		$possible_array = "get_". $function_name ."_projects";
		if ( function_exists( $possible_array ) ) {
			$related_array = $possible_array();
			foreach ($related_array as $key => $related_item) {
				if (array_search($title, $related_item)) {
					$current_project = $key;
				}
			}
			if (isset($current_project)) {unset($related_array[$current_project]);}
			$related_array = array_values($related_array);
			shuffle($related_array);
			skeleton_print_thumbnail_4($related_array,4, "Other $company Projects");
		}
	} else {
		// PRINT RELATED PROJECTS BY TAG[4]
		// get tags, make array of all tags
		// $tags = $works[$project]['tags'];
		// var_dump($current_project_tags);
		// echo "<br>";


		// searches for other projects just based on first tag, doesn't do the second.
		$related_projects_by_tag = array();

		$x=0; //step counter
		$project_count=8;
		$related_projects_count=1;
		$tag_search=0;

		$current_project_tag = $current_project_tags[0]; //the tags on the current project
		for ($i=0;  $related_projects_count <= $project_count; $i++) {
			$temp_title = $works[$i]["path"];

			if ( isset($works[$i]['tags'][$tag_search]) ) {
				$compare_project_tag = $works[$i]['tags'][$tag_search];

				if ( $current_project_tag == $compare_project_tag && !in_array($compare_project_tag, $related_projects_by_tag) ) {
					$related_projects_by_tag[] = $works[$i];
					$related_projects_count++;
					// echo "$temp_title added with tag: $current_project_tag<br>";
				} else {
					// echo "$temp_title not added to array<br>";
				}
			} else {
				break;
			}
			if ($i == count($works)-1 ) {
				$i=0;
				$tag_search++;
			}
			// SAFEGUARD
			if ($i==60) {
				break;
			}
		}
		skeleton_print_thumbnail_4($related_projects_by_tag,0,"Related Projects");

		// while ( $related_projects_count <= $project_count ) {
		// 	$same_tags_array = array_intersect( $current_project_tags, $works[$x]["tags"] );

		// 	$temp_title = $works[$x]["path"];
		// 	if ($same_tags_array) {
		// 		// var_dump($same_tags_array);
		// 		echo "$x: $temp_title - match ";
		// 		foreach ($same_tags_array as $key => $tag) {
		// 			echo "[$tag] ";
		// 			if (!in_array($works[$x], $related_projects_by_tag)) {
		// 				$related_projects_by_tag[] = $works[$x];
		// 				$related_projects_count++;
		// 			}
		// 		}
		// 		echo "<br>";
		// 		$same_tags_array="";
		// 	} else {
		// 		echo "$x: $temp_title - no match<br>";
		// 	}

		// 	$x++;
		// 	if ($related_projects_count == 4) {
		// 		break;
		// 	}
		// 	if ($x == count($works)) {
		// 		break;
		// 	}
		// }
		// skeleton_print_thumbnail_4($related_projects_by_tag,4,"Related Projects by Tag");

		// foreach ($related_projects_by_tag as $key => $project) {
		// 	echo "Related Project $key: $project[name]<br>";
		// }

		// PRINTS OUR 4 RECENT PROJECTS
		// skeleton_print_thumbnail_4($works,4,"Recent Projects");
	}
}


include('inc/footer.php');
echo $landing_page_nav;

// ========================

function get_filters(){
	$filter_list = array(
		array( "skill"=>"UI/UX", "url"=>"ui-ux"),
		array( "skill"=>"Web Dev", "url"=>"web-dev"),
		array( "skill"=>"Illustration", "url"=>"illustration"),
		array( "skill"=>"Print Design", "url"=>"print-design"),
		array( "skill"=>"Branding", "url"=>"branding"),
		// array( "skill"=>"Places I Worked", "url"=>"places-i-worked"),
	);
	return $filter_list;
}
function get_filter_list_html( $selected_filter ){
	$html="";
	$filters = get_filters();
	// IS THE PERSON COMING FROM A JOB LANDING PAGE
	// checks to see if $id is set
	$id = (isset( $_GET["id"] ) ? $_GET["id"] : null );
	$id_html = !is_null($id) ? "?id=$id" : "";

	// sets ALL
	if ($selected_filter=="") {
		$html.="<div class='filter-item active'><a href='work$id_html'>All</a></div>";
	} else {
		$html.="<div class='filter-item'><a href='work$id_html'>All</a></div>";
	}

	$id_html = !is_null($id) ? "&id=$id" : "";
	foreach ($filters as $key => $filter) {
		if ( $selected_filter == $filter['url'] ) {
			$class="class='active'";
			if (!is_null($id)) {
				$html.="<div class='filter-item active'><a href='work.php?$id_html'>&times; $filter[skill]</a></div>";
			} else {
				$html.="<div class='filter-item active'><a href='work'>&times; $filter[skill]</a></div>";
			}
		} else {
			if ( isset($id) ) {
				$html.="<div class='filter-item'><a href='work.php?f=$filter[url]$id_html'>$filter[skill]</a></div>";
			} else {
				$html.="<div class='filter-item'><a href='$filter[url]'>$filter[skill]</a></div>";
			}
		}
	}
	return $html;
}

