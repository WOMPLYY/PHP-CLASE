<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¿Cual es la diferencia?</h1>
    <form action="" method="post">
    <input type="text" name="dia1" placeholder="dia 1"><br><br>
    <input type="text" name="mes1" placeholder="mes 1"><br><br>
    <input type="text" name="dia2" placeholder="dia 2"><br><br>
    <input type="text" name="mes2" placeholder="mes 2"><br><br>
    <input type="submit" name="btn" value="Calcular">
    </form><br><br>

    <?php

if(isset($_POST['btn'])){
    
    $dia1 = $_POST['dia1'];
    $mes1 = $_POST['mes1'];
    $dia2 = $_POST['dia2'];
    $mes2 = $_POST['mes2'];
    
    $dias1 = ($mes1 - 1) * 30 + $dia1;
    $dias2 = ($mes2 - 1) * 30 + $dia2;
    
    $diferencia = $dias2 - $dias1;
    
    echo "La diferencia entre las fechas es de " . $diferencia . " días.";

}else{
    echo 'no hay datos para calcular';
}
    ?>
</body>
</html>