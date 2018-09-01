<!DOCTYPE html>
<html>
<head>
    <title> 06 - Echo</title>
</head>
<body>

<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;


// con echo es posible usar todas las etiquetas HTML, incluso permite ponerle estilos a las variables
// como en este caso, que a la variable $txt1 le pone el estilo de un titulo H2.
echo "<h2>" . $txt1 . "</h2>";

//en php se concatena con el punto "."  
echo "Study PHP at " . $txt2 . "<br>";

//echo puede usarse incluso para realizar operaciónes lógicas.
echo $x + $y;
?>

</body>
</html>