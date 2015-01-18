	</div> <!-- end container -->

	<!-- Footer
	==================================================  -->

	<footer class="band" id="footer">

		<div class="container">

			<div class="four columns add-bottom">
				<ul>
					<li><a href="./">home</a>
					<li><a href="work">work</a>
					<li><a href="about">about</a>
				</ul>
			</div>

			<div class="four columns add-bottom">
				<ul>
					<li><a href="mailto:rayuen@gmail.com?subject=">email</a>
				</ul>
			</div>

			<div class="four columns">
				<ul>
					<li><a href="ringtones.php">ringtones</a>
					<!-- <li><a href="jobs">jobs</a> -->
				</ul>
			</div>

			<div class="four columns"></div>

			<div class="sixteen columns">
				<hr>
			</div>

			<div class="twelve columns add-bottom">
				<p>All works &copy; <?php $date=get_date();echo $date["year"];?> Raymond Yuen.</p>
				<p>Please do not reproduce without expressed written consent.</p>
				<p class="add-bottom">Built with Skeleton.</p>
				<p><? $pun = print_pun(); echo $pun; ?></p>
			</div>

			<div class="four columns  emoji">
				<? get_emoji();?>
			</div>

		</div> <!-- END CONTAINER -->


	</footer>

	<!-- Slick
	================================================== -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js">\x3C/script>')</script>

	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript">
		//TODO: only echo the stuff we need for each page, boolean value from work-info.php
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
			  autoplaySpeed: 4000,
			  speed: 4000,
			  dots: true,
			  fade: true,
			  pauseOnHover: false
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

	<script src="js/jquery.tooltipster.min.js"></script>
	<script>
        $(document).ready(function() {
            $('.tooltip').tooltipster({
            	animation: 'fade',
            	delay: 200
            });
        });
	</script>
	<script src="js/job-details.js"></script>
	<?php
		if ( isset($plugin) ) {
			echo "<script src='".$plugin[0]."'></script>";
			echo "<script>".$plugin[1]."</script>";
		}
	;?>

<!-- End Document
================================================== -->

</body>
</html>