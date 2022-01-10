<?php
$datosrecogidos=$_GET["texto1"];
$selector=$_GET["operador"]
echo readfile("prueba.txt");

echo"<br>";
echo"<br>";


echo filesize("prueba.txt");

echo"<br>";
echo"<br>";
//APERTURA Y LECTURA DEL FICHERO

//Abro fichero en un dirección de memoria
$fichero=fopen("prueba.txt","r") or die ("el miguel malito");

//Obtengo el tamaño
$pesofichero=filesize("prueba.txt");

//Represento por pantalla el contenido,le doy recurso $fichero y su $pesofichero
echo fread($fichero,$pesofichero);

//Una vez terminado cierro el recurso
fclose($fichero);

//Escribir(abro, leo y cierro)

$fichero=fopen("prueba.txt","w") or die ("el miguel malito");
$nuevotexto="tu padre el tuerto";
$nuevotexto2="tupac";
fwrite($fichero,$nuevotexto);

fclose($fichero);


echo"<br>";
echo"<br>";


switch ($operador) {
    case 'si':
        $fichero=fopen("prueba.txt","w") or die ("el miguel malito");
        $nuevotexto="tu padre el tuerto";
        fwrite($fichero,$nuevotexto);
fclose($fichero);
        break;
        case 'no':
         
            break;
        
    default:
        # code...
        break;
}



?>
