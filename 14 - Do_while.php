<!DOCTYPE html>
<html>
<head>
<title>14 - Do_While</title>
</head>
<body>

<?php 

// similar a la estructura While, la unica diferencia es que con do...while el código se ejecutará al menos una vez.


// en este ejemplo la condición no se cumple, sin embargo el código se ejecutará al menos una vez,
// luego compara la condición y no ejecuta mas, ya que esta devuelve false.
$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);


echo "<br>";

// acá otro ejemplo de do..while


$xx = 1; 

do {
    echo "El numero de xx es: $xx <br>";
    $xx++;
} while ($xx < 5);






?>

</body>
</html>