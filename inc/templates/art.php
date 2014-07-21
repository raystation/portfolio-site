<div class="sixteen columns">
	<?php 
		echo "test";
		foreach($img_info as $img) {
			echo '<img src="'.$path.$img["file"].'" alt="'.$img["alt"].'"> ';
		}
	;?>

	<div class="twelve columns alpha description">
		<?php echo "<p>".$description."</p>";?>
		
		<?php related_check();?>

	</div>

	<div class="four columns omega caption">
		<?php echo "<h5>".$title."</h5>\n";?>
		<?php echo "<p>".$sidebar."</p>\n";?>
		<?php if ( $tools == !NULL) { 
			echo "<div class='list-spacing-fix'>\n";
			echo "<hr><h6>Tools Used:</h6>\n"; 
			include 'inc/lists.php';
			print_skill_html();
			echo "</div>\n";
			
		}?> 

	</div>

</div> <!-- end sixteen -->