<?php 
session_start();
require 'function.php';

if (isset($_SESSION['username'])){
    header("Location: admin.php");
    exit;
}

if(isset($_SESSION['user'])){
    header("Location: admin.php");
    exit;
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
      $password = $_POST['password'];
        $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1){

        $row = mysqli_fetch_assoc($result);
          if(password_verify ($password, $row['password'])){

             $_SESSION['login'] = true;
              header("Location:admin.php");
               die;

            }  
        }
        $error = 'Username / Password Salah! ';
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
    <title>Login</title>
    <style>
      .login {
        display: inline-block;
        padding: 32px 48px 0px 48px;
        border: 1px solid #EEE;
      }

    </style>
</head>
<body>
        
        <?php if(isset($error)): ?>
    <p style="color:red; font-style: italic;">Maaf, Username dan Password salah!</p>
         <?php endif ?>
         
<div class="section"></div>
  <main>
    <center>
      
      <div class="section"></div>
 
      <h5 class="indigo-text">Form Login</h5>
      <div class="section"></div>
 
      <div class="container">
        <div class="login">
          <form action = "" class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
            
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='username' id='username' autocomplete="off" >
                <label for='username'>Username</label>
              </div>
            </div>
 
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' >
                <label for='password'>Enter your password</label>
              </div>
              <label style='float: right;'>
			</label>
            </div>
 
            <br />
            <center>
              <div class='row'>
                <button type='submit' name='submit' class='col s12 btn btn-large waves-effect indigo'><a href="index.php">Login</a></button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a href="registrasi.php">Create account</a> <br>

      <a href="Index.php">Kembali</a>
    </center>
 
    <div class="section"></div>
    <div class="section"></div>
    </main>
    </div>
        
    <script>
    $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
    });
    </script>
</body>
</html>