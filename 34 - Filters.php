<!DOCTYPE html>
<html>
<head><title>34 - Filters</title>
<head>


<style>
/* Le doy estilo a la tabla */
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>
<body>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
/*
    Los filtros en PHP sirven para validar las entradas externas provenientes de formularios, cookies, Web Services, bases de datos entre otras.
    Los datos provenientes de fuentes externas siempre tienen que ser validados por motivos de seguridad, allí es cuando entra en accion los filtros de PHP.
*/


  //recorro el array que devuelve la funcion filter_list() y lo pongo en una tabla
  foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' 
      . $filter 
      . '</td><td>' 
      . filter_id($filter) 
      . '</td></tr>';
  }
  ?>


<?php

/* 
    la funcion filter_var() valida y corrige los datos de la variable que reciba.
    Es necesario pasarle dos datos, la variable a filtrar, y el tipo de filtrado que se hará.

*/

// en este ejemplo se filtrará una cadena de string, como resultado se eliminaran las etiquetas html.
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;

echo "<br>";

// Ejemplo para validad si una variable tiene un dato entero:

$int = 10;

if (filter_var($int, FILTER_VALIDATE_INT) == true) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}

echo "<br>";

// otro ejemplo para validar si una dirección IP es válida:
$ip = "192.168.1.10";

if (filter_var($ip, FILTER_VALIDATE_IP) == true) {
    echo("$ip is a valid IP address");
} else {
    echo("$ip is not a valid IP address");
}

echo "<br>";

// ejemplo de validacion de email

$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}

echo "<br>";

// Ejemplo de validación de URL:

$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}

// existe una larga lista para validar todo tipo de datos y realizar acciones especificas.
// consultar la referencia de la W3Schools
// https://www.w3schools.com/php/php_ref_filter.asp

?>
</table>

</body>
</html>