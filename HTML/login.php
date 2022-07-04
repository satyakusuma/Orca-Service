<?php
    session_start();
    include ("konek.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
        if (isset($_POST['fmasuk'])){
            $username = $_POST['fusername'];
            $password = $_POST['fpassword'];
            $qry = mysqli_query($koneksi,"SELECT * FROM admin WHERE user_name = '$username' AND user_pass = '$password'");
            $cek = mysqli_num_rows($qry);
            if($cek==1){
                $_SESSION['userweb']=$username;
                header("location:adminteam.php");
                exit;
            }
            else{
                echo "Login Failed!!!";
            }
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login Page</title>
</head>
<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="../img/Orca.png" style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">We are ORCA Team</h4>
                      </div>
      
                      <form method="post">
                      <p>Please login to your admin account</p>
    
                      <div class="form-outline mb-4">
                        <input type="email" name="fusername" id="form2Example11" class="form-control"
                          placeholder="Username" />
                        <label class="form-label" for="form2Example11">Username</label>
                      </div>
    
                      <div class="form-outline mb-4">
                        <input type="password" name="fpassword" id="form2Example22" class="form-control" />
                        <label class="form-label" for="form2Example22">Password</label>
                      </div>
    
                      <div class="text-center pt-1 mb-5 pb-1">
                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="fmasuk" type="submit">Log
                          in</button>
                      </div>
                    </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">We are more than just a company</h4>
                      <p class="small mb-0">Orca is a Yogya Based, multinational cyber security company that was established in 2020. Dedicated to protect Your data.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>