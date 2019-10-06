<?php 
require __DIR__ . '/vendor/autoload.php';

if(isset($_POST['qr']) && $_POST['qr'] == 1){
}

?>

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
		<a class="navbar-brand" href="index.php">Code Generator</a>
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

	

	<!-- main div -->
	<div class="container">
		<div class="row h-100 justify-content-center align-items-center">
			<form class="col-10" method="POST" action="">
				<input type="hidden" value="1" name="qr">
				<div class="form-group">
					<label for="formGroupExampleInput" class="">Enter Your Code</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="qrcode"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" class="form-control col-sm-3" value="Get Code">
				</div>
			</form>  

			
		</div>
	</div>
	<!-- end div -->
	<?php 
		if(isset($_POST['qr']) && $_POST['qr'] == 1){
	?>
	<div class="container">
		<div class="row h-100 justify-content-center align-items-center">
			<img src="qrCodeGeneration.php?text=<?php echo $_POST['qrcode']?>" alt="QR Code" class="img-thumbnail">
		</div>
	</div>
	<?php } ?>
	
	



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