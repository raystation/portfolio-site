

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
				
				<?php 

					if ( $title == "Art + Paris" or 
							$title == "Chronicles of Old&nbsp;Rome" or 
							$title == "Chronicles of Old&nbsp;Boston" or 
							$title == "Chronicles of Old New&nbsp;York" or 
							$title == "Chronicles of Old&nbsp;London" or 
							$title == "Chronicles of Old Las&nbsp;Vegas" or 
							$title == "Chronicles of Old&nbsp;Paris" or 
							$title == "City Style") {
						include 'inc/related-museyon.php';
					}

					if ( $title == "The 3" or 
							$title == "Suspended Belief Studios" or 
							$title == "Indiginauts" or 
							$title == "Project Animore" or 
							$title == "Abriendo Puertas / Opening&nbsp;Doors" or 
							$title == "Color Chameleon") {
						include 'inc/related-sb.php';
					}

				;?>

			</div>

			<div class="four columns omega caption">
				<?php echo "<h5>".$title."</h5>";?>
				<?php echo "<p>".$sidebar."</p>";?>
			</div>

		</div> <!-- end sixteen -->

