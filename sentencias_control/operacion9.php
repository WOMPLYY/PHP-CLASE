<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dia de descuentos</h1>
    <form action="" method="post">
    <input type="number" name="num1" placeholder="Valor del producto" ><br><br>
    <input type="submit" name="btn" value="Calcular">
    </form><br><br>

    <?php

if(isset($_POST['btn'])){
    
    $vProducto = $_POST['num1'];

    if ($vProducto < 100000) {
        $descuento = $vProducto * 0.05;
    } elseif ($vProducto < 200000) {
        $descuento = $vProducto * 0.1;
    } else {
        $descuento = $vProducto * 0.15;
    }
    
    $precio_final = $vProducto - $descuento;

    echo "El descuento total es de: $" . $descuento . " pesos.<br>";
    echo "El precio final con descuento es: $" . $precio_final." pesos.";

}else{
    echo 'No hay datos para calcular';
}
    ?>
</body>
</html>