<?
$p_break = "</p><p>";

// TODO: include Markdown parser
require_once 'functions.php';

//converts title into lowercase and no spaces
function downcasespace($string) {
	$string = str_replace(" ", "", $string);
	$string = strtolower($string);
	return $string;
}
function markdown_exist($filename){
	if ( file_exists($filename) ) {
		$copy = markdown_convert( $filename );
		return $copy;
	} else {
		return NULL;
	}
}

switch ( $id ) {

	default:
		$company="Hiring Manager";
		$copy="
		<p class=\"add-top\">
			I have worked in the design field for over 8 years and have a solid traditional print background. I used to work at Pokemon, in a small in-house creative team consisting of 3 people. The experience that would most interest you was our work supporting the publishing department (primarily with strategy guides). We would usually have big a diverse range of design work centered around any major video-game or movie releases, so time and project management was essential. More recently, I've been working with an independent publisher designing and laying out their travel guides.
		</p>
		<p>
			I consider myself a very hard-working individual, willing to put in the extra time to see things finished. I have links below to my resume and some selected works. Thanks.
		</p>";
		break;

	case '523':
		$company="Room to Read";
		$jobTitle="Graphic Designer";
		$name="Hiring Manager";
		$email="hiring@roomtoread.org";
		$date="May 22, 2014";
		$originaljobposting="http://www.roomtoread.org/graphicdesigner";

		$copy="
		<p class=\"add-top\">
			With my experience working in print, web, and email, along with 8+ years in design and marketing, I believe I can be a strong candidate for the design position. Another reason I did not want to miss this opportunity is that I have a strong interest in moving into the non-profit sector to impact some positive change—I want to make the world a better place.
		</p>
		<p>
		I have worked in small design departments where we had to manage and create artwork for different sized projects, from <a href=\"darkrai\">movie launches</a> to <a href=\"chronicles-of-old-new-york\">300 page books</a> to large-scale tent graphics for big events. We supported all the internal departments as well as enforced the brand standards. Any project that required more than a 3 person team could handle required us to manage an outside vendor.
		</p>
		<p>
		I am highly proficent in the Adobe Creative Suite through working in print/web production. Programming is a bit of a hobby of mine—I am extremely comfortable with HTML/CSS and am actively learning other web technologies, like Javascript/jQuery, PHP and Ruby on Rails. I am also highly skilled in <a href=\"monkey-mo\">drawing</a>.
		</p>
		<p>
			Please let me know if I can provide any other sort of information or if we can set up a meeting. Please find my resume in PDF format below or an online version <a href=\"resume\">here</a>. Thank you!
		</p>";

		break;


case '090':
		$company="Williams-Sonoma, Inc.";
		$jobTitle="Graphic Designer";
		$name="Sandra Young";
		$email;
		$date="May 27, 2014";
		$originaljobposting="http://careers.williams-sonomainc.com/pottery-barn/job/San-Francisco-Graphic-Designer-Pottery-Barn-CA-94111/52943600/";

		$copy="
		<p class=\"add-top\">
			I am writing in regards to your designer position that was posted at the beginning of this month. I realize that this email may not be timely, but I hope I can still be considered for placement, or for a <a href=\"http://careers.williams-sonomainc.com/pottery-barn-teen/job/San-Francisco-Catalog-Production-Assistant-Pottery-Barn-Teen-CA-94111/59492600/\" target=\"_blank\">similiar position</a> in the future.
		</p>
		<p>
			I have over <a href=\"resume#history\">8+ years</a> working in design and marketing. I come from a print-production background, more recently delving into web design/production. At The Pok&eacute;mon Company, I worked as part of a small team of three, supporting the various departments with their various needs. We worked on things like toy packaging, video-game launches, strategy guide localization, mini-movie websites...just to name a few. We did this all while maintaining the brand standards passed on from Japan.
		</p>
		<p>
		I am <a href=\"resume#skills\">highly proficent</a> in the Adobe Creative Suite. Programming is a bit of a hobby of mine—I am extremely comfortable with HTML/CSS and am actively learning other web languages, like Javascript/jQuery, PHP and Ruby on Rails. I am also highly skilled in <a href=\"monkey-mo\">drawing</a>.
		</p>
		<p>
			Please let me know if I can provide any other sort of information or if we can set up a meeting. Please find my resume in PDF format below or an online version <a href=\"resume\">here</a>. Thank you!
		</p>";

		break;

case '431':
		$company="Twitch";
		$jobTitle="Brand Designer";
		$name;
		$logo="http://www-cdn.jtvnw.net/images/xarth/header_logo.png";
		$email;
		$date="May 29, 2014";
		$originaljobposting="http://www.jobscore.com/jobs2/twitch/brand-designer/cxOmWoG_Cr46YViGakhP3Q";

		$copy="
		<p class=\"add-top\">
			Hello! I've been hearing a lot about Twitch in the past few years and with my background in design and my passion for gaming, I think I could be a welcome addition to the team!
		</p>
		<p>
			When establishing branding, I always thought the best first step is to have someone who understands and likes the brand. Watching <em>League of Legend</em> and <em>GTA5</em> streams are one thing, but the <em>Twitch Plays Pokemon</em> phenomenon really changed the way I view your service and any opportunity to work for you guys couldn't be passed! After that, establishing a \"language\" that people can come to expect day after day is key.
		</p>
		<p>
			I have over <a href=\"resume#history\">8+ years</a> working in design and marketing. I come from a print-production background, more recently delving into web design/production. At Pok&eacute;mon, I worked as part of a small team of three, supporting the various departments with their needs. In addition to enforcing the brand standards and guidelines, we worked on a variety of projects including toy packaging, video-game launches, brand standard guides for licensees, strategy guide localization, in-store branding, mini-movie websites...just to name a few.
		</p>
		<p>
		I am <a href=\"resume#skills\">highly proficent</a> in the Adobe Creative Suite. Programming is a bit of a hobby of mine—I am extremely comfortable with HTML/CSS and am actively learning other web languages, like Javascript/jQuery, PHP and Ruby on Rails. I am also highly skilled in <a href=\"monkey-mo\">drawing</a>.
		</p>

		<div class='four columns add-bottom alpha'><a class='caption' href='darkrai'><img class='scale-with-grid' src='img/darkrai/thumb.jpg'>Pok&eacute;mon: Rise of Darkrai</a></div>

		<div class='four columns add-bottom' ><a class='caption' href='Indiginauts'><img class='scale-with-grid' src='img/indiginauts/thumb.jpg'>Indiginauts</a></div>

		<div class='four columns add-bottom omega'><a class='caption' href='suspended-belief-studios'><img class='scale-with-grid' src='img/suspended-belief-studios/thumb.jpg'>Suspended Belief Studios</a></div>

		<p>
			Please let me know if I can provide any other sort of information or if we can set up a meeting. Please find my resume in PDF format below or an online version <a href=\"resume\">here</a>. Thank you!
		</p>
		";

		break;

case '360':
		$company="Guidebook";
		$jobTitle="Designer";
		$name;
		$logo="http://jobscore-assets.s3.amazonaws.com/careers_site_header/header_bkgYd0UUur470-iGak6IKg@2x.jpg";
		$email;
		$date="May 29, 2014";
		$originaljobposting="http://www.jobscore.com/jobs2/guidebook/designer/aUD8MQUs4r4544eJe9fLhG?name=UC+Berkeley+Start-Up+Fair&ref=rss&sid=68";

		$copy="
		<p class=\"add-top\">
			Hi there! I saw your job posting and y'all seem like fun people! I am a graphic designer and illustrator who likes to code on the side. With over <a href='resume#history'>8+ years</a> of experience in design and production and a passion for gaming(I saw Wiimotes, N64 controllers and CliffyB in the photos on your site), I think I could be a welcome addition to your team!
		</p>
		<p>I'm currently at a <a href='suspended-belief-studios'>gaming startup</a> that is winding down. I come from a print-production background, more recently delving into web design/production. While at Pok&eacute;mon, I worked in the creative department as part of a small team of three, supporting the various departments with their needs. In addition to enforcing the brand standards and guidelines, we worked on a variety of projects including toy packaging, video-game launches, brand standard guides for licensees, strategy guide localization, in-store branding, mini-movie websites...just to name a few. Projects usually all bunched up around video-game/TV/movie launches so good time-management was a must.
		</p>
		<p>
		I am <a href=\"resume#skills\">highly proficent</a> in <a href='color-chameleon'>Photoshop</a> and <a href='100-principles-of-game-design'>Illustrator</a> as I've been using them for a long time. I am extremely comfortable with HTML/CSS. Programming is a bit of a hobby of mine so I am actively learning other web languages, like Ruby and PHP. I am comfortable with using <a href='http://www.github.com/raystation' target='_blank'>git</a>. I am also highly skilled in <a href=\"monkey-mo\">drawing</a>.
		</p>

		<div class='four columns add-bottom alpha' ><a class='caption' href='color-chameleon'><img class='scale-with-grid' src='img/color-chameleon/thumb.jpg'>Color Chameleon</a></div>

		<div class='four columns add-bottom '><a class='caption' href='project-animore'><img class='scale-with-grid' src='img/project-animore/thumb.jpg'>Project Animore</a></div>

		<div class='four columns add-bottom omega'><a class='caption' href='darkrai'><img class='scale-with-grid' src='img/darkrai/thumb.jpg'>Pok&eacute;mon: Rise of Darkrai</a></div>

		<p>
			Please let me know if I can provide any other sort of information or if we can set up a meeting. Please find my resume in PDF format below or an online version <a href=\"resume\">here</a>. If you find that I am not appropriate for this position, I would also like to be considered for the <a href='http://www.jobscore.com/jobs2/guidebook/marketing-designer/d5Xvfa360r449jiGakhP3Q?name=UC+Berkeley+Start-Up+Fair&ref=rss&sid=68'>Marketing Designer</a>. Thank you!
		</p>
		";

		break;

case '101':
		$company="Academia.edu";
		$jobTitle="Designer";
		$name="Richard Price";
		$logo="http://2.academia-assets.com/images/home2/academia-edu.jpg?c955c2b2909a6b3b334a33da57bb307a";
		$email="richard@academia.edu";
		$date="May 29, 2014";
		$originaljobposting="http://www.academia.edu/hiring/designer";

		$copy="
		<p class=\"add-top\">
			Hi there! I saw your posting on Indeed and thought you guys are doing some interesting work (the few papers I've seen have always been hosted on individual sites in various formats). I'm a graphic designer and illustrator who likes to code on the side.
		</p>
		<p>
			I am looking for a position where I can design and also grow as a coder. Here are some sites I've built: <br>
			<a href='abriendo-puertas'>Abriendo Puertas / Opening Doors</a><br>
			<a href='http://www.suspendedbeliefgames.com'>Suspended Belief Studios</a><br>
		</p>
		<p>
		I am <a href=\"resume#skills\">highly proficent</a> in <a href='color-chameleon'>Photoshop</a> and <a href='100-principles-of-game-design'>Illustrator</a> as I've been using them for a long time. I am extremely comfortable with HTML/CSS. Programming is a bit of a hobby of mine so I am actively learning other web languages, like Ruby and PHP. I've only learned a little Javascript, but this could be a good excuse to get amazing at it.
		</p>

		<div class='four columns add-bottom alpha' ><a class='caption' href='abriendo-puertas'><img class='scale-with-grid' src='img/abriendo-puertas/thumb.jpg'>Abriendo Puertas / Opening Doors</a></div>

		<div class='four columns add-bottom '><a class='caption' href='project-animore'><img class='scale-with-grid' src='img/project-animore/thumb.jpg'>Project Animore</a></div>

		<div class='four columns add-bottom omega'><a class='caption' href='the3'><img class='scale-with-grid' src='img/the3/thumb.svg'>The 3</a></div>
		<div class='clear'></div>

		<p>Please let me know if I can provide any other sort of information or if we can set up a meeting. Please find my resume <a href=\"resume\">here</a> or below for a PDF. Thank you!
		</p>
		";

		break;

case '510':
		$company="Big Fish";
		$jobTitle="Graphic Designer II";
		$name="Anna Galgana";
		$logo="http://www.underconsideration.com/brandnew/archives/big_fish_games_detail.jpg";
		$email;
		$date="May 29, 2014";
		$originaljobposting="http://www.bigfishgames.com/company/open-positions.html?nl=1&jvi=ouJYYfwT,Job&jvs=Indeed&jvk=Job";

		$copy="
		<p class=\"add-top\">
			Hi there! I saw your posting on Indeed and like what you guys do! I am a graphic designer and illustrator with an interest in coding.
		</p>
		<p>
			I am looking for a position in gaming...a place where I can incorporate my design and illustration skills—a place where we can produce high quality design and art and have a great time doing it!
		</p>
		<p>
			I've included links to some design and illustration work I've done.
			<br>
			&bull; <a href='indiginauts'>Indiginauts</a><br>
			&bull; <a href='the3'>The 3</a><br>
			&bull; <a href='project-animore'>Project Animore</a><br>
			&bull; <a href='100-principles-of-game-design'>100 Principles of Game Design</a>
		</p>
		<p>

		</p>

		<div class='four columns add-bottom alpha' ><a class='caption' href='indiginauts'><img class='scale-with-grid' src='img/indiginauts/thumb.jpg'>Indiginauts</a></div>

		<div class='four columns add-bottom '><a class='caption' href='project-animore'><img class='scale-with-grid' src='img/project-animore/thumb.jpg'>Project Animore</a></div>

		<div class='four columns add-bottom omega'><a class='caption' href='the3'><img class='scale-with-grid' src='img/the3/thumb.svg'>The 3</a></div>
		<div class='clear'></div>

		<p>Please let me know if I can provide any other sort of information or if we can set up a meeting. Please find my resume <a href=\"resume\">here</a> or below for a PDF. Thank you!
		</p>
		";

		$other="
			<div class='four columns list-spacing-fix add-bottom alpha caption'>
				<hr class='add-top'>
				<h5>Currently Playing</strong></h5>
					<ul>
						<li>Nimblequest</li>
						<li>X-COM: Enemy Unknown</li>
						<li>Disco Zoo</li>
						<li>Red Dead Redemption</li>
					</ul>
			</div>

			<div class='four columns list-spacing-fix add-bottom caption'>
				<hr class='add-top'>
				<h5>Hobbies</strong></h5>
					<ul>
						<li>Casual Games</li>
						<li>Basketball</li>
						<li>Programming</li>
						<li>Cooking</li>
						<li>Making Lists</li>
					</ul>
			</div>

			<div class='four columns list-spacing-fix add-bottom caption omega'>
				<hr class='add-top'>
				<h5>Currently Watching</strong></h5>
					<ul>
						<li>Game of Thrones</li>
						<li>Mad Men</li>
						<li>Old Godzilla movies</li>
						<li>Bob's Burgers</li>
						<li>Basketball documentaries</li>
					</ul>
			</div>

			<div class='clear'></div>";

		$post="
			<h6>Aztec Gold Art Test - June 23, 2014</h6>

			<div class='one-third column alpha'><a href='img/big-fish/1_cropped.jpg'><img src='img/big-fish/1.jpg' class='scale-with-grid2 add-bottom'></a></div>
			<div class='one-third column' ><a href='img/big-fish/2_cropped.jpg'><img src='img/big-fish/2.jpg' class='scale-with-grid2 add-bottom'></a></div>
			<div class='one-third column omega'><a href='img/big-fish/3_cropped.jpg'><img src='img/big-fish/3.jpg' class='scale-with-grid2 add-bottom'></a></div>
			<a href='img/big-fish/big-fish-01_cropped.jpg'><img src='img/big-fish/big-fish-01.png' class='scale-with-grid2 add-bottom'></a>

			<hr>

			<h6>Additional Works - July 9, 2014</h6>

			<a href='img/big-fish/Plat_insert5.jpg'><img src='img/big-fish/Plat_insert5.jpg' class='scale-with-grid2 add-bottom'></a>

			<div class='one-third column alpha'><a href='img/big-fish/Poster_Rotom_1.jpg'><img src='img/big-fish/Poster_Rotom_1.jpg' class='scale-with-grid2 add-bottom'></a></div>
			<div class='one-third column'><a href='img/big-fish/Poster_Rotom_2.jpg'><img src='img/big-fish/Poster_Rotom_2.jpg' class='scale-with-grid2 add-bottom'></a></div>
			<div class='one-third column omega'><a href='img/big-fish/Poster_Shaymin.jpg'><img src='img/big-fish/Poster_Shaymin.jpg' class='scale-with-grid2 add-bottom'></a></div>
			<div class='clear'></div>

			<div class='slick'>
				<div><img class='scale-with-grid' src='img/big-fish/Brochure_051210-1.jpg'></div>
				<div><img class='scale-with-grid' src='img/big-fish/Brochure_051210-2.jpg'></div>
				<div><img class='scale-with-grid' src='img/big-fish/Brochure_051210-4.jpg'></div>
				<div><img class='scale-with-grid' src='img/big-fish/Brochure_051210-5.jpg'></div>
				<div><img class='scale-with-grid' src='img/big-fish/Brochure_051210-7.jpg'></div>
			</div>
			<div class='clear'></div>

			<div class='one-third column '><img src='img/big-fish/AfH_S-226x226.gif' class='scale-with-grid add-bottom'></div>
			<div class='one-third column'><img src='img/big-fish/AfH_V-200x300.gif' class='scale-with-grid add-bottom'></div>
		";

		// $plugin=array("js/jQueryRotate.js",'$(document).ready(function() {$(".flip").click(function() {$(this).rotate(-90); }); }); ');

		break;

case '212':
		$company="Crunchyroll";
		$jobTitle="Visual Designer";
		$name;
		$logo="http://www.pakman.com/wp-content/uploads/2013/12/CrunchyRoll-Logo.jpg";
		$email;
		$date="May 29, 2014";
		$originaljobposting="http://www.crunchyroll.com/jobs/13454/detail?gh_jid=13454";

		$copy="
		<p class=\"add-top\">
			<div class='four columns alpha'>
			<img class='scale-with-grid' src='http://i.imgur.com/GGtiS45.jpg'>
			</div>
			Hello! I saw your posting and I, really liking manga and anime, couldn't pass up this opportunity to get in touch. I am a graphic designer and illustrator with some experience in programming.
		</p>
		<p>
			I have over <a href=\"resume#history\">8+ years</a> working in design and marketing. At <em>The Pok&eacute;mon Company</em>, I worked in the creative department as part of a small team of three, supporting the internal departments with their various needs. In addition to enforcing the brand standards and guidelines, we worked on projects like toy packaging, video-game launches, strategy guide localization, <a href='darkrai'>mini-movie websites</a>...just to name a few. When projects were too big to be handled in-house, we managed outside vendors and got things produced in a timely manner.
		</p>
		<p>
		I am <a href=\"resume#skills\">highly proficent</a> in the Adobe Creative Suite. I became a master in Illustrator since all the Pok&eacute;mon artwork is in that format.
		</p>

		<div class='four columns add-bottom alpha' ><a class='caption' href='darkrai'><img class='scale-with-grid' src='img/darkrai/thumb.jpg'>Rise of Darkrai</a></div>

		<div class='four columns add-bottom '><a class='caption' href='arceus'><img class='scale-with-grid' src='img/arceus/thumb.jpg'>Arceus</a></div>

		<div class='four columns add-bottom omega'><a class='caption' href='project-animore'><img class='scale-with-grid' src='img/project-animore/thumb.jpg'>Project Animore</a></div>
		<div class='clear'></div>

		<p>
			Please let me know if I can provide any other sort of information or if we can set up a meeting. Please find my resume <a href=\"resume\">here</a> or a PDF version below. Thank you!
		</p>";

		$other="
			<div class='four columns list-spacing-fix add-bottom alpha caption'>
				<hr class='add-top'>
				<p><strong>Favorite Pok&eacute;mon</strong></p>
					<ul>
						<li>Piplup</li>
						<li>Heracross</li>
						<li>Garchomp</li>
						<li>Combee</li>
						<li>Alakazam</li>
					</ul>
			</div>

			<div class='four columns list-spacing-fix add-bottom caption'>
				<hr class='add-top'>
				<p><strong>Fav. Anime/Manga</strong></p>
					<ul>
						<li>One Piece</li>
						<li>Naruto</li>
						<li>Cowboy Bebop</li>
						<li>Attack on Titan</li>
					</ul>
			</div>

			<div class='four columns list-spacing-fix add-bottom caption omega'>
				<hr class='add-top'>
				<p><strong>Fav. characters</strong></p>
					<ul>
						<li>Sanji</li>
						<li>Monkey D. Luffy</li>
						<li>Rock Lee</li>
						<li>Spike Spiegel</li>
						<li>Jiraiya</li>
					</ul>
			</div>
			";

		break;

	case '415':
	$company="Toca Boca";
	$jobTitle="Designer";
	$name="Kalle Hellzen";
	$logo="https://scontent-b-sjc.xx.fbcdn.net/hphotos-xpa1/t1.0-9/1016556_628012347252223_866083872_n.png";
	$email="kalle@tocaboca.com";
	$date="May 30, 2014";
	$originaljobposting="http://tocaboca.theresumator.com/apply/ZoeHry/Designer.html";

	$copy="
	<p class=\"add-top\">
		Hallå! I saw your posting and after looking you guys up, decided I LOVE what you guys do! Y'all seem so fun! I am a designer and an illustrator with some experience in programming. I am looking for a position where I can contribute to a team and do amazing work and also have fun doing it. I am a firm believer in the play experience—people learn by doing.
	</p>
	<p>
		I am currently winding down with my gaming startup. We worked on a few big projects, where I contributed original artwork, UI design, logo design and game design. I also used to work at Pok&eacute;mon where we serviced all the internal departments with their creative needs.
	</p>
	<p>
	I am <a href=\"resume#skills\">highly proficent</a> in the Adobe Creative Suite. I've been using Photoshop since high school and all the Pok&eacute;mon artwork was in Illustrator format.
	</p>

	<div class='four columns add-bottom alpha' ><a class='caption' href='indiginauts'><img class='scale-with-grid' src='img/indiginauts/thumb.jpg'>Indiginauts</a></div>

	<div class='four columns add-bottom '><a class='caption' href='project-animore'><img class='scale-with-grid' src='img/project-animore/thumb.jpg'>Project Animore</a></div>

	<div class='four columns add-bottom omega'><a class='caption' href='the3'><img class='scale-with-grid' src='img/the3/thumb.svg'>The 3</a></div>
	<div class='clear'></div>

	<p>
		Please let me know if I can provide any other sort of information or if we can set up a meeting. Please find my resume <a href='resume'>here</a> or a PDF version below. Thank you!
	</p><hr><p>

	Update June 13, 2014: <br>
	asked to do a homework assignment. <br />
	<a href='http://rayuen.com/projects/toca-boca-homework.pdf'>link to homework</a>
	";

	break;

	case '88':
	$company="YMCA of San Francisco";
	$jobTitle="Graphics Design Associate";
	$name;
	$logo="http://www.indeed.com/cmp/_s/logos/e28b994824ced938";
	$email="presidiohr@ymcasf.net";
	$date="May 30, 2014";
	$originaljobposting="http://www.ymcasf.org/who_we_are/employment/job_listings/detail/1355_graphics_design_associate";

	$copy="
	<p class=\"add-top\">
		Hi! I saw your job posting and since I am a huge fan and a regular at the YMCA in Chinatown, I thought I would get in touch. I am a graphic designer and illustrator with experience in UI and programming.
	</p>
	<p>
		I think one of the reason I really like the YMCA is that it's a family environment. I usually go to the Y to play basketball with the teens, but if there are just children around, I will play <a href='http://www.wikihow.com/Play-Horse-(the-Basketball-Game)'>H-O-R-S-E</a> with them (if they aren't too shy). I love kids! I've considered volunteering my time, but thought I should get some regular income first.
	</p>
	<p>
		I have publishing, design and production experience from over <a href=\"resume#history\">8+ years</a> working in in-house creative departments and supporting marketing departments. I used to work at <em>Equinox Fitness Clubs</em> where we maintained over 13 clubs in the New York metro area. We produced collateral (a lot of it by hand) like business cards, membership cards, posters for special classes, special promotion tickets, quarterly reports...
	</p>

	<div class='four columns add-bottom alpha' ><a class='caption' href='chronicles-of-old-new-york'><img class='scale-with-grid' src='img/chronicles-of-old-new-york/thumb.jpg'>Chronicles of Old NY</a></div>

	<div class='four columns add-bottom '><a class='caption' href='project-animore'><img class='scale-with-grid' src='img/project-animore/thumb.jpg'>Project Animore</a></div>

	<div class='four columns add-bottom omega'><a class='caption' href='darkrai'><img class='scale-with-grid' src='img/darkrai/thumb.jpg'>The Rise of Darkrai</a></div>
	<div class='clear'></div>

	<p>
		Please let me know if I can provide any other sort of information or if we can set up a meeting. Please find my resume <a href='resume'>here</a> or a PDF version below. Thank you!
	</p>";

	break;

	case '404':
	$company="Code for America";
	$jobTitle="Visual Designer";
	$name;
	$logo="http://codeforamerica.org/assets/logo.png";
	$email;
	$date="June 2, 2014";
	$originaljobposting="http://codeforamerica.theresumator.com/apply/job_20140111001007_QTSWV1EHNEMU9SGO/Visual-Designer.html?source=INDE";

	$copy="
	<p class=\"add-top\">
		Hello! I saw your posting and wanted to get in touch. I am a graphic designer and illustrator with some experience in programming. The work you do sounds interesting—I've been learning programming and I can definitly understand the motivations for your non-profit. I am looking for a position where I can apply my unique skills and also be at a place where I can affect positive change.
	</p>
	<p>
		I've selected three pieces for your approval below.
	</p>

	<div class='four columns add-bottom alpha'><a class='caption' href='abriendo-puertas'><img class='scale-with-grid' src='img/abriendo-puertas/thumb.jpg'>ap-od.org</a></div>

	<div class='four columns add-bottom' ><a class='caption' href='chronicles-of-old-new-york'><img class='scale-with-grid' src='img/chronicles-of-old-new-york/thumb.jpg'>Chronicles of Old NY</a></div>

	<div class='four columns add-bottom omega'><a class='caption' href='project-animore'><img class='scale-with-grid' src='img/project-animore/thumb.jpg'>Project Animore</a></div>

	<div class='clear'></div>

	<p>
		Please let me know if I can provide any other sort of information or if we can set up a meeting. Please find my resume <a href='resume'>here</a> or a PDF version below. Thank you!
	</p>";

	break;

	case '102':
	$company="Education Superhighway";
	$jobTitle="Graphic Designer";
	$name;
	$logo="http://www.educationsuperhighway.org/uploads/1/0/9/4/10946543/1348157671.png";
	$email="careers@educationsuperhighway.org";
	$date="June 2, 2014";
	$originaljobposting="http://www.educationsuperhighway.org/graphic-designer.html";

	$copy="
	<p class=\"add-top\">
		Hello! I saw your posting and wanted to get in touch. I am a graphic designer and illustrator with some experience in programming. The work you do sounds interesting—I am looking for a position where I can apply my unique skills and also be at a place where I can affect positive change.
	</p>
	<p>
	I have over <a href=\"resume#history\">8+ years</a> working in design and marketing (and some <a href='chronicles-of-old-new-york'>publishing</a>). At <em>The Pok&eacute;mon Company</em>, I worked in the creative department as part of a small team of three, supporting the internal departments with their various needs. In addition to enforcing the brand standards and guidelines, we worked on projects like toy packaging, video-game launches, strategy guide localization, <a href='darkrai'>mini-movie websites</a>...just to name a few. When projects were too big to be handled in-house, we managed outside vendors and got things produced in a timely manner. I've selected three pieces for your approval below which I think would be relevant to the conversation.
	</p>

	<div class='four columns add-bottom alpha'><a class='caption' href='abriendo-puertas'><img class='scale-with-grid' src='img/abriendo-puertas/thumb.jpg'>ap-od.org</a></div>

	<div class='four columns add-bottom' ><a class='caption' href='chronicles-of-old-new-york'><img class='scale-with-grid' src='img/chronicles-of-old-new-york/thumb.jpg'>Chronicles of Old NY</a></div>

	<div class='four columns add-bottom omega'><a class='caption' href='project-animore'><img class='scale-with-grid' src='img/project-animore/thumb.jpg'>Project Animore</a></div>

	<div class='clear'></div>

	<p>
		Please let me know if I can provide any other sort of information or if we can set up a meeting. Please find my resume <a href='resume'>here</a> or a PDF version below. Thank you!
	</p>";

	break;

	case '911':
	$company="San Francisco Public Press";
	$jobTitle="Print Designer";
	$name="Michael Stoll";
	$logo="http://sfpublicpress.org/files/logo.gif";
	$email="design@sfpublicpress.org";
	$date="June 2, 2014";
	$originaljobposting="http://www.journalismjobs.com/Job_Listing.cfm?JobID=1591746&utm_source=Indeed&utm_medium=organic&utm_campaign=Indeed";

	$copy="
	<p class=\"add-top\">
		Hello! I saw your posting and wanted to get in touch. I am a graphic designer and illustrator with some experience in programming. I have worked in design on both the creative and production side for over <a href=\"resume#history\">8+ years</a>. You can find my work <a href='index'>here</a>.
	</p>
	<p>
		I have submitted three relevant projects for your approval.
	</p>

	<div class='four columns add-bottom alpha'><a class='caption' href='abriendo-puertas'><img class='scale-with-grid' src='img/abriendo-puertas/thumb.jpg'>ap-od.org</a></div>

	<div class='four columns add-bottom' ><a class='caption' href='chronicles-of-old-new-york'><img class='scale-with-grid' src='img/chronicles-of-old-new-york/thumb.jpg'>Chronicles of Old NY</a></div>

	<div class='four columns add-bottom omega'><a class='caption' href='project-animore'><img class='scale-with-grid' src='img/project-animore/thumb.jpg'>Project Animore</a></div>

	<div class='clear'></div>

	<p>
		Please let me know if I can provide any other sort of information or if we can set up a meeting. Please find my resume <a href='resume'>here</a> or a PDF version below. Thank you!
	</p>";

	break;

	case '314':
	$company="<a href='http://www.funplus.com' target='_blank'>FunPlus</a>";
	$jobTitle="Game Designer - Content & Quests";
	$logo="http://www.funplus.com/logo.png";
	$date="June 2, 2014";
	$originaljobposting="http://funplus.theresumator.com/apply/job_20140131155332_ST1B54RLUFBERR6A/Game-Designer-Content-Quests.html?source=INDE";

	$copy="
	<p class=\"add-top\">
		Hello! I saw your posting and wanted to get in touch. I am a graphic designer and illustrator with some experience in programming. I love what you guys do! I am looking for a position where I can contribute my <a href=\"resume#skills\">unique skills</a> in a productive and fun environment.
	</p>
	<p>
		I am winding down from my <a href='suspended-belief-studios'>gaming startup</a> with my friend. I am as fascianted by game design as I am with the visuals. While I don't have experience working on a live free-to-play game, hopefully my \"gaming-resume\" will more than make up for that. I play a ton of games (casual, midcore, hardcore) and have evolved with the iOS market into it's current free-to-play phase and have been playing console games since the NES/Sega Master System. I love games!
	</p>

	<div class='four columns add-bottom alpha'><a class='caption' href='the3'><img class='scale-with-grid' src='img/the3/thumb.svg'>The 3</a></div>

	<div class='four columns add-bottom' ><a class='caption' href='indiginauts'><img class='scale-with-grid' src='img/indiginauts/thumb.jpg'>Indiginauts</a></div>

	<div class='four columns add-bottom omega'><a class='caption' href='project-animore'><img class='scale-with-grid' src='img/project-animore/thumb.jpg'>Project Animore</a></div>

	<div class='clear'></div>

	<p>
		You can find my work <a href='index'>here</a>. Please let me know if I can provide any other sort of information or if we can set up a meeting. Please find my resume <a href='resume'>here</a> or a PDF version below. Thank you!
	</p>";

	$other="
	<div class='four columns list-spacing-fix add-bottom alpha caption'>
		<hr class='add-top'>
		<p><strong>Favorite Pok&eacute;mon</strong></p>
			<ul>
				<li>Piplup</li>
				<li>Heracross</li>
				<li>Garchomp</li>
				<li>Combee</li>
				<li>Alakazam</li>
			</ul>
	</div>

	<div class='four columns list-spacing-fix add-bottom caption'>
		<hr class='add-top'>
		<p><strong>Currently Playing</strong></p>
			<ul>
				<li>FTL</li>
				<li>Hay Day</li>
				<li>Disco Zoo</li>
				<li>Zookeeper: Battle!</li>
				<li>The Last of Us</li>
			</ul>
	</div>

	<div class='four columns list-spacing-fix add-bottom caption omega'>
		<hr class='add-top'>
		<p><strong>Fav. RPG's</strong></p>
			<ul>
				<li>FF6</li>
				<li>Chrono Trigger</li>
				<li>Fallout: New Vegas</li>
				<li>FF4</li>
				<li>Fable</li>
			</ul>
	</div>
	";

	break;

	case '002':
	$company="Chronicle Books";
	$jobTitle="Junior Production Designer";
	$logo="http://www.chroniclebooks.com/skin/frontend/enterprise/cbooks/images/logo.gif";
	$date="June 2, 2014";
	$originaljobposting="http://www.chroniclebooks.com/our-company/jobs/jr-prod-dsgnr";

	$copy="
	<p class=\"add-top\">
		Hello! I saw your posting and wanted to get in touch. I am a graphic designer and illustrator with some experience in programming. I am looking for a position where I can contribute my varied skills and have fun. I have over 8+ years of experience in design from both the creative and production side. It's probably a bit more senior than you are expecting, but hey I thought I would give it a shot—I don't see as many publishing positions out here (compared to NY).
	</p>

	<div class='four columns add-bottom alpha'><a class='caption' href='chronicles-of-old-new-york'><img class='scale-with-grid' src='img/chronicles-of-old-new-york/thumb.jpg'>Chronicles of Old NY</a></div>

	<div class='four columns add-bottom' ><a class='caption' href='art+paris'><img class='scale-with-grid' src='img/art-and-paris/thumb.jpg'>Art + Paris</a></div>

	<div class='four columns add-bottom omega'><a class='caption' href='monkey-mo'><img class='scale-with-grid' src='img/monkey-mo/thumb.jpg'>Monkey Mo, Monkey Go!</a></div>

	<div class='clear'></div>
	<p>
		Check out my resume here <a href='resume'>rayuen.com/resume</a> or a PDF version below. <br>
		Check out my portfolio here <a href='work'>rayuen.com/work</a> <br>
	</p>

	<p>
		Please let me know if I can provide any other sort of information or if we can set up a meeting. Thank you!
	</p>";

	break;

	case '480px':
	$company="Moboom";
	$jobTitle="Creative Director";
	$logo="https://my.zartis.com/Settings/ShowLogo/401";
	$date="June 4, 2014";
	$name="The Founders of Moboom";
	$originaljobposting="https://my.zartis.com/moboom/jobs/8019/creative-director-san-francisco?source=Indeed";

	$copy="
	<p class=\"add-top\">
		Hello! I saw your posting and wanted to get in touch. You guys look like you do some interesting stuff. I am a  designer and illustrator with some programming experience looking for a place to apply my varied skills in a fun environment. I have over 8+ years of design experience working from both the creative/marketing and production side.
	</p>
	<p>
		As mobile devices become the norm, responsive design is becoming more and more important. I want to be on the fore-front of this movement!
	</p>

	<div class='four columns add-bottom alpha'><a class='caption' href='darkrai'><img class='scale-with-grid' src='img/darkrai/thumb.jpg'>The Rise of Darkrai</a></div>

	<div class='four columns add-bottom' ><a class='caption' href='color-chameleon'><img class='scale-with-grid' src='img/color-chameleon/thumb.jpg'>Color Chameleon</a></div>

	<div class='four columns add-bottom omega'><a class='caption' href='abriendo-puertas'><img class='scale-with-grid' src='img/abriendo-puertas/thumb.jpg'>Abriendo Puertas</a></div>

	<div class='clear'></div>
	<p>
		My resume here <a href='resume'>rayuen.com/resume</a> or a PDF version below. <br>
		My portfolio here <a href='work'>rayuen.com</a> <br>
	</p>

	<p>
		Please let me know if I can provide any other sort of information or if we can set up a meeting. Thank you!
	</p>";


	break;


	case 'O2B':
	$company="airbnb";
	$jobTitle="Digital&nbsp;Marketing Designer";
	$logo="http://www.google.com/tagmanager/images/airbnb-logo.png";
	$date="June 4, 2014";
	$name;
	$originaljobposting="https://www.airbnb.com/jobs/departments/position/11457";

	$copy="
	<p class=\"add-top\">
		Hello! I saw your posting and wanted to get in touch. <em>airbnb</em> seems like a rad place to work. I am a  designer and illustrator with some programming experience looking for a place to apply my varied skills in a fun environment.
	</p>
	<p>
		I have over 8+ years of design experience working from both the creative/marketing and production side. I used to work in-house at Pok&eacute;mon where we maintained the brand as well as serviced the other internal departments. I've been learning some programming to further my interacive skills.
	</p>

	<div class='four columns add-bottom alpha'><a class='caption' href='darkrai'><img class='scale-with-grid' src='img/darkrai/thumb.jpg'>The Rise of Darkrai</a></div>

	<div class='four columns add-bottom' ><a class='caption' href='color-chameleon'><img class='scale-with-grid' src='img/color-chameleon/thumb.jpg'>Color Chameleon</a></div>

	<div class='four columns add-bottom omega'><a class='caption' href='abriendo-puertas'><img class='scale-with-grid' src='img/abriendo-puertas/thumb.jpg'>Abriendo Puertas</a></div>

	<div class='clear'></div>
	<p>
		My resume here <a href='resume'>rayuen.com/resume</a> or a PDF version below. <br>
		My portfolio here <a href='work'>rayuen.com</a> <br>
	</p>

	<p>
		Please let me know if I can provide any other sort of information or if we can set up a meeting. Thank you!
	</p>";


	break;

	case '789':
	$company="Zipongo";
	$jobTitle="Sr. Designer / Creative&nbsp;Director";
	$logo="http://blog2.zipongo.com/wp-content/themes/zipongo/images/logo.svg";
	$date="June 4, 2014";
	$name;
	$originaljobposting="http://www.indeed.com/viewjob?jk=48a81f17a83d80ae&q=(graphic+or+design+or+print+or+illustration)&l=san+francisco&tk=18pivv0m706a00an&from=ja&alid=8cb27739bcde7d9d&utm_source=jobseeker_emails&utm_medium=email&utm_campaign=job_alerts";

	$copy="
	<p class=\"add-top\">
		Hello! You guys seem like you do some interesting work and I wanted to get in touch. I am a  designer and illustrator with programming experience looking for a place to apply my varied skills in a fun environment.
	</p>
	<p>
		I have over 8+ years of design experience working from both the creative/marketing and production side. I used to work in-house at Pok&eacute;mon where we maintained the brand as well as serviced the other internal departments. I've been learning some programming to further my interacive skills.
	</p>

	<div class='four columns add-bottom alpha' ><a class='caption' href='color-chameleon'><img class='scale-with-grid' src='img/color-chameleon/thumb.jpg'>Color Chameleon</a></div>

	<div class='four columns add-bottom '><a class='caption' href='the3'><img class='scale-with-grid' src='img/the3/thumb.svg'>The 3</a></div>

	<div class='four columns add-bottom omega'><a class='caption' href='abriendo-puertas'><img class='scale-with-grid' src='img/abriendo-puertas/thumb.jpg'>Abriendo Puertas</a></div>

	<div class='clear'></div>
	<p>
		My resume here <a href='resume'>rayuen.com/resume</a> or a PDF version below. <br>
		My portfolio here <a href='work'>rayuen.com</a> <br>
	</p>

	<p>
		Please let me know if I can provide any other sort of information or if we can set up a meeting. Thank you!
	</p>";


	break;


	case 'C02b':
	$company="airbnb";
	$jobTitle="Production Designer";
	$logo="http://www.google.com/tagmanager/images/airbnb-logo.png";
	$date="June 4, 2014";
	$name;
	$originaljobposting="https://www.airbnb.com/jobs/departments/position/2276";

	$copy="
	<p class='add-top'>
		Hello! I saw your posting and wanted to pass along my information. I am a designer and illustrator with experience in <a href='http://www.github.com/raystation' target='_blank'>programming</a>. I am looking for a position where I can grow as a designer and have fun doing it!
	</p>
	<p>
		I have over <a href='resume#history'>8+ years</a> of design experience working from both the creative/marketing and production side. I used to work at Pok&eacute;mon where we maintained the brand as well as serviced the other internal departments. Most of my experience is in print and production, but I have since been learning programming to further my interacive skills.
	</p>

	<div class='four columns add-bottom alpha' ><hr><a class='caption' href='color-chameleon'><img class='scale-with-grid' src='img/color-chameleon/thumb.jpg'>Color Chameleon</a></div>

	<div class='four columns add-bottom '><hr><a class='caption' href='the3'><img class='scale-with-grid' src='img/the3/thumb.svg'>The 3</a></div>

	<div class='four columns add-bottom omega'><hr><a class='caption' href='abriendo-puertas'><img class='scale-with-grid' src='img/abriendo-puertas/thumb.jpg'>Abriendo Puertas</a></div>

	<div class='clear'></div>
	<p>
		My resume here <a href='resume'>rayuen.com/resume</a> or a PDF version below. <br>
		My portfolio here <a href='work'>rayuen.com</a> <br>
	</p>

	<p>
		Please let me know if I can provide any other sort of information or if we can set up a meeting. Thank you!
	</p>";


	break;


	case '9112':
	$company="CEP America";
	$jobTitle="Corporate Graphic Designer";
	$logo="http://www.cep.com/Portals/0/cep-logo.png";
	$date="June 5, 2014";
	$name;
	$originaljobposting="http://cepamerica.force.com/careers/ts2__JobDetails?jobId=a0OG000000COuSVMA1&tSource=";

	$copy="
		<p class='add-top'>
			Hello! I saw your posting and wanted to pass along my information. I am a designer and illustrator with experience in programming. I am looking for a position where I can grow as a designer and work somewhere where I can affect positive change.
		</p>
		<p>
			I have over <a href='resume#history'>8+ years</a> of design experience working from both the creative/marketing and production sides. I used to work at Pok&eacute;mon where we maintained the brand as well as serviced the other internal departments. Projects varied greatly, from trade booth planning, strategy guide creation, e-learning intitiatives, and game launch parties just to name a few.
		</p>

		<div class='four columns add-bottom alpha' ><hr><a class='caption' href='darkrai'><img class='scale-with-grid' src='img/darkrai/thumb.jpg'>The Rise of Darkrai</a></div>

		<div class='four columns add-bottom '><hr><a class='caption' href='the3'><img class='scale-with-grid' src='img/the3/thumb.svg'>The 3</a></div>

		<div class='four columns add-bottom omega'><hr><a class='caption' href='abriendo-puertas'><img class='scale-with-grid' src='img/abriendo-puertas/thumb.jpg'>Abriendo Puertas</a></div>

		<div class='clear'></div>
		<p>
			My resume here <a href='resume'>rayuen.com/resume</a> or a PDF version below. <br>
			My portfolio here <a href='work'>rayuen.com</a> <br>
		</p>

		<p>
			Please let me know if I can provide any other sort of information or if we can set up a meeting. Thank you!
		</p>
	";


	break;

	case '582':
	$company="Triple Aught Design";
	$jobTitle="Graphic Designer & 2-D Artist";
	$logo="https://assets.tripleaughtdesign.com/static/images/TAD-logotype-2x.png";
	$date="June 5, 2014";
	$name;
	$originaljobposting="https://sfbay.craigslist.org/sfc/med/4470150467.html";

	$copy="
		<p class='add-top'>
			Hello! I saw your posting and wanted to get in touch. I am a designer and illustrator with experience in programming. I am looking for a position in a smallish company where I can create some amazing work and have fun.
		</p>
		<p>
			I currently work for a gaming startup that is winding down. I had to do a little bit of everything, from artwork to design to web development. I also used to work at Pok&eacute;mon where everything creative streamed through our department.
		</p>
		<p>
			Check my resume here <a href='resume'>rayuen.com/resume</a> or a PDF version below. <br>
			My portfolio here <a href='work'>rayuen.com</a>
		</p>

		<p>
			Please let me know if I can provide any other sort of information or if we can set up a meeting. Thank you!
		</p>
	";


	break;

	case '809':
	$company="Bonhams";
	$jobTitle="Production&nbsp;Artist / Proposal&nbsp;Coordinator";
	$logo="http://www.bonhams.com/media/images/bonhams.png";
	$date="June 5, 2014";
	$email="jobs.us@bonhams.com";
	$originaljobposting="https://sfbay.craigslist.org/sfc/med/4504434284.html";

	$copy="
		<p class='add-top'>
			Hello! I saw your posting and wanted to send along my information. I am a designer and illustrator with experience in programming. I am looking for a position where I can grow as a designer, learn new things and have fun!
		</p>
		<p>
			I have over 8 years of design experience from both the marketing/creative and the production side. I recently worked for a <a href='chronicles-of-old-new-york'>publishing startup</a> in NY where I oversaw the creation of 6 books from inception to print...everything from searching for widows to pre-press.
		</p>
		<p>
			Look at my resume here <a href='resume'>rayuen.com/resume</a> or a PDF version below. <br>
			My portfolio here <a href='work'>rayuen.com</a>
		</p>

		<p>
			Please let me know if I can provide any other sort of information or if we can set up a meeting. Thank you!
		</p>
	";


	break;

	case '350':
	$company="Playworks";
	$jobTitle="Graphic Designer-Web Production Manager";
	$logo="https://evbdn.eventbrite.com/s3-s3/eventlogos/14851049/playworkslogo.jpg";
	$date="June 5, 2014";
	$originaljobposting="http://www.playworks.org/join-the-game/join-our-team/web-designer";

	$copy="
		<p class='add-top'>
			Hello! I saw your posting and wanted to send along my information. I strongly believe in the power of play and this opportunity sounds great! I am a designer and illustrator with experience in programming. I am looking for a position where I can grow as a designer, learn new things and have fun!
		</p>
		<p>
			I have over 8 years of design experience from both the marketing/creative and the production side. The most relevant experience is from Pok&eacute;mon as an in-house designer. I was part of a small team of three where all creative streamed through us. We also enforced brand standards with the internal departments as well as with external vendors.
		</p>
		<p>
			Resume: <a href='resume'>rayuen.com/resume</a> (PDF version below) <br>
			Portfolio: <a href='work'>rayuen.com</a>
		</p>
		<p>
			Please let me know if I can provide any other sort of information or if we can set up a meeting. Thank you!
		</p>
	";


	break;

	case '099':
	$company="Astro gaming";
	$jobTitle="Lead Graphic Designer";
	$logo="http://fathersongaming.tv/templates/default/assets/images/astro-logo.jpeg";
	$date="June 5, 2014";
	$email="careers@skullcandy.com";
	$originaljobposting="http://www.astrogaming.com/jobs/jobs.html";

	$copy="
		<p class='add-top'>
			Hello! I just saw your job posting and wanted to see if this position was still available. With my work experience and my love of video games, I am definitly interested in finding out more about this opportunity.
		</p>
		<p>
			I have over 8 years of design experience from both the marketing/creative and the production side. The most relevant experience is from Pok&eacute;mon as an in-house designer. I was part of a small team of three where all creative streamed through us. We also enforced brand standards with the internal departments as well as with external vendors. I am a master of the tools of the trade and have some programming experience as well.
		</p>
		<p>
			Resume: <a href='resume'>rayuen.com/resume</a> (PDF version below) <br>
			Portfolio: <a href='work'>rayuen.com</a>
		</p>
		<p>
			Please let me know if I can provide any other sort of information or if we can set up a meeting. Thank you!
		</p>
	";


	break;

	case '191':
	$company="FILTER";
	$jobTitle="Graphic Designer";
	$logo="http://filterdigital.com/Sitefinity/WebsiteTemplates/Filter/App_Themes/FilterDigital/Images/Logos/filterLogo.png";
	$date="June 5, 2014";
	$originaljobposting="http://filterdigital.com/jobs/jobs/graphic-designer-48108?utm_source=Indeed&utm_medium=organic&utm_campaign=Indeed";

	$copy="
		<p class='add-top'>
			Hello! I just saw your job posting and wanted to see if this position was still available. With my work experience and my love of video games, I am definitly interested in finding out more about this opportunity.
		</p>
		<p>
			I have over 8 years of design experience from both the marketing/creative and the production side. The most relevant experience is from Pok&eacute;mon as an in-house designer. I was part of a small team of three where all creative streamed through us. We also enforced brand standards with the internal departments as well as with external vendors. I am a master of the tools of the trade and have some programming experience as well.
		</p>
		<p>
			Resume: <a href='resume'>rayuen.com/resume</a> (PDF version below) <br>
			Portfolio: <a href='work'>rayuen.com</a>
		</p>
		<p>
			Please let me know if I can provide any other sort of information or if we can set up a meeting. Thank you!
		</p>
	";


	break;

	case 'viz':
	$company="VIZ Media";
	$jobTitle="Designer – Digital Marketing";
	$logo="http://majorspoilers.com/wp-content/uploads/2014/03/VIZ-Media-logo-post.jpg";
	$date="June 6, 2014";
	$email='jobs@viz.com';
	$name="Creative Team";
	$originaljobposting="http://www.viz.com/static/job_designer_digital_marketing";

	$copy="
		<p class='add-top'>
			Hello! I just saw your job posting and wanted to get in touch because this sounds like an amazing job for a company I am excited about! With my work experience and my interest in <span class='underline tooltip' title=\"LUFFY: I'M GONNA BE THE KING OF THE PIRATES!\">manga</span> and anime, I am definitely interested in finding out more about this opportunity!
		</p>
		<p>
			I have over eight years of design experience from both the marketing/creative and the production side. My most relevant experience comes from Pok&eacute;mon as an in-house designer. I was part of a small team of three which all creative streamed through. We also enforced brand standards with the internal departments as well as with external vendors. I am a master of the <span class='underline tooltip' title='Photoshop, Illustrator, Indesign'>tools</span> of the trade and have relevant <span class='underline tooltip' title='HTML, CSS/Sass, PHP, Javascript'>programming</span> experience as well.
		</p>
		<p>
			Resume: <a href='resume' class='tooltip' title='PDF version below'>rayuen.com/resume</a><br>
			Portfolio: <a href='work'>rayuen.com</a>
		</p>

		<p>
			As for salary requirements, I am aiming for the 60k range. Please let me know if I can provide any other sort of <span class='underline tooltip' title=\"I can solve a Rubik's Cube\">information</span> or if we can set up a meeting. Thank you!
		</p>
	";

	$other="
		<div class='eight columns add-bottom alpha list-spacing-fix caption'>
			<hr class='add-top'>
			<p><strong>At A Glance</strong></p>

			<li>&#10004; Proficiency with Adobe Creative Suite (<a href='chronicles-of-old-new-york'>InDesign</a>, <a href='color-chameleon'>Photoshop</a>, and&nbsp;<a href='100-principles-of-game-design'>Illustrator</a>)</li>
			<li>&#10004; Proficiency in <a href='abriendo-puertas'>HTML and CSS</a></li>
			<li>&#10004; HTML 5 and CSS frameworks (Skeleton, Twitter Boostrap, Foundation)</li>
			<li>&#10004; Experience with print, formats, and print processes</li>
			<li>&#10004; Working knowledge of Flash and Javascript</li>
			<div class='add-bottom'></div>

			<ul class='list-spacing-fix caption'>
			<li>&#10004; Ability to speak, read, and write effectively in <span class='tooltip' title='I AM VERY GOOD'>English</span></li>
			<li>&#10004; Proficiency with computer usage, including email, Internet, and standard software.</li>
			<li>&#10004; Ability to pay strong attention to detail</li>
			<li>&#10004; Ability to prioritize and balance multiple projects simultaneously</li>
			<li>&#10004; Ability to manage time effectively and meet deadlines</li>
			<li>&#10004; Ability to communicate and interact professionally with culturally diverse clients, providers, and staff</li>
			<li>&#10004; Ability to work effectively in a small organization with an emphasis on&nbsp;teamwork</li>
			<li>&#10004; Ability to work legally in the United States</li>
			<li>&#10004; Ability to live in/commute to the San Francisco Bay Area</li>
			</ul>
		</div>

		<div class='four columns add-bottom omega caption list-spacing-fix'>
			<hr class='add-top'>
			<p><strong>Relevant Projects</strong></p>
			<li><a href='darkrai'>Pok&eacute;mon: Rise of Darkrai</a></li>
			<li><a href='abriendo-puertas'>Abriendo Puertas / Opening Doors</a></li>
			<li><a href='sarah-walko-wordpress'>Sarah Walko Wordpress</a></li>
			<li><a href='10th-anniversary'>Pok&eacute;mon 10th Anniversary</a></li>
		</div>
		<div class='clear'></div>


		<div class='four columns add-bottom alpha list-spacing-fix caption'>
			<hr class='add-top'>
			<p class='caption'><strong>Favorite Pok&eacute;mon</strong></p>
			<li>Piplup</li>
			<li>Heracross</li>
			<li>Garchomp</li>
			<li>Combee</li>
			<li>Alakazam</li>
		</div>

		<div class='four columns add-bottom list-spacing-fix caption'>
			<hr class='add-top'>
			<p class='caption'><strong>Fav. One Piece characters</strong></p>
			<li>Nico Robin</li>
			<li>Trafalgar Law</li>
			<li>Sanji</li>
			<li>Franky</li>
		</div>

		<div class='four columns add-bottom list-spacing-fix caption omega'>
			<hr class='add-top'>
			<p class='caption'><strong>Fav. Naruto Characters</strong></p>
			<li>Rock Lee</li>
			<li>Jiraiya</li>
			<li>Neji</li>
			<li>Sasori</li>
			<li>Gaara</li>
		</div>
	";
	$other2="<img src='http://pekandarattyre.files.wordpress.com/2012/06/luffy-1.gif' class='tooltip' alt='GOMU GOMU NOOOOO!' title='GOMU GOMU NO...!' >";


break;

case 'church':
	$jobTitle="PT associate / independent&nbsp;contractor";
	$company="anon";
	$date="June 21, 2014";
	$email='v7g8q-4530327344@job.craigslist.org';
	$originaljobposting="http://sfbay.craigslist.org/sfc/med/4530327344.html";
	$job_details="Popular San Francisco based Marketing, Graphic+ Web Design company is seeking a part time associate/independent contractor to join our team. Our business is broken down into 3: 1/3 Full Service Marketing, 1/3 Graphic Design, 1/3 Website Design. If you are looking for 15-20 hours a week, here we are. This is a multi faceted job where you will need to have the following skills AND experience. <br>
		<br>
		Graphic Design/Web Design:<br>
		<br>
		We work predominantly in Illustrator, Photoshop, InDesign and Wordpress. We also do alot of stuff in Microsoft products too. (Know Powerpoint?) Believe it or not we work on PC...you will need to be able to swing through the air easily on PC Adobe and Microsoft products. This is the creative side to the business, however, you must be able to \"bang\" things out that look beautiful. Logos, business cards, brochures, presentations folders, marketing collateral...you get the picture.  Show me what ya got... (We want to see your website samples, too) Earn extra $$$ if you can work and really know Wordpress.<br>
		<br>
		Marketing/Admin:<br>
		<br>
		You might be required to do follow up calls with press or clients, run errands, come up with marketing ideas for clients (or even our business) go to printers, write a press release, work on FaceBook pages, work on business promotion/loyalty/customer relationship programs...it's never a dull time here and our projects vary from day to day. You must have good technical, writing and people skills...period. <br>
		<br>
		Like Wordpress?<br>
		We definitely need someone who is comfortable designing AND developing sites in Responsive Design.  Our sites are not too complex, but we will want to see what you back ends look like....of your websites that is!<br>
		<br>
		This is a home-based office job and we employ about 6-8 offsite independent contractors. However, this is an on-site PT position for a Jack or Jill of all trades. The office is located in the Castro on the CHURCH MUNI line. <br>
		<br>
		All of our team are super nice people and like working here....You are not going to be super rich here, however, if you are looking for some extra cash in a fun environment with a great team and amazingly nice clients, come apply. You might learn a thing or two as well...<br>
		<br>
		To apply please send the following: <br>
		+ Resume <br>
		+ Design Portfolio link <br>
		+ A little info about your Marketing/Admin experience <br>
		+ Your favorite place you like to hang out.
";

	$copy="
		<p class='add-top'>
			Hi! I saw your posting on Craiglist and it sounded interesting! I am a freelance designer with programming experience looking to take on more work and thought I would pass along my info.
		</p><p>
			I have worked in two small in-house creative departments supporting major brands. They were fast-paced and we worked in many different mediums. Coming from a publishing world in New York, I have an extended print production background. It was after coming here that I was able to focus more on UI/UX.
		</p><p>
		Of the matters relating to Wordpress, I have experience setting up and helping friends get the CMS running on their <a href='sarah-walko-wordpress'>sites</a>. I have a working knowledge of PHP and Wordpress components which I am actively learning more of in hopes of building more dynamic feature-rich sites(programming has quickly become a hobby of mine)! Since learning of responsive design, I am dumb-founded how major brands still have sites that still don't responsive to tablets and phones. Needless to say, I have experience with responsive frameworks and can build one from the <a href='abriend-puertas'>ground up</a> if need be. Feel free to take a look at the code of my sites on <a href='http://www.github.com/raystation' target='_blank'>Github</a>.
		</p>
		<p>
			If you would like to set up a chat, please feel free to get back to me or you can try to find me at the <a href='http://cartoonart.org' target='_blank'>Cartoon Art
			um</a> or a <a href='http://sf.funcheap.com/monthly-drink-draw-knockout/' target='_blank'>Drink and&nbsp;Draw</a>!
		<p>
			Resume: <a href='resume' class='tooltip' title='PDF version below'>rayuen.com/resume</a><br>
			Portfolio: <a href='work'>rayuen.com</a>
		</p>

	";

	break;

	case 'ad101':
		$jobTitle="Mid-level Designer";
		$company="Adworkshop Inc";
		$date="June 21, 2014";
		$logo="https://www.adworkshop.com/sites/all/themes/adworkshop/i/logos/adworkshop-logo-black.svg";
		$originaljobposting="https://www.adworkshop.com/employment/designer";
		$job_details="<p>We are seeking a creative team member with a sharp eye and a deep knowledge of typography, color theory, composition, layout, and visual design and the ability to apply these to projects across mediums. In addition, this candidate should be able to hand-code clean, semantic HTML & CSS. This designer will be accountable for researching, developing and executing design solutions related to information layout and the user experience for both digital and traditional projects and will apply common user-centered design practices and tools to solve complex design problems. He/she will present/execute original and compelling creative concepts with the ability to produce documentation to communicate site design/functionality or best standard practices when required.  The ideal candidate will have commercial experience designing large-scale content rich sites, complex workflows, and framework-level interactions. He/she will be comfortable using web analytics data to inform and defend design decisions and will evangelize design principles internally.</p>

			<p>We are looking for a person that enjoys working in a team environment and having fun while contributing to a variety of projects for various clients. We offer competitive salaries, excellent benefits and an ownership culture that keeps us cutting edge and growing. If you meet the criteria outlined then we want to hear from you. Apply today!</p>
						<hr>
			<ul>Some of the things you'll do:</ul>
			<li>Graphic design, interactive design and front-end website development</li>
			<li>Translate wireframes into user-friendly design comps and turn designs into functional prototypes using HTML, CSS</li>
			<li>Translate business requirements into elegant, innovative and intuitive design solutions, balancing user needs with business goals and technological constraints</li>
			<li>Work closely with teams to ensure that design specifications are correctly implemented and, as required, to integrate prototypes within CMS frameworks under tight deadlines</li>
			<li>Help establish and reinforce consistent interaction design patterns across platforms</li>
			<li>Organize and architect content/features/functionality for new and existing websites and applications</li>
			<li>Create detailed, organized, and readable documentation including concept models, use cases, personas, site maps, user/task flows, wireframes, and functional specifications</li>
			</ul>
			<hr>
			<ul>Some of the things you'll need:</ul>
			<li>5+ years designing experiences across mediums and device platforms</li>
			<li>Strong portfolio demonstrating both online and dynamic printed projects</li>
			<li>Ability to develop simple and elegant design approaches to complex design problems</li>
			<li>Strong comfort level and flexibility with an organic and iterative design process through wireframing and prototyping</li>
			<li>Knowledge of capabilities/limitations of current web technologies such as responsive HTML5, CSS3 and JQuery</li>
			<li>Hand crafted prototypes via semantic HTML & CSS</li>
			<li>Ability to collaborate actively as part of a multi-disciplinary team</li>
			<li>Ability to clearly communicate ideas and vision to team members and clients</li>
			<li>Self-motivation and the ability to take direction well</li>
			<li>Ability to manage multiple projects from start to finish</li>
			<li>Proficiency in Adobe CS suite and Mac/PC platform</li>
			</ul>

			";

		$copy="
			<p class='add-top'>
				Hi! I saw your posting and it sounded interesting! I am a designer/illustrator with programming experience. I am looking for a place where I can continue to hone my UI/UX chops while also drawing from my varied work experience.
			</p><p>
				My <a href='resume'>resume</a> will reveal my extensive production experience as well as more recent experiences with illustration, digital and programming. I have first-hand knowledge of building responsive websites from the ground up using HTML, CSS, JQuery and PHP as well as familiarity with the <span class='underline tooltip' title='Wordpress, Bootstrap, Foundation, Skeleton'>popular frameworks</span>.
			</p><p>
				If you would like to set up a chat, please feel free to get back to me or you can try to find me at the <a href='http://cartoonart.org' target='_blank'>Cartoon Art
				Museum</a> or a <a href='http://sf.funcheap.com/monthly-drink-draw-knockout/' target='_blank'>Drink and&nbsp;Draw</a>!
			<p>
				Resume: <a href='resume' class='tooltip' title='PDF version below'>rayuen.com/resume</a><br>
				Portfolio: <a href='work'>rayuen.com</a>
			</p>

		";

		break;

		case 'QTpi':
		$jobTitle="Graphic Designer";
		$company="Tea Collection";
		$email="jobs@teacollection.com";
		$date="July 2, 2014";
		$logo="http://s.tea-global.net/mas_assets/theme/tea_collection/images/logo-new.png";

		$originaljobposting="http://www.coroflot.com/jobs/56674/Graphic-Designer";

		$job_details="
		<h6>Position Title: Graphic Designer </h6>
		<p>Reports to: Design Director </p>
			<p>Department: Brand Creative </p>
		<hr>
		<h6>About Us: </h6>
		<p>Tea Brand Creative is a talented team of graphic designers, copywriters, producers and marketers working together to bring Tea to life using stories, images and campaigns that connect and resonate with our customers. Our goal is to excited and inspire at every touch point. From the communication with our customers and site experience to our retailers, and catalog/direct mail promotions we strive to treat every customer interaction as a way to tell the story of Tea. We go there! </p>
		<hr>
		<h6>The role: </h6>
		<p>The Graphic Designer will create, execute and maintain Tea marketing materials ranging from web marketing (email, site updates, social), promotions, packaging, in-store collateral, and seasonal marketing campaigns that resonates with our customers, makes people believe in the brand, and also makes them take action. </p>
		<hr>
		<h6>Essential Duties and Responsibilities: </h6>
		<li>Use established templates to create email campaigns and update banner ads. Help to create new email templates. </li>
		<li>Work to improve website design, to increase conversion and brand awareness.</li>
		<li>Update website with seasonal imagery/content and maintain look and feel across platform. </li>
		<li>Update B2B website with seasonal product imagery, content and tools. </li>
		<li>Update social media platforms such as Facebook, Twitter, Pinterest, and the Tea blog. </li>
		<li>Update seasonal product packaging (i.e., hangtags, size stickers). </li>
		<li>Design in-Store collateral. </li>
		<li>Work with internal departments (Merchandising and Sales) to provide posters and sales collateral in time for seasonal trade shows/</li>events.
		<li>Assist team during studio photo shoots (i.e., prepping products, renting equipment, propping etc.). </li>
		<li>Assist Graphic Design Manager with catalog production. </li>
		<li>Fulfill online image requests. </li>
		<hr>
		<h6>Qualifications:</h6>
		<li>5+ years’ work experience in a graphic design position, product/fashion based company a plus </li>
		<li>Great sense of design, fashion and meticulous attention to detail. </li>
		<li>Proficiency with HTML, CSS, Adobe Illustrator, Photoshop, Acrobat, and Microsoft Office </li>
		<li>Studio/hand skills: confidence working with blade, ruler and glue for clean mock-ups and comping of presentation materials </li>
		<li>Takes great pride in the designs produced and takes ownership of projects. </li>
		<li>Proactive, detail-oriented and deadline-driven: willing to do whatever it takes and spend whatever time it takes to meet deadlines. </li>
		<li>Able to handle multiple projects at once in a fast-paced environment while being extremely productive and timely. </li>
		<li>Strong interpersonal and communication skills: able to take direction but ask the right questions in order to get the job done correctly and on time. </li>
		<li>Consummate team player who loves to learn. </li>
		<hr>
		<h6>Expectations for All Employees: </h6>
		<li>Supports the organization’s mission, vision, and values by exhibiting the following behaviors: excellence and competence, collaboration, innovation, respect, personalization, commitment to our community, and accountability and ownership.</li>
		";

		$copy="
		<p class='add-top'>
			Hi! I saw your posting and wanted to pass along my information. I'm a designer/illustrator with some web design skills. I am looking for a fun cool place where I can continue to hone my UI/UX and web design skills while also drawing from my wide range of skills.
		</p><p>
			My <a href='resume'>resume</a> will reveal my extensive production experience as well as more recent experiences with illustration, digital and programming. I have over 8+ years of experience working in branding and production supporting marketing, licensing, and publishing initiatives.
		</p>
		";

		$project1=array("museyon-guides","Museyon Guides", "Design and layout of 300+ page travel books, not unlike catalogues!");
		$project2=array("abriendo-puertas","Abriendo Puertas", "Development of website. Hand-written HTML/CSS, skills which can be used for  email templates.");
		$project3=array("pokemon","The Pok&eacute;mon Company", "Overall support of all internal departments with creative needs. I would suggest checking out the Feature Shop and the Licensing Show.");

		$sample_works = "
			<p>I have linked to three samples of my work which I think will directly address some of the things you are looking for in this position.</p>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project1[0]."'><img class='scale-with-grid' src='img/".$project1[0]."/thumb.svg'>".$project1[1].".</a> ".$project1[2]."</div>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project2[0]."'><img class='scale-with-grid' src='img/".$project2[0]."/thumb.jpg'>".$project2[1].".</a> ".$project2[2]."</div>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project3[0]."'><img class='scale-with-grid' src='img/".$project3[0]."/thumb.svg'>".$project3[1].".</a> ".$project3[2]."</div>

			<div class='clear'></div>
			<p>Please feel contact me with any questions and to take a look at the rest of my <a href='work'>work</a> and my <a href='resume'>resume</a>. </p>
			";

		break;

case 'ad101':
		$jobTitle="Mid-level Designer";
		$company="Adworkshop Inc";
		$date="June 21, 2014";
		$logo="https://www.adworkshop.com/sites/all/themes/adworkshop/i/logos/adworkshop-logo-black.svg";
		$originaljobposting="https://www.adworkshop.com/employment/designer";
		$job_details="<p>We are seeking a creative team member with a sharp eye and a deep knowledge of typography, color theory, composition, layout, and visual design and the ability to apply these to projects across mediums. In addition, this candidate should be able to hand-code clean, semantic HTML & CSS. This designer will be accountable for researching, developing and executing design solutions related to information layout and the user experience for both digital and traditional projects and will apply common user-centered design practices and tools to solve complex design problems. He/she will present/execute original and compelling creative concepts with the ability to produce documentation to communicate site design/functionality or best standard practices when required.  The ideal candidate will have commercial experience designing large-scale content rich sites, complex workflows, and framework-level interactions. He/she will be comfortable using web analytics data to inform and defend design decisions and will evangelize design principles internally.</p>

			<p>We are looking for a person that enjoys working in a team environment and having fun while contributing to a variety of projects for various clients. We offer competitive salaries, excellent benefits and an ownership culture that keeps us cutting edge and growing. If you meet the criteria outlined then we want to hear from you. Apply today!</p>
						<hr>
			<ul>Some of the things you'll do:</ul>
			<li>Graphic design, interactive design and front-end website development</li>
			<li>Translate wireframes into user-friendly design comps and turn designs into functional prototypes using HTML, CSS</li>
			<li>Translate business requirements into elegant, innovative and intuitive design solutions, balancing user needs with business goals and technological constraints</li>
			<li>Work closely with teams to ensure that design specifications are correctly implemented and, as required, to integrate prototypes within CMS frameworks under tight deadlines</li>
			<li>Help establish and reinforce consistent interaction design patterns across platforms</li>
			<li>Organize and architect content/features/functionality for new and existing websites and applications</li>
			<li>Create detailed, organized, and readable documentation including concept models, use cases, personas, site maps, user/task flows, wireframes, and functional specifications</li>
			</ul>
			<hr>
			<ul>Some of the things you'll need:</ul>
			<li>5+ years designing experiences across mediums and device platforms</li>
			<li>Strong portfolio demonstrating both online and dynamic printed projects</li>
			<li>Ability to develop simple and elegant design approaches to complex design problems</li>
			<li>Strong comfort level and flexibility with an organic and iterative design process through wireframing and prototyping</li>
			<li>Knowledge of capabilities/limitations of current web technologies such as responsive HTML5, CSS3 and JQuery</li>
			<li>Hand crafted prototypes via semantic HTML & CSS</li>
			<li>Ability to collaborate actively as part of a multi-disciplinary team</li>
			<li>Ability to clearly communicate ideas and vision to team members and clients</li>
			<li>Self-motivation and the ability to take direction well</li>
			<li>Ability to manage multiple projects from start to finish</li>
			<li>Proficiency in Adobe CS suite and Mac/PC platform</li>
			</ul>

			";

		$copy="
			<p class='add-top'>
				Hi! I saw your posting and it sounded interesting! I am a designer/illustrator with programming experience. I am looking for a place where I can continue to hone my UI/UX chops while also drawing from my varied work experience.
			</p><p>
				My <a href='resume'>resume</a> will reveal my extensive production experience as well as more recent experiences with illustration, digital and programming. I have first-hand knowledge of building responsive websites from the ground up using HTML, CSS, JQuery and PHP as well as familiarity with the <span class='underline tooltip' title='Wordpress, Bootstrap, Foundation, Skeleton'>popular frameworks</span>.
			</p><p>
				If you would like to set up a chat, please feel free to get back to me or you can try to find me at the <a href='http://cartoonart.org' target='_blank'>Cartoon Art
				Museum</a> or a <a href='http://sf.funcheap.com/monthly-drink-draw-knockout/' target='_blank'>Drink and&nbsp;Draw</a>!
			<p>
				Resume: <a href='resume' class='tooltip' title='PDF version below'>rayuen.com/resume</a><br>
				Portfolio: <a href='work'>rayuen.com</a>
			</p>

		";


		break;

		case 'cas-1':
		$jobTitle="Graphic Designer";
		$company="California Academy of Sciences";
		$date="July 3, 2014";
		$logo="http://www.coroflot.com/user_files/job_employer_logos/442008_aI8WzpdQM6gSU5XlFAjCVuJA_.jpg";

		$originaljobposting="http://www.coroflot.com/jobs/56706/Graphic-Designer";

		$job_details="
		<h6>POSITION SUMMARY: </h6>

		<p>The Graphic Designer works with the Creative team in the design and production of Academy print materials and creation of graphic imagery. This is an opportunity for a talented and exacting designer to join an in-house design department of a forward-looking San Francisco institution. The Graphic Designer reports to the Creative Director.</p>

		<hr>
		<h6>ESSENTIAL DUTIES AND RESPONSIBILITIES:</h6>

		<li>Design or assist in the design of Academy print materials, which may include brochures, invitations, programs, posters, stickers, signs, invitations, ads, and wordmarks</li>
		<li>Design material for digital formats including web banners and online promotions</li>
		<li>Prepare files for print production</li>
		<li>Create illustrations for icons or graphics</li>
		<li>Retouch and manipulate photographic images</li>
		<li>Design and produce in-house signage</li>
		<li>Follow Academy identity and design guidelines for all work</li>
		<li>Follow all Academy safety regulations</li>
		<li>Other duties as assigned</li>

		<hr>
		<h6>QUALIFICATIONS:</h6>

		<p>To perform this job successfully, an individual must be able to perform each essential duty satisfactorily. The requirements listed below are representative of the knowledge, skill, and/or ability required. Reasonable accommodations may be made to enable individuals with disabilities to perform the essential functions.</p>

		<hr>
		<h6>EDUCATION and/or EXPERIENCE:</h6>

		<p>The ideal candidate will possess a combination of the following education and/or equivalent experience:</p>

		<li>B.A. degree in design or related field</li>
		<li>2-4 years of experience in a professional design situation</li>

		<hr>
		<h6>KNOWLEDGE, SKILLS AND ABILITIES:</h6>

		<li>Proficiency in Adobe Creative Suite, specifically Indesign, Photoshop and Illustrator</li>
		<li>Have excellent understanding of and facility with typography</li>
		<li>Able to manipulate and retouch photographs</li>
		<li>Ability to create vector illustrations</li>
		<li>Excellent computer skills in preparing work for a variety of production outputs</li>
		<li>Understand how to design within a brand or format</li>
		<li>Knowledge of production for print and web</li>

		<hr>
		<h6>THE IDEAL CANDIDATE WILL:</h6>

		<li>Be very organized, responsible and resourceful</li>
		<li>Be a team player with good interpersonal skills</li>
		<li>Be able to work on multiple projects at once</li>
		<li>Be very detail-oriented and work well in a fast-paced deadline-driven environment</li>
		<li>Be able to take direction and seek help when needed</li>
		<li>Have a refined modern design sensibility</li>
		<li>Have a sense of humor</li>
		<li>Be aligned with the mission of the Academy</li>


		<p>LANGUAGE SKILLS: Ability to read and interpret documents such as safety rules, operating and maintenance instructions, and procedure manuals. Ability to write routine reports and correspondence. Ability to speak effectively before groups or individuals.
		</p>


		<p>PHYSICAL DEMANDS & WORK ENVIRONMENT: The physical demands and work environment described here are representative of those that must be met by an employee to successfully perform the essential functions of this job. Reasonable accommodations may be made to enable individuals with disabilities to perform the essential functions. While performing the duties of this job, the employee is frequently required to stand, sit, walk, and reach with hands and arms, and talk or hear. Must be able to lift 25 lbs. Must be able to perform repetitive motions 50% of the time.</p>


		<hr>
		<h6>APPLICATION INSTRUCTIONS: </h6>

		<p>Please submit your cover letter and resume online at http://calacademy.snaphire.com. Note that the recruitment timeline for positions vary and depend on many factors, so it is impossible to accurately predict when a position will close. We appreciate your patience during this process. No phone calls please.</p>

		<p>The California Academy of Sciences is an Equal Opportunity Employer and welcomes applications from individuals who will contribute to its diversity.</p>

		<p>The California Academy of Sciences is a non-smoking facility. Smoking is also prohibited in Golden Gate Park.</p>
";

		$copy="
		<p class='add-top'>
			Hi! I saw your posting and wanted to pass along my information. I'm a designer/illustrator with extensive in-house experience. I am looking for a design position in a fun place and nothing sounds more fun to me than a learning institution with an aquarium and a&nbsp;rainforest!
		</p><p>
			My <a href='resume'>resume</a> will reveal my extensive production experience as well as more recent experiences with illustration, digital and programming. I have over 8+ years of experience working in branding and production supporting marketing, licensing, and publishing initiatives.
		</p>
		";

		$project1=array("pokemon","The Pok&eacute;mon Company", "Overall support of all internal departments with creative needs. All artwork flowed through our department and we had to figure out how to get it created.");
		$project2=array("project-animore","Project Animore", "Game concept. Vector illustrations! For UI and artwork.");
		$project3=array("museyon-guides","Museyon Guides", "Art direction and production for 300+ page travel books.");

		$sample_works = "
			<p>I have linked to three samples of my work which I think will directly address some of the things you are looking for in this position.</p>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project1[0]."'><img class='scale-with-grid' src='img/".$project1[0]."/thumb.svg'>".$project1[1].".</a> ".$project1[2]."</div>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project2[0]."'><img class='scale-with-grid' src='img/".$project2[0]."/thumb.jpg'>".$project2[1].".</a> ".$project2[2]."</div>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project3[0]."'><img class='scale-with-grid' src='img/".$project3[0]."/thumb.svg'>".$project3[1].".</a> ".$project3[2]."</div>

			<div class='clear'></div>
			<p>Please feel contact me with any questions and to take a look at the rest of my <a href='work'>work</a> and my <a href='resume'>resume</a>. </p>
		";

		break;

		case 'cm-2':
		$jobTitle="Book Designer";
		$company="Callisto Media";
		$date="July 3, 2014";
		$email="jobs@callistomedia.com";
		$logo="http://www.coroflot.com/user_files/job_employer_logos/0_sfcZ3EcR5a7fBnY7xRizo6JJl.png";

		$originaljobposting="http://www.coroflot.com/jobs/56701/Book-Designer";

		$job_details="
		<h6>Responsibilities</h6>
		<li>Report to the Creative Director and collaborate closely with Design and Editorial colleagues</li>
		<li>Create book designs to conform to company-defined objectives</li>
		<li>Produce cover mechanicals and print-ready files</li>
		<li>Specify and manage acquisition of stock photography</li>
		<li>Create and adapt interior design templates and review composed pages</li>
		<li>Adhere to demanding design schedules</li>
		<li>Assist in e-book design and production </li>
		<li>Provide support to Creative Director on additional production, design, and administrative tasks</li>

		<h6>Requirements</h6>
		<li>At least 3 years book design experience, preferably in Trade publishing</li>
		<li>Strong conceptual thinking and design proficiency with great attention to detail</li>
		<li>Extensive knowledge of typography and proper typesetting conventions</li>
		<li>Solid book production and pre-press skills, with knowledge of latest software and technologies</li>
		<li>Excellent verbal, written, and interpersonal skills</li>
		<li>Superior organizational skills with ability to multi-task, prioritize assignments, and meet tight deadlines</li>
		<li>Ability to take initiative while also working collaboratively with Design and Editorial colleagues</li>
		<li>Adaptability in a fast-paced and dynamic startup environment</li>
		<li>Expert proficiency in Photoshop, Illustrator, and InDesign</li>
		<li>Bachelor’s degree in graphic design or equivalent education and experience</li>

		<p>Callisto Media offers a competitive salary, full benefits, stock options, 401K, and a friendly working environment. This is a full-time, onsite position at our office in Berkeley, California. Please submit a resume, digital samples of your work or your online portfolio, salary requirements, and a cover letter describing why you are an ideal candidate.
		</p>
";

		$copy="
		<p class='add-top'>
			Hi! I saw your posting and wanted to pass along my information. I'm a designer/illustrator with extensive in-house design experience. I am looking for a design position in a fun place and learn more about the future of publishing!
		</p><p>
			My <a href='resume'>resume</a> will reveal my extensive production experience as well as more recent experiences with illustration, digital and programming. I have over 8+ years of experience working in branding and production supporting marketing, licensing, and publishing initiatives.
		</p>
		";

		$project1=array("museyon-guides","Museyon Guides", "Art direction and production for 300+ page travel books. Took books from conception to finish.");
		$project2=array("pokemon","The Pok&eacute;mon Company", "Overall support of all internal departments with creative needs. All artwork flowed through our department and we had to figure out how to get it created.");
		$project3=array("project-animore","Project Animore", "Game concept. Vector illustrations! For UI and artwork.");

		$sample_works = "
			<p>I have linked to three samples of my work which I think will directly address some of the things you are looking for in this position.</p>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project1[0]."'><img class='scale-with-grid' src='img/".$project1[0]."/thumb.svg'>".$project1[1].".</a> ".$project1[2]."</div>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project2[0]."'><img class='scale-with-grid' src='img/".$project2[0]."/thumb.svg'>".$project2[1].".</a> ".$project2[2]."</div>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project3[0]."'><img class='scale-with-grid' src='img/".$project3[0]."/thumb.jpg'>".$project3[1].".</a> ".$project3[2]."</div>

			<div class='clear'></div>
			<p>Please feel contact me with any questions and to take a look at the rest of my <a href='work'>work</a> and my <a href='resume'>resume</a>. </p>
		";

		break;

		case 'docusign':
		$originaljobposting="https://www.docusign.com/company/careers?jvi=ownaZfwM,Job";
		$logo;
		$jobTitle="Designer/Jr. Art Director";
		$company="Docusign";
		$date="July 9, 2014";
		$email;


		$job_details="

		<h3 class='center'>Designer/Jr. Art Director</h3>
		<h6 class='center'>Marketing | San Francisco, CA</h6>
		<p>DocuSign is the industry leader for eSignatures and digital transaction management. We bring delightful experiences to millions of people every day and our worldwide network continues to grow by leaps and bounds. Are you interested in joining a fun and tech savvy company? Would you like to receive random hugs from people who have benefited from using your product? Can you work in a fast paced, deadline and results driven atmosphere? Do you want to collaborate with an amazing group of peers who’ll inspire you in new ways every day? If so, we would like to meet you. We’re looking for Designer/Junior Art Director to join our small, tight-knit, in-house creative team in San Francisco, California.
		</p>
		<p>As a Designer/Junior Art Director you will work on producing amazing visual experiences, managing competing timelines, organizing design assets, and contributing to the creative pool of ideas. Our candidate should be able to create cutting-edge designs and explain their thought process to non-creative. They should have outstanding visual design skills and advanced knowledge of Photoshop, Illustrator and InDesign.
		</p>
		<hr>
		<h6>Responsibilities </h6>
		<li>Simultaneously design everything from animated banners to full-blown web experiences within short timelines and often on the same day</li>
		<li>Work collaboratively with other creative professionals to create cohesive visual messaging and set consistently higher standards in design across the DocuSign brand</li>
		<li>Create visual branding for field events, including guidelines, templates and final artwork</li>
		<li>Appreciate feedback (both giving and receiving) and seek it out in reviews with peers and stakeholders</li>
		<li>Ability to design for different audiences – B2B by title and industry, a mobile audience, and B2C with the Consumer</li>
		<li>Listen to the feedback and excel at balancing multiple inputs when arriving at final designs and iterations</li>
		<li>Keep track of all requests in a project management and planning tool</li>
		<hr>
		<h6>Qualifications </h6>
		<li>An easy-going, organized and professional personality that is always looking for ways to improve</li>
		<li>3+ years experience designing for graphics for large scale events</li>
		<li>Must have solid print experience and working with print vendors to proof and quality check materials</li>
		<li>Advanced knowledge and technical proficiency with the Adobe Creative Suite</li>
		<li>Experience creating landing pages, banner ads, email designs and other direct response materials</li>
		<li>Mobile browser design experience a nice-to-have</li>
		<li>Knowledge of user-centered design principles, web design best practices, visual trends and emerging web technologies</li>
		<li>Other coding skills considered a plus</li>
		<li>Excellent organization, communication, interpersonal, and time management skills</li>
		<li>Strong attention to detail</li>
		<li>BA/BFA in Graphic Design or an equivalent Arts degree required</li>
		<li>Knowledge of Eventbrite or other event management tools required</li>
		<li>Goal-oriented and solution focused professionals only. This is a 24/7 work environment and the ideal candidate must be willing to work at any hour of the day or over weekends and holidays.</li>
		<p>Along with your resume and cover letter, please submit a link to your portfolio or work samples</p>
		";

		$copy="
		<p class='add-top'>
			Hello! I saw your posting and wanted to get in touch. I'm a designer/illustrator with programming experience. I am looking for a position in a place where I can be a collaborative member to a team and to continue to learn more on the digital side.
		</p><p>
			My <a href='resume'>resume</a> will reveal my extensive production experience, as well as more recent experiences with illustration and programming. I have over 8+ years of experience working in branding and production supporting marketing, licensing, and publishing initiatives.
		";

		$project1=array("pokemon","The Pok&eacute;mon Company", "Overall support of all internal departments with creative needs. Fast-paced environment and we worked to bring projects from outside vendors in-house.");
		$project2=array("abriendo-puertas","Abriendo Puertas", "Design and hand-code of responsive informational website for non-profit.");
		$project3=array("the3","The 3", "Trivia game where I developed the UI and overall flow of the game.");

		$sample_works = "
			<p>I have linked to three samples of my work which I think will directly address some of the things you are looking for in this position.</p>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project1[0]."'><img class='scale-with-grid' src='img/".$project1[0]."/thumb.svg'>".$project1[1].".</a> ".$project1[2]."</div>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project2[0]."'><img class='scale-with-grid' src='img/".$project2[0]."/thumb.jpg'>".$project2[1].".</a> ".$project2[2]."</div>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project3[0]."'><img class='scale-with-grid' src='img/".$project3[0]."/thumb.svg'>".$project3[1].".</a> ".$project3[2]."</div>

			<div class='clear'></div>
			<p>Please feel contact me with any questions and to take a look at the rest of my <a href='work'>work</a> and my <a href='resume'>resume</a>. </p>
		";

		$other="
		ps. While most of my work in the past years have been focused on children's brands or children's related properties and may seem a bit \"childish\", I can reassure you that I can work in a more clean and \"professional\" style! I just haven't had the opportunity in a while!
		";

		break;

		case 'opentable':
		$originaljobposting="http://www.opentable.com/careers/#alljobs?nl=1&jvi=osebZfwA,Job&jvs=Indeed&jvk=Job";
		$logo="http://www.opentable.com/about/images/logos/opentable-hr-color.svg";
		$jobTitle="Contract Brand Experience Designer";
		$company="Opentable";
		$date="July 9, 2014";
		$email;

		$job_details="
		<h3 class='center add-top'>Contract Brand Experience Designer</h3>
		<h3 class='center'>Experience Design | San Francisco, CA</h3>
		<hr><h6>About Our Role</h6>
		<p>OpenTable is seeking a contract designer to work as part of our Brand Experience team in building, developing and executing our new brand vision. You’ll be concepting and designing for print, digital and environmental communications that influence the way people discover, reserve and experience restaurants across North America and beyond.
		</p>
		<p>Designers at OpenTable understand that the behavior of products and services is part of designing for how people will interact with them. They have strong information visualization skills, care about all the details of design both on and off the screen, have a desire to put things in the world that have a meaningful impact on people's lives and thrive in a collaborative environment that values the team.
		</p>
		<hr><h6>About Us</h6>
		<p>OpenTable is the world's leading provider of online restaurant reservations, seating approximately 12 million diners per month via online bookings across 28,000 restaurants. The OpenTable network connects restaurants and diners, helping diners discover and book the perfect table and helping restaurants deliver personalized hospitality to keep guests coming back. In addition to the company's website and mobile apps, OpenTable powers online reservations for nearly 600 partners, including many of the Internet's most popular global and local brands. Headquartered in San Francisco, California, we have team members in the United States, Canada, Germany, Japan, Mexico and the UK. OpenTable also owns and operates toptable, the leading consumer destination site for restaurant reservations in the UK.
		</p><hr><h6>About You</h6>
		<li>Human-centered: Your designs respond to the needs and motivations of real people. You understand human centered design philosophy and are comfortable going out into the world for inspiration.</li>
		<li>Communication skills: You communicate visually and can express your ideas with skill and grace whether standing at a whiteboard, drawing on a napkin, or presenting on screen. You see visual design as a language and can explain what your design decisions are meant to communicate.</li>
		<li>Collaboration: You demonstrate a strong, collaborative ethos and have the ability to inspire and facilitate collaboration with others.</li>
		<li>Prototyping skills: You understand that building proofs of concept and iterating helps you and others explore fail and learn quickly. You work at varying levels of fidelity and are always interested in trying new tools and methods.</li>
		<li>You have an exceptional portfolio featuring examples of communication design work and a link to your personal website or web portfolio.</li>
		<li>At least 3 years of experience in a related position, designing for digital experiences.</li>
		<li>Working knowledge of HTML, CSS and the technologies that you’re designing for.</li>
		<li>Expert Adobe skills.</li>
		<li>Pixel-perfect attention to detail.</li>
		<li>The ability to think about high-level product vision, you understand constraints and you contribute to a fantastic design experience.</li>
		<li>Comfort trying new things with a tendency to ask for forgiveness rather than ask for permission.</li>
		<li>Possess a healthy sense of humor.</li>
		";

		$copy="
		<p class='add-top'>
			Hey! You guys are an app on my phone! In that case I need to send my information along! I am a designer/illustrator with programming experience. I am looking for a fun job where I can continute to learn and to contribute my unique skills to a collaborative team.</p><p>
			I used to work at <a href='pokemon'>Pok&eacute;mon</a> on creative team and part of that duty was branding. Our first role was implementing rules from our Japanese overlords, but the other part of that role was imagining how people interacted with our brand.
		";

		$project1=array("pokemon","The Pok&eacute;mon Company", "Overall support of all internal departments with creative needs. Fast-paced environment and we worked to bring projects from outside vendors in-house.");
		$project2=array("abriendo-puertas","Abriendo Puertas", "Design and hand-code of responsive informational website for non-profit.");
		$project3=array("the3","The 3", "Trivia game where I developed the UI and overall flow of the game.");

		$sample_works = "
			<p>I have linked to three samples of my work which I think will directly address some of the things you are looking for in this position.</p>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project1[0]."'><img class='scale-with-grid' src='img/".$project1[0]."/thumb.svg'>".$project1[1].".</a> ".$project1[2]."</div>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project2[0]."'><img class='scale-with-grid' src='img/".$project2[0]."/thumb.jpg'>".$project2[1].".</a> ".$project2[2]."</div>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project3[0]."'><img class='scale-with-grid' src='img/".$project3[0]."/thumb.svg'>".$project3[1].".</a> ".$project3[2]."</div>

			<div class='clear'></div>
			<p>Please feel contact me with any questions and to take a look at the rest of my <a href='work'>work</a> and my <a href='resume'>resume</a>. </p>
		";

		break;

		case 'anyperk':
		$originaljobposting="http://www.indeed.com/viewjob?jk=4e588f8bd2da4858&tk=18se0pj841d7271o&from=recommendedjobs";
		$logo="http://media.glassdoor.com/sqll/693529/anyperk-squarelogo-1380243933805.png";
		$jobTitle="Designer";
		$company="Anyperk";
		$date="July 9, 2014";
		$email="jobs@anyperk.com";

		$job_details;

		$copy="
		<p class='add-top'>
		Hello, I saw your posting and wanted to pass along my information. I am a graphic designer with programming experience. I am looking for a fun place where I can continue to hone my creative skills while also learning new ones.
		";

		$project1=array("pokemon","The Pok&eacute;mon Company", "Overall support of all internal departments with creative needs. Fast-paced environment where we worked to bring projects from outside vendors in-house. Take a look at the Toy Fair trade booth!");
		$project2=array("abriendo-puertas","Abriendo Puertas", "Design and hand-code of responsive informational website for non-profit.");
		$project3=array("the3","The 3", "Trivia game where I developed the UI and overall flow of the game.");

		$sample_works = "
			<p>I have linked to three samples of my work which I think will directly address some of the things you are looking for in this position. They may seem 'kiddy' but this was the nature of the work...meaning this isn't all I am capable of.</p>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project1[0]."'><img class='scale-with-grid' src='img/".$project1[0]."/thumb.svg'>".$project1[1].".</a> ".$project1[2]."</div>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project2[0]."'><img class='scale-with-grid' src='img/".$project2[0]."/thumb.jpg'>".$project2[1].".</a> ".$project2[2]."</div>

			<div class='four columns add-bottom alpha caption' ><hr><a href='".$project3[0]."'><img class='scale-with-grid' src='img/".$project3[0]."/thumb.svg'>".$project3[1].".</a> ".$project3[2]."</div>

			<div class='clear'></div>
			<p>Please feel contact me with any questions and to take a look at the rest of my <a href='work'>work</a> and my <a href='resume'>resume</a>. </p>
		";

		break;

		case 'airbnb-production':
		$originaljobposting="https://www.airbnb.com/jobs/departments/position/2276?gh_src=r5qfbo";
		$logo="https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Airbnb_Logo_B%C3%A9lo.svg/250px-Airbnb_Logo_B%C3%A9lo.svg.png";
		$jobTitle="Production Designer";
		$company="Airbnb";
		$date="July 28, 2014";
		$email;

		$job_details="

			<h6 class='center add-top'>Responsibilities</h6>

				<li>Assist the Product Design team in implementing precise visual design.</li>
				<li>Supply graphics across many different mediums: web, iOS, Android and print.</li>
				<li>Work with developers to ensure implementation is to specification.</li>
				<li>Create guides in different formats that help the team ship the highest level of detail.</li>
				<li>Maintain asset libraries for reusable, systematic design.</li>
				<li>Curate content when needed: screenshot narratives, personas in photography, etc.</li>

			<h6 class='center add-top'>Requirements</h6>

				<li>A diverse portfolio that exhibits excellent use of typography, color, imagery, information architecture and attention to detail.</li>
				<li>Experience designing for mobile devices.</li>
				<li>Full knowledge of the Adobe Creative Suite.</li>
				<li>Knowledge of front end markup: HTML/CSS/JQuery.</li>
				<li>Familiarity with GitHub.</li>
				<li>Familiarity with JIRA - managing a ticket queue is required.</li>
				<li>Proficiency with Apple hardware and software.</li>

			<h6 class='center add-top'>Bonus Skills</h6>

				<li>Strong sketching skills</li>
				<li>Information design skills</li>
				<li>BFA/MFA or equivalent industry experience</li>
				<li>Icon design</li>


		";

		$copy="
			<p class='add-top'>
			Hello, I saw your posting and wanted to pass along my information. I am a graphic designer and illustrator with programming experience. I am looking for a fun place where I can continue to hone my creative skills while also learning new ones. Career-wise, I would like to acquire more skills relating to front-end dev and UI positions, so I think this position would put me in a good place to be exposed to that sort of thing.
			</p><p>

			I have many years of print production experience and more recently some web production experience. My portfolio will not be as diverse as others being print-based, but I am a very fast learner and have great ideas as evidenced by my recent experiments into unlocking the secrets of PHP and JS.

			</p><p>I have linked to three samples of my work which I think will directly address some of the things you are looking for in this position.</p>
		";

		$project3=array("path"=>"pokemon","name"=>"The Pok&eacute;mon Company","type"=>"svg");
		$project3["desc"]="Overall support of all internal departments with creative needs. Fast-paced environment where we worked to bring projects from outside vendors in-house.";

		$project1=array("path"=>"abriendo-puertas","name"=>"Abriendo Puertas","type"=>"jpg");
		$project1["desc"]="Design and hand-code of responsive informational website for <span class='nowrap'>non-profit</span>.";

		$project2=array("path"=>"the3","name"=>"The 3", "type"=>"svg");
		$project2["desc"]="Trivia game where I developed the UI and overall flow of the game.";

		break;

		case 'zen':
		$originaljobposting="http://boards.greenhouse.io/zenpayroll/jobs/8623#.U9anxoBdX_r";
		$logo="https://s3.amazonaws.com/prod-heroku/greenhouse_job_boards/logos/000/000/284/resized/zenpayroll-logo-250x120.png";
		$jobTitle="Designer";
		$company="ZenPayroll";
		$date="July 28, 2014";
		$name="David Nguyen";
		$email;

		$job_details="

			<p>ZenPayroll is on a mission to provide delightful, modern payroll to businesses everywhere. We're proud to have built a product that our customers love. Our entire team cares deeply about design, and we are all passionate about creating memorable, delightful experiences that make people smile. Thinking about our users as *people* with feelings, desires and aspirations, is one of the things that makes our product design so unique.</p>

			<p>As a ZenPayroll Designer, you will have the authority and freedom to create detailed graphics, but you can also dramatically influence how users interact with our product and how they should feel. Design is one of the strongest tenets of our company - we believe great design leads to delightful experiences.  Expect to be challenged every day.</p>

			<p>We’re looking for someone who enjoys creating only the most beautiful, pixel-perfect designs. You view design as a craft and you’re always keen to improve. You love getting positive feedback from customers who notice the little details that you spent hours perfecting.</p>

			<h6>At ZenPayroll you will:</h6>

			<li>Be an owner of what you build</li>
			<li>Have full creative control over your projects and help set the visual tone of ZenPayroll</li>
			<li>Interact with small businesses and design beautiful marketing materials</li>
			<li>Be highly involved with a product that processes tens of millions of dollars in payroll monthly</li>
			<li>Understand customer pain points, come up with solutions, and then prototype, iterate, and launch frequently</li>
			<h6>The ideal candidate will:</h6>
			<li>Be able to build what they design</li>
			<li>Rapidly prototype and A/B test designs</li>
			<li>Have expertise in CSS, HTML, Photoshop, and Illustrator</li>
			<li>Have experience in the latest responsive design techniques</li>
			<li>Have strong opinions about visual design</li>
			<li>Have experience creating beautiful infographics, marketing materials, and email designs</li>
			<li>Be able to think creatively and justify concepts and ideas to team members</li>
			<li>Present concepts clearly and influence team members cross-functionally</li>
			<li>Know common user interface design patterns</li>
			<li>Pay great attention to detail. \"Pixel perfect isn't an ideal, it is a requirement\"</li>
			<li>Desire to work in a small, collaborative environment</li>
			<li>Be passionate about crafting only the best experiences</li>
			<li>Have a sense of humor</li>

			<h6>Bonus Qualities:</h6>

			<li>Strong understanding of typography</li>
			<li>Javascript knowledge</li>
			<li>Great portfolio of infographics, iconography, or illustration work</li>
			<li>Ability to surprise us with your recent work/projects. We love surprises.</li>


		";
		$copy="
			<p class='add-top'>
				Hello, I saw your posting and wanted to pass along my information. I am a graphic designer with programming experience. I am looking for a fun place where I can continue to hone my creative skills, develop new skills and stay on top of new trends. Career-wise, I would like to acquire more skills relating to front-end dev and UI positions, so I think this position would put me in a good place to be exposed to that sort of thing.
			</p><p>I have linked to three samples of my work which I think will directly address some of the things you are looking for in this position.</p>
		";

		$project1=array("path"=>"project-animore","name"=>"Project Animore","type"=>"jpg");
		$project1["desc"]="Unrealized game concept where I worked on wireframing, artwork, UI, game concept and design.";

		$project2=array("path"=>"the3","name"=>"The 3", "type"=>"svg");
		$project2["desc"]="Apple App Store trivia game where I worked on wireframing, UI, trivia, game concept and design.";

		$project3=array("path"=>"100-principles-of-game-design","name"=>"100 Principles of Game Design","type"=>"jpg");
		$project3["desc"]="Vector illustrations for a book published by Peachpit Publishing.";
		// $rubiks=true;
		// $monkey=true;

		$followup='
			<hr class="caption">
			<div class="space-page">
				<p class="remove-bottom">August 5, 2014</p>
				<h5 class="add-bottom">Phone Call Followup</h5>
				<p class="add-bottom">David,<br>I pulled together some examples of cleaner and more modern stuff. I took it to mean less decorative/ornamental, colorful and cluttered. The big gap in my portfolio is lack of clean digital works, where I have lots of clean print works.</p>

				<h5>Equinox Fitness Clubs</h5>
				<p>This was a mailer that was sent to a limited audience living in affluent neighborhoods surrounding our more "suburban" gyms.</p>
				<a href="img/zen/EQX-b-cov-1.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/EQX-b-cov-1.jpg"></a>
				<p>The brochure cover was printed on thick glossy black cardstock with the logo and tagline embossed. The back flap folded into itself protecting the pages inside during transit.</p>

				<div class="six columns alpha">
					<a href="img/zen/EQX-b-back-1.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/EQX-b-back-1.jpg"></a>
				</div>

				<div class="six columns omega">
					<a href="img/zen/EQX-b-back-2.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/EQX-b-back-2.jpg"></a>
				</div>

				<p>The interior highlighted distinguishing aspects of gym, along with sexy photos of trainers and gyms. </p>

				<div class="six columns alpha">
					<a href="img/zen/EQX-b-int-1.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/EQX-b-int-1.jpg"></a>
				</div>

				<div class="six columns omega">
					<a href="img/zen/EQX-b-int-2.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/EQX-b-int-2.jpg"></a>
				</div>

				<p>This was a general mailer that was sent out during the holidays to current members. It included free passes and shop specials to get people into the spirit of giving (please excuse the condition of the mailer, it has been handled by quite a few people).</p>

				<p>The origami-inspired packaging mimicked a gift that opened to contain a square booklet. This photo does not show the clear circular sticker that was used to keep the packaging sealed.</p>

				<a href="img/zen/EQX-gift-1.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/EQX-gift-1.jpg"></a>

				<div class="six columns alpha">
					<a href="img/zen/EQX-gift-2.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/EQX-gift-2.jpg"></a>
				</div>

				<div class="six columns omega">
					<a href="img/zen/EQX-gift-3.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/EQX-gift-3.jpg"></a>
				</div>

				<a href="img/zen/EQX-gift-4.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/EQX-gift-4.jpg"></a>

				<div class="six columns alpha">
					<a href="img/zen/EQX-gift-5.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/EQX-gift-5.jpg"></a>
				</div>

				<div class="six columns omega">
					<a href="img/zen/EQX-gift-6.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/EQX-gift-6.jpg"></a>
				</div>
				<div class="clear"></div>


				<h5>Museyon Guides</h5>

				<p>I included <a href="museyon-guides">Museyon Guides</a> again because I think my work there, in terms of modern and clean design, is very relevant and hope you can take a second look.</p>

				<p>I oversaw the design, layout and prepress for about 8 books. I worked on the "Chronicles" series and two spin-off books. I established the design of the Chronicles series from the first book and was able to experiment with different designs for the <span class="nobreak">spin-off</span>&nbsp;books.</p>


				<p>This is <a href="chronicles-of-old-new-boston">Chronicles of Old Boston</a>.</p>

				<a href="img/chronicles-of-old-boston/cover.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/chronicles-of-old-boston/cover.jpg"></a>

				<p>I implemented this design system from the first Chronicles book and have been perfected it through six books.</p>

				<div class="six columns alpha">
					<a href="img/chronicles-of-old-boston/01.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/chronicles-of-old-boston/01.jpg"></a>
				</div>

				<div class="six columns omega">
					<a href="img/chronicles-of-old-boston/02.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/chronicles-of-old-boston/02.jpg"></a>
				</div>

				<div class="six columns alpha">
					<a href="img/chronicles-of-old-boston/04.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/chronicles-of-old-boston/04.jpg"></a>
				</div>

				<div class="six columns omega">
					<a href="img/chronicles-of-old-boston/06.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/chronicles-of-old-boston/06.jpg"></a>
				</div>


				<p>This is <a href="city-style">City Style</a>. This design was probably the boldest step we took in terms of brand style. It was a deliberate decision given the material. Each chapter had unique magazine-like photo spreads with bold typography and lines to anchor everything.</p>

				<a href="img/city-style/forward.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/city-style/forward.jpg"></a>

				<div class="six columns alpha">
					<a href="img/city-style/ny.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/city-style/ny.jpg"></a>
				</div>

				<div class="six columns omega">
					<a href="img/city-style/ny1.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/city-style/ny1.jpg"></a>
				</div>

				<div class="six columns alpha">
					<a href="img/city-style/toc.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/city-style/toc.jpg"></a>
				</div>

				<div class="six columns omega">
					<a href="img/city-style/j3.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/city-style/j3.jpg"></a>
				</div>


				<p>This was a brochure I created to be distributed at a publishing convention. The full-color 10-page brochure was printed on matte paper and was <a href="nobreak">saddle-stitched</a>.</p>

				<a href="img/zen/Brochure_051210-1.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/Brochure_051210-1.jpg"></a>

				<p>The most current books were given two page spreads and a smattering of delectable photos from the book. The photos were of various sizes, so I spent some time arranging and scaling them to fit the page width.</p>

				<div class="six columns alpha">
					<a href="img/zen/Brochure_051210-2.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/Brochure_051210-2.jpg"></a>
					<a href="img/zen/Brochure_051210-5.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/Brochure_051210-5.jpg"></a>
				</div>

				<div class="six columns omega">
					<a href="img/zen/Brochure_051210-4.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/Brochure_051210-4.jpg"></a>
					<a href="img/zen/Brochure_051210-7.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/Brochure_051210-7.jpg"></a>
				</div>
				<div class="clear"></div>



				<h5>idibon</h5>
				<p>The guys over at <a href="http://www.idibon.com">idibon</a> have a custom built Wordpress site they use as a blog and informational site. While I did not build this theme, I did help them tweak the HTML/CSS afterwards and create site graphics. The people who built the site did not the <span class="nobreak">&ldquo;pixel-perfect&rdquo;</span> level of attention that so many job postings are searching for nowadays.</p>

				<a href="img/zen/idibon1.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/idibon1.jpg"></a>

				<p>I helped them craft their product page to help people understand what it is they do as well as fix color and spacing issues on their <a href="http://idibon.com/about/">bios</a>&nbsp;page.</p>

				<div class="six columns alpha">
					<a href="img/zen/idibon2.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/idibon2.jpg"></a>
				</div>

				<div class="six columns omega">
					<a href="img/zen/idibon3.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/zen/idibon3.jpg"></a>
				</div>

				<p>As an NPL startup, they have a lot of interesting things to say about language, so they like to share fun things on their blog. They get me to help with infographics sometimes. Fun observations, like the decline of the usage of the word love in song titles to common themes people name racehorses with.</p>

				<a href="img/idibon/graphs_Percentage_hq.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/idibon/graphs_Percentage_hq.jpg"></a>
				<a href="img/idibon/powerhouse-language_v.png" data-lightbox="zen"><img class="scale-with-grid" src="img/idibon/powerhouse-language_v.png"></a>
				<a href="img/idibon/derby2-01.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/idibon/derby2-01.jpg"></a>
				<a href="img/idibon/bball_observed_hq.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/idibon/bball_observed_hq.jpg"></a>

				<h5>Wedding Invite</h5>
				<p>I worked with a Chinese couple to develop their wedding invites. They did not want a traditional Chinese invite so I helped them make a simple bilingual invite. I worked with a letterpresser to get these produced. </p>
				<a href="img/chrichard/Chrichard-invite1.png" data-lightbox="zen"><img class="scale-with-grid" src="img/chrichard/Chrichard-invite1.png"></a>


				<p>I do understand your concerns and I hope that this helps convince you that I can design in other styles given the opportunity! Please let me know if you still have doubts.</p>
				<p>Ray</p>

			</div>
		';


		break;

		case 'dena-4':
		$originaljobposting="https://www.linkedin.com/jobs2/view/17656623?trk=job_view_similar_jobs";
		$logo="https://media.licdn.com/media/p/6/005/06c/3f2/0ea81b5.png";
		$jobTitle="Graphic Designer - Mobile";
		$company="DeNA";
		$date="July 28, 2014";
		$name="Anna Lam";
		$email;

		$job_details="

			<p>The AWESOME Graphic Designer will work in a team to produce a broad range of marketing collateral to promote games across a variety of media outlets.</p>

			<h6>Responsibilities:</h6>

				<li>Produce game logos, key art, and icons based on marketing direction using assets created by game development teams.</li>
				<li>Create promotional graphics incorporating screen captures from the games to engage App Store consumers.</li>
				<li>Produce digital banners based on established game assets and guidelines for pre and post-launch marketing activities across multiple platforms (iOS, Android).</li>
				<li>Partner with internal and external business partners in a timely and professional manner to move creative initiatives forward.</li>
				<li>Research, share, and demonstrate graphic design best practices while also being open to learning what works best within the mobile space.</li>
				<li>Produce other marketing assets and collateral as needed.</li>

			<h6>Qualifications:</h6>
				<li>5+ years graphic design experience producing consumer-facing marketing assets.</li>
				<li>Expert command of digital media design including (but not limited to) logo, icon and banner creation</li>
				<li>Mobile or Video game industry experience preferred</li>
				<li>Expert command of Adobe software, especially Photoshop and Illustrator.</li>
				<li>Excellent compositional, color, and typographical skills.</li>
				<li>Collaborative-minded, able to professionally give and take direction.</li>
				<li>Prolific individual contributor possessing high quality standards of work.</li>
				<li>Offer specialist support to design team in their daily work and through workshops.</li>
				<li>Ability to work closely and consult regularly with all relevant department graphic design needs (Product Marketing, User Acquisition, Corporate etc.)</li>
				<li>Ability to manage multiple, quick turn-around projects simultaneously</li>
				<li>Highly creative, high organizational skills, with keen attention to detail.</li>
				<li>Excellent written and oral communication skills.</li>
				<li>Bachelor’s degree in graphic design/visual communications.</li>


		";

		$copy="
			<p class='add-top'>
				Hello, I saw your posting and wanted to get in touch. I love the gaming space and the people that work in it so when I saw a position at your company, I wanted to pass along my info. I am a graphic designer and illustrator who recently just left a gaming startup. I am looking for a fun place where I can continue to hone my creative skills, develop new skills and stay on top of new trends.
			</p><p>Very briefly, I have worked at in-house creative departments, like Pokemon, where I gained a lot of production experience working on a variety of projects from small to large-scale.</p>
			</p><p>I have linked to three samples of my work which I think will directly address some of the things you are looking for in this position.</p>
		";

		$project3=array("path"=>"project-animore","name"=>"Project Animore","type"=>"jpg");
		$project3["desc"]="Unrealized game concept where I worked on wireframing, artwork, UI, game concept and design.";

		$project2=array("path"=>"the3","name"=>"The 3", "type"=>"svg");
		$project2["desc"]="Apple App Store trivia game where I worked on wireframing, UI, trivia, game concept and design.";

		$project1=array("path"=>"pokemon-logos","name"=>"Pok&eacute;mon logos","type"=>"jpg");
		$project1["desc"]="Logos we developed for various movies and television shows at Pokemon.";

		break;

		case 'gymboree':
		$originaljobposting="https://gymboree.tms.hrdepartment.com/jobs/8606/Senior-Web-Creative-DesignerSan-Francisco-CA";
		$logo="https://gymboree.tms.hrdepartment.com/custom/media/GYM/images/2010redesign/colorthemes/orange/gymboree_logo01_orange.gif";
		$jobTitle="Senior Web Creative Designer";
		$company="Gymboree";
		$date="July 28, 2014";
		$name="Adriann Harrington";
		$email;

		$job_details="

			<p>The Gymboree Corporation is the leading specialty children’s retailer with over 1,200 stores domestically and internationally and generating over 1 billion in sales yearly. The Gymboree Corporation continues to grow and expand at a rapid pace but without sacrificing our commitment to quality. Most of all, we pride ourselves in hiring great people with the talent it takes to keep up with our growth. </p>

			<p>The Sr. Web Creative Designer will work closely with the creative team to develop and produce creative for the ecommerce website, email campaigns, deliver HTML coding and online marketing for all brands. This person will work closely with copywriters and business partners to design original layouts on a tight schedule. S/he will work with business and copy teams to clarify objectives, revise creative and ensure accuracy for all projects. The Sr. Web Designer will actively participate and help drive the creative process by presenting well-developed creative solutions to meet the given objectives. This person will be responsible for executing product line updates for all ecommerce website, as well as hand-coding HTML for emails and deploying them in an accurate and timely manner. S/he will work with the email service provider to manage day to day operations while resolving issues and refining processes for launching emails. S/he will be responsible for staying current on industry trends, while keeping all brands at the forefront for site/email design and best practices. The Sr. Web Designer will work across Creative disciplines to drive the best customer experience solution. S/he will be responsible for conducting photo shoots to provide additional imagery for site and email creative. S/he will supervise and develop other designers and contractors while balancing personal workflow and priorities. This person will be responsible for giving effective feedback to drive successful designs and design systems, while inspiring and enhancing the efforts of a creative team.</p>

			<h6>Job Requirements :</h6>
			<p>BFA in Graphic Design, Interaction Design, Visual Studies or other design-related field preferred. 5-7 years of professional experience in web design or multimedia required. The candidate must have strong graphic design, layout, typography, image manipulation, and color correction skills. The candidate must also have relevant experience (ideally in a retail or ecommerce environment) with a lifestyle-oriented “trend-setting” brand. This person must be extremely proficient in Photoshop, Illustrator, Dreamweaver & HTML. This person must also have proficiency in Flash and must be familiar with InDesign. S/he must be detail-oriented, well organized and able to thrive in deadline driven environment. The ideal candidate will have the ability to manage competing, high priority projects while identifying creative solutions quickly. This person will also have the ability to self-direct under ambiguous and changing circumstances. The candidate must have strong written and verbal communications skills. S/he must be willing to be flexible in job duties and take on added responsibility when necessary.</p>

		";

		$copy="
			<p class='add-top'>
				Hello, I saw your posting and wanted to get in touch. I am a designer and and illustrator with some programming experience. I am looking for a job where I can apply my unique skills and experience while staying on the cutting edge for new technologies.
			</p><p>
				I have many years of print production experience working at in-house creative departments. I can also create simple responsive websites with dynamic content with PHP. I can hand-code, so I can debug errors that will occur along the way. This experience will allow me to jump right in and start contributing to a team right away. All this...and more!

			</p><p>Excluding this website as an example, I have linked to three samples which I think will directly address some of the things you are looking for in this position.</p>
		";

		$project3=array("path"=>"project-animore","name"=>"Project Animore","type"=>"jpg");
		$project3["desc"]="Unrealized game concept where I worked on wireframing, artwork, UI, game concept and design.";

		$project2=array("path"=>"the3","name"=>"The 3", "type"=>"svg");
		$project2["desc"]="Apple App Store trivia game where I worked on wireframing, UI, trivia, game concept and design.";

		$project1=array("path"=>"abriendo-puertas","name"=>"ap-od.org","type"=>"jpg");
		$project1["desc"]="Responsive informational site we developed for a non-profit. Hand-coded HTML/CSS on a minimal <span class='nobreak'>front-end</span> framework.";

		break;

		case 'relayrides':
		$originaljobposting="https://relayrides.com/jobs/graphic-design";
		$logo="https://d1pryd867v4xab.cloudfront.net/resources/img/logos/logo_large.v6.png";
		$jobTitle="Graphic Designer";
		$company="RelayRides";
		$date="July 28, 2014";
		$name;
		$email="<a href=\"mailto:jobs@relayrides.com\">jobs@relayrides.com</a>";

		$job_details="

			<p>We’re looking for a talented graphic designer to help us build the world’s largest peer-to-peer car rental marketplace. Here at our SOMA headquarters, you’ll be working as part of our growing design team, across the entirety of our customer experience, creating everything from toolbar icons to digital advertising to product illustrations and back again. You’ll have the chance to work side-by-side with our engineering, marketing, and product design staff, as together we change the way that millions of people travel.</p>

			<h6>Requirements :</h6>
			<li>A stellar visual portfolio, highlighting your attention to the finest details and the elegance of your craft.</li>
			<li>Excellent communication skills. From napkin sketches to high-fidelity comps, you can get your ideas across to a variety of audiences.</li>
			<li>Experience producing superb graphic design for web and/or mobile. Additional experience with print design welcomed.</li>
			<li>Familiarity with current consumer software design trends.</li>
			<li>Comfortable working in an Agile development environment, and the flexibility to iterate frequently in all stages of design and development.</li>
			<li>Experience in copyediting a plus, especially in advertising, marketing, or pr contexts.</li>
			<li>Experience with digital photography and/or video a plus.</li>

			<h6>Responsibilities :</h6>
			<li>Produce production-ready iconography and illustration for web, mobile, and print.</li>
			<li>Collaborate with the rest of our product team to design a holistic user experience that provides elegant, simple interaction, motion, and visuals.</li>
			<li>Refine our visual brand identity, and keep our brand identity consistent across multiple channels.</li>
			<li>Work directly with our marketing & analytics team to craft beautiful, enticing digital marketing campaigns that range from email campaigns to web promotional pages, including direct ads of all sorts.</li>
		";

		$copy="
			<p class='add-top'>
				Hello, I saw your posting and you guys seem very interesting! I am a designer and and illustrator with some programming experience. I have started on the road to being a digital designer and want to be in a team environment where I am honing those skills.
			</p><p>
				I have many years of print production experience working at in-house <a href='pokemon'>creative departments</a>. I just left a <a href='suspended-belief-studios'>gaming startup</a> where I did everything from game design, UI, interaction, game illustration, websites, logo design to content. I love the challenge of solving puzzles and enjoy watching plans come together!

			</p><p>Excluding this website as an example, I have linked to three samples which I think will directly address some of the things you are looking for in this position.</p>
		";

		$project3=array("path"=>"project-animore","name"=>"Project Animore","type"=>"jpg");
		$project3["desc"]="Unrealized game concept where I worked on wireframing, artwork, UI, game concept and design.";

		$project2=array("path"=>"the3","name"=>"The 3", "type"=>"svg");
		$project2["desc"]="Apple App Store trivia game where I worked on wireframing, UI, trivia, game concept and design.";

		$project1=array("path"=>"abriendo-puertas","name"=>"ap-od.org","type"=>"jpg");
		$project1["desc"]="Responsive informational site we developed for a non-profit. Hand-coded HTML/CSS on a minimal <span class='nobreak'>front-end</span> framework.";

		break;

		case 'revolution':
		$originaljobposting="https://rew22.ultipro.com/REV1004/JobBoard/JobDetails.aspx?__ID=*2CD07B4273B83F69&__jbsrc=950BE424-D07B-4CB9-88AC-2FE566617D17";
		$logo="https://rew22.ultipro.com/REV1004/JobBoard/custom/skincustom/logo.png";
		$jobTitle="Graphic Designer";
		$company="Revolution Foods";
		$date="July 28, 2014";
		$name;
		$email;

		$job_details;

		$copy="
			<p class='add-top'>
				Hello, I saw your posting and wanted to pass along my information. I am a graphic designer looking for a home!
			</p><p>
				I have many years of print production experience working at in-house <a href='pokemon'>creative departments</a> servicing brands. I worked on a variety of projects, from small to large-scale.
			</p><p>
				I have linked to three samples which I think will directly address some of the things you are looking for in this position.</p>
		";

		$project1=array("path"=>"pokemon","name"=>"The Pok&eacute;mon Company","type"=>"svg");
		$project1["desc"]="In-house designer. Overall support of all internal departments with creative needs. Fast-paced environment and we worked to bring projects from outside vendors in-house.";

		$project2=array("path"=>"museyon-guides","name"=>"Museyon Guides","type"=>"svg");
		$project2["desc"]="Freelance book designer. Design and layout of books, from conception to press.";

		$project3=array("path"=>"the3","name"=>"The 3", "type"=>"svg");
		$project3["desc"]="Apple App Store trivia game where I worked on wireframing, UI, trivia, game concept and&nbsp;design.";


		break;

		case 'medical-1':
		$originaljobposting="http://hire.jobvite.com/CompanyJobs/Careers.aspx?k=Job&c=q4a9Vfw2&j=oeeGYfwQ&s=Indeed";
		$logo="http://hire.jobvite.com/logo/973_onemed_logo.png";
		$jobTitle="Graphic Designer";
		$company="One Medical Group";
		$date="July 28, 2014";
		$name;
		$email;

		$job_details;

		$copy="
			<p class='add-top'>
				Hello, I saw your posting and wanted to pass along my information. I am a graphic designer looking for a home!
			</p><p>
				I have many years of print production experience working at in-house <a href='pokemon'>creative departments</a> servicing brands. I worked on a variety of projects, from small to large-scale.
			</p><p>
				I have linked to three samples which I think will directly address some of the things you are looking for in this position.</p>
		";

		$project1=array("path"=>"pokemon","name"=>"The Pok&eacute;mon Company","type"=>"svg");
		$project1["desc"]="In-house designer. Overall support of all internal departments with creative needs. Fast-paced environment and we worked to bring projects from outside vendors in-house.";

		$project2=array("path"=>"museyon-guides","name"=>"Museyon Guides","type"=>"svg");
		$project2["desc"]="Freelance book designer. Design and layout of books, from conception to press.";

		$project3=array("path"=>"the3","name"=>"The 3", "type"=>"svg");
		$project3["desc"]="Apple App Store trivia game where I worked on wireframing, UI, trivia, game concept and&nbsp;design.";


		break;

		case 'cal-science':
		$originaljobposting="http://calacademy.snaphire.com/jobdetails?jobmc=13152MDBI";
		$logo="http://upload.wikimedia.org/wikipedia/fr/6/6d/California_Academy_of_Sciences_-_Logo.png";
		$jobTitle="Graphic Designer";
		$company="California Academy of Sciences";
		$date="July 29, 2014";
		$name;
		$email;

		$job_details="
			<p>The California Academy of Sciences is looking for a unique and talented User Experience/Interaction Designer to join the Digital Engagement team.  In this role, the Interaction Designer will create integrated interactive design experiences across onsite and online applications on a wide range of platforms.  Using text, images, videos, audio, animations, and other digital and visual effects, they may work on projects such as Internet sites, mobile solutions, museum exhibit interactives, online learning materials, and other interactive applications.</p>

			<p>Reporting to the Associate Director of Digital Engagement, the Interaction Designer will help to continuously innovate and evolve digital interactive experiences.  The role will be an essential part of the Digital Engagement team working closely with producers, developers and museum stakeholders to create dynamic, engaging experiences to support the Academy goals.  The ideal candidate must present a strong portfolio of innovative and engaging designs.</p>
			<h6>ESSENTIAL DUTIES AND RESPONSIBILITIES</h6>
			<li>Responsible for and deliver on all phases of the design process</li>
			<li>Partner with stakeholders to internalize and translate business goals into concept briefs</li>
			<li>Create designs and experiences to ensure that it is visually intuitive and impactful, meets brand guidelines, and exhibits all of the best practices for presenting content to the targeted audience</li>
			<li>Evolve and work within design systems and guidelines to ensure consistency, uniformity, and high level of usability across websites, apps, and products</li>
			<li>Brainstorm, research, wire-frame, design and refine user experiences - all within specified product requirements and deadlines</li>
			<li>Deliver on responsive design and present content across multiple viewports, devices, and platforms</li>
			<li>Use metrics and frequent user research data to influence design</li>
			<li>Design and deliver interaction flows, screen mockups, and wireframes to high-fidelity HTML prototypes</li>
			<li>Architect and perform usability sessions with key stakeholders and users to get feedback to evolve design concepts and user interfaces</li>
			<li>Work closely with a cross-functional team that includes project managers, developers, other designers and content teams</li>
			<li>Contribute positively to design discussions visually, verbally, and in writing</li>
			<li>Evangelize design principles to stakeholders</li>
			<li>Follow all Academy safety regulations</li>
			<li>Other duties as assigned</li>
			<h6>QUALIFICATIONS</h6>
			<p>To perform this job successfully, an individual must be able to perform each essential duty satisfactorily. The requirements listed below are representative of the knowledge, skill, and/or ability required. Reasonable accommodations may be made to enable individuals with disabilities to perform the essential functions.</p>
			<h6>PROJECT PORTFOLIO: </h6>
			<p>A strong portfolio that demonstrates thoughtful, innovative problem solving with a focus on insights into human behavior and illustrating a diverse set of technologies is a must.  Applicants will be asked to provide a portfolio of sample project deliverables, web sites, mobile sites, apps, etc. Please be sure to include a URL to your portfolio or your application will not be considered.</p>
			<h6>EDUCATION and/or EXPERIENCE: <br>
			The ideal candidate will possess a combination of the following education and/or equivalent experience:
			</h6>

			<li>B.A./B.S. in Human-Computer Interaction Design, Web Design, Graphic Design, or related field</li>
			<li>Three or more years of interactive design experience on paid assignments</li>
			<h6>KNOWLEDGE, SKILLS AND ABILITIES:</h6>
			<li>Exceptional user interface and experience design skills and understanding of user-centered design disciplines and principles</li>
			<li>Ability to quickly grasp and distill highly complex user design issues into clean, understandable solutions</li>
			<li>Candidate must flourish in a fast-paced, interactive, dynamic and dead-line driven culture and environment</li>
			<li>Ability to use frameworks and toolkits to quickly test functional design solutions</li>
			<li>Experience with design industry tools and technologies such as, but not limited to: Adobe Suite, Drupal, PHP, HTML/HTML5, CSS, Sass, Javascript, jQuery, etc.</li>
			<li>Personable and diplomatic team player with the ability to collaborate and communicate well</li>
			<li>Strong interest in emergent technologies</li>
			<li>Familiarity with Agile Project Management methodology a plus</li>
			<li>A passion for science, technology, and science education is a strong plus</li>
		";

		$copy="
			<p class='add-top'>
				Hello, I saw your posting and wanted to pass along my information. I am very interested in working for an institution of learning! I am a graphic designer and illustrator with programming experience. I am looking for a fun position in education, where I can apply my unique skillset while also learning new things along the way.
			</p><p>
				I have many years of print production experience working at <span class='nobreak'>in-house</span> <a href='pokemon'>creative departments</a> servicing brands. I also just recently left a gaming startup where I was essentially the creative department. The experience I gained there, partnered with my passion for gaming, will inform the interaction decisions I make—hopefully into engaging and fun experiences. One of the big challenges with interaction is knowing when to \"get out of the way\" and let the content speak for itself; it's a constant measuring of minimal vs. ornamental.
			</p><p>
				I have linked to three samples which I think will directly address some of the things you are looking for in this position.</p>
		";

		$project1=array("path"=>"the3","name"=>"The3","type"=>"svg");
		$project1["desc"]="Apple App Store trivia game where I worked on wireframing, UI, trivia, game concept and&nbsp;design.";

		$project2=array("path"=>"project-animore","name"=>"Project Animore","type"=>"jpg");
		$project2["desc"]="Unrealized game concept where I worked on wireframing, artwork, UI, game concept and design.";

		$project3=array("path"=>"abriendo-puertas","name"=>"Abriendo Puertas", "type"=>"jpg");
		$project3["desc"]="Responsive informational site we developed for a non-profit. Hand-coded HTML/CSS on a minimal <span class='nobreak'>front-end</span> framework.";

		break;

 		case 'verticalresponse':
		$originaljobposting="http://www.verticalresponse.com/about/jobs?nl=1&jvi=o7peZfwt%2CJob&jvs=Craigslist#jobs";
		$logo="http://www.verticalresponse.com/sites/all/themes/bootstrap/VRLogoTag.2C.svg";
		$jobTitle="Graphic Web Designer/Front End Web Developer";
		$company="Verticalresponse";
		$date="July 29, 2014";
		$name;
		$email;

		$job_details="
			<p>We are looking for a Designer/Developer who is a result-oriented, proactive, and motivated individual to be a part of our Creative/Web Marketing team. This person is responsible for producing marketing collateral and developing front-end solutions including contributing to and maintaining the VerticalResponse.com corporate website and blog.</p>

			<p>A strong visual eye and a perspective on front and back-end technologies and their impact on the design process is necessary, as are the chops to take a project from concept through completion.</p>
			<h6>RESPONSIBILITIES</h6>
			<li>Design and code web pages with pixel perfect quality in regards to navigational layouts and appearance.</li>
			<li>Design, code, and document projects of various scope.</li>
			<li>Make updates to and maintain Drupal and WordPress websites.</li>
			<li>Design, code, and test responsive HTML emails.</li>
			<li>Work closely with marketing team to coordinate projects and communicate technical issues.</li>
			<li>Debug and troubleshoot layout and scripting issues across a variety of browsers.</li>
			<li>Collaborate on other traditional graphic design/marketing projects.</li>

			<h6>REQUIREMENTS</h6>
			<li>3+years of experience designing and creating consumer websites.</li>
			<li>Ability to create standards-compliant, valid HTML/CSS files by hand from design comps -- must be pixel perfect.</li>
			<li>Proficiency with Adobe Creative Suite, Photoshop or other image editing software.</li>
			<li>Ability to write clean, coherent code and to follow established coding style guidelines.</li>
			<li>Strong development experience in PHP, HTML / HTML5, CSS 3.</li>
			<li>Strong knowledge of JavaScript frameworks (jQuery).</li>
			<li>Experience with WordPress and Drupal CMS a plus.</li>
			<li>Experience with responsive design principles for web sites and HTML emails.</li>
			<li>Self-motivated, ability to work independently and efficiently with a strong attention to detail and accuracy.</li>
			<li>Strong communications and organizational skills with an ability to thrive in a fast-paced production deadline-driven environment.</li>
			<li>Bachelors degree in a related field is highly desired.</li>
			<li>Proof of eligibility to work in the US.</li>

			<p>To be considered for this role, you must: </p>
			<p>Provide a portfolio highlighting examples of developed websites exhibiting your expertise in HTML / HTML5, CSS 3, jQuery, responsive web.</p>
			<p>Be nimble, and ready to work in a fast-paced environment on a small team.</p>
		";

		$copy="
			<p class='add-top'>
				Hello, I saw your posting and the position sounds like just the thing I am currently looking for! I wanted to send along my information because I am an aspiring front-end dev transitioning from a print world.
			</p><p>
				Because I am transitioning doesn't mean I should be overlooked! I am a super-fast learner and a puzzle solver. Between freelance gigs and job-hunting, I picked up the basics of PHP and have been starting to dissect how Wordpress works. <a href='https://github.com/raystation/farnsworth-wp' target='_blank'>Custom</a> themes baby! For a while, my attention was unfocused, and just started looking into a bunch of languages like JS and Ruby, but I've sorta settled into PHP and front-end frameworks (for now). I think working with you guys would give me the perfect excuse to continue my path of learning!
			</p><p>
				I have linked to three samples which I think will directly address some of the things I think you are looking for in this position.</p>
		";

		$sample_works="

			<h5><a href='rayuen.com/abriendo-puertas'>Abriendo Puertas</a></h5>
			<p>Responsive informational site we developed for a non-profit. Hand-coded HTML/CSS on a minimal <span class='nobreak'>front-end</span> framework.</p>
			<h5><a href='http://rayuen.com/projects/ipsum-generator/'>Lorem Ipsum generator</a></h5>
			<p>Recent experiement. Proof of concept right now (so it looks horrible). The program takes a list of words and randomly generates paragraphs of lorem ipsum filler text based on a few parameters.</p>
			<h5><a href='https://github.com/raystation/farnsworth-wp/'>Wordpress for friend</a></h5>
			<p>Making a Wordpress theme from scratch, based on the Foundation front-end framework. Not finished yet, so just runs locally. Only have a link to the souce.</p>

		";

		break;

// <div class='bar-chart'>
// 	<div class='inner tooltip' title='test' style='width:40%;background-color:red'>Illustration</div>
// 	<div class='inner tooltip' title='test' style='width:20%;background-color:yellow'>Programming</div>
// 	<div class='inner tooltip' title='test' style='width:20%;background-color:orange'>Web Design</div>
// 	<div class='inner tooltip' title='test' style='width:20%;background-color:green'>Gaming</div>
// 	<div class='caption add-bottom'>Areas of Exploration</div>
// </div>

case 'experiment':
		$originaljobposting="https://experiment.com/jobs";
		$logo="https://d3t9s8cdqyboc5.cloudfront.net/assets/logo-motion-596724ca10a0f28cbbc37ee954ae9aca.gif";
		$jobTitle="Graphic Designer";
		$company="Experiment";
		$date="August 2, 2014";
		$name;
		$email;

		$job_details="";

		$copy="
			<p class='add-top'>
				Hello, someone passed along the job portrait you <a href='https://medium.com/job-portraits/experiment-is-hiring-a-product-designer-to-change-the-world-of-science-dfa58739c55e' target='_blank'>posted on Medium</a> and my interest is sufficently piqued that I am writing this to you. With long form pieces like this, it gives people the opportunity to inject their imagination and I imagined myself solving interesting problems, experimenting (no <span class='tooltip underline' title='hover over my portrait for a pun'>pun</span> intended there) and learning new things.
			</p><p>
				I am a graphic designer and illustrator with programming experience. Career-wise, I've jumped around a bit—the past four years have been an exploration of illustration, publishing, web design, programming, interaction and game design.
			</p><p>
				I have many years of print production experience working at <span class='nobreak'>in-house</span> <a href='pokemon'>creative departments</a> servicing brands. I also just recently left a gaming startup where I was essentially the creative department.
			</p><p>
				I have linked to three samples which I think will directly address some of the things you are looking for in this position.</p>
		";

		$project1=array("path"=>"the3","name"=>"The3","type"=>"svg");
		$project1["desc"]="Apple App Store trivia game where I worked on wireframing, UI, trivia, game concept and&nbsp;design.";

		$project2=array("path"=>"project-animore","name"=>"Project Animore","type"=>"jpg");
		$project2["desc"]="Unrealized game concept where I worked on wireframing, artwork, UI, game concept and design.";

		$project3=array("path"=>"abriendo-puertas","name"=>"Abriendo Puertas", "type"=>"jpg");
		$project3["desc"]="Responsive informational site we developed for a non-profit. Hand-coded HTML/CSS on a minimal <span class='nobreak'>front-end</span> framework.";

		break;

		case 'heyzap':
		$hiremepage="http://www.rayuen.com/hire-me?id=heyzap";
		$originaljobposting="http://www.heyzap.com/jobs/49";
		$logo="http://heyzap.com/images/navigation/heybar_logo.png";
		$jobTitle="Designer";
		$company="Heyzap";
		$date="August 7, 2014";
		$name;
		$email="jobs@heyzap.com";

		$job_details="
			<h6>About the Role:</h6>
			<p>We are seeking a Designer to make our user experience as delightful as possible. The ideal candidate will have a personal interest in applications, interfaces and a passion for designing developer-focused web/mobile experiences. We are looking for intuition in fundamental design principles and a willingness to engage in a two-way learning process. The Designer will innovate all aspects of Heyzap’s design from dashboards to our front page, to our core ad products. We want to make every pixel smile and put user experience at the top of our agenda.</p>

			<h6>About Us</h6>
			<p>Heyzap is changing the way we discover mobile apps by systematically redesigning mobile advertising from the ground up. Piece by piece, Heyzap has produced the leading SDK that helps thousands of app developers monetize and get discovered. Heyzap works with the largest and most innovative mobile developers like King, Spotify, Supercell, Kabam and PocketGems.</p>

			<p>Our office is in the middle of a new mobile app epicenter in San Francisco’s Financial District. We are backed by some of the best investors in the world including: Union Square Ventures, Chris Dixon, Naval Ravikant, Ashton Kutcher and Qualcomm Ventures.</p>

			<h6>Responsibilities</h6>
			<li>Solve challenging design problems, including complex dashboards.</li>
			<li>Being involved in speccing and executing projects.</li>
			<li>Designing pixel perfect experiences for users.</li>
			<li>Being a master of user interfaces, flow and usability.</li>
			<li>Work closely with the founders and the team to make our product the best gaming app in the world.</li>

			<h6>Requirements:</h6>
			<p>Multi-year experience in the following:</p>
			<li>Expert Skills: Photoshop/sketch.</li>
			<li>Multi-year professional experience as a member of a creative team or agency. (Alternatively, your portfolio blows us away).</li>
			<li>Solid understanding of web standards, web/mobile, and live production practices.</li>
			<li>Super strong creative and visual skills.</li>
			<li>Mesmerizing portfolio of work.</li>
			<li>Pixel-perfect experiences.</li>
			<li>The ability to ship and sail.</li>
			<li>Ability to explain your thinking; strong interpersonal skills; an ability to work independently and with a group.</li>
			<li>Demonstrated ability to develop new approaches to complex design problems and convey ideas into tangible forms.</li>
			<li>Ability to write great call to actions.</li>
			<li>Thought leadership on design principles.</li>
			<li>HTML / CSS (strong bonus points).</li>
			<li>Ability to work with other designers and in a design team.</li>
			<li>Be able to write copy that sings to our users.</li>

			<h6>Bonus Points</h6>
			<li>Experience developing high quality consumer applications.</li>
			<li>Basic Rails knowledge (not required but a bonus nonetheless).</li>
			<li>Bachelor’s Degree in HCI or Interface Design or related degree (self-taught is fine as well).</li>
			<li>Typography, Iconography, Illustration, Animation.</li>
			<li>Being able to make Photoshop or Sketch do unexpected things.</li>
			<li>Industrial design experience / formal training.</li>
			<li>Has an interest in art.</li>
			<li>Ability to manage other designers.</li>
			<li>Can detect a pixel out-of-place from a mile away.</li>
			<li>Likes teaching design theory to engineering and sales.</li>


			<h6>Perks</h6>
			<li>Intelligent, driven team members.</li>
			<li>Product-centric company.</li>
			<li>Learning environment where we encourage people to think from first principles and take the widest responsibility they can handle.</li>
			<li>Founders that care about design and constantly want to upgrade their design.</li>
			<li>Sunny office with lots of natural light.</li>
			<li>Be autonomous and largely self managed.</li>
			<li>Allow your design skills to influence the office design, aesthetic and evolve the company branding.</li>
			<li>Meaningful stock options.</li>
			<li>Whatever hardware you need, the best display, Herman Miller desk and a comfy Aeron chair.</li>
			<li>Medical, vision and dental insurance.</li>
			<li>401(k).</li>
			<li>Book budget and large existing library.</li>
			<li>An exciting and challenging work environment.</li>
			<li>Commuter benefits.</li>
			<li>Free lunches (there is such a thing at Heyzap).</li>
			<li>Fun team events and IMAX trips.</li>
			<li>Free 24 hour fitness gym membership.</li>
			<li>Unlimited whiteboard access.</li>
		";

		$other="
			<div class='four columns list-spacing-fix add-bottom alpha caption'>
				<hr class='add-top'>
				<h5>Currently Playing</strong></h5>
					<ul>
						<li>Disco Zoo</li>
						<li>Red Dead Redemption</li>
						<li>Nimblequest</li>
						<li>X-COM: Enemy Unknown</li>
					</ul>
			</div>

			<div class='four columns list-spacing-fix add-bottom caption'>
				<hr class='add-top'>
				<h5>Inspirations</strong></h5>
					<ul>
						<li>video games</li>
						<li>science fiction</li>
						<li>walking around</li>
						<li>graphic artists</li>
						<li>Hong Kong action films</li>
					</ul>
			</div>

			<div class='four columns list-spacing-fix add-bottom caption omega'>
				<hr class='add-top'>
				<h5>Favorite Games</strong></h5>
					<ul>
						<li>Fallout: New Vegas</li>
						<li>Batman: Arkham City</li>
						<li>Red Dead Redemption</li>
						<li>Tetris</li>
						<li>Final Fantasy 4</li>
					</ul>
			</div>

			<div class='clear'></div>
			";

		$copy="
			<p class='add-top'>
				Hello, I saw your posting and wanted to get in touch because you guys sound awesome. I am a designer/illustrator with some programming experience. I am looking for a fun place to work where I can be part of a team and contribute my unique skill set. Plus, I have always had a life-long passion for gaming!
			</p>
			<p>
				Working at in-house design departments, I have many years of design and production experience. We (the creative and branding team) supported internal departments with various creative needs—including publishing, marketing and licensing initiatives. My working experience is mainly print-based, but I have been expanding in the past two years, delving into web technologies(I am currently going back and forth between PHP and Javascript right&nbsp;now).
			</p>
			<p>
				I linked below to three projects which I believe might be of some&nbsp;interest.
		";

		$rubiks=true;

		$project1=array("path"=>"the3","name"=>"The3","type"=>"svg");
		$project1["desc"]="Apple App Store trivia game where I worked on wireframing, UI, trivia, game concept and&nbsp;design.";

		$project2=array("path"=>"indiginauts","name"=>"Indiginauts","type"=>"jpg");
		$project2["desc"]="Point and click adventure game. I worked on game illustration, UI, game concept and design, and character development.";

		$project3=array("path"=>"museyon-guides","name"=>"Museyon Guides", "type"=>"svg");
		$project3["desc"]="Small publisher that puts out travel guides. I helped them develop design for a new series and also helped them produce the books. ";

		break;

		case 'dropcam':
		$originaljobposting="http://www.indeed.com/viewjob?jk=5c6e855af4f69344&q=web+designer&l=San+Francisco,+CA&tk=18udfv5sv076h0sg&from=ja&alid=3a86d2ec9d8ca6dc&utm_source=jobseeker_emails&utm_medium=email&utm_campaign=job_alerts";
		$logo="https://d2ouawgq7rgimz.cloudfront.net/press/thumb-Dropcam-logo-vert-rev.png";
		$jobTitle="Web Designer";
		$company="Dropcam";
		$date="August 8, 2014";
		$name;
		$email;
		$hiremepage = downcasespace("http://rayuen.com/hire-me?id=$company");

		$job_details="

			<p>Dropcam is seeking a web designer to deliver an informative, engaging and compelling experience on Dropcam.com. You’ll work closely with the marketing team and across the company to tell the Dropcam story and help manage the Dropcam store.</p>

			<h6>RESPONSIBILITIES</h6>
			<li>Own the Dropcam.com store experience from content to functionality working closely with the marketing, product and engineering teams. Build short and medium term strategic plans for the site.</li>
			<li>Define, design and manage the implementation of website features and functionality with technical teams to support business objectives.</li>
			<li>Create and manage execution of seasonal campaigns - Valentines Day, Mother's Day etc - across platforms (web, email, social).</li>
			<li>Be a customer advocate creating a easy and engaging user experience that fits with our brand guidelines and personality.</li>
			<li>Ongoing site optimizations working with data analyst to execute regular A|B tests of different designs.</li>
			<li>Manage all the web assets including banners, videos, images, landing pages and copy.</li>

			<h6>REQUIREMENTS</h6>

			<li>2 - 4 years experience of web design</li>
			<li>Keen eye for design</li>
			<li>Proficiency with HTML, CSS, ability to code your design</li>
			<li>Demonstrated knowledge of website technology and development</li>
			<li>Strong understanding of latest trends in front-end web, responsive design</li>
			<li>Excellent project management skills</li>
			<li>Personality that thrives in a fast-paced, exciting work environment</li>
			<li>High attention to detail</li>
		";

		$copy="
			<p class='add-top'>
				Hello, I saw your posting and wanted to pass along my information. I am a designer/illustrator with some programming experience. I am looking for a place make where I can contribute my creative experience and make a full transition into a web role. After looking over your job posting, I think Dropcam could be a perfect place to do that.
			</p>
			<p>
				I have many years of print experience working in in-house design positions. In the past two years I have tried to immerse myself in everything that a web designer would be doing. I helped my friends build simple websites. i've dived into responsive design and am learning a little programming. Currently I am jumping back and forth between PHP and Javascript and am enjoying the learning experience.
			</p>
			<p>
				I linked below to three projects which I believe might be of some&nbsp;interest.
		";

		$project2=array("path"=>"sarah-walko-wordpress","name"=>"Sarah Walko WP site","type"=>"jpg");
		$project2["desc"]="Wordpress site I helped a friend put together. I am decoding the WP code to figure out how to make my own themes. ";

		$project3=array("path"=>"suspended-belief-studios","name"=>"Suspended Belief Studios","type"=>"jpg");
		$project3["desc"]="Gaming startup I was part of. I worked on game illustrations, UI, game concept and design and character development.";

		$project1=array("path"=>"abriendo-puertas","name"=>"Abriendo Puertas", "type"=>"jpg");
		$project1["desc"]="Responsive informational site we developed for a non-profit. Hand-coded HTML/CSS on a minimal <span class='nobreak'>front-end</span> framework.";

	break;

	case '9999':
		$company="Kabam";
		$jobTitle="Visual Designer";
		$logo="http://www.indeed.com/cmp/_s/logos/f984ad8d5222c019";
		$date="June 4, 2014";
		$originaljobposting="http://www.indeed.com/viewjob?jk=8ce5f60822550da0&q=(graphic+or+design+or+print+or+illustration)&l=san+francisco&tk=18pivv0m706a00an&from=ja&alid=8cb27739bcde7d9d&utm_source=jobseeker_emails&utm_medium=email&utm_campaign=job_alerts";
		$hiremepage = "http://rayuen.com/kabam";

		$copy="
		<p class=\"add-top\">
			Hello! I saw your posting and wanted to get in touch. I am a graphic designer and illustrator with some experience in programming and have over 8+ years of experience in design from both the creative/marketing and production side. I am looking for a position where I can contribute my varied skills and have fun.
		</p>

		<div class='four columns add-bottom alpha'><a class='caption' href='darkrai'><img class='scale-with-grid' src='img/darkrai/thumb.jpg'>The Rise of Darkrai</a></div>

		<div class='four columns add-bottom' ><a class='caption' href='color-chameleon'><img class='scale-with-grid' src='img/color-chameleon/thumb.jpg'>Color Chameleon</a></div>

		<div class='four columns add-bottom omega'><a class='caption' href='abriendo-puertas'><img class='scale-with-grid' src='img/abriendo-puertas/thumb.jpg'>Abriendo Puertas</a></div>

		<div class='clear'></div>
		<p>
			Check out my resume here <a href='resume'>rayuen.com/resume</a> or a PDF version below. <br>
			Check out my portfolio here <a href='work'>rayuen.com/work</a> <br>
		</p>

		<p>
			Please let me know if I can provide any other sort of information or if we can set up a meeting. Thank you!
		</p>
		";

		$other="
		<div class='four columns add-bottom alpha list-spacing-fix caption'>
			<hr class='add-top'>
			<p><strong>Favorite F2P</strong></p>
				<ul>
					<li>Pocket Planes
					<li>Hay Day
					<li>Disco Zoo
					<li>Tiny Tower
					<li>Cityville
				</ul>
		</div>

		<div class='four columns add-bottom list-spacing-fix caption'>
			<hr class='add-top'>
			<p><strong>Currently Playing</strong></p>
				<ul>
					<li>Disco Zoo
					<li>X-COM: Enemy Unknown
					<li>Red Dead Redemption
					<li>2048
					<li>Nimblequest
				</ul>
		</div>

		<div class='four columns add-bottom list-spacing-fix caption omega'>
			<hr class='add-top'>
			<p><strong>Fav. RPG's</strong></p>
				<ul>
					<li>FF6
					<li>Chrono Trigger
					<li>Fallout: New Vegas
					<li>FF4
					<li>Fable
				</ul>
		</div>
		";

		$job_details="
			<h6>Visual Designer</h6>
			<p>Kabam - San Francisco, CA</p>
			<p>Kabam is the leader in the western world for free-to-play core games with 1st and 3rd party published titles available on mobile devices via the Apple Store, Google Play and on the Web via Facebook, Yahoo, Kabam.com and other leading platforms. In 2013 Kabam revenues grew by 100 percent to more than $360 million. Kabam has 800 employees across three continents, with corporate headquarters in San Francisco. The company's investors include Google, Warner Brothers, MGM, SK Telecom, Intel, Canaan Partners, Redpoint Ventures and Pinnacle Ventures. More information about Kabam can be found at www.kabam.com.</p>
			<p>The Visual Designer will be responsible for creating all manner of product marketing and advertising creative for Kabam’s first party studio’s games. </p>
			<hr>
			<h6>WHAT YOU'LL DO:</h6>
			<p>Team: First Party Marketing Art</p>
			<p>The First Party Marketing Art Team is responsible for creating all storefront marketing assets, promotional vehicles and campaigns, banner ad and video/rich media/banner ad creative for User Acquisition, all supported by rigorous performance testing and localization for between 12 and 15 languages. We strive to deliver all work in a timely manner and always adhere to pre-determined schedules. Our function can be summed up as follows: innovate, create, communicate, test, iterate, localize, optimize. Our team also supports the production of campaigns produced by external partners and agencies by contributing to concept development, art/creative direction, feedback, asset support. </p>
			<hr>
			<h6>Day to day:</h6>
			<li>Work with marketing art team to develop and iterate advertising concepts to test on a weekly basis </li>
			<li>Create advertising concepts that can be resized/re-purposed for a multitude of sizes, and a number of delivery platforms (static/animated gif, interactive html 5, video) </li>

			<li>Create meticulous master ad layouts of top-performing creative that will be sent out for resizing, localization, and/or interactive production on a weekly basis </li>

			<li>Create/design brand/product marketing and promotional assets for all storefronts informed by existing brand art style and performance marketing data </li>

			<li>Support Product Marketing, BizDev and Lifecycle/emil/XP teams by handling requests for assets and promotional executions </li>

			<li>Provide feedback and direction for the creation of key art assets produced by external agencies </li>

			<li>Collaborate with video/multimedia artist to generate ideas and storyboards for : 30 and : 15 User Acquisition video ad units</li>
			<li>Maintain and adhere to strict file preparation, file structure and naming convention guidelines </li>
			<li>Prepare all master psd files such that resizing and localization is as streamlined as possible. </li>
			<li>Career Progression: This role is a mid-level position that will be integral to Kabam’s User Acquisition, Product Marketing, BizDev and Lifecycle marketing success</li>
			<hr>
			<h6>Benefits:</h6>
			<li>Full Health, Dental, and Vision; 401k matching; $250 gym reimbursement; $1000 per year educational stipend; daily catered lunches; tons of snacks, drinks, etc. </li>
			<hr>
			<h6>Education:</h6>
			<li>Bachelor’s degree or certificate for Art, Design or other related field or equivalent work experience. </li>
			<hr>
			<h6>Years Experience:</h6>
			5+ years of experience creating and producing both advertising and storefront marketing assets in the mobile games space. </p>
			<hr>
			<h6>MUST Have Experience:</h6>
			<li>Exceptional Adobe CS skills (digital painting/retouching skills a plus) </li>
			<li>Conception/Creation of ad campaigns for mobile games </li>
			<li>Creation of iOS and Google Play launch marketing assets – screenshots, icons, featuring art </li>
			<li>The utmost in familiarity with the above assets’ specs </li>
			<li>A keen eye for color, composition, layout, typography </li>
			<li>Top-notch organizational skills – file management and spec documentation </li>
			<li>Self-motivated creative problem solver </li>
			<li>Excellent interpersonal skills </li>
		";
		$rubiks=true;
		$yayray=true;

		$followup='
			<hr class="caption">
			<div class="space-page">
				<p class="remove-bottom">August 20, 2014</p>
				<h5 class="add-bottom">Interview for third-party visual designer</h5>
				<p class="add-bottom">I\'ve included some things below that may be relevant to the conversation at hand.</p>

				<h5>WIRED magazine</h5>
				<p>Spot illustrations for a Norton advertorial in the September 2014 issue of Wired magazine. Not yet out in newstands, layout not final.</p>

				<a href="img/wired/car.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/wired/car.jpg"></a>
				<a href="img/wired/three.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/wired/three.jpg"></a>

				<h5>Something....darker</h5>

				<a href="img/kabam/hell-fire.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/kabam/hell-fire.jpg"></a>

				<p>I have been trying to make some art works in the style of a Kabam game to gear up for the next Kabam interview. I tried to emulate a workflow that I thought I would be going through here. I\'ve included the original pieces I worked off to show my work process.</p>

				<div class="four columns alpha">
					<a href="img/kabam/perona.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/kabam/perona.jpg"></a>
				</div>
				<div class="four columns">
					<a href="img/kabam/castle.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/kabam/castle.jpg"></a>
				</div>
				<div class="four columns omega">
					<a href="img/kabam/cloud.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/kabam/cloud.jpg"></a>
				</div>
				<div class="clear"></div>

				<h5>Lesconcierges</h5>
				<a href="img/lesconcierges/01.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/lesconcierges/01.jpg"></a>

				<div class="four columns  alpha">
					<a href="img/lesconcierges/08.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/lesconcierges/08.jpg"></a>
				</div>
				<div class="four columns">
					<a href="img/lesconcierges/09.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/lesconcierges/09.jpg"></a>
				</div>
				<div class="four  columns  omega">
					<a href="img/lesconcierges/02.jpg" data-lightbox="zen"><img class="scale-with-grid" src="img/lesconcierges/02.jpg"></a>
				</div>

				<p>I do understand your concerns and I hope that this helps convince you that I can design in other styles given the opportunity! Please let me know if you still have doubts.</p>
				<p>Ray</p>

			</div>';

		break;

	case 'nextlesson':
		$originaljobposting="http://jobs.nextlesson.org/a/jbb/job-details/998594";
		$logo="http://www.nextlesson.org/siteassets/img/prlogo4.png";
		$jobTitle="Graphic Designer";
		$company="Nextlesson";
		$date="August 25, 2014";
		$name="Kaila Carty";
		$email="kaila@nextlesson.org";
		$hiremepage = downcasespace("http://rayuen.com/hire-me?id=$company");

		$job_details="
			<p>NextLesson (nextlesson.org) is an education technology startup focused on helping students prepare for the real world. We work with great teachers to build stellar curriculum for students primarily in the 3rd-8th grades.</p>

			<p>We are ready and eager to better merchandise our product! Specifically, we are in need of a graphic designer who can create a cohesive look for our site, curriculum and brand. For about 75% of the work time you would be creating kid-friendly, illustrative graphics for all our curriculum (including cover images, app icons, characters, etc.). The other 25% of the time you will need to do some corporate branding projects (brochures, flyers, signage). </p>

			<p>This is a big opportunity for someone who want to make their mark at a startup. The only thing we are set on is our logo; everything else is fair game and we encourage you to own it!	</p>
			<p>About you:</p>
			<li>Incredible visual portfolio: Highlights your attention to the finest details and the elegance of your craft.
			<li>Playful style: You have created graphics specifically geared towards kids or have done work that could be considered kid-friendly. We want someone who is excited about getting graphics for students!
			<li>Broad experience: You've created superb graphic design for web and/or mobile. Your graphic work also translates to print (We offer online and paper copies of our curriculum).
			<li>Excellent communication skills: You are comfortable working with and enjoy getting input from other team members
			<li>Social Media Buff: You know what it is and feel confident that you can create pinnable imagery
			<p>Bonus Points for:</p>
			<li>Some experience in UI/UX. This is not one the primary focuses of this role but we find an extra brain on this matter to always be helpful.</li>
			<p>We're a group of smart, driven individuals who also know how to enjoy ourselves and have a good time. We're self-described foodies - we celebrate Pizza Fridays and various team members enjoy bringing treats as afternoon munchies. </p>
		";

		$slider='
			<div class="slick-index">
				<div><img class="scale-with-grid" src="img/wired/car.jpg"></div>
				<div><img class="scale-with-grid" src="img/100-principles-of-game-design/slider.jpg"></div>
				<div><img class="scale-with-grid" src="img/edgeware/slider.jpg"></div>
				<div><img class="scale-with-grid" src="img/lesconcierges/slider.jpg"></div>
				<div><img class="scale-with-grid" src="img/monkey-mo/cover.jpg"></div>
				<div><img class="scale-with-grid" src="img/scavenger-hunt/01-thumb.jpg"></div>
				<div><img class="scale-with-grid" src="img/project-animore/slider.jpg"></div>
				<div><img class="scale-with-grid" src="img/indiginauts/bridge.jpg"></div>
			</div>
		';
		$copy="
			<p class='add-top'>
				Thanks for sending me a note about your startup. I have been interested in moving into education so I am sending my information along. I am a designer and illustrator with some programming experience. I am looking for a place where I can contribute my unique skills, learn new stuff, meet new people and have fun!
			</p>
			<p>
				I have many years of print experience working in in-house design positions. In the past three years I have explored illustration, programming and publishing.
			</p>
			<p>
				I linked to three projects which I believe might be of some&nbsp;interest.
		";

		$project1=array("path"=>"indiginauts","name"=>"Indignauts", "type"=>"jpg");
		$project1["desc"]="Point and click adventure game geared toward tablet devices.";

		$project2=array("path"=>"color-chameleon","name"=>"Color Chameleon","type"=>"jpg");
		$project2["desc"]="Game concept for a runner.";

		$project3=array("path"=>"project-animore","name"=>"Project Animore","type"=>"jpg");
		$project3["desc"]="Unrealized <span class='nobreak'>free-to-play</span> game concept about mixing animal parts&nbsp;up.";


	break;

	case 'google-doodle':
		$originaljobposting="https://www.google.com/about/careers/jobs#!t=jo&jid=/google/creative-lead-doodle-team-1600-amphitheatre-pkwy-mountain-view-ca-2277940017";
		$logo="https://www.wired.com/wp-content/uploads/2015/09/google-logo-1200x630.jpg";
		$jobTitle="Creative Lead, Doodle Team";
		$company="Google / Doodle Team";
		$date="January 24, 2017";
		// $name="";
		$email="";
		$slider="";
		$hiremepage = "http://rayuen.com/google-doodle";
		$resume = "img/ray_yuen_resume-gd.pdf";

		$job_details="As a User Experience (UX) leader, you help define and drive the future of Google design. You identify and set product strategy, envision complex UX ecosystems and inspire teams to push the boundaries of what’s possible. You possess a clear vision of the future of user experience and have the courage to pursue forward-thinking design.

			In this role, you will apply your passion for brand, craft, and design fidelity to guide research and design processes, mentor talented members of your team, and collaborate with leaders of other UX and Engineering teams to create innovative experiences across all of Google’s products.

			The Doodle Team is a fast-paced, highly autonomous environment where passion, craft, and teamwork meet in service of making Google more delightful via our custom homepage logos, experiences inside the Google Search app and more.

			As a Doodle Team Creative Lead, you’ll manage and inspire a team of highly creative, designers, illustrators, and animators to keep finding new ways to surprise, delight, and inform Google’s hundreds of millions of users on the company’s most visible surfaces. Operating at the intersection of art and technology, this role will require deep collaborations with cross-functional team members in product management, engineering, marketing, and others to create world-class illustrations, animations, games, and more.

			Making the world's information universally accessible and useful doesn't stop at the desktop. The Mobile team builds tools to get you the information you need no matter where you are. Android has become the world's most popular mobile ecosystem, powering billions of devices, from smartphones to tablets, watches to TVs and everything in between. Whether adding to the core Android experience, forging new markets for digital content, creating immersive and portable versions of our products or managing relationships with a global community of developers, the Mobile team is giving you Google on the go.

			Responsibilities
			Nurture and manage a talented team of artists..
			Present work to executives and communicate to a variety of stakeholders.
			Collaborate across organizational boundaries to launch complex, innovative projects.
			Balance creative intuition with data for maximum impact.
			Qualifications
			Minimum qualifications:
			10 years of experience producing or directing creative work.

			Preferred qualifications:
			Experience with art direction and/or editorial creative work at a major online or print publication and a general knowledge of how design impacts engineering and vice versa, along with a knack for constructing dynamic designs that are technically practicable.
			Demonstrated enthusiasm for creating in new media and technologies and ability to manage budgets and help define contracts and agreements and ability to thrive in a rapid paced environment on multiple projects.
			Strong skills in one or more of the following: illustration, design, animation, interaction design with a body of work that exudes whimsy and wit and comfort with digital and traditional visual art media.
			Ability to work collaboratively and apply creative feedback in a team environment.
			The ability to manage ambiguity and work autonomously.
			Demonstrated success leading a team and expert communication and interpersonal skills and deep network of outside artists and creatives for potential collaboration & recruitment.
		";

		// $slider='
		// 	<div class="slick-index">
		// 		<div><img class="scale-with-grid" src="img/wired/car.jpg"></div>
		// 		<div><img class="scale-with-grid" src="img/100-principles-of-game-design/slider.jpg"></div>
		// 		<div><img class="scale-with-grid" src="img/edgeware/slider.jpg"></div>
		// 		<div><img class="scale-with-grid" src="img/lesconcierges/slider.jpg"></div>
		// 		<div><img class="scale-with-grid" src="img/monkey-mo/cover.jpg"></div>
		// 		<div><img class="scale-with-grid" src="img/scavenger-hunt/01-thumb.jpg"></div>
		// 		<div><img class="scale-with-grid" src="img/project-animore/slider.jpg"></div>
		// 		<div><img class="scale-with-grid" src="img/indiginauts/bridge.jpg"></div>
		// 	</div>
		// ';


		$copy="
		<p>
			Hi, I'm not certain of all the things that a Google Doodler does, but the idea absolutely fascinates me! I want to continue to pursue a career which allows me to work in the intersection between design and art. At NextLesson, in addition to UI/UX design, I have a proven record of success managing a team to create the artwork on the site. I've linked to a few projects which I believe show a good range of media and solutions.
		</p>
		";

		$other="
		<h5>More Samples</h5>

		<div class='four columns add-bottom alpha caption'>
			<a href='http://darthpickle.com/p/corpse/'><img class='scale-with-grid' src='img/exquisite-corpse/thumb.jpg'>Random Character Maker.</a> A whimsical coding exercise.
		</div>

		<div class='four columns alpha caption'>
			<a href='http://squeakyhsu.com/create-me/'><img class='scale-with-grid' src='img/doodles/avatar-thumb.jpg'>Custom Avatar Maker.</a> Hackday exercise using my artwork.
		</div>

		<div class='four columns alpha caption'>
			<a href='http://rayuen.com/p/nextlesson/brand-guide/characters'><img class='scale-with-grid' src='img/doodles/characters-thumb.jpg'>Characters system.</a> Developed the rules for the characters on the NextLesson site.
		</div>

		<div class='clearfix add-bottom'></div>
		<p>
			I would love♥ to find out more about this opportunity. With 14 years of creative experience, I believe I would be a valuable addition to any team. Please browse the <a href='work'>rest of my work</a> and look at my <a href='resume'>resume</a>. Thanks!<br><br>
			Sincerely, Ray
		</p>

		<hr class='separator'>

		<h5>Bonus</h5>
		<p>I've spread my love of drawing with doodle challenges to my coworkers at Pok&eacute;mon and NextLesson.</p>
		<img class='scale-with-grid' src='img/doodles/doodle-wall-2.jpg' alt='Doodle Wall'>
		<p class='caption'>Facilitated regular doodle practice for all employees and frequent visitors.</p>

		<img class='scale-with-grid' src='img/doodles/doodle-wall-1.jpg' alt='Doodle Wall'>
		<p class='caption'>Close up of cartoon characters drawn from memory.</p>

		<img class='scale-with-grid' src='img/doodles/pokemon-2.jpg' alt='Pokemon From Memory'>
		<p class='caption'>With the popularity of Pokemon Go, it was perfect to revisit this classic challenge.</p>

		";

		$closing=" ";

		$sample_projects_array = array(
			array(
				"path"=>"nextlesson-covers",
				"name"=>"NextLesson Covers",
				"type"=>"jpg",
				"desc"=>"Creation of 2,034 Lesson and Project Covers.",
			),
			array(
				"path"=>"nextlesson-interestid",
				"name"=>"NextLesson InterestID",
				"type"=>"jpg",
				"desc"=>"UI/UX and creation of 3,831 icons.",
			),
			array(
				"path"=>"nextlesson-glossary",
				"name"=>"NextLesson Interactive Glossary",
				"type"=>"jpg",
				"desc" => "Visuals for glossary terms.",
			),
			array(
				"path"=>"indiginauts",
				"name"=>"Indiginauts",
				"type"=>"jpg",
				"desc"=>"Point 'n' click adventure game. Game concept/design, art, and UI.",
			),
			array(
				"path"=>"color-chameleon",
				"name"=>"Color Chameleon",
				"type"=>"jpg",
				"desc"=>"Game concept for a runner.",
			),
			array(
				"path"=>"storymaps",
				"name"=>"StoryMaps",
				"type"=>"jpg",
				"desc"=>"Hand-drawn illustrations for a story building app.",
			),
		);

	break;

case 'duckduckmoose':
		$company="Duck Duck Moose";
		$originaljobposting="http://www.duckduckmoose.com/2d-artist-illustrator/";
		$logo="http://www.duckduckmoose.com/duckduckmoose/wp-content/themes/ddm/images/ddm-logo.png";
		$jobTitle="2D Artist / Illustrator";
		$date="January 25, 2017";
		// $name="";
		$email="careers@duckduckmoose.com";
		$slider="";
		$hiremepage = "http://rayuen.com/hire-me?id=duckduckmoose";
		// $resume = "img/ray_yuen_resume-gd.pdf";

		$job_details="<h6>2D Artist / Illustrator</h6>

			<p>Duck Duck Moose, a wholly-owned subsidiary of Khan Academy, is an award-winning creator of educational children’s applications. We are looking for a talented full-time, in-house 2D Artist to join our Creative Team and focus on the execution of a variety of projects and future products. You will work with a small, collaborative team of engineers, product managers, and designers to create outstanding user experiences. Our ideal candidate will have a deep passion for great design, an outstanding attention to detail, an excellent sense of humor, and a love of games and children’s media.</p>

			<p>Our 2D Artist will be responsible for contributing to various stages of design projects from conceptualization through implementation and create production-ready artwork. You will generate artwork of characters, environments, objects, and interfaces, and ensure the overall quality and consistency of all assets required. Your work will make an impact on families and young children all over the world.</p>

			<h6>Skills and Requirements</h6>
			<li>4+ years of relevant product experience on major releases in a studio, agency, or startup environment
			<li>Expert-level knowledge of the latest Adobe Creative Suite software
			<li>Ability to work collaboratively with the Creative Team, Engineers, and Product Managers to create the future of educational children’s apps
			<li>Strong eye for design and visual storytelling
			<li>Solid foundational 2D art skills using line, light, shadow, and color theory
			<li>Understanding of anatomy, character design, perspective, lighting, and composition
			<li>Ability to work within various and specific styles, including some that may be set by another artist
			<li>Ability to generate pixel-perfect assets as deliverables
			<li>Online portfolio demonstrating a variety of mobile and web projects
			<li>Ability to work locally in our office in San Mateo, CA

			<h6>Bonus Points</h6>
			<li>3D art experience
			<li>Video game concept or art production
			<li>Animation and video production skills
			<li>BFA/MFA in related field or equivalent experience

			<h6>Perks</h6>
			<li>Competitive salary
			<li>Great Health, Dental, Vision Insurance, 401k
			<li>Generous paid time off (PTO)
			<li>A fun, supportive team and flexible work opportunities
			<li>Weekly team lunches
			<li>Fully stocked kitchen
			<li>MacBook and Cintiq 22HD

			<h6>About Duck Duck Moose (A wholly-owned subsidiary of Khan Academy)</h6>
			<p>Duck Duck Moose, an award-winning creator of educational mobile apps for families, is a passionate team of engineers, artists, designers, and educators. Founded in 2008, the company has created 21 top-selling titles and has received 21 Parents’ Choice Awards, 18 Children’s Technology Review Awards, 12 Tech with Kids’ Best Pick App Awards, and a KAPi award for “Best Children’s App” at the International Consumer Electronics Show. Our team includes industry leaders from Disney, IDEO, Teach for America (Teach for All), Siebel Systems, Oracle, Zynga, and successful startups. Duck Duck Moose has joined Khan Academy, a nonprofit with a mission to provide a free, world-class education for anyone, anywhere.</p>

			<p>Please forward your resume and portfolio to careers@duckduckmoose.com.</p>";

		$copy="
		<p>
			Hi, I am a huge fan of Khan Academy! Having just left a great education startup, I wanted to see if there were  similiar opportunities out there when I saw your posting. I want to continue to pursue a career which allows me to work in the intersection between design and art. I've linked to a few projects which I believe show a good range of media and solutions.
		</p>
		";

		$other="";

		$sample_projects_array = array(
			array(
				"path"=>"nextlesson-covers",
				"name"=>"NextLesson Covers",
				"type"=>"jpg",
				"desc"=>"Creation of 2,034 Lesson and Project Covers.",
			),
			array(
				"path"=>"nextlesson-interestid",
				"name"=>"NextLesson InterestID",
				"type"=>"jpg",
				"desc"=>"UI/UX and creation of 3,831 icons.",
			),
			array(
				"path"=>"nextlesson-glossary",
				"name"=>"NextLesson Interactive Glossary",
				"type"=>"jpg",
				"desc" => "Visuals for glossary terms.",
			),
			array(
				"path"=>"indiginauts",
				"name"=>"Indiginauts",
				"type"=>"jpg",
				"desc"=>"Point 'n' click adventure game. Game concept/design, art, and UI.",
			),
			array(
				"path"=>"color-chameleon",
				"name"=>"Color Chameleon",
				"type"=>"jpg",
				"desc"=>"Game concept for a runner.",
			),
			array(
				"path"=>"storymaps",
				"name"=>"StoryMaps",
				"type"=>"jpg",
				"desc"=>"Hand-drawn illustrations for a story building app.",
			),
		);

	break;

case 'ixl-illustration-coordinator':
		$originaljobposting="https://www.ixl.com/company/jobs?jvi=ojtG4fwg&jvs=Indeed";
		$logo="http://grapesforlife.com/wp-content/uploads/2014/08/mzl.pptgpfrl-e1417376137299.png";
		$jobTitle="Illustration Coordinator";
		$company="IXL / Learning";
		$date="January 26, 2017";
		// $name="";
		$email="";
		$slider="";
		$hiremepage = "http://rayuen.com/hire-me?id=ixl-illustration-coordinator";
		// $resume = "img/ray_yuen_resume.pdf";

		$job_details="
		<p>IXL Learning, a leading edtech company with products used by 6 million students worldwide, is seeking an illustration coordinator to oversee the creation of fun and delightful visuals for our educational content. In this role, you will brainstorming creative ideas, iterate with a team of illustrators, and collaborate with our design and engineering teams on technical requirements. We find it immensely satisfying to develop products that impact the lives of millions of students around the globe, and we are eager to have you join our team.</p>

		<h6>RESPONSIBILITIES</h6>

		<li>Brainstorm fun, creative ideas for illustrations
		<li>Collaborate with the curriculum design team to write illustration specifications that meet educational goals
		<li>Effectively communicate specifications to illustrators and iterate with them until all project requirements are satisfied
		<li>Ensure illustrations meet IXL’s aesthetic, educational, and technical requirements
		<li>Collaborate with engineers to determine SVG file formatting guidelines
		<li>Occasionally edit SVG files; no prior experience editing SVGs is necessary, and training will be provided
		<li>Manage and track multiple illustration projects simultaneously
		<li>Successfully deliver high quality illustrations on-time
		<li>Assist in hiring and training contract illustrators
		<li>Pitch in with other UI tasks as needed; collaborate with visual designers to create new UI elements, style guides, and brand guidelines

		<h6>QUALIFICATIONS</h6>
		<li>BA/BS
		<li>Creative mindset with a strong design aesthetic
		<li>Insight into what makes things fun
		<li>Strong communication skills
		<li>Proven track record of excellent project management and strong organizational skills
		<li>Experience with children ages 4-11
		<li>Ability to provide effective feedback to illustrators; good awareness of when to encourage creative freedom and when to provide specific design direction
		<li>Proficiency with Adobe Illustrator and Photoshop
		<li>Understanding of fundamental visual design principles and basic illustration techniques
		<li>Willingness to learn how to edit and process vector files in a text editor and terminal
		<li>Highly self-motivated with a strong attention to detail
		<li>Knowledge of HTML/CSS; additional programming experience is a plus
		<li>Ability to quickly convey ideas through sketches is a plus
		<li>Interest or experience in K-12 math, English language arts, science, or social studies education is a plus
		<li>Experience managing projects with off-site contractors is a plus
		";

		$copy="
		<p>
			Hi! Having just left a great education startup and really enjoying the experience, I wanted to keep exploring this path. I want to continue to pursue a career which allows me to work in the intersection between design and art. With my whimsical nature and years of creative experience, I believe I can be a valuable addition to this team.
		</p>
		<p>
			I've linked to a few projects below which show proven results in illustration and management.
		</p>
		";

		// $closing=" ";

		$sample_projects_array = array(
			array(
				"path"=>"nextlesson-covers",
				"name"=>"NextLesson Covers",
				"type"=>"jpg",
				"desc"=>"Creation of 2,034 Lesson and Project Covers.",
			),
			array(
				"path"=>"nextlesson-interestid",
				"name"=>"NextLesson InterestID",
				"type"=>"jpg",
				"desc"=>"UI/UX and creation of 3,831 icons.",
			),
			array(
				"path"=>"nextlesson-glossary",
				"name"=>"NextLesson Interactive Glossary",
				"type"=>"jpg",
				"desc" => "Visuals for glossary terms.",
			),
			array(
				"path"=>"indiginauts",
				"name"=>"Indiginauts",
				"type"=>"jpg",
				"desc"=>"Point 'n' click adventure game. Game concept/design, art, and UI.",
			),
			array(
				"path"=>"color-chameleon",
				"name"=>"Color Chameleon",
				"type"=>"jpg",
				"desc"=>"Game concept for a runner.",
			),
			array(
				"path"=>"storymaps",
				"name"=>"StoryMaps",
				"type"=>"jpg",
				"desc"=>"Hand-drawn illustrations for a story building app.",
			),
		);

		$other = "
		<hr class='separator'>

		<h5>Bonus</h5>
		<p>I've spread my love of drawing with doodle challenges to my coworkers at Pok&eacute;mon and NextLesson.</p>
		<img class='scale-with-grid' src='img/doodles/doodle-wall-2.jpg' alt='Doodle Wall'>
		<p class='caption'>Facilitated regular doodle practice for all employees and frequent visitors.</p>

		<img class='scale-with-grid' src='img/doodles/doodle-wall-1.jpg' alt='Doodle Wall'>
		<p class='caption'>Close up of cartoon characters drawn from memory.</p>

		<img class='scale-with-grid' src='img/doodles/pokemon-2.jpg' alt='Pokemon From Memory'>
		<p class='caption'>With the popularity of Pokemon Go, it was perfect to revisit this classic challenge.</p>
		";
	break;

	// QUORA - STAFF PRODUCT DESIGNER
	case '12121':
		$originaljobposting="https://www.quora.com/careers/staff_product_designer";
		$logo="https://upload.wikimedia.org/wikipedia/commons/9/91/Quora_logo_2015.svg";
		$jobTitle="Staff Product Designer";
		$company="Quora";
		$date="January 31, 2017";
		// $name="";
		$email="";
		$slider="";
		$hiremepage = "http://rayuen.com/hire-me?id=12121";
		// $resume = "img/ray_yuen_resume.pdf";

		// $job_details = $Parsedown->text("/jobs/quora-staff-product-designer.md");
		$job_details = markdown_convert("jobs/quora-staff-product-designer.md");
		$copy="
		<p>
			Hi! I am writing in regard to the staff product designer position. Having just been let go from an education startup where I had a really positive experience, I would really like to continue exploring places centered on knowledge and learning.
		</p>
		<p>
			I've linked to three projects below which I think will be relevant to this position.
		</p>
		";

		// $closing=" ";

		$sample_projects_array = array(
			array(
				"path"=>"nextlesson-covers",
				"name"=>"NextLesson Covers",
				"type"=>"jpg",
				"desc"=>"Creation of 2,034 Lesson and Project Covers.",
			),
			array(
				"path"=>"nextlesson-interestid",
				"name"=>"NextLesson InterestID",
				"type"=>"jpg",
				"desc"=>"UI/UX and creation of 3,831 icons.",
			),
			array(
				"path"=>"nextlesson-glossary",
				"name"=>"NextLesson Interactive Glossary",
				"type"=>"jpg",
				"desc" => "Visuals for glossary terms.",
			),
		);

		// $other = "";
	break;


	// TWITCH - UI/UX DESIGNER/DEVELOPER
	case 'updownleftright':
		$originaljobposting="https://jobs.lever.co/twitch/97767178-c6df-4fb3-9c9d-97e6bdfd2d10";
		$logo="https://lever-client-logos.s3.amazonaws.com/twitch.png";
		$jobTitle="UI/UX Designer/Developer";
		$company="Twitch";
		$date="January 31, 2017";
		// $name="";
		$email="";
		$slider="";
		$portrait="about-me/star-trek.gif";
		$hiremepage = "http://rayuen.com/hire-me?id=updownleftright";
		// $resume = "img/ray_yuen_resume.pdf";

		$job_details = markdown_convert("jobs/twitch-ui-ux-designer.md");

		$copy="
		<p>Hey there, as an avid video game player for <em>many</em> years and a designer/illustrator wanting to work more into UI/UX design, this opportunity seems really interesting!
		</p>
		<p>With my experience at education startup NextLesson working to build products and UI/UX solutions, I believe I would be a great fit for this position.
		</p>
		<p>I've linked to three projects below which I think will be relevant to this position.
		</p>
		";

		// $closing=" ";
		$slider='
			<div class="sixteen columns">
				<img class="scale-with-grid" src="img/wired/car.jpg">
			</div>
		';

		$sample_projects_array = array(
			array(
				"path"=>"nextlesson-covers",
				"name"=>"NextLesson Covers",
				"type"=>"jpg",
				"desc"=>"Creation of 2,034 Lesson and Project Covers.",
			),
			array(
				"path"=>"nextlesson-interestid",
				"name"=>"NextLesson InterestID",
				"type"=>"jpg",
				"desc"=>"UI/UX and creation of 3,831 icons.",
			),
			array(
				"path"=>"nextlesson-glossary",
				"name"=>"NextLesson Interactive Glossary",
				"type"=>"jpg",
				"desc" => "Visuals for glossary terms.",
			),
		);

		// $other = "";
	break;

	// FACEBOOK - ILLUSTRATOR/DESIGNER - CULTURAL MOMENTS
	case "facebook-illustrator-designer-cultural-moments":
		$short_name = "facebook-illustrator-designer-cultural-moments";
		$originaljobposting="https://www.facebook.com/careers/jobs/a0I1200000JXv61EAD/";
		$company="Facebook";
		$jobTitle="Illustrator/Designer - Cultural Moments";
		$logo="https://facebookbrand.com/wp-content/themes/fb-branding/prj-fb-branding/assets/images/fb-art.png";
		$date="February 8, 2017";
		// $name="Ray Yuen";
		$email="";
		$slider="";
		$portrait="GIFS/me-vector.jpg";
		$hiremepage = "http://rayuen.com/$short_name";
		// $resume = "img/ray_yuen_resume.pdf";

		$job_details = markdown_convert("jobs/$short_name".".md");
		$copy = markdown_convert("jobs/$short_name-letter".".md");

		// $closing=" ";
		// $slider='
		// 	<div class="sixteen columns">
		// 		<img class="scale-with-grid" src="img/wired/car.jpg">
		// 	</div>
		// ';

		$sample_projects_array = array(
			array(
				"path"=>"nextlesson-covers",
				"name"=>"NextLesson Covers",
				"type"=>"jpg",
				"desc"=>"Creation of Lesson and Project Covers.",
			),
			array(
				"path"=>"nextlesson-interestid",
				"name"=>"NextLesson InterestID",
				"type"=>"jpg",
				"desc"=>"UI/UX and creation of icons.",
			),
			array(
				"path"=>"nextlesson-glossary",
				"name"=>"NextLesson Interactive Glossary",
				"type"=>"jpg",
				"desc" => "Visuals for glossary terms.",
			),
			array(
				"path"=>"indiginauts",
				"name"=>"Indiginauts",
				"type"=>"jpg",
				"desc"=>"Point 'n' click adventure game. Game concept/design, art, and UI.",
			),
			array(
				"path"=>"color-chameleon",
				"name"=>"Color Chameleon",
				"type"=>"jpg",
				"desc"=>"Game concept for a runner.",
			),
			array(
				"path"=>"storymaps",
				"name"=>"StoryMaps",
				"type"=>"jpg",
				"desc"=>"Hand-drawn illustrations for a story building app.",
			),
		);

		// $other = "";
	break;

	// FACEBOOK - ILLUSTRATOR/DESIGNER - MESSENGER
	case "facebook-illustrator-designer-messenger":
		$short_name = "facebook-illustrator-designer-messenger";
		$originaljobposting="https://www.facebook.com/careers/jobs/a0I1200000JXv61EAD/";
		$company="Facebook";
		$jobTitle="Illustrator/Designer - Messenger";
		$logo="https://facebookbrand.com/wp-content/themes/fb-branding/prj-fb-branding/assets/images/fb-art.png";
		$date="February 8, 2017";
		// $name="Ray Yuen";
		$email="";
		$slider="";
		$portrait="GIFS/me-vector.jpg";
		$hiremepage = "http://rayuen.com/facebook-illustrator-designer-cultural-moments";
		// $resume = "img/ray_yuen_resume.pdf";

		$job_details = markdown_convert("jobs/$short_name".".md");
		$copy = markdown_convert("jobs/$short_name-letter".".md");

		// $closing=" ";
		// $slider='
		// 	<div class="sixteen columns">
		// 		<img class="scale-with-grid" src="img/wired/car.jpg">
		// 	</div>
		// ';

		$sample_projects_array = array(
			array(
				"path"=>"nextlesson-covers",
				"name"=>"NextLesson Covers",
				"type"=>"jpg",
				"desc"=>"Creation of Lesson and Project Covers.",
			),
			array(
				"path"=>"nextlesson-interestid",
				"name"=>"NextLesson InterestID",
				"type"=>"jpg",
				"desc"=>"UI/UX and creation of icons.",
			),
			array(
				"path"=>"nextlesson-glossary",
				"name"=>"NextLesson Interactive Glossary",
				"type"=>"jpg",
				"desc" => "Visuals for glossary terms.",
			),
			array(
				"path"=>"indiginauts",
				"name"=>"Indiginauts",
				"type"=>"jpg",
				"desc"=>"Point 'n' click adventure game. Game concept/design, art, and UI.",
			),
			array(
				"path"=>"color-chameleon",
				"name"=>"Color Chameleon",
				"type"=>"jpg",
				"desc"=>"Game concept for a runner.",
			),
			array(
				"path"=>"storymaps",
				"name"=>"StoryMaps",
				"type"=>"jpg",
				"desc"=>"Hand-drawn illustrations for a story building app.",
			),
		);

		// $other = "";
	break;

	// SENIOR UI/UX DESIGNER: ADS & PROMOTIONS PLATFORM
	case "twitch-senior-ui-ux-designer-ads-and-promotions-platform":
		$short_name = "twitch-senior-ui-ux-designer-ads-and-promotions-platform";
		$originaljobposting="https://jobs.lever.co/twitch/761145e5-ddb5-4501-b939-91279c979695";
		$company="Twitch";
		$jobTitle="Senior UI/UX Designer: Ads & Promotions Platform";
		$logo="https://facebookbrand.com/wp-content/themes/fb-branding/prj-fb-branding/assets/images/fb-art.png";
		$date="February 15, 2017";
		// $name="Ray Yuen";
		$email="";
		$slider="";
		$portrait="GIFS/me-pixel.gif";
		$hiremepage = "http://rayuen.com/twitch-senior-ui-ux-designer-ads-and-promotions-platform";
		// $resume = "img/ray_yuen_resume.pdf";

		$job_details = markdown_convert("jobs/$short_name".".md");
		$copy = markdown_convert("jobs/$short_name-letter".".md");

		//
		// $closing=" ";
		// $slider='
		// 	<div class="sixteen columns">
		// 		<img class="scale-with-grid" src="img/wired/car.jpg">
		// 	</div>
		// ';

		$sample_projects_array = array(
			array(
				"path"=>"nextlesson-covers",
				"name"=>"NextLesson Covers",
				"type"=>"jpg",
				"desc"=>"Creation of Lesson and Project Covers.",
			),
			array(
				"path"=>"nextlesson-interestid",
				"name"=>"NextLesson InterestID",
				"type"=>"jpg",
				"desc"=>"UI/UX and creation of icons.",
			),
			array(
				"path"=>"nextlesson-glossary",
				"name"=>"NextLesson Interactive Glossary",
				"type"=>"jpg",
				"desc" => "Visuals for glossary terms.",
			),
			// array(
			// 	"path"=>"indiginauts",
			// 	"name"=>"Indiginauts",
			// 	"type"=>"jpg",
			// 	"desc"=>"Point 'n' click adventure game. Game concept/design, art, and UI.",
			// ),
			// array(
			// 	"path"=>"color-chameleon",
			// 	"name"=>"Color Chameleon",
			// 	"type"=>"jpg",
			// 	"desc"=>"Game concept for a runner.",
			// ),
			// array(
			// 	"path"=>"storymaps",
			// 	"name"=>"StoryMaps",
			// 	"type"=>"jpg",
			// 	"desc"=>"Hand-drawn illustrations for a story building app.",
			// ),
		);

	// HUMBLE-BUNDLE-SENIOR-DESIGNER
	case "humble-bundle-senior-designer":
		$short_name = "humble-bundle-senior-designer";
		$originaljobposting="https://boards.greenhouse.io/humblebundle/jobs/58978?gh_src=p7budj";
		$company="Humble Bundle";
		$jobTitle="Senior Designer";
		$date="February 21, 2017";
		$name="Dave Johnson";
		$email="dave@johnsonjobs.com";
		$portrait="GIFS/me-pixel.gif";
		$hiremepage = "http://rayuen.com/$short_name";

		$slider="";
		// $resume = "img/ray_yuen_resume.pdf";

		$job_details = markdown_convert("jobs/$short_name".".md");
		// $copy = markdown_convert("jobs/$short_name-letter".".md");
		$copy = "
			Thanks for sending that note along. You've found me at a very fortuitous time as I am on the job hunt! Having bought bundles in the past<span class='tooltip' title='2010. I picked up World of Goo and Braid...wow, that was a while ago...'>*</span> and hearing about your recent charity work, I am very interested to learn more about this opportunity.
			$p_break
			I'm linking to three projects below that should give you a better understanding of me. The first project, InterestID, is a tool that allows K12 students to <em>rate</em> interests<span class='tooltip' title='allowing teachers to have a better understanding of which lessons might interest their students more'>*</span>, like movies and sports.
		";

		//
		// $closing=" ";
		// $slider='
		// 	<div class="sixteen columns">
		// 		<img class="scale-with-grid" src="img/wired/car.jpg">
		// 	</div>
		// ';

		$sample_projects_array = array(
			array(
				"path"=>"nextlesson-interestid",
				"name"=>"NextLesson InterestID",
				"type"=>"jpg",
				"desc"=>"UI/UX and creation of icons.",
			),
			array(
				"path"=>"nextlesson-covers",
				"name"=>"NextLesson Covers",
				"type"=>"jpg",
				"desc"=>"Creation of Lesson and Project Covers.",
			),
			array(
				"path"=>"nextlesson-glossary",
				"name"=>"NextLesson Interactive Glossary",
				"type"=>"jpg",
				"desc" => "Visuals for glossary terms.",
			),
			// array(
			// 	"path"=>"indiginauts",
			// 	"name"=>"Indiginauts",
			// 	"type"=>"jpg",
			// 	"desc"=>"Point 'n' click adventure game. Game concept/design, art, and UI.",
			// ),
			// array(
			// 	"path"=>"color-chameleon",
			// 	"name"=>"Color Chameleon",
			// 	"type"=>"jpg",
			// 	"desc"=>"Game concept for a runner.",
			// ),
			// array(
			// 	"path"=>"storymaps",
			// 	"name"=>"StoryMaps",
			// 	"type"=>"jpg",
			// 	"desc"=>"Hand-drawn illustrations for a story building app.",
			// ),
		);

		// $other = "";
	break;


}

