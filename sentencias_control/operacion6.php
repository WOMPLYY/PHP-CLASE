<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¿Cual es el dia de la semana?</h1>
    <form action="" method="post">
    <input type="text" name="num1" placeholder="numero del dia (max: 7)" maxlength="1"><br><br>
    <input type="submit" name="btn" value="Calcular">
    </form><br><br>

    <?php

if(isset($_POST['btn'])){
    
    $numDia = $_POST['num1'];

    switch ($numDia) {
        case '1':
            echo 'Lunes';
        break;
        case '2':
            echo 'Martes';
        break;
        case '3':
            echo 'Miercoles';
        break;
        case '4':
            echo 'Jueves';
        break;
        case '5':
            echo 'Viernes';
        break;
        case '6':
            echo 'Sabado';
        break;
        case '7':
            echo 'Domingo';
        break;
        case '8':
            echo 'El numero no es correcto';
        break;
        case '9':
            echo 'El numero no es correcto';
        break;
        case '0':
            echo 'El numero no es correcto';
        break;
        
    }

}else{
    echo 'No hay datos para calcular';
}
    ?>
</body>
</html>