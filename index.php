<?	// header( "Location: work" ); // temp index redirect	$title = "Design &amp; Illustration";	include_once 'inc/header.php';	include_once 'inc/lists.php';	$index=true;	$quick_intro = get_quick_intro();	// $weather = "";	// // $weather = sf_weather();	// if (!$weather) {	// 	$weather['temp']=66;	// 	$weather['condition']="Death";	// }	// include "inc/blog-posts.php";	// $blogposts="";	// DRAWING OF THE MONTH	// $drawing = array(	// 	"path"=>"img/drawings/up.png",	// 	"alt"=>"why did they do that in the beginning?",	// );	// FEATURED PROJECTS	include_once "inc/work-info.php";	$featured_works_array = $works;?><section class='home-page'>	<div class="intro sixteen columns">		<h1>			<? echo $quick_intro;?>		</h1>		<p>			Currently looking for full-time or contract work. I share most of my work here, but I also like to post on <a target='_blank' href='https://dribbble.com/raystation'>Dribbble</a>. I also like to do <a href='illustration'>illustration work</a>.		</p>		<p>			<a href='mailto:rayuen@gmail.com'>Get in Touch!</a>		</p>	</div>	<!-- <section class="sixteen columns"> -->		<?		// skeleton_print_thumbnail_4($featured_works_array,8);		//flex_thumbnail($featured_works_array,6,"reduce-width project-thumbnail","hero-img");		?>	<!-- </section> -->	<div class='selected-projects sixteen columns'>		<hr>		<div class='eight columns alpha'>			<h1>Selected Projects</h1>		</div>		<div class='eight columns omega' style='text-align: right;'>			<a class='' href='work'>View all projects <i class="fa fa-arrow-right" aria-hidden="true"></i></a>		</div>	</div>	<div class='selected-projects eight columns'>		<a href='nextlesson-interestid'><img class='scale-with-grid' src="img/nextlesson-interestid/thumb.svg"></a>		<h2 class='title'>NextLesson InterestID</h2>		<p>			Student Interest Tool<br>			ui/ux, branding, illustration		</p>	</div>	<div class='selected-projects eight columns'>		<a href='nextlesson-covers'><img class='scale-with-grid' src="img/nextlesson-covers/thumb-hd.jpg"></a>		<h2 class='title'>NextLesson Lesson and Project Covers</h2>		<p>			Design of Lesson and Project Covers<br>			ui/ux, branding, illustration		</p>	</div>	<div class='selected-projects eight columns'>		<a href='nextlesson-characters'><img class='scale-with-grid' src="img/nextlesson-characters/thumb-hd.png"></a>		<h2 class='title'>NextLesson Characters</h2>		<p>			A system of cartoons<br>			branding, illustration		</p>	</div>	<div class='selected-projects eight columns'>		<a href='nextlesson-glossary'><img class='scale-with-grid' src="img/nextlesson-glossary/thumb.svg"></a>		<h2 class='title'>NextLesson Glossary Terms</h2>		<p>			Feature Implementation<br>			ui/ux, branding, illustration		</p>	</div>	<div class='selected-projects sixteen columns'>		<hr>		<h1>Places I've worked at</h1>	</div>	<div class='selected-projects eight columns'>		<a href='nextlesson'><img class='scale-with-grid' src="img/nextlesson/thumb.svg"></a>		<h2 class='title'>NextLesson</h2>		<p>Education Platform</p>	</div>	<div class='selected-projects eight columns'>		<a href='pokemon'><img class='scale-with-grid' src="img/pokemon/thumb.svg"></a>		<h2 class='title'>The Pok&eacute;mon Company</h2>		<p>Media Empire</p>	</div>	<div class='selected-projects eight columns'>		<a href='museyon-guides'><img class='scale-with-grid' src="img/museyon-guides/thumb.svg"></a>		<h2 class='title'>Museyon Guides</h2>		<p>Travel Guides Publisher</p>	</div>	<div class='selected-projects eight columns'>		<a href='suspended-belief-studios'><img class='scale-with-grid' src="img/suspended-belief-studios/thumb.jpg"></a>		<h2 class='title'>Suspended Belief Studios</h2>		<p>iOS Games</p>	</div>	<div class='sixteen columns'>		<div class='selected-projects eight columns alpha'>			<hr>			<h1>Clients</h1>			<p>				<a href='abriendo-puertas'>Abriendo Puertas / Opening Doors</a><br>				<a href='wired'>Wired</a><br>				<a href='100-principles-of-game-design'>Pearson</a><br>				<a href='adelle-marcero'>Adelle Marcero</a><br>				<a href='sarah-walko'>Sarah Walko</a><br>			</p>		</div>		<div class='selected-projects eight columns omega'>			<hr>			<h1>Coding Side Projects</h1>			<p>				<a target='_blank' href='http://darth-pickle.nfshost.com/p/corpse/'>Exquisite Corpse</a><br>				<a target='_blank' href='http://rayuen.com/p/ipsum-generator/'>Ipsum Generator</a><br>				<a target='_blank' href='http://darth-pickle.nfshost.com/p/emoji/'>Emojinary</a><br>				<a target='_blank' href='http://darth-pickle.nfshost.com/p/baby-name-generator/'>Baby Name Generator</a><br>				<a href='holiday-card-2014'>Holiday Card 2014</a><br>			</p>		</div>	</div></section><? include('inc/footer.php');