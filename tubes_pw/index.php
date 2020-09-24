<?php 
require 'function.php';
$film = query("SELECT * FROM film");


if (isset($_GET['cari'])){
    $film = cari($_GET['keyword']);
}

?>
<!DOCTYPE html>
  <html>
  <head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

<link rel="stylesheet" type="text/css" href="css/style.css">

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>EpsaXXI</title>
      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="js/script.js"></script> 
    </head>

     <body id="home" class="scrollspy">
<!-- NAVBAR -->
<div class="navbar-fixed">
    <nav class="black darken-2">
      <div class="container">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo">EpsaXXI</a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#search">Search</a></li>
          <li><a href="#infoFilm">Info Film</a></li>
          <li><a href="#contactUs">Contact Us</a></li>
          <li><a href="login.php">Login as Admin</a></li>
        </ul>
      </div>
    </div>
    </nav>
  </div>



<!-- SIDENAV -->
<ul class="sidenav" id="mobile-nav">
        <li><a href="#search">search</a></li>
        <li><a href="#infoFilm">Info Film</a></li>
        <li><a href="#contactUs">Contact Us</a></li>
        <li><a href="login.php">Login</a></li>
</ul>

<!-- slider -->
<div class="slider">
    <ul class="slides">
      <li>
        <img src="assets/img/cinema.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Welcome to EpsaXXI</h3>
        </div>
      </li>
           <li>
        <img src="assets/img/empty.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Bioskop Terbesar di Indonesia</h3>
         
        </div>
      </li>
           <li>
        <img src="assets/img/bioskop.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Yang dikelola oleh Rizki Epsa Friansyah</h3>
         
        </div>
      </li>
      </ul>
    </div>

<!-- Search -->
<section id="search" class="section section-search red darken-2 white-text center scrollspy">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="search">
                    <h3>Search</h3>
                    <form action="" method="get" class="form-cari">
                    <input type="text" name="keyword" id="keyword" class="form-control"  autofocus placeholder="Type here to search..." autocomplete="off">
                    <button type ="submit" name ="cari" id="cari" class="btn2">Cari</button>
                    </div>
                    </form>  
                    </div>
                  </div>
                </div>
              </div>
</section>


<!-- portfolio -->
<section id="info">
<div class="container">
<div align="center" class="row">
<?php foreach($film as $b) { ?>



  
    <div class="konten" id="front">
      <div class="gambar">
        <img src="assets/img/<?= $b['gambar']; ?>" class="responsive-img materialboxed">
        </div>
        
        <div class="judul">
           <p> <?= $b["judul"];?></p>
           
           </div>

           <div class="info">
           <a href="profile.php?id=<?= $b["id"];?>" class="id"><button class="btn">Lihat Lebih Lanjut</button></a>
           </div>
 

      
        </div>
    <?php } ?>
  </div>
  </div>
  </section>
      




<!-- Contact Us -->
<section id="contactUs" class="contact grey lighten-3 scrollspy">
  <div class="container">
    <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
  <div class="row">
    <div class="col m5 s12">
      <div class="card-panel blue darken-2 center white-text">
        <i class="material-icons">email</i>
        <h5>Contact</h5>
        <p>We will Reply as soon as possible</p>
      </div>
      <ul class="collection with-header">
        <li class="collection=header"><h4>Our Office</h4></li>
        <li class="collection-item">EpsaXXI</li>
        <li class="collection-item">Pangandaran</li>
        <li class="collection-item">West Java, Indonesia</li>
      </ul>
    </div>

    <div class="col m7 s12">
      <form >
        <div class="card-panel">
          <h5>Please Fill Out This Form</h5>
          <div class="input-field">
            <input type="text" name="name" id="name" required class="validate">
            <label for="name">Name</label>
          </div>
          <div class="input-field">
            <input type="email" name="email" id="email" class="validate">
            <label for="email">Email</label>
          </div>
          <div class="input-field">
            <input type="text" name="phone" id="phone">
            <label for="phone">Phone Number</label>
          </div>
          <div class="input-field">
            <textarea name="message" id="message" class="materialize-textarea"></textarea>
            <label for="message">Message</label>
          </div>
          <button type="submit" class="btn blue darken-2">Send</button>
        </div>
      </form>
    </div>
  </div>
  </div>

</section>
<!-- Footer -->
<footer class="blue darken-2 white-text center">
  <p class="flow-text">EpsaXXI. Copyright 2019.</p>
</footer>



      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>  
         
       <script>
        const sideNav =document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav, {});

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider,
        {
          indicators: false,
          height:500,
          transition:600,
          interval:3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll,{
          scrolloffset: 50
        });
      </script>
    </body>
  </html>