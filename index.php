<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('define.php');
require_once('functions.php');
?>
<?php get_header(); ?>
<div class="container">
	<div class=" heading" style="background-color: #59a9a0;">
		<div class="wrap">
			<div class="col-3 col-avatar">
				<img class="avatar" src="<?php echo IMG_URL;?>/danng.png">
			</div>
			<div class="col-9 col-right">
				<h1 class="fullname"> Dan Nguyen Gia</h1>
				<h3 class="job-title"> Senior PHP Developer </h3>
				<p> +84 916681139 danhoat@gmail.com</p>
				<p> 523 Do Xuan Hop, P. Phuoc Long B. Ho Chi Minh City</p>
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
					<span class="rate"><span class="rate-9"></span></span>
				</li>
				<li> PHP & MySQL<span class="rate"><span class=" rate-8"></span></span></li>
				<li> HTML/CSS<span class="rate"><span class=" rate-8"></span></span></li>
				<li> Javascript/jQuery<span class="rate"><span class="rate-7"></span></span></li>
				<li> Git<span class="rate"><span class="rate-7"></span></span></li>


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
					<a href="https://linkedin.com/dannguyengia">linkedin.com/dannguyengia</a>
				</li>

			</ul>
		</div>
		<div class="col-9 col-right col-content">
			<div class="line">
				<h3 class="label"> Profile </h3>
				<p>Around 8+ years of extensive experience as a PHP Web Application Developer by development WordPress themes and plugins. Extensive experience in payment api work and how to implement it. Experience in technical support and can handle almost WordPress issues from customer.</p>
			</div>
			<div class="line">
				<h3 class="label"> Employment History</h3>
				<div class="item">
					<label class="sub-label"> WordPress Developer at EngineThemes - Ho Chi Minh City</label>
					<p> Jun 2013 - Present</p>
					<p> EngineThemes is a WordPress application theme creator.</p>
					<ul>
						<li>Core team development on all products( Themes and Plugins)</li>
						<li>Responsible for supporting existing applications, developing new features for existing themes, and developing new products.</li>
						<li>Experience in payment gateway(paypal/stripe/payfast...) api.</li>
						<li>Good understand the Escrow api of PayPal and Stripe.</li>
						<li>Particularly strong with JavaScript and CSS including Ajax, XML, incremental page loading, etc</li>
						<li>Deploy and manager sourcode on git.</li>
						<li>Technical support - work directly with customer via email and help them solve problems.</li>
					</ul>
				</div>
				<div class="item">
					<label class="sub-label"> WordPress Developer at Goscom - Ho Chi Minh City</label>
					<p> Jun 2012 - May 2013</p>
					<p> Goscom is a software outsourcing company.</p>
					<ul>
						<li>Customize WordPress site for client</li>
						<li>Convert psd file to html/css file.</li>
						<li>Customize woocommerce for small shop.</li>
						<li>Deploy and support client to solve almost their issues feedback.</li>
						<li>Good knowledge PHP & MySQL, WordPress, HTML/CSS , Javascript and Ajax.</li>
					</ul>
				</div>
			</div>

			<div class="line">
				<h3 class="label"> Education </h3>
				<div class="item">
					<label class="sub-label"> HCMUS - Degree Bachelor - Ho Chi Minh City</label>
					<p> Sep 2009 -  2013</p>
				</div>

			</div>
		</div>
	</div>
</div>
<?php get_footer();?>
