<?

// TAGS
$tags = isset($tags) ? get_tags($tags) : null;
$tags_html = isset($tags) ? "<ul class='tags'>$tags</ul>" : null;

// MAKES THE TOP SLIDER
$img_slider_html="";
if (isset($img_info)) {
	$img_slider_html .= "<div class='slick'>";
		foreach($img_info as $img) {
		    $img_slider_html .= "<div><img class='scale-with-grid tooltip add-bottom' src='$path/$img[file]' alt='$img[alt]'></div>";
		}
	$img_slider_html .= "</div>";
}
else
{
	if ( !isset($path) ) {
		$title = !isset($path) ? $project : "";
		$path = "fill out information on work-info";
		$sidebar = "fill out information on work-info";
		$description = "fill out information on work-info. Meggings kogi biodiesel Cosby sweater Blue Bottle. Freegan PBR&B mustache, plaid tousled organic craft beer direct trade lo-fi synth messenger bag selfies mixtape bespoke. Tote bag actually 8-bit viral hella, Helvetica banjo +1 McSweeney's Vice literally kogi you probably haven't heard of them ethical. Austin fixie kogi, pour-over mumblecore occupy flannel raw denim Shoreditch PBR&B next level Pitchfork authentic High Life. Vinyl slow-carb stumptown aesthetic authentic. Wolf cornhole VHS Truffaut Vice. Mlkshk cred lomo Marfa, tattooed artisan bicycle rights.";
		$tools = array();
	}
	if ( file_exists("$path/cover.jpg") ) {
		$img_slider_html .=  "<img class='scale-with-grid' src='$path/cover.jpg' alt='$title Top Image'>";
	}
	else
	{
		$img_slider_html .=  "<img class='scale-with-grid' src='img/hero_default.jpg' alt='$title Top Image'>";
	}
}

// MAIN CONTENT
$content = isset( $content ) ? $content : null;
if ( isset($content) ) {
	$content = "
		<div class='clearfix'></div>
		$content
	";
}

// RELATED PROJECTS HTML
$related_project_html = "";
if ( isset($company) ) {
	$related_projects_array = related_projects_check($company);
	if ($related_projects_array !== NULL) {
		$related_project_html .= "
			<div class='clearfix'></div>
			<div class='related'>
			<hr style='margin-top:40px;width:10%'>
			<h3>Related Projects</h3>
			<ul>
		";
		foreach ($related_projects_array as $key => $related_project) {
			if ( isset($id) ) {
				$project_path =  "work?id=$related_project[path]&id=$id";
			} else {
				$project_path = $related_project['path'];
			}
			if ($related_project['name'] !== $title) {
				$related_project_html .= "<li><a href='$project_path'>$related_project[name]</a>";
			}
		}
		$related_project_html .= "</ul></div>";
	}
}

// ADDITIONAL IMAGES
if ( !is_null($path) ) {
	// checks for ADDITIONAL_IMG folder for support images
	if ( file_exists("$path/additional_img") ) {
		if ( !isset($additional_img_column_count) ) {
			$additional_img_column_count = 2;
		}
		$additional_img_html = skeleton_html($additional_img_column_count,$path,$folder="additional_img");
	} else {
		$additional_img_html = "";
	}
	// fills the sidebar with a logo if it exists
	if ( file_exists("$path/logo.jpg") ) {
		$sidebar_logo = "<img src='$path/logo.jpg' alt='Logo' class='scale-with-grid'>";
	}
	elseif ( file_exists("$path/logo.png") ) {
		$sidebar_logo = "<img src='$path/logo.png' alt='Logo' class='scale-with-grid'>";
	}
	else {
		$sidebar_logo = "";
	}
}
else
{
	$path="";
	$additional_img_html = "fill out information on work-info";
}

// TOOLS
$tools_html = get_skill_html( $tools );
if ($tools) {
	$tools_html = "
		<div class='list-spacing-fix'>
			<hr>
			<h6>Tools Used:</h6>
			$tools_html
		</div>
	";
} else {
	$tools_html = "";
}

// HTML
$page = "
<div class='project-details sixteen columns'>
	$img_slider_html
	<h1>$title</h1>
	<div class='twelve columns alpha intro'>
		<p>$description</p>
	</div>
	<div class='project-sidebar four columns omega caption'>
		<p>$sidebar</p>
		$tools_html
	</div>
	$content
	$additional_img_html
	$tags_html
</div> <!-- end sixteen -->
";
// TODO: add in related projects in the sidebar

echo $page;

// ========================
// FUNCTIONS

function get_tags( $tags ){
	$tags_html = "";
	if ( isset($tags) ) {
		foreach ($tags as $key => $tag) {
			$tags_html .= "
				<li><a href='work?f=$tag'>$tag</a>
			";
		}
	}
	return $tags_html;
}

