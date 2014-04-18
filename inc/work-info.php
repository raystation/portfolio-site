<?php 

//order of the portfolio pieces

$works = array(
	array( "name" => "The 3", 																"path" => "the3", 																"thumb" => "thumb.svg" ),
	array( "name" => "Indiginauts", 													"path" => "indiginauts", 													"thumb" => "thumb.jpg" ),
	array( "name" => "100 Principles of Game&nbsp;Design", 		"path" => "100-principles-of-game-design", 				"thumb" => "thumb.jpg" ),
	array( "name" => "Storymaps", 														"path" => "storymaps",														"thumb" => "thumb.jpg" ),
	array( "name" => "Monkey Mo, Monkey Go!",					 				"path" => "monkey-mo",														"thumb" => "thumb.jpg" ),
	array( "name" => "Chronicles of Old&nbsp;London", 				"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Sarah Walko", 													"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Chronicles of Old New&nbsp;Rome", 			"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Scavenger Hunt", 												"path" => "scavenger-hunt",												"thumb" => "thumb.jpg" ),
	array( "name" => "Animore", 															"path" => "animore", 															"thumb" => "thumb.jpg" ),
	array( "name" => "Edgeware", 															"path" => "edgeware",															"thumb" => "thumb.jpg" ),
	array( "name" => "idibon", 																"path" => "idibon",																"thumb" => "thumb.jpg" ),
	array( "name" => "Chronicles of Old New&nbsp;York", 			"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Color Chameleon", 											"path" => "color-chameleon",											"thumb" => "thumb.jpg" ),
	array( "name" => "Malado Baldwin", 												"path" => "malado-baldwin", 											"thumb" => "thumb.jpg" ),
	array( "name" => "Egg Baby", 															"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Chronicles of Old New&nbsp;Boston", 		"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Chronicles of Old New&nbsp;Las Vegas", 	"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "City Style", 														"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Arceus: Jewel of Life", 								"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Mystery Dungeon 2", 										"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Battle Revolution", 										"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Pocket Pokedex", 												"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Pokemon 15th Anniv", 										"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Toy Fair", 															"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Featured Shops", 												"path" => "temp",																	"thumb" => "thumb.jpg" )
);

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


// 100 Principles of Game Design
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


// Animore
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

} //end 100-principles-of-game-design	


