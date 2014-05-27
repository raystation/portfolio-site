

		<div class="sixteen columns">
			
			<?php  
				echo "<div class='slick'>\n";
					foreach($img_info as $img) {
					    echo 
					    "\t\t\t\t<div><img class=\"scale-with-grid add-bottom\" src=\"".$path.$img["file"]."\" alt=\"".$img["alt"]."\"></div>\n";
					}
				echo "\t\t\t</div>";
				
				// CODE WILL READ DIRECTORY AND PUTS IMAGES TO THE SCREEN
				
				// $path = ( strtolower ( $title ) );
				// $path = ( str_replace(" ", "-", $path ) );

				// $imgpath = "img/".$path."/";
				// $images = scandir( $imgpath );

				// echo "<div class='slick'>\n";
				// foreach ( $images as $image ) {
					
				// 	if ( strpos( $image,'jpg' ) || strpos( $image,'png' ) ) { 
				// 		$alt_text = ( str_replace("-", " ", $image ) );
				// 		$alt_text = ( str_replace(".jpg", "", $alt_text ) );
				// 		$alt_text = ( str_replace(".png", "", $alt_text ) );
						
				// 		echo "<div><img class= \"scale-with-grid add-bottom\" src=\"" .  $imgpath . $image . "\" alt=\"" .  $alt_text . "\"></div>\n";
				// 	}
				// }
				// echo "</div>\n";

			;?>

			<div class="twelve columns alpha">
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
							$title == "Abriendo Puertas / Opening&nbsp;Doors" or 
							$title == "Color Chameleon") {
						include 'inc/related-sb.php';
					}					

					// if ( $pageTitle == "The 3" || "Indiginauts" || "Abriendo Puertas / Opening&nbsp;Doors" || "Color Chameleon" || "Suspended Belief Studios" ) { include 'inc/related-sb.php'; }
					
					// if ( $title == "Art + Paris" or "Chronicles of Old&nbsp;Rome" or "Chronicles of Old&nbsp;Boston" or "Chronicles of Old Las&nbsp;Vegas" or "Chronicles of Old&nbsp;London" or "Chronicles of Old New&nbsp;York" or "Chronicles of Old&nbsp;Paris" or "City&nbsp;Style" ) { include 'inc/related-museyon.php'; }

				;?>

			</div>

			<div class="four columns omega caption">
				<?php echo "<h5>".$title."</h5>";?>
				<?php echo "<p>".$sidebar."</p>";?>
			</div>

		</div> <!-- end sixteen -->

