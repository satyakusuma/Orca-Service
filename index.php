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
    <style>
      .footer-list ul li {
        list-style-type:none;
      }
      .footer-list ul li a {
        text-decoration:none;
        color:#fff;
      }

    </style>
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
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- header -->
  </head>
  <body>
    <!-- Loader -->
    <div class="bg-loader">
      <div class="loader"></div>
     
    </div>
    <header>
      <div class="container-fluid">
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
    <section class="label1">
      <div class="container">
        <p style="font-size: 25px;">Home / Home</p>
      </div>
    </section>
      <div class="background-head">
    <h2 style="text-align:center; font-size:50px; font-family:'Times New Roman', serif; font-weight:200; margin-top:0px;">We Provide A Cyber Security On Every Aspect</h2>
    </div>
    <!-- slider -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.tuvsud.com/-/media/global/images/services/auditing-and-system-certification/ss-1091749532-cyber-security.jpg?pid=02bbf854-4980-4228-9239-5942e6bdec80" class="d-block w-100" alt="Systems-Picture" style="height:600px;">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="font-size:140px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Network Security</h5>
        <p style="font-size:60px; ">We Secure Your Network</p>
        <p style="font-size:60px; ">Only Rp.150.000/Month</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.tuvsud.com/-/media/global/images/services/auditing-and-system-certification/ss-1091749532-cyber-security.jpg?pid=02bbf854-4980-4228-9239-5942e6bdec80" class="d-block w-100" alt="Network-Picture" style="height:600px;">
      <div class="carousel-caption d-none d-md-block">
      <h5 style="font-size:140px;   font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >System Security</h5>
        <p style="font-size:60px; ">We Secure Your System</p>
        <p style="font-size:60px;">Only Rp.150.000/Month</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.tuvsud.com/-/media/global/images/services/auditing-and-system-certification/ss-1091749532-cyber-security.jpg?pid=02bbf854-4980-4228-9239-5942e6bdec80" class="d-block w-100" alt="..." style="height:600px;:60%;">
      <div class="carousel-caption d-none d-md-block">
      <h5 style="font-size:140px;  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Data Security</h5>
        <p style="font-size:60px; ">We Secure Your Data</p>
        <p style="font-size:60px; ">Only Rp.150.000/Month</p>
      </div>
    </div>
  <div class="carousel-item">
      <img src="https://www.tuvsud.com/-/media/global/images/services/auditing-and-system-certification/ss-1091749532-cyber-security.jpg?pid=02bbf854-4980-4228-9239-5942e6bdec80" class="d-block w-100" alt="..." style="height:600px;:60%;">
      <div class="carousel-caption d-none d-md-block">
      <h5 style="font-size:140px;   font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Program Security</h5>
        <p style="font-size:60px; ">We Secure Your Program</p>
        <p style="font-size:60px; ">Only Rp.150.000/Month</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

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
  <div class="footer-list">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="HTML/about.php">About</a></li>
      <li><a href="HTML/service.php">Service</a></li>
      <li><a href="HTML/team.php">Team</a></li>
      <li><a href="HTML/contact.php">Contact</a></li>
    </ul>
  </div>
      <div class="container">
        <small>Copyright &copy; 2022 - Orca - All Right Reserved </small>
      </div>
    </footer>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".bg-loader").hide();
      });
    </script>
  </body>
</html>
