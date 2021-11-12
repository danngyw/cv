<?php
	$fonts = get_fonts();
	$content_font 	= isset($_COOKIE['content_font']) ? $_COOKIE['content_font'] : '';
	$label_font 	= isset($_COOKIE['label_font']) ? $_COOKIE['label_font'] : '';
	$css= '';
	if($content_font){
		$font_css  = get_font_define($content_font);
		$css .=".col-content p{ font-family:{$font_css} };";
	}
	if($label_font){
		$label_css  = get_font_define($label_font);
		$css .=".col-content .label{ font-family:{$label_css} };";
	}

?>
<div class="tool">
	<ul>
		<li>
			Set Font Content:<br />
			<select class="content-font">
				<?php
				foreach($fonts as $key=>$font){?>
				<option value="<?php echo $key;?>"><?php echo $key;?></option>
				<?php } ?>

			</select>
		</li>
		<li>
			Set Font Content Label:<br />
			<select class="content-label">
				<?php
				foreach($fonts as $key=>$font){?>
				<option value="<?php echo $key;?>"><?php echo $key;?></option>
				<?php } ?>

			</select>
		</li>
	</ul>
</div>

<style type="text/css"><?php echo $css;?></style>
</html>