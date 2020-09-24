<?php 
require 'function.php';
$conn = koneksi();

if( isset($_POST["register"])) {

	if(registrasi($_POST) > 0){
		echo "<script>
				alert('user baru berhasil ditambahkan!');
				document.location.href='login.php';
			  </script>";
			  
	} else {
		echo mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<title>Halaman Registrasi</title>
</head>
<body>
	<div class="section"></div>
  <main>
    <center>
      
      <div class="section"></div>
 
      <h5 class="indigo-text">Form Registrasi</h5>
      <div class="section"></div>
 
      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
 
          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
			<center>
            <div class='row'>
              <div class='input-field col s12'>
			<label for="username">username :</label>
			<input type="text" name="username" id="username">
              </div>
            </div>
 
            <div class='row'>
              <div class='input-field col s12'>
			  <label for="password">password :</label>
			<input type="password" name="password" id="password">
              </div>
			  <div class='row'>
              <div class='input-field col s12'>
			  <label for="password2">konfirmasi password :</label>
			<input type="password" name="password2" id="password2">
              </div>
              <label style='float: right;'>
				</label>
            </div>
			</center>
            
            <center>
              <div class='row'>
			  <button type="submit" name="register"  class='col s12 btn btn-large waves-effect indigo'>Register!</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>
 
    <div class="section"></div>
    <div class="section"></div>
    </main>
    </div>
        
    </form>
    <script>
    $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
    });
    </script>
</form>
</div>
</body>
</html>