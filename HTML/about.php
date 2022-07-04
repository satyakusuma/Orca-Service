<?php
  include ("konek.php");
  $sql = "select * from abot ";
  $tampil = mysqli_query($koneksi,$sql);
  while ($r2 = mysqli_fetch_array($tampil)){
  $about = $r2 ['about'];
  $about2 = $r2 ['about2'];
  $about3 = $r2 ['about3'];
  $about4=  $r2 ['about4'];
  }
    ?>
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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>orca.about</title>
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
            <li class="active"><a href="about.php">ABOUT</a></li>
            <li class="list-fp"><a href="service.php">SERVICE</a></li>
            <li class="list-fp"><a href="contact.php">CONTACT</a></li>
            <li class="list-fp"><a href="team.php">TEAM</a></li>
        </ul>
      </div>
    </header>
    <!-- Label -->
    <section class="label">
      <div class="container">
        <p>Home / About</p>
      </div>
    </section>

    <!-- about -->

    <section class="about">
      <div class="container">
        <h3>ABOUT</h3>
        <p class="about-company">
          <?php echo $about?>
        </p>
        <p class="about-company">
        <?php echo $about2?>
        </p>
        <p><?php echo $about3?></p>
        <p>
        <?php echo $about4?>
        </p>
      </div>
    </section>

    <footer>
      <div class="container">
        <small>Copyright &copy; 2022 - Micheal - All Right Reserved </small>
      </div>
    </footer>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".bg-loader").hide();
      });
    </script>
  </body>
</html>
