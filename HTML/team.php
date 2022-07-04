<?php
  include ("konek.php");
  $sql2 = "select * from nim where nim='20.11.3681'";
  $q2   = mysqli_query($koneksi,$sql2);
  while ($r2 = mysqli_fetch_array($q2)){
      $nim    = $r2   ['nim'];
      $nama   = $r2   ['nama'];
      $kelas  = $r2   ['kelas'];

      ?>
      <?php

  }
?>
<?php
$sql2 = "select * from nim where nim = '20.11.3698'";
$q2   = mysqli_query($koneksi,$sql2);
while ($r2 = mysqli_fetch_array($q2)){
    $nim2    = $r2   ['nim'];
    $nama2   = $r2   ['nama'];
    $kelas2  = $r2   ['kelas'];

    ?>
    <?php

}
?>
<?php
$sql2 = "select * from nim where nim = '20.11.3703'";
$q2   = mysqli_query($koneksi,$sql2);
while ($r2 = mysqli_fetch_array($q2)){
    $nim3    = $r2   ['nim'];
    $nama3   = $r2   ['nama'];
    $kelas3  = $r2   ['kelas'];

    ?>
    <?php

}
?>
<?php
$sql2 = "select * from nim where nim = '20.11.3788'";
$q2   = mysqli_query($koneksi,$sql2);
while ($r2 = mysqli_fetch_array($q2)){
    $nim4    = $r2   ['nim'];
    $nama4   = $r2   ['nama'];
    $kelas4  = $r2   ['kelas'];

    ?>
    <?php

}
?>
<?php
$sql2 = "select * from nim where nim = '20.11.3708'";
$q2   = mysqli_query($koneksi,$sql2);
while ($r2 = mysqli_fetch_array($q2)){
    $nim5    = $r2   ['nim'];
    $nama5   = $r2   ['nama'];
    $kelas5  = $r2   ['kelas'];

    ?>
    <?php

}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>orca.service</title>
    <link rel="stylesheet" href="../css/style.css" />
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <!-- header -->
  </head>
  <body>
    <!-- Loader -->
    <div class="bg-loader">
      <div class="loader"></div>
    </div>
    <header>
      <div class="container">
      <img src="../img/Orca.png" alt="Orca" class="img-orca" style="height:65px; margin:10px;">
        <ul>
            <li class="list-fp"><a href="../index.php">HOME</a></li>
            <li class="list-fp"><a href="about.php">ABOUT</a></li>
            <li class="list-fp"><a href="service.php">SERVICE</a></li>
            <li class="list-fp"><a href="contact.php">CONTACT</a></li>
            <li class="active"><a href="team.php">TEAM</a></li>
        </ul>
      </div>
    </header>
    <!-- Label -->
    <section class="label1">
      <div class="container">
        <p>Home / team</p>
      </div>
    </section>
      <p class="">Nama :<?php echo $nama  ?></p>
      <p class ="">NIM : <?php echo $nim ?></p>
      <p class ="">Kelas : <?php echo $kelas?></p>
      <br>
      <p class="">Nama :<?php echo $nama2  ?></p>
      <p class ="">NIM : <?php echo $nim2 ?></p>
      <p class ="">Kelas : <?php echo $kelas2?></p>
      <br>
      <p class="">Nama :<?php echo $nama3  ?></p>
      <p class ="">NIM : <?php echo $nim3 ?></p>
      <p class ="">Kelas : <?php echo $kelas3?></p>
      <br>
      <p class="">Nama :<?php echo $nama4  ?></p>
      <p class ="">NIM : <?php echo $nim3 ?></p>
      <p class ="">Kelas : <?php echo $kelas3?></p>
      <br>
      <p class="">Nama :<?php echo $nama5  ?></p>
      <p class ="">NIM : <?php echo $nim5 ?></p>
      <p class ="">Kelas : <?php echo $kelas5?></p>
    <footer>
      <div class="container">
        <small>Copyright &copy; 2022 - Orca - All Right Reserved </small>
      </div>
    </div>
    </footer>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".bg-loader").hide();
      });
    </script>
    
  </body>
</html>
