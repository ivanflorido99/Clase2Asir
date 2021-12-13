<?php
include 'funcioncalculadora.php';

$num1=$_POST["num1"];
$num2=$_POST["num2"];
$operador=$_POST["operador"];





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