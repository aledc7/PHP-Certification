

<?php
// esta linea tiene que estar antes de cualquier etiqueta html
session_start();
?>
<!DOCTYPE html>
<header>
<title>33 - Sessions</title>
</header>
<html>
<body>

<?php
// acá configura dos variables de sesion,
// Tener en cuenta que en PHP, las variables de sesion vivirán hasta que se cierre por completo el navegador.
// Esto significa que no basta con cerrar la pestaña, se deberá cerrar el explorador también.
// Otro dato importante es que primeramente debe ejecutarse el archivo que setea las variables de sesion, esto puede sonar obvio pero siempre algun boludo se la come.


$_SESSION["usuario_logueado"] = "AleDC";
$_SESSION["ultimi_ininio"] = date("l jS \of F Y h:i:s A");
echo "Las Variables de Sesion están seteadas.";
?>

</body>
</html>