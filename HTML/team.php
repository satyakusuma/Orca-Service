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
        <p style="font-size: 20px;">Home / team</p>
      </div>
    </section>
<!-- bootstrap -->
<section class="bg-light d-flex justify-content-center align-items-center h-100 min-vh-100">
  <div class="container">
    <div class="row gy-2">
      <div class="col-lg-3 col-md-4">
        <div class="box bg-primary h-100 d-flex p-4 flex-column text-white">
        <img src="../img/aryus.jpeg" alt="Photo Profile" style="height:280px">
        <h1 style="color:#000;">Orca</h1>
        <p style="color:#000;"><?php echo $nama  ?></p>
        <p style="color:#000;"> <?php echo $nim ?></p>
        <p style="color:#000;"> <?php echo $kelas?></p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="box bg-primary h-100 d-flex p-4 flex-column text-white">
        <img src="../img/abdul.jpeg" alt="Photo Profile" style="height:280px">
        <h1 style="color:#000;">Orca</h1>
        <p style="color:#000;"><?php echo $nama2  ?></p>
        <p style="color:#000;"> <?php echo $nim2 ?></p>
        <p style="color:#000;"> <?php echo $kelas2?></p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="box bg-primary h-100 d-flex p-4 flex-column text-white">
        <img src="../img/alif.jpg" alt="Photo Profile" style="height:280px">
        <h1 style="color:#000;">Orca</h1>
        <p style="color:#000;"><?php echo $nama3  ?></p>
        <p style="color:#000;"> <?php echo $nim3 ?></p>
        <p style="color:#000;"> <?php echo $kelas3?></p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="box bg-primary h-100 d-flex p-4 flex-column text-white">
        <img src="../img/Pas foto.jpeg" alt="Photo Profile" style="height:280px">
        <h1 style="color:#000;">Orca</h1>
        <p style="color:#000;"><?php echo $nama4  ?></p>
        <p style="color:#000;"> <?php echo $nim4 ?></p>
        <p style="color:#000;"> <?php echo $kelas4?></p>
    </div>
  </div>
</section>
  
  <div class="container ">
    <div class="row gy-2">
      <div class="col-lg-3 col-md-4">
        <div class="box bg-primary h-100 d-flex p-4 flex-column text-white">
        <img src="../img/satya.JPG" alt="Photo Profile">
        <h1 style="color:#000;">Orca</h1>
        <p style="color:#000;"><?php echo $nama5  ?></p>
        <p style="color:#000;"> <?php echo $nim5 ?></p>
        <p style="color:#000;"> <?php echo $kelas5?></p>
        </div>
      </div>
      </div>
  </div>

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
