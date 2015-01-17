<?php

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
			"Fable",
			"Fallout 3",
			"Fallout: New Vegas",
			"Final Fantasy IV",
			"Final Fantasy VI",
			"Final Fantasy Tactics",
			"Ghost Trick: Phantom Detective",
			"Ghouls 'n' Ghosts",
			"Golden Axe II",
			"Golden Axe",
			"Gunstar Heroes",
			"Jet Set Radio",
			"Journey",
			"Junk Jack",
			"L.A. Noire",
			"Limbo",
			"Marble Madness",
			"Mario Kart 7",
			"Mario Kart DS",
			"Mario Kart Wii",
			"Metal Gear Solid 3: Snake Eater",
			"Metal Gear Solid",
			"Michael Jackson's Moonwalker",
			"Mickey Mouse Castle of Illusion",
			"Mortal Kombat",
			"Mortal Kombat II",
			"Ms. Pac-man",
			"NBA Jam",
			"NBA Live 95",
			"Okami",
			"PaRappa the Rappa",
			"Patapon",
			"Phoenix Wright: Trials & Tribulations",
			"Phoenix Wright: Ace Attorney",
			"Picross",
			"Pikmin",
			"Plants vs. Zombies",
			"Pocket Planes",
			"Pokemon Diamond & Pearl",
			"Pokemon X/Y",
			"Portal 2",
			"Rampage",
			"Red Dead Redemption",
			"Resident Evil 4",
			"Sim Hospital",
			"SimCity 2000",
			"Sonic the Hedgehog",
			"Street Fighter II",
			"Super Mario Brothers 3",
			"Super Mario Kart",
			"Super Punchout!",
			"Tapper!",
			"Tekken 3",
			"Tenchu: Stealth Assassins",
			"Tetris",
			"The Last of Us",
			"The Organ Trail",
			"Tiny Thief",
			"Toejam &amp; Earl",
			"Transport Tycoon",
			"Trauma Center",
			"Triple Town",
			"Uncharted 2",
			"X-COM",
			"Zombies Ate My Neighbors",
			"Star Wars: The Old Republic",
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
			"Stormborn",
		)
	);
	return $list;
}

function list_fav_artists() {
	$list = array(
		"name"=>"Favorite Art People",
		"list"=>array(
			"Bryan Lee O'Malley",
			"Carson Ellis",
			"Charlotte Dumortier",
			"Chuck Groenink",
			"eBoy",
			"Genevi&eacute;ve Gauckler",
			"Geoff Mcfettridge",
			"Hellen Jo",
			"Jack Teagle",
			"James Jean",
			"Jessica Hische",
			"Ji Lee",
			"Jim Houser",
			"Jordan Crane",
			"Josh Cochran",
			"Mar&eacute; Odomo",
			"Matthew Houston",
			"Maya Hayuk",
			"Mike Perry",
			"Neil Scwaab",
			"Olly Moss",
			"Pendleton Ward",
			"Peter Oumanski",
			"Richard Perez",
			"Scott Benson",
			"Tom Gauld",
			"Travis Millard",
		)
	);
	return $list;
}

function list_games_playing() {
	$container = array(
		"name"=>"Games Playing",
		"list"=>array(
			"Bravely Default",
			"Shovel Knight",
			"Grand Theft Auto 5",
			"868-HACK",
			"FEZ",
			"FTL",
			"Disco Zoo",
			"Nimblequest",
			// "Red Dead Redemption",
			// "Mario Kart 7",
			// "X-COM: Enemy Unknown",
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
			"<span class='tooltip' title='Washed Out'>Paracosm</span>",
			// "<span class='tooltip' title='St. Vincent'>St. Vincent</span>",
			"<span class='tooltip' title='Vampire Weekend'>Modern Vampires in the City</span>",
			"<span class='tooltip' title='Parquet Courts'>Sunbathing Animals</span>",
			// "<span class='tooltip' title='Les Baxter'>Ritual of the Savage</span>",
			// "<span class='tooltip' title='Marty Robbins'>Gunfighter Ballads & Trail Songs</span>",
		)
	);
	return $list;
}

function list_fav_tv() {
	$list = array(
		"name"=>"Favorite TV Shows",
		"list"=>array(
			"Archer",
			"Arrested Development",
			"Battlestar Galactica",
			"BBC Planet Earth",
			"Breaking Bad",
			"Chappelle Show",
			"Cowboy Bebop",
			"Doctor Who",
			"Brooklyn Nine-Nine",
			"Firefly",
			"Futurama",
			"Game of Thrones",
			"LOST",
			"Mad Men",
			"Mighty Boosh",
			"Sherlock",
			"SNL",
			"Star Trek",
			"Twilight Zone",
			"Venture Brothers",
			// "Bravest Warriors",
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
			array("item" => "Adelle Marcero", "url" => "adellemarcero.com"),
			array("item" => "Data Blick / Anya A'Hearn", "url" => "datablick.com"),
			array("item" => "Tim Eggert", "url" => "timeggert.com"),
			array("item" => "Sarah Walko", "url" => "sarahwalko.com"),
			array("item" => "Marina Grinshpun", "url" => "marinagrinshpun.com"),
			array("item" => "Jen Noto", "url" => "jennoto.com"),
			// array("item" => "Brendan Leach", "url" => "iknowashortcut.com"),
		)
	);
	return $list;
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
			"Schwings",
			"One Night Ultimate Werewolf",
			"Marbles the Brain Store",
			"Mission Workshop bags",
			"New Balance shoes",
		)
	);
	return $list;
}

function list_videogame_backlog() {
	$list = array(
		"name"=>"Video Game backlog",
		"list"=>array(
			"Assassin's Creed",
			// "Bravely Default",
			"Dragon's Crown",
			"FEZ",
			"Fire Emblem: Awakening",
			"Grand Theft Auto 5",
			"Mario Kart 8",
			"Nidhogg",
			"Shovel Knight",
			"Skyrim",
			"Spelunky",
			"Tactics Ogre",
			"Towerfall",
			"Uncharted 3",
			"Zelda: A Link Between Worlds",
		)
	);
	return $list;
}

function list_funny_city_names() {
	$list = array(
		"name"=>"Funny City Names",
		"list"=>array(
			"Albuquerque",
			"Sheboygan",
			"Pensascola",
			"French Lick",
		)
	);
	return $list;
}

function list_tech_skills() {
	$list = array(
		"name"=>"Technical Skills",
		"list"=>array(
			array("percent"=>99,"skill"=>"Hand-drawing skills"),
			array("percent"=>98,"skill"=>"Illustrator"),
			array("percent"=>98,"skill"=>"Indesign"),
			array("percent"=>89,"skill"=>"QuarkXPress"),
			array("percent"=>85,"skill"=>"Dreamweaver"),
			array("percent"=>52,"skill"=>"Flash"),
			"clear",
			array("percent"=>95,"skill"=>"Microsoft Office Suite"),
			array("percent"=>70,"skill"=>"Omnigraffle"),
			"clear",
			array("percent"=>92,"skill"=>"HTML"),
			array("percent"=>89,"skill"=>"CSS"),
			array("percent"=>92,"skill"=>"Sass"),
			array("percent"=>40,"skill"=>"JQuery"),
			array("percent"=>35,"skill"=>"JS"),
			"clear",
			array("percent"=>65,"skill"=>"PHP"),
			array("percent"=>80,"skill"=>"Wordpress"),
			"clear",
			array("percent"=>85,"skill"=>"Git"),
			array("percent"=>30,"skill"=>"Ruby"),
		)
	);
	return $list;
}
