<?php 	$id = $_GET["id"];	require "inc/company-info.php";	$pageTitle = "Ray Yuen | Hire Me, ".$company."!";	include 'inc/header.php'; ?>	<div class="sixteen columns">		<div class="twelve columns alpha">				<hr class="caption">				<p><?php echo $date; ?></p>				<h6 class="add-top">				<?php 					if ( is_null( $name ) ) {						echo "To Whom It May Concern";						if ( is_null( $originaljobposting ) ) { } else {							echo " ( re: <a href=".$originaljobposting." target=\"_blank\">". $jobTitle ."</a>)";						}  					} else {						echo "To ".$name." "."( re: <a href=".$originaljobposting." target=\"_blank\">". $jobTitle ."</a>)";					}				;?>				</h6>								<?php echo $copy; ?>				<p>					Sincerely, <br> 					Ray				</p>				<div class="resume-pdf tooltip add-bottom" title="click to view resume" >					<a class="scale-with-grid" href="img/ray_yuen_resume.pdf" target="_blank"><img src="img/icon/pdf.svg" alt="Raymond Yuen resume"></a>				</div>						<?php if ( is_null( $other ) ) { } else { echo $other; }; ?>		</div> <!-- end 12 -->				<div class="four columns omega caption">			<hr>			<p>				<?php if ( is_null( $logo ) ) { } else { echo "<img class=\"scale-with-grid2 add-top add-bottom\" src=\"" . $logo . "\"><br>"; } ?>				<?php if ( is_null( $name ) ) { } else { echo $name . "<br>"; } ?>				<?php echo $company; ?><br>				<?php echo $email; ?>			</p>			<hr class='half-bottom'>			<img src="img/me-photo.jpg" class="scale-with-grid">			<p>Raymond Yuen <br>				<a href="tel:347-439-5576">347.439.5576</a> <br>				Lives in San Francisco<br>				New York City transplant 			</p>			<hr class="add-top">				<p>				Graphic designer with extensive print and production experience. Background in illustration. Passionate about typography and game design. Learning more about programming languages.<br>			</p>			<hr>			<p><a href="resume"> click for detailed work history, technical skills &#10132;</a> <br></p>				</div>	</div> <!-- end sixteen --></div> <!-- end container --><?php include 'inc/footer.php'; ?>