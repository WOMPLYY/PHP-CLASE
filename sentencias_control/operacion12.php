<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¿Es o no es el año?</h1>
    <form action="" method="post">
    <input type="text" name="anio" placeholder="Ingrese un año"><br><br>
    <input type="submit" name="btn" value="Calcular">
    </form><br><br>

    <?php
if(isset($_POST['btn'])){
    
    $anio = $_POST['anio'];

    if (($anio % 4 == 0 && $anio % 100 != 0) || $anio % 400 == 0) {
        echo $anio . " es un año bisiesto.\n";
    } else {
        echo $anio . " no es un año bisiesto.\n";
    }

}else{
    echo 'No hay datos para calcular';
}
    ?>
</body>
</html>