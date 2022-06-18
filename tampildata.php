<?php
    include("crud.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil List Data Genshin</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <style>
        .container{
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row align-items-center">
            <div>
                <h3 class="mb-4 fw-bold text-center">List Character Genshin</h3>
            </div>
        </div>        
        <div>
            <table class="table align-middle py-5">
                <thead class="table-light border-1">
                    <tr class="text-center border-2">
                        <th class = "border-1 py-4 bg-warning">NO</th>
                        <th class = "border-1 py-4 bg-warning">Nama</th>
                        <th class = "border-1 py-4 bg-warning">Senjata</th>
                        <th class = "border-1 py-4 bg-warning">Skill1</th>
                        <th class = "border-1 py-4 bg-warning">Skill2</th>
                        <th class = "border-1 py-4 bg-warning">Material</th>
                        <th class= "bg-warning py-2" colspan="2"><a href='insertdata.php'><input class="btn btn-success py-2 my-2 px-4 fw-bold" type="button" value="TAMBAH DATA"></a></th>
                    </tr>
                </thead>
                <tbody>
                    <?=harushitam();?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>