<?
$p_break = "</p><p>";

$works = array(
	array( "name" => "NextLesson","path" => "nextlesson", "tags" => array("places-i-worked") ),
	array( "name" => "NextLesson InterestID","path" => "nextlesson-interestid","tags"=>array("ui-ux","illustration","web-dev") ),
	array( "name" => "NextLesson Lesson Covers","path" => "nextlesson-covers", "tags"=>array("illustration","ui-ux","branding","web-dev") ),
	// array( "name" => "NextLesson Marketing","path" => "nextlesson-marketing" ),
	array( "name" => "NextLesson Glossary Images", "path" => "nextlesson-glossary", "tags"=>array("illustration") ),
	array( "name" => "NextLesson Characters", "path" => "nextlesson-characters", "tags"=>array("illustration") ),
	// array( "name" => "NextLesson Interactive","path" => "nextlesson-interactive" ),
	// array( "name" => "Custom Avatars","path" => "nextlesson-avatars" ),
	// array( "name" => "NextLesson Graphics Library","path" => "nextlesson-library" ),
	// array( "name" => "NextLesson Search and Browse Page","path" => "nextlesson-search-browse" ),
	array( "name" => "The 3", "path" => "the3", "tags"=>array("ui-ux") ),
	array( "name" => "Indiginauts", "path" => "indiginauts", "tags" => array("illustration","ui-ux") ),
	array( "name" => "Pok&eacute;mon", "path" => "pokemon","tags"=>array("places-i-worked") ),
	array( "name" => "Wired", "path" => "wired", "tags" => array("illustration") ),
	array( "name" => "Abriendo Puertas / Opening&nbsp;Doors", "path" => "abriendo-puertas",	"tags"=>array("web-dev","branding") ),
	array( "name" => "Color Chameleon", "path" => "color-chameleon", "tags" => array("illustration","ui-ux") ),
	array( "name" => "Adelle Marcero", "path" => "adelle-marcero","tags"=>array("web-dev", "ui-ux") ),
	array( "name" => "LesConcierges","path" => "lesconcierges", "tags" => array("illustration") ),
	array( "name" => "Museyon Guides", "path" => "museyon-guides", "tags"=>array("places-i-worked") ),
	array( "name" => "Project Animore", "path" => "project-animore", "tags" => array("illustration","ui-ux") ),
	array( "name" => "#Inktober2016","path" => "inktober-2016", "tags" => array("illustration") ),
	array( "name" => "100 Principles of Game Design", "path" => "100-principles-of-game-design", "tags" => array("illustration") ),
	array( "name" => "Holiday Card 2014", "path" => "holiday-2014", "tags" => array("web-dev","illustration") ),
	array( "name" => "Monkey Mo, Monkey&nbsp;Go!", "path" => "monkey-mo", "tags" => array("illustration", "print-design") ),
	array( "name" => "Scavenger Hunt", "path" => "scavenger-hunt", "tags" => array("illustration") ),
	array( "name" => "Suspended Belief Studios", "path" => "suspended-belief-studios", "tags" => array("places-i-worked") ),
	array( "name" => "Chronicles of Old New&nbsp;York", "path" => "chronicles-of-old-new-york", "tags"=>array("print-design") ),
	array( "name" => "Sarah Walko", "path" => "sarah-walko", "tags"=>array("web-dev") ),
	array( "name" => "Edgeware", "path" => "edgeware", "tags"=>array("illustration") ),
	array( "name" => "StoryMaps", "path" => "storymaps", "tags" => array("illustration") ),
	array( "name" => "Malado Baldwin", "path" => "malado-baldwin", "tags"=>array("web-dev") ),
	array( "name" => "Egg Baby", "path" => "egg-baby", "tags" => array("illustration") ),
	array( "name" => "City Style","path" => "city-style","tags"=>array("print-design")),
	array( "name" => "Chronicles of Old Las&nbsp;Vegas","path" => "chronicles-of-old-las-vegas","tags"=>array("print-design")),
	array( "name" => "Chronicles of Old&nbsp;Boston","path" => "chronicles-of-old-boston","tags"=>array("print-design")),
	array( "name" => "Chronicles of Old&nbsp;Paris","path" => "chronicles-of-old-paris","tags"=>array("print-design")),
	array( "name" => "Chronicles of Old&nbsp;London", "path" => "chronicles-of-old-london", "tags"=>array("print-design")),
	array( "name" => "Art + Paris","path" => "art-and-paris","tags"=>array("print-design")),
	array( "name" => "Chronicles of Old&nbsp;Rome","path" => "chronicles-of-old-rome","tags"=>array("print-design")),
	array( "name" => "The Rise of Darkrai","path" => "darkrai", "tags"=>array("print-design","ui-ux") ),
	array( "name" => "Arceus and the Jewel of&nbsp;Life","path" => "arceus", "tags"=>array("print-design","ui-ux") ),
	array( "name" => "Pok&eacute;mon: Toys'R'Us Feature Shop", "path" => "feature-shop", "tags"=>array("print-design") ),
	array( "name" => "Pok&eacute;mon: Logos", "path" => "pokemon-logos", "tags"=>array("print-design","branding") ),
	array( "name" => "Pok&eacute;mon: 10th Anniversary","path" => "10th-anniversary","tags"=>array("print-design","branding") ),
	array( "name" => "Pok&eacute;mon: Mystery Dungeon", "path" => "mystery-dungeon", "tags"=>array("print-design") ),
	array( "name" => "Battle Revolution", "path" => "battle-revolution", "tags"=>array("print-design","ui-ux") ),
	array( "name" => "Pocket Pokedex", "path" => "pocket-pokedex", "tags"=>array("print-design") ),
	array( "name" => "Pok&eacute;mon Toy&nbsp;Fair", "path" => "toy-fair", "tags"=>array("print-design","branding") ),
	array( "name" => "Pok&eacute;mon: Diamond & Pearl Launch", "path" => "dp-launch", "tags"=>array("print-design","branding") ),
	array( "name" => "Licensing Show", "path" => "licensing-show", "tags"=>array("print-design","branding") ),
	// array( "name" => "Malado Baldwin website","path" => "malado-baldwin-indexhibit" ),
	// array( "name" => "Portfolio Site","path" => "portfolio-site" ),
	// array( "name" => "idibon","path" => "idibon","tags"=>array("illustration") ),
	// array( "name" => "Nerd Comics", "path" => "nerd-comics" ),
);

function get_suspended_belief_studios_projects(){
	$works = array(
		array( "name" => "Indiginauts","path" => "indiginauts" ),
		array( "name" => "The 3","path" => "the3","thumb" => "svg" ),
		// array( "name" => "Abriendo Puertas / Opening&nbsp;Doors","path" => "abriendo-puertas ),
		array( "name" => "Project Animore","path" => "project-animore" ),
		array( "name" => "Color Chameleon","path" => "color-chameleon" ),
	);
	return $works;
}
function get_museyon_projects(){
	$works = array(
		array( "name" => "Chronicles of Old New&nbsp;York","path" => "chronicles-of-old-new-york" ),
		array( "name" => "City Style","path" => "city-style" ),
		array( "name" => "Chronicles of Old Las&nbsp;Vegas","path" => "chronicles-of-old-las-vegas" ),
		array( "name" => "Chronicles of Old&nbsp;Boston","path" => "chronicles-of-old-boston" ),
		array( "name" => "Chronicles of Old&nbsp;Paris","path" => "chronicles-of-old-paris" ),
		array( "name" => "Chronicles of Old&nbsp;London", "path" => "chronicles-of-old-london" ),
		array( "name" => "Art + Paris","path" => "art-and-paris" ),
		array( "name" => "Chronicles of Old&nbsp;Rome","path" => "chronicles-of-old-rome" ),
	);
	return $works;
}

function get_pokemon_projects(){
	$works = array(
		array( "name" => "The Rise of Darkrai","path" => "darkrai" ),
		array( "name" => "Arceus and the Jewel of&nbsp;Life","path" => "arceus" ),
		array( "name" => "Pok&eacute;mon: Toys'R'Us Feature Shop", "path" => "feature-shop" ),
		array( "name" => "Pok&eacute;mon: Logos", "path" => "pokemon-logos" ),
		array( "name" => "Pok&eacute;mon: 10th Anniversary","path" => "10th-anniversary" ),
		array( "name" => "Pok&eacute;mon: Mystery Dungeon", "path" => "mystery-dungeon" ),
		array( "name" => "Battle Revolution", "path" => "battle-revolution" ),
		array( "name" => "Pocket Pokedex", "path" => "pocket-pokedex" ),
		array( "name" => "Pok&eacute;mon Toy&nbsp;Fair", "path" => "toy-fair" ),
		array( "name" => "Pok&eacute;mon: Diamond & Pearl Launch", "path" => "dp-launch" ),
		array( "name" => "Licensing Show", "path" => "licensing-show" ),
	);
	return $works;
}

//order of the projects

// $projects = array(
// 	array( "name" => "Tesla", "path" => "", "thumb" => "thumb.jpg" ),
// 	array( "name" => "Palin comics", "path" => "", "thumb" => "thumb.jpg" ),
// 	array( "name" => "GIF Drawings","path" => "", "thumb" => "thumb.jpg" ),
// 	array( "name" => "GIFS", "path" => "", "thumb" => "thumb.jpg" )
// );

// $portraits = array(
// 	array( "name" => "Walter White", "path" => "walter-white", "thumb" => "thumb.jpg" ),
// 	array( "name" => "Palin comics", "path" => "", "thumb" => "thumb.jpg" ),
// 	array( "name" => "GIF Drawings", "path" => "", "thumb" => "thumb.jpg" ),
// 	array( "name" => "GIFS", "path" => "", "thumb" => "thumb.jpg" )
// );

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

#COMPANY

//  #MUSEYON GUIDES
// ===============================

if ( $title == "Museyon Guides" ) {

	$path="img/museyon-guides";
	$template="company";
	$logo="svg";
	$meta_description="I worked for a travel/history book company laying out their books.";
	$description = '
		Museyon Guides, a small publishing startup in New York City, self&#8209;described as "smart guide books for travel junkies, culture-vultures, movie lovers and history buffs," needed someone to design and layout their books. Their books focused on the art, film and music of cultural hotspots around the globe.
		</p><p>
		I joined up just as they were concepting a new book focused on <a href="chronicles-of-old-new-york">New York</a> history. That book went to be one of their top sellers so I was asked to go into full-time Chronicles mode. In the end, I helped  with seven books. In addition to other side books, I helped with various collateral—banner ads, brochures and other marketing materials.
	';

	$sidebar = "
		<p><a href='http://www.museyon.com' target='_blank'>museyon.com</a></p>
	";

} // end MUSEYON GUIDES


//  #POKEMON
// ===============================

if ( $title == "The Pok&eacute;mon Company" ) {

	$path="img/pokemon";
	$template="company";
	$logo="svg";
	$description = '
		I worked at Pok&eacute;mon from 2015-2010. It was a great experience and a lot of fun. As part of a small in-house creative team, we produced many things including strategy guides, mini game and movie sites, localized logos, and marketing materials.
	';

	$sidebar = "
		<p><a href='http://www.pokemon.com' target='_blank'>pokemon.com</a></p>
	";

} //end Pokémon

//  #SUSPENDED-BELIEF-STUDIOS
// ===============================

if ( $title == "Suspended Belief Studios" ) {

	$path="img/suspended-belief-studios";

	$description = 'Me and my friend Jeremy Klar started this company together. Originally intended to just make games, we started taking on some web development as well. Originally began in Brooklyn, we moved out to San Francisco to be closer to the gaming scene. Our company released two games and went on hiatus shortly after that.'
	;

	$template="company";
	$logo="svg";

	$sidebar = "
		<p>Design studio.</p>
		<p><a href='pages/sb-studios1/' target='_blank' >suspendedbeliefgames.com</a>
	";

	$img_info = array(
	);

} //end SUSPENDED BELIEF STUDIOS


// #STORYMAPS
// ========================

if ( $title == "StoryMaps" ) {

	$path="img/storymaps";

	$description = "
		A programmer I knew, <a href=\"https://github.com/seanh\">Sean Hammond</a>, was making software for a Ph.D. study that would assist children in the process of story creation. He called it StoryMaps. Essentially, it would break down the elements of traditional fairy tales into building blocks which children could use to invent new stories. They can create stories that contain their own original ideas while being structurally complete and well-formed.
		</p><p>
		I wanted to make the artwork stylistically generic so that it wouldn't narrow your imagination. Looking at tarot cards and comics for inspiration, I sought to break each event down to it's core action. The main characters would all be represented by simple stick-like figures with no faces. Each image was accentuated with one color.
		</p><p>
		<div class='caption list-spacing-fix'>
		<ul>Additional reading:
			<li><a href='http://www.era.lib.ed.ac.uk/handle/1842/5294' target='_blank'>Sean's Ph.D. thesis</a></li>
		<ul>
		</div>

		";

	$sidebar = "
		<p>Comic-like, hand-drawn illustrations</p>
		<p><a href='http://seanh.github.io/storymaps'>StoryMaps Github page</a>
	";

	$tools=array(
		array("skill"=>"Photoshop", "percent"=>40),
		// array("skill"=>"Illustrator", "percent"=>10),
		array("skill"=>"Hand&nbsp;drawn&nbsp;illustrations", "percent"=>60),
	);

	$img_info = array(
	    array("file" => "01.jpg", "alt" => "Home / Split Up"),
	    array("file" => "02.jpg", "alt" => "Warning / Warning Ignored"),
	    array("file" => "03.jpg", "alt" => "Spying / Villainy"),
	    array("file" => "04.jpg", "alt" => "Wants / Finds Out"),
	    array("file" => "05.jpg", "alt" => "Test / Magic Helper")
	);

} //end Storymaps


// #idibon
// ========================

if ( $title == "idibon" ) {

	$path="img/idibon";

	$description = "Lumbersexual humblebrag asymmetrical, post-ironic kickstarter four loko kale chips bicycle rights venmo. Bushwick narwhal pickled selvage lo-fi, chartreuse celiac direct trade cliche pabst. XOXO taxidermy fingerstache brunch authentic, street art you probably haven't heard of them salvia.";

	$sidebar = "
	";

	$tools=array(
		array("skill"=>"Photoshop", "percent"=>40),
		array("skill"=>"Hand&nbsp;drawn&nbsp;illustrations", "percent"=>60),
	);

	$img_info = array(
	    // array("file" => "01.jpg", "alt" => "Home / Split Up"),
	);

} //end Storymaps


// #INDIGINAUTS
// ========================

if ( $title == "Indiginauts" ) {

	$path="img/indiginauts";
	$company = "Suspended Belief Studios";

	$description = "
		This idea was the whole reason we started Suspended Belief Games. Based on an illustration I did for a group show in New York, the Indiginauts were space explorers in the vein of Star Fleet. They were peace-loving creatures that explored the stars. Were they decended from humans? Maybe. They loved nothing more than to explore, learn and record for others to&nbsp;see.
		$p_break
		Well, that was the original idea. Now they are wise-cracking repairmen. We developed the game as a simplified <span class='tooltip underline' title='Point and Touch?'>point-and-click</span> geared toward mobile devices. The main goal was to take everything we learned from classic point-and-clicks, like <em>Monkey Island</em>, and streamline and simplify. Top it off with an engaging story, developed characters and fun artwork.
		";

	$sidebar = "
		<p>iOS & Web Point 'n' Click Adventure</p>
		<p><a href='suspended-belief-studios'>Suspended Belief Studios</a><p>
		<p>Game Design: Ray Yuen, Jeremy Klar</p>
		<p>Art: Ray Yuen, Sun Park</p>
		<p>Developer: Dubit
	";

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

if ( $title == "100 Principles of Game Design" ) {

	$path="img/100-principles-of-game-design";

	$description = "
		Because of a scheduling problem, I was was asked to do the illustrations for a game design book. “Game design you say? This is my area of expertise!” The turnaround was tight, under a month for about 30 spot illustrations. The schedule wasn't the best, but I really wanted to do game illustrations. Exchanging sketches back and forth with the author, we decided that we could have a cast of  characters that could be reused which would greatly speed up the work, as well as establish a visual&nbsp;language.
		</p><p>
		After a month of my regular schedule at work and then spending my time at night creating the illustrations, I was stretched thin. In the end however, I was quite proud of the work and I took another step in mastering a pure vector art&nbsp;style.
		";

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>45),
		array("skill"=>"Hand&nbsp;drawn&nbsp;illustrations", "percent"=>35),
		array("skill"=>"Photoshop", "percent"=>20),
	);

	$sidebar = "
		<p>Published by Pearson</p>
		<p>
		Written by <a href='https://twitter.com/subversified'>Wendy Despain</a><br>
		December 2012<br>
		240 pages
		</p>
		<p><a href='https://www.amazon.com/100-Principles-Game-Design-DESPAIN/dp/0321902491/ref=sr_1_1?ie=UTF8&qid=1482367099&sr=8-1&keywords=100+principles+of+game+design' target='_blank'>Buy a copy</a></p>
	";

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

	$path="img/project-animore";
	$company = "Suspended Belief Studios";

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

	$sidebar = "
		<p>iOS Runner</p>
		<p><a href='suspended-belief-studios'>Suspended Belief Studios</a><p>
		<p>Game Concept: Ray Yuen, Jeremy Klar</p>
		<p>Art: Ray Yuen, Sun Park
	";

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

	$path="img/malado-baldwin-indexhibit";

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

	$sidebar = "
		<p>Portfolio Website</p>
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

if ( $title == "Malado Baldwin" ) {

	$path="img/malado-baldwin";

	$description = "
		My friend Malado was growing out of her Indexhibit site and needed <em>more</em>. Responsiveness was the main thing she asked for, but not in those exact words since we didn’t know what that was at the time. I believe what she said was “These pictures look fine on the computer but too small on my phone.” When you're schmoozing it up at the gallery, you want to be able to show someone your painting on the fly while they are consuming free wine and cheese. There are sales to be made!
		</p><p>
		Since we're good friends, she always lets me try out the new things I learn on her site so out with the Indexhibit and in with Wordpress!
		</p><p>
		Epilogue: Malado really likes Wordpress, but finds it overwhelming sometimes. Artists are very picky about how their work is shown so she needed complete freedom. She is generally happy with the site but she finds that she doesn’t have the time to maintain it anymore. Recently, I’ve been thinking about building her a super simple site with my newfound PHP, jQuery, media query and SASSSSSS skills...to be continued...?
	";

	$sidebar = '
		<p>Portfolio Website</p>
		<p><a href="http://www.maladobaldwin.com" target="_blank">maladobaldwin.com</a>';

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

if ( $title == "Sarah Walko" ) {

	$path="img/sarah-walko";

	$description = "
		My first experience building a site using Wordpress. I met artist Sarah Walko through my good artist friend Malado Baldwin. She expressed that she needed a site that she could update on her own and that she had experience with Wordpress through work. So I went about helping her figure out the best way to get this going for&nbsp;her.
		</p><p>
		After figuring out all the nessesary information on her hosting, the actual Wordpress install really was about 5 minutes (this is something they boast)! We worked together on learning about a fresh WP install and soon was figuring out best practices for theme management, plugins and navigation. PRETTY COOL. So cool that <a href='malado-baldwin-wordpress'>Malado </a> wanted a site just like Sarah’s!
	";

	$sidebar = '
		<p>Portfolio Website</p>
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

	$path="img/scavenger-hunt";

	$description = 'SAN FRANCISCO, California — I submitted a t-shirt design to a Threadless contest. The challenge: make a fun tee for the <a href="http://www.chicagochildrensmuseum.org">Chicago Children\'s Museum</a>. The winner would get a ticket out to Chicago and like $1,000 in Threadless store credit or something. I did a bunch of research about the museum and found my imagination running wild with the activities you could do there (and mildly jealous that I wasn\'t a kid in Chicago!). I thought it would be wonderful to have a shirt that represented all the neat things kids could do at the&nbsp;museum.
		</p><p>
		My first idea was to perhaps to do a "Family Circus" style map showing a kid walking around the museum. I never did figure out the best way to represent three levels without a lot of weird perspective glitches. This is what lead me to the scavenger hunt idea. T-shirt real estate wise, it was more forgiving and allowed me more freedom with the  space on the shirt.
		</p>
		<a href="img/scavenger-hunt/ref/familycircus-hq.jpg" data-lightbox="familycircus" data-title="Family Circus map"><img src="img/scavenger-hunt/ref/familycircus.jpg" class="scale-with-grid2 add-bottom"></a>
		<p>It did not win the grand prize, however the museum still wanted to use the design and according to the representative at Threadless, it is now being sold at the museum gift shop.';

	$sidebar = '
		<p>T-shirt design for Threadless.com</p>
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

	$path="img/the3";
	$company = "Suspended Belief Studios";

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
		<p>iOS Trivia Game</p>
		<p><a href="suspended-belief-studios">Suspended Belief Studios</a><p>
		<p>Game Design: Ray Yuen, Jeremy Klar</p>
		<p>Art & Design: Ray Yuen</p>
		<p>Developer: Smartwave Studios
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

	$path="img/edgeware";

	$description = 'These are vector graphics proposed for a device that would help  Coast Guard patrols decide on the best course of action or even rules of engagement. They would input the conditions and the device would narrow down your options. I am not sure that this device was actually ever created but that’s the world of lucrative government contracts fer&nbsp;ya.';

	$sidebar = "<p>Vector Illustrations</p>";

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

	$path="img/egg-baby";

	$description = 'A Brooklyn-based apparel company needed some illustrations for some of their clothing. Their work is targeted at infants, small boys and girls.';

	$sidebar = '
	<p>Tee designs</p>
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

	$path="img/color-chameleon";
	$company = "Suspended Belief Studios";

	$description = "Color Chameleon was one of the first ideas we tried to bring to life. We thought it would be fun to run from a zookeeper who was chasing after you. The thing you needed to do was match the color of the objects that were in your path so you could camoflague and gain distance on your pursuers.
		$p_break
		We went through a few iterations in a 2-D perspective but we ultimately scrapped it because we couldn't figure out how to program it on our own. We ulitimately decided to put our money into our original idea, Indiginauts, and hire developers to help with that. We put this on the shelf.
		$p_break
		After the success of <em>Jet Pack Joyride</em> and <em>Temple Run</em>, my business partner Jeremy once again brought up the idea of doing this game. He made the chameleon bipedal and changed the idea so that he was running through a forest picking up bugs. He needed to change to the color of the bugs to pick them up. We had another artist at this point so we made up a bunch of artwork, but once again, the game wasn't how we hoped so we put it back on the shelf.
	";

	$sidebar = "
		<p>iOS runner</p>
		<p><a href='suspended-belief-studios'>Suspended Belief Studios</a></p>
		<p>Game Design: Jeremy Klar, Ray Yuen</p>
		<p>Art by Ray&nbsp;Yuen, Sun&nbsp;Park</p>
	";

	$tools = array(
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

	$path="img/art-and-paris";
	$company = "Museyon";

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
	$url = "http://www.museyon.com/shop/art-paris-impressionists";

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

	$path="img/chronicles-of-old-london";
	$company = "Museyon";

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
	$url = "http://www.museyon.com/shop/chronicles-of-old-london";

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

	$path="img/chronicles-of-old-paris";
	$company = "Museyon";

	$description = '
		<strong>Exploring the Historic City of Light</strong>. Paris. The city of love. This place has a very special place in my heart because this is was my first trip with my s.o. other than each other\'s cities (long distance!).</p><p>Where the Vegas book was rife with land grabbing deals, the American frontier, casinos and big personalities—the Paris book was about food, steadfastness, art and music. There\'s a story about the city being starved during a siege and them resorting to eating zoo animals instead of surrendering. Oh and the top restaurants fought over who got which animal. How amazing is that?
		</p>
	';

	$author="John&nbsp;Baxter";
	$pages = 288;
	$date = "May 2011";
	$url = "http://www.museyon.com/shop/chronicles-of-old-paris";

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

	$path="img/city-style";
	$company = "Museyon";

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
	$url = "http://www.museyon.com/shop/city-style";

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

	$path="img/chronicles-of-old-rome";
	$company = "Museyon";

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
		array("skill"=>"Google&nbsp;Maps&nbsp;/&nbsp;Openmaps", "percent"=>20),
		array("skill"=>"Photoshop", "percent"=>5),
		array("skill"=>"Indesign", "percent"=>5),
	);

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

	$path="img/chronicles-of-old-new-york";
	$company = "Museyon";

	$description = '
		<strong>Explore 400 years of Manhattan history</strong>. <em>Chronicles of Old New York</em> was the first book I worked on with Museyon Guides. The first half of the book details stories in and around New York City\'s history. The second half of the book featured walking tours which would highlight eight areas and provide references to the first half of the book. The historic content was pretty awesome. Gun duels, old taverns in the city (that George Washington went to!), rich capitalists that built the city...it was nice to know more about the city I lived in.
		</p><p>
		This book was to be an off-shoot book (up till this point, Museyon had been making a series of books called <a href="http://www.museyon.com/shop/art-travel-europe">Art+</a> and <a href="http://www.museyon.com/shop/film-travel-asia-oceania-africa">Film+</a>). We decided that we wanted to have a different look, but still keep the looks aligned. We worked together to establish some base rules and some standard layouts and with the skeleton of the book created, we went about populating the pages.
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
   		array("file" => "cover.jpg", "alt" => ""),
   		array("file" => "04.jpg", "alt" => ""),
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

	$path="img/chronicles-of-old-boston";
	$company = "Museyon";

	$description = '<strong>Exploring New England’s Historic Capital</strong>. No one can deny Boston’s historical signifigance in America’s history. Being able to read the stories of our forefathers and a broken mollasses tank that kills woman and children alike in the same book. Amazing. ';

	$author="Charles&nbsp;Bahne";
	$pages = 288;
	$date = "April 2012";
	$url="http://www.museyon.com/shop/chronicles-of-old-boston";

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

	$path="img/chronicles-of-old-las-vegas";
	$company = "Museyon";

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
	$url = "http://www.museyon.com/shop/chronicles-of-old-las-vegas";

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

	$path="img/abriendo-puertas";
	//update screenshots and description

	$description = '<em>Abriendo Puertas / Opening Doors</em> is a non-profit dedicated to decreasing the drop-out rate of Latino kids by instilling good behaviors at home. They believe the answer starts at home so their primary focus is on educating their parents. AP/OD holds training sessions where they teach parents different things they could do with their kids to better engage them and acclimate them to a learning environment.
		</p><p>
		AP/OD needed an informational site where parents and educators could come to find out more about the organization, where trainings would be, and a place where educators could access teaching materials. After getting approval on the overall look of the site, we built the site based on the Skeleton framework. After a few rounds of going back and forth, we streamlined the content of the site with PHP. They now have a beautiful site that looks great on all&nbsp;devices.
		';

	$sidebar = "
		<p>Informational Responsive Website for a non-profit</p>
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

	$path="img/monkey-mo";

	$tools=array(
		array("skill"=>"Photoshop", "percent"=>55),
		array("skill"=>"Hand&#8209;drawn&nbsp;illustrations", "percent"=>30),
		array("skill"=>"Indesign", "percent"=>10),
		array("skill"=>"Illustrator", "percent"=>5),
	);

	$description = '
		Teaming up again with author Lin Fong O\'Neil, we worked together to create another children\'s book. Lin wanted to make another book about another animal in the Chinese zodiac and when she asked me what I wanted to do, I responded with "Monkey!" Monkeys are rad&nbsp;obviously.
		</p><p>
		The story follows the adventures of a little boy\'s adventure to the zoo and finding a new best friend. I put a lot of detail into this book and made it somewhat interactive. I hid animals in various spots so as to give children an activity to do after they&nbsp;finish.
		</p>

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

	$sidebar = "
		<p>Children's Book<br>Published 2010</p>
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

	$path="img/darkrai";
	$company = "Pokemon";

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

	$sidebar = "
		<p>February 2008</p>
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

	$path="img/arceus";
	$company = "Pokemon";

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>80),
		array("skill"=>"Photoshop", "percent"=>20),
	);

	$description="Coming soon.";

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

	$path="img/10th-anniversary";
	$company = "Pokemon";

	$description = '
	 	The celebrations began with a "Journey Across America" Mall Tour where we distributed exclusive Pok&eacute;mon and held game tournaments. Winners were invited to the national tournament. It all lead up to the big event at Bryant Park, where the National Game Tournament was held and all aspects of the Pok&eacute;mon products and brands were represented.
	';

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>70),
		array("skill"=>"Photoshop", "percent"=>20),
		array("skill"=>"Indesign", "percent"=>10),
	);

	$sidebar = "<p>Bryant Park</p>";

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

	$path="img/feature-shop";
	$company = "Pokemon";

	$description="Coming soon.";

	$sidebar = "<p>Toys'R'Us Times Square</p>";

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

	$path="img/toy-fair";
	$company = "Pokemon";

	$description="
		The Pok&eacute;mon Booth at Toy Fair 2006, in addition to new opportunities in product development, was an opportunity to promote our 10th Anniversary and our U.S. mall tour.
		$p_break
		While Pok&eacute;mon still had a presence in the US, recognition had waned over time. Our strategy that year was to have every event support our 10th Anniversary and build up to our <a href='10th-anniversary'>video game tournament</a> in New York City's Bryant Park.
		$p_break
		Working with a production company to produce the fixtures and graphics, we assembled the booth the day before the show started. The booth featured the <em>four pillars</em> of the Pok&eacute;mon brand—the video game, television show, movies and trading card game. We commissioned a special statue to be built which featured the new Pok&eacute;mon from the that year's movie release. The back-wall was composed of a time-line of key events and memorabilia in Pok&eacute;mon history leading up to the present.
	";

	$sidebar = "
		<p>Trade Show Booth</p>
		Jacob Javits Center, NYC<br>
		2006
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

	$path="img/nerd-comics";

	$description;

	$sidebar = "";

	$img_info = array(
		array("file" => "darwin.gif", "alt" => ""),
		array("file" => "inspiration.gif", "alt" => ""),
		array("file" => "marvels.gif", "alt" => ""),
	);

} //end NERD COMICS


//  #MYSTERY#DUNGEON
// ===============================

if ( $title == "Pok&eacute;mon: Mystery Dungeon" ) {

	$path="img/mystery-dungeon";
	$company = "Pokemon";

	$description="
		Logo creation. Strategy Guide creation. Mini-website development.
	";

	$sidebar = "
		<p>Strategy Guide</p>
		<p>Mini-website Creation</p>
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


//  #POCKET #POKEDEX
// ===============================

if ( $title == "Pocket Pok&eacute;dex" ) {

	$path="img/pocket-pokedex";
	$company = "Pokemon";

	$description="
	<span class='intro'>Challenge: To create a pocket reference guide to aid in collecting and training Pok&eacute;mon to compliment the Diamond and Pearl releases on the portable game system Nintendo DS.</span>
	$p_break
	To support the release of each core Pok&eacute;mon game, we published a strategy guide consisting of a walkthrough and Pok&eacute;dex. Every new game adds 100+ new Pok&eacute;mon so this book basically gets bigger every year. In order to successfully design this book, we identified what you would be doing and when you would be doing&nbsp;it.
	$p_break
	<img src='$path/pocket-pokedex-functions.png' alt='Pocket Pok&eacute;dex Functions' />
	$p_break
	Everything you do in the game is centered around two things—collecting and battling. At a minimum, we needed to cover these two activities or this book would just <span class='tooltip underline' title='For context, smartphones were in their infancy at this point.'>not be useful</span>. “Gotta catch ‘em all” is the mantra and consisting of <span class='tooltip underline' title='there are now 802!'>493 Pok&eacute;mon</span> (at the time), it’s not an easy undertaking. For battling, it was useful to know Pok&eacute;mon type weaknesses and move guides.
	$p_break
	In terms of the layout, we sorted by Pok&eacute;dex number. It’s not the most intuitive sorting for new comers, but we felt it made more sense. It matches up with the in-game Pok&eacute;dex and naturally reflects generations and evolution lines. We put the most important information on the outside margin for when you are skimming the pages. The National Pok&eacute;dex number doubled as a page number. Nice big picture of the Pok&eacute;mon. The Pok&eacute;mon type. We had some extra space so we included some extra information like size and egg groups. In the appendix, we included some more reference material and&nbsp;trivia.
	";

	$sidebar = "
		<p>Book Design</p>
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

	$path="img/battle-revolution";
	$company = "Pokemon";

	$description="Coming soon.";

	$sidebar = "
	<p>Strategy Guides</p>
	<p>Mini-website</p>
	";

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

	$path="img/dp-launch";
	$company = "Pokemon";

	$description="Coming soon.";

	$sidebar = "
		<p>Event at Nintendo World in New York</p>
		<p>Rockefeller Center</p>
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

	$path="img/licensing-show";
	$company = "Pokemon";

	$description="Coming soon.";

	$sidebar = "
		<p>Trade Show Booth</p>
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

	$path="img/pokemon-logos";
	$company = "Pokemon";

	$description="Coming soon.";

	$sidebar = "
		<p>Logo examples</p>
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


//  #WIRED
// ===============================

if ( $title == "Wired" ) {

	$path="img/wired";

	$description="Illustration for a Norton \"advertorial\" in Wired Magazine. Norton wanted to show that in this digital life of ours, our precious, precious memories are all stored on our personal devices that can be lost or broken. For this adventuring family, the best solution is to use Norton services to back up your data.";
	$content="
	</p>
		<img src='img/wired/family.jpg' class='scale-with-grid photo-outline'>
		<img src='img/wired/rejected-01.jpg' class='scale-with-grid'>
	<p>
	The first idea–dad taking an underwater portrait–was rejected. I actually didn't get a reason, but so I hustled with the other option of the family in a road-trip scenario.
	</p>
	";

	$sidebar="<p>Wired Magazine<br>2014</p>";
	// add date of magazine

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>70),
		array("skill"=>"Hand&#8209;drawn&nbsp;illustrations", "percent"=>20),
		array("skill"=>"Photoshop", "percent"=>10),
	);

	$img_info = array(
		// add photo of magazine cover
		array("file" => "wired-car.jpg", "alt" => ""),
		array("file" => "three.jpg", "alt" => ""),
	);

} //end WIRED

//  #Holiday Card 2014
// ===============================

if ( $title == "Holiday Card 2014" ) {

	$path="img/holiday-2014";

	$description="
	For our holiday greeting, I decided to do a riff on the <em>exquisite corpse</em> game with fun costumes. Each figure is composed of a head, a body and feet. These parts are randomly selected on page load and with each refresh, it will randomly select another&nbsp;set.
	";

	$sidebar="
	<p>Holiday 2014</p>
	<p><a href='http://www.rayuen.com/holiday2014' target='_blank'>link to site</a></p>
	";

	$tools=array(
		array("skill"=>"Illustrator", "percent"=>65),
		array("skill"=>"HTML/CSS", "percent"=>10),
		array("skill"=>"JS", "percent"=>5),
		array("skill"=>"PHP", "percent"=>20),
	);

	$img_info = array(
		array("file" => "01.jpg", "alt" => "Yeti + Reintaur"),
		array("file" => "02.jpg", "alt" => "Grinch + Animal Princess"),
		array("file" => "03.jpg", "alt" => "New Years + Santa"),
		array("file" => "04.jpg", "alt" => "Grinch + Elf Centaur"),
	);

} //end Holiday 2014

//  #Adelle's site
// ===============================

if ( $title == "Adelle Marcero" ) {

	$path="img/adelle-marcero";

	$description="
	I helped my friend Adelle Marcero with her portfolio site. I built it using simple PHP and CSS and linked to her holiday Etsy&nbsp;shop.
	";

	$sidebar="
	<p>Adelle Marcero Portfolio Site</p>
	<p><a href='http://adelle.ink' target='_blank'>adelle.ink</a></p>
	";

	$tools=array(
		array("skill"=>"HTML/CSS", "percent"=>40),
		array("skill"=>"PHP", "percent"=>60),
	);

	$img_info = array(
		array("file" => "homepage.jpg", "alt" => "Adelle Marcero home page"),
		array("file" => "jimi.jpg", "alt" => "Jimi Hendrix by Adelle Marcero"),
		array("file" => "beasties.jpg", "alt" => "The Beastie Boys by Adelle Marcero"),
		array("file" => "about.jpg", "alt" => "Adelle Marcero about page"),
		array("file" => "footer.jpg", "alt" => "the footer"),
	);

} //adelle's site

//  #LESCONCIERGES
// ===============================

if ( $title == "LesConcierges" ) {

	$template="art";
	$path="img/lesconcierges";

	$description="I was comissioned to do some illustrations to show an example of how LesConcierges' new web interface and app would work with their existing service.";

	$sidebar="
		<p>Illustrations</p>
		<p>July 2014</p>
	";

	$tools=array(
		array("skill"=>"<span class='nowrap'>Hand-drawn illustrations</span>", "percent"=>60),
		array("skill"=>"Photoshop", "percent"=>40),
	);

	$img_info = array(
		array("file" => "01.jpg", "alt" => "The hotel owner tells his assistant that he needs to schedule a flight to Shanghai"),
		array("file" => "02.jpg", "alt" => "The assistant talks to someone at LesConcierges with her boss's request"),
		array("file" => "03.jpg", "alt" => "The LesConcierges concierge does research and talks to other concierges"),
		array("file" => "04.jpg", "alt" => "The hotel owner receives a message while he is busy and responds with a quick text back"),
		array("file" => "05.jpg", "alt" => "He looks at the hotel options that are sent his way"),
		array("file" => "06.jpg", "alt" => "On the flight over, someone he meets makes a food recommedation"),
		array("file" => "07.jpg", "alt" => "On the flight, the hotel owner tells LesConcierges that he needs some reservations"),
		array("file" => "08.jpg", "alt" => "During a meeting, the hotel owner receives a message that his reservation is confirmed"),
		array("file" => "09.jpg", "alt" => "A survey is given afterwards to ensure quality"),
	);

	$other="
		<div class='eight columns alpha add-bottom'>
			<a href='img/lesconcierges/sketch2.jpg' data-lightbox='les'><img class='scale-with-grid' src='img/lesconcierges/sketch2.jpg'></a>
		</div>
		<div class='eight columns omega add-bottom'>
			<a href='img/lesconcierges/sketch3.jpg' data-lightbox='les'><img class='scale-with-grid' src='img/lesconcierges/sketch3.jpg'></a>
		</div>
		<div class='eight columns alpha add-bottom'>
			<a href='img/lesconcierges/sketch4.jpg' data-lightbox='les'><img class='scale-with-grid' src='img/lesconcierges/sketch4.jpg'></a>
		</div>
		<div class='eight columns omega add-bottom'>
			<a href='img/lesconcierges/sketch5.jpg' data-lightbox='les'><img class='scale-with-grid' src='img/lesconcierges/sketch5.jpg'></a>
		</div>
	";

} //end LESCONCIERGES

//  #Inktober 2016
// ===============================

if ( $title == "#Inktober2016" ) {

	// $template="art";
	$path="img/inktober-2016";

	// $additional_img_column_count=1;
	$thumbnail_size="variable-height";

	$description="
		All throughout October, I drew a picture everyday and posted it to Instagram and Twitter with the hashtag <a href='https://twitter.com/search?q=%23InkTober'>#Inktober</a>. Inktober is a drawing exercise occurs in October that my friend got me into. A bunch of people were posting images all over the world so it seems like fun!
		</p>
	";

	$sidebar="
		<p>Illustration exercise</p>
		<p>October 2016</p>
	";

	$tools=array(
		array("skill"=>"<span class='nowrap'>Markers</span>", "percent"=>70),
		array("skill"=>"<span class='nowrap'>Pencils</span>", "percent"=>30),
		// array("skill"=>"Photoshop", "percent"=>40),
	);

	$img_info = array(
		array("file" => "hero.jpg", "alt" => "NEKO ATSUME DOODLE"),
	);

} //end Inktober 2016



// ================================================
//  #NEXTLESSON
// ================================================

function get_nextlesson_projects(){
	$works = array(
		array( "name" => "NextLesson Lesson Covers", "path" => "nextlesson-covers" ),
		// array( "name" => "NextLesson Marketing", "path" => "nextlesson-marketing" ),
		array( "name" => "NextLesson InterestID","path" => "nextlesson-interestid" ),
		array( "name" => "NextLesson Glossary Terms", "path" => "nextlesson-glossary" ),
		array( "name" => "NextLesson Characters", "path" => "nextlesson-characters" ),
		// array( "name" => "Browsing Experience","path" => "nextlesson-search-browse" ),
		// array( "name" => "Graphics Library", "path" => "nextlesson-library" ),
		// array( "name" => "Profile Avatars", "path" => "nextlesson-avatars" ),
		// array( "name" => "Interactive Performance Tasks", "path" => "nextlesson-interative-pt" ),
		// array( "name" => "Printed Lesson", "path" => "nextlesson-pdf" ),
	);
	return $works;
}

if ( $title == "NextLesson" ) {

	$path="img/nextlesson";

	$description = "
	NextLesson is a resource for teachers to find projects and lessons that engage students in real world problem solving basing lessons around familiar (and current) topics—like <a href='https://www.nextlesson.org/resources/q-pokemon' target='_blank'>Pok&eacute;mon Go</a>, <a href='https://www.nextlesson.org/resources/q-minecraft' target='_blank'>Minecraft</a>, <a href='https://www.nextlesson.org/resources/q-taylor%20swift' target='_blank'>Taylor Swift</a> or <a href='https://www.nextlesson.org/resources/interest-basketball-baseball-winter+sports-xtreme+sports-racket+sports-olympics-football-hockey' target='_blank'>sports</a></a>.
	$p_break
	As <em>Head of Design</em> at NextLesson, I oversaw all artwork and website design needs. I was originally hired to assist Marketing and to create all the lesson covers on the site, but quickly branched out as I saw many things that needed design help. I made student interest icons for the InterestID tool, helped design the Interactive tool, and built a graphics library that freelancers could use to speed up artwork creation.
	";

	$template="company";
	$logo="svg";

	$sidebar = "
	<p>Engaging K-12 Educational Materials</p>
	<p>2014-2016</p>
	<p><a href='http://nextlesson.org' target='_blank'>nextlesson.org</a></p>";

	$img_info = array(
	);

} //end NEXTLESSON



//  #NEXTLESSON #COVERS
// ===============================

if ( $title == "NextLesson Lesson Covers" ) {

	// $template = "ui";
	$path = "img/nextlesson-covers";
	$company = "NextLesson";
	// $movie = "$path/interactive-pt-overview.mp4";

	$description = "
		<span class='intro'>Challenge: Standardize lesson and project covers to be more modern, grade&#8209;aligned, and &ldquo;Pinterest&#8209;friendly&rdquo; to convey and sell our content.
		</span>
		$p_break
		My first big task at NextLesson! These original covers were made with no template by the authors so results varied wildly. Logo placement was inconsistent, random typefaces and graphic elements were pulled from various Internet sources, and all seemed similar regardless of age group.
		";
	$content="
		<img src='$path/original-covers.jpg' srcset='$path/original-covers-hd.jpg 2x' alt='Original Covers'>
		<div class='caption'>Lesson Covers 2014</div>
		<p>
		Before I could start churning out covers, I needed to make sure a consistent design was in place. The first step, to facilitate faster browsing and scanning, was to make sure the same information always appeared in the same spot. We identified three signifiers that would always be visible and clear—subject, type of learning material and grade level.
		</p>
		<p>
			I wondered how strict we should be in regards to 1 color and 1 typeface. In regards to teachers and students: is ordered uniformity too boring for them? And certainly a design for 1st Grade Counting would not look the same as a 10th Grade lesson dealing with inequality. After getting some feedback from teachers and looking at what teachers were sharing on Pinterest, we opted to make the covers less on the uniform side.
		</p>
		<img src='$path/round-1.jpg' srcset='$path/round-1-hd.jpg 2x' alt='Ideas'>
		<div class='caption'>Initial designs for information placement</div>
		<img src='$path/round-2.jpg' srcset='$path/round-2-hd.jpg 2x' alt='Ideas'>
		<div class='caption'>First Iteration of the Covers</div>
		<img src='$path/final.jpg' srcset='$path/final-hd.jpg 2x' alt='Ideas'>
		<div class='caption'>Cover and card design</div>
		<p>
			Planned in tandem with a redesigned search/browse page, we set about standardizing the displayed information as well as taking the first steps to form a distinctive look. After the logo and title, space still seemed a bit restricted, so we settled on separating the grade and subject and putting it on the <em>card</em>.
		</p>
		<p>
			For freelancers, I developed a checklist of things to consider when making a cover as well as a template to start. I developed a graphics library for them to use to facilitate faster turnaround time and ensure consistency of style.
		</p>
		<p>
			Jump to 2 years and 2,034 covers later. Most of the back-covers are complete and a system is in place for new covers. Here are some of my favorite covers below.
		</p>
	";

	$sidebar = "
		<p>Design System and Illustrated Covers</p>
		<p>2014-2016</p>
		<p>2,000+ covers</p>
	";
	$tools = array(
		array("skill"=>"Photoshop", "percent"=>45),
		array("skill"=>"Illustrator", "percent"=>30),
		array("skill"=>"Spreadsheets", "percent"=>15),
		array("skill"=>"Indesign", "percent"=>10),
	);

	$img_info = array(
		// array("file" => "01.jpg", "alt" => "Cover View"),
		array("file" => "Living-&-Playing-by-the-Golden-Rule.jpg", "alt" => "Living & Playing by the Golden Rule"),
		array("file" => "crowd-control.jpg", "alt" => "Crowd Control"),
		array("file" => "golden-gaming.jpg", "alt" => "Golden Gaming"),
		array("file" => "bundles-of-fun.jpg", "alt" => "Bundles of Fun"),
	);
	$hero_img="$path/hero-img.jpg";
	// $auto_slideshow = "additional_imgs";

} //end NEXTLESSON COVER


//  #NEXTLESSON #INTERESTID
// ===============================

if ( $title == "NextLesson InterestID" ) {

	// $template = "ui";
	$company = "NextLesson";
	$path = "img/nextlesson-interestid";
	// $movie = "$path/interestid-voting.mp4";

	$description = "
	InterestID is a tool for students to inform teachers what topics interest them. Students “thumbs up” or “thumbs down” various topics which are featured in NextLesson lessons.</p><p>
	That information is available to teachers sorted by most popular categories. A click on the category connects the teacher to lessons where that topic is covered. Simple grade and subject filters allow the teacher to find the right lesson for their class if there are numerous results.</p><p>
	As of January 2017, students have rated over 1,605,000+ interests. The more students rate and suggest new interests, the better we can tailor our learning materials and be more real-time and relevant.
	</p>
	<img src='$path/sample-screen.jpg' alt='InterestID' class='scale-with-grid'>
	<p class='caption'>The teacher experience(left) vs. the student experience(right)</p>
	";

	$sidebar = "
		<p>Student Interest Tool</p>
		<p>2015</p>
		<p><a href='https://www.nextlesson.org/interestid/' target='_blank'>link to project</a></p>
	";

	$tools = array(
		array("skill"=>"Illustrator", "percent"=>50),
		array("skill"=>"Mockups&nbsp;(PHP+JS)", "percent"=>25),
		array("skill"=>"Sketches", "percent"=>15),
		array("skill"=>"Spreadsheets", "percent"=>10),
	);
	// $hero_img = "$path/hero-image.jpeg";
	// $hero_img_mobile = "$path/hero-image.jpeg";

	$img_info = array(
		array("file" => "cover.jpg", "alt" => "Screenshot of the tool"),
		// array("file" => "interest-selection.jpg", "alt" => "InterestID liking and disliking"),
	);
	$thumbnail_size = "small";

	$content = "
	<h3>Rating Interests</h3>
	<video width='320' height='240' controls>
		<source src='$path/interestid-voting.mp4' type='video/mp4'>
		Your browser does not support the video tag.
	</video>
	<p class='caption'>A student voting.</p>
	<p>
		To rate interests, you just press the <em>thumbs up</em> to 'like' or the <em>thumbs down</em> to 'dislike'. The first screen gives you interests that have not been rated in a random order, so you see new interests everytime you go on. After an interest is rated, it will disappear so your <em>unrated</em> view is a little less cluttered.
	</p>

	<h3>Filtering by Category and by Liked</h3>
	<video width='320' height='240' controls>
		<source src='$path/interestid-filters.mp4' type='video/mp4'>
		Your browser does not support the video tag.
	</video>
	<p class='caption'>A student voting.</p>
	<p>
		We put filters in so you can browse by category or by interests you've already liked or disliked.
	</p>
	";

} //end NEXTLESSON INTERESTID




//  #NEXTLESSON #GLOSSARY
// ===============================

if ( $title == "NextLesson Glossary Terms" ) {

	$path = "img/nextlesson-glossary";
	$company = "NextLesson";
	// $movie = "$path/interactive-pt-overview.mp4";

	$description = "After releasing the initial version of the Interactive lessons, it was up to our Curriculum team to fill it with learning materials! As they were working on that, we worked on the next iteration. To support our glossary terms, we thought having would be impactful, as well helpful for our younger and users.
		$p_break
		We had a variety of things to illustrate-including careers, mathematic principles, as well as terms specific to industries. Luckily, I had a whole library of image assets that I'd slowly created over time, making this task a little less time-intensive. However, it did require a bit more thought over how to illustrate abstract those terms, like &ldquo;viable&rdquo; and &ldquo;hypothesize.&rdquo;
	";
	$content = "
		<img src='$path/02.png' alt='' class='thumb-outline scale-with-grid' />
		<p>The glossary terms as they appear in the sidebar.</p>
		<video class='thumb-outline' width='800' height='600' controls>
			<source src='img/nextlesson-glossary/glossary.mp4' type='video/mp4'>
			Your browser does not support the video tag.
		</video>
		<p>Video: Two ways to access the glossary definitions.
	";

	$sidebar = "
		<p>Vector Illustrations</p>
		<p>2016</p>
	";

	$tools = array(
		array("skill"=>"Illustrator", "percent"=>70),
		array("skill"=>"Sketches", "percent"=>30),
	);

	$img_info = array(
		array("file"=>"glos/Agility.png", "alt"=>"Agility"),
		array("file"=>"glos/Agility.png", "alt"=>"Agility"),
		array("file"=>"glos/Baker.png", "alt"=>"Baker"),
		array("file"=>"glos/Budget.png", "alt"=>"Budget"),
		array("file"=>"glos/Cost_of_Production.png", "alt"=>"Cost of Production"),
		array("file"=>"glos/Counting_Principle.png", "alt"=>"Counting Principle"),
		array("file"=>"glos/Coupons.png", "alt"=>"Coupons"),
		array("file"=>"glos/Critically_Endangered.png", "alt"=>"Critically Endangered"),
		array("file"=>"glos/Critique.png", "alt"=>"Critique"),
		array("file"=>"glos/Entrepreneur.png", "alt"=>"Entrepreneur"),
		array("file"=>"glos/List_Price.png", "alt"=>"List Price"),
		array("file"=>"glos/Marketing.png", "alt"=>"Marketing"),
		array("file"=>"glos/Median.png", "alt"=>"Median"),
		array("file"=>"glos/Personal_Shopper.png", "alt"=>"Personal Shopper"),
		array("file"=>"glos/Pricing_Structure.png", "alt"=>"Pricing Structure"),
		array("file"=>"glos/Production_Costs.png", "alt"=>"Production Costs"),
		// array("file"=>"glos/Program.png", "alt"=>"Program"),
		array("file"=>"glos/Revenue.png", "alt"=>"Revenue"),
		array("file"=>"glos/Royalties.png", "alt"=>"Royalties"),
		array("file"=>"glos/Stage_Manager.png", "alt"=>"Stage Manager"),
		array("file"=>"glos/Telephoto_Lens.png", "alt"=>"Telephoto Lens"),
		array("file"=>"glos/Viable.png", "alt"=>"Viable"),
		array("file"=>"glos/Video_Wall.png	", "alt"=>"Video Wall"),
	);
	shuffle($img_info);

	$thumbnail_size="large";

	$other = "";

} //end NEXTLESSON GLOSSARY




//  #NEXTLESSON #MARKETING
// ===============================

if ( $title == "NextLesson Marketing" ) {

	$path = "img/nextlesson-marketing";
	$company = "NextLesson";

	$description = "Coming Soon.";

	$sidebar = "
		<p>Marketing</p>
		<p>2014</p>
	";

	$tools = array(
		// array("skill"=>"Illustrator", "percent"=>80),
	);

	$img_info = array(
		array("file" => "01.jpg", "alt" => ""),
		array("file" => "02.jpg", "alt" => ""),
		array("file" => "03.jpg", "alt" => ""),
		array("file" => "04.jpg", "alt" => ""),
	);

} //end NEXTLESSON MARKETING




//  #NEXTLESSON #SEARCH BROWSE
// ===============================

if ( $title == "NextLesson Search and Browse Page" ) {

	$template = "ui";
	$company = "NextLesson";
	$path = "img/nextlesson-search-browse";
	$movie = "$path/search-browse-bar-1.mp4";

	$description = "I was comissioned to do some illustrations to show an example of how LesConcierges' new web interface and app would work with their existing service.";

	//TODO: update the sidebar information
	$sidebar = "
		<p>Illustrations</p>
		<p>July 2014</p>
	";

	$tools = array(
		array("skill"=>"<span class='nowrap'>Hand-drawn illustrations</span>", "percent"=>60),
		array("skill"=>"Photoshop", "percent"=>40),
	);

	$img_info = array(
		// array("file" => "puzzle.jpg", "alt" => "The hotel owner tells his assistant that he needs to schedule a flight to Shanghai"),
	);

	$other = "
	<video width='320' height='240' controls>
		<source src='$movie' type='video/mp4'>
		Your browser does not support the video tag.
	</video>
	";

} //end NEXTLESSON SEARCH BROWSE




//  #NEXTLESSON #SEARCH BROWSE
// ===============================

if ( $title == "NextLesson Characters" ) {

	$path = "img/nextlesson-characters";
	$company = "NextLesson";

	$description = "At NextLesson, in order to unify our covers and illustrations, developed a system of posable characters that could be used in a variety of situations. I developed a set of rules that which specified proportions and color choices depending on grade. Using these rules and an in-house assets library, contractors were able to make covers that consistently conveyed our visual standards as well as speeding up turn-around time.
	";

	$sidebar = "
		<p>Character Designs</p>
	";

	// include_once "functions.php";
	// $avatar_html = "";
	// $avatars = get_files("$path/avatars");
	// shuffle($avatars);
	// $class="";
	// $count = 1;
	// foreach ($avatars as $key => $avatar) {
	// 	if ( $count == 1 ) {
	// 		$class = "alpha";
	// 	} elseif ( $count == 4 ) {
	// 		$class = "omega";
	// 		$count = 0;
	// 	}
	// 	$avatar_html.="<div class='four columns add-bottom $class'><img src='$path/avatars/$avatar' alt='NextLesson Avatar $key'></div>";
	// 	$class = "";
	// 	$count++;
	// }
	$thumbnail_size = "small";

	$content = "
		<figure class='add-bottom'>
			<img src='$path/templates/body-rules.png' alt='Body rules'>
			<figcaption>Body Rules</figcaption>
		</figure>
		<figure class='add-bottom'>
			<img src='$path/templates/expressions.png' alt='Facial Expression rules'>
			<figcaption>Facial Expressions</figcaption>
		</figure>
		<figure class='add-bottom'>
			<img src='$path/templates/portrait-rules.png' alt='Head Proportion rules'>
			<figcaption>Different Head Proportions</figcaption>
		</figure>
	";
	$tools = array(
		array("skill"=>"<span class='nowrap'>Hand-drawn illustrations</span>", "percent"=>60),
		array("skill"=>"Photoshop", "percent"=>40),
	);
	$img_info = array(
		array("file" =>"01.jpg", "alt" => ""),
		array( "file"=>"slider/Classroom.jpg", "alt"=>""),
		array( "file"=>"slider/Grandma.png", "alt"=>""),
		array( "file"=>"slider/Kid_reading_the_temperature.png", "alt"=>""),
		array( "file"=>"slider/Laptop_kid.png", "alt"=>""),
		array( "file"=>"slider/Sports.png", "alt"=>""),
		array( "file"=>"slider/Girls_in_profile.png", "alt"=>""),
	);

} //end NEXTLESSON CHARACTERS


