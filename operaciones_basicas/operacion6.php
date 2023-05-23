<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area y perimetro</title>
</head>
<body>
    <form action="" method="post">
        <h1>Area y perimetro de un cuadrado</h1>
        <input type="text" name="lado" placeholder="cuanto mide un lado"><br><br>
        <input type="submit" value="Calcular" name="btn">
    </form><br><br>
<?php

if(isset($_POST['btn'])) {

    $lado = $_POST['lado'];

    $resultado2= $lado*4;
    $resultado1 = $lado*$lado;

    echo "El perimetro del cuadrado es: ".$resultado2." y su area es: ".$resultado1;
}else{
        echo "no hay datos para calcular";
}

?>
</body>
</html>