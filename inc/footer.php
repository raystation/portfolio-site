	</div> <!-- end container -->
	
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
				<p> &copy; <?php echo date('Y');?> 
					Raymond Yuen • made with Skeleton • 
				</p>

			</div>

		</div> <!-- END CONTAINER -->

	</footer>
	
	<!-- Slick
	================================================== -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.slick').slick({
			  accessibility: true,
			  lazyLoad: 'progressive',
			  autoplay: true,
			  autoplaySpeed: 4000,
			  arrows: true,
			  dots: true,
			  draggable: false
			});
			$('.slick-index').slick({
			  accessibility: true,
			  lazyLoad: 'progressive',
			  arrows: false,
			  autoplay: true,
			  dots: true,
			  draggable: false
			});
		});		
	</script>
				

	<!-- Lightbox 2.7.1
	==================================================  -->
	<script src="js/lightbox.min.js"></script>
	

<!-- End Document
================================================== -->
</body>
</html>