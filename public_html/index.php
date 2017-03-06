<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<meta name="viewport" content="width=device width, initial_scale=1.0"/>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!--Font awesome-->
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<!-- jQuery Form, Validate, Additional Methods -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js" type="text/javascript"></script>

		<!-- google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400i,600,700|Roboto+Mono:100,400,500,700" rel="stylesheet">

		<!--favicon generator-->
		<meta name="msapplication-TileColor" content="#ffffff">


		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- recaptcha google-->
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<title>Joseph Ramirez</title>
	</head>

	<body>
		<nav class="navbar navbar-default navbar-fixed-bottom">
			<div class="container-nav">
				<div class="btn-group btn-group-justified">
					<a href="#" class="btn btn-default">HOME</a>
					<a href="#" class="btn btn-default">PROJECTS</a>
					<a href="#" class="btn btn-default">SKILLS</a>
					<a href="#" class="btn btn-default">CONTACT</a>
				</div>
			</div>
		</nav>

		<div class="jumbotron">
		<header class="cover-header">
			<div class="container">
				  <div class="row">
					  <div class="col-md-12">
						  <h1>Welcome to My Portfolio!</h1>
						  <p>I am a entry-level, Albuquerque-based Full Stack Web Developer. I am an ambitious,  currently Freelancing and looking foreword to meet new clients and start new projects. <br>I have experience in using Php, CSS, Bootstrap, mySQL, Wordpress, and Xcoder.</p>
					  </div>
				  </div>
			</div>
		</header>
	</div>

		<div class="jumbotron-project">
		<div class="container">
			<h2>PROJECTS</h2>
			<div class="row">
				<div class="col-md-6">
					<h3>GigHub</h3>
					<p>GigHub is a social Networking site focused on helping musicians, venues, and fans to network with one another. This site presents a opportunity for musicians to be discovered, helps venues discover and contact new bands or local favorites to perform at the venues events, and allows fans to stay in touch and to know where and when their favorite band will be playing.</p>
					<p>This project was a group capstone project that was created to graduate from Deep Dive Coding Bootcamp. The languages we used for the back-end was PHP for the coding and mySQL to create the database to store information. the Front-end languages we used are CSS, Bootstrap, and Angular2.</p>
				</div>
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail">
						</a>
						<h3>Blu Bird Tile Art</h3>
						<p>Blu Bird Tile Art is a Albuquerque Local Business that specializes in hand-crafting tiles for basic home and business back-splashes and also creates private and public funded Mosaic art installations. </p>
						<p> The Front-end of this project was created using Wordpress Content Managment Sytem. Also, for this project, I personally photographed the images using a Nikon D3300 and Adobe Lightroom for minor editing. </p>
					</div>
			</div>
		</div>
		</div>
		<div class="jumbotron-skill">
		<div class="container">
			<H2>SKILLS</H2>
			<div class="row">
				<div class="col-md-4">
					<h3>Back-End</h3>
					<p>For the Back-end, my skill set consists of PhP, HTML, mySQL, and Xcoder. </p>
				</div>
				<div class="col-md-4">
					<h3>Front-End</h3>
					<p>The Front-end languages that i have experiencein using are JavaScript, BootStrap, Angular2, and CSS. </p>
				</div>
				<div class="col-md-4">
					<h3>Wordpress</h3>
					<p>For projects that do not need me to get my hands dirty. I also have experience in creating or designing websites using Wordpress. </p>
				</div>
			</div>
		</div>
		</div>

	<div class="jumbotron-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-4">

				</div>

				<div class="col-md-4">
					<h2> Feel free to Contact Me!</h2>
					<!--Begin Contact Form-->
					<form id="contact-form" action="php/mailer.php" method="post">
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
					</div>
			</div>
		</div>
		</div>
	</div>
	</div>
	</body class="font">

</html>
