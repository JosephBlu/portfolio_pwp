<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<meta name="viewport" content="width=device- width, initial_scale=1"/>

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
		<link href="https://fonts.googleapis.com/css?family=Orbitron:500" rel="stylesheet">

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
	<!-- This is for the first section-->
	<body>
		<div class="padding-large" id="main">
			<header class="container">
				<h1>Joseph Ramirez</h1>
				<p> Full Stack Web Developer</p>
				<img src="./images/IMG_3346.jpg" width="900" height="700" align="center">
			</header>
		</div>

		<!-- this is the About page -->
			<div class="container" id="aboutMe">
				<div class="row">
					<div class="col-md-12">
						<h2>About Me</h2>
					</div>
					<img alt="Brand"  class="img-circle" src="./images/beard.png" height="150" width="125">
					<div class="col-md-12">
						<p>Hello! I am a entry-level, Albuquerque-based freelance Full Stack Web Developer. I am motivated in creating the best quality of web sites and I am eager to learn new skills in the process. I also like to practice in writing clean or dry code, to allow better laoding time and easy to maitain. </p>
						<p>I curently have experience in using Php, CSS, Bootstrap, mySQL, Wordpress, and Xcoder. But i am always seeking in learning new languages and frameworks so i can provide a varity of service to my employers and my clients. </p>
					</div>
				</div>
			</div>

		<!--this is for the projects section-->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<i class="fa fa-code fa-lg" aria-hidden="true">
						<h2> PROJECTS</h2>
						</i>
					</div>
					<div class="col-md-6 ">
						<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="GigHub is a social Networking site focused on helping musicians, venues, and fans to network with one another. This site presents a opportunity for musicians to be discovered, helps venues discover and contact new bands or local favorites to perform at the venues events, and allows fans to stay in touch and to know where and when their favorite band will be playing.
					This project was a group capstone project that was created to graduate from Deep Dive Coding Bootcamp. The languages we used for the back-end was PHP for the coding and mySQL to create the database to store information. the Front-end languages we used are CSS, Bootstrap, and Angular2.. ">
							<p>GigHub</p>
						</button>
					</div>
					<div class="col-md-6 ">
						<img src="images/blubird1.png" width="325" height="400">
						<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="<p>Blu Bird Tile Art is a Albuquerque Local Business that specializes in hand-crafting tiles for basic home and business back-splashes and also creates private and public funded Mosaic art installations.The Front-end of this project was created using Wordpress Content Managment Sytem. Also, for this project, I personally photographed the images using a Nikon D3300 and Adobe Lightroom for minor editing. ">
							<p>Blu Bird Tile Art</p>
						</button>
					</div>
				</div>
			</div>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>SKILLS</h2>
				</div>
				<div class="row">
				<div col-md-4>
					<h3>Back-End</h3>
					<p>My current back-end languages consist of PHP, HTML, mySql, and Xcode. The two languages and frameworks I am in the process of learning are Python and Laravel.  </p>
				</div>
					<div col-md-4>
						<h3>Front-End</h3>
						<p>For the front-end, I am experienced in CSS, Angular2, and Bootstrap. These three languages I am constantly learning new ways to deploy and strengthen my understanding of how to use them effectivly.   </p>
					</div>
					<div col-md-4>
						<h3>Wordpress</h3>
						<p>Wordpress has been a valuable tool to learn, especially for clients who are wanting to update the contents of thier website themselves. However, setting up and design can be tedious, time consuming, and overwhelming. But I am here to help. Learning wordpress is how I started my journey as a Web Developer </p>
					</div>
			</div>
			</div>
		</div>
		<!-- this is the contact Page-->
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

	<script>

		$(function () {
			$('[data-toggle="popover"]').popover()
		})
	</script>

</html>
