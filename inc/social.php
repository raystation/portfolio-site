<?php

	function get_social_info(){
		$social=array(
			"@linkedin"=>"linkedin.com/in/rayuen",
			"@dribbble"=>"dribbble.com/raystation",
			"@instagram"=>"instagram.com/raystation",
			// "@flickr"=>"flickr.com/rayuen",
			"@twitter"=>"twitter.com/rayuen",
			"@github"=>"github.com/raystation",
		);
		return $social;
	}

	function get_social_icons(){
		$social=array(
			array(
				"name"=>"email",
				"url"=>"mailto:rayuen@gmail.com",
				"icon"=>"envelope-o",
			),
			array(
				"name"=>"Linkedin",
				"url"=>"http://www.linkedin.com/in/rayuen",
				"icon"=>"linkedin",
			),
			array(
				"name"=>"Dribbble",
				"url"=>"http://www.dribbble.com/raystation",
				"icon"=>"dribbble",
			),
			array(
				"name"=>"Instagram",
				"url"=>"http://www.instagram.com/raystation",
				"icon"=>"instagram",
			),
			array(
				"name"=>"Github",
				"url"=>"http://www.github.com/raystation",
				"icon"=>"github-alt",
			),
			// array(
			// 	"name"=>"Flickr",
			// 	"url"=>"http://www.flickr.com/rayuen",
			// 	"icon"=>"flickr",
			// ),
			array(
				"name"=>"Twitter",
				"url"=>"http://www.twitter.com/rayuen",
				"icon"=>"twitter",
			),
		);
		return $social;
	}


;?>