	</div> <!-- end container -->
	
	<!-- Footer
	==================================================  -->

	<footer class="band">

		<div class="container">

			<div class="sixteen columns">
				<div class="four columns alpha add-bottom">
					<ul>
						<li><a href="./">home</a></li>
						<li><a href="work">work</a></li>
						<li><a href="about">about</a></li>
					</ul>
				</div>

				<div class="four columns add-bottom">
					<ul>
						<li><a href="mailto:rayuen@gmail.com?subject=">email</a></li>
					</ul>
				</div>

				<div class="four columns">
					<ul>
						<li><a href="about?id=jobs">jobs</a></li>
					</ul>
				</div>

				<div class="four columns omega"></div>

				<hr>

				<p> 
					<p>All works &copy; <?php echo date('Y');?> Raymond Yuen.</p>
					<p>Please do not reproduce without expressed written consent.</p>
					<p>Built with Skeleton.</p>
					<p><a href="about?id=pun&pun=YESSS"><?php if ( $pun_status !== true ) { $pun=print_pun();echo $pun;} ?></a></p>
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
			  dots: true
			});
			$('.slick-index').slick({
			  accessibility: true,
			  lazyLoad: 'progressive',
			  arrows: false,
			  autoplay: true,
			  dots: true,
			  fade: true
			});
		});		
	</script>
				

	<!-- Lightbox 2.7.1
	==================================================  -->
	<script src="js/lightbox.min.js"></script>

	<!-- headroom -->
	<script src="js/headroom.min.js"></script>
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

<!-- End Document
================================================== -->
</body>
</html>