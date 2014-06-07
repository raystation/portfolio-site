<div class="sixteen columns">
			
			<?php  
				echo "<div class='slick'>\n";
					foreach($img_info as $img) {
					    echo 
					    "\t\t\t\t<div><img class=\"scale-with-grid add-bottom\" src=\"".$path.$img["file"]."\" alt=\"".$img["alt"]."\"></div>\n";
					}
				echo "\t\t\t</div>";

			;?>

			<div class="twelve columns alpha description">
				<?php echo "<p>".$description."</p>";?>
				
				<?php related_check();?>

			</div>

			<div class="four columns omega caption">
				<?php echo "<h5>".$title."</h5>";?>
				<?php echo "<p>".$sidebar."</p>";?>
				<?php if ( $tools == !NULL) { 
					echo "<div class='list-spacing-fix'>";
					echo "<hr><h6>Tools Used:</h6>"; 
					include 'inc/lists.php';
					// list_html($tools);
					print_skill_html();
					echo "</div>";
					
				}?> 

			</div>

		</div> <!-- end sixteen -->