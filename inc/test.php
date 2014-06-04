<?php 

include 'lists.php';

$test = array( "Joker","Batman","Penguin","Croc","Two-face","Nightwing","Robin","Alfred","Mr. Freeze","Riddler");
// $test = all_lists();

echo "<pre>";

// var_dump($test);

// $array=$test[1]["items"];

// foreach ( $array as $i ) {
// 	echo $i."\n";
// }

//selects random number from array list

$rand = array_rand($test,9);
shuffle($rand);

foreach ( $rand as $num ) {
	echo $test[$num]."\n";
}




echo "</pre>";