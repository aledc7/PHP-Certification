<!DOCTYPE html>
<html>
<head><title>20 - File Handing</title>
</head>
<body>

<?php

/*  Este capítulo comienza contando lo peligroso que puede ser manejar archivos erroneamente; perdida de registros y un largo etc.
Por tal motivo se reomienda mucha precaución.

la funcion readfile() permite leer archivos y las escribe en un buffer que puede ser usado por php dentro del script, para lo que se necesite.


*/


echo readfile("webdictionary.txt");


// por último termina diciendo que la función readfile() es ideal si solo necesitas abrir y leer un archivo.
?>

</body>
</html>