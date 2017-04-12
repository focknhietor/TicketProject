<?php

function printLoginForm(){
	?>
	<h2>Login</h2>
		<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
			<label>Email</label><br><input type="text" name="emailLogin"/><br>
			<label>Password</label><br><input type="password" name="passwordLogin"><br>
			<input type="submit" name="save"/>
		<form>
	<?php
}



function printAddKundeForm(){
	?>
		<h2>Benutzer hinzufügen</h2>
		
		<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		
			<label>Vor- und Nachname</label><br><input type="text" name="name"/><br>
			<label>Verkäufer</label><br><input type="text" name="verkäufer"><br>
			<label>Geburtsdatum</label><br><input type="text" name="verkäufer"><br>
			<input type="submit" name="save"/>
		<form>
	<?php
}

function printQRScanner(){
	?>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Basic QR-code reader example - Version 1.0.1</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/styles.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/photobooth.min.js"></script>

		<script type="text/javascript" src="js/qr/grid.js"></script>
		<script type="text/javascript" src="js/qr/version.js"></script>
		<script type="text/javascript" src="js/qr/detector.js"></script>
		<script type="text/javascript" src="js/qr/formatinf.js"></script>
		<script type="text/javascript" src="js/qr/errorlevel.js"></script>
		<script type="text/javascript" src="js/qr/bitmat.js"></script>
		<script type="text/javascript" src="js/qr/datablock.js"></script>
		<script type="text/javascript" src="js/qr/bmparser.js"></script>
		<script type="text/javascript" src="js/qr/datamask.js"></script>
		<script type="text/javascript" src="js/qr/rsdecoder.js"></script>
		<script type="text/javascript" src="js/qr/gf256poly.js"></script>
		<script type="text/javascript" src="js/qr/gf256.js"></script>
		<script type="text/javascript" src="js/qr/decoder.js"></script>
		<script type="text/javascript" src="js/qr/qrcode.js"></script>
		<script type="text/javascript" src="js/qr/findpat.js"></script>
		<script type="text/javascript" src="js/qr/alignpat.js"></script>
		<script type="text/javascript" src="js/qr/databr.js"></script>

		<script src="js/effects.js"></script>
	</head>
	<body>

		<div class="pageWrapper">

			<div class="boxWrapper">
				<div id="example"></div>
			</div>

			<div class="button">
				<a id="button">Scan QR code</a>
			</div>

			<div class="boxWrapper auto">
				<div id="hiddenImg"></div>
				<div id="qrContent"><p>Result will be here.</p></div>
			</div>

		</div>
		
	</body>
	
	<?php
}

?>