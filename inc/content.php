

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
			</div>

			<div class="four columns omega caption">
				<?php echo "<h5>".$title."</h5>";?>
				<?php echo "<p>".$sidebar."</p>";?>
			</div>

		</div> <!-- end sixteen -->

