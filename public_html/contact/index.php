<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Contact Us";
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


	<!-- this is the contact Page-->
<div class="jumbotron-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3>Rèsumè</h3>
				<p> Feel free to take a look at my technical resume by clicking on the downloadable link named
					"Rèsumè"</p>
				<a target="_blank" href="../resume/updatedresume2.pdf" id="resume">Rèsumè</a>
				<h2>OR</h2>
			</div>
			<div class="col-md-4-offset">
				<h2> Feel free to Contact Me!</h2>

				<!--Begin Contact Form-->
				<form id="josephs-contact-form" action="../php/mailer.php" method="post">
					<div class="form-group">
						<label for="name">Name <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
							<input type="text" class="form-control" id="name" name="name" placeholder="Name">
						</div>
					</div>
					<div class="form-group">
						<label for="email">Email <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email">
						</div>
					</div>
					<div class="form-group">
						<label for="subject">Subject</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</div>
							<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
						</div>
					</div>
					<div class="form-group">
						<label for="message">Message <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-comment" aria-hidden="true"></i>
							</div>
							<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
						</div>
					</div>

					<!-- reCAPTCHA -->
					<div class="g-recaptcha" data-sitekey="6LescRcUAAAAAHN6D0L3YmfxMJlmZoMcu0WUSuQ4"></div>

					<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
					<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
				</form>

				<!--empty area for form error/success output-->
				<div class="row">
					<div class="col-xs-12">
						<div id="output-area"></div>
					</div>
				</div><!--/.content-panel-->
			</div><!--/.content-wrap-->

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