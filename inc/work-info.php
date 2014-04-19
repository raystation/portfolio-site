<?php 

//order of the portfolio pieces

$works = array(
	array( "name" => "The 3", 																"path" => "the3", 																"thumb" => "thumb.svg" ), //done
	array( "name" => "Indiginauts", 													"path" => "indiginauts", 													"thumb" => "thumb.jpg" ), //copy
	array( "name" => "100 Principles of Game&nbsp;Design", 		"path" => "100-principles-of-game-design", 				"thumb" => "thumb.jpg" ), //copy
	array( "name" => "Storymaps", 														"path" => "storymaps",														"thumb" => "thumb.jpg" ), //copy
	array( "name" => "Monkey Mo, Monkey&nbsp;Go!",		 				"path" => "monkey-mo",														"thumb" => "thumb.jpg" ), 
	array( "name" => "Scavenger Hunt", 												"path" => "scavenger-hunt",												"thumb" => "thumb.jpg" ), //done
	array( "name" => "Chronicles of Old&nbsp;London", 				"path" => "chronicles-of-old-london",							"thumb" => "thumb.jpg" ), //copy
	array( "name" => "Sarah Walko Wordpress site",						"path" => "sarah-walko-wordpress",								"thumb" => "thumb.jpg" ), //copy
	array( "name" => "Chronicles of Old&nbsp;Rome",			 			"path" => "chronicles-of-old-rome",								"thumb" => "thumb.jpg" ),
	array( "name" => "Animore", 															"path" => "animore", 															"thumb" => "thumb.jpg" ), //done
	array( "name" => "Edgeware", 															"path" => "edgeware",															"thumb" => "thumb.jpg" ), //copy
	array( "name" => "Art+Paris",															"path" => "art-and-paris",												"thumb" => "thumb.jpg" ), 
	array( "name" => "idibon", 																"path" => "idibon",																"thumb" => "thumb.jpg" ),
	array( "name" => "Chronicles of Old New&nbsp;York", 			"path" => "chronicles-of-old-new-york",						"thumb" => "thumb.jpg" ), 
	array( "name" => "Color Chameleon", 											"path" => "color-chameleon",											"thumb" => "thumb.jpg" ),
	array( "name" => "Malado Baldwin Wordpress", 												"path" => "malado-baldwin-wordpress",		"thumb" => "thumb.jpg" ), //done
	array( "name" => "Egg Baby", 															"path" => "egg-baby",															"thumb" => "thumb.jpg" ), //more images
	array( "name" => "Chronicles of Old New&nbsp;Boston", 		"path" => "chronicles-of-old-boston",							"thumb" => "thumb.jpg" ),
	array( "name" => "Chronicles of Old New&nbsp;Las Vegas", 	"path" => "chronicles-of-old-las-vegas",					"thumb" => "thumb.jpg" ),
	array( "name" => "City Style", 														"path" => "city-style",														"thumb" => "thumb.jpg" ),
	//array( "name" => "Arceus: Jewel of&nbsp;Life",						"path" => "temp",																	"thumb" => "thumb.jpg" ),
	//array( "name" => "Mystery Dungeon 2", 										"path" => "temp",																	"thumb" => "thumb.jpg" ),
	//array( "name" => "Battle Revolution", 										"path" => "temp",																	"thumb" => "thumb.jpg" ),
	//array( "name" => "Pocket Pokedex", 												"path" => "temp",																	"thumb" => "thumb.jpg" ),
	//array( "name" => "Pokemon 15th Anniv", 										"path" => "temp",																	"thumb" => "thumb.jpg" ),
	array( "name" => "Malado Baldwin Indexhibit",							"path" => "malado-baldwin-indexhibit",						"thumb" => "thumb.jpg" ), //copy
	//array( "name" => "Toy Fair", 															"path" => "temp",																	"thumb" => "thumb.jpg" ),
	//array( "name" => "Featured Shops", 												"path" => "temp",																	"thumb" => "thumb.jpg" )
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

// MUSEYON SIDEBAR  ========================

function museyon_sidebar() {
	global $author;
	global $pages;
	global $date;
	global $url;
	return "Written by " .$author."<br>
			Edited by Heather Corcoran and Akira Chiba <br>
			Published by <a href='http://www.museyon.com'>Museyon Guides</a></p>
			<p>Trade Paperback<br>"
			. $pages . " pages<br>
			5 &frac14;\" &#215; 8\"<br>
			Printed ". $date . "</p><p>
			<a href=" .$url." target='_blank'>Buy a copy</a>";
}

// STORYMAPS
// ========================

if ( $title == "Storymaps" ) {

	$path="img/storymaps/";

	$description = "A programmer I knew, <a href=\"https://github.com/seanh\">Sean Hammond</a>, was coding some software for a Ph.D. study that would assist children in the process of story creation. He called it StoryMaps. Essentially, StoryMaps breaks down the elements of traditional fairy tales into building blocks which children could use to invent new stories. They can create stories that contain their own original ideas while being structurally complete and well-formed.</p>

		<p>A big challenge with this project was making the artwork generic enough so that the kids would still get to inject their own imagination into it. Some are more difficult than others, but I was up for the task.</p>

		<p>Looking at tarot cards for inspiration, I sought to break each event down to it\'s core action. The main characters would all be represented by simple stick-like figures with no faces. Each image was accentuated with one color.</p>
		
		<p>
		<div class=\"caption\">Additional reading: <br />
		</div>
		
		";

	$sidebar = '<a href="http://seanh.github.io/storymaps/">Storymaps software</a><br>
	<a href="https://github.com/seanh">Sean\'s Github page</a>';

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

} //end edgeware


// EGG BABY
// ===============================

if ( $title == "Egg Baby" ) {

	$path="img/egg-baby/";

	$description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ex fuga laboriosam dolorum dolores fugiat nostrum esse suscipit tenetur corporis mollitia voluptatem. Quod, voluptatum, autem asperiores numquam ab facere vero alias placeat vel dicta voluptatem ipsum omnis est soluta maiores.';

	$sidebar = 'Lorem ipsum dolor sit amet.';

	$img_info = array(
    array("file" => "01.jpg", "alt" => "")
	);	

} //end egg-baby


// COLOR CHAMELEON
// ===============================

if ( $title == "Color Chameleon" ) {

	$path="img/color-chameleon/";

	$description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ex fuga laboriosam dolorum dolores fugiat nostrum esse suscipit tenetur corporis mollitia voluptatem. Quod, voluptatum, autem asperiores numquam ab facere vero alias placeat vel dicta voluptatem ipsum omnis est soluta maiores.';

	$sidebar = 'Lorem ipsum dolor sit amet.';

	$img_info = array(
    array("file" => "01.jpg", "alt" => "")
	);	

} //end color-chameleon


// ART + PARIS
// ===============================

if ( $title == "Art + Paris" ) {

	$path="img/art-and-paris/";

	$description = 'Impressionists Post-Impressionists: The Ultimate Guide to Artists, Paintings and Places in Paris and Normandy. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ex fuga laboriosam dolorum dolores fugiat nostrum esse suscipit tenetur corporis mollitia voluptatem. Quod, voluptatum, autem asperiores numquam ab facere vero alias placeat vel dicta voluptatem ipsum omnis est soluta maiores.';

	$author = "Museyon Guides";
	$pages = 328;
	$date = "July 2012";
	$url = "http://www.museyon.com/shop/art-paris-impressionists/";

	$sidebar = museyon_sidebar();

	$img_info = array(
    array("file" => "cover.jpg", "alt" => ""),
    array("file" => "01.jpg", "alt" => ""),
    array("file" => "02.jpg", "alt" => ""),
    array("file" => "03.jpg", "alt" => ""),
    array("file" => "04.jpg", "alt" => ""),
    array("file" => "05.jpg", "alt" => ""),
    array("file" => "06.jpg", "alt" => "")
	);	

} //end art-and-paris


// CHRONICLES OF OLD LONDON
// ===============================

if ( $title == "Chronicles of Old&nbsp;London" ) {

	$path="img/chronicles-of-old-london/";

	$description = 'Exploring England’s Historic Capital. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ex fuga laboriosam dolorum dolores fugiat nostrum esse suscipit tenetur corporis mollitia voluptatem. Quod, voluptatum, autem asperiores numquam ab facere vero alias placeat vel dicta voluptatem ipsum omnis est soluta maiores.</p>
		<p><img src="img/chronicles-of-old-london/Parks-and-Rec-9-550x366.jpg" class="scale-with-grid" alt="" /> <br>
		<p><img src="img/chronicles-of-old-london/Parks&Recreation_s.jpg" class="scale-with-grid" alt="" />
		';

	$author="Kevin Jackson";
	$pages = 288;
	$date = "May 2012";
	$url = "http://www.museyon.com/shop/chronicles-of-old-london/";

	$sidebar = museyon_sidebar();

	$img_info = array(
    array("file" => "cover.jpg", "alt" => ""),
    array("file" => "01.jpg", "alt" => ""),
    array("file" => "toc.jpg", "alt" => ""),
    array("file" => "02.jpg", "alt" => ""),
    array("file" => "03.jpg", "alt" => ""),
    array("file" => "04.jpg", "alt" => ""),
    array("file" => "05.jpg", "alt" => ""),
    array("file" => "06.jpg", "alt" => ""),
    array("file" => "07.jpg", "alt" => ""),
	);	

} //end chronicles-of-old-london


// CITY STYLE
// ===============================

if ( $title == "City Style" ) {

	$path="img/city-style/";

	$description = 'A Field Guide to Global Fashion Capitals. The second book I worked on with Museyon, City Style was a completely one-off book on fashion. <a href="http://www.linkedin.com/in/thisisheatherc">Heather</a>, one of the editors, was a big nerd for art and fashion (she taught me about jean jackets).</p>
		
		<p>This was basically me and Heather\'s book, so we basically got to do most everything we wanted. With Heather manning the phones and email trying to get approved photos from fashion houses, I went about establishing a variant of the Museyon style for the book\'s skeleton. It was structured, but loose enough that it allowed each city to have it\'s own look and feel. We wanted the book to have a a magazine feel to them with bold type design with big photos that spoke for themselves. We may have gotten a little carried away in the beginning with many pages being full photos and the page count going up, but we course-corrected and got ourselves back to the target page count. </p>
		<p>Epilogue: This book really refined the working relationship that would serve us well in the coming year as we go into full <em>Chronicles</em> mode.
		';

	$author = "Museyon Guides";
	$pages = 272;
	$date = "October 2011";
	$url = "http://www.museyon.com/shop/city-style/";

	$sidebar = museyon_sidebar();

	$img_info = array(
    array("file" => "title.jpg", "alt" => ""),
    array("file" => "toc.jpg", "alt" => ""),
    array("file" => "forward.jpg", "alt" => ""),
    array("file" => "j1.jpg", "alt" => ""),
    array("file" => "j2.jpg", "alt" => ""),
    array("file" => "j3.jpg", "alt" => ""),
    array("file" => "ny.jpg", "alt" => ""),
    array("file" => "ny1.jpg", "alt" => ""),
    array("file" => "dir.jpg", "alt" => "")
	);	

} //end city-style


// CHRONICLES OF OLD ROME
// ===============================

if ( $title == "Chronicles of Old&nbsp;Rome" ) {

	$path="img/chronicles-of-old-rome/";

	$description = 'Exploring Italy\'s Eternal City. After my move to San Francisco, I didn\'t get to work on as many big projects with Museyon anymore. One thing I still do on occasion is work on their maps. Normally there is another person who makes their maps, but because they are an intensive endeavor, I was asked to help out. I had good success with it because I was more familiar with the page margins, the software and being able to make all the fonts consistently the same size.</p>
		<p>Some full size maps here: <br />
		Steps <br>
		Steps <br>
		Steps <br>
		Steps <br>
		Steps <br>
		Steps
		';

	$author = "Tamara Thiessen";
	$pages = 272;
	$date = "April 2013";
	$url = "http://www.museyon.com/shop/chronicles-of-old-rome";

	$sidebar = museyon_sidebar();

	$img_info = array(
   		array("file" => "cover.jpg", "alt" => "")
	);	

} //end chronicles-of-old-rome


// CHRONICLES OF OLD NEW YORK
// ===============================

if ( $title == "Chronicles of Old New&nbsp;York" ) {

	$path="img/chronicles-of-old-new-york/";

	$description = '<strong>Explore 400 years of Manhattan history</strong>. <em>Chronicles of Old New York</em> was the first book I worked on with Museyon Guides. The first half of the book details stories in and around New York City\'s history. The second half of the book featured walking tours which would highlight eight areas and provide references to the first half of the book. The historic content was pretty awesome. Gun duels, old taverns in the city (that George Washington went to!), rich capitalists that built the city...it was nice to know more about the city I lived in.</p>

		<p>This book was to be an off-shoot book (up till this point, Museyon had been making a series of books called <a href="http://www.museyon.com/shop/art-travel-europe/">Art+</a> and <a href="http://www.museyon.com/shop/film-travel-asia-oceania-africa/">Film+</a>). We decided that we wanted to have a different look, but still keep the looks aligned. We worked together to establish some base rules and some standard layouts and with the skeleton of the book created, we went about populating the pages. </p>

		<p>Since this was the first time we worked together, I had to make sure their production files were all up to snuff. The owner had a decent eye for design and some previous production experience with magazines, but the files were a copy-and-paste mess. I showed them how to automate the more menial tasks, like converting folders of images to CMYK, paragraph/character styles and indexing (because humans have better things to do!) They had me pretty involved in the design and photo selection process which I quite enjoyed. </p>

		<p>Epilogue: We worked really well together and this book actually became their best selling book which lead to them doing more in the <em>Chronicles</em> series (which meant more work for me! Yeah!). They eventually asked me to do more in the series, but that took some time. In the meantime, they asked me to layout a <a href="city-style.php">fashion book</a>.';
	
	$author = "James Roman";
	$pages = 260;
	$date = "June 2010";
	$url = "http://www.museyon.com/shop/chronicles-of-old-new-york";

	$sidebar = museyon_sidebar();

	$img_info = array(
   		array("file" => "cover.jpg", "alt" => "")
	);	

} //end chronicles-of-old-new-york


// CHRONICLES OF OLD BOSTON
// ===============================

if ( $title == "Chronicles of Old&nbsp;Boston" ) {

	$path="img/chronicles-of-old-boston/";

	$description = 'Exploring New England’s Historic Capital. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ex fuga laboriosam dolorum dolores fugiat nostrum esse suscipit tenetur corporis mollitia voluptatem. Quod, voluptatum, autem asperiores numquam ab facere vero alias placeat vel dicta voluptatem ipsum omnis est soluta maiores.';

	$author="Charles Bahne";
	$pages = 288;
	$date = "April 2012";
	$url="http://www.museyon.com/shop/chronicles-of-old-boston/";

	$sidebar = museyon_sidebar();

	$img_info = array(
		array("file" => "cover.jpg", "alt" => "")
	);	

} //end chronicles-of-old-boston


// ##CHRONICLES OF OLD LAS VEGAS
// ===============================

if ( $title == "Chronicles of Old Las&nbsp;Vegas" ) {

	$path="img/chronicles-of-old-las-vegas/";

	$description = '<strong>Exploring Sin City’s High-Stakes History</strong>. The third book I worked on with Museyon. With <a href="chronicles-of-old-new-york.php"><em>Chronicles of Old New York</em></a> selling very well, they decided to continue this series. Which city? A few ideas were tossed around, but I had a feeling it was always going to be Vegas, baby. Mafia dons, casinos, Elvis, Liberace, nuclear tests...don\'t pretend like you don\'t want to know about this sort of stuff!</p>

		<p>The look of this series was established, the only thing to do was to refine and respond to any sort of issues with New York\'s print run. I adjusted the margins slightly to adjust for the book\'s gutter. Picked a color palette based on the desert. Optimizied the photo sephia-process so that all photos would all look more similiar. Picked the best picture of Elvis we could.</p>

		<p>Epilogue: With the amazing cover, this is easily my favorite book in the series because the stories were so amazing and we had a lot of fun putting it all together.
	 ';

	$author="James Roman";
	$pages = 240;
	$date = "February 2012";
	$url = "http://www.museyon.com/shop/chronicles-of-old-las-vegas/";

	$sidebar = museyon_sidebar();

	$img_info = array(
    array("file" => "cover.jpg", "alt" => "")
	);	

} //end chronicles-of-old-las-vegas


