<!DOCTYPE html>
<html>
<head>
    <title> 04 - PHP Syntax</title>
</head>
<body>

<h1>Este título lo escribió HTML</h1>

<?php
echo "Este párrafo lo escribió PHP <br> ";


// Comentario de una linea

# Comentario de una linea


/*
Esto es un
Bloque de comentarios
asi se puede comentar muchas lineas.
*/

// Incluso es posible comentar dentro de mismo código...
$x = 5 /* + 15 */ + 5;
echo "el valor de x es de:  $x debido a que el +15 está comentado. <br>";




// Las variables en PHP son sensitivity KEY, ovservese como la misma variable color, escrita de distintas formas mayusculas 
// y minusculas pueden tomar diferentes valores.

$color = "red";
$COLOR = "blue";
$coLOR = "green";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";






?> <!-- FIN CODIGO PHP-->


</body>
</html>