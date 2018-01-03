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
								<p class="w1">About Me</p>
							</div>
						</div>
						<div class="col-sm-6 col-md-8">
						<div>
							<p class="lead">What should you know about me?</p>
							<p class="lead m-a-0"></p>
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
							<p class="w1">Services</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-8">
						<div>
							<p class="lead">this section will have to be replaced with something.</p>
							<p class="lead m-a-0">im supposed to let the project talk to me but i fell like im talking to a brick wall</p>
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
							<p class="w1">Contact Me</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-8">
						<div>
							<p class="lead">this section will have to be replaced with something.</p>
							<p class="lead m-a-0">im supposed to let the project talk to me but i fell like im talking to a brick wall</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		</div>



		<?php require_once("php/partials/footer.php");?>



