<!DOCTYPE html>
<html>
<head><title>27 - include y Require</title>
</head>
<body>


<div class="menu">
<?php include 'menu.php';?>

</div>

<h1>Hola!!!</h1>
<p>Como verás, la cabecera es importada mediante un Include!</p>

<?php
//require 'noFileExists.php';


// aquí llamo a dos variables; $car y $color que se encuentran en el archivo vars.php
include 'vars.php';
echo "Yo tengo un $car $color.";


// include vs require:
// la unica diferencia es que require, en caso de que el archivo no se encuenetre, no permitirá continuar con la ejecución del script.

// por ejemplo, si se descomenta el require que está debajo de la etiqueta de apertura de PHP, el script no ejecutará el hecho, ya que no encuentra
// el archivo noFileExists.php por tal motivo se detiene.



?>

</body>
</html>