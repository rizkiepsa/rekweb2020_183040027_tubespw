<?php
session_start();

if(isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}

require 'function.php';

$id = $_GET['id'];
$b = query("SELECT * FROM film WHERE id = $id")[0];

if(isset($_POST['ubah'])){
    if(ubah($_POST)>0){
        echo    "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
                </script>";
    } else {
                "<script>
                alert('Data Gagal diubah!');
                document.location.href = 'index.php';
                </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah data Film</title>
</head>
<body>
<div class="container">
 	<form action="" method="post" enctype="multipart/form-data">
 		<input type="hidden" name="id" value="<?= $b['id']; ?>">
 		<input type="hidden" name="gambarLama" value="<?= $b['gambar']; ?>">
 	<ul>
 		<li>
 			<label>Gambar :</label><br>
 			<img src="assets/img/<?= $b['gambar']; ?>" width="100"><br>
 			<input type="file" name="gambar">
 		</li>
 		<li>
 			<label>Judul Film :</label><br>
 			<input type="text" name="judul" required value="<?= $b['judul']; ?>" >
 		</li>
 		<li>
 			<label>Tanggal Rilis Film :</label><br>
 			<input type="text" name="tanggal_rilis" required value="<?= $b['tanggal_rilis']; ?>">
 		</li>
 		<li>
 			<label>Timeline Film :</label><br>
 			<input type="text" name="timeline_film"  required value="<?= $b['timeline_film']; ?>">
 		</li>
 		<li>
 			<label>Produser :</label><br>
 			<input type="text" name="produser" required value="<?= $b['produser']; ?>">
 		</li>
 		<li>
 			<button type="submit" name="ubah">Ubah Data!</button>
 		</li>
 		<li>
 			 <button class="back"><a href="index.php">Kembali</a></button>
 		</li>
 	</ul>
 	
 </div>
</body>
</html>