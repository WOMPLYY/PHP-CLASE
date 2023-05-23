<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¿Cual es la diferencia de tiempo?</h1>
    <form action="" method="post">
        <p>Hora ingreso:</p>
    <input type="text" name="hi" placeholder="hora"><br><br>
    <input type="text" name="mi" placeholder="minuto"><br><br>
    <input type="text" name="si" placeholder="segundo"><br><br>
    <p>Hora salida</p>
    <input type="text" name="hs" placeholder="hora"><br><br>
    <input type="text" name="ms" placeholder="minuto"><br><br>
    <input type="text" name="ss" placeholder="segundo"><br><br>
    <input type="submit" name="btn" value="Calcular">
    </form><br><br>

    <?php

if(isset($_POST['btn'])){
    

    $hi = $_POST['hi'];
    $mi = $_POST['mi'];
    $si = $_POST['si'];
    $hs = $_POST['hs'];
    $ms = $_POST['ms'];
    $ss = $_POST['ss'];
    

    $tiempo_entrada = $hi * 3600 + $mi * 60 + $si;
    $tiempo_salida = $hs * 3600 + $ms * 60 + $ss;
    

    $diferencia = $tiempo_salida - $tiempo_entrada;
    

    $horas = floor($diferencia / 3600);
    $minutos = floor(($diferencia % 3600) / 60);
    $segundos = $diferencia % 60;
    

    echo "El tiempo transcurrido es: $horas horas, $minutos minutos y $segundos segundos";
}else{
    echo 'no hay datos para calcular';
}
    ?>
</body>
</html>