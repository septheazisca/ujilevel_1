<?php 
  include 'koneksi.php';

  $no_buku = $_GET['no_buku']; 
  $sql = "SELECT * FROM databuku WHERE no_buku ='$no_buku'"; 
  $query = mysqli_query($connect, $sql); 
  $pel = mysqli_fetch_assoc($query); 

  
  if(mysqli_num_rows($query) <1){
    die ('data tidak ditemukan');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    <?php
    include 'formedit-buku.css';
    ?>
  </style>

  <!-- icone -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>
<body>

  <!-- ini nav -->
  <nav>
    <div class="logo">
      <p>STARBHAKPUSTAKA</p>
    </div>

    <div class="profil">
      <p class="hi">Hai, my name is...</p>
      <i class="fa-solid fa-circle-user"></i>
      <i class="fa-solid fa-bell"></i>
    </div>
  </nav>

  <!-- ini sidebar -->
  <div class="sidebar">
    <div class="foto"></div>
    <p class="nama">NAME NAME NAME</p>

    <div class="link">
      <ul>
        <li><a href="">Dashboard</a></li>
        <li><a href="pendataanmurid.html">Members Registration</a></li>
        <div class="lebel-datamurid">
          <li><a href="datamurid.php">Members Date</a></li>
        </div>
        <li><a href="pendataanbuku.html">Book Registration</a></li>
        <div class="lebel-databuku">
        <li><a href="databuku.php">Book Data</a></li>
        </div>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </div>
  </div>

  <!-- ini konten kanan -->
  <div class="kotak-kanan">
    <p>Edit Data Buku</p>
    <div class="garis"></div>
    <form action="editbuku.php" method="post">
      <table class="tbl-formedit">
        <tr>
          <td><label>NO. BUKU</label></td>
          <td><input value="<?php echo $pel['no_buku']?>" type="hidden" name="no_buku" required="required"></td>
        </tr>
        <tr>
          <td><Label>JUDUL</Label></td>
          <td><input value="<?php echo $pel['judul']?>" type="text" name="judul" required="required"></td>
        </tr>
        <tr>
          <td><label>PENGARANG</label></td>
          <td><input value="<?php echo $pel['pengarang']?>" type="text" name="pengarang" required="required"></td>
        </tr>
        <tr>
          <td><label>GENRE</label></td>
          <td><input value="<?php echo $pel['genre']?>" type="text" name="genre" required="required"></td>
        </tr>
        <tr>
          <td><label>TAHUN_TERBIT</label></td>
          <td><input value="<?php echo $pel['tahun_terbit']?>" type="text" name="tahun_terbit" required="required"></td>
        </tr>
      </table>
      <a href="databuku.php" class="btn-back">back</a>
      <input type="submit" name="edit" value="edit" class="btn-edit">
    </form>
  </div>
</body>
</html>