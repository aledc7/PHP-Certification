
<!DOCTYPE html>
<html>
<head><title>35 - Filters Advanced</title></head>
<body>

<?php

/*
Validar un entero dentro de un rango
*/



/* variable to check */
$numero = 122;

/* min value */
$min = 1;
/* max value */
$max = 200;


// Continuación del capitulo 35
// El siguiente ejemplo utiliza la función filter_var () para verificar si una variable es del tipo INT, y entre 1 y 200:

if (filter_var($numero, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo("La variable no está dentro del rango de entre 1 y 200");
} else {
    echo("La variable SI está dentro del rango de entre 1 y 200");
}
echo "<br>";

/*
Validar Si ina IP es IPv6
*/

// ip en formato IPv6 a chequear
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

// Validate ip as IPv6
if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo("$ip is a valid IPv6 address");
} else {
    echo("$ip is not a valid IPv6 address");
}
echo "<br>";


/*
El siguiente ejemplo utiliza la función filter_var () para verificar si la variable $ url es una URL con una cadena de consulta:
*/

// Variable to check
$url = "http://www.w3schools.com";

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}
echo "<br>";


/*
El siguiente ejemplo usa la función filter_var () para sanear una cadena. 
Eliminará todas las etiquetas HTML y todos los caracteres con un valor ASCII mayores a 127 de la cadena:
*/

// Variable to check
$str = "<h1>Este Texto Contenia caracteres extrañosÆØÅ! like this ÆØÅ</h1>";

// Remove HTML tags and all characters with ASCII value > 127
$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;

echo "<br>";




?>

</body>
</html>
