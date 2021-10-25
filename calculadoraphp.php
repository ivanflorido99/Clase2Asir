<?php

$num1=$_POST["num1"];
$num2=$_POST["num2"];
$operador=$_POST["operador"];



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

function exponente($num1,$num2){
    $res=pow($num1,$num2);
    echo "$res"."<br>";

}



function Fibonacci($num1){
    $n=0;
    $n1=1;
    $n2=0;
    
        while ($num1>0) {
            echo $n2 ." ";
            $n2=$n1+$n;
            $n1=$n;
            $n=$n2;
            $num1--;
        
        }
    }






switch ($operador) {
    case 'suma':
       suma($num1,$num2);
        break;
    case 'resta':
        resta($num1,$num2);
    break;
 
    case 'multiplicacion':
        Multiplicacion($num1,$num2);
     break;
    case 'division':
        Division($num1,$num2);
    break;
    case 'resto':
        Resto($num1,$num2);
    break;

    case 'raiz':
        raiz($num1,$num2);
    break;

    case 'cuadrado':
        cuadrado($num1,$num2);
    break;

    case 'cubo':
        cubo($num1,$num2);
    break;

    case 'exponente':
        exponente($num1,$num2);
    break;

    
    case 'fibonacci':
        fibonacci($num1);
    break;


    default:
        echo "error";
        break;
}


?>