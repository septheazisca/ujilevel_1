<?php 
  include 'koneksi.php'; 

  if(isset($_POST['simpan'])){
    $no_buku = $_POST['no_buku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $genre = $_POST['genre'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $sql = "INSERT INTO databuku (no_buku, judul, pengarang, genre, tahun_terbit) VALUES ('$no_buku', '$judul', '$pengarang', '$genre', '$tahun_terbit')"; 

    $query = mysqli_query($connect, $sql);
    if($query){
      header('Location: databuku.php');
    } else{
      header('Location: simpanbuku.php?status=gagal');
    }
  }
?>