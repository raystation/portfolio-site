<?	// header( "Location: work" ); // temp index redirect	$title = "Design &amp Illustration";	include('inc/header.php');	include('inc/lists.php');	// $weather = "";	// // $weather = sf_weather();	// if (!$weather) {	// 	$weather['temp']=66;	// 	$weather['condition']="Death";	// }	// include "inc/blog-posts.php";	// $blogposts="";	// DRAWING OF THE MONTH	// $drawing = array(	// 	"path"=>"img/drawings/up.png",	// 	"alt"=>"why did they do that in the beginning?",	// );	// FEATURED PROJECTS	$featured_works_array = array(		array( "name" => "Wired","path" => "wired", "thumb" => "jpg" ),		array( "name" => "Adelle Marcero Portfolio Site","path" => "adelle-marcero", "thumb" => "jpg" ),		// array( "name" => "Indiginauts", "path" => "indiginauts", "thumb" => "jpg" ),		array( "name" => "100 Principles of Game&nbsp;Design","path" => "100-principles-of-game-design","thumb" => "jpg" ),		array( "name" => "StoryMaps","path" => "storymaps","thumb" => "jpg" ),	);?><section class="sixteen columns">	<div class="textbox add-bottom">		<hr class="mobile">		<p>Hello! My name is Raymond Yuen. I live in San&nbsp;Francisco. I am a designer at <a href="http://nextlesson.org" target='_blank'>NextLesson</a>. I&nbsp;used to work at <a href="suspended-belief-studios">Suspended Belief Studios</a> and <a href="pokemon">Pok&eacute;mon</a>. Take a look at some of my <a href="work">highlighted&nbsp;works</a>.</p>		<p>I like to take <a href="http://www.flickr.com/rayuen" target='_blank'>photos</a>, occasionally <a href="http://www.twitter.com/rayuen" target='_blank'>tweet</a>, listen to <a href="http://www.last.fm/user/funkeboodha" target='_blank'>music</a> and have a blog for <a href="http://bedfordstation.tumblr.com" target='_blank'>inspirations</a>.</p>	</div></section><section class="sixteen columns index-text"><!-- 	<hr>	<h6>Featured Projects</h6> -->	<? skeleton_print_thumbnail_4($featured_works_array); ?></section><aside class="sixteen columns index-right-column add-bottom">	<div class="four columns alpha">		<hr>		<? echo print_list( list_games_playing(), "all", false );?>	</div>	<div class="four columns">		<hr>		<? echo print_list( list_favorite_games(), 5, true );?>	</div>	<div class="four columns">		<hr>		<?			// if (rand(0,1)) { echo print_list( list_self_nicknames(), 5, true ); }			// else { echo print_list( list_fav_artists(), 5, true); }			echo print_list( list_fav_artists(), 5, true);		?>	</div>	<div class="four columns omega">		<hr>		<?			if (rand(0,1)) { echo print_list( list_albums_listening(), 5, true); }			else { echo print_list( list_fav_tv(), 5, true); }		?>	</div></aside><? include('inc/footer.php'); ?>