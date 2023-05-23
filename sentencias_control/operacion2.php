<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¿Cual es el positivo Y negativo?</h1>
    <form action="" method="post">
    <input type="text" name="num1" placeholder="introdusca un numero"><br><br>
    <input type="text" name="num2" placeholder="introdusca un numero"><br><br>
    <input type="submit" name="btn" value="Calcular">
    </form><br><br>

    <?php

if(isset($_POST['btn'])){
    
    $num = $_POST['num1'];
    $num2 = $_POST['num2'];

    if($num > 0 && $num2 < 0){
        echo 'El numero '.$num.' es positivo y el numero '.$num2.' es negativo.';
    }elseif($num < 0 && $num2 > 0){
        echo 'El numero '.$num.' es negativo y el numero '.$num2.' es positivo.';
    }elseif($num > 0 && $num2 > 0){
        echo 'Los dos numeros son positivos';
    }elseif($num < 0 && $num2 < 0){
        echo 'Los dos numeros son negativos';
    }
}else{
    echo 'no hay datos para calcular';
}
    ?>
</body>
</html>