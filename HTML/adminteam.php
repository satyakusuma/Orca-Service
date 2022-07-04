<?php
include_once ("konek.php");


$nim    =   "";
$nama   =   "";
$kelas  =   "";
$sukses =   "";
$error  =   "";

//Kontak
if (isset($_POST['kntk'])){//edit contact
    $kontak     =   $_POST['kontak'];
    $kontak2    =   $_POST['kontak2'];
    $kontak3     =  $_POST['kontak3'];
    $kontak4    =   $_POST['kontak4'];
    $map        =   $_POST['map'];
    if($kontak && $kontak2 && $kontak3 && $kontak4 && $map){
            //$sql1   = "insert into abot(about) values ('$about')";
            $sql1 = "update kontakk set kontak = '$kontak',kontak2 ='$kontak2',kontak3='$kontak3',kontak4='$kontak4',map='$map'";
             $q1   = mysqli_query($koneksi,$sql1);
             if ($q1){
            $sukses = "Berhasil ";
            }else{
            $error = "error";
            }
        }  
    }



//About
if (isset($_POST['abt'])){//create
    $about      =   $_POST['about'];
    $about2     =   $_POST['about2'];
    $about3     =   $_POST['about3'];
    $about4     =   $_POST['about4'];

    if($about){
            //$sql1   = "insert into abot(about) values ('$about')";
            $sql1 = "update abot set about = '$about',about2 ='$about2',about3='$about3',about4='$about4'";
             $q1   = mysqli_query($koneksi,$sql1);
             if ($q1){
            $sukses = "Berhasil ";
            }else{
            $error = "error";
            }
        }  
    }


if (isset($_POST['abt'])){//create
    $about      =   $_POST['about'];
    $about2     =   $_POST['about2'];

    if($about){
            //$sql1   = "insert into abot(about) values ('$about')";
            $sql1 = "update abot set about = '$about',about2 ='$about2'";
             $q1   = mysqli_query($koneksi,$sql1);
             if ($q1){
            $sukses = "Berhasil ";
            }else{
            $error = "error";
            }
        }  
    }

//Data kelompok
if (isset($_POST['simpan'])){//create
    $nim    =   $_POST['nim'];
    $nama   =   $_POST['nama'];
    $kelas  =   $_POST['kelas'];
    
    if($nim && $nama && $kelas){
        $sql1 = "insert into nim(nim,nama,kelas) values ('$nim','$nama','$kelas')";
             $q1   = mysqli_query($koneksi,$sql1);
             if ($q1){
            $sukses = "Berhasil ";
            }else{
            $error = "error";
            }
        }  
    }

if (isset($_POST['updt'])){//update
    $nim    =   $_POST['nim'];
    $nama   =   $_POST['nama'];
    $kelas  =   $_POST['kelas'];
        
    if($nim && $nama && $kelas){
            $sql1 = "update nim set nim='$nim',nama='$nama',kelas='$kelas' where nim='$nim'";
                $q1   = mysqli_query($koneksi,$sql1);
                if ($q1){
                $sukses = "Berhasil ";
                }else{
                $error = "error";
                }
            }  
        }
if (isset($_POST['delete'])){//delete
     $nim    =   $_POST['nim'];
        if($nim){
                $sql1 = "DELETE FROM `nim` WHERE nim='$nim'";
                    $q1   = mysqli_query($koneksi,$sql1);
                    if ($q1){
                    $sukses = "Berhasil ";
                    }else{
                    $error = "error";
                }
                }  
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

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>orca.service</title>
    <link rel="stylesheet" href="../css/admin.css" />
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <!-- header -->
  </head>
  <body>
 

  <h1 class="orca">Orca Service Admin</h1>
    <!-- Loader -->
    </header>
    <!-- Label -->
    <form action="" method ="POST"  class="container-admin">
    <tr>
                <h2 class="admin-title">Edit About</h2>
                <td>Paragraph 1</td>
                <td>:</td>
                <td><input class ="edit-home" type="text" name="about" placeholder = "paragraph1" value=""></td>
            </tr>
            <tr>
                <td>Paragraph 2</td>
                <td>:</td>
                <td><input class ="edit-home" type="text" name="about2" placeholder = "paragraph1" value=""></td>
            </tr>
            <tr>
                <td>Paragraph 3</td>
                <td>:</td>
                <td><input class ="edit-home" type="text" name="about3" placeholder = "paragraph1" value=""></td>
            </tr>
            <tr>
                <td>Paragraph 4</td>
                <td>:</td>
                <td><input class ="edit-home" type="text" name="about4" placeholder = "paragraph1" value=""></td>
            </tr>
            <div class="clearfix">
      <button type="submit" name="kntk" class="updtbtn">Edit</button>
</div>
    </tr>      
        </form>

        <form action="" method ="POST"  class="container-admin">
            <tr>
                <h2 class="admin-title">Edit Kontak</h2>
                <td>Paragraph 1</td>
                <td>:</td>
                <td><input class ="edit-home" type="text" name="kontak" placeholder = "paragraph1" value=""></td>
            </tr>
            <tr>
                <td>Paragraph 2</td>
                <td>:</td>
                <td><input class ="edit-home" type="text" name="kontak2" placeholder = "paragraph1" value=""></td>
            </tr>
            <tr>
                <td>Paragraph 3</td>
                <td>:</td>
                <td><input class ="edit-home" type="text" name="kontak3" placeholder = "paragraph1" value=""></td>
            </tr>
            <tr>
                <td>Paragraph 4</td>
                <td>:</td>
                <td><input class ="edit-home" type="text" name="kontak4" placeholder = "paragraph1" value=""></td>
            </tr>
            <tr>
                <td>Map</td>
                <td>:</td>
                <td><input class ="edit-home" type="text" name="map" placeholder = "paragraph1" value=""></td>
            </tr>
            <tr>
            <div class="clearfix">
      <button type="submit" name="kntk" class="updtbtn">Edit</button>
    </div>
</tr>
        </form>

      
    </form>

    <body class="editbody">
    <form action="" method="POST">
  <div class="container">
    <h2 class="admin-title">Edit Anggota Kelompok</h2>
    <hr>

    <label for="email"><b>NIM</b></label>
    <input type="text" placeholder="NIM" name="nim" required>

    <label for="psw"><b>Nama</b></label>
    <input type="text" placeholder="NAMA" name="nama" required>

    <label for="psw-repeat"><b>Kelas</b></label>
    <input type="text" placeholder="Kelas" name="kelas" required>

    <div class="clearfix">
      <button type="submit" name="delete" class="editbtn">Delete</button>
      <button type="submit" name="updt" class="updtbtn">Update</button>
    </div>
  </div>
</form>

<form action=""  method="POST">
  <div class="container">
    <hr>

    <label for="email"><b>NIM</b></label>
    <input type="text" placeholder="NIM" name="nim" required>

    <label for="psw"><b>Nama</b></label>
    <input type="text" placeholder="NAMA" name="nama" required>

    <label for="psw-repeat"><b>Kelas</b></label>
    <input type="text" placeholder="Kelas" name="kelas" required>

    <div class="clearfix">
      <button type="submit" name="delete" class="editbtn">Delete</button>
      <button type="submit" name="updt" class="updtbtn">Update</button>
    </div>
  </div>
</form>

<form action=""  method="POST">
  <div class="container">
    <hr>

    <label for="email"><b>NIM</b></label>
    <input type="text" placeholder="NIM" name="nim" required>

    <label for="psw"><b>Nama</b></label>
    <input type="text" placeholder="NAMA" name="nama" required>

    <label for="psw-repeat"><b>Kelas</b></label>
    <input type="text" placeholder="Kelas" name="kelas" required>

    <div class="clearfix">
      <button type="submit" name="delete" class="editbtn">Delete</button>
      <button type="submit" name="updt" class="updtbtn">Update</button>
    </div>
  </div>
</form>

    <form action="" method="POST">
  <div class="container">
    <hr>

    <label for="email"><b>NIM</b></label>
    <input type="text" placeholder="NIM" name="nim" required>

    <label for="psw"><b>Nama</b></label>
    <input type="text" placeholder="NAMA" name="nama" required>

    <label for="psw-repeat"><b>Kelas</b></label>
    <input type="text" placeholder="Kelas" name="kelas" required>

    <div class="clearfix">
      <button type="submit" name="delete" class="editbtn">Delete</button>
      <button type="submit" name="updt" class="updtbtn">Update</button>
    </div>
  </div>
</form>
<h2 class="admin-home"><a href="../index.php  ">Logout</a></h2>
</body>
    
    </footer>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".bg-loader").hide();
      });
    </script>
  </body>
</html>
