<?php 
  include 'koneksi.php';

  $nisn = $_GET['nisn']; 
  $sql = "SELECT * FROM datamurid WHERE nisn='$nisn'"; 
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
  <link rel="stylesheet" href="style.css">

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
      <i class="fa-solid fa-user"></i>
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
        <li><a href="datamurid.php">Members Date Tabel</a></li>
        <li><a href="pendataanbuku.html">Book Registration</a></li>
        <li><a href="databuku.php">Book Data Table</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </div>
  </div>

  <!-- ini konten kanan -->
  <div class="kotak-kanan">
    <p>Tambah Data Siswa</p>
    <div class="garis"></div>
    <form action="edit.php" method="post">
      <table class="tbl-formedit">
        <tr>
          <td><label>NISN</label></td>
          <td><input value="<?php echo $pel['nisn']?>" type="hidden" name="nisn" required="required"></td>
        </tr>
        <tr>
          <td><Label>Nama</Label></td>
          <td><input value="<?php echo $pel['nama']?>" type="text" name="nama" required="required"></td>
        </tr>
        <tr>
          <td><label>Kelas</label></td>
          <td><input value="<?php echo $pel['kelas']?>" type="text" name="kelas" required="required"></td>
        </tr>
        <tr>
          <td><label>Telepon</label></td>
          <td><input value="<?php echo $pel['telepon']?>" type="number" name="telepon" required="required"></td>
        </tr>
        <tr>
          <td><label>Email</label></td>
          <td><input value="<?php echo $pel['email']?>" type="text" name="email" required="required"></td>
        </tr>
      </table>
      <a href="datamurid.php" class="btn-back">back</a>
      <input type="submit" name="edit" value="edit" class="btn-edit">
    </form>
  </div>
</body>
</html>