<?php 

//order of the portfolio pieces

$works = array(
	array( "name" => "The 3", 																"path" => "the3", 																"thumb" => "thumb.svg" ), //done
	array( "name" => "Indiginauts", 													"path" => "indiginauts", 													"thumb" => "thumb.jpg" ), //done
	array( "name" => "100 Principles of Game&nbsp;Design", 		"path" => "100-principles-of-game-design", 				"thumb" => "thumb.jpg" ), //done
	array( "name" => "Storymaps", 														"path" => "storymaps",														"thumb" => "thumb.jpg" ), //done
	array( "name" => "Monkey Mo, Monkey&nbsp;Go!",		 				"path" => "monkey-mo",														"thumb" => "thumb.jpg" ),
	array( "name" => "Scavenger Hunt", 												"path" => "scavenger-hunt",												"thumb" => "thumb.jpg" ), //done
	array( "name" => "Chronicles of Old&nbsp;London", 				"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Sarah Walko Wordpress site",						"path" => "sarah-walko-wordpress",								"thumb" => "thumb.jpg" ), //done
	array( "name" => "Chronicles of Old&nbsp;Rome",			 			"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Animore", 															"path" => "animore", 															"thumb" => "thumb.jpg" ), //done
	array( "name" => "Edgeware", 															"path" => "edgeware",															"thumb" => "thumb.jpg" ), //done
	array( "name" => "Art+Paris",															"path" => "temp",																	"thumb" => "thumb.jpg" ), 
	array( "name" => "idibon", 																"path" => "idibon",																"thumb" => "thumb.jpg" ),
	array( "name" => "Chronicles of Old New&nbsp;York", 			"path" => "temp",																	"thumb" => "thumb.jpg" ), 
	array( "name" => "Color Chameleon", 											"path" => "color-chameleon",											"thumb" => "thumb.jpg" ),
	array( "name" => "Malado Baldwin", 												"path" => "malado-baldwin-wordpress",							"thumb" => "thumb.jpg" ), //done
	array( "name" => "Egg Baby", 															"path" => "egg-baby",															"thumb" => "thumb.jpg" ), //more images
	array( "name" => "Chronicles of Old New&nbsp;Boston", 		"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Chronicles of Old New&nbsp;Las Vegas", 	"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "City Style", 														"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Arceus: Jewel of&nbsp;Life",						"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Mystery Dungeon 2", 										"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Battle Revolution", 										"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Pocket Pokedex", 												"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Pokemon 15th Anniv", 										"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Malado Baldwin Indexhibit site",				"path" => "malado-baldwin-indexhibit",						"thumb" => "thumb.jpg" ), //done
	array( "name" => "Toy Fair", 															"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Featured Shops", 												"path" => "temp",																	"thumb" => "thumb.jpg" )
);


//order of the projects

$projects = array(
	array( "name" => "Tesla", 																"path" => "", 																"thumb" => "thumb.jpg" ),
	array( "name" => "Palin comics", 													"path" => "", 													"thumb" => "thumb.jpg" ),
	array( "name" => "GIF Drawings", 													"path" => "", 													"thumb" => "thumb.jpg" ),
	array( "name" => "GIFS", 													"path" => "", 													"thumb" => "thumb.jpg" )
);

// fills in the div with links to the thumbnail and title

function workthumb($num) {
	global $works;
	if ( $works[$num] == NULL) {
		return;
	}
	echo '<a href="'.$works[$num]["path"].'.php"><img src="img/'.$works[$num]["path"].'/'.$works[$num]["thumb"].'" class="scale-with-grid"></a>';
	echo "<p>".$works[$num]["name"]."</p>";
} 


// STORYMAPS
// ========================

if ( $title == "Storymaps" ) {

	$path="img/storymaps/";

	$description = "I supplied the illustrations for a PhD study by Sean Hammond. Essentially, it is a tool that kids can use to enhance their storywriting skills. In Sean’s research, he broke down the various elements of a fairy tale and I illustrated said elements as cards. The kids would then pick and choose the story elements they want to include and the software would help them plan out the story.";

	$sidebar = "Riker Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, veniam, esse aperiam minima minus atque commodi porro unde dignissimos est!";

	$img_info = array(
    array("file" => "01.jpg", "alt" => "This is your alt text"),
    array("file" => "02.jpg", "alt" => "This is your alt text"),
    array("file" => "03.jpg", "alt" => "This is your alt text"),
    array("file" => "04.jpg", "alt" => "This is your alt text"),
    array("file" => "05.jpg", "alt" => "This is some more alt text")
	);

} //end Storymaps	


// INDIGINAUTS
// ========================

if ( $title == "Indiginauts" ) {

	$path="img/indiginauts/";

	$description = "Our first big game Indiginauts Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, non hic cumque accusamus cupiditate modi maiores reprehenderit sint officiis dignissimos.";

	$sidebar = 'Creative direction for simplifed adventure game targeted at tablet devices.</p>
					<p><a href="http://www.suspendedbeliefgames.com">Suspended Belief Studios</a><br>
					<a href="http://54.215.232.227/" target="_blank">Demo Link</a>';

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


// 100 PRINCIPLES OF GAME DESIGN
// ===============================

if ( $title == "100 Principles of Game&nbsp;Design" ) {

	$path="img/100-principles-of-game-design/";

	$description = "Working with Wendy Despain Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, non hic cumque accusamus cupiditate modi maiores reprehenderit sint officiis dignissimos.";

	$sidebar = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima ipsa facilis dicta harum amet consequuntur cumque doloribus numquam id laudantium.</p>
				<a href="http://www.pearsonhighered.com/educator/product/100-Principles-of-Game-Design/9780321902498.page"><img src="'.$path.'book-cover-thumb.jpg" class="scale-with-grid2 add-bottom"></a>';

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


// ANIMORE
// ===============================

if ( $title == "Project Animore" ) {

	$path="img/animore/";

	$description = "Unrealized video game concept Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, non hic cumque accusamus cupiditate modi maiores reprehenderit sint officiis dignissimos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, vero qui vitae ducimus quia veniam perferendis repellat ea enim facere? Nulla dignissimos reiciendis tempore repellat dolorum ullam at quae? Repudiandae, provident voluptate iste sit deleniti reiciendis ipsum qui perspiciatis corporis!";

	$sidebar = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima ipsa facilis dicta harum amet consequuntur cumque doloribus numquam id laudantium.</p>';

	$img_info = array(
    array("file" => "01.jpg", "alt" => "farm screen"),
    array("file" => "03.jpg", "alt" => "mixing chamber"),
    array("file" => "04.jpg", "alt" => "house detail"),
    array("file" => "05.jpg", "alt" => "overworld map"),
    array("file" => "02.jpg", "alt" => "new animals in the store"),
    array("file" => "10.jpg", "alt" => "front page of the store"),
    array("file" => "07.jpg", "alt" => "bear house"),
    array("file" => "08.jpg", "alt" => "dog house"),
    array("file" => "09.jpg", "alt" => "cat house")
	);

} //end animore


// MALADO INDEXHIBIT SITE
// ===============================

if ( $title == "Malado Baldwin Indexhibit site" ) {

	$path="img/malado-baldwin-indexhibit/";

	$description = "Unrealized video game concept Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, non hic cumque accusamus cupiditate modi maiores reprehenderit sint officiis dignissimos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, vero qui vitae ducimus quia veniam perferendis repellat ea enim facere? Nulla dignissimos reiciendis tempore repellat dolorum ullam at quae? Repudiandae, provident voluptate iste sit deleniti reiciendis ipsum qui perspiciatis corporis!";

	$sidebar = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima ipsa facilis dicta harum amet consequuntur cumque doloribus numquam id laudantium.</p>';

	$img_info = array(
    array("file" => "01.jpg", "alt" => "farm screen"),
    array("file" => "02.jpg", "alt" => "mixing chamber"),
    array("file" => "03.jpg", "alt" => "house detail"),
    array("file" => "04.jpg", "alt" => "overworld map")
	);	

} //end malado-baldwin-indexhibit	


// MALADO WORDPRESS SITE
// ===============================

if ( $title == "Malado Baldwin Wordpress site" ) {

	$path="img/malado-baldwin-wordpress/";

	$description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, non hic cumque accusamus cupiditate modi maiores reprehenderit sint officiis dignissimos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, vero qui vitae ducimus quia veniam perferendis repellat ea enim facere? Nulla dignissimos reiciendis tempore repellat dolorum ullam at quae? Repudiandae, provident voluptate iste sit deleniti reiciendis ipsum qui perspiciatis corporis!";

	$sidebar = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima ipsa facilis dicta harum amet consequuntur cumque doloribus numquam id laudantium.</p>
		<p><a href="http://www.maladobaldwin.com/blog" target="_blank">link to site</a>';

	$img_info = array(
    array("file" => "01.jpg", "alt" => ""),
    array("file" => "02.jpg", "alt" => ""),
    array("file" => "03.jpg", "alt" => ""),
    array("file" => "04.jpg", "alt" => ""),
    array("file" => "05.jpg", "alt" => ""),
    array("file" => "06.jpg", "alt" => ""),
    array("file" => "07.jpg", "alt" => ""),
    array("file" => "08.jpg", "alt" => "")
	);	

} //end malado-baldwin-wordpress

// SARAH WALKO WORDPRESS
// ===============================

if ( $title == "Sarah Walko Wordpress site" ) {

	$path="img/sarah-walko-wordpress/";

	$description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, non hic cumque accusamus cupiditate modi maiores reprehenderit sint officiis dignissimos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, vero qui vitae ducimus quia veniam perferendis repellat ea enim facere? Nulla dignissimos reiciendis tempore repellat dolorum ullam at quae? Repudiandae, provident voluptate iste sit deleniti reiciendis ipsum qui perspiciatis corporis!";

	$sidebar = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima ipsa facilis dicta harum amet consequuntur cumque doloribus numquam id laudantium.</p>
		<p><a href="http://www.sarahwalko.com/blog" target="_blank">link to site</a>';

	$img_info = array(
    array("file" => "01.jpg", "alt" => ""),
    array("file" => "02.jpg", "alt" => ""),
    array("file" => "03.jpg", "alt" => "")
	);	

} //end sarah-walko-wordpress	

// SCAVENGER HUNT
// ===============================

if ( $title == "Scavenger Hunt" ) {

	$path="img/scavenger-hunt/";

	$description = 'In October 2013, I submitted a t-shirt design to a Threadless contest to make a t-shirt for the Chicago Children\'s Museum. I did a bunch of research about the museum found my imagination running wild with the things you could do there (and mildly jealous that I wasn\'t a kid in Chicago!). I thought it would be wonderful to have a shirt that represented all the neat things kids could do at the museum.</p>
		<p>My first idea was to perhaps to do a "Family Circus" style map showing a kid walking around the museum. I never did figure out the best way to represent three levels and at over time, I thought that if I had a set path, there should be a reason that for this. This is what lead me to the scavenger hunt idea. It\'s more open and allowed me to make better use of the space on the shirt.</p>
		<a href="img/scavenger-hunt/familycircus-hq.jpg" data-lightbox="familycircus" data-title="Family Circus map"><img src="img/scavenger-hunt/familycircus.jpg" class="scale-with-grid2 add-bottom"></a>
		<p>It did not win the grand prize, however the museum still wanted to use the design regardless and according to the representative at Threadless, it is now being sold at the museum gift shop. They were too cheap to send me a sample.';

	$sidebar = 'T-shirt design for Threadless</p>
				<p><a href="">link to museum<br>
				<a href="img/scavenger-hunt/01.jpg" data-lightbox="scav" data-title="T-shirt" alt="">T-shirt detail</a>
				<div class="none"><img src="img/scavenger-hunt/02.jpg" data-lightbox="scav" data-title="Art details" alt=""></div>';

	$img_info = array(
    array("file" => "01-thumb.jpg", "alt" => ""),
    array("file" => "02-thumb.jpg", "alt" => "")
	);	

} //end scavenger-hunt	


// THE 3
// ===============================

if ( $title == "The 3" ) {

	$path="img/the3/";

	$description = 'Our first foray into the iPhone games arena was a trivia game. &ldquo;The 3&rdquo; centered around the basic concept of multiple choice trivia with timely usage of powerups.
				</p>

				<p> 
					In our first iteration, you had to type out the answers, but that wasn\'t working out how we hoped and took way too long. It became more of a fast typing game. In our second iteration, we implemented multiple choice with 5 right and wrong answers and set the game time around 2 minutes. We liked this, but ultimately decided that it seemed like people were reading more than they should be, so we decided to cut down the questions and answers to 3, set the timer at one minute and consciously try to keep the wording for questions minimal if possible. We next implemented a system of power-ups and then for the next month went about procuring and writing good trivia questions.
				</p>
				<p>
					We released the game free in the App Store with in-app purchases for new categories as a way to generate revenue. It was also a chance for us to get to know first-hand how the App Store worked and seeing how a game would do with ads and without signifigant marketing dollars put behind it. Currently, it is still in stealth release because we still keep finding mistakes in the questions (FREAKIN\' google spreadsheet!) but we are hoping to squash all (most) mistakes!';

	$sidebar = 'A <a href="http://www.suspendedbeliefgames.com">Suspended Belief</a> Joint. <br>
					Platform: iPhone 4 and up. Playable on iPads. <br>
					Price: Free';

	$img_info = array(
    array("file" => "01.jpg", "alt" => ""),
    array("file" => "02.jpg", "alt" => ""),
    array("file" => "03.jpg", "alt" => ""),
    array("file" => "04.jpg", "alt" => "")
	);	

} //end The 3


// EDGEWARE
// ===============================

if ( $title == "Edgeware" ) {

	$path="img/edgeware/";

	$description = 'Our first foray into the iPhone games arena was a trivia game. &ldquo;The 3&rdquo; centered around the basic concept of multiple choice trivia with timely usage of powerups.
				</p>
				<p> 
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, dignissimos, sapiente omnis soluta est enim dolores iure id sequi aliquam maiores atque non voluptas perspiciatis reiciendis quae exercitationem laborum incidunt provident consequuntur. Nisi, libero, magnam, officia accusamus voluptatum animi distinctio voluptate doloremque enim nesciunt ducimus explicabo eveniet molestiae dolor minima odio est unde eius sapiente consectetur sit modi dignissimos. Incidunt, minima, voluptate pariatur suscipit placeat consequatur quas sunt sapiente quae ducimus provident eum tempora possimus aperiam exercitationem temporibus cum modi.';

	$sidebar = 'Lorem ipsum dolor sit amet.';

	$img_info = array(
    array("file" => "01.jpg", "alt" => ""),
    array("file" => "02.jpg", "alt" => ""),
    array("file" => "03.jpg", "alt" => ""),
    array("file" => "04.jpg", "alt" => ""),
    array("file" => "05.jpg", "alt" => ""),
    array("file" => "06.jpg", "alt" => "")
	);	

} //end The 3


// EGG BABY
// ===============================

if ( $title == "Egg Baby" ) {

	$path="img/egg-baby/";

	$description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ex fuga laboriosam dolorum dolores fugiat nostrum esse suscipit tenetur corporis mollitia voluptatem. Quod, voluptatum, autem asperiores numquam ab facere vero alias placeat vel dicta voluptatem ipsum omnis est soluta maiores.';

	$sidebar = 'Lorem ipsum dolor sit amet.';

	$img_info = array(
    array("file" => "01.jpg", "alt" => "")
	);	

} //end The 3


// COLOR CHAMELEON
// ===============================

if ( $title == "Color Chameleon" ) {

	$path="img/color-chameleon/";

	$description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ex fuga laboriosam dolorum dolores fugiat nostrum esse suscipit tenetur corporis mollitia voluptatem. Quod, voluptatum, autem asperiores numquam ab facere vero alias placeat vel dicta voluptatem ipsum omnis est soluta maiores.';

	$sidebar = 'Lorem ipsum dolor sit amet.';

	$img_info = array(
    array("file" => "01.jpg", "alt" => "")
	);	

} //end The 3
