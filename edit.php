<?php

    if(isset($_GET["nama"])){
        include_once("koneksi2.php");
        $nama = $_GET["nama"];
        $sql = "SELECT * FROM banner WHERE nama='".$nama."';";
        $hsl = mysqli_query($cnn, $sql);
        $h = mysqli_fetch_array($hsl);
    }

    if(isset($_POST["txKEEP"])){
        $pdata["NAMA1"] = $_POST["txNAMALAMA"];
        $pdata["NAMA2"] = $_POST["txNAMA"];
        $pdata["NAMA"] = $_POST["txNAMA"];
        $pdata["SENJATA"] = $_POST["txSENJATA"];
        $pdata["SKILL1"] = $_POST["txSKILL1"];
        $pdata["SKILL2"] = $_POST["txSKILL2"];
        $pdata["MATERIAL"]= $_POST["txMATERIAL"];

        include_once("crud.php");
        updatedata($pdata);
        header("location:tampildata.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List GI</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h1 class="my-2 fw-bold ">List Name Genshin</h1>
        <form action="edit.php" method="POST">
            <input type="hidden" name="txNAMALAMA" value="<?=$h['nama'];?>">
            Nama
            <div>
                 <input type="text" class="form-control form-control" name="txNAMA" value="<?=$h['nama'];?>">
            </div>        
            Senjata
            <div>
                <input type="text" class="form-control form-control" name="txSENJATA" value="<?=$h["senjata"];?>">
            </div>
            Skill1
            <div>
                <input type="text" class="form-control form-control" name="txSKILL1" value="<?=$h["skill1"];?>">
            </div>
            Skill2
            <div>
                <input type="text" class="form-control form-control" name="txCEKIN" value="<?=$h["skill2"];?>">
            </div>
            Material
            <div>
                <select name="txMATERIAL" class="form-select">
                    <option value="MOLTEN MOMENT">Molten Moment</option>
                    <option value="TUSK">Tusk</option>
                    <option value="TAIL OF BOREAS">Tail Of Boreas</option>
                    <option value="DRAGON LORD CROWN">Dragon Lord Crown</option>
                    <option value="SHADOW WARRIOR">Shadow Warrior</option>
                    <option value="AEONS">Aeons</option>
                    <option value="HELLFIRE BUTTERFLY">Hellfire Butterfly</option>
                </select>  
            </div>
            <br>
            <button type="submit" class="btn btn-dark text-light" name="txKEEP">Save</button>  
            <a href="tampildata.php" class="btn btn-secondary text-light ms-3">Back</a>
                 
        </form>
    </div>
</body>
</html>