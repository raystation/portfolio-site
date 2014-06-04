<?php 
	$title = "Portraits";
	$pageTitle = "Ray Yuen | " . $title;
	include('inc/header.php'); ?>

	<div class="sixteen columns add-bottom">
		<div class="twelve columns alpha">
			<?php  
				$title = $_GET["title"];
				echo $title;
				foreach ( $img_info as $i ) {
					echo '<img class="scale-with-grid" src="img/portraits/'.$path.'/$i" alt="">';
				}
			;?>
		</div>
		<div class="four columns alpha">
			Walter White
		</div>
	</div>

<?php

	//adds home link if it's not the index page
	if ( $description !== NULL ) { echo '<div class="add-top add-bottom caption"><a href="index">Back to home</a></div>'."\n"; }
	
	// populates page with thumbnails from $work
	echo '<div class="sixteen columns">';
	$count=1;
	$alphacount;
	$omegacount;
	foreach ( $portraits as $i ) {
		echo "\t".'<div class="four columns'; 
		if ( $count == 1 or $count == $alphacount ) { echo ' alpha'; $alphacount=$count+4; } 
		if ( $count == 4 or $count == $omegacount ) { echo ' omega'; }
		echo '"><a href="'.$i[path].'"><img class="scale-with-grid" src="img/portraits/'.$i[path].'/'.$i[thumb].'"></a><p>'.$i[name].'</p></div>'."\n";
		if ( $count == 4 or $count == $omegacount ) { echo "</div>\n<div class='sixteen columns portfolio'>\n"; $omegacount=$count+4; }

		$count++;
	}
	echo '</div>';
;?>

<?php include('inc/footer.php'); ?>
