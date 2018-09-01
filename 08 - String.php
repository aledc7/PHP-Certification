<!DOCTYPE html>
<html>
    <head>
        <title>08 - String</title>
    </head>
<body>

<?php

//strlen devuelte el numero de caracteres que tenga la cadena pasada como parametro

echo "<script>alert('Hola 1');</script>";

echo "1 - El resultado de strlen es: " .  strlen("Hola Ale")."<br>" ;

// lo mismo si se pasa una variable
$var1 = "texto en una variable";   //tiene 21 caracteres incluido el espacio
echo "<script>alert('Hola2');</script>";

echo "2 - pasando una variable a strlen el resultado es: ". strlen($var1)."<br>"; 



// str_eodr_count("palabras a contar, o un arreglo ")
echo "<script>alert('Hola 3');</script>";

echo "3 - el resultado de str_word_count es: " . str_word_count("Hello my world! <") ."<br>" ;  //esto devolvera 2


// la funcion strrev invierte una cadena de texto
echo "el resultado de strrev para la palabra hola es: " . 
 strrev("Hola")."<br>";



// la funcion strpos devuelve busca palabras dentro de un string, y al encontrarla
// devuelve la posición del primer caracter de esa cadena.
echo "usando strpos, la posición en que se encontró la palabra word es: " .
 strpos("Hello world!", "world")."<br>"; // outputs 6


// la funcion str_replace() reemplaza texto por otro.
// la función recibe 3 argumentos:  
// 1: string original que se quiere reemplazar
// 2: string nuevo a usar en su lugar
// 3: array en donnde se realizará el cámbio.

 echo "el resultado del reemplazo es: " . str_replace("world", "Ale", "Hello world!"); // outputs Hello Ale!





?> 
 
</body>
</html>