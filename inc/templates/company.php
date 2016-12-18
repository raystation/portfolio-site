		<?php
			switch ( $title ) {
				case 'Museyon Guides':
				$projects=get_museyon_books();
				break;

				case "Suspended Belief Studios":
				$projects=get_SBS_projects();
				break;

				case "The Pok&eacute;mon Company":
				$projects=get_pokemon_projects();
				break;

				default:
				break;
			}
		?>

		<div class="sixteen columns">

			<?
				if (file_exists("$path/logo.svg")) {
					echo "<img class='scale-with-grid add-bottom desktop' alt='$title logo' src='$path/logo.svg'>";
					echo "<img class='scale-with-grid add-bottom mobile' alt='$title logo' src='$path/logo-mobile.svg'>";
				}
				if (file_exists("$path/logo.png")) {
					echo "<img class='scale-with-grid add-bottom desktop' alt='$title logo' src='$path/logo.png'>";
					echo "<img class='scale-with-grid add-bottom mobile' alt='$title logo' src='$path/logo-mobile.png'>";
				}
				// echo '<img src="'.$path.'logo.'.$logo.'" alt="'.$title.' logo" class="scale-with-grid add-bottom desktop">';
				// echo '<img src="'.$path.'logo.'.$logo.'" alt="'.$title.' logo" class="scale-with-grid add-bottom desktop">';
				// echo '<img src="'.$path.'logo-mobile.'.$logo.'" alt="'.$title.' logo" class="scale-with-grid add-bottom mobile">';
			?>

			<div class="twelve columns description alpha add-bottom">
				<?php
					echo "<h5>".$title."</h5>";
					echo "<p>".$description."</p>"
				?>

			</div>

			<div class="four columns omega caption add-bottom">
				<?php
					//echo '<img src="'.$path.$logo.'" alt="'.$title.' logo" class="scale-with-grid">';
					echo $sidebar;
				?>

			</div>


		</div> <!-- end sixteen -->

		<?php skeleton_print_page_thumbnail_4($projects) ;?>


