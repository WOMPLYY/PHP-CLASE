<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Longitudes y areas</title>
</head>
<body>
    <form action="" method="post">
        <h1>longitud y area de una circunferencia</h1>
        <input type="text" name="radio" placeholder="Radio"><br><br>
        <input type="submit" value="Calcular" name="btn">
    </form><br><br>
<?php

if(isset($_POST['btn'])) {

    $radio = $_POST['radio'];
    
    $longitud = 2 * pi() * $radio;
    
    $area = pow($radio, 2) * pi();
    

    echo "La longitud de la circunferencia es: " . round($longitud, 2) . " y el area es:".round($area, 2);

}else{
        echo "no hay datos para calcular";
}

?>
</body>
</html>