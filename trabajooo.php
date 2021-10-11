<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td{
            border: 2px solid black;
            border-collapse:collapse;
            background-color: blue;
        }
    </style>
</head>
<body>
    <?php
    $dia = date("l");
    $hora = date("G");
    switch ($dia) {
    case 'Monday':
     if ($hora == 8) {
                echo " Aplicaciones Web";
            }
     elseif ($hora == 9){
                echo " Aplicaciones Web";
            }
    elseif ($hora == 10){
                echo "Aplicaciones Web";
            }
     elseif ($hora == 11){
                echo "Recreo";
            }
      elseif ($hora == 12){
                echo "Servicios en Red";
            }
      elseif ($hora == 13){
                echo "Servicios en Red";
            }
     elseif ($hora == 14){
                echo "Servicios en Red";
            }
            else{
                echo "Hora de salir";
            }

            echo "El horario de hoy lunes es: "."<br>";
            
            <table>
                    <tr>
                    <td>Lunes</td>
                    </tr>
                    <tr>
                    <td>Aplicaciones Web</td>
                    </tr>
                    <tr>
                    <td>Aplicaciones Web</td>
                    </tr>
                    <tr>
                    <td>Aplicaciones Web</td>
                    </tr>
                    <tr>
                    <td>Recreo</td>
                    </tr>
                    <tr>
                    <td>Servicios en red</td> 
                    </tr>
                    <tr>
                    <td>Servicios en red</td>
                    </tr>
                    <tr>
                    <td>Servicios en red</td>
                    </tr>
                </tr>
            </table>";
            break;
            case 'Tuesday':
                if ($hora == 8) {
                    echo "Administracion de Sistemas Operativos";
                }
                elseif ($hora == 9){
                    echo "Administracion de Sistemas Operativos";
                }
                elseif ($hora == 10){
                    echo "Administracion de Sistemas Operativos";
                }
                elseif ($hora == 11){
                    echo " Recreo";
                }
                elseif ($hora == 12){
                    echo "Seguridad";
                }
                elseif ($hora == 13){
                    echo "Empresa";
                }
                elseif ($hora == 14){
                    echo " Empresa";
                }
                else{
                    echo "Horita de salir";
                    
                }
            
                echo "<br>"." Nuevo Horario: "."<br>";
                echo "
                <table>
                        <tr>
                        <td>Martes</td>
                        </tr>
                        <tr>
                        <td>ASO</td>
                        </tr>
                        <tr>
                        <td>ASO</td>
                        </tr>
                        <tr>
                        <td>ASO</td>
                        </tr>
                        <tr>
                        <td>Recreo</td>
                        </tr>
                        <tr>
                        <td>Seguridad</td>
                        </tr>
                        <tr>
                        <td>Empresa</td>
                        </tr>
                        <tr>
                        <td>Empresa</td>
                        </tr>
                    
                </table> ";
                break;  
                case 'Wednesday':
                    
                if ($hora == 8) {
                    echo "Administracion de Sistemas Operativos";
                }
                elseif ($hora == 9){
                    echo "Administracion de Sistemas Operativos";
                }
                elseif ($hora == 10){
                    echo "Administracion de Sistemas Operativos";
                }
                elseif ($hora == 11){
                    echo "Recreo";
                }
                elseif ($hora == 12){
                    echo "Servicios en Red";
                }
                elseif ($hora == 13){
                    echo "Servicios en Red";
                }
                elseif ($hora == 14){
                    echo "Servicios en Red";
                }
                else{
                    echo "vamo nos a la fería Cariño mio"."<br>";
                  
                }
                 
                    echo "<br>" . "El horario de hoy: "."<br>";
                    echo "
                    <table>
                            <tr>
                            <td>Miercoles</td>
                            </tr>
                            <tr>
                            <td>ASO</td>
                            </tr>
                            <tr>
                            <td>ASO</td>
                            </tr>
                            <tr>
                            <td>ASO</td>
                            </tr>
                            <tr>
                            <td>Recreo</td>
                            </tr>
                            <tr>
                            <td>Servicios en red</td>
                            </tr>
                            <tr>
                            <td>Servicios en red</td>
                            </tr>
                            <tr>
                            <td>Servicios en red</td>
                        </tr>
                    </table> ";
                    break;
                    case 'Thursday':
                        if ($hora == 8) {
                            echo "Base de Datos";
                        }
                        elseif ($hora == 9){
                            echo "Base de Datos";
                        }
                        elseif ($hora == 10){
                            echo "Base de Datos";
                        }
                        elseif ($hora == 11){
                            echo "Recreo";
                        }
                        elseif ($hora == 12){
                            echo "Seguridad";
                        }
                        elseif ($hora == 13){
                            echo "Ingles";
                        }
                        elseif ($hora == 14){
                            echo "Ingles";
                        }
                        else{
                            echo "ol ole ole ya queda menos";
                            
                        }
            
                        echo "<br>" ."hoy: "."<br>";
                        echo "
                        <table>
                                <tr>
                                <td>Jueves</td>
                                </tr>
                                <tr>
                                <td>BD</td>
                                </tr>
                                <tr>
                                <td>BD</td>
                                </tr>
                                <tr>
                                <td>BD</td>
                                </tr>
                                <tr>
                                <td>Recreo</td>
                                </tr>
                                <tr>
                                <td>Seguridad</td>
                                </tr>
                                <tr>
                                <td>Seguridad</td>
                                </tr>
                                <tr>
                                <td>Seguridad</td>
                                </tr>
                            </tr>
                        </table> ";
                        break;
                        case 'Friday':
                            if ($hora == 8) {
                                echo "Ingles";
                            }
                            elseif ($hora == 9){
                                echo "Seguridad";
                            }
                            elseif ($hora == 10){
                                echo "Seguridad";
                            }
                            elseif ($hora == 11){
                                echo "Recreo";
                            }
                            elseif ($hora == 12){
                                echo "Implantacion de Aplicaciones Web";
                            }
                            elseif ($hora == 13){
                                echo "Empresa";
                            }
                            elseif ($hora == 14){
                                echo "Empresa";
                            }
                            else{
                                echo "Viernes por fin ueuueuueu"."<br>";
                                
                            }
                            
                        
                            echo "<br>"."<strong>El horario de hoy es el siguiente: </strong>"."<br>";
                            echo "
                            <table>
                                    <tr>
                                    <td>Viernes</td>
                                    </tr>
                                    <tr>
                                    <td>Ingles</td>
                                    </tr>
                                    <tr>
                                    <td>Seguridad</td>
                                    </tr>
                                    <tr>
                                    <td>Seguridad</td>
                                    </tr>
                                    <tr>
                                    <td>Recreo</td>
                                    </tr>
                                    <tr>
                                    <td>Aplicaciones Web</td>
                                    </tr>
                                    <tr>
                                    <td>Empresa</td>
                                    </tr>
                                    <tr>
                                    <td>Empresa</td>
                                </tr>
                            </table> ";
                            break;
                            default:
                            echo "Findeeeeeeeee";
                            break;  
    }
    ?>
    <a href="http://localhost">Volver a la página principal</a>
</body>
</html>