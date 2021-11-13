<?php

	$content_font 	= isset($_COOKIE['content_font']) ? $_COOKIE['content_font'] : 'Rubik';
	$label_font 	= isset($_COOKIE['label_font']) ? $_COOKIE['label_font'] : 'Rubik';
	$css= '';
	if($label_font){
		$label_css  = get_font_define($label_font);
		$css.=" .col-content .label{ font-family:{$label_css}; font-weight:400;  }";
	}
	if($content_font){
		$font_css  = get_font_define($content_font);
		$css.=" .col-content{ font-family:{$font_css}; font-size:16px; }  .col-content li{font-size:15px;} ";
	}

	if( isset($_SERVER['HTTP_USER_AGENT']) ){
 		// require_once('tool.php');
 	}
 ?>
<style type="text/css"><?php echo $css;?></style>
</body>
</html>