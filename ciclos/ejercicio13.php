<?php
    if ($_POST) {
        $numero = $_POST['numero'];

        
            $suma = 0;

            for ($i = $numero + 1; $i <= $numero + 100; $i++) {
                $suma += $i;
            }

            echo "<p>La suma de los siguientes 100 números después de $numero es: $suma</p>";
        
    }
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Suma de los siguientes 100 números</title>
</head>
<body>
    <h2>Suma de los siguientes 100 números</h2>
    <form method="POST" action="">
        <label for="numero">Ingrese un número entero:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Calcular suma</button>
    </form>

 
</body>
</html>