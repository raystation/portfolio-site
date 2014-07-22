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

function print_list( $array,$randomize=false,$results=5,$heading=5 ){
	
	// check to make sure the variables are not NULL
	if ( !is_null( $array["name"] ) ) { $name=$array["name"]; }
	if ( !is_null( $array["list"] ) ) { $array=$array["list"]; }

	if ( $randomize==true ) { 
		if ( count($array) < $results ) { 
			$numbers_array=array_rand($array, count($array) ); 
			shuffle($numbers_array); 
		} else { 
			$numbers_array=array_rand($array,$results); 
			shuffle($numbers_array); 
		}
	} 

	if ( $randomize==false ) {
			if ( count($array) < $results ) { 
				$numbers_array=range(0, count($array) ); 
			} else { $numbers_array=range(0, $results); 
		}
	}
	// var_dump($numbers_array);

	echo "<h".$heading.">".$name."</h".$heading.">";
	echo "<ul>";
	
	foreach ($numbers_array as $number) {
		echo "<li>".$array[$number]."</li>";
	}
	echo "</ul>";
}

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
	$list = array(
		"name"=>"Favorite Games",
		"list"=>array(
			"2048",
			"Batman: Arkham Asylum",
			"Batman: Arkham City",
			"Bubble Bobble",
			"Chrono Trigger",
			"Crystal Castles",
			"Dig Dug",
			"Double Dragon",
			"Fallout 3",
			"Fable",
			"Fallout: New Vegas",
			"Final Fantasy 4",
			"X-COM",
			"Final Fantasy 6",
			"Final Fantasy Tactics",
			"Ghouls 'n' Ghosts",
			"Golden Axe II",
			"Golden Axe",
			"Journey",
			"Junk Jack",
			"L.A. Noire",
			"Limbo",
			"Marble Madness",
			"Mario Kart 7",
			"Mario Kart Wii",
			"Mario Kart DS",
			"Metal Gear Solid",
			"Metal Gear Solid 3: Snake Eater",
			"Michael Jackson's Moonwalker",
			"Mickey Mouse and the Castle of Illusion",
			"Mortal Kombat II",
			"Mortal Kombat",
			"Ms. Pac-man",
			"NBA Jam",
			"NBA Live 95",
			"Okami",
			"PaRappa the Rappa",
			"Pikmin",
			"Jet Set Radio",
			"Patapon",
			"Phoenix Wright 2: Trials and Tribulations",
			"Phoenix Wright: Ace Attorney",
			"Plants vs. Zombies",
			"Pocket Planes",
			"Portal 2",
			"Pokemon Diamond & Pearl",
			"Trauma Center",
			"Pokemon Y",
			"Rampage",
			"Red Dead Redemption",
			"Resident Evil 4",
			"Sim Hospital",
			"SimCity 2000",
			"Street Fighter II",
			"Gunstar Heroes",
			"Tapper!",
			"Sonic the Hedgehog",
			"Super Mario Brothers 3",
			"Super Mario Kart",
			"Super Punchout!",
			"Tekken 3",
			"Tenchu: Stealth Assassins",
			"Tetris",
			"The Last of Us",
			"The Organ Trail",
			"Tiny Thief",
			"Triple Town",
			"Toejam &amp; Earl",
			"Transport Tycoon",
			"Uncharted 2",
			"Zombies Ate My Neighbors",
			"Ghost Trick: Phantom Detective",
		)
	);
	return $list;
}

function list_self_nicknames() {
	$list = array(
		"name"=>"Nicknames (Didn't&nbsp;Stick)",
		"list"=>array(
			"Angel Eyes",
			"Tiny Dancer",
			"Dance Floor General",
			"Lil'",
			"Inspector",
			"Asian Sensation",
			"The Worm",
			"The Hand",
			"Wild Bunch",
		)
	);
	return $list;	
}

function list_fav_artists() {
	$list = array(
		"name"=>"Favorite Art People",
		"list"=>array(
			"Pendleton Ward",
			"Ji Lee",
			"Hellen Jo",
			"Jack Teagle",
			"James Jean",
			"Tom Gauld",
			"Travis Millard",
			"Peter Oumanski",
			"Olly Moss",
			"Mike Perry",
			"eBoy",
			"Geoff Mcfettridge",
			"Mar&eacute; Odomo",
			"Jordan Crane",
			"Jim Houser",
			"Josh Cochran",
			"Bryan Lee O'Malley",
			"Chuck Groenink",
			"Jessica Hische",
			"Genevi&eacute;ve Gauckler",
			"Maya Hayuk",
			"Neil Scwaab",
			"Carson Ellis",
		)
	);
	return $list;	
}

function list_games_playing() {
	$container = array(
		"name"=>"Games Playing",
		"list"=>array(
			"X-COM: Enemy Unknown",
			"Disco Zoo",
			"Nimblequest",
			"Red Dead Redemption",
		)
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
	$list = array(
			"name"=>"Albums Listening to",
			"list"=>array(
				"Paracosm, <em>Washed&nbsp;Out</em>",
				"St. Vincent, <em>St.&nbsp;Vincent</em>",
				"Modern Vampires in the City, <em>Vampire&nbsp;Weekend</em> ",
				"Ritual of the Savage, <em>Les&nbsp;Baxter</em>",
				"Gunfighter Ballads and Trail Songs, <em>Marty&nbsp;Robbins</em>",
		)
	);
	return $list;
}

function list_fav_tv() {
	$list = array(
		"name"=>"Favorite TV Shows",
		"list"=>array(
			"LOST",
			"Venture Brothers",
			"Bravest Warriors",
			"Sherlock",
			"Breaking Bad",
			"Star Trek: TOS",
			"Battlestar Galactica",
			"Twilight Zone",
			"Mad Men",
			"SNL",
			"Game of Thrones",
			"BBC Planet Earth",
			"Firefly",
			"Arrested Development",
			"Cowboy Bebop",
			"Doctor Who",
			"Chappelle's Show",
			"Futurama",
			"Mighty Boosh",
			"Archer",
			"Star Wars: The Old Republic",
		)
	);
	return $list;
}

function list_friends() {
	$list=array(
		"name"=>"Friends",
		"list"=>array(
			array("item" => "Simon Yuen", "url" => "simonyuen.com"),
			array("item" => "Peter Oumanski", "url" => "peteroumanski.com"),
			array("item" => "Malado Baldwin", "url" => "maladobaldwin.com"),
			array("item" => "Data Blick / Anya Hearn", "url" => "datablick.com"),
			array("item" => "Tim Eggert", "url" => "timeggert.com"),
			array("item" => "Sarah Walko", "url" => "sarahwalko.com"),
			array("item" => "Marina Grinshpun", "url" => "marinagrinshpun.com"),
			array("item" => "Jen Noto", "url" => "jennoto.com"),
			array("item" => "Brendan Leach", "url" => "iknowashortcut.com"),
		)
	);
	return $list;
}

function html_list_link($array,$h=5) {

	if ( !is_null( $array["name"] ) ) { $name=$array["name"]; }
	if ( !is_null( $array["list"] ) ) { $array=$array["list"]; }

	echo "<h".$h.">".$name."</h".$h."><ul>";

	foreach ($array as $list_item) {
		echo "<li><a href='http://".$list_item[url]."' target='_blank'>".$list_item[item]."</a></li>";
	}
	echo "</ul>";
}

function list_favorite_pokemon() {
	$list = array(
		"name"=>"Favorite Pok&eacute;mon",
		"list"=>array(
			"Scizor",
			"Heracross",
			"Drifblim",
			"Piplup",
			"Drapion",
			"Gengar",
			"Weavile",
			"Garchomp",
			"Spiritomb",
			"Snorlax",
		)
	);
	return $list;
}

function list_baby_names() {
	$list = array(
		"name"=>"Names I Would Give a Baby",
		"list"=>array(
			"Drone",
			"Horatio",
			"Banjo",
			"Rayson",
			"Batman",
		)
	);
	return $list;
}

function list_new_favorite_things() {
	$list = array(
		"name"=>"New Favorite Things",
		"list"=>array(
			"Hawaiian shirts",
			"pineapple juice",
			"Santa Cruz",
			"The City logo",
			"ESPN 30 for 30 documentaries",
			"George Takei",
			"Bravest Warriors",
		)
	);
	return $list;
}

function list_videogame_backlog() {
	$list = array(
		"name"=>"Video Game backlog",
		"list"=>array(
			"FEZ",
			"Bravely Default",
			"Zelda: A Link Between Worlds",
			"Grand Theft Auto 5",
			"Towerfall",
			"Shovel Knight",
			"Mario Kart 8",
			"Skyrim",
			"Uncharted 3",
			"Assassin's Creed",
			"Fire Emblem: Awakening",
			"Tactics Ogre",
			"Nidhogg",
			"Dragon's Crown",
		)
	);
	return $list;
}


