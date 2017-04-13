<?include_once 'inc/social.php';include_once 'inc/resume.php';include_once 'inc/lists.php';$landing_page_nav="";$id = (isset( $_GET["id"] ) ? $_GET["id"] : null );// RETRIEVES INFORMATION FROM INC/RESUME.PHP AND RETURNS HTML$bio_html = get_bio($bio_array);$work_history_html = get_work_history($work_history_array);// COMING FROM THE JOB LANDING PAGE, THIS WILL GENERATE A SECONDARY NAV BAR ON THE BOTTOM// if ( isset($id) ) {// 	include_once "inc/company-info.php";// 	$landing_page_nav = "// 		<div class='back-to-landing-page-menu'>// 			<div class='container'>// 				<div class='twelve columns'>// 					<a href='./hire-me?id=$id'>&#11013; back to job application</a>// 				</div>// 			</div>// 		</div>// 	";// }//HTML STRUCTUREecho "$landing_page_nav<section class='resume'>	<div class='bio sixteen columns'>$bio_html</div>	<div class='sixteen columns'>		<div class='work-history two-thirds column alpha'>			<hr>			<h1 class='resume-title' style='margin-bottom:30px;'>Work History</h1>			$work_history_html		</div>		<div class='one-third column omega' id='skills'>			<hr>			<h1 class='resume-title' style='margin-bottom:30px;'>Things I'm pretty good at</h1>			<div class='tech-skills add-bottom'>";html_print_tech_skills();echo "		 	</div>			<div id='random-facts' class='list-spacing-fix'>				<hr class='add-top'>				<p class='resume-title'>Random Facts</p>";list_html(list_random_facts());echo "				<div class='mobile'>					<hr>";social_print();echo "				</div>			</div>		</div></section>";// FUNCTIONSfunction get_bio($bio) {	$dick = 	$portrait = array("GIFS/me-barcade.gif","GIFS/me-tomjerry.gif");	$rand = array_rand($portrait);	$social_networks = get_social_info();	$social="";	foreach ($social_networks as $key => $network) {		$social.="<a href='http://www.$network' target='_blank'>$key</a><br>";	}	$content="		<div class='portrait one-third column alpha add-bottom'>			<img src='img/$portrait[$rand]' class='scale-with-grid'>		</div>		<div class='two-thirds column omega'>			<div class='one-third column alpha'>				<hr class='remove-top'>				<p>					<h1 class='resume-title'>$bio[name]</h1>					$bio[location]<br>					<a href='tel:$bio[phone]'>$bio[phone]</a><br>					<a href='mailto:$bio[email]'>$bio[email]</a>				</p>				<div class='resume-pdf'>					<a class='scale-with-grid tooltip' title='downloadable resume in PDF' href='img/ray_yuen_resume.pdf' target='_blank'><img src='img/icon/pdf.svg' alt='Raymond Yuen resume'></a>				</div>			</div>			<div class='one-third column omega'>				<div class='desktop'>					<hr class='remove-top'>					$social				</div>			</div>		</div>		<div class='two-thirds column omega'>			<div class='one-third column alpha'>				<hr>				<h1 class='resume-title'>About Me</h1>				<p>					$bio[about_me]				</p>			</div>			<div class='one-third column omega'>				<hr>				<h1 class='resume-title'>Education</h1>				<p>					$bio[education]				</p>			</div>		</div>	";	return $content;}function get_work_history($work_history) {	$content="";	global $footer_add;	$count = 1;	foreach ($work_history as $key => $place) {		$duties="";		if ($place['duties']!=="") {			foreach ($place['duties'] as $key => $duty) {				$duties.="<li>$duty";			}		}		$company = $place['url'] !=="" ? "<a href='$place[url]'>$place[company]</a>" : "$place[company]";		$description = $place['description'] !=="" ? "$place[description]" : "";		$array_count = count($work_history); //6		if ( $count == $array_count ) {			$line = "";		} else {			$line = "<hr class='resume'>";		}		$content .= "			<div class='company'>	 			<h2 class='job-title'>$place[job_title]</h2>	 			<h3>$company</h3>	 			<h3>$place[start] - $place[end], $place[location]</h3>	 			<p class='description'>$description</p>	 			<div class='work-history-button-$count'><button>more details</button></div>	 			<div class='work-history-button-$count hide'><button>less details</button></div>	 			<div id='work-history-$count' class='hide'>		 			<ul>$duties</ul>	 			</div>				$line			</div>		";		$footer_add.="			<script type='text/javascript'>				$('.work-history-button-$count').click(function() {					$('#work-history-$count').toggle(200);					$('.work-history-button-$count').toggleClass('hide');				});			</script>		";		$count++;	}	return $content;}