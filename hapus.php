<?php 
  include 'koneksi.php'; 
  
  $nisn = $_GET['nisn'];
  $sql = "DELETE FROM datamurid WHERE nisn='$nisn'"; 
  $query = mysqli_query($connect, $sql); 

  if ($query){
    header('Location: datamurid.php');
  }else{
    header('Location: hapus.php?status=gagal');
  }
?>
<?php 
