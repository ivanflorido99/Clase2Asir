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


<?php
//bucle anidados independientes
print "<br><b>Bucle Independiente</b>"."<br>";
for ($inicio=0; $inicio < 5 ; $inicio++) { 
  print "resultado inicio(bucel exterior): ".$inicio."<br>";

  for ($inicio2=0; $inicio2 < 5 ; $inicio2++) { 
    print "resultado inicio2(bucle interior): ".$inicio2."<br>";
    
  }
}

//bucles de forma dependiente

print "<br><b>Bucle Dependiente</b>"."<br>";
for ($varexterior=0; $varexterior < 5 ; $varexterior++) { 
    print "<b>Muestra Variable exterior:</b>".$varexterior."<br>";

    for ($varinterior=0; $varinterior <  $varexterior ; $varinterior++) { 
        print "Muestra Variable interior: ".$varinterior."<br>";
    }

}


#ARRAYS
print "<br><b>ARRAY 'ESTANDAR'</b>"."<br>";

#Forma 1

$numerosP = array(2,4,6,8,10);
print_r ($numerosP);
echo "<br>";
print "Muestrame posicion 3: ".$numerosP[3]."<br>";

$cuentaNumerosP=count($numerosP);
print "Valor de  cuenta de Array: : ".$cuentaNumerosP."<br>";

echo "<br>";
for ($i=0; $i < $cuentaNumerosP; $i++) { 
    print "Muestrame posicion 3: " .$i." : ".$numerosP[$i]."<br>";
}
echo "<br>";

#Forma2:

$numerosI = [1,3,5,7,9];
print_r($numerosI);
echo "<br>";


#ARRAY ASOCIATIVOS

print "<br><b>ARRAY ASOCIATIVOS</b>"."<br>";


$potencias2=[1 => 2 , 2 => 4 , 3 => 8];
$capitales= array("Andalucia"=>"Sevilla",
"Madrid"=>"Madrid",
"Aragon"=>"Zaragoza",
"Baleares"=>"Palma de mallorca" ) ;
print_r ($potencias2);
echo "<br>";

print_r ($capitales);
echo "<br>";


//Añadir elemento a un array


$capitales["Cataluña"]="Barcelona";

print_r ($capitales);
echo "<br>";




$capitales["Andalucia"]="Almeria";

print_r ($capitales);
echo "<br>";


$cuentaletras=strlen($capitales["Andalucia"]);
echo $cuentaletras;


$notasAsignaturamigue=["LMI"=>0,
"fol"=>10,
"Par"=>9,
"Iso"=>0,
"fh"=>2,
"BD"=>4];

print_r ($notasAsignaturamigue);


//Union de arrays

echo "<br>";
print "<br>Union ARRAY</b>"."<br>";

$coches1=array("Seat","Renault","Dacia");
$coches2=["Bmw","Audi"];

print_r($coches1);
echo "<br>";
print_r($coches2);


$union1con2=$coches1+$coches2;
print_r($union1con2);
echo "<br>";

$union2con1=$coches2+$coches1;
print_r($union2con1);
echo "<br>";

//Borrar elemento
print "<br><b>Borrar Elemento</b>"."<br>";

$coches3=array("Seat","Renault","Dacia","Audi");
print_r($coches3);
echo "<br>";

unset($coches3[1]);
print_r($coches3);
echo "<br>";



//Copiar matrices
print "<br><b>Copiar Archivoo</b>"."<br>";


$Copiacapiatales=$capitales;
print_r($Copiacapiatales);
echo"<br>";












?>
