<?php

define('IMG_URL','http://localhost/cv/img');
define('CV_PATH', __FILE__);
function get_fonts(){
	$fonts = array(
		'Lato' 			=> "'Lato', sans-serif;",
		'Montserrat' 	=> "'Montserrat', sans-serif;",
		'Oswald' 	=> 	"'Oswald', sans-serif;",
		'Open_Sans' 	=> "'Open Sans', sans-serif;",
		'Poppins' 	=> "'Poppins', sans-serif;",
		'Raleway' 	=> "'Raleway', sans-serif;",
		'Roboto' 	=> "'Roboto', sans-serif;",
		'Roboto Condensed' 	=> "'Roboto Condensed', sans-serif;",
		'Rubik' 	=> "'Rubik', sans-serif;",

	);
	return $fonts;
}
function get_font_define($key){
	$fonts = get_fonts();
	return $fonts[$key];
}

function get_header(){
	require_once('header.php');
}
function get_footer(){
	require_once('footer.php');
}