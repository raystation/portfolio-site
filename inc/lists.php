<?php 

function list_html($array){
	echo "<ul>\n";
	
	foreach ($array as $key => $value) {
		if ( is_int($key) ) {
			echo "<li>".$value."</li>\n";
		} else {
			echo "<li><a href=\"".$value."\">".$key."</a></li>\n";
		}
	}

	echo "</ul>\n";
}
 
function random_number($array) {
	$count=count($array);
	$rand=mt_rand(0,$count);
	return $rand;	
}

function random_list_items($array,$quantity=5) {
	$count=0;
	$random_list=array();
	while ( $count <= $quantity ) {
		$number=random_number($array);
		$item=$array[$number];
		
		if ( !in_array($item,$random_list)) {
			$random_list[]=$item;
			$count++;
		} 	
	}
	return $random_list;
}

// function random_list_items($array,$quantity=5) {
	
// 	$count=0;
// 	while ( $count !== $quantity ) {
// 		$count=count($array);
// 		$rand=rand(0,$count);
// 		$array_rand[]=$rand;
// 		unset($array,$rand);
// 		$count++;
// 	} 

// 	foreach ($array_rand as $number) {
// 		$random_list[]=$array[$number];
// 	}

// 	return $random_list;
// }

function list_ringtones(){
	$tones["nokia-classic"]=array("name"=>"Classic Nokia mono","file"=>"nokia-classic");
	$tones["nba-on-nbc"]=array("name"=>"The NBA on NBC theme","file"=>"nba-on-nbc");
	$tones["muppet-show"]=array("name"=>"The Muppet Show theme","file"=>"muppet-show");
	$tones["muppets-manamana"]=array("name"=>"Muppets - Ma na ma na","file"=>"muppets-manamana");
	$tones["star-trek-main-viewing-screen"]=array("name"=>"Star Trek OS: Main Viewing Screen","file"=>"star-trek-main-viewing-screen");
	$tones["breaking-bad-marie"]=array("name"=>"Breaking Bad: Hank's ringtone for Marie","file"=>"breaking-bad-marie");
	$tones["one-piece-dendenmushi"]=array("name"=>"One Piece - Den Den Mushi","file"=>"one-piece-dendenmushi");
	$tones["star-wars-cantina-band"]=array("name"=>"Star Wars Cantina Band","file"=>"star-wars-cantina-band");
	$tones["linus-lucy"]=array("name"=>"Linus and Lucy","file"=>"linus-lucy");
	$tones["mgs-codec"]=array("name"=>"Metal Gear Solid codec","file"=>"mgs-codec");
	$tones["benny-hill"]=array("name"=>"Benny Hill theme","file"=>"benny-hill");
	$tones["rickroll"]=array("name"=>"Never Gonna Give You Up","file"=>"rickroll");
	$tones["careless-whisper"]=array("name"=>"Careless Whisper","file"=>"careless-whisper");
	return $tones;
}

function html_list_ringtones(){
	$tones=list_ringtones();
	foreach ($tones as $tone) {
		$name=$tone["name"];
		$path="ringtone/".$tone["file"].".m4r";
		echo "<a href='".$path."' target='_blank'>".$name."</a><br>";
	}
}



function list_favorite_games() {
	$list_title="Favorite Games";
	$favorite_games = array(
		"Mario Kart 7",
		"Super Mario Kart",
		"Mario Kart DS",
		"Phoenix Wright 2: Trials and Tribulations",
		"Phoenix Wright: Ace Attorney",
		"Ms. Pac-man",
		"Golden Axe",
		"Bubble Bobble",
		"Dig Dug",
		"Crystal Castles",
		"Mickey Mouse and the Castle of Illusion",
		"Michael Jackson's Moonwalker",
		"Super Punchout!",
		"Golden Axe II",
		"The Last of Us",
		"Red Dead Redemption",
		"Tiny Thief",
		"Tekken 3",
		"NBA Live 95",
		"NBA Live 95",
		"Mortal Kombat II",
		"Mortal Kombat",
		"NBA Jam",
		"Final Fantasy 4",
		"Final Fantasy 6",
		"Chrono Trigger",
		"Fallout: New Vegas",
		"Fallout 3",
		"Batman: Arkham Asylum",
		"Batman: Arkham City",
		"L.A. Noire",
		"PaRappa the Rappa",
		"Patapon",
		"Tetris",
		"Okami",
		"Double Dragon",
		"Resident Evil 4",
		"Sonic the Hedgehog",
		"Super Mario Brothers 3",
		"Zombies Ate My Neighbors",
		"Toejam and Earl",
		"Plants vs. Zombies",
		"Final Fantasy Tactics",
		"Pokemon Diamond & Pearl",
		"Pokemon White",
		"Pokemon Y",
		"Uncharted 2",
		"Tenchu: Stealth Assassins",
		"Metal Gear Solid",
		"Pocket Planes",
		"Transport Tycoon",
		"Sim Hospital",
		"Junk Jack",
		"Marble Madness",
		"Rampage",
		"Ghouls 'n' Ghosts",
		"2048",
		"The Organ Trail",
		"SimCity 2000"
	);
	return $favorite_games;
}

function list_tattoo_body() {
	$list_title="Regretful Tattoos";
	$container = array(
		"Angel wings on my butt (from when I fell from heaven)",
		"USB ports",
		"Barcode for Ecto Cooler",
		"My birthdate in Roman numerals",
		"the one password I use for all my logins so I don't forget",
		"Flaming unicorns",
	);
	return $container;
}

function list_self_nicknames() {
	$list_title="Nicknames I Made Up For Myself That Didn't&nbsp;Stick";
	$container = array(
		"Angel Eyes",
		"Tiny Dancer",
		"Dance Floor General",
		"Lil'",
		"Inspector",
		"Asian Sensation",
		"The Worm",
		"The Hand"
	);
	return $container;
}

function list_games_playing() {
	$list_title="Currently Playing";
	$container = array(
		"FTL",
		"The Last of Us",
		"Red Dead Redemption",
		"F E Z",
		"Pok&eacute;mon Y",
		"Zookeeper: Battle!",
		"Skyrim",
	);
	return $container;
}

function list_random_facts() {
	$container = array(
		"I’ve illustrated two children’s books.",
		"I drew caricatures at Six Flags Great Adventure in New Jersey for about four summers.",
		"I can solve a Rubik’s Cube in under a minute.",
		"I worked at a toy truck modeling company doing screen and pad printing.",
	);
	return $container;
}

function list_albums_listening() {
	$container = array(
		"Paracosm, <em>Washed&nbsp;Out</em>",
		"St. Vincent, <em>St.&nbsp;Vincent</em>",
		"Modern Vampires in the City, <em>Vampire&nbsp;Weekend</em> ",
		"Ritual of the Savage, <em>Les&nbsp;Baxter</em>",
		"Gunfighter Ballads and Trail Songs, <em>Marty&nbsp;Robbins</em>",
	);
	return $container;
}

function all_lists(){

	$lists=array(
		array( "title"=>"Nicknames", "items"=>array(
				"Angel Eyes",
				"Tiny Dancer",
				"Dance Floor General",
				"Lil",
				"Inspector",
				"Asian Sensation",
				"The Worm",
				"The Hand"
			)),

		array( "title"=>"Random Facts About Me", "items"=>array(
				"I’ve illustrated two children’s books.",
				"I drew caricatures at Six Flags Great Adventure in New Jersey for about four summers.",
				"I can solve a Rubik’s Cube in under a minute.",
				"I worked at a toy truck modeling company doing screen and pad printing.",
			)),

		array( "title"=>"Currently Playing", "items"=>array(
				"FTL",
				"The Last of Us",
				"Red Dead Redemption",
				"F E Z",
				"Pok&eacute;mon Y",
				"Zookeeper: Battle!",
				"Skyrim",
			)),		

		array( "title"=>"Favorite Games", "items"=>array(
				"Mario Kart 7",
				"Super Mario Kart",
				"Mario Kart DS",
				"Phoenix Wright 2: Trials and Tribulations",
				"Phoenix Wright: Ace Attorney",
				"Ms. Pac-man",
				"Golden Axe",
				"Bubble Bobble",
				"Dig Dug",
				"Crystal Castles",
				"Mickey Mouse and the Castle of Illusion",
				"Michael Jackson's Moonwalker",
				"Super Punchout!",
				"Golden Axe II",
				"The Last of Us",
				"Red Dead Redemption",
				"Tiny Thief",
				"Tekken 3",
				"NBA Live 95",
				"NBA Live 95",
				"Mortal Kombat II",
				"Mortal Kombat",
				"NBA Jam",
				"Final Fantasy 4",
				"Final Fantasy 6",
				"Chrono Trigger",
				"Fallout: New Vegas",
				"Fallout 3",
				"Batman: Arkham Asylum",
				"Batman: Arkham City",
				"L.A. Noire",
				"PaRappa the Rappa",
				"Patapon",
				"Tetris",
				"Okami",
				"Double Dragon",
				"Resident Evil 4",
				"Sonic the Hedgehog",
				"Super Mario Brothers 3",
				"Zombies Ate My Neighbors",
				"Toejam and Earl",
				"Plants vs. Zombies",
				"Final Fantasy Tactics",
				"Pokemon Diamond & Pearl",
				"Pokemon White",
				"Pokemon Y",
				"Uncharted 2",
				"Tenchu: Stealth Assassins",
				"Metal Gear Solid",
				"Pocket Planes",
				"Transport Tycoon",
				"Sim Hospital",
				"Junk Jack",
				"Marble Madness",
				"Rampage",
				"Ghouls 'n' Ghosts",
				"2048",
				"The Organ Trail",
				"SimCity 2000"
			)),		
	);

	return $lists;
}



