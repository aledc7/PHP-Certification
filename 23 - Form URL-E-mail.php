<!DOCTYPE HTML>  
<html>
<head>
<title>23 - Form URL - Email Validation</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";


// me fijo si viene por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // me fijo si el campo nombre del formulario viene vacio.
  if (empty($_POST["name"])) {

    //si entró aca poruque vino vacío, gravo mensaje de error
    $nameErr = "Name is required";
  } else {
      
    // si no vino vacío, le paso el filtro que ya vimos.
    $name = test_input($_POST["name"]);


    // luego pregunto si la variable $name tiene estos caracteres en la url, y lo niego con un NOT  ! 
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  

  // validador de email
  
  // si el campo mail está vacío
  if (empty($_POST["email"])) {
    //entra al if y graba el error en la variable emailErr
    $emailErr = "Email is required";
  } else {
    //si no estava vacío. filtro los datos que tenga email, con la función que ya vimos.
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    
    // la función filter_var analiza si el string que se le pase tiene el formato de un mail... y devuelve TRUE si lo es.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);


    // Revisa que la variable $website tenga un formáto de URL válido... demasiado complejo para analizarlo. 
    // sin embargo lo podemos reutilizar
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

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






//  preg_match()  EJEMPLO DE FUNCIONAMIENTO

//Demilitador 'i' para no diferenciar mayus y minus


// dentro de un if uso la funcion de pgp preg_match()  que devuelve TRUE si encuentra el primer argumento que se le pase.

// si se encuentra "PRUEBA" en la cadena de texto que se le está pasando ("esto es una prueba") devuelve TRUE y entra al if.

echo "<h2>Probando la funcion preg_match() </h2> <br>";



// PREG_MATCH SENSITIVE CASE

//cuando uso preg_match paso el parámetro "/i"  no diferenciará mayusculas de minúsculas.
if (preg_match("/PRUEBA/i", "esto es una prueba")) 
    {
    echo "HAY COINCIDENCIA";
    }else 
	    {
        echo "NO HAY COINCIDENCIA";
        }

        echo "<br>";
    


// PREG_MATCH NO SENSITIVE  CASE

// cuando paso el parámetro "\b" tiene si es sensitive CASE.        
if (preg_match("/PRUEBA\b/", "esto es una PrUEBA")) 
{
    echo "HAY COINCIDENCIA";
    }else 
        {
        echo "NO HAY COINCIDENCIA";
        }        

echo "<br>";

  // para que sea TRUE busca que haya 3 caracteres de la A a la Z que esten contiguos
if (preg_match('/[A-Z]{3}/',"A1CDR")) 
{
echo "Si Encontré Tres Letras seguidas";
} else 
  {
  echo "NO encontré dos números seguidos.";
  }

  echo "<br>";


  // para que sea TRUE busca que haya 3 caracteres de la A a la Z que esten contiguos
if (preg_match('/[0-9]{2}/',"alejandro322@hotnailcom")) 
{
echo "Si Encontré dos números seguidos";
} else 
  {
  echo "NO encontré dos números seguidos.";
  }





        
?>



















</body>
</html>