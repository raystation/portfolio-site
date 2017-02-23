<?
include_once 'inc/lists.php';
?>

<section class="sixteen columns">
	<div class="four columns alpha caption add-bottom">
		<?
			echo "
			<h5>$title</h5>
			<p>$description</p>
			<p>$sidebar</p>
			";
		?>

		<div class="desktop">
			<?
				if ( $tools == !NULL) {
					echo "<div class='list-spacing-fix'>\n";
					echo "<hr><h6>Tools Used:</h6>\n";
					print_skill_html();
					echo "</div>\n";
				}
				// related_check();
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

		<div class="clear"></div>

	</div>

	<div class="twelve columns omega description add-bottom">
		<!-- cover image -->
		<?
			if ( isset($movie) ) {
				echo "
					<video width='320' height='240' controls>
					  <source src='$movie' type='video/mp4'>
					Your browser does not support the video tag.
					</video>
				";
			} elseif ( file_exists("$path/cover.jpg") ) {
				echo "<img class='scale-with-grid' src='$path/cover.jpg'>";
			}
		?>
	</div>

	<div class="description add-bottom">
		<?
			foreach ($img_info as $img) {
				echo "<figure class='add-bottom'><img class='scale-with-grid' src='$path/$img[file]' alt='$img[alt]'><figcaption>$img[alt]</figcaption></figure>";
			}

			if ( !is_null($other) ) {
				echo $other;
			}
		?>

		<div class="mobile">
			<?
				if ( $tools == !NULL) {
					echo "
						<div class='list-spacing-fix'>\n
						<hr><h6>Tools Used:</h6>\n
					";
					include_once 'inc/lists.php';
					print_skill_html();
					echo "</div>\n";
				}
				// related_check();
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

	</div>
</section>