<!DOCTYPE html>
<head><title>32 - Cookies</title>
</head>
<?php


/**
 *  Una Cookie es un pequeño archivo que se crea localmente en la computadora en que se esté coriendo el navegador.
 *  Este archivo cookie es enviado de nuevo al servidor cada vez que la misma página vuelve a ser visitada.
 */


 // defino dos variables en una guardo el nombre que le daré al archivo cookie a ser creado, en la otra variable defino el contenido de la cookie.
$nombre_cookie = "usuario";
$valor_cookie = "Ale DC";

// con la función  setcookie() creo la cookie, la misma recibe 7 parámetros, de los cuales solo uno es obligatorio, este es el nombre.

setcookie($nombre_cookie, $valor_cookie, time() + (86400 * 30), "/"); // 86400 = 1 day

/**
 *  El primer parametro es el nombre con el que se creará la cookie
 *  El segundo es el valor de la cookie
 *  El tercer parámetro es el tiempo en el que expirará la cookie medido en segundos, por tanto 60 segundos por 60 minutos equivale a una hora (3600), luego 24 horas será (3600 * 24)=86400
 *  El cuarto parámetro es en donde tendá alcance (scope) la cookie. Si se pone la barra "/" significa que el scope es en el sitio entero.
 *  Un dato importante a tener en cuenta es que la cookie debe ser declarada antes de la etiqueta HTML.
 *  Luego si se desea cambiar el valor de la cookie bastará con setearla nuevamente.
 *  Para borrar una cookie, hay que pasarle el valor del time en negativo: setcookie("user", "", time() - 3600);
 * 
 */

?>
<html>
<body>

<?php
if(!isset($_COOKIE[$nombre_cookie])) {
     echo "La Cookie llamada '" . $nombre_cookie . "' No está Seteada!";
} else {
     echo "La Cookie '" . $nombre_cookie . "' está seteada<br>";
     echo "Su valor es: " . $_COOKIE[$nombre_cookie];
     echo "<br>";
}



// Chequeo las cookies estan habilitadas mediante el uso de la variable superglobal $_COOKIE

if(count($_COOKIE) > 0) {
    echo "Las Cookies estan habilitadas .";
} else {
    echo "Las Cookies estan deshabilitadas .";
}



?>

<p><strong>Nota:</strong> Para ver la cookie en acción tendrás que recargar la página.</p>

</body>
</html>