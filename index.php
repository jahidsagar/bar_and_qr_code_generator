<!DOCTYPE html>
<html>
<head>
	<title>Barcode and QR code Generator</title>
	

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- meta tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<!-- mycss -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
	
	<!-- navbar -->
	<nav class="navbar navbar-light bg-light justify-content-between">
		<a class="navbar-brand">Code Generator</a>
		<div class="mr-sm-2">
			<!-- <div class="">
				<ul id="right_text">
					<li><a href="" class="btn btn-info">About Us</a></li>
					<li><a href="" class="btn btn-success">Contact Us</a></li>
				</ul>
			</div> -->
		</div>
		<!-- <form class="form-inline">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form> -->
	</nav>

	<!-- end navbar -->

	<!-- welcome jumbutron -->
	<div class="jumbotron text-center">
		<h1 class="display-4">Welcome</h1>
		<p class="lead">This is a PHP site, Which is intended for generating Bar Code and QR Code.</p>
		<hr class="my-4">
		<p>Want to <b>Learn</b> how to make it ? Click Below</p>
		<p class="lead">
		<a class="btn btn-primary btn-lg" href="#" role="button">I want to learn</a>
		</p>
	</div>
	<!-- end welcome -->

	<!-- main div -->
	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<div class="mx-md-n3 middle_card" style="padding-bottom: 10px;margin-top: -9px;">
				<div class="row " >
					<div class="col-sm-5">
						<div class="card">
							<div class="card-body text-center">
								<h5 class="card-title">BAR Code Generate</h5>
								<p class="card-text">Click below to generate your Code.</p>
								<a href="barcode.php" class="btn btn-primary">BAR Code</a>
							</div>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="card">
							<div class="card-body text-center">
								<h5 class="card-title">QR Code Generate</h5>
								<p class="card-text">It is more than fan, Click below and make fun.</p>
								<a href="qrcode.php" class="btn btn-primary">QR Code</a>
							</div>
						</div>
					</div>
				</div>
			</div>   
		</div>
	</div>
	<!-- end div -->

	<!-- footer -->
	<footer class="text-center" style="padding: 10px;background: #6200ee;">
		All right reserved to &copy CODE GENERATOR	
	</footer>
	<!-- end footer -->


	<!-- script tag -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<!-- myscript -->
	<script type="text/javascript" src="main.js"></script>
	<script>
		$(document).ready(function(){console.log('hello');});
	</script>

	<!-- end script -->
</body>
</html>