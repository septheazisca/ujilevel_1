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
  <style>
    <?php
    include 'data-murid.css';
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
      <i class="fa-solid fa-book-open-reader"></i>
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

  <div class="kotak-kanan">
    <p>Data Murid</p>
    <div class="garis"></div>
      <h4><a href="pendataanmurid.html">add new<i class="fa-solid fa-plus"></i></a></h4>
      <table class="tbl-data" border="1" rules="rows">
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
                <a href='formedit.php?nisn=".$pel['nisn']."' class=\"button-edit\">Edit<i class=\"fa-solid fa-pen-to-square\"></i></a>      
                <a href='hapus.php?nisn=".$pel['nisn']."' class=\"button-hapus\">Hapus<i class=\"fa-solid fa-eraser\"></i></a>
              </td>
          </tr>";
          }

        ?>
      </table>
  </div>

</body>
</html>
