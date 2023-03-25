<?php 

  $conn = mysqli_connect("localhost", "root", "", "db_portofolio");
  if ( isset($_POST["submit"])) {

     $nama = $_POST["nama"];
     $emial = $_POST["email"];
     $pesan = $_POST["pesan"];

     $masuk = "INSERT INTO portofolio VALUES ('','$nama','$emial','$pesan')";
     $query = mysqli_query($conn, $masuk);
     if ($query) {
          echo "<script>alert('Terima Kasih');</script>";
     } else{
          echo "<script>alert('Data Gagal Masuk');</script>";
     }
  }

?>