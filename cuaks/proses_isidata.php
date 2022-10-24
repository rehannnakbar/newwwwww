<?php
include ("koneksi.php");    
if(isset($_POST['simpan'])){
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];

$koneksi = new PDO('mysql:host=localhost;dbname=webb','root','');
$query = $koneksi->query("INSERT INTO tbperjalanan VALUES ('$tanggal','$waktu','$lokasi','$suhu' )");
$data = $query->fetch();

header("Location: index.php");
}
?>
