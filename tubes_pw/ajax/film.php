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