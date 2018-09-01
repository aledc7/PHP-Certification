<html>
<body>
<head><title>php del capitulo 20</title>
</head>

<body>





<?php


// si el formulario está seteado para enviar los datos or POST entrará en el if y usará la variable superglobal $_POST

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "Bienvenido, este form envía por POST: " . $_POST["nombre"] . "<br>";
    echo "Tu email por POST es: " . $_POST["email"] ."<br>";


// si no viene por post, entonces significa que el formulario está seteado por GET, y se usará la variable $_GET    
}else{

    echo "Bienvenido, este form envía por GET: " . $_GET["nombre"] . "<br>";
    echo "Tu email por GET es: " . $_GET["email"] ."<br>";

}
?>


<br>
<br>
<br>
<br>


</body>
</html>