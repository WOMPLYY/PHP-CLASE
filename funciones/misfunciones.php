<?php
function factorial($n){
    $fact =1;
    if($n <= 1){
        echo 'El factorial de '.$n.' es '.$fact;
    }else{
        for ($i=2; $i <= $n; $i++) { 
            $fact = $fact * $i;
            echo "<br>El factorial de $i es ".$fact;
        }
    }
}

function esFrasePalindromo($frase){

    $palabra = strtolower(str_replace(' ','',$frase));
    // echo $palabra;

    if ($palabra === strrev($palabra)) {
        return true;
    }else{
        return false;
    }

}

function registrarTiempos($arreglos){
    for ($i=0; $i < 23; $i++) { 
        $arreglos[$i] = rand(50, 20);
    }
    return $arreglos;
}

function mostrarTiempos($arreglos, $cadena){
    echo '<br>'.$cadena;

    for ($i=0; $i < 23; $i++) { 
        echo $arreglos[$i]." ";
    }
}

function promedioTiempo($arreglo1,$arreglo2){
    for ($i=0; $i < 23; $i++) { 
        $promedioTiempo[$i]=($arreglo1[$i]+$arreglo2[$i]/2);
    }
    return $promedioTiempo;
}
?>