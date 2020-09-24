<?php 
session_start();

if(isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}

require 'function.php';

if(isset($_POST['tambah'])){
    if(tambah($_POST) > 0){
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href='admin.php';
            </script>";
    } else{
        echo "<script>
                alert('Data gagal ditambahkan!');
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
</head>
<body>


    <form action="" method="post" enctype="multipart/form-data">
    
    <label for="judul">Judul : </label><br>
    <input type="text" name="judul" id="judul" required class="validate"><br><br>

    <label for="tanggal_rilis">Tanggal rilis (Format YY-MM-DD) : </label><br>
    <input type="text" name="tanggal_rilis" id="tanggal_rilis" placeholder=" contoh : 2018-06-18" required class="validate"><br><br>

    <label for="timeline_film">Timeline Film </label><br>
    <input type="text" name="timeline_film" id="timeline_film" placeholder=" contoh : 2019" required class="validate"><br><br>

    <label for="produser">Produser :   </label><br>
    <input type="text" name="produser" id="produser" required class="validate"><br><br>



    <label for="gambar">Gambar :  </label><br>
    <input type="file" name="gambar" id="gambar"><br><br>


    <button type="submit" name="tambah">Tambahkan</button>
    <button><a href="admin.php">Kembali</a></button> 
    
    
    </form>
</body>
</html>