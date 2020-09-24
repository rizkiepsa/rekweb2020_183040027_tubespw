<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'function.php';
$film = query("SELECT * FROM film");


$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Film</title>
</head>
<body>
    <h1>Daftar Film</h1>
    <table border = "1" cellpadding="10" cellspacing="0">
    <tr>
        <th>#</th>
        <th>Foto</th>
        <th>Judul</th>
        <th>Tanggal Rilis</th>
        <th>Timeline Film</th>
        <th>Produser</th>
    </tr>';
    
    foreach( $film as $b){
        $html .= '<tr>
                <td>'.$i++.'</td>
                <td><img src="assets/img/'. $b["gambar"] .'" width="50"></td>
                <td>'. $b["judul"] .'</td>
                <td>'. $b["tanggal_rilis"] .'</td>
                <td>'. $b["timeline_film"] .'</td>
                <td>'. $b["produser"] .'</td>
        
        
        </tr>';
    }

$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output()

?>
