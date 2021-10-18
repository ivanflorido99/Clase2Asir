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

<form>
    <fieldset>
    <input type="text" value="0">> </label><br>
    <input type="text" value="0">> </label><br>
<h2>operaciones </h2>


        <label for="Nombre"> <input type="button" name= "" value="+"> </label><br>
        <label for="Nombre"><input type="button" name= "" value="-"> </label><br>
        <label for="Nombre"><input type="button" name= "" value="X"> </label><br>
        <label for="Nombre"><input type="button" name= "" value="/"> </label><br>
        <label for="Nombre"><input type="button" name= "" value="%"> </label><br>
        <label for="Nombre"><input type="button" name= "" value="Raiz"> </label><br>
        <label for="Nombre"><input type="button" name= "" value="^2"> </label><br>
        <label for="Nombre"><input type="button" name= "" value="^3"> </label><br>
        <label for="Nombre"><input type="button" name= "" value="^x"> </label><br>



</fieldset>

<input type="submit"> <br>





</form>

<?php

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


function Raiz($num1){
    $res=sqrt($num1);
    echo "$res"."<br>";
}


function Cuadrado($num1){
    $res=($num1*$num1);
    echo "$res"."<br>";
}

function Cubo($num1){
    $res=($num1*$num1*$num1);
    echo "$res"."<br>";
}

function Cualquierexponente($num1,$num2){
    $res=pow($num1,$num2);
    echo "$res"."<br>";
}

function Fibonacci($num1){
$n=0;
$n1=1;
$n2=0;

    while ($num1>0) {
        $n2=$n1+$n;
        $n1=$n;
        $n=$n2;
        $num1--;
        echo "$n2 ";
    
        
    } 


}



Suma($num1,$num2);
Resta($num1,$num2);
Multiplicacion($num1,$num2);
Division($num1,$num2);
Resto($num1,$num2);
Raiz($num1);
Cuadrado($num1);    
Cubo($num1);
Cualquierexponente($num1,$num2);
Fibonacci(8);



?>


</body>
</html>