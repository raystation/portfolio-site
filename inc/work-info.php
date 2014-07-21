<?php 

$loaded=true;
//order of the portfolio pieces

$works = array(
	array( "name" => "Pok&eacute;mon","path" => "pokemon","thumb" => "svg" ), 
	array( "name" => "Suspended Belief Studios","path" => "suspended-belief-studios", "thumb" => "jpg" ), 
	array( "name" => "Indiginauts", "path" => "indiginauts", "thumb" => "jpg" ), 
	array( "name" => "The 3", "path" => "the3", "thumb" => "svg" ), 
	array( "name" => "Museyon Guides", "path" => "museyon-guides", "thumb" => "svg" ), 
	array( "name" => "Abriendo Puertas / Opening&nbsp;Doors", "path" => "abriendo-puertas",	"thumb" => "jpg" ), 
	array( "name" => "Project Animore", "path" => "project-animore", "thumb" => "jpg" ), 
	array( "name" => "100 Principles of Game&nbsp;Design","path" => "100-principles-of-game-design","thumb" => "jpg" ),
	array( "name" => "Monkey Mo, Monkey&nbsp;Go!","path" => "monkey-mo","thumb" => "jpg" ), 
	array( "name" => "Scavenger Hunt","path" => "scavenger-hunt","thumb" => "jpg" ), 
	array( "name" => "Color Chameleon","path" => "color-chameleon","thumb" => "jpg" ), 
	array( "name" => "Sarah Walko website","path" => "sarah-walko-wordpress","thumb" => "jpg" ), 
	array( "name" => "Edgeware","path" => "edgeware","thumb" => "jpg" ), 
	array( "name" => "StoryMaps","path" => "storymaps","thumb" => "jpg" ),
	array( "name" => "Malado Baldwin Wordpress website","path" => "malado-baldwin-wordpress","thumb" => "jpg" ),
	array( "name" => "Egg Baby","path" => "egg-baby","thumb" => "jpg" ), 
	array( "name" => "Malado Baldwin website","path" => "malado-baldwin-indexhibit", "thumb" => "jpg" ),
	array( "name" => "Portfolio Site","path" => "portfolio-site", "thumb" => "jpg" ),
	// array( "name" => "idibon","path" => "idibon","thumb" => "jpg" ),
	// array( "name" => "Nerd Comics", "path" => "nerd-comics", "thumb" => "jpg" ),
);

function get_SBS_projects(){
	$works = array(
		array( "name" => "Indiginauts","path" => "indiginauts","thumb" => "jpg" ), 
		array( "name" => "The 3","path" => "the3","thumb" => "svg" ),
		array( "name" => "Abriendo Puertas / Opening&nbsp;Doors","path" => "abriendo-puertas","thumb" => "jpg" ), 
		array( "name" => "Project Animore","path" => "project-animore","thumb" => "jpg" ),
		array( "name" => "Color Chameleon","path" => "color-chameleon","thumb" => "jpg" ), 
	);
	return $works;
}
function get_museyon_books(){
	$works = array(
		array( "name" => "Chronicles of Old New&nbsp;York","path" => "chronicles-of-old-new-york","thumb" => "jpg" ),
		array( "name" => "City Style","path" => "city-style","thumb" => "jpg" ), 
		array( "name" => "Chronicles of Old Las&nbsp;Vegas","path" => "chronicles-of-old-las-vegas","thumb" => "jpg" ),
		array( "name" => "Chronicles of Old&nbsp;Boston","path" => "chronicles-of-old-boston","thumb" => "jpg" ), 
		array( "name" => "Chronicles of Old&nbsp;Paris","path" => "chronicles-of-old-paris","thumb" => "jpg" ), 
		array( "name" => "Chronicles of Old&nbsp;London", "path" => "chronicles-of-old-london", "thumb" => "jpg" ),
		array( "name" => "Art + Paris","path" => "art-and-paris","thumb" => "jpg" ),
		array( "name" => "Chronicles of Old&nbsp;Rome","path" => "chronicles-of-old-rome","thumb" => "jpg" ),
	);
	return $works;
}

function get_pokemon_projects(){
	$works = array(
		array( "name" => "The Rise of Darkrai","path" => "darkrai", "thumb" => "jpg" ), 
		array( "name" => "Arceus and the Jewel of&nbsp;Life","path" => "arceus", "thumb" => "jpg" ),
		array( "name" => "Pok&eacute;mon: Toys 'R' Us Feature Shop", "path" => "feature-shop", "thumb" => "jpg" ), 
		array( "name" => "Pok&eacute;mon: Logos", "path" => "pokemon-logos", "thumb" => "jpg" ), 
		array( "name" => "Pok&eacute;mon 10th&nbsp;Anniversary","path" => "10th-anniversary","thumb" => "jpg" ),
		array( "name" => "Pok&eacute;mon: Mystery&nbsp;Dungeon", "path" => "mystery-dungeon", "thumb" => "jpg" ),
		array( "name" => "Battle Revolution", "path" => "battle-revolution", "thumb" => "jpg" ),
		array( "name" => "Pocket Pokedex", "path" => "pocket-pokedex", "thumb" => "jpg" ),
		array( "name" => "Pok&eacute;mon Toy&nbsp;Fair", "path" => "toy-fair", "thumb" => "jpg" ),
		array( "name" => "Pok&eacute;mon: Diamond & Pearl Launch", "path" => "dp-launch", "thumb" => "jpg" ),
		array( "name" => "Licensing Show", "path" => "licensing-show", "thumb" => "jpg" ),
	);
	return $works;
}

function related_check() {
	
	global $title;

	if ( 
		$title == "Art + Paris" or 
		$title == "Chronicles of Old&nbsp;Rome" or 
		$title == "Chronicles of Old&nbsp;Boston" or 
		$title == "Chronicles of Old New&nbsp;York" or 
		$title == "Chronicles of Old&nbsp;London" or 
		$title == "Chronicles of Old Las&nbsp;Vegas" or 
		$title == "Chronicles of Old&nbsp;Paris" or 
		$title == "City Style"
		
		) { include 'inc/related-museyon.php'; }

	if ( 
		$title == "The 3" or 
		$title == "Suspended Belief Studios" or 
		$title == "Indiginauts" or 
		$title == "Project Animore" or 
		$title == "Abriendo Puertas / Opening&nbsp;Doors" or 
		$title == "Color Chameleon"

		) { include 'inc/related-sb.php'; }	

	if ( 
		$title == "Pok&eacute;mon: Toy Fair" or 
		$title == "Pok&eacute;mon: Logos" or 
		$title == "Pok&eacute;mon: Toys'R'Us Feature Shop" or 
		$title == "Pok&eacute;mon: 10th Anniversary" or 
		$title == "The Rise of Darkrai" or 
		$title == "Arceus and the Jewel of&nbsp;Life" or
		$title == "Battle Revolution" or
		$title == "Pocket Pok&eacute;dex" or
		$title == "Pok&eacute;mon: Diamond & Pearl Launch" or
		$title == "Pok&eacute;mon: Toy Fair" or
		$title == "Licensing Show" or
		$title == "Pok&eacute;mon: Mystery&nbsp;Dungeon"

		) { include 'inc/related-pokemon.php'; }
}

function print_skill_html(){
	global $tools;
	echo '<div class="chart">';
	foreach ( $tools as $tool) {
		echo '<div class="outer"><div class="inner" style="width:'.$tool["percent"].'%;">'.$tool["skill"]."</div></div>\n";
	}
	echo '</div>';
}

function get_date() {
	date_default_timezone_set('America/Los_Angeles');
	$date["year"]=date('Y');
	$date["day"]=date('D');
	return $date;
}

//order of the projects

$projects = array(
	array( "name" => "Tesla", "path" => "", "thumb" => "thumb.jpg" ),
	array( "name" => "Palin comics", "path" => "", "thumb" => "thumb.jpg" ),
	array( "name" => "GIF Drawings","path" => "", "thumb" => "thumb.jpg" ),
	array( "name" => "GIFS", "path" => "", "thumb" => "thumb.jpg" )
);

$portraits = array(
	array( "name" => "Walter White", "path" => "walter-white", "thumb" => "thumb.jpg" ),
	array( "name" => "Palin comics", "path" => "", "thumb" => "thumb.jpg" ),
	array( "name" => "GIF Drawings", "path" => "", "thumb" => "thumb.jpg" ),
	array( "name" => "GIFS", "path" => "", "thumb" => "thumb.jpg" )
);

function get_puns() {
	$puns = array(
		"I stayed up all night wondering where the sun went. Then it dawned on me.",
		"It doesn't matter how much you push the envelope. It'll still be stationary.",
		"What is the leading cause of divorce in long-term marriages? A stalemate.",
		"You wanna hear a joke about pizza? Never mind, it was too cheesy.",
		"I tried to catch some fog earlier. I mist.",
		"I walked into my sister's room and tripped on a bra. It was a booby-trap.",
		"A book just fell on my head, I only have my shelf to blame.",
		"I'm reading a book on anti-gravity, and it's impossible to put down.",
		"I'm glad I know sign language. It's become quite handy.",
		"I forgot how to throw a boomerang. But it came back to me.",
		"I once heard a joke about amnesia... But I forget how it goes.",
		"The frustrated cannibal threw up his hands.",
		"There was once a crossed-eyed teacher... who had issues controlling his pupils.",
		"Newspaper headline reads: Cartoonist found dead at home, details are sketchy.",
		"What did the cannibal get when he showed up to the party late? A cold shoulder.",
		"A boiled egg in the morning is really hard to beat."
		);
	return $puns;
}

function print_pun() {
	$puns=get_puns();
	$count=count($puns);
	$rand=mt_rand(0,$count);
	$pun=$puns[$rand];
	return $pun;
}

function sf_weather() {
	include 'inc/phpweatherlib.php';
	$weatherObj=new WeatherLib("KSFO");
	$weather=array();
	$weather["temp"]=intval( $weatherObj->get_temp_f() );
	$weather["condition"]=$weatherObj->get_weather_string();
	return $weather;
}

// fills in the div with links to the thumbnail and title
//deprecated
function workthumb($num) {
	global $works;
	if ( $works[$num] == NULL) {
		return;
	}
	echo '<a href="'.$works[$num]["path"].'"><img src="img/'.$works[$num]["path"].'/thumb.'.$works[$num]["thumb"].'" class="scale-with-grid"></a>'."\n";
	echo "<p>".$works[$num]["name"]."</p>\n";
} 

function skeleton_print_thumbnail_4($array) {
	echo '<div class="sixteen columns portfolio">'."\n";
	global $description;

	//adds home link if it's not the index page
	if ( $description !== NULL ) { 
		// echo '<hr>'."\n"; 
		echo '<hr><div class="add-top add-bottom"><a href="index">&#11013; Back to home</a></div>'."\n"; 
	} 

	// populates page with thumbnails from $work	
	$count=1;
	$alphacount;
	$omegacount;
	foreach ( $array as $array_item ) {
		echo "\t".'<div class="four columns'; 
		if ( $count == 1 or $count == $alphacount ) { echo ' alpha'; $alphacount=$count+4; } 
		if ( $count == 4 or $count == $omegacount ) { echo ' omega'; }
		echo '"><a href="'.$array_item[path].'" alt="'.html_entity_decode($array_item[name]).'"><img class="scale-with-grid" src="img/'.$array_item[path].'/thumb.'.$array_item[thumb].'"></a><p>'.$array_item[name].'</p></div>'."\n";
		if ( $count == 4 or $count == $omegacount ) { echo "</div>\n<div class='sixteen columns portfolio'>\n"; $omegacount=$count+4; }
		$count++;
	}
	echo "</div>";
}

function skeleton_print_page_thumbnail_4($array) {
	echo '<div class="sixteen columns portfolio">'."\n";
	global $description;
	global $path;

	// populates page with thumbnails from $work	
	$count=1;
	$alphacount;
	$omegacount;
	foreach ( $array as $array_item ) {
		echo "\t".'<div class="four columns'; 
		if ( $count == 1 or $count == $alphacount ) { echo ' alpha'; $alphacount=$count+4; } 
		if ( $count == 4 or $count == $omegacount ) { echo ' omega'; }
		echo '"><a href="'.$array_item[path].'" alt="'.html_entity_decode($array_item[name]).'"><img class="scale-with-grid" src="img/'.$array_item[path].'/thumb.'.$array_item[thumb].'"></a><p>'.$array_item[name].'</p></div>'."\n";
		if ( $count == 4 or $count == $omegacount ) { echo "</div>\n<div class='sixteen columns portfolio'>\n"; $omegacount=$count+4; }
		$count++;
	}
	echo "</div>";
}

// MUSEYON  ========================

function museyon_sidebar() {
	global $author;
	global $pages;
	global $date;
	global $url;
	return "Written by " .$author."</p>
			<p>Edited by Heather&nbsp;Corcoran and Akira&nbsp;Chiba </p>
			<p>Published by <a href='museyon-guides'>Museyon&nbsp;Guides</a></p>
			<p>Trade Paperback<br>"
			. $pages . " pages<br>
			5 &frac14;\" &#215; 8\"<br>
			Printed ". $date . "</p><p>
			<a href=" .$url." target='_blank'>Buy a copy</a>";
}

//  #MUSEYON GUIDES
// ===============================

if ( $title == "Museyon Guides" ) {

	$path="img/museyon-guides/";
	$template="company";
	$logo="svg";
	$description = '
		"Smart guide books for travel junkies, culture-vultures, movie lovers and history buffs." Museyon Guides, a small publishing startup in New York, needed someone to design and layout their books. Their books liked to focus on the art, film and music of different places around the globe. 
		</p><p>
		I joined up just as they were concepting a new side book focused on <a href="chronicles-of-old-new-york">New York</a> history. That book went to be one of their top sellers so I was asked to go into full-time Chronicles mode. In the end, I helped them with seven books. In addition to other side books, I also did some banner ads, brochures and other marketing materials for&nbsp;them.
	';
	
	$sidebar = "
		<a href='http://www.museyon.com' target='_blank'>museyon.com</a>
	";

	$img_info = array(
    		array("file" => "walter-white.gif", "alt" => ""),
	);	

} // end MUSEYON GUIDES


//  #POKEMON
// ===============================

if ( $title == "The Pok&eacute;mon Company" ) {

	$path="img/pokemon/";
	$template="company";
	$logo="svg";
	$description = '
		A brief rundown of the work I did at Pok&eacute;mon. 			
	';
	
	$sidebar = "
		<a href='http://www.pokemon.com' target='_blank'>pokemon.com</a>
	";

	$img_info = array(
		array("file" => "walter-white.gif", "alt" => ""),
	);	

} //end Pokémon

//  #SUSPENDED-BELIEF-STUDIOS
// ===============================

if ( $title == "Suspended Belief Studios" ) {

	$path="img/suspended-belief-studios/";

	$description = 'Me and my friend Jeremy Klar started this company together. Originally intended to just make games, we have since taken on some web development as well. Originally began in Brooklyn, we moved out to San Francisco to be closer to the gaming scene.' 
	;

	$template="company";
	$logo="svg";
	
	$sidebar = "Design studio.</p>
	<p><a href=\"http://www.suspendedbeliefgames.com\">suspendedbeliefgames.com</a>";

	$img_info = array(
	);	

} //end SUSPENDED BELIEF STUDIOS


//  #PORTRAITS
// ===============================

if ( $title == "Walter White" ) {

	$path="img/walter-white/";

	$description = '';
	
	$sidebar = "";

	$img_info = array(
		array("file" => "walter-white.gif", "alt" => ""),
	);	

} //end PORTRAITS


// #STORYMAPS
// ========================

if ( $title == "StoryMaps" ) {

	$path="img/storymaps/";

	$description = "
		A programmer I knew, <a href=\"https://github.com/seanh\">Sean Hammond</a>, was coding some software for a Ph.D. study that would assist children in the process of story creation. He called it StoryMaps. Essentially, StoryMaps breaks down the elements of traditional fairy tales into building blocks which children could use to invent new stories. They can create stories that contain their own original ideas while being structurally complete and well-formed.
		</p><p>
		A big challenge with this project was making the artwork generic enough so that the kids would still get to inject their own imagination into it. Some were more difficult than others, but I was up for the task.
		</p><p>
		Looking at tarot cards for inspiration, I sought to break each event down to it's core action. The main characters would all be represented by simple stick-like figures with no faces. Each image was accentuated with one color.
		</p><p>
		<div class='caption list-spacing-fix'>
		<ul>Additional reading:
			<li><a href='http://www.era.lib.ed.ac.uk/handle/1842/5294' target='_blank'>Sean's Ph.D. thesis</a></li>
			<li><a href=\"https://github.com/seanh\">Sean's Github page</a></li>
		<ul>
		</div>
		
		";

	$sidebar = '<p>comic-like hand-drawn illustrations</p>
	<p><a href="http://seanh.github.io/storymaps/">StoryMaps software</a>
	';

	$tools=array(
		array("skill"=>"Photoshop", "percent"=>20),
		array("skill"=>"Illustrator", "percent"=>20),
		array("skill"=>"Hand&nbsp;drawn&nbsp;illustrations", "percent"=>30),
	);

	$img_info = array(
	    array("file" => "01.jpg", "alt" => "Home / Split Up"),
	    array("file" => "02.jpg", "alt" => "Warning / Warning Ignored"),
	    array("file" => "03.jpg", "alt" => "Spying / Villainy"),
	    array("file" => "04.jpg", "alt" => "Wants / Finds Out"),
	    array("file" => "05.jpg", "alt" => "Test / Magic Helper")
	);

} //end Storymaps	


// #INDIGINAUTS
// ========================

if ( $title == "Indiginauts" ) {

	$path="img/indiginauts/";

	$description = "
		This idea was the whole reason we started Suspended Belief Games. Based on an illustration I did for a group show in New York, the Indiginauts were space explorers in the vein of Star Fleet. They were peace-loving creatures that explored the stars. Were they decended from humans? Maybe. They loved nothing more than to explore, learn and record for others to see.
		</p><p>
		Well, that was the original idea. Now they are wise-cracking repairmen. We developed the game as a simplified <span class='tooltip underline' title='Point and Touch?'>point-and-click</span> geared toward mobile devices. The main goal was to take everything we learned from classic point-and-clicks, like <em>Monkey Island</em>, and streamline and simplify. Top it off with an engaging story, developed characters and fun artwork.
		</p><p>
		Currently we are still working on our <a href='http://indiginauts.com' target='_blank'>first build</a>. We are doing internal testing of the game and I am still producing artwork for the&nbsp;game.
		";

	$sidebar = '
		Point \'n\' click adventure<br>
		iOS, Web<br>
		Estimated release 2014</p>
		<p><a href="http://www.suspendedbeliefgames.com">Suspended Belief Studios</a><br>
		<a href="http://www.indiginauts.com" target="_blank">Demo Link</a>
	';
	
	$tools=array(
		array("skill"=>"Photoshop", "percent"=>55),
		array("skill"=>"Hand&nbsp;Drawn&nbsp;Illustrations", "percent"=>35),
		array("skill"=>"Illustrator", "percent"=>5),
		array("skill"=>"Flash", "percent"=>5),
	);	
	
	$img_info = array(
	    array("file" => "logo.jpg", "alt" => "Indiginauts logo"),
	    array("file" => "01.jpg", "alt" => "Title screen"),
	    array("file" => "02.jpg", "alt" => "Exploring new places"),
	    array("file" => "03.jpg", "alt" => "Exploring new places"),
	    array("file" => "04.jpg", "alt" => "Coming to an iPad near you"),
	    array("file" => "puzzle.jpg", "alt" => "what a puzzle screen looks like"),
	    array("file" => "bridge.jpg", "alt" => "The bridge of the ship"),
	    array("file" => "kitchen.jpg", "alt" => "Home cookin'"),
	    array("file" => "prison.jpg", "alt" => "Location:???"),
	    array("file" => "character-sheet.jpg", "alt" => "some various character poses")
	);

} //end Indiginauts	


// #100 PRINCIPLES OF GAME DESIGN
// ===============================

if ( $title == "100 Principles of Game&nbsp;Design" ) {

	$path="img/100-principles-of-game-design/";

	$description = "
		Because of a scheduling problem, I was was asked to do the illustrations for a game design book. “Game design you say? This is my area of expertise!” The turnaround was tight, under a month for about 30 spot illustrations. The schedule wasn't the best, but I really wanted to do game illustrations. Exchanging sketches back and forth with the author, we decided that we could have a cast of  characters that could be reused which would greatly speed up the work, as well as establish a visual language.
		</p><p>
		After a month of my regular schedule at work and then spending my time at night creating the illustrations, I was stretched thin. In the end however, I was quite proud of the work and I took another step in mastering a pure vector art style.
		";
	
	$tools=array(
		array("skill"=>"Illustrator", "percent"=>45),
		array("skill"=>"Hand&nbsp;drawn&nbsp;illustrations", "percent"=>35),
		array("skill"=>"Photoshop", "percent"=>20),
	);	

	$sidebar = 'Published by Pearson</p>
		<p>Written by <a href="https://twitter.com/subversified">Wendy Despain</a> <br>
		December 2012<br>
		240 pages </p>
		<p><a href="http://www.pearsonhighered.com/educator/product/100-Principles-of-Game-Design/9780321902498.page">Buy a copy</a></p>
	';

	$img_info = array(
	    array("file" => "book-cover.jpg", "alt" => "Cover of the book"),
	    array("file" => "accomplishment.jpg", "alt" => "Title screen"),
	    array("file" => "commons.jpg", "alt" => "Exploring new places"),
	    array("file" => "griefing.gif", "alt" => "Exploring new places"),
	    array("file" => "errors.jpg", "alt" => "Coming to an iPad near you"),
	    array("file" => "min-max.jpg", "alt" => "what a puzzle screen looks like"),
	    array("file" => "reward1.jpg", "alt" => "The bridge of the ship"),
	    array("file" => "reward2.jpg", "alt" => "Home cookin'"),
	    array("file" => "synergy.jpg", "alt" => "Location:???"),
	    array("file" => "sandbox1.jpg", "alt" => "some various character poses"),
	    array("file" => "sandbox2.jpg", "alt" => "some various character poses"),
	    array("file" => "theme.jpg", "alt" => "some various character poses"),
	    array("file" => "wayfinding.jpg", "alt" => "some various character poses"),
	    array("file" => "hicks.jpg", "alt" => "some various character poses"),
	    array("file" => "attention-perception.jpg", "alt" => "some various character poses"),
	    array("file" => "working-memory.jpg", "alt" => "some various character poses"),
	);

} //end 100-principles-of-game-design	


// #ANIMORE
// ===============================

if ( $title == "Project Animore" ) {

	$path="img/project-animore/";

	$description = "
	This was a game concept we explored on the idea of mixing things together. We never did figure out the best way to execute or make it fun in a free-to-play environment (where all the games were headed at the time on iOS). We also didn't have a developer at the time to actually test game ideas with so it was all a lot of speculation on what would and wouldn't work.
	</p><p>
	In the end, we never were able to fully realize the game we wanted to make but I got a lot of great artwork out of it!
	</p><p>
	I mean, did you see that honey bear house?
	";
	
	$tools=array(
		array("skill"=>"Photoshop", "percent"=>60),
		array("skill"=>"Illustrator", "percent"=>40),
	);	

	$sidebar = 'iOS runner<br>
		Art by Ray&nbsp;Yuen &amp; Sun&nbsp;Park<br>
		Rated G!
	';

	$img_info = array(
	    array("file" => "01.jpg", "alt" => "Farm Screen"),
	    array("file" => "03.jpg", "alt" => "Mixing Chamber"),
	    array("file" => "04.jpg", "alt" => "House Detail"),
	    array("file" => "05.jpg", "alt" => "Overworld Map"),
	    array("file" => "02.jpg", "alt" => "New Animals In The Store"),
	    array("file" => "10.jpg", "alt" => "Front Page Of The Store"),
	    array("file" => "07.jpg", "alt" => "Bear House"),
	    array("file" => "08.jpg", "alt" => "Dog House"),
	    array("file" => "09.jpg", "alt" => "Cat House")
	);

} //end animore


// #MALADO INDEXHIBIT
// ===============================

if ( $title == "Malado Baldwin" ) {

	$path="img/malado-baldwin-indexhibit/";

	$description = 'When my artist friend Malado approached me in 2009 about having a site that she could update on her own, I actually didn‘t know what the best solution was out there. I was more print focused back then and had a little HTML/CSS experience. I turned to illustrator <a href="http://peteroumanski.com" target="_blank">Peter Oumanski</a> who told me he had good success using Indexhibit as his CMS. So I set it up. It was easy and now Malado had something she use call her own and didn’t need to hire web designers to update.
		</p><p>
		Epilogue: She really enjoyed Indexhibit. It gave her freedom to move things around, but being a person who works on canvas, she wanted to have complete freedom, which Indexhibit lacked. She, like other people, was starting to see the merits of the responsive design, something I didn’t really know existed yet. All this would pave the way to me eventually putting together a <a href="malado-baldwin-wordpress">Wordpress</a> site for her.
	 ';

	$tools=array(
		array("skill"=>"Indexhibit&nbsp;Framework", "percent"=>30),
		array("skill"=>"Photoshop", "percent"=>20),
		array("skill"=>"HTML", "percent"=>20),
		array("skill"=>"CSS", "percent"=>30),
	); 	

	$sidebar = "Portfolio Website </p>	
		<p><a href='http://www.maladobaldwin.com' target='_blank'>maladobaldwin.com</a>
	";

	$img_info = array(
		array("file" => "01.jpg", "alt" => "Front page of the site"),
		array("file" => "02.jpg", "alt" => "Projects page"),
		array("file" => "03.jpg", "alt" => "Projects page"),
		array("file" => "04.jpg", "alt" => "Malado's bio page"),
	);	

} //end malado-baldwin-indexhibit


// #MALADO-WORDPRESS-SITE
// ===============================

if ( $title == "Malado Baldwin Wordpress site" ) {

	$path="img/malado-baldwin-wordpress/";

	$description = "
		My friend Malado was growing out of her Indexhibit site and needed <em>more</em>. Responsiveness was the main thing she asked for, but not in those exact words since we didn’t know what that was at the time. I believe what she said was “These pictures look fine on the computer but too small on my phone.” When you're schmoozing it up at the gallery, you want to be able to show someone your painting on the fly while they are consuming free wine and cheese. There are sales to be made!
		</p><p>
		Since we're good friends, she always lets me try out the new things I learn on her site so out with the Indexhibit and in with Wordpress!
		</p><p>
		Epilogue: Malado really likes Wordpress, but finds it overwhelming sometimes. Artists are very picky about how their work is shown so she needed complete freedom. She is generally happy with the site but she finds that she doesn’t have the time to maintain it anymore. Recently, I’ve been thinking about building her a super simple site with my newfound PHP, jQuery, media query and SASSSSSS skills...to be continued...?
	";

	$sidebar = 'Portfolio Website</p>
		<p><a href="http://www.maladobaldwin.com/blog" target="_blank">link to site</a>';

	$tools=array(
		array("skill"=>"Wordpress&nbsp;Framework", "percent"=>30),
		array("skill"=>"Photoshop", "percent"=>20),
		array("skill"=>"HTML", "percent"=>20),
		array("skill"=>"CSS", "percent"=>30),
	);

	$img_info = array(
	    array("file" => "02.jpg", "alt" => "Home Page"),
	    array("file" => "01.jpg", "alt" => "Blog Post"),
	    array("file" => "03.jpg", "alt" => "Blog Post"),
	    array("file" => "04.jpg", "alt" => "Revolving Header"),
	    array("file" => "06.jpg", "alt" => "Revolving Header"),
	    array("file" => "05.jpg", "alt" => "Artwork Detail"),
	    array("file" => "07.jpg", "alt" => "Artwork Detail"),
	    array("file" => "08.jpg", "alt" => "CV Details")
	);	

} //end malado-baldwin-wordpress


// #SARAH-WALKO-WORDPRESS
// ===============================

if ( $title == "Sarah Walko website" ) {

	$path="img/sarah-walko-wordpress/";

	$description = "
		My first experience building a site using Wordpress. I met artist Sarah Walko through my good artist friend Malado Baldwin. She expressed that she needed a site that she could update on her own and that she had experience with Wordpress through work. So I went about helping her figure out the best way to get this going for&nbsp;her.
		</p><p>
		After figuring out all the nessesary information on her hosting, the actual Wordpress install really was about 5 minutes (this is something they boast)! We worked together on learning about a fresh WP install and soon was figuring out best practices for theme management, plugins and navigation. PRETTY COOL. So cool that <a href='malado-baldwin-wordpress'>Malado </a> wanted a site just like Sarah’s! 
	";

	$sidebar = 'Portfolio Website</p>
		<p><a href="http://www.sarahwalko.com/blog" target="_blank">sarahwalko.com</a>';

	$tools=array(
		array("skill"=>"Wordpress&nbsp;Framework", "percent"=>30),
		array("skill"=>"Photoshop", "percent"=>20),
		array("skill"=>"HTML", "percent"=>20),
		array("skill"=>"CSS", "percent"=>30),
	);

	$img_info = array(
	    array("file" => "01.jpg", "alt" => "Revolving Header"),
	    array("file" => "02.jpg", "alt" => "Revolving Header"),
	    array("file" => "03.jpg", "alt" => "Artwork Detail")
	);	

} //end sarah-walko-wordpress	


// #SCAVENGER-HUNT
// ===============================

if ( $title == "Scavenger Hunt" ) {

	$path="img/scavenger-hunt/";

	$description = 'SAN FRANCISCO, California — I submitted a t-shirt design to a Threadless contest. The challenge: make a fun tee for the <a href="http://www.chicagochildrensmuseum.org">Chicago Children\'s Museum</a>. The winner would get a ticket out to Chicago and like $1,000 in Threadless store credit or something. I did a bunch of research about the museum and found my imagination running wild with the activities you could do there (and mildly jealous that I wasn\'t a kid in Chicago!). I thought it would be wonderful to have a shirt that represented all the neat things kids could do at the&nbsp;museum.
		</p><p>
		My first idea was to perhaps to do a "Family Circus" style map showing a kid walking around the museum. I never did figure out the best way to represent three levels without a lot of weird perspective glitches. This is what lead me to the scavenger hunt idea. T-shirt real estate wise, it was more forgiving and allowed me more freedom with the  space on the shirt.
		</p>
		<a href="img/scavenger-hunt/ref/familycircus-hq.jpg" data-lightbox="familycircus" data-title="Family Circus map"><img src="img/scavenger-hunt/ref/familycircus.jpg" class="scale-with-grid2 add-bottom"></a>
		<p>It did not win the grand prize, however the museum still wanted to use the design and according to the representative at Threadless, it is now being sold at the museum gift shop. They were, however, too cheap to send me a sample so I don’t have actual&nbsp;photos.';

	$sidebar = '
		T-shirt design for Threadless.com</p>
		<p><a href="img/scavenger-hunt/01.jpg" data-lightbox="scav" data-title="T-shirt" alt="">shirt detail</a>
		<div class="none"><img src="img/scavenger-hunt/02.jpg" data-lightbox="scav" data-title="Art details" alt=""></div></p>
		<p>October 2013'
	;

	$tools=array(
		array("skill"=>"Photoshop", "percent"=>80),
		array("skill"=>"Hand&nbsp;Drawn&nbsp;Illustrations", "percent"=>20),
	);

	$img_info = array(
	    array("file" => "01-thumb.jpg", "alt" => "Tee shirt"),
	    array("file" => "02-thumb.jpg", "alt" => "Tee shirt detail")
	);	

} //end scavenger-hunt	


// #THE3
// ===============================

if ( $title == "The 3" ) {

	$path="img/the3/";

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>70, "icon"=>"IL"),
		array("skill"=>"Photoshop", "percent"=>20, "icon"=>"PS"),
		array("skill"=>"OmniGraffle", "percent"=>10,),
	);	

	$description = '
		Our first foray into the iPhone games arena was a trivia game. &ldquo;The&nbsp;3&rdquo; centered around the basic concept of multiple choice trivia with timely usage of powerups.
		</p>
		<p> 
			In our first iteration, you had to type out the answers, but that wasn\'t working out how we hoped and took way too long. It became more of a fast typing game. In our second iteration, we implemented multiple choice with 5 right and wrong answers and set the game time around 2 minutes. We liked this, but ultimately decided that it seemed like people were reading more than they should be, so we decided to cut down the questions and answers to 3, set the timer at one minute and consciously try to keep the wording for questions minimal if possible. We next implemented a system of power-ups and then for the next month went about procuring and writing good trivia questions.
		</p>
		<p>
			We released the game free in the <a href="https://itunes.apple.com/us/app/the-3-great-trivia/id694924959?mt=8" target="_blank">App Store</a> with in-app purchases for new categories as a way to generate revenue. It was also a chance for us to get to know first-hand how the App Store worked and seeing how a game would do with ads and without signifigant marketing dollars put behind it. Currently, it is still in stealth release because we still keep finding <span class="tooltip underline" title="FREAKIN\' google spreadsheet!">mistakes</span> in the questions, but we are hoping to squash all the&nbsp;mistakes.'
	;

	$sidebar = '	
		Platform: iPhone 4 and up. Playable on iPads. <br>
		Price: Free<br>
		<a href="https://itunes.apple.com/us/app/the-3-great-trivia/id694924959?mt=8" target="_blank">link to iTunes store</a></p>
		<p>A <a href="suspended-belief-studios">Suspended Belief</a> Joint.</p>
		<p>Game Design: <br>Ray Yuen, Jeremy Klar</p>
		<p>Developer: <br>Smartwave Studios</p>
	';

	$img_info = array(
	    array("file" => "01.jpg", "alt" => "Title Screen"),
	    array("file" => "02.jpg", "alt" => "iPhone Screens"),
	    array("file" => "03.jpg", "alt" => "Home and Category Screens"),
	    array("file" => "04.jpg", "alt" => "Sample Questions"),
	    array("file" => "07.jpg", "alt" => "Old UI Designs"),
	    array("file" => "06.jpg", "alt" => "Old Logo designs"),
	    array("file" => "05.jpg", "alt" => "Old Designs"),
	);	

} //end The 3


// #EDGEWARE
// ===============================

if ( $title == "Edgeware" ) {

	$path="img/edgeware/";

	$description = 'These are vector graphics proposed for a device that would help  Coast Guard patrols decide on the best course of action or even rules of engagement. They would input the conditions and the device would narrow down your options. I am not sure that this device was actually ever created but that’s the world of lucrative government contracts fer&nbsp;ya.';

	$sidebar = 'Vector Illustrations';

	$tools=array(
		array("skill"=>"Photoshop", "percent"=>70),
		array("skill"=>"Hand&nbsp;drawn&nbsp;illustrations", "percent"=>10),
		array("skill"=>"Illustrator", "percent"=>20),
	);	

	$img_info = array(
	    array("file" => "01.jpg", "alt" => "Boat"),
	    array("file" => "02.jpg", "alt" => "Boat"),
	    array("file" => "03.jpg", "alt" => "Boat"),
	    array("file" => "04.jpg", "alt" => "Speedometer"),
	    array("file" => "05.jpg", "alt" => "Cargo Crates"),
	    array("file" => "06.jpg", "alt" => "Boat Hiding")
	);	

} //end edgeware


// #EGG BABY
// ===============================

if ( $title == "Egg Baby" ) {

	$path="img/egg-baby/";

	$description = 'A Brooklyn-based apparel company needed some illustrations for some of their clothing. Their work is targeted at infants, small boys and girls.';

	$sidebar = 'Tee designs</p>
	<p><a href="http://www.egg-baby.com">Egg by Susan Lazar</a></p>';

	$tools=array(
		array("skill"=>"Photoshop", "percent"=>20),
		array("skill"=>"Hand&nbsp;drawn&nbsp;illustrations", "percent"=>75),
		array("skill"=>"Illustrator", "percent"=>5),
	);	

	$img_info = array(
	    array("file" => "miss-egg.jpg", "alt" => "Little Miss Egg, the mascot"),
	    array("file" => "bear.jpg", "alt" => "Gold Head Bear"),
	    array("file" => "hare.jpg", "alt" => "The Hare"),
	    array("file" => "penguin.jpg", "alt" => "Penguin vs. Fish"),
	    array("file" => "yeti.jpg", "alt" => "Yeti"),
	);	

} //end egg-baby


// #COLOR CHAMELEON
// ===============================

if ( $title == "Color Chameleon" ) {

	$path="img/color-chameleon/";


	$description = 'Color Chameleon was one of the first ideas we tried to bring to life. We thought it would be fun to run from a zookeeper who was chasing after you. The thing you needed to do was match the color of the objects that were in your path so you could camoflague and gain distance on your pursuers.
		</p><p>
		We went through a few iterations in a 2-D perspective but we ultimately scrapped it because we couldn\'t figure out how to program it on our own. We ulitimately decided to put our money into our original idea, Indiginauts, and hire developers to help with that. We put this on the shelf.
		</p><p>
		After the success of <em>Jet Pack Joyride</em> and <em>Temple Run</em>, my business partner Jeremy once again brought up the idea of doing this game. He made the chameleon bipedal and changed the idea so that he was running through a forest picking up bugs. He needed to change to the color of the bugs to pick them up. We had another artist at this point so we made up a bunch of artwork, but once again, the game wasn\'t how we hoped so we put it back on the shelf.
		</p><p>
		<strong>Epilogue</strong>: Jeremy couldn\'t let the idea of a "runner" go and has created a game called <a href="https://itunes.apple.com/us/app/color-surfer/id836439737?mt=8" target="_blank">"Color Surfer."</a> It\'s no longer a chameleon, but a spaceship! Give it a try!
	';

	$sidebar = '
		iOS runner</p>
		<p>First iteration:
		Art by Ray&nbsp;Yuen</p>
		<p>Second iteration: 
		Art by Ray&nbsp;Yuen &amp; Sun Park</p>				
	';

	$tools=array(
		array("skill"=>"Hand&nbsp;drawn&nbsp;illustrations", "percent"=>50),
		array("skill"=>"Photoshop", "percent"=>45),
	);	

	$img_info = array(
	    array("file" => "title.jpg", "alt" => "Title Screen on the iPhone"),
	    array("file" => "art.jpg", "alt" => "Color Chameleon background art"),
	    array("file" => "cham_run_eyes.gif", "alt" => "Early Sketch of Chameleon Artwork"),
	    array("file" => "06.jpg", "alt" => "Level Concept Artwork"),
	    array("file" => "07.jpg", "alt" => "Early 2-D Version of Color Chameleon"),
	    array("file" => "00.jpg", "alt" => "Different Versions of the Chameleon by Sun Park"),
	    array("file" => "01.jpg", "alt" => "3-D Version on the iPhone"),
	    array("file" => "02.jpg", "alt" => "Store screens"),
	    array("file" => "04.jpg", "alt" => "Objects"),
	    array("file" => "03.jpg", "alt" => "Rock details"),
	    array("file" => "05.jpg", "alt" => "Character Selection by Sun Park"),
	);	

} //end color-chameleon


// #ART+PARIS
// ===============================

if ( $title == "Art + Paris" ) {

	$path="img/art-and-paris/";

	$description = '
	<strong>Impressionists Post-Impressionists: The Ultimate Guide to Artists, Paintings and Places in Paris and Normandy</strong>. This was another book in the <em>Art+</em> series that Museyon was doing that they hadn’t done in a while since they started full steam with the Chronicles series. I personally had never laid out one of these, so I was eager to tackle something new.
		</p><p>
			The direction from the owner was that I didn’t need to follow the style of the previous books because he thought the stuff we have been doing recently was easier to read and more clear. Plus, it looked rad. With that in mind, I basically did a merge of the two styles—the readability and conciseness of the Chronicles books with some of the previous art elements from the <em>Art+</em> books.
		</p><p>
		Epilogue: With hundreds of paintings to catalogue and detail, this book was the most meticulous and detail-oriented book I worked on with Museyon. In the end, I am quite proud of this book and for all the stuff I learned (that I forgot about in art history class).
	';

	$author = "Museyon&nbsp;Guides";
	$pages = 328;
	$date = "July 2012";
	$url = "http://www.museyon.com/shop/art-paris-impressionists/";

	$sidebar = museyon_sidebar();

	$tools=array(
		array("skill"=>"Indesign", "percent"=>75),
		array("skill"=>"Photoshop", "percent"=>20),
		array("skill"=>"Illustrator", "percent"=>5),
	);	

	$img_info = array(
	    array("file" => "09.jpg", "alt" => "Lady in the Toilet by Morisot"),
	    array("file" => "cover.jpg", "alt" => "Book Cover"),
	    array("file" => "01.jpg", "alt" => "Book Intro"),
	    array("file" => "02.jpg", "alt" => "Opening Spread"),
	    array("file" => "03.jpg", "alt" => "Paul Cézanne spread"),
	    array("file" => "08.jpg", "alt" => "Claude Monet - Graystacks I"),
	    array("file" => "04.jpg", "alt" => "Museum Tours"),
	    array("file" => "05.jpg", "alt" => "Musée du Louvre page"),
	    array("file" => "06.jpg", "alt" => "Walking Tour page"),
	    array("file" => "07.jpg", "alt" => "Van Gogh"),
	);	

} //end art-and-paris


// CHRONICLES OF OLD #LONDON
// ===============================

if ( $title == "Chronicles of Old&nbsp;London" ) {

	$path="img/chronicles-of-old-london/";

	$tools=array(
		array("skill"=>"Indesign", "percent"=>75),
		array("skill"=>"Photoshop", "percent"=>20),
		array("skill"=>"Illustrator", "percent"=>5),
	);	

	$description = '
		<strong>Exploring England’s Historic Capital</strong>. The last Chronicles book I laid out. By this seventh book, the process for creation was pretty automatic. The conversations moved on from design to better content and better flow. <em>&ldquo;Is this drawing of Jack the Ripper too graphic?&rdquo; &ldquo;Is it not graphic enough?&rdquo; &ldquo;Is this too many photos of the Royal Wedding?&rdquo;</em>
		</p><p>
		This book also has the singular distinction of making it onto a television show, &ldquo;Parks and Recreation.&rdquo; There is a season opener where the gang goes to London and Leslie Nope is seen holding the book! Hopefully it was also read and not just used because it has a beautiful cover! You know how Macs are always used instead of PCs in television and movies? I’d like to think that this is what’s happening here.
		</p><p class="caption">
			<img src="img/chronicles-of-old-london/Parks-and-Rec-9-550x366.jpg" class="scale-with-grid" alt="" />Leslie using the guide to travel.
		</p><p class="caption">
			<img src="img/chronicles-of-old-london/Parks&Recreation_s.jpg" class="scale-with-grid" alt="" />Beautiful.
		';

	$author="Kevin&nbsp;Jackson";
	$pages = 288;
	$date = "May 2012";
	$url = "http://www.museyon.com/shop/chronicles-of-old-london/";

	$sidebar = museyon_sidebar();

	$img_info = array(
	    array("file" => "cover.jpg", "alt" => "Book Cover"),
	    array("file" => "01.jpg", "alt" => "Walking Tour spread"),
	    array("file" => "toc.jpg", "alt" => "Table of Contents"),
	    array("file" => "02.jpg", "alt" => "Opening Map"),
	    array("file" => "03.jpg", "alt" => "Boudicca spread"),
	    array("file" => "04.jpg", "alt" => "Elizabeth and Essex"),
	    array("file" => "05.jpg", "alt" => "Spread"),
	    array("file" => "06.jpg", "alt" => "South Bank Walking Tour"),
	    array("file" => "07.jpg", "alt" => "London map"),
	);	

} //end chronicles-of-old-london


// CHRONICLES OF OLD #PARIS
// ===============================

if ( $title == "Chronicles of Old&nbsp;Paris" ) {

	$path="img/chronicles-of-old-paris/";

	$description = '
		<strong>Exploring the Historic City of Light</strong>. Paris. The city of love. This place has a very special place in my heart because this is was my first trip with my s.o. other than each other\'s cities (long distance!).</p><p>Where the Vegas book was rife with land grabbing deals, the American frontier, casinos and big personalities—the Paris book was about food, steadfastness, art and music. There\'s a story about the city being starved during a siege and them resorting to eating zoo animals instead of surrendering. Oh and the top restaurants fought over who got which animal. How amazing is that?
		</p>
	';

	$author="John&nbsp;Baxter";
	$pages = 288;
	$date = "May 2011";
	$url = "http://www.museyon.com/shop/chronicles-of-old-paris/";

	$sidebar = museyon_sidebar();

	$tools=array(
		array("skill"=>"Indesign", "percent"=>75),
		array("skill"=>"Photoshop", "percent"=>20),
		array("skill"=>"Illustrator", "percent"=>5),
	);	

	$img_info = array(
		array("file" => "cover.jpg", "alt" => "Book Cover"),
		array("file" => "01.jpg", "alt" => "Montmarte"),
		array("file" => "02.jpg", "alt" => "Napoleon"),
	);	

} //end chronicles-of-old-paris


// #CITY STYLE
// ===============================

if ( $title == "City Style" ) {

	$path="img/city-style/";

	$description = '
		A Field Guide to Global Fashion Capitals. The second book I worked on with Museyon, City Style was a completely one-off book on fashion. <a href="http://www.linkedin.com/in/thisisheatherc">Heather</a>, one of the editors, was a big nerd for art and fashion (she taught me about jean jackets).
		</p><p>
		This was basically me and Heather\'s book, so we basically got to do most everything we wanted. With Heather manning the phones and email trying to get approved photos from fashion houses, I went about establishing a variant of the Museyon style for the book\'s skeleton. It was structured, but loose enough that it allowed each city to have it\'s own look and feel. We wanted the book to have a a magazine feel to them with bold type design with big photos that spoke for themselves. We may have gotten a little carried away in the beginning with many pages being full photos and the page count going up, but we course-corrected and got ourselves back to the target page count. 
		</p><p>
			Epilogue: This book really refined the working relationship that would serve us well in the coming year as we go into full <a href="chronicles-of-old-las-vegas"><em>Chronicles</em></a>&nbsp;mode.
		';

	$author = "Museyon&nbsp;Guides";
	$pages = 272;
	$date = "October 2011";
	$url = "http://www.museyon.com/shop/city-style/";

	$sidebar = museyon_sidebar();

	$tools=array(
		array("skill"=>"Indesign", "percent"=>75),
		array("skill"=>"Photoshop", "percent"=>20),
		array("skill"=>"Illustrator", "percent"=>5),
	);	

	$img_info = array(
	    array("file" => "03.jpg", "alt" => "Fashion Forward"),
	    array("file" => "cover.jpg", "alt" => "Book Cover"),
	    array("file" => "title.jpg", "alt" => "Title spread"),
	    array("file" => "toc.jpg", "alt" => "Table of Contents"),
	    array("file" => "01.jpg", "alt" => "Rider by Parra"),
	    array("file" => "forward.jpg", "alt" => "Intro"),
	    array("file" => "j1.jpg", "alt" => "Spread"),
	    array("file" => "j2.jpg", "alt" => "Hotspots"),
	    array("file" => "j3.jpg", "alt" => "Tokyo spread"),
	    array("file" => "02.jpg", "alt" => "Backstage"),
	    array("file" => "ny.jpg", "alt" => "New York opening spread"),
	    array("file" => "ny1.jpg", "alt" => "New York spread"),
	    array("file" => "dir.jpg", "alt" => "Designer Directory")
	);	

} //end city-style


// CHRONICLES OF OLD #ROME
// ===============================

if ( $title == "Chronicles of Old&nbsp;Rome" ) {

	$path="img/chronicles-of-old-rome/";


	$description = '
		<strong>Exploring Italy\'s Eternal City</strong>. After my move to San Francisco, I didn\'t get to work on as many big projects with Museyon anymore. One thing I still do on occasion is work on their maps. Normally there is another person who makes their maps, but because they are an intensive endeavor, I was asked to help out. I had good success with it because I was more familiar with the page margins, the software and being able to make all the fonts consistently the same&nbsp;size. 
		</p><p>
		That being said, they are still an intensive endeavor that involves some pretty detailed Illustrator work. And street labeling. So much street labeling.
	';

	$author = "Tamara&nbsp;Thiessen";
	$pages = 272;
	$date = "April 2013";
	$url = "http://www.museyon.com/shop/chronicles-of-old-rome";

	$sidebar = museyon_sidebar();

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>70),
		array("skill"=>"Google Maps", "percent"=>10),
		array("skill"=>"Openmaps", "percent"=>10),
		array("skill"=>"Photoshop", "percent"=>5),
		array("skill"=>"Indesign", "percent"=>5),
	);	
	$tools = array("Illustrator","Photoshop","Indesign","Google Maps","Openmaps");

	$img_info = array(
   		array("file" => "cover.jpg", "alt" => ""),
   		array("file" => "title.jpg", "alt" => ""),
   		array("file" => "01.jpg", "alt" => ""),
   		array("file" => "02.jpg", "alt" => ""),
   		array("file" => "03.jpg", "alt" => ""),
	);	

} //end chronicles-of-old-rome


// CHRONICLES OF OLD NEW #YORK
// ===============================

if ( $title == "Chronicles of Old New&nbsp;York" ) {

	$path="img/chronicles-of-old-new-york/";

	$description = '
		<strong>Explore 400 years of Manhattan history</strong>. <em>Chronicles of Old New York</em> was the first book I worked on with Museyon Guides. The first half of the book details stories in and around New York City\'s history. The second half of the book featured walking tours which would highlight eight areas and provide references to the first half of the book. The historic content was pretty awesome. Gun duels, old taverns in the city (that George Washington went to!), rich capitalists that built the city...it was nice to know more about the city I lived in.
		</p><p>
		This book was to be an off-shoot book (up till this point, Museyon had been making a series of books called <a href="http://www.museyon.com/shop/art-travel-europe/">Art+</a> and <a href="http://www.museyon.com/shop/film-travel-asia-oceania-africa/">Film+</a>). We decided that we wanted to have a different look, but still keep the looks aligned. We worked together to establish some base rules and some standard layouts and with the skeleton of the book created, we went about populating the pages. 
		</p><p>
		Since this was the first time we worked together, I had to make sure their production files were all up to snuff. The owner had a decent eye for design and some previous production experience with magazines, but the files were a copy-and-paste mess. I showed them how to automate the more menial tasks, like converting folders of images to CMYK, paragraph/character styles and indexing (because humans have better things to do!) They had me pretty involved in the design and photo selection process which I quite enjoyed. 
		</p><p>
		<strong>Epilogue</strong>: We worked really well together and this book actually became their best selling book which lead to them doing more in the <em>Chronicles</em> series (which meant more work for me! Yeah!). They eventually asked me to do more in the series, but that took some time. In the meantime, they asked me to layout a <a href="city-style">fashion book</a>.';
	
	$author = "James&nbsp;Roman";
	$pages = 260;
	$date = "June 2010";
	$url = "http://www.museyon.com/shop/chronicles-of-old-new-york";
	
	$tools=array(
		array("skill"=>"Indesign", "percent"=>75),
		array("skill"=>"Photoshop", "percent"=>20),
		array("skill"=>"Illustrator", "percent"=>5),
	);	

	$sidebar = museyon_sidebar();

	$img_info = array(
   		array("file" => "04.jpg", "alt" => ""),
   		array("file" => "cover.jpg", "alt" => ""),
   		array("file" => "07.jpg", "alt" => ""),
   		array("file" => "03.jpg", "alt" => ""),
   		array("file" => "10.jpg", "alt" => ""),
   		array("file" => "02.jpg", "alt" => ""),
   		array("file" => "05.jpg", "alt" => ""),
   		array("file" => "06.jpg", "alt" => ""),
   		array("file" => "08.jpg", "alt" => ""),
   		array("file" => "09.jpg", "alt" => ""),
   		array("file" => "01.jpg", "alt" => ""),
   		array("file" => "burr.jpg", "alt" => ""),
	);	

} //end chronicles-of-old-new-york


// CHRONICLES OF OLD #BOSTON
// ===============================

if ( $title == "Chronicles of Old&nbsp;Boston" ) {

	$path="img/chronicles-of-old-boston/";

	$description = '<strong>Exploring New England’s Historic Capital</strong>. No one can deny Boston’s historical signifigance in America’s history. Being able to read the stories of our forefathers and a broken mollasses tank that kills woman and children alike in the same book. Amazing. ';

	$author="Charles&nbsp;Bahne";
	$pages = 288;
	$date = "April 2012";
	$url="http://www.museyon.com/shop/chronicles-of-old-boston/";

	$sidebar = museyon_sidebar();

	$tools=array(
		array("skill"=>"Indesign", "percent"=>75),
		array("skill"=>"Photoshop", "percent"=>20),
		array("skill"=>"Illustrator", "percent"=>5),
	);


	$img_info = array(
		array("file" => "07.jpg", "alt" => "The Kennedys"),
		array("file" => "cover.jpg", "alt" => ""),
		array("file" => "01.jpg", "alt" => ""),
		array("file" => "02.jpg", "alt" => ""),
		array("file" => "03.jpg", "alt" => ""),
		array("file" => "04.jpg", "alt" => ""),
		array("file" => "05.jpg", "alt" => ""),
		array("file" => "06.jpg", "alt" => ""),
		array("file" => "08.jpg", "alt" => ""),
	);	

} //end chronicles-of-old-boston


// ##CHRONICLES OF OLD LAS #VEGAS
// ===============================

if ( $title == "Chronicles of Old Las&nbsp;Vegas" ) {

	$path="img/chronicles-of-old-las-vegas/";

	$description = '
		<strong>Exploring Sin City’s High-Stakes History</strong>. The third book I worked on with Museyon. With <a href="chronicles-of-old-new-york"><em>Chronicles of Old New York</em></a> selling very well, they decided to continue this series and asked me to help with 5 more books! Which cities? A few ideas were tossed around, but I had a feeling it was always going to be Vegas, baby. Mafia dons, casinos, Elvis, Liberace, nuclear tests...don\'t pretend like you don\'t want to know about this sort of stuff!
		The look of this series was established, the only thing to do was to refine and respond to any sort of issues with New York\'s print run. I adjusted the margins slightly to adjust for the book\'s gutter. Picked a color palette based on the desert. Optimized the photo sephia process so that all photos would all look more similiar. Picked the best picture of Elvis we could.
		</p><p>
		</p><p>
			Epilogue: With the amazing cover and content, this is easily my favorite book in the whole series because the stories were so amazing and we had a lot of fun putting it all together. Next up...<a href="chronicles-of-old-boston">Boston</a>.
	 ';

	$author="James&nbsp;Roman";
	$pages = 240;
	$date = "February 2012";
	$url = "http://www.museyon.com/shop/chronicles-of-old-las-vegas/";

	$tools=array(
		array("skill"=>"Indesign", "percent"=>75),
		array("skill"=>"Photoshop", "percent"=>20),
		array("skill"=>"Illustrator", "percent"=>5),
	);

	
	$sidebar = museyon_sidebar();

	$img_info = array(
	    array("file" => "01.jpg", "alt" => "The Rat Pack"),
	    array("file" => "cover.jpg", "alt" => "Chronicles of Old Las Vegas cover"),
	    array("file" => "03.jpg", "alt" => "Vegas sign"),
	    array("file" => "04.jpg", "alt" => "Marilyn"),
	    array("file" => "07.jpg", "alt" => "Dunes"),
	    array("file" => "05.jpg", "alt" => "Neon Boneyard"),
	    array("file" => "06.jpg", "alt" => ""),
	    array("file" => "02.jpg", "alt" => "naked ladies"),
	);	

} //end chronicles-of-old-las-vegas


//  #ABRIENDO PUERTAS
// ===============================

if ( $title == "Abriendo Puertas / Opening&nbsp;Doors" ) {

	$path="img/abriendo-puertas/";

	$description = '<em>Abriendo Puertas / Opening Doors</em> is a non-profit dedicated to decreasing the drop-out rate of Latino kids by instilling good behaviors at home. They believe the answer starts at home so their primary focus is on educating their parents. AP/OD holds training sessions where they teach parents different things they could do with their kids to better engage them and acclimate them to a learning environment.
		</p><p>
		AP/OD needed an informational site where parents and educators could come to find out more about the organization, where trainings would be, and a place where educators could access teaching materials. After getting approval on the overall look of the site, we built the site based on the Skeleton framework. After a few rounds of going back and forth, we streamlined the content of the site with PHP. They now have beautiful site that looks good on all devices.
		';
	
	$sidebar = "Responsive Website</p>
		<p><a href='http://ap-od.org' target='_blank'>ap-od.org</a>
	";
	$tools=array(
		array("skill"=>"Skeleton&nbsp;Framework", "percent"=>20),
		array("skill"=>"HTML", "percent"=>60),
		array("skill"=>"CSS", "percent"=>40),
		array("skill"=>"PHP", "percent"=>10),
		array("skill"=>"Photoshop", "percent"=>20),
		array("skill"=>"Illustrator", "percent"=>5),
		array("skill"=>"OmniGraffle", "percent"=>5),
	);

	$img_info = array(
		array("file" => "01.jpg", "alt" => "home screen"),
		array("file" => "02.jpg", "alt" => ""),
		array("file" => "03.jpg", "alt" => ""),
		array("file" => "04.jpg", "alt" => ""),
		array("file" => "05.jpg", "alt" => ""),
	);	

} //end abriendo-puertas


//  #MONKEY MO, MONKEY GO
// ===============================

if ( $title == "Monkey Mo, Monkey&nbsp;Go!" ) {

	$path="img/monkey-mo/";

	$tools=array(
		array("skill"=>"Photoshop", "percent"=>55),
		array("skill"=>"Hand-drawn&nbsp;illustrations", "percent"=>30),
		array("skill"=>"Indesign", "percent"=>10),
		array("skill"=>"Illustrator", "percent"=>5),
	);

	$description = '
		Teaming up again with author Lin Fong O\'Neil, we worked together to create another children\'s book. Lin wanted to make another book about another animal in the Chinese zodiac and when she asked me what I wanted to do, I responded with "Monkey!" Monkeys are rad&nbsp;obviously.
		</p><p>
		The story follows the adventures of a little boy\'s adventure to the zoo and finding a new best friend. I put a lot of detail into this book and made it somewhat interactive. I hid animals in various spots so as give children an activity to do after they finish.
		</p>

		<hr>
		<div class="six columns alpha">
			<a href="img/monkey-mo/classroom1.jpg" data-lightbox="monkey" data-title="The group"><img class="scale-with-grid" src="img/monkey-mo/classroom1.jpg" alt=""></a>
		</div>
		<div class="six columns omega">
			<a href="img/monkey-mo/classroom2.jpg" data-lightbox="monkey" data-title="The group"><img class="scale-with-grid" src="img/monkey-mo/classroom2.jpg" alt=""></a>
		</div>
		<p>
		The time I read the book to a kindergarten class and then taught them how to draw monkeys. That was a good day!
		'
		;
	
	$sidebar = "Children's Book<br>Published 2010</p>
		<p>written by: Lin Fong O'Neill, <a href='http://www.lotuswriting.com'>Lotus&nbsp;Writing</a><br>Illustrated: by Ray Yuen</p>
		<p>Hand-drawn and inked, coloring done in Photoshop</p>
		<p><a href='http://www.amazon.com/Monkey-Mo-Go-Lin-Fong-ONeill/dp/0978644131'>Buy the book</a></p>
		<p><img width='50%' class='add-top' src='img/monkey-mo/icon_peter.png' alt='' />
	";

	$img_info = array(
		array("file" => "title.jpg", "alt" => "home screen"),
		array("file" => "cover.jpg", "alt" => "home screen"),
		array("file" => "01.jpg", "alt" => "home screen"),
		array("file" => "09.jpg", "alt" => "spread 1"),
		array("file" => "08.jpg", "alt" => "circus"),
		array("file" => "02.jpg", "alt" => "home screen"),
		array("file" => "03.jpg", "alt" => ""),
		array("file" => "04.jpg", "alt" => ""),
		array("file" => "05.jpg", "alt" => ""),
		array("file" => "07.jpg", "alt" => ""),
		array("file" => "10.jpg", "alt" => ""),
	);	

} //end monkey-mo


//  THE RISE OF #DARKRAI
// ===============================

if ( $title == "The Rise of Darkrai" ) {

	$path="img/darkrai/";

	$description = '
	The Rise of Darkrai was the 10th Pok&eacute;mon movie made and the third movie I worked&nbsp;on.
		</p><p>
		It was around this time I was finally starting to feel comfortable with the logos I was creating for these movies. The logos were by far the hardest part for me because they went against everything I was taught in school—to simplify and remove. Here it was almost more is better. Ornamental, fun and colorful. It was a little hard to adjust to at first, but eventually we got&nbsp;there.
		</p><p>
		Chris, the creative director, and I worked closely on this one. I gave him a bunch of ideas, but they were all missing something. Once he found the typeface we ended up using, it quickly came in place. I thought the gothic typeface really captured the feel of the featured ghost-like character and the look of the movie. After that, localizing the rest of the materials was easy.
		';

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>80),
		array("skill"=>"Photoshop", "percent"=>20),
	);
	
	$sidebar = "February 2008</p>
				<p><strong>Creative</strong>: Chris&nbsp;Brixey, Ray&nbsp;Yuen</p>
				<p><strong>Interactive</strong>: Masahiro&nbsp;Manabe</p>
				<p>Logo, movie poster, marketing materials, DVD packaging, movie mini-site</p>
				<p><strong>Original title</strong>: Pocket&nbsp;Monsters Diamond & Pearl the Movie: Dialga vs. Palkia vs. Darkrai</p>
				<p>劇場版ポケットモンスター ダイヤモンド&パール ディアルガVSパルキアVSダークライ</p>
				";

	$img_info = array(
		array("file" => "01.jpg", "alt" => "home screen"),
		array("file" => "05.jpg", "alt" => "home screen"),
		array("file" => "02.jpg", "alt" => "home screen"),
		array("file" => "03.jpg", "alt" => "home screen"),
		array("file" => "04.jpg", "alt" => "home screen"),
	);	

} //end THE RISE OF DARKRAI


//  #ARCEUS
// ===============================

if ( $title == "Arceus and the Jewel of&nbsp;Life" ) {

	$path="img/arceus/";

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>80),
		array("skill"=>"Photoshop", "percent"=>20),
	);

	$description = '';
	
	$sidebar = "";

	$img_info = array(
		array("file" => "03.jpg", "alt" => ""),
		array("file" => "01.jpg", "alt" => ""),
		array("file" => "02.jpg", "alt" => ""),
	);	

} //end arceus

//  POKEMON #10TH #ANNIVERSARY
// ===============================

if ( $title == "Pok&eacute;mon: 10th Anniversary" ) {

	$path="img/10th-anniversary/";

	$description = '
	 	The celebrations began with a "Journey Across America" Mall Tour where we distributed exclusive Pok&eacute;mon and held game tournaments. Winners were invited to the national tournament. It all lead up to the big event at Bryant Park, where the National Game Tournament was held and all aspects of the Pok&eacute;mon products and brands were represented.
	';

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>70),
		array("skill"=>"Photoshop", "percent"=>20),
		array("skill"=>"Indesign", "percent"=>10),
	);
	
	$sidebar = "Bryant Park";

	$img_info = array(
		array("file" => "16.jpg", "alt" => "Journey Across America"),
		array("file" => "01.jpg", "alt" => ""),
		array("file" => "02.jpg", "alt" => ""),
		array("file" => "03.jpg", "alt" => ""),
		array("file" => "04.jpg", "alt" => ""),
		array("file" => "05.jpg", "alt" => ""),
		array("file" => "06.jpg", "alt" => ""),
		array("file" => "07.jpg", "alt" => ""),
		array("file" => "08.jpg", "alt" => ""),
		array("file" => "09.jpg", "alt" => ""),
		array("file" => "10.jpg", "alt" => ""),
		array("file" => "11.jpg", "alt" => ""),
		array("file" => "12.jpg", "alt" => ""),
		array("file" => "13.jpg", "alt" => ""),
		array("file" => "14.jpg", "alt" => ""),
		array("file" => "15.jpg", "alt" => ""),
	);	

} //end arceus

//  POKEMON #TOYS R US
// ===============================

if ( $title == "Pok&eacute;mon: Toys'R'Us Feature Shop" ) {

	$path="img/feature-shop/";

	$description = '';
	
	$sidebar = "Toys'R'Us Times Square";

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>80),
		array("skill"=>"Photoshop", "percent"=>20),
	);

	$img_info = array(
		array("file" => "01.jpg", "alt" => ""),
		array("file" => "02.jpg", "alt" => ""),
		array("file" => "03.jpg", "alt" => ""),
		array("file" => "04.jpg", "alt" => ""),
		array("file" => "05.jpg", "alt" => ""),
		array("file" => "06.jpg", "alt" => ""),
		array("file" => "07.jpg", "alt" => ""),
		array("file" => "08.jpg", "alt" => ""),
	);	

} //end TOYS R US


//  #TOY-FAIR
// ===============================

if ( $title == "Pok&eacute;mon: Toy Fair" ) {

	$path="img/toy-fair/";

	$description = '';
	
	$sidebar = "
		Trade Show Booth
	";

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>80),
		array("skill"=>"Photoshop", "percent"=>20),
	);

	$img_info = array(
		array("file" => "01.jpg", "alt" => ""),
		array("file" => "02.jpg", "alt" => ""),
		array("file" => "03.jpg", "alt" => ""),
		array("file" => "04.jpg", "alt" => ""),
	);	

} //end TOY FAIR


//  #NERD COMICS
// ===============================

if ( $title == "Nerd Comics" ) {

	$path="img/nerd-comics/";

	$description = '';
	
	$sidebar = "";

	$img_info = array(
		array("file" => "darwin.gif", "alt" => ""),
		array("file" => "inspiration.gif", "alt" => ""),
		array("file" => "marvels.gif", "alt" => ""),
	);	

} //end NERD COMICS


//  #MYSTERY#DUNGEON
// ===============================

if ( $title == "Pok&eacute;mon: Mystery&nbsp;Dungeon" ) {

	$path="img/mystery-dungeon/";

	$description = '';
	
	$sidebar = "
		Strategy Guide <br />	
		Mini-website Creation
	";

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>5),
		array("skill"=>"Photoshop", "percent"=>20),
	);

	$img_info = array(
		array("file" => "01.jpg", "alt" => ""),
		array("file" => "02.jpg", "alt" => ""),
	);	

} //end MYSTERY DUNGEON


//  POCKET #POKEDEX
// ===============================

if ( $title == "Pocket Pok&eacute;dex" ) {

	$path="img/pocket-pokedex/";

	$description = '';
	
	$sidebar = "
		Book Design <br />

	";

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>5),
		array("skill"=>"Photoshop", "percent"=>20),
	);

	$img_info = array(
		array("file" => "01.jpg", "alt" => ""),
		array("file" => "02.jpg", "alt" => ""),
		array("file" => "03.jpg", "alt" => ""),
		array("file" => "04.jpg", "alt" => ""),
		array("file" => "05.jpg", "alt" => ""),
	);	

} //end POCKET POKEDEX


//  BATTLE #REVOLUTION
// ===============================

if ( $title == "Battle Revolution" ) {

	$path="img/battle-revolution/";

	$description = '';
	
	$sidebar = "Strategy Guides <br />
	Mini-website";

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>5),
		array("skill"=>"Photoshop", "percent"=>20),
	);

	$img_info = array(
		array("file" => "01.jpg", "alt" => ""),
		array("file" => "02.jpg", "alt" => ""),
		array("file" => "03.jpg", "alt" => ""),
	);	

} //end BATTLE REVOLUTION


//  #DIAMOND-AND-PEARL 
// ===============================

if ( $title == "Pok&eacute;mon: Diamond & Pearl Launch" ) {

	$path="img/dp-launch/";

	$description = '';
	
	$sidebar = "
		Event at Nintendo World in New York <br />
		Rockefeller Center
	";

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>5),
		array("skill"=>"Photoshop", "percent"=>20),
	);

	$img_info = array(
		array("file" => "01.jpg", "alt" => ""),
		array("file" => "02.jpg", "alt" => ""),
		array("file" => "03.jpg", "alt" => ""),
		array("file" => "04.jpg", "alt" => ""),
		array("file" => "05.jpg", "alt" => ""),
		array("file" => "06.jpg", "alt" => ""),
		array("file" => "07.jpg", "alt" => ""),
		array("file" => "08.jpg", "alt" => ""),
		array("file" => "09.jpg", "alt" => ""),
		array("file" => "10.jpg", "alt" => ""),
		array("file" => "11.jpg", "alt" => ""),
	);	

} //end DIAMOND-AND-PEARL


//  #LICENSING-SHOW
// ===============================

if ( $title == "Licensing Show" ) {

	$path="img/licensing-show/";

	$description = '';
	
	$sidebar = "
		Trade Show Booth
	";

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>5),
		array("skill"=>"Photoshop", "percent"=>20),
	);

	$img_info = array(
		array("file" => "01.jpg", "alt" => ""),
		array("file" => "02.jpg", "alt" => ""),
		array("file" => "13.jpg", "alt" => ""),
		array("file" => "14.jpg", "alt" => ""),
		array("file" => "03.jpg", "alt" => ""),
		array("file" => "04.jpg", "alt" => ""),
		array("file" => "05.jpg", "alt" => ""),
		array("file" => "06.jpg", "alt" => ""),
		array("file" => "07.jpg", "alt" => ""),
		array("file" => "08.jpg", "alt" => ""),
		array("file" => "09.jpg", "alt" => ""),
		array("file" => "10.jpg", "alt" => ""),
		array("file" => "11.jpg", "alt" => ""),
	);	

} //end LICENSING-SHOW


//  #POKEMON-LOGOS
// ===============================

if ( $title == "Pok&eacute;mon: Logos" ) {

	$path="img/pokemon-logos/";

	$description = '';
	
	$sidebar = "
		Logo examples
	";

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>70),
		array("skill"=>"Photoshop", "percent"=>30),
	);

	$img_info = array(
		array("file" => "arceus.jpg", "alt" => ""),
		array("file" => "ranger.jpg", "alt" => ""),
		array("file" => "battle-dimension.jpg", "alt" => ""),
		array("file" => "galactic-battles.jpg", "alt" => ""),
		array("file" => "giratina.jpg", "alt" => ""),
		array("file" => "battle-frontier.jpg", "alt" => ""),
);	

} //end POKEMON-LOGOS

//  #PORTFOLIO-SITE
// ===============================

if ( $title == "Pok&eacute;mon: Logos" ) {

	$path="img/portfolio-site/";

	$description = '';
	
	$sidebar = "
		Logo examples
	";

	$tools=array(
		array("skill"=>"Sublime Text", "percent"=>70),
		array("skill"=>"Git", "percent"=>10),
		array("skill"=>"Photoshop", "percent"=>20),
	);

	$img_info = array(
		array("file" => "01.jpg", "alt" => ""),
		array("file" => "02.jpg", "alt" => ""),
	);

} //end PORTFOLIO SITE