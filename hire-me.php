<?// PAGE VARIABLESinclude_once "inc/lists.php";$content="";$title="";$followup=""; $originaljobposting=""; $logo=""; $jobTitle=""; $company=""; $date=""; $name=""; $email=""; $slider=""; $hiremepage=""; $other=""; $other2=""; $sample_works=""; $closing=""; $resume=""; $portrait=""; $job_details="";$portrait_html="";$funny_portrait = (isset($funny_portrait) ? $funny_portrait : FALSE ) ;$slider_html = "";$job_details_html="";$logo_html="";$resume_path="img/ray_yuen_resume.pdf";// $id = $_GET["id"];$id = (isset( $_GET["id"] ) ? $_GET["id"] : null );require_once "inc/company-info.php";$title = "Let's Talk, $hiring_company!";// SKILLS$skills_html="";$skills = list_tech_skills();$skills = $skills['list'];// var_dump($skills);foreach ($skills as $key => $skill) {	if ($skill!=="clear") {		if ($skill["percent"]>50) {			if (!is_null($id)) {				$skills_html.="<li><a href='work?f=$skill[url]&id=$id'>$skill[skill]</a>";			} else {				$skills_html.="<li><a href='$skill[url]'>$skill[skill]</a>";			}		}	}}$rubiks=false;$monkey=false;$yayray=false;require_once "inc/header.php";// INTERVIEW SLIDER// if ( $slider_img!=="" ) {if ( isset($slider_img) ) {	if ($slider_img!=="") {		$slider_html = "			</div>			<div class='navband' style='padding:0,margin:0;'>				<img class='scale-with-grid' src='$slider_img'>			</div>			<div class='container'>		";	}}$content.=$slider_html;// nameif ($name) {	$name_html = "$name, ";}else {	// $name_html = "To Whom It May Concern: ";	$name_html = "Hello $hiring_company!";}if ($copy == FALSE) {	$copy = "<span style='color:red;'>error. markdown file does not exist.</span>";}// closingif ($closing) {	$closing_html = "<p>$closing</p>";} else {	$closing_html = "		<p>I'd love the opportunity to share my work with you and to hear more about the role. Feel free to look at my work and contact me with any questions.</p>		<p>Thanks for your time, <br>Ray</p>	";}// job details// if ( $job_details!== null ) {// 	$job_details_html = "// 		<div class='original-job-button'>Job Details</div>// 		<div class='original-job-details hide'>// 			$job_details// 		</div>// 	";// } else {// 	$job_details_html="// 		<div class='original-job-button'>Job Details</div>// 		<div class='original-job-details'>// 			<span style='color:red;'>error. markdown file does not exist.</span>// 		</div>// 	";// }// SIDEBARif ($portrait) {	// if $portrait is randomize, else drop in specified portrait	if ($portrait == "random") {		# code...	} else {		$portrait_html = "			<img alt='self portrait of Ray Yuen' title='self portrait of Ray Yuen' src='img/$portrait' class='portrait'>		";	}}else//if nothing is specified, generic photo portrait{	$portrait = "GIFS/me-photo-nextlesson.jpg";	$portrait_html = "		<img alt='self portrait of Ray Yuen' title='self portrait of Ray Yuen' src='img/GIFS/me-photo-nextlesson.jpg' class='portrait'>	";}// sidebar logoif ($logo) {	$logo_html = "<img class='logo' src='$logo'>";}// resumeif ($resume) {	$resume_path = $resume;}$sample_projects_html="";if ( isset($sample_projects_array) ) {	$clearfix="";	$thumb="";	$count = 1;	foreach ($sample_projects_array as $key => $sample_project) {		$thumb = check_for_img_format( "img/$sample_project[path]" );		$sample_projects_html.="			<div class='four columns add-bottom alpha caption'>				<a href='work?project=$sample_project[path]&id=$id'><img class='scale-with-grid' src='$thumb' alt='$sample_project[name] - $sample_project[desc]'>$sample_project[name]</a>. $sample_project[desc]			</div>		";		$count++;		if ($count > 3) {			$sample_projects_html.="<div class='clearfix'></div>";			$count = 1;		}	}} elseif ( isset($project1) ) {	$sample_projects_html="		<div class='four columns add-bottom alpha caption'>			<a href='$project1[path]&id=$id'><img class='scale-with-grid' src='img/$project1[path]/thumb.$project1[type]'>$project1[name]</a>. $project1[desc]		</div>		<div class='four columns add-bottom alpha caption'>			<a href='$project2[path]&id=$id'><img class='scale-with-grid' src='img/$project2[path]/thumb.$project2[type]'>$project2[name]</a>. $project2[desc]		</div>		<div class='four columns add-bottom omega caption'>			<a href='$project3[path]&id=$id'><img class='scale-with-grid' src='img/$project3[path]/thumb.$project3[type]'>$project3[name]</a>. $project3[desc]		</div>	";} else {	$sample_projects_html="";}if ( isset($intro_paragraph) ) {	$intro_html = $intro_paragraph;} else {	$intro_html = "		So, about that <a class='job-title' href='$originaljobposting' target='_blank'>$jobTitle</a> position...	";}if ($job_details !== FALSE || !isset($job_details)) {	$job_details_html = "		<div class='original-job-button-minimal'>Original Job Details</div>		<div class='original-job-details hide'>			$job_details		</div>	";} else {	$job_details_html = "";}$bio_stats = "	<div class='caption'>		<li>Ray Yuen		<li>San Francisco		<li><a href='tel:347-439-5576'>347.439.5576</a>		<li><a href='mailto:rayuen@gmail.com'>rayuen@gmail.com</a>		<li>&#10004; looking for FT work		<li>&#10004; BFA in Graphic Design		<li>&#10004; U.S. Citizen		<li>&#10004; no criminal record	</div>";if ($funny_portrait == TRUE) {	$portrait_html = "		<div class='eight columns alpha'>			<video width='320' height='240' autoplay loop>			  <source src='img/about-me/laptop-work.mp4' type='video/mp4'>			Your browser does not support the video tag.			</video>		</div>		<div class='four columns checklist omega'>			$bio_stats		</div>	";} else {	$portrait_html = "		<div class='four columns caption alpha'>			<img src='img/$portrait' alt='' class='portrait scale-with-grid'>		</div>		<div class='checklist eight columns omega columns'>			$bio_stats		</div>	";}$content .= "<div class='container cover-letter'>	<div class='landing-page fourteen columns offset-by-two'>		<p class='date'><a href='$hiremepage'>$date</a></p>		<h2 class='heading'>$intro_html</h2>		<hr class='separator'>		<p>$name_html</p>		<p>$copy</p>		$closing_html		<h3>Work Samples:</h3>		$sample_projects_html		<div class='clearfix add-bottom'></div>		$other	</div></div></div><div class='quick-bio'>	<div class='container cover-letter'>		<div class='landing-page fourteen columns offset-by-two'>			<h1>Me at a Glance:</h1>			<p>				I'm a designer, illustrator, programmer living and working in San Francisco. I've worked in games, publishing, marketing, and most recently in edtech at NextLesson building products.			</p>			$portrait_html			<div class='clearfix'></div>			<hr class='separator'>			<h3> Things I am Good at: </h3>			<ul class='skills'>				$skills_html			</ul>			<div class='button'><a href='work?id=$id'>Portfolio</a></div>			<div class='button'><a href='about?view=resume&id=$id'>Full Resume</a></div>			<div class='clearfix'></div>			$job_details_html		</div>	</div></div>";echo $content;// include "pages/resume.php";include 'inc/footer.php';// class Company {// 	public $content;// 	public $short_name;// 	public $slider_img;// 	public $originaljobposting;// 	public $company;// 	public $jobTitle;// 	public $date;// 	public $name;// 	public $email;// 	public $portrait;// 	public $hiremepage;// 	public $sample_projects_array;// 	public $closing;// 	public $resume = "img/ray_yuen_resume.pdf";// 	public function print_page(){// 	  echo $this->content;// 	}// 	public function __construct(){// 	  echo $this->content;// 	}// }