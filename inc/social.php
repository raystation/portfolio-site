<?php  

	function get_social_info(){
		$social=array(
			"@linkedin"=>"linkedin.com/in/rayuen",
			"@twitter"=>"twitter.com/rayuen",
			"@flickr"=>"flickr.com/rayuen",
			"@github"=>"github.com/raystation",
			"@instagram"=>"instagram.com/raystation",
		);
		return $social;
	}

	function social_print($caption=false){
		
		if ( $caption == true ) {
			echo '<ul class="list-spacing-fix add-bottom caption">'."\n";
		} else {
			echo '<ul class="list-spacing-fix add-bottom">'."\n";
		}
	
		$array = get_social_info();

		foreach ( $array as $key => $value ) {
			echo "\t\t\t\t\t\t\t".'<li><a href="http://www.'.$value.'" target="_blank">'.$key.'</a></li>'."\n";
		}

		echo '</ul>';
	}	

;?>