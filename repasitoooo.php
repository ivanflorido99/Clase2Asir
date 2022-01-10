<?php

#CONSTANTES
    $pi=pi();

    echo "numero pi: " .$pi. "<br>";

    define("gravedad",9.8);

    echo "constantede la gravedad: " .gravedad;

    echo "<br>";




   $numeros= array(2,4,8,7,5,gravedad);
    print_r($numeros);
    echo "<br>";
   $cantidad_numeros=count($numeros);
   shuffle($numeros);
   echo "<br>";
   echo "<br>";

print_r($numeros);
echo "<br>";
   print_r($numeros);
   
   
   
   echo "<br>";


   for ($i=0; $i <$cantidad_numeros ; $i++) { 
       echo "valor de " .$i.": ".$numeros[$i]."<br>";

   }
   echo "<br>";

   foreach ($numeros as $numerito) {

   echo  $numerito."<br>";
   }



   echo "<br>";

   echo "<br>";
   
$provincia =array(


"Andalucia"=>"Sevilla",
"Madrid"=>"Madrid",
"Aragon"=>"Zaragoza",
"Pais vasco"=>"Bilbao"

);
   
print_r($provincia);
   






echo "<br/>";


foreach ($provincia as $provincita => $i) {
    echo "La Comunidad Autonoma " .$provincita. " es " .$i."<br>";
}



echo "<br/>";



//añadir valores al array

$numeros[]=3;

//modificar posicion con el numero 3
$numeros[0]=3;



echo "<br>";

foreach ($numeros as $numerito) {

echo  $numerito."<br>";
}

//eliminar valor del array

unset($numeros[6]);
echo "<br>";

foreach ($numeros as $numerito) {

echo  $numerito."<br>";
}

//array multidimensional

$asir= array(
       array("Nombre"=>"Nacho","Frase"=>"Gusano Morris"),
       array("Nombre"=>"Manule","Frase"=>"eres tela de graciosa capi"),
       array("Nombre"=>"Kerry","Frase"=>"au au au au"),
       array("Nombre"=>"Miguel","Frase"=>"chi chi")
);

print_r($asir);

echo "<br>";


foreach ($asir as $alumno) {
    echo "frase tipica de ".$alumno["Nombre"].": ".$alumno["Frase"]."<br>";
}



//funciones

$numero1=10;
$numero2=4;

function sumar($numero1, $numero2){

$res=$numero1+$numero2;
return $res;

}

$sumita=sumar($numero1,$numero2);
echo $sumita;

echo "<br>";

echo gravedad;
$redon=round(gravedad);
echo $redon;












   ?>