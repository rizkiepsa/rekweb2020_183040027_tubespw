<?php 
require 'function.php';
$film = query("SELECT * FROM film");


if (isset($_POST['cari'])){
    $film = cari($_POST['keyword']);
}

?>
  
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Front End</title>

        <style>
        body{
                background-color : #2a95ed;
                background-image: linear-gradient(90deg , rgba(0,100,10,0.8),rgba(0,0,100,0));
                color : white;
            }

           

        ::-webkit-scrollbar{
        width: 8px;
        }
        ::-webkit-scrollbar-thumb{
            border-radius: 10px;
            background-color: #585359;
        }

        ::-webkit-scrollbar-track {
            background-color:#c2c8d1;
        }

        a{
            text-decoration : none;
            color : black;
        }

        .isi{
            width : 400px;
            height : 300px;
            border : 1px solid white;
            align : center;
            border-radius : 20px;
            margin-left : 37%; 
            margin-top : 50px;
        }

        img {
            margin-top : 5%;
            margin-left : 15%; 
            width : 29%;
        }

        h2{
            text-align : center;
        }

        .id{
            margin-left : 34%; 

        }

        .btn{
            background-color : #2a95ed ; 
            color : white;
            border : none;
            height : 30px;
            line-height : 30px;
            border-radius : 20px;
            transition : 1s all ease;
        }

        .btn:hover {
            color : black;
            transition : 1s all ease;
            background-image: linear-gradient(-90deg , rgba(0,200,10,0.8),rgba(0,0,255,0));
            cursor : pointer;
        }


        .se{
            margin-top : -50px;
        }

        .form-control {
            border-radius : 30px;
            height : 30px;
            border : none;
            width : 200px;
            background-color : #b1bcce;
            color : white;
            float : left;
        }

        .btn2{
            background-color : #46fc8c ; 
            color : black;
            border : none;
            height : 30px;
            line-height : 30px;
            border-radius : 30px;
        }
        
        .notFound {
            text-align : center;
            margin-top : 20%;
        }


        .btn3{
            background-color : #43aee8 ; 
            color : white;
            border : none;
            height : 30px;
            line-height : 30px;
            border-radius : 20px;
            transition : 1s all ease;
        }

        .btn3:hover {
            color : black;
            transition : 1s all ease;
            background-image: linear-gradient(-90deg , rgba(0,200,10,0.8),rgba(0,0,255,0));
            cursor : pointer;
        }
        .login{
            float : right;
            margin-top : -50px;
        }
        </style>
        <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
    </head>
    <body>
        <div class="container">
            <h1 align = "center">Selamat datang di EpsaXXI</h1>
                <form action="" method="get">
                <div class="search">
                    <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Type here to search...">
                    <button type ="submit" name ="cari" id="cari" class="btn2">Cari</button>
                </form>
                </div>

            <div class="login">
                <a href="login.php"><button class = "btn3">Login as Admin</button></a>
            </div>
            
            <?php if(empty($film)){ ?>
                <div class="notFound">
                    <h1>Maaf film yang anda cari tidak ada</h1>
                </div>
            <?php }else { ?>
                <?php foreach($film as $b) { ?>

                                <div class="isi">

                                    <img src="assets/img/<?= $b['gambar']; ?>" alt="">
                                    <img src="assets/img/<?= $b['gambar']; ?>" alt="">
                                        <h2><?= $b['judul']; ?></h2>

                                    <a href="profile.php?id=<?= $b["id"];?>" class="id"><button class="btn">Lihat Lebih Lanjut</button></a>
                                
                                </div>
                                    
                                    
                                <br>
                        <?php }?>
            <?php } ?>
        </div>
    </body>
</html>