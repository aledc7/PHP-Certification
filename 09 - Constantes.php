
<!DOCTYPE html>
<html>
    <head>
        <title>09 - Constantes</title>
    </head>
<body>

<?php


// defino una constante e imprimo su valor
// la constante necesita 3 argumentos:
// 1: El nombre de la constate
// 2: El valor de la constante
// 3: Un booleano (opcional) true o false.  Si no se le pasa el tercer argumento será false y la constante SI será CASE SENSITIVE.

define("CONSTANTE_HOLA", "Welcome to W3Schools.com!");
echo "La constante 'CONSTANTE_HOLA' es: " . CONSTANTE_HOLA . "<br>";


// aca un ejemplo de constante en donde SI se le pasa el tercer argumento booleano, como TRUE.
// en este caso la constante NO será CASE SENSITIVE.
define("GrEeTiNg", "Welcome to W3Schools.com!", true);
echo "El valor de la constante 'GrEeTiNg' es: " . greeting . "<br>";



// las constantes siempre seran GLOBALES y pueden ser usadas en cualquier parte del código
// independientemente de donde se haya declarado la constante.

// declaro una constante GREETING fuera de la funcion myTest.
define("GREETING", "Texto de la constante Definida Afuera de la Funcion");

function myTest() {
    // imprimo la constante definida fuera de la funcion
    echo GREETING;
}
 
// invoco a la funcion, y esta imprimirá el valor de la constante.
myTest();



?> 





</body>
</html>