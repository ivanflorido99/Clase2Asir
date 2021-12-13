<?php
include 'funcioncadena.php';
    $text1=$_POST["texto1"];
    $text2=$_POST["texto2"];
    $text3=$_POST["texto3"];
    $selector=$_POST["operador"];
    
   

    switch ($selector) {
    
        case 'cuenta':
        cuentaletras($text1);
        break;

        case 'cuentap':
        cuentapalabras($text1);
        break;

        case 'busqueda':
        busqueda($text1,$text2);
        break;

        case 'invertir':
        invertir($text1);
        break;

        case 'reemplazar':
        reemplazar($text1,$text2,$text3);
        break;

        default:
        echo "te equivocaste error";
        break;
}
    ?>