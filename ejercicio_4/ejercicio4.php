<?php
    $diaSemana = $_POST['diaSemana'];

    switch ($diaSemana) 
    {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miércoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo"; 
            break;
        default:
            echo "Opción incorrecta";
            break; 
    }
?>
<br>
<a href="ejercicio4.html">Atras</a>