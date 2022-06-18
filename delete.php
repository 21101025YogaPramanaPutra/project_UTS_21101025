<?php
    include_once("koneksi2.php");
    
    if(isset($_GET["nama"])){
        $sql = "DELETE FROM banner WHERE nama = '".$_GET["nama"]."'";
        $hsl = mysqli_query($cnn, $sql);
    }
    mysqli_close($cnn);
    header("location: tampildata.php");