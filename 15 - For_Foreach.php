<!DOCTYPE html>
<html>
<head>
<title>15 - For</title>
</head>
<body>

<?php  

// Ejemplo simple de un for en php. la linea s eejecutará hasta que cierta condición se cumpla.


for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
  




// Aquí un ejemplo de foreach

// foreach se usa para recorrer arrays unicamente, y aplicar algun código a cada elemento del array.

$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
  echo "$value <br>";
}




?>

</body>
</html>