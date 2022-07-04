<?php
  include ("HTML/konek.php");
  $sql = "select * from abot ";
  $tampil = mysqli_query($koneksi,$sql);
  while ($r2 = mysqli_fetch_array($tampil)){
  $about = $r2 ['about'];
  $about2 = $r2 ['about2'];
  $about3 = $r2 ['about3'];
  $about4=  $r2 ['about4'];
  }
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>orca.index</title>
    <link rel="stylesheet" href="css/style.css" />
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
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
      <div class="container-fluid bg-light">
        <div class="container">
        <img src="img/Orca.png" alt="Orca" class="img-orca" style="height:65px; margin:10px;">
          <ul>
            <li class="active"><a href="index.html">HOME</a></li>
            <li class="list-fp"><a href="HTML/about.php">ABOUT</a></li>
            <li class="list-fp"><a href="HTML/service.php">SERVICE</a></li>
            <li class="list-fp"><a href="HTML/contact.php">CONTACT</a></li>
            <li class="list-fp"><a href="HTML/team.php">TEAM</a></li>
            <li class="list-fp"><a href="HTML/login.php">LOGIN</a></li>
          </ul>
        </div>
      </div>
    </header>

    <!-- banner -->
    <section class="banner">
      <h1 class="greet">WELCOME TO ORCA</h1>
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

    <!-- Service -->

    <section class="service">
      <div class="container">
        <h3>SERVICE</h3>
        <div class="box">
          <div class="col-4">
            <div class="icon">
              <i class="fas fa-passport"></i>
            </div>
            <h4>NETWORK SECURITY</h4>
          </div>
          <div class="col-4">
            <div class="icon">
              <i class="fa-brands fa-ubuntu"></i>
            </div>
            <h4>SYSTEMS SECURITY</h4>
          </div>
          <div class="col-4">
            <div class="icon">
              <i class="fas fa-shield-alt"></i>
            </div>
            <h4>PROGRAMS SECURITY</h4>
          </div>
          <div class="col-4">
            <div class="icon">
              <i class="fas fa-user-shield"></i>
            </div>
            <h4>DATA SECURITY</h4>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <small>Copyright &copy; 2022 - Kelompok 4 - All Right Reserved </small>
      </div>
    </footer>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".bg-loader").hide();
      });
    </script>
  </body>
</html>
