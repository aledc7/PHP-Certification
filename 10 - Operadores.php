
<!DOCTYPE html>
<html>
    <head>
        <title>10 - Operadores</title>
    </head>
<body>

<?php

// el operador += suma al valor existene el la variable, el valor que se le pase luego del signo =
$x = 10;  
$x += 100;
echo "el resultado de '+=' es: ". $x . "<br>";



// el operador -= resta al valor existene el la variable, el valor que se le pase luego del signo =
$x = 10;  
$x -= 100;
echo "el resultado de '+=' es: ". $x . "<br>";



// el operador ++$variable suma el valor a la variable y luego la pasa
$x2 = 10;  
echo "el resultado de '++\$x2' es: " . ++$x2 . "<br>";


// el operador --$variable resta el valor a la variable y luego la pasa
$x2a = 10;  
echo "el resultado de '++\$x2' es: " . --$x2a . "<br>";


// igual que el anterior pero este primero pasa la variable y luego la suma
$x3 = 10;  
echo "el resultado de '\$x3++' es: " . $x3++ . "<br>";



//ejemplo de xor
$x = 100;
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "algunas de las dos variables cumple la funcion";
}


?>  

</body>
</html>
