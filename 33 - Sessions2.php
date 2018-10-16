
<?php
// indico que voy a usar variables de sesion
session_start();
?>
<!DOCTYPE html>
<header>
<title>33 - Sessions2</title>
</header>
<html>
<body>

<?php
// invoco a las variables de sesion que declaré en el otro archivio (33 - Sessions.php)
echo "El usuario Logueado es: " . $_SESSION["usuario_logueado"] . ".<br>";
echo "Inicio de sesion por ultima vez: " . $_SESSION["ultimi_ininio"] . ".";
echo "<br>";


// con la función "print_r" puedo ver todas las variables de sesion seteadas:
echo "Variables de sesion seteadas: <br> ";
print_r($_SESSION);


?>

</body>
</html>
