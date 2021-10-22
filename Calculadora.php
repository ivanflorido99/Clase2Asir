<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<H1>Calculadora</H1>

<form  method="post">
    <fieldset>
    <input type="text" value="0">> </label><br>
    <input type="text" value="0">> </label><br>
<h2>operaciones </h2>


        <label for="Suma"> <input type="button" name= "operador" value="+"> </label><br>
        <label for="Resta"><input type="button" name= "operador" value="-"> </label><br>
        <label for="Multiplicacion"><input type="button" name= "operador" value="X"> </label><br>
        <label for="Division"><input type="button" name= "operador" value="/"> </label><br>
        <label for="Nombre"><input type="button" name= "operador" value="%"> </label><br>
        <label for="Raiz"><input type="button" name= "operador" value="Raiz"> </label><br>
        <label for="Elevado a 2"><input type="button" name= "operador" value="^2"> </label><br>
        <label for="Elevado a 3"><input type="button" name= "operador" value="^3"> </label><br>
        <label for="elevado a cualquier"><input type="button" name= "operador" value="^x"> </label><br>
        <label for="fibo"><input type="button" name= "fibonacci" value="operador"> </label><br>



</fieldset>

<input type="submit"> <br>

<input type="reset"> <br>



</form>

<?php

$num1=$_POST["num1"];
$num2==$_POST["num2"];
$selector=$_POST["operando"];

$suma=$_GET["suma"];
$resta=$_GET["resta"];
$multiplicacion=$_GET["multiplicacion"];
$division=$_GET["division"];
$resto=$_GET["resto"];
$raiz=$_GET["raiz"];
$elevado2=$_GET["elevado2"];
$elevado3=$_GET["elevado3"];
$elevadox=$_GET["elevadox"];





$num1=2;
$num2=3;

function Suma($num1,$num2){
    
    $res=$num1+$num2;
    echo "$res"."<br>";

}


function Resta($num1,$num2){

    $res=$num1-$num2;
    echo "$res"."<br>";
    
}


function Multiplicacion($num1,$num2){

    $res=$num1*$num2;
    echo "$res"."<br>";
    
}

function Division($num1,$num2){

    $res=$num1/$num2;
    echo "$res"."<br>";
}



function Resto($num1,$num2){
   
    $res=$num1%$num2;
    echo "$res"."<br>";
}


        
    


}

switch ($operador) {
    case '+':
       suma($num1,$num2);
        break;
    case '-':
        resta($num1,$num2);
    break;
 
    case 'X':
        Multiplicacion($num1,$num2);
     break;
    case '/':
        Division($num1,$num2);
 break;
    case '%':
        Resto($num1,$num2);
    break;

    
    default:
        
        break;
}







Suma($num1,$num2);
Resta($num1,$num2);
Multiplicacion($num1,$num2);
Division($num1,$num2);
Resto($num1,$num2);



?>


</body>
</html>