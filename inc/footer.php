	</div> <!-- end container -->

	<?php 
		// if ( $description !== NULL ) {
		// 	include 'work-thumbnails.php' ;
		// }
	 ;?>
	
	<!-- Footer
	==================================================  -->

	<footer class="band">

		<div class="container">

			<div class="sixteen columns">
				<div class="four columns alpha">

					<ul>
						<?php //<li><a href="index.php">home</a></li> ;?>
						<li><a href="work.php">work</a></li>
						<li><a href="about.php">about</a></li>
						<?php //<li><a href="#">news</a></li></ ?>
					</ul>

				</div>

				<div class="four columns">
					<p>contact <br>
						<a href="mailto:rayuen@gmail.com?subject=">rayuen@gmail.com</a>		</p>
				</div>

				<div class="four columns">
					<!-- <p>
						social <br>
						<a href="http://www.linkedin.com/in/rayuen">linkedin.com/rayuen</a>
					</p> -->
				</div>

				<div class="four columns omega"></div>


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

	<script type="text/javascript" src="js/slick.min.js"></script>
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

	<!-- headroom -->
	<script src="js/headroom.js"></script>
	<script>
		var myElement = document.querySelector("header");
		// var headroom  = new Headroom(myElement);
		var headroom = new Headroom(myElement, {
		  "tolerance": 10,
		  "offset": 50,
		});		
		headroom.init();
	</script>

	<?php 
		if ( strpos($pageTitle,"Hire Me") ) {
			echo "<script src=\"js/jquery.tooltipster.min.js\"></script>".
			"<script>
        $(document).ready(function() {
            $('.tooltip').tooltipster();
        });
    	</script>";
		}
	;?>

	<div class="responsive-indicator"></div>

	

<!-- End Document
================================================== -->
</body>
</html>