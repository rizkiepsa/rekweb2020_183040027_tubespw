<?php
function koneksi (){
    $conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_pw_183040027") or die ("Database salah!");

    return $conn;
}



function query($sql) {
    $conn = koneksi();
    $results = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($results)){
        $rows[]= $row;
    };

    return $rows;
}


function tambah($data)
{
    $conn = koneksi();

    $gambar = upload();
    if( !$gambar){
        return false;
    }

    $judul = htmlspecialchars($data['judul']);
    $tanggal_rilis = htmlspecialchars($data['tanggal_rilis']);
    $timeline_film = htmlspecialchars($data['timeline_film']);
    $produser = htmlspecialchars($data['produser']);

    $query_tambah = "INSERT INTO film Values('','$gambar','$judul','$tanggal_rilis','$timeline_film','$produser')";

mysqli_query($conn, $query_tambah);

return mysqli_affected_rows($conn);
}


function upload (){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if( $error === 4 ){
        echo "<script>
                alert('pilih gambar terlebih dahulu');
            </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
         echo "<script>
                alert('yang anda upload bukan gambar');
            </script>";
        return false;
    }

    if( $ukuranFile > 2000000) {
         echo "<script>
                alert('ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'assets/img/' . $namaFileBaru);

    return $namaFileBaru;

}


function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM film WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi(0);

    $id = $data['id']; 
    $gambarLama = htmlspecialchars($data['gambarLama']);
    if ($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    } else {
         $gambar = upload();
    }

   
    $judul = htmlspecialchars($data['judul']);
    $tanggal_rilis = htmlspecialchars($data['tanggal_rilis']);
    $timeline_film = htmlspecialchars($data['timeline_film']);
    $produser = htmlspecialchars($data['produser']);

    $queryubah = "UPDATE film SET 
                    gambar = '$gambar',
                    judul = '$judul',
                    tanggal_rilis = '$tanggal_rilis',
                    timeline_film= '$timeline_film',
                    produser = '$produser'
                    WHERE id = '$id'";

mysqli_query($conn, $queryubah);

return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM film WHERE
    judul LIKE '%$keyword%' OR
    tanggal_rilis LIKE '%$keyword%' OR
    timeline_film LIKE '%$keyword%' OR
    produser LIKE '%$keyword%'";

    return query($query);
}

function registrasi($data){
    $conn = koneksi();

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

   
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if( mysqli_fetch_assoc($result)){
        echo "<script>
                alert('username yang dipilih sudah terdaftar!');
             </script>";
        return false;

    }

    if($password != $password2){
        echo "<script>
                alert('password anda yang masukan tidak sama');
                document.location.href = 'registrasi.php';
                </script>";
                return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $created_at = time();
    $query = "INSERT INTO user VALUES
                ('', '$username', '$password', '$created_at')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


?>
