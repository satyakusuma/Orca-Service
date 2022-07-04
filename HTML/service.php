<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>orca.service</title>
    <link rel="stylesheet" href="../css/style.css" />
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
      <div class="container">
      <img src="../img/Orca.png" alt="Orca" class="img-orca" style="height:65px; margin:10px;">
        <ul>
            <li class="list-fp"><a href="../index.php">HOME</a></li>
            <li class="list-fp"><a href="about.php">ABOUT</a></li>
            <li class="active"><a href="service.php">SERVICE</a></li>
            <li class="list-fp"><a href="contact.php">CONTACT</a></li>
            <li class="list-fp"><a href="team.php">TEAM</a></li>
        </ul>
      </div>
    </header>
    <!-- Label -->
    <section class="label">
      <div class="container">
        <p>Home / service</p>
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
