<!DOCTYPE html>
<html>
<head>
    <title> 05 - PHP Variables</title>
</head>
<body>

<?php

//declaro la variable x fuera de la funcion miFuncion
$x = 5; // global scope
 
function miFuncion() {
    $x = 10;
    
    // aca solo cuenta la variable $x de dentro de esta funcion, por lo que la variable x dentro de la funcion
    // tiene un SCOPE local/
    echo "<p>la variable x dentro de la funcion vale: $x</p>";

    
} 
miFuncion();

// aca como estoy fuera de la funcion, el valor de la variable $x será de 5
echo "<p>la variable x fuera de la funcion vale: $x</p>";





/* 
    aca un ejemplo de como se puede acceder desde dentro de una funcion a una variable que se encuentra fuera de esa funcion. 
    o sea, como acceder a una variable de scope global estando en un ambiente de scope local. para esto se usa la 
    etiqueta reservada $GLOBALS[nombre_variable] 
*/


$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest();
echo "el resultado de la variable GLOBAL y es:  $y ";
echo "<br>";

// la salida mostrará 15  demostrando que se modificaron las variables de afuera de la funcion desde adentro de esta.




/*
    USO DE STATIC:

    PHP va ejecutando el código linea por linea, luego de que una funcion se ejecute, todos las variables que contenga se destruyen.
    Sin embargo existen casos en que se necesita que ese valor quede persistido para ser usado luego...
    en estos casos se hace uso de la palabra reservada "static".   Al usar esta palabra antes de declarar una funcion,  esta funcion no se
    destruirá así se haya terminado de ejecutar dicha funcion.  Aqui un ejemplo:

*/


function myTest2() {
    static $x = 0;
    echo  "el resultado de x es: $x";
    $x++;
}

myTest2(); // esto imprime el 0
echo "<br>"; //para utilizar una etiqueta thml como lo es <br>  debo usar si o si un echo antes.
myTest2(); // esto imprime el 1
echo "<br>";
myTest2(); // esto imprime el 2 



/*
    como se observa, cada vez que se llama a la funcion, la variable x aun guarda el valor de la última vez que fue ejecutada.
    Esto es gracias a static. 
*/


?> <!-- FIN CODIGO PHP-->
</body>
</html>
