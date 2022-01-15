<?php
	$html = '
	<html> 
	<body>
		<h1>Hello World!</h1> 
		<p>Ini paragraf 1</p>
	</body>
	</html>
	';

	$word = require 'LEMBAR VAKSINASI.pdf';

	require_once "library PDF/mpdf_v8.0.3-master/vendor/autoload.php";
	$mpdf = new \Mpdf\Mpdf();
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	$mpdf->WriteHTML($word);
	$mpdf->Output();
?>