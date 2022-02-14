<?php
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

	$html = '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

            <table border="1" cellpadding="10" collspacing="0">
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                </tr>';

		foreach($mahasiswa as $mhs){
			$html .= '<tr>
				<td>'. $i++ .'</td>
				<td><img src="images/'. $mhs["gambar"] . '" width="50"></td>
				<td>' . $mhs["nis"] . '</td>
				<td>' . $mhs["nama"] . '</td>
				<td>' . $mhs["email"] . '</td>
				<td>' . $mhs["jurusan"] . '</td>
			</tr>';
		}
		
$html .='</table>
</body>
</html>';

	require_once "library PDF/mpdf_v8.0.3-master/vendor/autoload.php";
	$mpdf = new \Mpdf\Mpdf();
	// $mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	$mpdf->WriteHTML($html);
	$mpdf->Output('Daftar Mahasiswa.pdf', 'I');
?>

