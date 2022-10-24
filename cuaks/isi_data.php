<?
include "index.php";

?>
<html>
<body>
<table border="1" align="center" width="50%" height="40%">
<form action="proses_isidata.php" method="POST ">
    <td> 
    <table align="center"> 

    <tr>
        <td> tanggal</td>
        <td><input type="date" name="tanggal"></td>
    </tr>
    <tr> 
        <td>waktu</td>
        <td><input type="time" name="waktu"></td>
    </tr>
    <tr>
        <td>lokasi</td>
        <td><input type="text" name="lokasi"></td>
    </tr>
        <td>suhu</td>
        <td><input type="text" name ="suhu"></td>

    </tr>
    <td align="right"><input type="submit" name = "simpan" values ="simpan"></td>
    <td>

</table>
</body>
</html>