<?

// TAGS
$tags = isset($tags) ? get_tags($tags) : null;
$tags_html = isset($tags) ? "<ul class='tags'>$tags</ul>" : null;

$project_path="";

$hero_img_html="";
$img_slider_html="";
$project_link_html="";

if (!isset($thumbnail_size)) {$thumbnail_size="medium";}

if ( isset($hero_img) ) {
	// </div>
	// <div class='hero-container'>
	// 	<img src='$hero_img' alt='$hero_img'>
	// </div>

	// HERO IMAGES
		$hero_img = check_for_img_format("$path/hero","hero-img");
		$hero_img_mobile = check_for_img_format("$path/hero","hero-img-mobile");

		// checks for retina image
		$hero_img_retina = check_for_img_format("$path/hero","hero-img-retina");
		if ($hero_img_retina) {
			$hero_img_retina_html = "srcset='$hero_img_retina 2x'";
		}

		$text = $description . $content;

	$hero_img_html="
	</div>
	<div class='container-fl'>
		<div class='photo'>
		  <picture>
		    <source media='(min-width: 401px)' srcset='$hero_img_retina'/>
		    <source media='(max-width: 400px)' srcset='$hero_img_mobile'/>
		    <img src='$hero_img' class='scale-with-grid' alt='$title' $hero_img_retina_html />
		  </picture>
		</div>
	</div>
	<div class='container main-container add-bottom opacity-fade'>
	";
} else {
	// MAKES THE TOP SLIDER
	$img_slider_html="";
	if (isset($img_info)) {
		$img_slider_html .= "<div class='slick'>";
			foreach($img_info as $img) {
				$outline_class="";
				$caption_text="";
				// this is if we want thumbnails
				if (isset($img['class'])) {
					$outline_class="thumb-outline";
				}
				if (isset($img['caption'])) {
					$caption_text = $img['alt'];
				}
			    $img_slider_html .= "<div><img class='scale-with-grid tooltip add-bottom $outline_class' src='$path/$img[file]' alt='$img[alt]'>$caption_text</div>";
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
// if ( isset($company) ) {
// 	$related_projects_array = related_projects_check($company);
// 	if ($related_projects_array !== NULL) {
// 		$related_project_html .= "
// 			<div class='clearfix'></div>
// 			<div class='related'>
// 			<hr style='margin-top:40px;width:10%'>
// 			<h3>Related Projects</h3>
// 			<ul>
// 		";
// 		foreach ($related_projects_array as $key => $related_project) {
// 			if ( isset($id) ) {
// 				$project_path = "work?project=$related_project[path]&id=$id";
// 			} else {
// 				$project_path = $related_project['path'];
// 			}
// 			if ($related_project['name'] !== $title) {
// 				$related_project_html .= "<li><a href='$project_path'>$related_project[name]</a>";
// 			}
// 		}
// 		$related_project_html .= "</ul></div>";
// 	}
// }

if ( !is_null($path) ) {
	// ADDITIONAL IMAGES
	// checks for ADDITIONAL_IMG folder

	if ( isset($auto_slideshow) ) {
		$additional_img_html = get_slider_html( $path );
	} elseif ( file_exists("$path/additional_img") ) {
		// if ( !isset($additional_img_column_count) ) {
		// 	$additional_img_column_count = 2;
		// }
		// $additional_img_html = skeleton_html($additional_img_column_count,$path,$folder="additional_img");
		$additional_img_html = flex_tiles($thumbnail_size,$path,$folder="additional_img");
	} else {
		$additional_img_html = "";
	}

	// SIDEBAR LOGO // fills the sidebar with a logo if it exists
	// $sidebar_logo = "";
	// $sidebar_logo_path = check_for_img_format($path,"logo");
	// if ($sidebar_logo_path) {
	// 	$sidebar_logo = "<img src='$sidebar_logo_path' alt='Logo' class='scale-with-grid'>";
	// }
}
else
{
	$path = "";
	$additional_img_html = "fill out information on work-info";
}

// TOOLS
$tools_html = get_skill_html( $tools );
if ($tools) {
	$tools_html = "
		<div class='list-spacing-fix'>
			$tools_html
		</div>
	";
} else {
	$tools_html = "";
}

// PROEJCT LINK
if ($project_link) {
	$project_link_html = "
		<p><a ,bhref='$project_link'>link to project <i class='fa fa-arrow-right' aria-hidden='true'></i></a></p>
	";
}

// HTML
$page = "
	$hero_img_html

	</div>
	<div class='mobile'>$img_slider_html</div>
	<div class='container main-container add-bottom opacity-fade'>

	<div class='project-details sixteen columns'>
		<div class='desktop'>
			$img_slider_html
		</div>
		<h1 class='title'>$title</h1>
		<h2 class='subtitle'>$subtitle</h2>
		<div class='twelve columns alpha'>
			<p>$description</p>
			<div class='content mobile'>$content $project_link_html</div>

			<div class='project-sidebar mobile'>
				<hr class='resume' style='width:10%'>
				$sidebar
				$project_link_html
				$tools_html
			</div>
		</div>
		<div class='desktop'>
			<div class='project-sidebar four columns omega'>
				$sidebar
				$project_link_html
				$tools_html
			</div>
		</div>
		<div class='desktop'>
			<div class='sixteen columns alpha'>
				<div class='content'>$content $project_link_html</div>
			</div>
		</div>

		$additional_img_html
		$tags_html
		$other
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
