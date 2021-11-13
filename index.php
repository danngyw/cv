<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
				<h3 class="job-title"> Senior PHP/WordPress Developer </h3>
				<p> +84 916681139 danhoat@gmail.com</p>
				<p> 523 Do Xuan Hop, P. Phuoc Long B, Ho Chi Minh City</p>
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
					<a href="https://linkedin.com/in/dannguyengia/" target="_blank">linkedin.com/dannguyengia</a>
				</li>
				<li>
					Github<br />
					<a href="https://github.com/danngyw/" target="_blank">github.com/danngyw</a>
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
					<label class="sub-label">Senior WordPress Developer at EngineThemes - Ho Chi Minh City</label>
					<p> Jun 2013 - Present</p>
					<p> EngineThemes is a WordPress application theme creator.</p>
					<ul>
						<li>Develop WordPres themes and plugins.</li>
						<li>Responsible for supporting existing products, developing new features for existing products or new products.</li>
						<li>Using git to deploy and manage source code.</li>
						<li>Technical support - work directly with customer via email and help them solve problems.</li>
						<li>Conduct internal trainings for developers within team</li>
					</ul>
					<p>Tools and technologies : SSH,WordPress,XML,HTML/CSS,PHP & MYSQL, JQUERY,AJAX,Sublime,Photoshop,Boostraps, SASS.</p>
					<p><span class="key-achievement "> Key achievement:</span> FreelanceEngine theme, MicrjobEngine theme.</p>
				</div>
				<div class="item">
					<label class="sub-label"> WordPress Developer at Goscom - Ho Chi Minh City</label>
					<p> Jun 2012 - May 2013</p>
					<p> Goscom is a software outsourcing company.</p>
					<ul>
						<li>Experience with Xampp (Linux, Apache, MySQL, PHP, HTML/CSS)</li>
						<li>Convert PSD file to HTML/CSS template.</li>
						<li>Customize WordPress theme, woocommerce and support customer.</li>
					</ul>
				</div>
			</div>

			<div class="line">
				<h3 class="label"> Education </h3>
				<div class="item">
					<label class="sub-label"> HCMUS - Bachelor's degree - Ho Chi Minh City</label>
					<p> Sep 2009 -  2013</p>
					<p>Learn programming languages like C/C++/C#/ASP.NET and OPP, MCV, algorithms ... Develop simple applications.</p>
				</div>

			</div>
			<div class="line skill-line">
				<h3 class="label">PHP SKILLS </h3>
				<ul>
					<li>Proficiency in OOP with a good understanding of MVC practices</li>
					<li>Strong knowledge of RESTful Web Services and JSON</li>
					<li>Excellent PHP & MySQL, JavaScript, Boostrap and SASS skills</li>
					<li>Good understand the Escrow api of PayPal and Stripe.</li>
					<li>Experience to implement a payment gateway api(paypal/stripe...) .</li>
</ul>
		</div>
	</div>
</div>
<?php get_footer();?>
