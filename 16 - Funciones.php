
<!DOCTYPE html>
<html>
<head>
<title>16 - Funciones</title>
</head>
<body>

<?php

// Explicación básica de una funcion.


// primeramente la funcion debe ser declarada.
function writeMsg() {
    echo "Función que solo imprime un hola !";
}


// luego debe ser llamada para ser ejecutada.
writeMsg();


echo "<br>";

// Ejemplo de una funcion a la que se le pasa un argumento:



//esta es una función, que recibirá un argumento, que se guardará en la variable "$nombre"

//este argumento es el que la funcion recibe y usa para devolver algo

// en este caso imprime con un "echo" el mismo valor que se le pase por parámetro, y le agrega la palabra "García"



function agregaApellido($nombre) {
    echo "$nombre Garcia.<br>";
}

// llama a la funcion cinco veces, y cad avez le pasa un argumento distinto.
agregaApellido("Charly");
agregaApellido("Victor");
agregaApellido("Carlos");
agregaApellido("José Luis");
agregaApellido("Cacho");
agregaApellido(2);

echo "<br>";




// aquí otro ejemplo de una función que recibe dos parámetros, por lo cual hay que pasarle dos valores. 

// declara la función, y le pasa dos variables(argumentos)
// estos argumentos en realidad no importa como se llamen las variables, da igual, puede ser cualquier nombre.
// lo importante es el dato que se le pase a la hora de ser llamada... ese es el dato que tomará la variable pasada como parámetro
// observese en este ejemplo, que cuando se llama a la función, se le pasan dos cadenas de string.
// la funcion guarda la primer cadena en la primer variable que tenga como argumento la funcion ($fnombre)...
// y guarda la segunda cadena de string en la segunda variable que tiene como argumento la funcion ($anio)


function familyName($fnombre, $anio) {
    echo "$fnombre García. Nació en $anio <br>";
}


// llamo 3 veces a la funcion familyName, y cada vez le paso argumentos diferentes, para obtener resultados diferentes.

familyName("Charly", "1975");
familyName("Juan José", "1978");
familyName("Pedro", "1983");


echo "<br>";

// Argumentos predeterminados en las fuciones:


// Es posible setear el valor de las variables que tenga como argumento la función.
// en caso de que al momento de llamar a la función no se le pase ninggún dato, la función usará el argumento predeterminado
// que tenga seteado al ser declarada.

// aqui un ejemplo:


function seteaAltura($mialtura = 177) {
    echo "La altura es : $mialtura <br>";
}

seteaAltura(160);
seteaAltura();
seteaAltura(180);
seteaAltura(190);


echo "<br>";

// Funciones que devuelven valores:

// las funcionas ademas de recibir argumentos, también pueden devolver valores
// no solo con un hecho como ya se vió, sino con la palabra reservada "return"  y luego el nombre de la variable
// que se quiera devolver.
// de esta forma al llamar a la función, esta devoverá un dato en el lugar en donde se la invoque.

// aqui un ejemplo:


function suma($a, $b) {
    $z = $a + $b;
    return $z;
}

echo "le paso dos numeros como parámetros; el 5 y el 10. y el resultado sera:  " . suma(5,10) . "<br>";
echo "7 + 13 = " . suma(7,13) . "<br>";
echo "2 + 4 = " . suma(2,4). "<br>";

echo suma(100,100);

//si se observa la saluda








?>





</body>
</html>
