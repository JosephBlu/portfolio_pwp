<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Services";
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
					<h2>Basic Web site package</h2>
					<p>As I mentioned before, Having social media as a way to give your business life in this day-and-age is not enough to help it thrive. Especially for small businesses. The best thing about the internet is that its a leveled playing field between small and big businesses. So having a web page can benefit you.</p>
					<p>I created the Web site starter package to help you get started. </p>
					<ul class="ul-style">
						<li>A full responsive website</li>
						<li>two extra web pages</li>
						<li>functioning contact page</li>
						<li>Functioning social media links</li>
						<li>3 free months of updating and maintenance.</li>
					</ul>
					<hr>
					<h2>Website Makeover</h2>
					<p>If you already have a website that you feel is not what you hoped it would look like, or lets say you just don't have the time-in-the-day to do keep up with your site. Feel free to contact me. Websites can be a very time consuming and overwhelming process, so let me help you. Maintenance, updating, or it just needs to be made more attractive. </p>
					<p>This service I will do for free... yes, I said free.</p>
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

