<?php 

$root_dir = str_replace ($_SERVER['DOCUMENT_ROOT'], '', realpath('.')); 
define("ROOT_DIR", $root_dir);

define(BASE_URL, "http://localhost/sbstudios/");
