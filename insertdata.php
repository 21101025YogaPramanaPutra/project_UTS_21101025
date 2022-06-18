<?php

if(isset($_POST["txKEEP"])){
    $pdata["NAMA"] = $_POST["txNAMA"];
    $pdata["SENJATA"] = $_POST["txSENJATA"];
    $pdata["SKILL1"] = $_POST["txSKILL1"];
    $pdata["SKILL2"] = $_POST["txSKILL2"];
    $pdata["MATERIAL"] = $_POST["txMATERIAL"];

    include_once("crud.php");
    insertdata($pdata);
    header("location:tampildata.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert List Data Genshin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="fw-bold my-4">Insert List Data Genshin </h1>
        <form action="" method="POST">
            Nama
            <div>
                <input type="text" name="txNAMA" class="form-control form-control">
            </div>
            Senjata
            <div>
                <input type="text" name="txSENJATA" class="form-control form-control">
            </div>
            Skill1
            <div>
                <input type="text" name="txSKILL1" class="form-control form-control">
            </div>
            Skill2
            <div>
                <input type="text" name="txSKILL2" class="form-control form-control">
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
            <div class="input-group">
                <button type="submit" class="insert btn btn-dark text-light" name="txKEEP">Keep</button>
            </div>
        </form>
    </div>
</body>
</html>