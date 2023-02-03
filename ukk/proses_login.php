<?php
session_start();
$username  = $_REQUEST['username'];
$password = $_REQUEST['password'];

$koneksi = new PDO('mysql:host=localhost;dbname=pengaduanmasyarakat;','root','');
$query = $koneksi->query("SELECT * from masyarakat where username='$username' and password='$password'");


$data = $query->fetch();
if($data){
    $_SESSION['username'] =$username; 
    $_SESSION['password'] = $password;

header("location:index.php");
    }else{
    header("location:login.php");
}