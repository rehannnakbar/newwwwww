<?php
include 'koneksi.php';

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $q=mysqli_query($koneksi,"SELECT * FROM masyarakat WHERE username='$username' AND password='$password'");
    $cek=mysqli_num_rows($q);
    $data=mysqli_fetch_array($q);   

    if (!empty($cek)){
        $alert='<div class="alert alert success">Anda berhasil login</div>';
        $_SESSION['nik']=$data['nik'];
        echo '<meta http-equiv="refresh" content="1; url=index.php">';
    }
    else{
        $alert='<div class="alert alert success">Anda gagal login</div>';    
    }
;}
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
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center"> 
        <div class="col-lg-4">
            <div class="card mt-5 shadow"> 
                <div class="card body">
                    <h4 class="text-center">
                        APLIKASI PELAPORAN PENGADUAN MASYARAKAT
                    </h4>
                    <hr>
                    <?php echo @$alert ?>
                    <form action="" method="post">
                        <input type="text" name="username" placeholder="Username"class="form control mb3" required>
                        <input type="password" name="password" placeholder="password" class="form control mb-3" required>
                        <button name="login" class="btn btn-danger w-100">Login</button>
                        <hr>
                        <p class="small text-center">
                            Belum Terdaftar? <a href="register.php">Daftar Sekarang</a>
                        </p>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</div>
<script src="bs/js/bootstrap.js"></script>
</body>
</html>