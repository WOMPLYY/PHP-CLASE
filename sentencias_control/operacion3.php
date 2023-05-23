<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¿Cual es el mayor y menor?</h1>
    <form action="" method="post">
    <input type="text" name="num1" placeholder="introdusca un numero"><br><br>
    <input type="text" name="num2" placeholder="introdusca un numero"><br><br>
    <input type="text" name="num3" placeholder="introdusca un numero"><br><br>
    <input type="submit" name="btn" value="Calcular">
    </form><br><br>

    <?php

if(isset($_POST['btn'])){
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $menor = $num1;
    $mayor = $num1;

    if ($num2 < $menor) {
        $menor = $num2;
    }
    if ($num3 < $menor) {
    $menor = $num3;
    }
    
    if ($num2 > $mayor) {
    $mayor = $num2;
    }
    if ($num3 > $mayor) {
    $mayor = $num3;
    }

    echo "El numero menor es: " . $menor."<br>";
    echo "El numero mayor es: " . $mayor;
}else{
    echo 'no hay datos para calcular';
}

    
    ?>
</body>
</html>