<?php 
session_start();

if(isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}

require 'function.php';
$film = query("SELECT * FROM film");


if (isset($_GET['cari'])){
    $film = cari($_GET['keyword']);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Back end</title>

    <style>
  .home {
      background-color: slateblue;
  }

  .tabel {
      margin-top: 50px;
  }

  .form-cari {
    margin-bottom: 20px;
  }
    
    
    @media print {
        .logout, .tambah, .form-cari, .aksi {
            display: none;
        }
    }
    </style>


   
</head>
<body id="home" class="scrollspy">
<!-- NAVBAR -->
<div class="navbar-fixed">
    <nav class="deep-orange darken-1">
      <div class="container">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">EpsaXX1</a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="cetak.php" target="blank">Cetak</a></li>
          <li><a href="tambah.php">Tambah Data</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li>
              <form action="" method="get" class="form-cari">
                    <input type="text" name="keyword" id="keyword" class="form-control"  autofocus placeholder="Type here to search..." autocomplete="off">
                    <button type ="submit" name ="cari" id="cari" class="btn2">Cari</button></li>
        </ul>
      </div>
    </div>
    </nav>
  </div>

  <!-- SIDENAV -->
<ul class="sidenav" id="mobile-nav">
            <li><a href="cetak.php" target="blank">Cetak</a></li>
          <li><a href="tambah.php">Tambah Data</a></li>
          <li><a href="logout.php">Logout</a></li>
</ul>




    <div id="container">
    <table border = '1' cellpadding='5' cellspacing='0'>
    <tr>
        <th>#</th>
        <th>opsi</th>
        <th>Foto</th>
        <th>Judul</th>
        <th>Tanggal Rilis</th>
        <th>Timeline Film</th>
        <th>Produser</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($film as $b) :  ?>
    <tr>
    
        <td><?= $i; ?></td>
        <td>
            <button class="btn lime lighten-2" type="submit" name="action">
                <a href="ubah.php?id=<?=$b['id']?>">Ubah</button></a>
            <button class="btn indigo darken-2" type="submit" name="action">
                <a href="hapus.php?id=<?=$b['id']?>" onclick="return confirm('Anda yakin ingin hapus data ini?');">Hapus</button></a>
        </td>
        <td align ='center'><img src="assets/img/<?= $b['gambar']; ?>" width = 100px></td>
        <td align ='center'><?= $b['judul']; ?></td>
        <td align ='center'><?= $b['tanggal_rilis']; ?></td>
        <td align ='center'><?= $b['timeline_film']; ?></td>
        <td align ='center'><?= $b['produser']; ?></td>
    </tr>

    <?php $i++; ?>
    <?php endforeach ?>

    </table>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>


     <!--JavaScript at end of body for optimized loading-->
     <script type="text/javascript" src="js/materialize.min.js"></script>  
         
         <script>
          const sideNav =document.querySelectorAll('.sidenav');
          M.Sidenav.init(sideNav, {});
          </script>
</body>
</html>