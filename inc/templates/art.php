<section class="sixteen columns">

	<div class="twelve columns alpha description add-bottom">
		
		<?php 
			foreach($img_info as $img) {
				echo '<figure class="add-bottom"><img class="scale-with-grid" src="'.$path.$img["file"].'" alt="'.$img["alt"].'"><figcaption>'.$img["alt"].'</figcaption></figure>';
			}
		;?>
	</div>

	<div class="four columns omega caption add-bottom">
		<?php echo "<h5>".$title."</h5>\n";?>
		<?php echo "<p>".$description."</p>";?>
		<?php echo "<p>".$sidebar."</p>\n";?>
		<?php if ( $tools == !NULL) { 
			echo "<div class='list-spacing-fix'>\n";
			echo "<hr><h6>Tools Used:</h6>\n"; 
			include 'inc/lists.php';
			print_skill_html();
			echo "</div>\n";
			
		}?> 
				<?php related_check();?>
	<div class="clear"></div>

	</div>

</section>