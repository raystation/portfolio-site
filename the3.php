<?php 
	$title = "The 3";
	$pageTitle = "Ray Yuen | " . $title;
	include('inc/header.php'); ?>

	<!-- Row 1
	================================================== -->
	
	<div class="container add-bottom">

		<div class="sixteen columns">

			<h1 class="center">The 3</h1>
			<p class="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, dolorem, ratione at cupiditate aspernatur laudantium. Cumque eligendi facere dolor voluptatem?</p>

			<div class="slick">
				<div><img src="img/the3/01.jpg" class="scale-with-grid"></div>
				<div><img src="img/the3/02.jpg" class="scale-with-grid"></div>
				<div><img src="img/the3/03.jpg" class="scale-with-grid"></div>
				<div><img src="img/the3/04.jpg" class="scale-with-grid"></div>
			</div>
		</div>
		
		<div class="sixteen columns">
			<div class="twelve columns alpha">
				<p>	
					Our first foray into the iPhone games arena was a trivia game. &ldquo;The 3&rdquo; centered around the basic concept of multiple choice trivia with timely usage of powerups.
				</p>

				<p> 
					In our first iteration, you had to type out the answers, but that wasn't working out how we hoped and took way too long. It became more of a fast typing game. In our second iteration, we implemented multiple choice with 5 right and wrong answers and set the game time around 2 minutes. We liked this, but ultimately decided that it seemed like people were reading more than they should be, so we decided to cut down the questions and answers to 3, set the timer at one minute and consciously try to keep the wording for questions minimal if possible. We next implemented a system of power-ups and then for the next month went about procuring and writing good trivia questions.
				</p>
				<p>
					We released the game free in the App Store with in-app purchases for new categories as a way to generate revenue. It was also a chance for us to get to know first-hand how the App Store worked and seeing how a game would do with ads and without signifigant marketing dollars put behind it. Currently, it is still in stealth release because we still keep finding mistakes in the questions (FREAKIN' google spreadsheet!) but we are hoping to squash all (most) mistakes!
				</p>
				
			</div>
			<div class="four columns omega caption">
				<h5><?php echo $title ;?></h5> 
				<p>
					A <a href="http://www.suspendedbeliefgames.com">Suspended Belief</a> Joint. <br>
					Platform: iPhone 4 and up. Playable on iPads. <br>
					Price: Free
				</p>
			</div>
		</div>

	</div> <!-- end container -->
	
<?php include('inc/footer.php'); ?>
