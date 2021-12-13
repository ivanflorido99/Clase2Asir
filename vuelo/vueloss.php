<?php
//if
include 'funcionvuelo.php';

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