
<?php
    if ($_POST) {
        $numero = $_POST['numero'];

            $numero1 = 1;
            $numero2 = 1;

            echo "$numero1, $numero2";

            while ($numero1 + $numero2 <= $numero) {
                $siguienteNumero = $numero1 + $numero2;
                echo ", $siguienteNumero";
                $numero1 = $numero2;
                $numero2 = $siguienteNumero;
            }
        
    }
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Serie de Fibonacci</title>
</head>
<body>
    <h1>Serie de Fibonacci</h1>
    <form method="POST" action="">
        <label for="numero">Ingrese un número :</label>
        <input type="number" name="numero" id="numero" min="1" required>
        <button type="submit">Generar serie</button>
    </form>

 
</body>
</html>