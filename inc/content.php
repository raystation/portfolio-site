

		<div class="sixteen columns">
			
			<?php  
				echo '<div class="slick">';
					foreach($img_info as $img){
					    echo '<div><img src="'.$path.$img["file"].'" alt="'.$img["alt"].'" class="scale-with-grid add-bottom"/></div>';
					}
					echo '</div>';
			;?>

			<div class="twelve columns alpha">
				<?php echo "<p>".$description."</p>";?>
			</div>

			<div class="four columns omega caption">
				<?php echo "<h5>".$title."</h5>";?>
				<?php echo "<p>".$sidebar."</p>";?>
			</div>

		</div> <!-- end sixteen -->
