<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¿Cual es tu paga de la semana?</h1>
    <form action="" method="post">
    <label for="">Nombre:</label>
    <input type="text" name="nom" placeholder="Nombre empleado"><br><br>
    <label for="">Horas normales trabajadas:</label>
    <input type="text" name="horasN" placeholder="MAX: 48h"><br><br>
    <label for="">Horas extras:</label>
    <input type="text" name="horasE" placeholder="Extras"><br><br>
    <input type="submit" name="btn" value="Calcular">
    </form><br><br>

    <?php

if(isset($_POST['btn'])){
    
    $nom = $_POST['nom'];
    $horasN = $_POST['horasN'];
    $horasE = $_POST['horasE'];
    $totalH = $horasN + $horasE;

    $horas = 40000;
    
    if($totalH <= 48){
        $sueldo = $totalH * $horas;
    }else{
        $extras = $horasE *2;
        $horasT = $horasN + $extras;
        $sueldo = $horasT * $horas;
    }

    echo 'A '.$nom.', esta semana se le pagaran $'.$sueldo.' pesos.';

}else{
    echo 'no hay datos para calcular';
}

    
    ?>
</body>
</html>