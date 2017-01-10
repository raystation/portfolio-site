<?

	if ( !is_null($path) ) {
		// checks for ADDITIONAL_IMG folder for support images
		if ( file_exists("$path/additional_img") ) {
			$additional_img_html = skeleton_html(2,$path,$folder="additional_img");
		} else {
			$additional_img_html = "";
		}
	}
	else
	{
		$path="";
		$additional_img_html = "fill out information on work-info";
	}

?>

<div class="sixteen columns">
	<!-- basic -->

	<?php
		if (isset($img_info)) {
			echo "<div class='slick'>\n";
				foreach($img_info as $img) {
				    echo
				    // "\t\t\t\t<div><img class='scale-with-grid tooltip add-bottom' src=\"".$path.$img["file"]."\" alt=\"".$img["alt"]."\"></div>\n";
				    "\t\t\t\t<div><img class='scale-with-grid tooltip add-bottom' src='$path/$img[file]' alt='$img[alt]'></div>\n";
				}
			echo "\t\t\t</div>";
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
				echo "<img class='scale-with-grid' src='$path/cover.jpg' alt='$title Top Image'>";
			}
			else
			{
				echo "<img class='scale-with-grid' src='img/hero_default.jpg' alt='$title Top Image'>";
			}
		}
	?>
	<?php echo "<h1 style='margin-top:40px;'>$title</h1>\n";?>

	<div class="twelve columns alpha description">

		<?
		echo "
			<p>$description</p>
			$additional_img_html
		";
		// related_check();
		$related_projects_array = related_projects_check($company);

		if ($related_projects_array !== NULL) {
			echo "
				<div class='clearfix'></div>
				<div class='related'>
				<hr style='margin-top:80px;width:75%'>
				<h2>Related Projects:</h2>
				<ul>
			";
			foreach ($related_projects_array as $key => $related_project) {
				if ($related_project['name'] !== $title) {
					echo "<li><a href='$related_project[path]'>$related_project[name]</a>";
				}
			}
			echo "</ul></div>";
		}

		?>

	</div>

	<div class="four columns omega caption">

		<?php echo "<p>$sidebar</p>\n";?>
		<?php if ( $tools == !NULL) {
			echo "<div class='list-spacing-fix'>\n";
			echo "<hr><h6>Tools Used:</h6>\n";
			include 'inc/lists.php';
			print_skill_html();
			echo "</div>\n";

		}?>

	</div>

</div> <!-- end sixteen -->