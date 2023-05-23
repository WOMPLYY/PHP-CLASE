<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area rectangulo</title>
</head>
<body>
    <form action="" method="post">
        <h1>Area de un rectangulo</h1>
        <input type="text" name="base" placeholder="Base"><br><br>
        <input type="text" name="altura" placeholder="Altura"><br><br>
        <input type="submit" value="Calcular" name="btn">
    </form><br><br>
<?php

if(isset($_POST['btn'])) {

    $base = $_POST['base'];
    $altura = $_POST['altura'];

    $resultado1 = $base * $altura;

    echo "El area del rectangulo es: ".$resultado1;
}else{
        echo "no hay datos para calcular";
}

?>
</body>
</html>