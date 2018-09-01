<!DOCTYPE html>
<html>
<head>
<title>11 - if_else_elseif</title>
</head>
<body>

<?php


// EJEMPLO DE UN IF SENCILLO:

// uso la funcion de date y le paso la "d" para obtener el dia actual.
// si quisiera la fecha completa usaria date("Y/m/d")
 $t = date("d");

// // muestro el valor de $t para comprobar lo que me guardó (será el dia de la fecha actual)
 echo "el dia del mes es: " . $t . "<br>";

if ($t > "20") {
     echo "ya estamos a mas de fin de mes" . "<br>";
 }





// Ahora un ejemplo de in IF ELSE

 $t2 = date("d");

 echo "el valor de la variable t2 es: " . $t2 . "<br>";

 if ($t2 < "20") {
     echo "el mes recien arranca";
 } else {
     echo "Ya llegamos a fin de mes.";
 }



 // EJEMPLO DE IF ELSEIF ELSE


 $t3 = date("H");
echo "<p>La hora (del servidor) es " . $t3; 
echo ", y dará el siguiente mensaje:</p>";

if ($t3 < "10") {
    echo "Buen Dia";
} elseif ($t3 < "18") {
    echo "Buenas tardes";
} else {
    echo "Buenas Noches";
}

?>






 
</body>
</html>