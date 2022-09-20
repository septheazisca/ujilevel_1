<?php 
  include 'koneksi.php'; 

  if(isset($_POST['simpan'])){
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];

    $sql = "INSERT INTO datamurid (nisn, nama, kelas, telepon, email) VALUES ('$nisn', '$nama', '$kelas', '$telepon', '$email')"; 

    $query = mysqli_query($connect, $sql);
    if($query){
      header('Location: datamurid.php');
    } else{
      header('Location: simpan.php?status=gagal');
    }
  }
?>