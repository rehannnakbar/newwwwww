<?php

session_start();

$koneksi=mysqli_connect("localhost","root","","pengaduanmasyarakat");

$page=@$_GET['page'];