<!DOCTYPE html>
<html>
<head><title>19.2 - $_REQUEST</title>
</head>
<body>



 <!-- La variable superglobal $_REQUEST  se usa para recolectar los datos tipicamente de formularios.
        Existen dos maneras de obtener y devolver esos datos; una es por GET, y la otra es por POST.
        Por get los datos viajan en la url, hay un limite de 3000 caracteres, y no hay ocultamiento de la información.
        Por otro lado el metodo POST no tiene limite en cuanto a cantidad de informacion, y los datos viajan ocultos.

 
  -->




<!-- Formulario en HTML -->

<!-- defino en "method" que usaré post, luego en "accion se define a donde van a ir a parar esos datos
     Luego con la variable global $_SERVER y pasandole el argumento "PHP_SELF" devuelvo los datos al mismo formulario que los envía.
 -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

<!-- la etiqueta fieldset pone el formulario en un recuadro muy lindo.
     Luego la etiqueta legend pone un titulo en la misma linea del formulario, como para nombrarlo digamos
 -->
<fieldset>
<legend>Formulario PHP</legend>

  <!-- creo el input tipo canpo de texto y le doy un nombre (si no se le pone nombre los datos no se guardaran) -->
  Nombre: <input type="text" name="campo_nombre">
  <br>
  <br>
  Apellido: <input type="text" name="campo_apellido">
  <br>
  <br>
  <!-- creo el boton del tipo enviar -->
  <input type="submit">


</form>
</fieldset>

<!-- esto fue la parte en el html, ahora pasemos al script enPHP -->


<?php
//con un if verifico so los datos del formulario son enviados con el método POST, en caso que sí, ingreso.
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    // uso $_REQUEST para acceder a los datos del campo de texto "campo_nombre" y lo guardo en la variable $name.
    $nombre = ($_REQUEST['campo_nombre']); 
    $apellido = ($_REQUEST['campo_apellido']);
    
    // con la funcion empty de php verifico si la variable $name viene vacía, en caso que sea true, o sea que si esté vacía, entrará al if
    if (empty($nombre)) {
        echo "El campo de texto estava vacío.";
    } else {
        echo "El nombre ingresado en el formulario es: " . $nombre . "<br> <br>";
        echo "El apellido ingresado en el formulario es: " . $apellido;
    }
//}
?>

</body>
</html>