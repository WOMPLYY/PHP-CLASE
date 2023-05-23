<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Opciones: ";

    $opcion = rand(1, 10);

    switch ($opcion) {
        case 1:
            echo "Opción 1 seleccionada<br>";
            break;
        case 2:
            echo "Opción 2 seleccionada<br>";
            break;
        case 3:
            echo "Opción 3 seleccionada<br>";
            break;
        case 4:
            echo "Opción 4 seleccionada<br>";
            break;
        case 5:
            echo "Opción 5 seleccionada<br>";
            break;
        case 6:
            echo "Opción 6 seleccionada<br>";
            break;
        case 7:
            echo "Opción 7 seleccionada<br>";
            break;
        case 8:
            echo "Opción 8 seleccionada<br>";
            break;
        case 9:
            echo "Opción 9 seleccionada<br>";
            break;
        case 10:
            echo "Opción 10 seleccionada<br>";
            break;
        default:
            echo "Opción no válida<br>";
            break;
    }

    echo "<br>";
}
?>