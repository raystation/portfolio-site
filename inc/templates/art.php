<section class="sixteen columns">


	<div class="four columns alpha caption add-bottom">
		<?php echo "<h5>".$title."</h5>\n";?>
		<?php echo "<p>".$description."</p>";?>
		<?php echo "<p>".$sidebar."</p>\n";?>

		<div class="desktop">
			<?php if ( $tools == !NULL) {
				echo "<div class='list-spacing-fix'>\n";
				echo "<hr><h6>Tools Used:</h6>\n";
				include_once 'inc/lists.php';
				print_skill_html();
				echo "</div>\n";

			}?>
			<?php related_check();?>
		</div>

	<div class="clear"></div>

	</div>

	<div class="twelve columns omega description add-bottom">
		<img class="scale-with-grid" src="<?php echo $path;?>/cover.jpg">
	</div>

	<div class="description add-bottom">

		<?php
			foreach($img_info as $img) {
				echo '<figure class="add-bottom"><img class="scale-with-grid" src="'.$path.$img["file"].'" alt="'.$img["alt"].'"><figcaption>'.$img["alt"].'</figcaption></figure>';
			}
		;?>

		<?php if ( !is_null($other) ) echo $other; ?>

		<div class="mobile">
			<?php if ( $tools == !NULL) {
				echo "<div class='list-spacing-fix'>\n";
				echo "<hr><h6>Tools Used:</h6>\n";
				include_once 'inc/lists.php';
				print_skill_html();
				echo "</div>\n";

			}?>
			<?php related_check();?>
		</div>

	</div>


</section>