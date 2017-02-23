<?// PAGE VARIABLES$content="";$title="";$followup=""; $originaljobposting=""; $logo=""; $jobTitle=""; $company=""; $date=""; $name=""; $email=""; $slider=""; $hiremepage=""; $other=""; $other2=""; $sample_works=""; $closing=""; $resume=""; $portrait="";$portrait_html="";$slider_html = "";$job_details_html="";$logo_html="";$resume_path="img/ray_yuen_resume.pdf";$rubiks=false;$monkey=false;$yayray=false;$id = $_GET["id"];require_once "inc/company-info.php";$title = "Hire Me, $company!";require_once "inc/header.php";// INTERVIEW SLIDERif ($slider) {	$slider_html = "<div class='navband'>$slider</div>";}$content.=$slider_html;// nameif ($name) {	$name_html = "To $name, ";}else {	$name_html = "To Whom It May Concern: ";}// closingif ($closing) {	$closing_html = "<p>$closing</p>";} else {	$closing_html = "		<p>Please feel free to contact me with any questions and to take a look at the rest of my <a href='work'>work</a> and my <a href='resume'>resume</a>.</p>		<p>Sincerely, <br>Ray</p>	";}// job detailsif ($job_details) {	$job_details_html = "		<hr>		<div class='original-job-button'>Job Details</div><div class='original-job-details hide'>			$job_details		</div>	";}// SIDEBARif ($portrait) {	// if $portrait is randomize, else drop in specified portrait	if ($portrait == "random") {		# code...	} else {		$portrait_html = "			<img alt='self portrait of Ray Yuen' title='self portrait of Ray Yuen' src='img/$portrait' class='portrait'>		";	}}else//if nothing is specified, generic photo portrait{	$portrait_html = "		<img alt='self portrait of Ray Yuen' title='self portrait of Ray Yuen' src='img/GIFS/me-photo-nextlesson.jpg' class='portrait'>	";}// sidebar logoif ($logo) {	$logo_html = "<img class='logo' src='$logo'>";}// resumeif ($resume) {	$resume_path = $resume;}$sample_projects_html="";if ($sample_projects_array) {	$clearfix="";	$count = 1;	foreach ($sample_projects_array as $key => $sample_project) {		$sample_projects_html.="			<div class='four columns add-bottom alpha caption'>				<a href='$sample_project[path]'><img class='scale-with-grid' src='img/$sample_project[path]/thumb.$sample_project[type]'>$sample_project[name]</a>. $sample_project[desc]			</div>		";		$count++;		if ($count > 3) {			$sample_projects_html.="<div class='clearfix'></div>";			$count = 1;		}	}} else {	$sample_projects_html="		<div class='four columns add-bottom alpha caption'>			<a href='$project1[path]'><img class='scale-with-grid' src='img/$project1[path]/thumb.$project1[type]'>$project1[name]</a>. $project1[desc]		</div>		<div class='four columns add-bottom alpha caption'>			<a href='$project2[path]'><img class='scale-with-grid' src='img/$project2[path]/thumb.$project2[type]'>$project2[name]</a>. $project2[desc]		</div>		<div class='four columns add-bottom omega caption'>			<a href='$project3[path]'><img class='scale-with-grid' src='img/$project3[path]/thumb.$project3[type]'>$project3[name]</a>. $project3[desc]		</div>	";}$content.="<div class='container'>	<div class='sixteen columns cover-letter'>		<div class='twelve columns alpha description' style='padding-right:10px;'>			$followup			<hr class='caption'>			<p><a href='$hiremepage'>$date</a></p>			<h4 class='add-top'>$name_html</h4>			$copy			$sample_works			<div class='clear'></div>			<h5>Project Samples</h5>			$sample_projects_html			<div class='clear add-bottom'></div>			$other			$closing_html			$job_details_html		</div> <!-- end 12 -->		<div class='four columns sidebar omega caption'>			<hr>			$logo_html			<p>				$name<br>				$company<br>				re: <a href='$originaljobposting' target='_blank'>$jobTitle</a><br>				$email			</p>			<hr class='separator'>			<h6>ABOUT ME</h6>			$portrait_html			<p>Raymond Yuen <br>				<a href='tel:347-439-5576'>347.439.5576</a> <br>				<a href='mailto:rayuen@gmail.com'>rayuen@gmail.com</a>			</p>			<p>				I'm a designer, illustrator, amateur programmer living and working in San Francisco.			</p>			<p>				I've worked in games, publishing, marketing, and most recently in education at NextLesson building products.			</p>			";			echo $content;			?>			<div class='tech-skills add-bottom'>				<hr class='separator'>				<h6>AT A GLANCE</h6>				<?php html_print_tech_skills();?>			</div>			<p><a href='resume'>detailed work history &#10132;</a> <br></p>			<? if ( is_null( $other2 ) ) { } else { echo "<hr>". $other2 . "<br>"; } ?>			<? if ($rubiks==true){ echo '<img class="add-bottom  scale-with-grid add-top" src="img/GIFS/rubiks-rotate_rmx.gif">'; }?>			<? if ($monkey==true){ echo '<img class="add-bottom  scale-with-grid add-top" src="img/GIFS/ad_monkeymo.gif">'; }?>			<? if ($yayray==true){ echo '<img id="yayray" class="add-bottom  scale-with-grid" src="img/GIFS/dailygifs/yayray.jpg" onmouseover="this.src=\'img/GIFS/dailygifs/yayray.gif\'"onmouseout="this.src=\'img/GIFS/dailygifs/yayray.jpg\'" >'; }?>		</div>	</div> <!-- end sixteen -->	</div><?// include "pages/resume.php";include 'inc/footer.php';