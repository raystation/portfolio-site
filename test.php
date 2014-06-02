<?php  
	
	include 'inc/work-info.php';
	$sf = sf_weather();
	
	echo $sf["temp"];
	echo $sf["condition"];
