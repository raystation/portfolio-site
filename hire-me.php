<?// PAGE VARIABLESinclude_once "inc/lists.php";$content="";$title="";$followup=""; $originaljobposting=""; $logo=""; $jobTitle=""; $company=""; $date=""; $name=""; $email=""; $slider=""; $hiremepage=""; $other=""; $other2=""; $sample_works=""; $closing=""; $resume=""; $portrait=""; $job_details="";$portrait_html="";$slider_html = "";$job_details_html="";$logo_html="";$resume_path="img/ray_yuen_resume.pdf";// $id = $_GET["id"];$id = (isset( $_GET["id"] ) ? $_GET["id"] : null );require_once "inc/company-info.php";$title = "Hire Me, $company!";// SKILLS$skills_html="";$skills = list_tech_skills();$skills = $skills['list'];// var_dump($skills);foreach ($skills as $key => $skill) {	if ($skill!=="clear") {		if ($skill["percent"]>50) {			if (!is_null($id)) {				$skills_html.="<li><a href='work?f=$skill[url]&id=$id'>$skill[skill]</a>";			} else {				$skills_html.="<li><a href='$skill[url]'>$skill[skill]</a>";			}		}	}}$rubiks=false;$monkey=false;$yayray=false;require_once "inc/header.php";// INTERVIEW SLIDERif ( $slider_img!=="" ) {	$slider_html = "		<div class='navband'>			<div class='sixteen columns'>				<img class='scale-with-grid' src='$slider_img'>			</div>		</div>	";}$content.=$slider_html;// nameif ($name) {	$name_html = "To $name, ";}else {	// $name_html = "To Whom It May Concern: ";	$name_html = "";}// closingif ($closing) {	$closing_html = "<p>$closing</p>";} else {	$closing_html = "		<p>Please feel free to contact me with any questions and to take a look at the rest of my <a href='work?id=$id'>work</a> and my <a href='resume?id=$id'>resume</a>.</p>		<p>Sincerely, <br>Ray</p>	";}// job detailsif ( isset($job_details) ) {	$job_details_html = "		<hr>		<div class='original-job-button'>Job Details</div><div class='original-job-details hide'>			$job_details		</div>	";}// SIDEBARif ($portrait) {	// if $portrait is randomize, else drop in specified portrait	if ($portrait == "random") {		# code...	} else {		$portrait_html = "			<img alt='self portrait of Ray Yuen' title='self portrait of Ray Yuen' src='img/$portrait' class='portrait'>		";	}}else//if nothing is specified, generic photo portrait{	$portrait = "GIFS/me-photo-nextlesson.jpg";	$portrait_html = "		<img alt='self portrait of Ray Yuen' title='self portrait of Ray Yuen' src='img/GIFS/me-photo-nextlesson.jpg' class='portrait'>	";}// sidebar logoif ($logo) {	$logo_html = "<img class='logo' src='$logo'>";}// resumeif ($resume) {	$resume_path = $resume;}$sample_projects_html="";if ( isset($sample_projects_array) ) {	$clearfix="";	$count = 1;	foreach ($sample_projects_array as $key => $sample_project) {		$sample_projects_html.="			<div class='four columns add-bottom alpha caption'>				<a href='work?project=$sample_project[path]&id=$id'><img class='scale-with-grid' src='img/$sample_project[path]/thumb.$sample_project[type]'>$sample_project[name]</a>. $sample_project[desc]			</div>		";		$count++;		if ($count > 3) {			$sample_projects_html.="<div class='clearfix'></div>";			$count = 1;		}	}} elseif ( isset($project1) ) {	$sample_projects_html="		<div class='four columns add-bottom alpha caption'>			<a href='$project1[path]&id=$id'><img class='scale-with-grid' src='img/$project1[path]/thumb.$project1[type]'>$project1[name]</a>. $project1[desc]		</div>		<div class='four columns add-bottom alpha caption'>			<a href='$project2[path]&id=$id'><img class='scale-with-grid' src='img/$project2[path]/thumb.$project2[type]'>$project2[name]</a>. $project2[desc]		</div>		<div class='four columns add-bottom omega caption'>			<a href='$project3[path]&id=$id'><img class='scale-with-grid' src='img/$project3[path]/thumb.$project3[type]'>$project3[name]</a>. $project3[desc]		</div>	";} else {	$sample_projects_html="";}$content.="<div class='container cover-letter'>	<div class='landing-page fourteen columns offset-by-two'>		<p class='date'><a href='$hiremepage'>$date</a></p>		<h2 class='heading'>So, about that <a class='job-title' href='$originaljobposting' target='_blank'>$jobTitle</a> position...</h2>		<hr class='separator'>		<p>$name_html</p>		$copy		<div class='clearfix sample-projects'></div>		$sample_projects_html		<div class='clearfix'></div>		<p>$closing_html</p>		$other	</div></div></div><div class='quick-bio'>	<div class='container cover-letter' >		<div class='landing-page fourteen columns offset-by-two'>			<h1>Me at a Glance:</h1>			<p>				I'm a designer, illustrator, programmer living and working in San Francisco. I've worked in games, publishing, marketing, and most recently in edtech at NextLesson building products.			</p>			<div class='three columns caption alpha'>				<img src='img/$portrait' alt='' class='scale-with-grid'>			</div>			<div class='checklist nine columns omega'>				<div class='caption'>					<li>Ray Yuen					<li>San Francisco					<li><a href='tel:347-439-5576'>347.439.5576</a>					<li><a href='mailto:rayuen@gmail.com'>rayuen@gmail.com</a>					<li>&#10004; looking for FT work					<li>&#10004; BFA in Graphic Design					<li>&#10004; U.S. Citizen					<li>&#10004; no criminal record				</div>			</div>			<div class='clearfix'></div>			<hr class='separator'>			<h3> Things I am Good at: </h3>			<ul class='skills'>				$skills_html			</ul>			<div class='button'><a href='work?id=$id'>Portfolio</a></div>			<div class='button'><a href='about?view=resume&id=$id'>Full Resume</a></div>			<div class='clearfix'></div>			<div class='original-job-button-minimal'>Original Job Details</div>			<div class='original-job-details hide'>				$job_details			</div>		</div>	</div></div>";echo $content;// include "pages/resume.php";include 'inc/footer.php';