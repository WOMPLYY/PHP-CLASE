<?php

require_once("Aprendiz.php");

$aprendiz1 = new Aprendiz();                                    //delcarando objeto
//var_dump($aprendiz1);

// echo "<br><br>";
// enviar un mensaje al metodo adicionarDatosAprendiz()

$aprendiz1->adicionarDatosAprendiz("Andres Camilo","masculino","2003-10-10","9717");

// echo "Datos del objeto aprendiz despues de solicitar el metodo adicionarDatosAprendiz";
//var_dump($aprendiz1);                                        //ver la estructura del objeto
$nombre = $_POST['nombre'];
$aprendiz1->setNombreAprendiz($nombre);

echo "<br>Mi nuevo nombre es ".$aprendiz1->getNombreAprendiz();




?>
