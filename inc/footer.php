<?php

$id = (isset( $_GET["id"] ) ? $_GET["id"] : null );
if ( isset($id) ) {
	$id_html = "?id=$id";
} else {
	$id_html="";
}

$email_subject = "";
$email_text = "";
if ( !isset($id)) {
	$id="";
	$jobTitle="";
	include_once "inc/lists.php";
	$email_subject = get_spoilers();
	$rand = array_rand($email_subject);
	$email_subject = $email_subject[$rand];
	$email_subject = get_email_body($email_subject);
} else {
	if ( isset($company)) {
		include_once "inc/company-info.php";
		$subject = "re: $company - $jobTitle";
		$email_subject = get_email_body($subject);
	}

	include_once "inc/lists.php";
	$email_text = get_spoilers();
	$rand = array_rand($email_text);
	$email_text = $email_text[$rand];
	$email_text = get_email_body($email_text);
}


// echo $email_text;

?>
	</div> <!-- end container -->

	<!-- Footer
	==================================================  -->

	<footer id="footer">

		<div class="container">
			<div class='sixteen columns'>
				<div class='flex-footer'>
					<a href="./<?php echo $id_html;?>">home</a>
					<a href="work<?php echo $id_html;?>">work</a>
					<a href="about<?php echo $id_html;?>">about</a>
					<a href="mailto:rayuen@gmail.com?body=<?php echo $email_text;?>&subject=<?php echo $email_subject;?>">email</a>
				</div>
			</div>

			<div class="sixteen columns">
				<hr>
			</div>

			<div class="twelve columns add-bottom">
				<p>All works &copy; <?php $date=get_date();echo $date["year"];?> Raymond Yuen.</p>
				<p class="add-bottom">Please do not reproduce without expressed written consent.</p>
				<p><?php $pun = print_pun(); echo $pun; ?></p>
			</div>

			<div class="four columns  emoji">
				<?php //get_emoji(3);?>
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
			  arrows: false,
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
			$('.content-slideshow').slick({
			  accessibility: true,
			  lazyLoad: 'progressive',
			  autoplay: true,
			  autoplaySpeed: 4000,
			  dots: false,
			  pauseOnHover: false
			});
		});
	</script>

	<!-- Lightbox 2.7.1 -->
	<script src="js/lightbox.min.js"></script>
	<!-- tooltip -->
	<script src="js/jquery.tooltipster.min.js"></script>
	<!-- lazy load -->
	<script src="js/jquery.unveil.js"></script>

	<script>
      $(document).ready(function() {
          $('.tooltip').tooltipster({
          	animation: 'fade',
          	delay: 200
          });
      });
	</script>
	<script>
		$(document).ready(function() {
			$("img").unveil();
		});
	</script>
	<script src="js/job-details.js"></script>
	<?php
		echo $footer_add;
		if ( isset($plugin) ) {
			echo "<script src='".$plugin[0]."'></script>";
			echo "<script>".$plugin[1]."</script>";
		}
	;?>

<!-- End Document
================================================== -->

</body>
</html>