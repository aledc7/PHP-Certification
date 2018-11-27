
<!DOCTYPE html>
<html>
<head> <title>26 - Date and Time</title>
</head>
<body>

<?php


/* La función "date"  se utiliza para obtener la fecha, esta función recibe dos parámetros (format y timestamp), uno obligatorio (format)y otro opcional.
   el parametro "format" es obligatorio, y se compone por las letras: d, m ,y ,l .
   estos parámetros deben pasarse entre paréntesis luego de la funcion date.    
   el significado es:
    d = dia
    m = mes
    y = año
    l = dia de la semana

*/

echo "Hoy es: " . date("d/m/y") . "<br>";
echo "Hoy es: " . date("d.m.y") . "<br>";
echo "Hoy es: " . date("d-m-y") . "<br>";
echo "el día de la semana es: " . date("l");


echo("<br>");
echo "<br>";
echo "<br>";


// un util ejemplo es usar esta función time, para actualizar automáticamente el copyright del footer de los sitios web:


// echo "Todos los derechos reservados  &copy; 2010- " . date("Y");
echo "Copyright&copy; " . date("Y")." Ingenea SRL";

echo "<br>";



echo "<br>";

/*  Para el uso de la hora, los parámetros utilizados son los siguientes:
    h = Formato de hora de 12 horas
    i = minutos, del 0 al 59
    s = segundos del 0 al 59
    a = am o pm
*/

// ejemplo de poner la hora sin segundos.

echo "Es la hora: " . date("h:i a");

echo "<br>";
echo "<br>";
echo "<br>";



/* PHP toma la hora y la fecha del servidor apache en el que esté corriendo.
    Si tenemos acceso al servidor, es posible configurar en el php.ini el timezone correcto, bastaría con poner esta linea en la seccion [DATE]: date.timezone = America/Argentina/Buenos_Aires
    en MAMP ese archivo se encuentra en: applications/MAMP/bin/php/php7..2.1/conf   (si tenes otra versión cambiá el nuero, el resto es igual).
    En caso de no tener acceso al servidor PHP, bastará con incluír la zona horaria deseada en nuestro archivo PHP:
*/

// aqui seteo el timezone de new york, por lo que el archivo php usará este en vez del que tenga seteado en el servidor.
date_default_timezone_set("America/New_York");

echo "En New York Es la hora: " . date("h:i a");

echo "<br>";
echo "<br>";
echo "<br>";


// PASANDO EL SEGUNDO PARAMETRO OPCIONAL (timestamp)

// MKTIME()
// usando mktime es para hacer una variable con una fecha específica, esto se usa en caso que se quiera imprimir una fecha puntual
// también es util para realizar cálculos de sumar o restar fechas, lo cual es muy útil en muchos escenarios.

// guardo en la variable $dato los numeros de la hora, y de la fecha, separados por coma, luego la función date interpretará esta variable como una fecha
// a la cual se puede procesasr sumarle o restarle dias, todo en formato fecha.
$dato=mktime(11, 14, 54, 10, 9, 1979);
echo "Mi fecha de nacimiento es: " . date("d-m-y h:i:sa", $dato);

echo "<br>";
echo "<br>";
echo "<br>";


// STRTOTIME()
// esta funcion sirve para transformar formato de hora legible por una persona, a formato UNIX para poder hacer calculos.
// de esta manera se evita ingresar los números, como se hizo en el ejemplo de arraiba con mktime

$dato2=strtotime("10:30pm October 9 2018");
echo "La fecha es " . date("d-m-y h:i:sa", $dato2);

echo "<br>";
echo "<br>";
echo "<br>";

// la funcion strtotime entiende varias formas de especificarle fechas en lenguaje no máquina... todas en ingles, of course.

// usando strtotime declaro una variable $dato3 y le paso como argumento "tomorrow"
$dato3=strtotime("tomorrow");
echo "la fecha de mañana será: " .  date("d-m-Y h:i:sa", $dato3) . "<br>";

$dato4=strtotime("next Saturday");
echo  "La fecha del próximo sábado será: " . date("d-m-Y h:i:sa", $dato4) . "<br>";

$dato5=strtotime("+3 Months");
echo "La fecha de aca a 3 meses será: ".date("d-m-Y h:i:sa", $dato5) . "<br>";



echo "<br>";


// este ejemplo muestra los sabados de las siguientes 6 semanas

// guarda el valor del próximo sábado
$comienzo=strtotime("Saturday");
// guarda el valor de el próximo sabado "$comienzo" mas 6 semanas mas
$fin=strtotime("+6 weeks", $comienzo);

// mientras $comienzo sea menor que $fin 
while ($comienzo < $fin) {
// imprime el valor del sabado 
echo "Sabado ". date("d M", $comienzo) . "<br>";
  //le suma una semana y vuelve a iterar.
  $comienzo = strtotime("+1 week", $comienzo);
}

echo "<br>";
echo "<br>";


// el siguiente ejemplo hace una cuenta regresiva de cuanto falta para tal fecha

//guardo en $d1 la fecha a la que quiero hacer la cuenta regresiva de cuanto falta
$d1=strtotime("September 21");
// uso la funcion ceil para ir restando 
$d2=ceil(($d1-time())/60/60/24);
echo "Faltan " . $d2 ." dias para la Primavera :)";



// existe una gran cantidad de funciones de PHP para el manejo de fechas y hora.  
// https://www.w3schools.com/php/php_ref_date.asp


echo "<p>Copyright &copy; 1979-" . date("Y") . " Ale DC</p>";


?>

</body>
</html>