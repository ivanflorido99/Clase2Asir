<?php


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


?>