<?php
    $num = $_POST['num'];
    $suma = 0;
    for($i = 1 ; $i<=$num; $i++)
    {
        $suma += $i;
    }
    echo "La suma de todos los números es : ". $suma;
?>
<br>
<a href="ejercicio6.html">Atras</a>