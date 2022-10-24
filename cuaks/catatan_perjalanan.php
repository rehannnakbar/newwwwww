<?php

$db = new PDO("mysql:host=localhost;dbname=webb",'root','');
$query = $db->query("SELECT * FROM tbperjalanan");
?>

<table border="align"="center" width="50%" height="20%"> 
    <td> 
        <table align="center" border="1" width="80%" height="20%"> 
            <tr> 
                <th>tanggal</th>
                <th>waktu</th>
                <th>lokasi</th>
                <th>suhutubuh</th>
            </tr>
            <?php while($data =$query->fetch()) : ?>
            <tr> 
                <td><?= $data['tanggal']?></td>
                <td><?="".date("y/m/d")?></td>
                <td><?= $data['lokasi']?></td>
                <td><?= $data['suhutubuh']?></td>
            </tr>
            <?php endwhile; ?>