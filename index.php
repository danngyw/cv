<?php
require_once('define.php');
require_once('functions.php');
?>
<?php get_header(); ?>
<div class="container">
	<div class=" heading">
		<div class="wrap">
			<div class="col-3 col-avatar">
				<img class="avatar" src="<?php echo IMG_URL;?>/danng.png">
			</div>
			<div class="col-9 col-right">
				<h1 class="fullname"> Dan Nguyen Gia</h1>
				<h3 class="job-title"> Senior PHP Developer </h3>
				<p> +84 916681139 danhoat@gmail.com</p>
				<p> 523 Do Xuan Hop, P. Phuoc Long B. Ho Chi Minh city</p>
			</div>
		</div>
	</div>
	<div class ="line-split"><span></span><span></span><span></span></div>
	<div class="row">
		<div class="col-3 sidebar ">
			<label class="label"> Skills</label>
			<ul class="skills">
				<li>
					WordPress
					<span class="rate"><span class="rate-10"></span></span>
				</li>
				<li> PHP <span class="rate"><span class=" rate-9"></span></span></li>
				<li> CSS<span class="rate"><span class=" rate-9"></span></span></li>
				<li> Javascript<span class="rate"><span class="rate-7"></span></span></li>
				<li> Jquery<span class="rate"><span class="rate-7"></span></span></li>

			</ul>
			<label class="label"> Languages</label>
			<ul class="skills">
				<li>
					English
					<span class="rate"><span class="rate-7"></span></span>
				</li>
				<li>
					VietNam
					<span class="rate"><span class="rate-10"></span></span>
				</li>
			</ul>
			<label class="label"> Social</label>
			<ul class="skills">
				<li>
					Linkedin
					<a href="linkedin.com/dannguyengia">linkedin.com/dannguyengia</a>
				</li>

			</ul>
		</div>
		<div class="col-9 col-right col-content">
			<div class="line">
				<h3 class="label"> Profile</h3>
				<p> The two main groups of image types are raster and vector. Raster images like JPEG, TIFF, GIF, BMP, and PNG are composed of pixels and can develop a “blocky” quality as the image is made larger because each pixel becomes larger. Vector images, like CGM and SVG, store lines instead of pixels. Using this method image size can be scaled without losing quality.</p>
			</div>
			<div class="line">
				<h3 class="label"> Employment History</h3>
				<div class="item">
					<label class="sub-label"> WordPress Developer at Goscom - Ho Chi Minh City</label>
					<p> Jun 2014 to Present</p>
					<p> WordPress Developer xyz Using this method image size can be scaled without losing quality. Raster images like JPEG, TIFF, GIF, BMP, and PNG are composed of pixels and can develop</p>
				</div>
				<div class="item">
					<label class="sub-label"> WordPress Developer at Goscom - Ho Chi Minh City</label>
					<p> Jun 2012 to May 2013</p>
					<p> WordPress Developer xyz Using this method image size can be scaled without losing quality</p>
				</div>
			</div>

			<div class="line">
				<h3 class="label"> Education </h3>
				<div class="item">
					<label class="sub-label"> HCMUS - Degree Bachelor</label>
					<p> Sep 2009 to 2013</p>
					<p> WordPress Developer xyz Using this method image size can be scaled without losing quality. Raster images like JPEG, TIFF, GIF, BMP, and PNG are composed of pixels and can develop</p>
				</div>

			</div>
		</div>
	</div>
</div>
<?php get_footer();?>
