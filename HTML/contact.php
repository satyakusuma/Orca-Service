<?php
  include ("konek.php");
  $sql = "select * from kontakk";
  $tampil = mysqli_query($koneksi,$sql);
  while ($r2 = mysqli_fetch_array($tampil)){
  $kontak = $r2 ['kontak'];
  $kontak2 = $r2 ['kontak2'];
  $kontak3 = $r2 ['kontak3'];
  $kontak4=  $r2 ['kontak4'];
  $map    = $r2 ['map'];
  }
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>orca.contact</title>
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
            <li class="active"><a href="contact.php">CONTACT</a></li>
            <li class="list-fp"><a href="team.php">TEAM</a></li>
        </ul>
      </div>
    </header>
    <!-- Label -->
    <section class="label">
      <div class="container">
        <p>Home / contact</p>
      </div>
    </section>
    <!-- contact -->
    <section class="service">
      <div class="container">
        <h3>Contact Info</h3>
        <div class="box">
          <div class="col-4">
            <h4>Address</h4>
            <p>
              <?php echo $kontak ?>
            </p>
          </div>
          <div class="col-4">
            <h4>Email</h4>
            <p><?php echo $kontak2 ?></p>
          </div>
          <div class="col-4">
            <h4>Whatsapp</h4>
            <p><?php echo $kontak3 ?></p>
          </div>
          <div class="col-4">
            <h4>Telp</h4>
            <p><?php echo $kontak4 ?></p>
          </div>
        </div>
        <div class="col-4">
          <p>
            <?php echo $map?>
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
