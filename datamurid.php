<?php
    include 'koneksi.php';
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

  <div class="kotak-kanan">
    <p>Data Murid</p>

      <h4><a href="pendataanmurid.html">[+] Tambah Baru</a></h4>
      <table class="tbl-datamurid" border="1">
        <tr>
          <th>NISN</th>
          <th>NAMA</th>
          <th>KELAS</th>
          <th>TELEPON</th>
          <th>EMAIL</th>
          <th>ACTION</th>
        </tr>

        <?php
          $sql = "SELECT * FROM datamurid"; 
          $qeury = mysqli_query($connect, $sql);
          while($pel = mysqli_fetch_array($qeury)){ 
            echo "
            <tr>
              <td>$pel[0]</td>
              <td>$pel[1]</td>
              <td>$pel[2]</td>
              <td>$pel[3]</td>
              <td>$pel[4]</td>
              <td>
                <a href='formedit.php?nisn=".$pel['nisn']."' class=\"button-edit\">Edit</a>      
                <a href='hapus.php?nisn=".$pel['nisn']."' class=\"button-hapus\">Hapus</a>
              </td>
          </tr>";
          }

        ?>
      </table>
  </div>

</body>
</html>
