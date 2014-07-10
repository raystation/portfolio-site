<?php // header( "Location: work" )// temp index redirect  ;?><?php	$title = "Design &amp Illustration";	include('inc/header.php'); 	include('inc/lists.php'); 	$weather = sf_weather();?>				<div class="sixteen columns">	<div class="textbox add-bottom">		<hr class="mobile">		<p>Hello! My name is Raymond Yuen. I live in San&nbsp;Francisco. I work at <a href="suspended-belief-studios">Suspended Belief Studios</a>. I&nbsp;used to work at <a href="pokemon">Pok&eacute;mon</a>. Take a look at some of my <a href="work">highlighted&nbsp;works</a>.</p>			<p>I also like to take <a href="http://www.flickr.com/rayuen" target='_blank'>photos</a>, <a href="http://www.twitter.com/rayuen" target='_blank'>tweet</a> occasionally, listen to <a href="http://www.last.fm/user/funkeboodha" target='_blank'>music</a> and have a blog for <a href="http://bedfordstation.tumblr.com" target='_blank'>inspirations</a>.</p>			</div>	<div class="four columns alpha add-bottom">		<hr>		<h6>Drawing of the Month</h6>		<a href="img/drawings/moss.jpg" data-lightbox="moss" data-title="Moss from The IT Crowd"><img class="scale-with-grid" src="img/drawings/moss.jpg" alt="Moss from The IT Crowd"></a>				<hr class="half-bottom">		<h6>G I F S</h6>		<img class="scale-with-grid" src="img/GIFS/dailygifs/blob.jpg" 			 onmouseover="this.src='img/GIFS/dailygifs/blob.gif'" 			 onmouseout="this.src='img/GIFS/dailygifs/blob.jpg'" >		<ul>			<li>A page to contain all my gifs coming soon.</li>		</ul>			</div>		<div class="eight columns add-bottom nolist">		<hr>		<h5>Currently:</h5>		<ul>			<li>I am making a <a href="projects/ipsum-generator/">lorem ipsum generator</a> in PHP.</li>			<li>We are game-testing Indiginauts! Our demo is <a href="indiginauts">live</a>! Give it a try&hellip;it's a point and click adventure&nbsp;game with fun artwork.</li>			<li>I am trying to <a href="https://github.com/raystation/farnsworth-wp" target='_blank'>figure out how</a> to make themes in Wordpress.</li>			<li>I am learning Ruby, to better understand how Ruby on Rails works. I figured out how to make a <a href="https://github.com/raystation/SANDBOX/blob/master/%23Ruby/caesar2.rb" target='_blank'>secret message encoder</a> based on the Caesar cipher. One day when I get good enough, I will make a podcast called "Ruby on Ales."</li>			<li>I am finding an intuitive way to solve a Rubik's Cube without having to memorize any&nbsp;moves. Possibility of success? 20%.</li>			<li>I like to make funny <a href="ringtones.php">ringtones</a>.</li>		</ul>		<hr class="half-bottom">		<h5>Recently:</h5>		<ul>			<li>I helped a non-profit, <em>Abriendo Puertas / Opening&nbsp;Doors</em> develop their website, <a href="abriendo-puertas">ap-od.org</a></li>			<li>We put out a trivia game. Our game, <a href="the3">The 3</a>, is now available in the <a href="https://itunes.apple.com/us/app/the-3-great-trivia/id694924959?mt=8" target='_blank'>App Store</a>.</li> 			<li>I read <a href="monkey-mo">Monkey Mo, Monkey Go</a> to a <a href="img/monkey-mo/classroom1.jpg" data-lightbox="monkey" data-title="The group">kindergarten class</a>. Afterwards, I taught them how to draw monkeys. Those gosh darn kids were pretty good! </li>		</ul>			<div class="none"><a href="img/monkey-mo/classroom2.jpg" data-lightbox="monkey" data-title="Teaching them how to draw"><img class="scale-with-grid" src="img/monkey-mo/classroom2.jpg" alt=""></a></div>		</div>	<!-- RIGHT FOUR COLUMN -->	<div class="four columns omega add-bottom">		<hr>		<span class="index-right-column">		<?php  			echo "San Francisco. <br>" . $weather["temp"] . "&deg;F. ". $weather["condition"] . "."; 		?>		<hr>		<h5>Games Playing</h5>		<?php list_html((list_games_playing()));?>		<hr>		<h5>Favorite Games</h5>		<?php list_html(random_list_items(list_favorite_games()));?>		<hr>			<?php  				$rand=rand(0,1);				if ($rand==1) { ?>					<h5>Nicknames I Made Up For Myself That Didn't Stick</h5>					<?php list_html(random_list_items(list_self_nicknames()));				} elseif ($rand==0) { ?>								<h5>Listening to</h5>					<?php list_html((list_albums_listening()));				}			;?>		</span>	</div>	</div>		<?php include('inc/footer.php'); ?>