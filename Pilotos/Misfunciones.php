<?php

//$pilotos = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

function registrarTiempos($arreglo){
    for ($i=0; $i < 23; $i++) { 

        $arreglo[$i] =rand(50,80);//rand-genera numeros aleatorios en ese rango

    }

    return $arreglo;
} 


function mostrarTiempos($arreglo, $cadena){

    echo  '<br>'. $cadena;



    for ($i=0; $i <23 ; $i++) { 


       echo $arreglo[$i] . '  ';
    }

}

function Promediador($arregloDia1,$arregloDia2,$promedios){


    for ($i=0; $i < 23; $i++) { 

        $promedios[$i]= ($arregloDia1[$i] + $arregloDia2[$i])/2;
        
    }
    return $promedios;

}

function mostrarPromedios($promedios,$cadena){

    echo  '<br>'. $cadena;
    for ($i=0; $i <23 ; $i++) { 

        if($i == 22){
            echo $promedios[$i];
    
        }else{
            echo $promedios[$i] . '--';
    
        }
     }



}

function tiempoIdeal($arregloVueltaDia1,$arregloVueltaDia2,$vueltaIdeal){


    for ($i=0; $i < 23; $i++) { 

        if($arregloVueltaDia1[$i] < $arregloVueltaDia2[$i]){
           $vueltaIdeal[$i] = $arregloVueltaDia1[$i];                  
           
        }else{
            $vueltaIdeal[$i] = $arregloVueltaDia2[$i];
            
        }
  
    }
    return $vueltaIdeal;

}
function mostrarVueltaIdeal($vueltaIdeal,$cadena){

    echo  '<br>'. $cadena;
    for ($i=0; $i <23 ; $i++) { 

        if($i == 22){
            echo round($vueltaIdeal[$i], 3);
    
        }else{
            echo round($vueltaIdeal[$i], 2) . '--';
    
        }
     }
     return $vueltaIdeal;



     


}

function MejorVueltaIdeal($cadena,$vueltaIdeal){

    for ($i=0; $i < 23; $i++) { 

        if($vueltaIdeal[$i] == min($vueltaIdeal)){
            echo "<br/>".$cadena . min($vueltaIdeal). " esta en la posicion: " . $i;


        }

        
    }

  
}

function Ganador($cadena,$vueltaIdeal){

    for ($i=0; $i < 23; $i++) { 

        if($vueltaIdeal[$i] == min($vueltaIdeal)){
            echo "<br/>".$cadena . $i. " con un tiempo de " . min($vueltaIdeal) . "segundos";


        }

        
    }

  
}


/*

function Ganador($promedios1,$promedios2,$arregloVuelta1Dia1,$arregloVuelta1Dia2,$arregloVuelta2Dia1,$arregloVuelta2Dia2,$vueltaIdeal){
for ($i=0; $i < 23; $i++) { 
    if ($promedios1[$i] <  $promedios2[$i]) {

        if($vueltaIdeal[$i] = $arregloVuelta2Dia1[$i]){

            $vueltaIdeal [$i] = $arregloVuelta1Dia1[$i];
            
        }else{

            $vueltaIdeal[$i] = $arregloVuelta2Dia1[$i];
        }
       }else{
        if ($promedios1[$i] <  $promedios2[$i]) {

            if($vueltaIdeal[$i] = $arregloVuelta2Dia2[$i]){
    
                $vueltaIdeal [$i] = $arregloVuelta1Dia2[$i];

                
            }else{
    
                $vueltaIdeal[$i] = $arregloVuelta2Dia2[$i];

            }
       }
}
  

}

return $vueltaIdeal;




}


function mostrarGanador($vueltaIdeal,$cadena){

    for ($i=0; $i < 20; $i++) { 
        echo  '<br>'. $cadena. $vueltaIdeal[$i];
    }
    
 

}
*/



// function mejorPromedio($promedios1,$promedios2,$Mejor_promedio,$Mejor_promedio1,$Mejor_promedio_Definitivo){

    


//         $Mejor_promedio = min($promedios1); 
//         $Mejor_promedio1  = min($promedios2); 

//         if($Mejor_promedio < $Mejor_promedio1){

//             $Mejor_promedio_Definitivo = $Mejor_promedio;





//         }else{
//             $Mejor_promedio_Definitivo = $Mejor_promedio1;

//         }

        
//     return $Mejor_promedio_Definitivo;


// }


// function mostrarMejorPromedio($Mejor_promedio_Definitivo,$cadena){

//     echo  '<br>'. $cadena . $Mejor_promedio_Definitivo;


  


// }




?>