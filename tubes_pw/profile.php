<?php 

if(!isset($_GET['id'])){
    header('index.php');
    exit;
}

require 'function.php';

$id = $_GET['id'];
$film = query("SELECT * FROM film WHERE id = $id")[0];
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>profile</title>

        <style>
        body{
                background-color : #2a95ed;
                background-image: linear-gradient(90deg , rgba(0,200,10,0.8),rgba(0,0,255,0));
                color : white;
                background-size : cover;
            }


        button{
            background-image: linear-gradient(90deg , rgba(0,200,10,0.8),rgba(0,250,,0));
            border: none;
            width : 100px;
            height : 30px;
            border-radius : 50px;
            margin-left : 48%;
            margin-top : 100px;

        }
        button a {
            text-decoration : none;
            color : black;
        }


        </style>
    </head>
    <body>



        <div class="container">

            <h1 align = "center">Informasi film <?= $film['judul']; ?></h1>
            <table border = 1px  align = center cellspacing = 0 cellpadding = 5>
                            <tr>
                                <td style="text-align : center">Gambar</td>
                                <td style="text-align : center">Judul</td>
                                <td style="text-align : center">Tanggal Rilis</td>
                                <td style="text-align : center">Timeline Film</td>
                                <td style="text-align : center">Produser</td>
                            </tr>
                    
                            <tr align="center">
                                <td style="text-align : center"><img src="assets/img/<?= $film['gambar']; ?>" height ="100%"></td>
                                <td style="text-align : center"><?= $film["judul"];?></td>
    

                                <td style="text-align : center"><?= $film["tanggal_rilis"];?><br>
                                <td><?= $film["timeline_film"];?></td> <br>
                                 <td><?= $film["produser"];?></td> <br>
                                </td>

                            </tr>
                   
            </table>
            <div class="tombol">
            <a href="index.php"><button>Kembali</button></a>
            </div>
        </div>
    </body>
</html>