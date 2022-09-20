<?php 
  include 'koneksi.php'; 

  if(isset($_POST['edit'])){
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
  
    $sql = "UPDATE datamurid SET nisn='$nisn', nama='$nama', kelas='$kelas', telepon='$telepon', email='$email' WHERE nisn='$nisn'";
    $query = mysqli_query($connect,$sql);

    if($query){
      header('Location: datamurid.php');
    }else{
      header('Location: edit.php?status=gagal');
    }
  }
?>

