<?php 	$pageTitle = "Ray Yuen | Hire Me!";	include 'inc/header.php'; 	$id = $_GET["id"];	require "inc/company-info.php";?>	<div class="sixteen columns">		<div class="twelve columns alpha">				<hr>				<h6 class="add-top">				<?php 					if ( is_null( $name ) ) {						echo "To Whom It May Concern,";					} else {						echo "Dear ".$name." "."( re: <a href=".$originaljobposting." target=\"_blank\">". $jobTitle ."</a>)";					}				;?>				</h6>								<?php echo $copy; ?>				<p>					Sincerely, <br> 					Ray				</p>						<?php //include 'inc/resume.php'; ;?>		</div> <!-- end 12 -->				<div class="four columns omega caption">			<hr>			<p><?php echo $date; ?></p><p>				<?php if ( is_null( $name ) ) { } else { echo $name . "<br>"; } ?>				<?php echo $company; ?><br>				<?php echo $email; ?>			</p>			<hr>			<img src="img/me-photo.jpg" class="scale-with-grid">			<p>Raymond Yuen <br>				<a href="tel:347-439-5576">347.439.5576</a> <br>				Lives in San Francisco<br>				New York City transplant 			</p>			<hr class="add-top">				<p>				Graphic designer with extensive print and production experience. Background in illustration. Passionate about illustration, typography and game design. <br>			</p>			<hr>			<p><a href="resume"> click for detailed work history, technical skills >></a> <br></p><!-- 			<hr class="add-top">			<p>				<p>Suspended Belief Studios. <br>2/2012 - current.</p>				<p>Freelance Designer. <br>4/2012 - current.</p>				<p>Museyon Guides. <br>3/2010 - 4/2012.</p>				<p>The Pok&eacute;mon Company. <br>9/2005 – 12/2009.</p>				<p>Equinox Fitness Clubs. <br>4/2004 - 9/2005.</p>			</p>			<hr> -->					</div>	</div> <!-- end sixteen --></div> <!-- end container --><?php include 'inc/footer.php'; ?>