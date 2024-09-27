<?php
    $distancia = $_POST['distancia'];
    $velocidad = $_POST['velocidad'];
    if(isset($distancia) && isset($velocidad))
    {
        if(is_numeric($distancia) && is_numeric($velocidad))
        {
            $tiempo = $distancia / $velocidad;
            echo "el tiempo estimado es " . $tiempo . " horas";
        }
        else
        {
            echo "No es un número";
        }
    }
?>
<br>
<a href="ejercicio2.html">Atras</a>