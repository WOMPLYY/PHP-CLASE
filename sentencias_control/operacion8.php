<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¿Cual es su signo zodiacal?</h1>
    <form action="" method="post">
    <input type="text" name="mes" placeholder="mes de nacimiento(numero)"><br><br>
    <input type="text" name="dia" placeholder="día de nacimiento"><br><br>
    <input type="submit" name="btn" value="Calcular">
    </form><br><br>

    <?php
if(isset($_POST['btn'])){
    
    $mes = $_POST['mes'];
    $dia = $_POST['dia'];

    if (($mes == 1 && $dia >= 20) || ($mes == 2 && $dia <= 18)) {
        echo "Su signo zodiacal es Acuario.\n";
      } elseif (($mes == 2 && $dia >= 19) || ($mes == 3 && $dia <= 20)) {
        echo "Su signo zodiacal es Piscis.\n";
      } elseif (($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 19)) {
        echo "Su signo zodiacal es Aries.\n";
      } elseif (($mes == 4 && $dia >= 20) || ($mes == 5 && $dia <= 20)) {
        echo "Su signo zodiacal es Tauro.\n";
      } elseif (($mes == 5 && $dia >= 21) || ($mes == 6 && $dia <= 20)) {
        echo "Su signo zodiacal es Géminis.\n";
      } elseif (($mes == 6 && $dia >= 21) || ($mes == 7 && $dia <= 22)) {
        echo "Su signo zodiacal es Cáncer.\n";
      } elseif (($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 22)) {
        echo "Su signo zodiacal es Leo.\n";
      } elseif (($mes == 8 && $dia >= 23) || ($mes == 9 && $dia <= 22)) {
        echo "Su signo zodiacal es Virgo.\n";
      } elseif (($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22)) {
        echo "Su signo zodiacal es Libra.\n";
      } elseif (($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21)) {
        echo "Su signo zodiacal es Escorpio.\n";
      } elseif (($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21)) {
        echo "Su signo zodiacal es Sagitario.\n";
      } elseif (($mes == 12 && $dia >= 22) || ($mes == 1 && $dia <= 19)) {
        echo "Su signo zodiacal es Capricornio.\n";
      } else {
        echo "Fecha de nacimiento inválida.\n";
      }

}else{
    echo 'No hay datos para calcular';
}
    ?>
</body>
</html>