<?	// header( "Location: work" ); // temp index redirect	$title = "Design &amp Illustration";	include_once 'inc/header.php';	include_once 'inc/lists.php';	$index=true;	$quick_intro = get_quick_intro();	// $weather = "";	// // $weather = sf_weather();	// if (!$weather) {	// 	$weather['temp']=66;	// 	$weather['condition']="Death";	// }	// include "inc/blog-posts.php";	// $blogposts="";	// DRAWING OF THE MONTH	// $drawing = array(	// 	"path"=>"img/drawings/up.png",	// 	"alt"=>"why did they do that in the beginning?",	// );	// FEATURED PROJECTS	include_once "inc/work-info.php";	$featured_works_array = $works;	// $featured_works_array = array(		// array( "name" => "NextLesson","path" => "nextlesson"),		// array( "name" => "InterestID","path" => "nextlesson-interestid"),		// array( "name" => "Wired","path" => "wired"),		// array( "name" => "Adelle Marcero Portfolio Site","path" => "adelle-marcero"),		// array( "name" => "Indiginauts", "path" => "indiginauts"),		// array( "name" => "#Inktober","path" => "inktober-2016"),		// array( "name" => "Pok&eacute;mon", "path" => "pokemon"),		// array( "name" => "Indiginauts", "path" => "indiginauts"),		// array( "name" => "Abriendo Puertas / Opening Doors", "path" => "abriendo-puertas"),		// array( "name" => "100 Principles of Game&nbsp;Design","path" => "100-principles-of-game-design","thumb" => "jpg" ),		// array( "name" => "StoryMaps","path" => "storymaps"),		// array( "name" => "LesConcierges","path" => "lesconcierges"),		// array( "name" => "The 3", "path" => "the3"),		// array( "name" => "Project Animore", "path" => "project-animore"),	// );?><section class="sixteen columns">	<div class="textbox add-bottom">		<hr class="mobile">		<h1>Hi, I'm Ray.</h1>		<p>			<? echo $quick_intro;?>		</p>	</div></section><section class="sixteen columns index-text">	<!-- <? skeleton_print_thumbnail_4($featured_works_array,8); ?> -->	<? full_thumbnail($featured_works_array,6,"reduce-width"); ?></section><div class='container'>	<div class='sixteen columns half-top' style='text-align: right;'>		<a class='' href="work">Browse All Projects</a> &#8594;	</div></div><? include('inc/footer.php');		// <p>I am a designer at <a href="nextlesson">NextLesson</a>. I&nbsp;used to work at <a href="suspended-belief-studios">Suspended Belief Studios</a> and <a href="pokemon">Pok&eacute;mon</a>. I like to take <a href="http://www.flickr.com/rayuen" target='_blank'>photos</a>, occasionally <a href="http://www.twitter.com/rayuen" target='_blank'>tweet</a>, listen to <a href="http://www.last.fm/user/funkeboodha" target='_blank'>music</a> and have a blog for <a href="http://bedfordstation.tumblr.com" target='_blank'>inspirations</a>.</p>?>