<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio fechas
  
    
    </title>
</head>
<body>
    <h2>Ejercicio de tratamiento de fechas</h2>
 <p>Vamos a aprender a tratar fechas en php y funcionalidades</p>  
 <br>
 
 <?php
echo "Vamos a trabajar con fechas"."<br>";
echo "Hoy es :".date("l")."<br>";
echo "Dime la fecha actual:".date("Y/N/j")."<br>";
echo "Dime la fecha actual:".date("j/N/Y")."<br>";

$hora = date("H");
echo "Ejercicio IF"."<br>";
if ($hora<15) {
    echo "Lo siento estoy en clase"."<br>";

}else {
    echo "Estoy en mi casa brooo"."<br>";
}

echo "Ejercicio IF-ELSE"."<br>";

$segundos = date("s");

if ($segundos<"10") {
    echo "Primero 10 segundos"."<br>";
    echo "segundos:".$segundos;

}elseif ($segundos>"50") {
    echo "ultimos 10 segundos"."<br>";
    echo "segundos:".$segundos;
}else {
    echo "segundos intermedios"."<br>";
    echo "segundos:".$segundos;
}




 ?>



</body>
</html>