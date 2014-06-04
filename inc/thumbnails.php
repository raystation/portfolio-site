
<div class="sixteen columns portfolio">
	<?php

		//adds home link if it's not the index page
		if ( $description !== NULL ) { echo '<hr><div class="add-top add-bottom"><a href="index">&#11013; Back to home</a></div>'."\n"; }
		
		// populates page with thumbnails from $work
		$count=1;
		$alphacount;
		$omegacount;
		foreach ( $works as $work ) {
			echo "\t".'<div class="four columns'; 
			if ( $count == 1 or $count == $alphacount ) { echo ' alpha'; $alphacount=$count+4; } 
			if ( $count == 4 or $count == $omegacount ) { echo ' omega'; }
			echo '"><a href="'.$work[path].'" alt="'.html_entity_decode($work[name]).'"><img class="scale-with-grid" src="img/'.$work[path].'/'.$work[thumb].'"></a><p>'.$work[name].'</p></div>'."\n";
			if ( $count == 4 or $count == $omegacount ) { echo "</div>\n<div class='sixteen columns portfolio'>\n"; $omegacount=$count+4; }
			$count++;
		}
	;?>
</div>