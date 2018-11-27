
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>36 - Error Handing</title>
</head>
<body>

<?php

error_reporting(E_ALL);

/*
El manejo de errores por defecto en PHP es muy simple.
Se envía al navegador un mensaje de error con el nombre del archivo,
el número de línea y un mensaje que describe el error.

Al crear scripts y aplicaciones web, el manejo de errores es una parte importante.
Si su código carece de un código de verificación de errores, su programa puede parecer
poco profesional y puede estar abierto a riesgos de seguridad.

Veremos 3 tipos de manejo de errores:
 * Simple "die()" statements
 * Custom errors and error triggers
 * Error reporting
 */

// primeramente se abre un archivo en el que se guardaran los datos de los errores
// este archivo debe existir previamente, o dará error de 'No such file or directory'.

$file = fopen("Bienvenido.txt", "r");

// para evitar  este error, hacemos una validación

if (!file_exists("Bienvenido.txt")) {
    // el 'die' detiene la ejecucion del código e imprime un mensaje en pantalla
    die("El archivo no existe, o tiene otro nombre");
} else {
    // abro el archivo con permisos de escrutura
    $file = fopen("Bienvenido.txt", "r");
}

// esto es bueno para el manejo de errores...pero detener el código ante un error, no es la mejor de las opciónes.

// CREANDO UN CONTROLADOR DE ERRORES PERSONALIZADO

// Un controlador de errores o 'Custom Error Handler'  no es mas que una funcion que creamos nosotros mismos, para que esta se ejecute cuando ocurra algún error.
// De este modo, podrémos tomar alguna acción para manejar ese problema
// Tengamos en cuenta que en ese momento, tendrémos muchas variables de entorno con valores asignados. Estas variables nos interesará no perder su información por ejemplo.

//Esta funcion debe recibir como mínimo 2 parámetros, aunque se le pueden pasar hasta cinco... veamos...

/**
 *  error_level:  Parámetro Obligatorio -  Es un valor que representa el tipo de nivel de error que se aplicará, los niveles son:
 *
 *      2 - E_WARNING           = Son errores no fatales o warnings, el script no se detendrá.
 *      8 - E_NOTICE            = En realidad son avisos de posibles errores, generados por php, puede que ande perfecto el código y dé uno de estos errores.
 *    256 - E_USER_ERROR        = Son errores FATALES generados por el usuario, a traves de la función 'trigger_error()'.
 *    512 - E_USER_WARNIN       = Iguales que el anterior pero NO son fatales, tambbién se generan a traves de la función 'trigger_error()'.
 *   1024 - E_USER_NOTICE       = Similar a E_NOTICE pero generados por el usuario con trigger_error().
 *   4096 - E_RECOVERABLE_ERROR = Error que puede ser capturado por un manejador de errores para tratar de solucionarlo. Se usa la función 'set_error_handler()'
 *   8191 - E_ALL               = Todos los errores
 */

/**
 *  error_message:  Parámetro Obligatorio  -  Especifica el mensaje de error que el usuario defina.
 *
 */

/**
 *  error_file      Parámetro Opcional  -  Especifica el nombre del archivo en el que ocurrió el error.
 */

/**
 *  error_line      Parámetro Opcional  -  Especifica el número de line del error.
 */

/**
 *  error_context   Parámetro Opcional  -  pone a disposición un array con todas las variables y sus datos, al momento de ocurrido el error.
 */

// Una vez que tenemos claro todo esto, podemos crear nuestra funcion para manejo de errores:

// Esta función recibe dos parámetros, uno es el numero del error, y luego la cadena de texto
// luego los imprime en pantalla, y con la funcion die() termina la ejecución de código.

function ErrorPersonalizado($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Ending Script";
    die();
}

// Una vez que ya tenemos esta función creada, vamos a ponerla como predeterminada en la ejecucion de este archivo php.
// Esto se hace de la siguiente manera:

//set_error_handler("ErrorPersonalizado");

//error handler function
function ErrorPersonalizado2($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr";
}

//set error handler
//set_error_handler("ErrorPersonalizado2");

//trigger error
echo ($test);




$errLvl = error_reporting(); 
for ($i = 0; $i < 15;  $i++ ) { 
    print FriendlyErrorType($errLvl & pow(2, $i)) . "<br>\\n"; 
} 

function FriendlyErrorType($type) 
{ 
    switch($type) 
    { 
        case E_ERROR: // 1 // 
            return 'E_ERROR'; 
        case E_WARNING: // 2 // 
            return 'E_WARNING'; 
        case E_PARSE: // 4 // 
            return 'E_PARSE'; 
        case E_NOTICE: // 8 // 
            return 'E_NOTICE'; 
        case E_CORE_ERROR: // 16 // 
            return 'E_CORE_ERROR'; 
        case E_CORE_WARNING: // 32 // 
            return 'E_CORE_WARNING'; 
        case E_COMPILE_ERROR: // 64 // 
            return 'E_COMPILE_ERROR'; 
        case E_COMPILE_WARNING: // 128 // 
            return 'E_COMPILE_WARNING'; 
        case E_USER_ERROR: // 256 // 
            return 'E_USER_ERROR'; 
        case E_USER_WARNING: // 512 // 
            return 'E_USER_WARNING'; 
        case E_USER_NOTICE: // 1024 // 
            return 'E_USER_NOTICE'; 
        case E_STRICT: // 2048 // 
            return 'E_STRICT'; 
        case E_RECOVERABLE_ERROR: // 4096 // 
            return 'E_RECOVERABLE_ERROR'; 
        case E_DEPRECATED: // 8192 // 
            return 'E_DEPRECATED'; 
        case E_USER_DEPRECATED: // 16384 // 
            return 'E_USER_DEPRECATED'; 
    } 
    return ""; 
}




?>




</body>
</html>




