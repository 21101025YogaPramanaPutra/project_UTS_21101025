<?php

function insertdata($pdata){

    $sqlINSERT = "INSERT INTO banner (nama, senjata, skill1, skill2, material) 
    VALUES('".$pdata["NAMA"]."', '".$pdata["SENJATA"]."', '".$pdata["SKILL1"]."', '".$pdata["SKILL2"]."', '".$pdata["MATERIAL"]."');";

    include_once("koneksi2.php");
    $hsl = mysqli_query($cnn, $sqlINSERT);
    return $hsl;
}

function updatedata($pdata){
    $sql = "UPDATE banner SET
        nama = '".$pdata["NAMA2"]."',
        senjata = '".$pdata["SENJATA"]."',
        skill1 = '".$pdata["SKILL1"]."',
        skill2 = '".$pdata["SKILL2"]."',
        material = '".$pdata["MATERIAL"]."'
        WHERE nama = '".$pdata["NAMA1"]."';";

    include_once("koneksi2.php");
    $hsl = mysqli_query($cnn, $sql);
    return $hsl;
}

function harushitam(){
    include_once("koneksi2.php");
    $sql = "SELECT * FROM banner;";
    $hsl = mysqli_query($cnn,$sql);
    $hsl1 = "";
    $i = 1;
    while($h = mysqli_fetch_array($hsl)){
        $hsl1 .= '<tr>
        <td class="text-center">'.$i.'</td>
        <td class="text-center">'.$h["nama"].'</td>
        <td class="text-center">'.$h["senjata"].'</td>
        <td class="text-center">'.$h["skill1"].'</td>
        <td class="text-center">'.$h["skill2"].'</td>
        <td class="text-center">'.$h["material"].'</td>
        <td class = "text-center">
            <a class="btn text-light bg-dark px-3 fw-bold" href="edit.php?nama='.$h["nama"].'">Edit</a>
        </td>
        <td class = "text-center">
            <a class="btn btn-danger px-3 fw-bold" href="delete.php?nama='.$h["nama"].'" onClick=\'return confirm("Yakin? Nanti Di Hapus Nangis!");\'>Delete</a>
        </td>
    </tr>';
    $i++;
    }
    return $hsl1;
}