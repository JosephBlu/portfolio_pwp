<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "About Me";
/*load the HTML head tag: head-utils.php*/
require_once(dirname(__DIR__) . "/php/partials/head-utils.php");
?>
<body class="sfooter content-layout">
	<div class="sfooter-content">

		<!-- insert header and navbar -->
		<?php require_once(dirname(__DIR__) . "/php/partials/header.php");?>

		<!-- begin main content page layout -->
		<main class="container p-t-nav">

			<!-- insert the page title up top -->
			<?php require_once(dirname(__DIR__) . "/php/partials/page-title.php");?>

			<!-- begin main content area -->
			<div class="row row-flex content-wrap">

				<!-- page content -->
				<div class="col-sm-9 col-sm-push-3 content-panel">
					<div>
						<h1>Hi! <br>Welcome to my very own page.</h1>
						<p>Born in the Bay Area of California and raised in the Land of Enchantment, I grew up wanting the best of the two vastly different environments. I had the need to be innovative and constantly evolving like the technologies in the Bay but also be creative and unique like the beautiful sunrise and sunsets of New Mexico.  </p>
						<p>Of all the skills I have learned, programming has allowed me to combine both of my interests. It allows me to continuously improve myself and my skills, with the ever-changing environment of technology, there is never a day-off in learning what is coming next. Developing allows me to be creative, and just like any other art project, you have to build the structure or plans, than you decided the colors and graphics. The challenge in web and application developing is that there are rules that you need to follow, so creating within these guidelines presents a set of challenges that I do find to be fun and tedious at the same time.</p>
						<hr>
						<h1>So why is my about page important?</h1>
						<p>Deep down to my core, my biggest motivation has always been helping others with their challenges. I'm here to use the skills that I learn as a developer to help you stand out in the digital crowd. Today, with the business climate always changing, having only social media profiles to help you get recognized is never enough. Social media are tools that can be used. But giving your business or persoanl self a website allows you to display only your business or yourself to the world without others having to deal with those pesky random posts.</p>
						<div>
						<h1>What are my skills?</h1>
						</div>
						<div>
						<p>My skills are important because my knowledge in web development is what's going to provide the service that you are looking for.</p>
						</div>
						<div >
						<ul class="ul-style">
							<li>UI/UX Design</li>
							<li>HTML5</li>
							<li>CSS3</li>
							<li>LAMP stack
								<ul>
									<li><i>L</i>inux</li>
									<li><i>A</i>pache</li>
									<li><i>M</i>ySQL</li>
									<li><i>P</i>hp</li>
								</ul>
							</li>
							<li>Object Oriented Programming (OOP)</li>
							<li>Wordpress</li>
						</ul>
					</div>
					</div>
				</div>

				<!-- side panel -->
				<div class="col-sm-3 col-sm-pull-9 side-panel">
					<?php require_once(dirname(__DIR__) . "/php/partials/side-panel.php");?>
				</div>

			</div><!--/.row-flex-->
		</main>

	</div><!--/.sfooter-content-->

	<!-- insert footer -->
	<?php require_once(dirname(__DIR__) . "/php/partials/footer.php");?>

</body>
</html>
