<?

require_once 'functions.php';
$project = (isset( $_GET["project"] ) ? $_GET["project"] : null );
$id = (isset( $_GET["id"] ) ? $_GET["id"] : null );
$subhead_filter_padding="";
$selected_filter = (isset( $_GET["f"] ) ? $_GET["f"] : null );

// FILTERS TURNED OFF FOR NOW
$filter_list_html = get_filter_list_html($selected_filter);

//projects to show on the front page
$number_of_thumbnails = 99;

if ( isset($id) ) {
	$id_html = "?id=$id";
} else {
	$id_html="";
}

$section = "work";

// if ( $project ) {
// 	$path = "img/$project";
// }

// variable setting
$subtitle = isset( $subtitle) ? $subtitle : null;

if ( !isset($project) ) {
	$title = "Work";
} else {
	$title = get_project_title($project);
}
$header_add .= "<meta name ='title' content='$title'>";

include('inc/header.php');

// Looks for project text variable file
if ( isset($project) && file_exists("$path/$project.php") ) {
	include "$path/$project.php";
}
// else {
// 	// echo "$path/$project.php does not exist.";
// }

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
	// echo "TAGS";
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
	shuffle($works);
}


// AUTO GENERATE CONTENT
$content = isset($content) ? $content : "";
if ( isset($path)) {
	if ($content=="") {
		if ( file_exists("$path/$project-content.md") ) {
			$content = markdown_exist("$path/$project-content.md");
		}
	}
}

// ========================
// DEFAULT VIEW (based on on view template)

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

	// if (isset($section)) {
	// 	if ( $section=="work" && $id ) {
	// 		$subhead_filter_padding = " subhead-filter-padding";
	// 	}
	// }

	// FILTERS: DESKTOP TOP
	echo "

		<div class='filters'>
			$filter_list_html
		</div>
	";

	// echo "// <div class='sixteen columns'> // 	<h2>Selected Works</h2> // </div>";
	// skeleton_print_thumbnail_4($works);

	// filter out the projects we don't want to output on the default view
	if (!isset($selected_filter)) {
		$selected_works=array();
		foreach ($works as $key => $work) {
			if ($work['work-display']==true) {
				$selected_works[]=$work;
			}
		}
		full_thumbnail($selected_works);
	} else {
		full_thumbnail($works);
	}

	// var_dump($selected_works);
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
	}
}


include('inc/footer.php');
echo $landing_page_nav;

// ========================

function get_filters(){
	$filter_list = array(
		array( "skill"=>"Marketing & Branding", "url"=>"marketing-branding"),
		array( "skill"=>"Print", "url"=>"print-design"),
		array( "skill"=>"UI/UX", "url"=>"ui-ux"),
		array( "skill"=>"Web", "url"=>"web"),
		array( "skill"=>"Illustration", "url"=>"illustration"),
		// array( "skill"=>"Marketing", "url"=>"marketing"),
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

