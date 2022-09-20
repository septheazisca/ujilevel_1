<?php 
  include 'koneksi.php'; 
  
  $no_buku = $_GET['no_buku'];
  $sql = "DELETE FROM databuku WHERE no_buku='$no_buku'"; 
  $query = mysqli_query($connect, $sql); 

  if ($query){
    header('Location: databuku.php');
  }else{
    header('Location: hapusbuku.php?status=gagal');
  }
?>
