<?php

#array normales
$numero = 8;
$numero = 3;
$numero = 7;
$numero = 1;


$numero = array(8, 3, 7, 1);

$suspenso = array("Miguel","kerry");

$coches = array("Ferrari","seat","bmw","reanult","opel");



echo $suspenso[0];
echo $numero[3];
echo $coches[1];





$cuentacoches=count($coches);
echo "numero de coches".$cuentacoches."<br>";



$aleatorio=rand(0,$cuentacoches-1);

echo "coche aleatorio:".$coches[$aleatorio];


$parada=0;
while ($parada <= 5) {
    $aleatorio=rand(0,4);
echo $coches[$aleatorio]."<br>";
$parada++;
}



$cochesordenado=sort($coches);
echo $cochesordenado;


$parada=0;
while ($parada < $cuentacoches-1) {
   $cochesordenado=sort($coches);

echo $cochesordenado[$parada]."<br>";
$parada++;
}


#array asociativos

$alumno = array("nombre" => "Miguel",
"Apellido"=> "kerry",
"Edad"=>23, 
"ESTASAPROBADO"=>false);

echo $alumno["ESTASAPROBADO"];


?>