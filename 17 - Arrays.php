
<!DOCTYPE html>
<html>
<head>
<title>17 - Arrays</title>
</head>
<body>




<?php


// ejemplo de un array simple con 3 elementos
// luego haciendo uso del indice, muestro los 3 elementos
// el numero de indice que pase me dará el orden.
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[1] . ", " . $cars[2] . " and " . $cars[0] . ".";

echo "<br>";
echo "<br>";



// la funcion de php "count" devuelve el número de elementos que tenga un array

$cars = array("Volvo", "BMW", "Toyota");
echo "la cantidad de ele entos del array es: " . count($cars) . "<br>" ;






// Como recorrer un Array

// declaro el array y le asigno 3 elementos
$autos = array("Volvo", "BMW", "Toyota");

// uso la funcion count para saber cuantos elementos tiene el array
$cant_autos = count($autos);


// con un for recorro todo el array,  le paso como indice del array la variable $x del for
// esta variable empezará en cero e irá incrementandose de a uno por cada iteración.
// esto se ejecutará mientras la variable $x sea menor que la variable $cant_autos, o sea el numero de elementos del array
// luego con un echo voy mostrando cada indice del array, para mostrar cada valor del mismo.
// cuando la variable $cant_autos sea igual que x, ya no se ejecutará mas el for.
for($x = 0; $x < $cant_autos; $x++) {
    echo $cars[$x];
    echo "<br>";
    echo "<br>";

}


// Arrays asociativos:

// a diferencia de los arrays indexados, los arrays asociativos su indice son palabras que seran definidas por nosotros mismos.
// de esta manera para acceder a algun elemento del array hay que indicarle su índice especifico que será una palabra. Ejemplo:

// declaro un array y le paso los indices, en este caso Pedro, Juan y Rodolfo
$anios = array("Pedro"=>"35", "Juan"=>"37", "Rodolfo"=>"43");

echo "Pedro tiene " . $anios['Pedro'] . " años de edad";



echo "<br>";
echo "<br>";


// Como recorrer un array Asociativo


// A diferencia de los arrays indexados que como ya vimos se usa una estructura "for" ..  en los arrays Asociativos se debe usar "Foreach".


// a continuación declaro el array, ovservese que se declara el indice, seguido de =>  y luego su valor
// luego a la hora de ser recorrido, se define una variable para los indices, y otra variable para el valor de cada indice.

$edad = array("Alejandro"=>"35", "Cesar"=>"37", "De Castro"=>"33");

$array2 = array("Ale",22,33);


//como vemos, dentro del foreach se le pasa primero la variable del array $edad, y luego dice as y dos variables mas.
// estas dos variables, la primera representará los indices, y la segundda variable representa el valor de cada indice.
// el nombre que se le dé es indistinto, siendo util solamente para ubicarse de que forma se dibujarán los valores.

foreach($edad as $nombre => $anios) {
    echo "indice = " . $nombre . ", valor = " . $anios;
    echo "<br>";
}



?>
</body>
</html>