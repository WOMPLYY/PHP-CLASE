<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¿Positivo o negativo?</h1>
    <form action="" method="post">
    <input type="text" name="num1" placeholder="introdusca un numero"><br><br>
    <input type="submit" name="btn" value="Calcular">
    </form><br><br>

    <?php
if(isset($_POST['btn'])){
    $num = $_POST['num1'];
    if($num > 0){
        echo 'El numero es positivo';
    }elseif($num < 0){

        echo 'El numero es negativo';
        $num = $_POST['num1'];
    
    }
}else{
    echo 'no hay datos para calcular';
}
    ?>
</body>
</html>