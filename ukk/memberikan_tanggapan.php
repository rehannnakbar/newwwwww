<?php
session_start();

if(!isset($_SESSION['nik'])){
}


?>


<?
include "index.php";

?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">  

<body>
<table border="1" height="70%" width= "60%" align="center">
<form action="" method="POST">
    <td> 
    <table align="center"> 
    <style>
                    body{
                        background-image: url("sambo.jpg") ;
                        background-size: cover;
                    }
                    table{
                        background-color:green;
                    }
                    </style>
                    <h1 class ="text-black text-center ">PENGADUAN</h1>
                    <h5 class ="text-black text-center ">SILAKAN ISI</h5>

                    
                    

    <tr>
        <td class ="text-black text center"> tanggal </td>
        <td><input type="date" name="tanggal" required></td>
    </tr>
    <tr> 
        <td class ="text-black text center"> nik  </td>
        <td><input type="number" name="number"required></td>
    </tr>
    <tr>
        <td class ="text-black text center"> ISI LAPORAN   </td>
        <td><input type="text" name="lokasi" required></td>
    </tr>
        <td class ="text-black text center">     FOTO   </td>
        <td><label for="formFileSm" class="form-label"><input type="file"></label></td>

        

    </tr>
    <td align="right"><input type="submit" name = "simpan" values ="simpan"></td>
    <td>

</table>
</body>
</html>