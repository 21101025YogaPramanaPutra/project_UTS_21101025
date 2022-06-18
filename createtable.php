<?php

include_once("koneksi2.php");

$sql = "CREATE TABLE banner(
    nama varchar(50) PRIMARY KEY, 
    senjata varchar(60),
    skill1 varchar(40),
    skill2 varchar(40),
    material varchar(50)
);";

$hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "banner <strong>BERHASIL</strong> Dibuat<br>";
    }else{
        echo "banner <strong>GAGAL</strong> Dibuat<br>";
    }

mysqli_close($cnn);