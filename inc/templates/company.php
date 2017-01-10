		<?php
			switch ( $title ) {
				case 'Museyon Guides':
				$projects=get_museyon_projects();
				break;

				case "Suspended Belief Studios":
				$projects=get_suspended_belief_studios_projects();
				break;

				case "The Pok&eacute;mon Company":
				$projects=get_pokemon_projects();
				break;

				case "NextLesson":
				$projects=get_nextlesson_projects();
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
				elseif (file_exists("$path/logo.png"))
				{
					echo "<img class='scale-with-grid add-bottom desktop' alt='$title logo' src='$path/logo.png'>";
					echo "<img class='scale-with-grid add-bottom mobile' alt='$title logo' src='$path/logo-mobile.png'>";
				}
				else
				{
					echo "<img class='scale-with-grid add-bottom' src='img/hero_default.jpg' alt='$title Top Image'>";
				}
				echo "<h2>".$title."</h2>";
			?>

			<div class="twelve columns description alpha add-bottom">
				<?
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

		<?
		skeleton_print_page_thumbnail_4($projects);
		?>


