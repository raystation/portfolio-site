<?

	if ( !is_null($path) ) {
		// checks for ADDITIONAL_IMG folder for support images
		if ( file_exists("$path/additional_img") ) {
			$additional_img_html = skeleton_html(2,$path,$folder="additional_img");
		} else {
			$additional_img_html = "";
		}

		// fills the sidebar with a logo if it exists
		if ( file_exists("$path/logo.jpg") ) {
			$sidebar_logo = "<img src='$path/logo.jpg' alt='Logo' class='logo'>";
		}
		elseif ( file_exists("$path/logo.png") ) {
			$sidebar_logo = "<img src='$path/logo.png' alt='Logo' class='logo'>";
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

?>

<div class="sixteen columns project-details">
	<!-- basic -->
	<?

	if ( file_exists("$path/cover.jpg") ) {
		echo "<img class='scale-with-grid' src='$path/cover.jpg' alt='$title Top Image'>";
	}
	else
	{
		echo "<img class='scale-with-grid' src='img/hero_default.jpg' alt='$title Top Image'>";
	}

	//slideshow
	echo "<div class='slick'>\n";
	foreach($img_info as $img)
	{
	    echo "\t\t\t\t<div><img class='scale-with-grid tooltip add-bottom' src=\"".$path.$img["file"]."\" alt=\"".$img["alt"]."\"></div>\n";
	}
	echo "\t\t\t</div>";
	?>

	<? echo "<h1 style='margin-top:40px;'>$title</h1>\n";?>

	<div class="twelve columns alpha description">

		<?
		echo "
			<p>$description</p>
			$other
		";
		if ( isset($company) ) {
			$related_projects_array = related_projects_check($company);

			if ($related_projects_array !== NULL) {
				echo "
					<div class='clearfix'></div>
					<div class='related'>
					<hr style='margin-top:40px;width:10%'>
					<h3>Related Projects</h3>
					<ul>
				";
				foreach ($related_projects_array as $key => $related_project) {
					if ($related_project['name'] !== $title) {
						echo "<li><a href='$related_project[path]'>$related_project[name]</a>";
					}
				}
				echo "</ul></div>";
			}
		}
		?>

	</div>

	<div class="project-sidebar four columns omega caption">

		<?php echo "<p>$sidebar_logo $sidebar</p>\n";?>
		<?php if ( $tools == !NULL) {
			echo "<div class='list-spacing-fix'>\n";
			echo "<hr><h6>Tools Used:</h6>\n";
			include 'inc/lists.php';
			print_skill_html();
			echo "</div>\n";

		}?>

	</div>

</div> <!-- end sixteen -->