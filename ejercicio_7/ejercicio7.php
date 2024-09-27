<?php
    $num = $_POST['num'];
    echo "<h1> Tabla del $num</h1>";
    echo "<ul>";
    for($i = 1 ; $i<=10; $i++)
    {
        $res = $num * $i;
        echo "<li> $num x $i = $res</li>";
    }
    echo "</ul>";
?>