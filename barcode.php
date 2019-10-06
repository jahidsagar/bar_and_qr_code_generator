<?php 
require __DIR__ . '/vendor/autoload.php';
if(isset($_POST['barcode']) && $_POST['barcode'] == 1){
	$generator = new \Picqer\Barcode\BarcodeGeneratorJPG();
	$code = $_POST['code'];

	if($_POST['type'] == 'TYPE_CODE_39'){
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_CODE_39)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_CODE_39_CHECKSUM') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_CODE_39_CHECKSUM)) . '" class="img-fluid" alt="<?=$val?>">';
	}
	elseif ($_POST['type'] == 'TYPE_CODE_39E') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_CODE_39E)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_CODE_39E_CHECKSUM') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_CODE_39E_CHECKSUM)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_CODE_93') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_CODE_93)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_STANDARD_2_5') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_STANDARD_2_5)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_STANDARD_2_5_CHECKSUM') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_STANDARD_2_5_CHECKSUM)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_INTERLEAVED_2_5') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_INTERLEAVED_2_5)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_INTERLEAVED_2_5_CHECKSUM') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_INTERLEAVED_2_5_CHECKSUM)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_CODE_128') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_CODE_128)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_CODE_128_A') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_CODE_128_A)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_CODE_128_B') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_CODE_128_B)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_CODE_128_C') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_CODE_128_C)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_EAN_2') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_EAN_2)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_EAN_5') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_EAN_5)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_EAN_8') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_EAN_8)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_EAN_13') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_EAN_13)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_UPC_A') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_UPC_A)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_UPC_E') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_UPC_E)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_MSI') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_MSI)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_MSI_CHECKSUM') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_MSI_CHECKSUM)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_POSTNET') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_POSTNET)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_PLANET') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_PLANET)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_RMS4CC') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_RMS4CC)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_KIX') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_KIX)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_IMB') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_IMB)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_CODABAR') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_CODABAR)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_CODE_11') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_CODE_11)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_PHARMA_CODE') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_PHARMA_CODE)) . '" class="img-fluid" alt="<?=$val?>">';
	}elseif ($_POST['type'] == 'TYPE_PHARMA_CODE_TWO_TRACKS') {
		$val =  '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_PHARMA_CODE_TWO_TRACKS)) . '" class="img-fluid" alt="<?=$val?>">';
	}
	
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
				<input type="hidden" value="1" name="barcode">
				<div class="form-group">
					<label for="formGroupExampleInput" class="">Enter Your Code</label>
					<input type="text" name="code" class="form-control" id="formGroupExampleInput" placeholder="1234567">
				</div>
				<div class="form-group">
					<label for="formGroupExampleInput2">Select a type</label>
					<select name="type" id="" class="form-control">
						<option value="">Select a Type</option>
						<option value="TYPE_CODE_39">TYPE_CODE_39</option>
						<option value="TYPE_CODE_39_CHECKSUM">TYPE_CODE_39_CHECKSUM</option>
						<option value="TYPE_CODE_39E">TYPE_CODE_39E</option>
						<option value="TYPE_CODE_39E_CHECKSUM">TYPE_CODE_39E_CHECKSUM</option>
						<option value="TYPE_CODE_93">TYPE_CODE_93</option>
						<option value="TYPE_STANDARD_2_5">TYPE_STANDARD_2_5</option>
						<option value="TYPE_STANDARD_2_5_CHECKSUM">TYPE_STANDARD_2_5_CHECKSUM</option>
						<option value="TYPE_INTERLEAVED_2_5">TYPE_INTERLEAVED_2_5</option>
						<option value="TYPE_INTERLEAVED_2_5_CHECKSUM">TYPE_INTERLEAVED_2_5_CHECKSUM</option>
						<option value="TYPE_CODE_128">TYPE_CODE_128</option>
						<option value="TYPE_CODE_128_A">TYPE_CODE_128_A</option>
						<option value="TYPE_CODE_128_B">TYPE_CODE_128_B</option>
						<option value="TYPE_CODE_128_C">TYPE_CODE_128_C</option>
						<option value="TYPE_EAN_2">TYPE_EAN_2</option>
						<option value="TYPE_EAN_5">TYPE_EAN_5</option>
						<option value="TYPE_EAN_8">TYPE_EAN_8</option>
						<option value="TYPE_EAN_13">TYPE_EAN_13</option>
						<option value="TYPE_UPC_A">TYPE_UPC_A</option>
						<option value="TYPE_UPC_E">TYPE_UPC_E</option>
						<option value="TYPE_MSI">TYPE_MSI</option>
						<option value="TYPE_MSI_CHECKSUM">TYPE_MSI_CHECKSUM</option>
						<option value="TYPE_POSTNET">TYPE_POSTNET</option>
						<option value="TYPE_PLANET">TYPE_PLANET</option>
						<option value="TYPE_RMS4CC">TYPE_RMS4CC</option>
						<option value="TYPE_KIX">TYPE_KIX</option>
						<option value="TYPE_IMB">TYPE_IMB</option>
						<option value="TYPE_CODABAR">TYPE_CODABAR</option>
						<option value="TYPE_CODE_11">TYPE_CODE_11</option>
						<option value="TYPE_PHARMA_CODE">TYPE_PHARMA_CODE</option>
						<option value="TYPE_PHARMA_CODE_TWO_TRACKS">TYPE_PHARMA_CODE_TWO_TRACKS</option>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" class="form-control col-sm-3" value="Get Code">
				</div>
			</form>  

			
		</div>
	</div>
	<!-- end div -->
	<?php 
		if(isset($_POST['barcode']) && $_POST['barcode'] == 1){
	?>
	<div class="container">
		<div class="row h-100 justify-content-center align-items-center">
			<?=$val?>
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