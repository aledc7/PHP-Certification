
<!DOCTYPE HTML>  
<html>
<head><title>22 - Form Required</title>

<style>
.error {color: #FF0000;}
</style>

</head>
<body>  

<?php


//  Validación de un Formulario

echo "<h1> VALIDACION DE FORMULARIOS</h1>";


// defino las variables y las inicializo vacías
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";


// si el formulario envía los datos por post:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  //uso la funnción empty() para saber si el campo viene vacío.
  if (empty($_POST["name"])) {
    //si viene vacío guardo un texto en la variable $nameErr
    $nameErr = "Name is required";

    // sino viene vacio filtro el dato con la funcion filtra_datos()
  } else {
    $name = filtra_datos($_POST["name"]);
  }

  // lo mismo en cada campo obligatorio
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = filtra_datos($_POST["email"]);
  }
    

  // aca como el campo no es obligatorio, si viene vacío lo declara en blanco asi no da error de undefined.
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = filtra_datos($_POST["website"]);
  }

  
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = filtra_datos($_POST["comment"]);
  }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = filtra_datos($_POST["gender"]);
  }
}

// aca la funcion que filtra datos sacando los caracteres no permitidos por temas de seguridad.
function filtra_datos($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* campos requeridos</span></p>
<fieldset>

 <!-- aca le indico al formulario que envíe los datos a el mismo -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  Nombre: <input type="text" name="name">
  
  <!-- imprimo la variable del $nameErr, si el nombre no está seteado, la variable tendrá un mensaje de error seteado por el if de mas arriba. -->
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  
  <!-- lo mismo hago para los campos mail, website y comentario. -->
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Commentario: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Genero:
  <input type="radio" name="gender" value="female">Muher
  <input type="radio" name="gender" value="male">Varon
  <input type="radio" name="gender" value="other">Otro
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</fieldset>

<?php
echo "<h2>Your Input:</h2>";
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

</body>
</html>