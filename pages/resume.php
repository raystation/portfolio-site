<?include_once 'inc/social.php';include_once 'inc/resume.php';include_once 'inc/lists.php';// TODO: make the job details collapsible, option to keep it collapsible or not// RETRIEVES INFORMATION FROM INC/RESUME.PHP AND RETURNS HTML$bio_html = get_bio($bio_array);$work_history_html = get_work_history($work_history_array);//HTML STRUCTUREecho "<section class='resume'>	<div class='bio sixteen columns'>$bio_html</div>	<div class='sixteen columns'>		<div class='work-history two-thirds column alpha'>			<hr>			<h1 class='resume-title' style='margin-bottom:30px;'>Work History</h1>			$work_history_html		</div>		<div class='one-third column omega' id='skills'>			<hr>			<h1 class='resume-title' style='margin-bottom:30px;'>Things I'm pretty good at</h1>			<div class='tech-skills add-bottom'>";html_print_tech_skills();echo "		 	</div>			<div id='random-facts' class='list-spacing-fix'>				<hr class='add-top'>				<p class='resume-title'>Random Facts</p>";list_html(list_random_facts());echo "				<div class='mobile'>					<hr>";social_print();echo "				</div>			</div>		</div></section>";// FUNCTIONSfunction get_bio($bio) {	$dick = 	$portrait = array("GIFS/me-barcade.gif","GIFS/me-tomjerry.gif");	$rand = array_rand($portrait);	$social_networks = get_social_info();	$social="";	foreach ($social_networks as $key => $network) {		$social.="<li><a href='http://www.$network' target='_blank'>$key</a>";	}	$content="		<div class='portrait one-third column alpha add-bottom'>			<img src='img/$portrait[$rand]' class='scale-with-grid'>		</div>		<div class='two-thirds column omega'>			<div class='one-third column alpha'>				<hr class='remove-top'>				<p>					$bio[name]<br>					$bio[location]<br>					<a href='tel:$bio[phone]'>$bio[phone]</a><br>					<a href='mailto:$bio[email]'>$bio[email]</a>				</p>			</div>			<div class='one-third column omega'>				<div class='desktop'>					<hr class='remove-top'>					<ul class='list-spacing-fix add-bottom'>						$social					<ul>				</div>			</div>		</div>		<div class='two-thirds column omega'>			<div class='one-third column alpha'>				<hr>				<h1 class='resume-title'>About Me</h1>				<p>					$bio[about_me]				</p>			</div>			<div class='one-third column omega'>				<hr>				<h1 class='resume-title'>Education</h1>				<p>					$bio[education]				</p>			</div>		</div>	";	return $content;}function get_work_history($work_history) {	$content="";	$count = 1;	foreach ($work_history as $key => $place) {		$duties="";		if ($place['duties']!=="") {			# code...			foreach ($place['duties'] as $key => $duty) {				$duties.="<li>$duty";			}		}		$company = $place['url'] !=="" ? "<a href='$place[url]'>$place[company]</a>" : "$place[company]";		$description = $place['description'] !=="" ? "<p class='description'>$place[description]</p>" : "";		$array_count = count($work_history); //6		if ( $count == $array_count ) {			$line = "";		} else {			$line = "<hr class='resume'>";		}		$content .= "			<div class='company'>	 			<h2 class='job-title'>$place[job_title]</h2>	 			<h3>$company</h3>	 			<h3>$place[start] - $place[end], $place[location]</h3>	 			$description	 			<ul>$duties</ul>				$line			</div>		";		$count++;	}	return $content;}