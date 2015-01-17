<?	// header( "Location: work" ); // temp index redirect	$title = "Design &amp Illustration";	include('inc/header.php');	include('inc/lists.php');	$weather = sf_weather();	$blogposts="";?><section class="sixteen columns">	<div class="textbox add-bottom">		<hr class="mobile">		<p>Hello! My name is Raymond Yuen. I live in San&nbsp;Francisco. I am a designer at <a href="http://nextlesson.org" target='_blank'>Nextlesson</a>. I used to work at <a href="suspended-belief-studios">Suspended Belief Studios</a> and <a href="pokemon">Pok&eacute;mon</a>. Take a look at some of my <a href="work">highlighted&nbsp;works</a>.</p>		<p>I like to take <a href="http://www.flickr.com/rayuen" target='_blank'>photos</a>, occasionally <a href="http://www.twitter.com/rayuen" target='_blank'>tweet</a>, listen to <a href="http://www.last.fm/user/funkeboodha" target='_blank'>music</a> and have a blog for <a href="http://bedfordstation.tumblr.com" target='_blank'>inspirations</a>.</p>	</div></section><section class="sixteen columns index-text">	<div class="twelve columns alpha add-bottom">		<? echo $blogposts; ?>		<hr>		<h5>Currently:</h5>		<ul>			<li>I made an <a href='holiday2014'>interactive holiday card</a> that changes on refresh.			<li>I am working on branding and overall design at <a href='http://nextlesson.org' target='_blank'>Nextlesson</a>.			<li>I working on a <a href="http://rayuen.com/projects/ipsum-generator/">lorem ipsum generator</a> in PHP.			<!-- <li>I am trying to <a href="https://github.com/raystation/farnsworth-wp" target='_blank'>figure out how</a> to make themes in Wordpress. -->			<li>I am finding an intuitive way to solve a Rubik's Cube without having to memorize any&nbsp;moves. Possibility of success? 20%.			<li>I like to make funny <a href="ringtones.php">ringtones</a>.		</ul>		<hr class="half-bottom">		<h5>Recently:</h5>		<ul>			<li>I helped my friend <a href="http://adelle.ink" target='_blank'>Adelle</a> build her website to feature her artwork and highlight her Etsy works.			<li>I was helping out at a web design firm.			<!-- <li>We helped a non-profit, <em>Abriendo Puertas / Opening&nbsp;Doors</em> develop their website, <a href="abriendo-puertas" class="nowrap">ap-od.org</a> -->			<!-- <li>We made a <a href="indiginauts">demo</a> for <a href="indiginauts">Indiginauts</a>! Give it a try&hellip;it's a point & click adventure&nbsp;game with fun artwork. -->			<!-- <li>We put out a trivia game. <a href="the3">The 3</a>, is now available in the <a href="the3" target='_blank'>App&nbsp;Store</a>. -->			<li>I read <a href="monkey-mo">Monkey Mo, Monkey Go</a> to a <a href="img/monkey-mo/classroom1.jpg" data-lightbox="monkey" data-title="The group">kindergarten class</a>. Afterwards, I taught them how to draw monkeys. Those gosh darn kids were pretty&nbsp;good!		</ul>		<div class="none"><a href="img/monkey-mo/classroom2.jpg" data-lightbox="monkey" data-title="Teaching them how to draw"><img class="scale-with-grid" src="img/monkey-mo/classroom2.jpg" alt=""></a></div>	</div>	<div class="four columns omega add-bottom">		<hr>		<span class="index-right-column">		<? echo "San Francisco. <br>" . $weather["temp"] . "&deg;F. ". $weather["condition"] . "."; ?>		<hr>		<h6>Drawing of the Month</h6>		<a href="img/drawings/nl-mugs.gif" data-lightbox="moss" data-title="Libra from Indiginauts"><img class="scale-with-grid" src="img/drawings/nl-mugs.gif" alt="Nextlesson mugs"></a>		<hr class="half-bottom">		<h6>G I F S</h6>		<img class="scale-with-grid" src="img/GIFS/dailygifs/blob.jpg"			 onmouseover="this.src='img/GIFS/dailygifs/blob.gif'"			 onmouseout="this.src='img/GIFS/dailygifs/blob.jpg'" >		<p>			A page to contain all my gifs coming soon.		</p>	</div></section><aside class="sixteen columns index-right-column add-bottom">	<div class="four columns alpha">		<hr>		<? print_list( list_games_playing() );?>	</div>	<div class="four columns">		<hr>		<? print_list( list_favorite_games(),true );?>	</div>	<div class="four columns">		<hr>		<? $rand=mt_rand(1,2); $rand==1 ? print_list( list_self_nicknames(),true ) : print_list( list_fav_artists(),true ) ; ?>	</div>	<div class="four columns omega">		<hr>		<? $rand=mt_rand(1,2); $rand==1 ? print_list( list_albums_listening(),true ) : print_list( list_fav_tv(),true ) ; ?>	</div></aside><? include('inc/footer.php'); ?>