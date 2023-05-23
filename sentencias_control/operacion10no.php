<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¿Cual es el cosiente?</h1>
    <form action="" method="post">
    <input type="text" name="dia" placeholder="dia de nacimiento"><br><br>
    <input type="text" name="mes" placeholder="mes de nacimiento"><br><br>
    <input type="text" name="año" placeholder="año de nacimiento"><br><br>
    <input type="text" name="sexo" placeholder="sexo (1-Femenino, 2-Masculino"><br><br>
    <input type="submit" name="btn" value="Calcular">
    </form><br><br>

    <?php

if(isset($_POST['btn'])){
    
    $total = 0;
    $total_femenino = 0; 
    $total_masculino = 0; 

    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $año = $_POST['año'];
    $sexo = $_POST['sexo'];
    
    while (true) {


        if ($dia == 0) {
            break; 
        }
        

        $total++;
        

        if ($sexo == 1) {
            $total_femenino++;
        } elseif ($sexo == 2) {
            $total_masculino++;
        }
    }
    

    echo "Total de mujeres: " . $total_femenino . "\n";
    echo "Total de hombres: " . $total_masculino . "\n";
    echo "Total general: " . $total . "\n";
}else{
    echo 'no hay datos para calcular';
}
    ?>
</body>
</html>