
<!DOCTYPE HTML>
<html>
<head><title>20 - Manejo de Formularios</title>
</head>  
<body>



<!-- Formulario con el método post.  El archivo que recibe los datos es procesaform.php
     Ese archivo contiene toda la lógica.

     si se quiere probar el metodo GET simplemente cambiese la palabra post del la propiedad method del formulario
 -->

<fieldset>
<legend>Capitul 20 </legend>
<form action="procesaform.php" method="post">
Nombre: <input type="text" name="nombre"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
</fieldset>
</body>
</html>