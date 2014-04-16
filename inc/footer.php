	<!-- Footer
	==================================================  -->

	<footer class="band">

		<div class="container">
			
			<div class="four columns">

				<ul>
					<li><a href="index.php">home</a></li>
					<li><a href="portfolio.php">portfolio</a></li>
					<li><a href="about.php">about</a></li>
					<li><a href="#">news</a></li>
				</ul>

			</div>
			<div class="four columns">

				<p>
					Riker's background is first explored in the second-season episode The Icarus Factor.
				</p>

			</div>
			<div class="four columns">

				<p>
					Riker's background is first explored in the second-season episode The Icarus Factor.
				</p>

			</div>
			<div class="four columns">

				<p>
					Riker's background is first explored in the second-season episode The Icarus Factor.
				</p>

			</div>

			<div class="sixteen columns">
				<hr>
				<p> &copy <?php echo date('Y');?> 
					Raymond Yuen • made with Skeleton • 
				</p>

			</div>

		</div> <!-- END CONTAINER -->

	</footer>
	
	<!-- Bxslider JS
	================================================== -->
	<script src="js/jquery/1.8.2/jquery.min.js"></script>
	<script src="js/jquery.bxslider.js"></script>
	
	<script>
		$(document).ready(function(){
		  $('.bxslider').bxSlider();
		});

		$(document).ready(function(){
		  $('.bxsliderIndex').bxSlider({
		  	mode: 'vertical',
		  	easing: 'ease-in-out',
		  	autoHover: true,
		  	controls: false,
				randomStart: true
		  });
		});
	</script>

	<!-- Lightbox 
	==================================================  -->
	<script src="js/lightbox-2.6.min.js"></script>
	

<!-- End Document
================================================== -->
</body>
</html>