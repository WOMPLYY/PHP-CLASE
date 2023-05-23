<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convercion</title>
</head>
<body>
    <form action="" method="post">
        <h1>Convercion de euros a dolares</h1>
        <input type="text" name="euro" placeholder="Euro"><br><br>
        <input type="submit" value="Calcular" name="btn">
    </form><br><br>
<?php
    if(isset($_POST['btn'])) {

    $euro = $_POST['euro'];

    $resultado1 = $euro*1.0831;

    echo $euro." euros son ".$resultado1. " dolares";

}else{
    echo "no hay datos para calcular";
}


?>
</body>
</html>