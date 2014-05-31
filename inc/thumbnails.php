
<div class="sixteen columns portfolio">
	<?php  
		$count=1;
		$alphacount;
		$omegacount;
		foreach ( $works as $work ) {
			echo "\t".'<div class="four columns'; 
			if ( $count == 1 or $count == $alphacount ) { echo ' alpha'; $alphacount=$count+4; } 
			if ( $count == 4 or $count == $omegacount ) { echo ' omega'; }
			echo '"><a href="'.$work[path].'"><img class="scale-with-grid" src="img/'.$work[path].'/'.$work[thumb].'"></a><p>'.$work[name].'</p></div>'."\n";
			if ( $count == 4 or $count == $omegacount ) { echo "</div>\n<div class='sixteen columns portfolio'>\n"; $omegacount=$count+4; }

			$count++;
		}
	;?>
</div>

<!-- 01-
02
03
04--
05-
06
07
08--
09-
10
11
12--
13-
14
15
16--
17-
18 -->