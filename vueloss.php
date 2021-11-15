<?php
//if


//Vuelo 1
    $codigo=$_POST["codigo"];
    $ciudadorigen=$_POST["ciudadorigen"];
    $ciudaddestino=$_POST["ciudaddestino"];
    $precio=$_POST["precio"];
    $fechasalida=$_POST["fechasalida"];




    //Vuelo 2
    $codigo1=$_POST["codigo1"];
    $ciudadorigen1=$_POST["ciudadorigen1"];
    $ciudaddestino1=$_POST["ciudaddestino1"];
    $precio1=$_POST["precio1"];
    $fechasalida1=$_POST["fechasalida1"];





// Herramientas

 
    $operador=$_POST["operador"];


    $vuelo1=["Verde","Azul","Amarillo","Rojo","Blanco"];
    $vuelo2=["Verde","Azul","Amarillo","Rojo","rosa"];


//une 

    function unevuelos($vuelo1,$vuelo2){
        $union=array_merge($vuelo2,$vuelo1);
        print_r($union);
        }
   


        //diferencia
    function diferenciadevuelo($vuelo1,$vuelo2){
    $diferenciavuelos=array_diff($vuelo1,$vuelo2);
    print_r($diferenciavuelos);

    }


//ordenar

    function ordenarvuelo ($vuelo1){
        sort ($vuelo1);
        print_r($vuelo1);
    }


//información comun

    function informacioncomun($vuelo1,$vuelo2){
    $informacioncomun=array_intersect($vuelo1,$vuelo2);
    print_r($informacioncomun);
}

switch ($operador) {
    case 'Une vuelos':
        unevuelos($vuelo1,$vuelo2);
    break;

    case 'Diferencia entre vuelos':
        diferenciadevuelo($vuelo1,$vuelo2);
     break;
  
    case 'Ordena vuelos':
        ordenarvuelo($vuelo1);
         break;
  
    case 'Información común':
        informacioncomun($vuelo1,$vuelo2);
    break;


    default:
        echo "error";
        break;
}



















?>