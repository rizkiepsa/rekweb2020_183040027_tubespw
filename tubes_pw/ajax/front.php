<?php
require '../function.php';
$keyword = $_GET['keyword'];
$query =("SELECT * FROM film WHERE
judul LIKE '%$keyword%' OR
tanggal_rilis LIKE '%$keyword%' OR
timeline_film LIKE '%$keyword%' OR
produser LIKE '%$keyword%'");
$film = query($query);
?>

        <div class="gambar">
        <img src="assets/img/<?= $b['gambar']; ?>" class="responsive-img materialboxed">
        </div>
        
        <div class="judul">
           <p> <?= $b["judul"];?></p>
           
           </div>

           <div class="info">
           <a href="profile.php?id=<?= $b["id"];?>" class="id"><button class="btn">Lihat Lebih Lanjut</button></a>
           </div>