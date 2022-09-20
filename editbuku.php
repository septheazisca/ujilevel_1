<?php 
  include 'koneksi.php'; 

  if(isset($_POST['edit'])){
    $no_buku = $_POST['no_buku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $genre = $_POST['genre'];
    $tahun_terbit = $_POST['tahun_terbit'];
  
    $sql = "UPDATE databuku SET judul='$judul', pengarang='$pengarang', genre='$genre', tahun_terbit='$tahun_terbit' WHERE no_buku='$no_buku'";
    $query = mysqli_query($connect,$sql);

    if($query){
      header('Location: databuku.php');
    }else{
      header('Location: editbuku.php?status=gagal');
    }
  }
?>

