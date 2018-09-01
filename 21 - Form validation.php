
<!DOCTYPE HTML>  
<html>
<head><title>21 - Form validation</title>
</head>
<head>
</head>
<body>  


<?php
// defino las variables y las inicializo vacías
$name = $email = $gender = $comment = $website = "";

// si los datos del formulario vienen por POST, guardo en cada variable el campo del formulario haciendo uso de $_POST
// luego utilizando la funcion filtra_datos para filtrar cada dato que venga de cada campo.
// luego analizaremos linea por linea la funcion

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = filtra_datos($_POST["name"]);
  $email = filtra_datos($_POST["email"]);
  $website = filtra_datos($_POST["website"]);
  $comment = filtra_datos($_POST["comment"]);
  $gender = filtra_datos($_POST["gender"]);
}



// explicación de la funcion: basicamente filtra el dato que traerá el campo, y le quitará todos los caracteres que pudieran injectar un script.

function filtra_datos($data) {
  
  // con la funcion trim le quito los doble espacio, tabs y salto de linea.  
  $data = trim($data);
  // con la funcion stripslashes se quitan las barras invertidas "\"
  $data = stripslashes($data);
  // la funcion htmlspecialchars trunca todos los simbolos tales como "<" ">"  "/"  de manera que no sea posible enviar un <script>
  $data = htmlspecialchars($data);
  //finalmente con un return devuelte el dato filtrado.
  return $data;
}
?>

<fieldset> <legend>PHP Form Validation Example</legend>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</fieldset>

<br>
<br>
<br>
<br>

<fieldset>
<?php


echo "<h2>Lo que escribiste:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</fieldset>
</body>
</html>