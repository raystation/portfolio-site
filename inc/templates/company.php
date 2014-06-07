		<?php 
			switch ( $title ) {
				case 'Museyon Guides':
				$projects=get_museyon_books();
				break;

				case "Suspended Belief Studios":
				$projects=get_SBS_projects();
				break;

				case "Pok&eacute;mon":
				$projects=get_pokemon_projects();
				break;
				
				default:
				break;
			}
		;?>

		<div class="sixteen columns">
			
			<?php  
				// echo "<div class='slick'>\n";
				// 	foreach($img_info as $img) {
				// 	    echo 
				// 	    "\t\t\t\t<div><img class=\"scale-with-grid add-bottom\" src=\"".$path.$img["file"]."\" alt=\"".$img["alt"]."\"></div>\n";
				// 	}
				// echo "\t\t\t</div>";
				echo '<img src="'.$path.'logo.'.$logo.'" alt="'.$title.' logo" class="scale-with-grid add-bottom desktop">';
				echo '<img src="'.$path.'logo-mobile.'.$logo.'" alt="'.$title.' logo" class="scale-with-grid add-bottom mobile">';
			;?>

			<div class="twelve columns description alpha add-bottom">
				<?php 
					echo "<h5>".$title."</h5>";
					echo "<p>".$description."</p>"
				;?>
				
			</div>

			<div class="four columns omega caption add-bottom">
				<?php 
					//echo '<img src="'.$path.$logo.'" alt="'.$title.' logo" class="scale-with-grid">';
					echo $sidebar;
				;?>

			</div>
			
			
		</div> <!-- end sixteen -->
		
		<?php skeleton_print_page_thumbnail_4($projects) ;?>	
		

