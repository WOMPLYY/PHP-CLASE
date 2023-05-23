<?php

include 'MisFunciones.php';





$primerDia1vuelta = array();
$primerDia1vuelta= registrarTiempos($primerDia1vuelta);

$primerDia1vuelta2 = array();
$primerDia1vuelta2= registrarTiempos($primerDia1vuelta2);


$primerDia2vuelta = array();
$primerDia2vuelta= registrarTiempos($primerDia2vuelta);


$primerDia2vuelta2 = array();
$primerDia2vuelta2= registrarTiempos($primerDia2vuelta2);

$promedios2 = array();
$promedios2= Promediador($primerDia2vuelta,$primerDia2vuelta2,$promedios2);

$promedios1 = array();
$promedios1= Promediador($primerDia1vuelta,$primerDia1vuelta2,$promedios1);

$vueltaIdeal = array();
$vueltaIdeal= tiempoIdeal($promedios1,$promedios2,$vueltaIdeal);





mostrarTiempos($primerDia1vuelta,"Tiempos obtenidos durante la primera vuelta ");

mostrarTiempos($primerDia1vuelta2,"Tiempos obtenidos durante la segunda vuelta ");

mostrarTiempos($primerDia2vuelta,"Tiempos obtenidos durante la primera vuelta Dia 2:  ");

mostrarTiempos($primerDia2vuelta2,"Tiempos obtenidos durante la segunda vuelta Dia 2 :   ");

mostrarPromedios($promedios1,"<br/> Promedios dia 1: ");
mostrarPromedios($promedios2,"<br/> Promedios dia 2: ");

mostrarVueltaIdeal($vueltaIdeal,"<br/>  Vueltas ideales de los corredores: ");
MejorVueltaIdeal("El Mejor tiempo ",$vueltaIdeal);

Ganador("El ganador de la Pole Position es el piloto numero " ,$vueltaIdeal);


?>