<?php
include 'koneksi.php';

if(!empty($_SESSION['nik'])){

 $user=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM masyarakat WHERE nik='$_SESSION[nik]'"));


?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bs/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
  <div class="container">
    <button class="btn btn-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand me-auto ms-2" href="#">APLIKASI PELAPORAN PENGADUAN MASYARAKAT</a>
    </div>
</nav>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title text-danger" id="offcanvasExampleLabel">APPM</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <nav class="nav flex-column">
    <a class="nav-link text-secondary <?php if($page=='dashboard'){echo'bg-danger text-white';} ?>" href="$page=dashboard">dashboard</a>
    <a class="nav-link text-secondary <?php if($page=='pengaduan'){echo'bg-danger text-white';} ?>" href="$page=pengaduan">Pengaduan</a>
</nav>
  </div>
</div>

<!--content-->
<div class="container mt-5">
    <?php
  
  
  if($page=='pengaduan'){
    include 'masyarakat/pengaduan.php';
   }
   elseif ($page=='dashboard'){
    include 'masyarakat/dashboard.php';
   }
   elseif ($page=='form-pengaduan'){
    include 'masyarakat/form-pengaduan.php';
   }
   else{
    header("location:?page=dashboard");
  }

   
    ?>
</div>


 
<script src="bs/js/bootstrap.js"></script>
</body>
</html>
<?php
}
else{
    header('location:login.php');
}