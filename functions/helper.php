<?php

$works = array(
	// array( "name" => "idibon", 										"path" => "idibon",											"thumb" => "thumb.jpg" ),
	// array( "name" => "Tiger, Tiger, Tail on Fire!",					"path" => "temp",											"thumb" => "thumb.jpg" ),
	//array( "name" => "Battle Revolution", 							"path" => "temp",											"thumb" => "thumb.jpg" ),
	//array( "name" => "Featured Shops", 							"path" => "temp",											"thumb" => "thumb.jpg" )
	//array( "name" => "Mystery Dungeon 2", 							"path" => "temp",											"thumb" => "thumb.jpg" ),
	//array( "name" => "Pocket Pokedex", 							"path" => "temp",											"thumb" => "thumb.jpg" ),
	//array( "name" => "Pokemon 15th Anniv", 						"path" => "temp",											"thumb" => "thumb.jpg" ),
	//array( "name" => "Toy Fair", 									"path" => "temp",											"thumb" => "thumb.jpg" ),
	array( "name" => "100 Principles of Game&nbsp;Design", 		"path" => "100-principles-of-game-design", 				"thumb" => "thumb.jpg" ), //done
	array( "name" => "Abriendo Puertas",								"path" => "abriendo-puertas",								"thumb" => "thumb.jpg" ), //copy
	array( "name" => "Animore", 										"path" => "project-animore", 										"thumb" => "thumb.jpg" ), //done
	array( "name" => "Arceus and the Jewel of&nbsp;Life",					"path" => "arceus",											"thumb" => "thumb.jpg" ), //done
	array( "name" => "Art+Paris",										"path" => "art-and-paris",									"thumb" => "thumb.jpg" ),  //images
	array( "name" => "Chronicles of Old New&nbsp;Boston", 			"path" => "chronicles-of-old-boston",					"thumb" => "thumb.jpg" ), //done
	array( "name" => "Chronicles of Old New&nbsp;Las Vegas", 		"path" => "chronicles-of-old-las-vegas",					"thumb" => "thumb.jpg" ), //done
	array( "name" => "Chronicles of Old New&nbsp;York", 			"path" => "chronicles-of-old-new-york",					"thumb" => "thumb.jpg" ),  //images
	array( "name" => "Chronicles of Old&nbsp;London", 				"path" => "chronicles-of-old-london",					"thumb" => "thumb.jpg" ), //images
	array( "name" => "Chronicles of Old&nbsp;Rome",			 	"path" => "chronicles-of-old-rome",						"thumb" => "thumb.jpg" ),
	array( "name" => "City Style", 										"path" => "city-style",										"thumb" => "thumb.jpg" ), //done
	array( "name" => "Color Chameleon", 							"path" => "color-chameleon",								"thumb" => "thumb.jpg" ), 
	array( "name" => "Edgeware", 										"path" => "edgeware",										"thumb" => "thumb.jpg" ), //copy
	array( "name" => "Egg Baby", 										"path" => "egg-baby",										"thumb" => "thumb.jpg" ),  //more images
	array( "name" => "Indiginauts", 									"path" => "indiginauts", 									"thumb" => "thumb.jpg" ), //copy
	array( "name" => "Malado Baldwin Wordpress", 					"path" => "malado-baldwin-wordpress",					"thumb" => "thumb.jpg" ),  //done
	array( "name" => "Malado Baldwin",								"path" => "malado-baldwin-indexhibit",					"thumb" => "thumb.jpg" ), //done
	array( "name" => "Monkey Mo, Monkey&nbsp;Go!",		 		"path" => "monkey-mo",									"thumb" => "thumb.jpg" ), 
	array( "name" => "Nerd Comics",		"path" => "nerd-comics",					"thumb" => "thumb.jpg" ), //done
	array( "name" => "Pok&eacute;mon 15th Anniversary",		"path" => "15th-anniversary",					"thumb" => "thumb.jpg" ), //done
	array( "name" => "Pok&eacute;mon: Toys\"R\"Us Feature Shop",		"path" => "feature-shop",					"thumb" => "thumb.jpg" ), //done
	array( "name" => "Sarah Walko ",									"path" => "sarah-walko-wordpress",						"thumb" => "thumb.jpg" ), //copy
	array( "name" => "Scavenger Hunt", 								"path" => "scavenger-hunt",								"thumb" => "thumb.jpg" ), //done
	array( "name" => "Storymaps", 									"path" => "storymaps",										"thumb" => "thumb.jpg" ), //copy
	array( "name" => "Suspended Belief Studios",						"path" => "suspended-belief-studios",						"thumb" => "thumb.jpg" ), //done
	array( "name" => "The 3", 											"path" => "the3", 											"thumb" => "thumb.svg" ), //done
	array( "name" => "The Rise of Darkrai", 							"path" => "darkrai",										"thumb" => "thumb.jpg" ), //done
); ?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>

<?php  
	// foreach ( $works as $work ) {
	//   	echo "\$title = ( \$project == '".$work[path]."' ? '".$work[name]."' : NULL );\n<br>";
	//   }  
;?>

<?php
	foreach ( $works as $work ) {
		
		echo "	case '".$work[path]."':"."<br>";
		echo "		\$title = '".$work[name]."';"."<br>";
		echo "	break;"."<br>";
		echo "<br>";
	}
;?>

</body>

</html>
