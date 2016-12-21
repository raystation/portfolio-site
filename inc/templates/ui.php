<div class="sixteen columns">
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
		?>

		<?php related_check();?>

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