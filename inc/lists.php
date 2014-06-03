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
	$random_list;
	while ( $count < $quantity ) {
		$number=random_number($array);
		$item=$array[$number];
		
		if ( !in_array($item,$random_list)) {
			$random_list[]=$item;
			$count++;
		} 

		
	}
	return $random_list;
}

function list_favorite_games() {
	$favorite_games = array(
		"Mario Kart 7",
		"Super Mario Kart",
		"Mario Kart DS",
		"Super Mario Kart: Double Dash",
		"Phoenix Wright 2: Trials and Tribulations",
		"Phoenix Wright: Ace Attorney",
		"Ms. Pac-man",
		"Golden Axe",
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
		"SimCity 2000"
	);
	return $favorite_games;
}

function list_tattoo_body() {
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
	$container = array(
		"Angel Eyes",
		"Tiny Dancer",
		"Dance Floor General",
		"Lil",
		"Inspector",
		"Asian Sensation",
		"The Worm",
		"The Hand"
	);
	return $container;
}

function list_games_playing() {
	$container = array(
		"FTL",
		"The Last of Us",
		"Red Dead Redemption",
		"F E Z",
		"Pok&eacute;mon Y",
		"Zookeeper: Battle",
		"Skyrim",
	);
	return $container;
}

function list_current_projects() {
	$container = array(
		"Indiginauts"=>"indiginauts",
		"The 3"=>"the3",
		"Learning Ruby",
	);
	return $container;
}

function list_albums_listening() {
	$container = array(
		"Paracosm, <em>Washed Out</em>",
		"St. Vincent, <em>St. Vincent</em>",
		"Modern Vampires in the City, <em>Vampire Weekend</em> ",
		"Ritual of the Savage, <em>Les Baxter</em>",
		"Gunfighter Ballads and Trail Songs, <em>Marty Robbins</em>",
	);
	return $container;
}