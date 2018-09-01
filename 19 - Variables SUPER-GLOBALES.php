<!DOCTYPE html>
<html>
<head>
    <title>19 - Variables SUPER-GLOBALES</title>
</head>
<body>









<?php 



// PHP dispone de unas cuantas variables Superglobales, lo que significa que pueden ser llamadas desde donde sea.
// Estas variables son muy conocidas y utilizadas para varias cosas.

// la lista completa de variables es la siguiente:

/*

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

*/

// $GLOBALS:

// Esta variable GLOBAL se usa justamente para convertir a cualquier variable común y corriente en una variable global.
// veamos un ejemplo


// declaro dos variables $x , $y  
// observese que fueron declaradas fuera de la función.

// declaro dos variales fuera de la funcion.


$x = 7500;
$y = 2500; 


// defino una función, y realizo una operación con las variables declaradas fuera de esta funcion.
// normalmente esto daría error, ya que en una funcion no es posible acceder a variables creadas fuera de esta funcion.

// la funcion suma estas dos variables y las guarda en otra variable  $z declarada dentro de la funcion.
function suma() {
    $GLOBALS ['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

suma();

// aquí llamo desde fuera a una variable que está dentro de una función, y esto es posible ya que se está haciendo uso de $GLOBAL[]
echo $z;

echo "<br>";

// NOTA:  notese que dentro de los corchetes, se deben usar comillas simples, y no utilizar el signo de peso $





// ejemplo de funciones con variables no globales




// REPASO DE FUNCIONES, PASO DE PARAMETROS Y SCOPE DE UNA FUNCION 


// esta es una funcion normal, tiene todas sus variables dentro de la misma, y ejecuta una suma.
// luego mediante un echo la función devuelve el valor de una de sus variables.

function suma2(){

    $valor1 = 10;
    $valor2 = 20;
    $valor3 = $valor1 + $valor2;

    echo "el resultado de la suma es: ". $valor3;

}

 suma2();

 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";



// otra manera de hacer lo mismo sería usando un return dentro de la funcion:

function suma5(){

    $valor1 = 1000;
    $valor2 = 20000;
    $valor3 = $valor1 + $valor2;

   return $valor3;

}

echo suma5();



echo "<br>";





$valorx = 30;

$valory = 50;



// pasandole argumentos a una función:

function suma3($perro, $gato){


    $valor_resultado = $perro + $gato;

echo "el valor de la variable perro es: ". $perro ."<br>";
echo "el valor de la variable gato es: " . $gato . "<br>";
 echo "el resultado de la funcion suma3  es: ". $valor_resultado;
}




suma3(100,200);

echo "<br>";
echo "<br>";
echo "<br>";


// en el momento de invocar a la funcion, puedo pasarle los valores directamente, o bien pasarle dos variables que no importa como se llamen.
suma3 ($valorx,$valory);




echo "<br>";

echo "<br>";
echo "<br>";





// $ _SERVER es una variable super global de PHP que contiene información sobre encabezados, rutas y ubicaciones de guiones.






echo "El resultado de PHP_SELF es: " . $_SERVER['PHP_SELF'];	// Returns the filename of the currently executing script
echo "<br>";
echo "<br>";
echo "El resultado de GATEWAY_INTERFACE es: " . $_SERVER['GATEWAY_INTERFACE'];	// Returns the version of the Common Gateway Interface (CGI) the server is using
echo "<br>";
echo "<br>";
echo "El resultado de SERVER_ADDR es: " . $_SERVER['SERVER_ADDR'];	 // Returns the IP address of the host server
echo "<br>";
echo "<br>";
echo "El resultado de SERVER_NAME es: " . $_SERVER['SERVER_NAME'];	// Returns the name of the host server (such as www.w3schools.com)
echo "<br>";
echo "<br>";
echo "El resultado de SERVER_SOFTWARE es: " . $_SERVER['SERVER_SOFTWARE'];	// Returns the server identification string (such as Apache/2.2.24)
echo "<br>";
echo "<br>";
echo "El resultado de SERVER_PROTOCOL es: " . $_SERVER['SERVER_PROTOCOL'];	// Returns the name and revision of the information protocol (such as HTTP/1.1)
echo "<br>";
echo "<br>";
echo "El resultado de REQUEST_METHOD es: " . $_SERVER['REQUEST_METHOD'];	// Returns the request method used to access the page (such as POST or GET)
echo "<br>";
echo "<br>";
echo "El resultado de REQUEST_TIME es: " . $_SERVER['REQUEST_TIME'];	// Returns the timestamp of the start of the request (such as 1377687496)
echo "<br>";
echo "<br>";
echo "El resultado de QUERY_STRING es: " . $_SERVER['QUERY_STRING'];	// Returns the query string if the page is accessed via a query string
echo "<br>";
echo "<br>";
echo "El resultado de HTTP_ACCEPT es: " . $_SERVER['HTTP_ACCEPT'];	// Returns the Accept header from the current request
echo "<br>";
echo "<br>";
echo "El resultado de HTTP_ACCEPT_CHARSET es: " . $_SERVER['HTTP_ACCEPT_CHARSET'];	// Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
echo "<br>";
echo "<br>";
echo "El resultado de HTTP_HOST es: " . $_SERVER['HTTP_HOST'];	// Returns the Host header from the current request
echo "<br>";
echo "<br>";
echo "El resultado de HTTP_REFERER es: " . $_SERVER['HTTP_REFERER'];	// Returns the complete URL of the current page (not reliable because not all user-agents support it)
echo "<br>";
echo "<br>";
echo "El resultado de HTTPS es: " . $_SERVER['HTTPS'];	// Is the script queried through a secure HTTP protocol
echo "<br>";
echo "<br>";
echo "El resultado de REMOTE_ADDR es: " . $_SERVER['REMOTE_ADDR'];	// Returns the IP address from where the user is viewing the current page
echo "<br>";
echo "<br>";
echo "El resultado de REMOTE_HOST es: " . $_SERVER['REMOTE_HOST'];	// Returns the Host name from where the user is viewing the current page
echo "<br>";
echo "<br>";
echo "El resultado de REMOTE_PORT es: " . $_SERVER['REMOTE_PORT'];	// Returns the port being used on the user's machine to communicate with the web server
echo "<br>";
echo "<br>";
echo "El resultado de SCRIPT_FILENAME es: " . $_SERVER['SCRIPT_FILENAME'];	// Returns the absolute pathname of the currently executing script
echo "<br>";
echo "<br>";
echo "El resultado de SERVER_ADMIN es: " . $_SERVER['SERVER_ADMIN'];	// Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
echo "<br>";
echo "<br>";
echo "El resultado de SERVER_PORT es: " . $_SERVER['SERVER_PORT'];	// Returns the port on the server machine being used by the web server for communication (such as 80)
echo "<br>";
echo "<br>";
echo "El resultado de SERVER_SIGNATURE es: " . $_SERVER['SERVER_SIGNATURE'];	// Returns the server version and virtual host name which are added to server-generated pages
echo "<br>";
echo "<br>";
echo "El resultado de PATH_TRANSLATED es: " . $_SERVER['PATH_TRANSLATED'];	// Returns the file system based path to the current script
echo "<br>";
echo "<br>";
echo "El resultado de SCRIPT_NAME es: " . $_SERVER['SCRIPT_NAME'];	// Returns the path of the current script
echo "<br>";
echo "<br>";
echo "El resultado de SCRIPT_URI es: " . $_SERVER['SCRIPT_URI'];	// Returns the URI of the current page
echo "<br>";
echo "<br>";

echo "<br>";
echo "<br>";










?>






    
</body>
</html>