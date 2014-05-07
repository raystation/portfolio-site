	</div> <!-- end container -->

	<?php 
		if ( $description !== NULL ) {
			include 'work-thumbnails.php' ;
		}
	 ;?>
	
	<!-- Footer
	==================================================  -->

	<footer class="band">

		<div class="container">
			
			<div class="four columns">

				<ul>
					<li><a href="index.php">home</a></li>
					<li><a href="work.php">work</a></li>
					<li><a href="about.php">about</a></li>
					<?php //<li><a href="#">news</a></li></ ?>
				</ul>

			</div>

			<div class="four columns">
				<p>contact <br>
					rayuen@gmail.com</p>
			</div>

			<div class="four columns"></div>
			<div class="four columns"></div>

			<div class="sixteen columns">
				<hr>
				<p> All works &copy; <?php echo date('Y');?> 
					Raymond Yuen • Please do not reproduce without expressed written consent • built with Skeleton
				</p>

			</div>

		</div> <!-- END CONTAINER -->

	</footer>
	
	<!-- Slick
	================================================== -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js">\x3C/script>')</script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.slick').slick({
			  accessibility: true,
			  lazyLoad: 'progressive',
			  autoplay: true,
			  autoplaySpeed: 4500,
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
			  draggable: false,
			  fade: true
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