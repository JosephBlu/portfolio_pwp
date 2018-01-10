<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "JJR - Home";

/*load the HTML head tag: head-utils.php*/
require_once("php/partials/head-utils.php");
?>

	<!-- This is for the first section-->
	<body class="sfooter home-layout">
		<div class="sfooter-content">

			<?php require_once("php/partials/header.php");?>

			<section class="welcome p-t-nav">
				<div class="container">
					<div class="jumbotron text-right">
						<h1>Joseph<br>Ramirez</br></h1>
						<p class="lead">Web and Applications Developer</p>
					</div>
				</div>
			</section>

<!--------------------------
this is the about us section
--------------------------->
			<section class="home-features">
				<div class="container">
					<div class="row row-flex">
						<div class="col-sm-6 col-md-4">
							<div class="featurette vertical-center" >
								<p class="w1"><a href="about/index.php">About Me</a></p>
							</div>
						</div>
						<div class="col-sm-6 col-md-8">
						<div>
							<p class="lead">Awesome! My very own page.</p>
							<p class="lead m-a-0">If you are looking for my bio, my interests an/or skills. Feel free to click this link to the left and stop to have a read.</p>
						</div>
						</div>
					</div>
				</div>
			</section>

<!--------------------------------
This will be the Services section
--------------------------------->
		<section class="home-features">
			<div class="container">
				<div class="row row-flex">
					<div class="col-sm-6 col-md-4">
						<div class="featurette vertical-center">
							<p class="w1"><a href="promo/index.php">Services</a></p>
						</div>
					</div>
					<div class="col-sm-6 col-md-8">
						<div>
							<p class="lead">Where to begin?</p>
							<p class="lead m-a-0">From websites to application development, each project will be created to be fully-responsive and customized to meet your needs. Click the link to the left to find out where to get started. I cant wait to work with you.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
<!---------------------------------------------------
		This is the contact section of the welcome page
---------------------------------------------------->
		<section class="home-features">
			<div class="container">
				<div class="row row-flex">
					<div class="col-sm-6 col-md-4">
						<div class="featurette vertical-center">
							<p class="w1"><a href="contact/index.php">Contact Me</a></p>
						</div>
					</div>
					<div class="col-sm-6 col-md-8">
						<div>
							<p class="lead">Do you want to reach me?</p>
							<p class="lead m-a-0">Email me for any information, questions, or if you are ready to begin. </p>
						</div>
					</div>
				</div>
			</div>
		</section>
		</div>



		<?php require_once("php/partials/footer.php");?>



