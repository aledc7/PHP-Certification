<!DOCTYPE html>
<head>
    <title>07 - Data Types</title>
</head>

<body>

    <p>LOS TIPOS DE DATOS EN PHP SON:</p>
<P>
* String:  $var = "estta var será un string"; <br>
* Integer $var = 25; <br>
* Float  $var = 25.1; <br>
* Boolean $var = true;  $var2 = false; <br>
* Array $var = ("Juan", "Pedro","casa");  $var2 = (2,3,4,5,6)<br>
* Object <br>
* NULL <br>
* Resource <br>

</P>




        <?php  
        $x = 5985;
        
        // la funcion var_dump() devuelve el tipo de dato que se le pase en el parentesis
        var_dump($x);






// creo una clase llamaca 
class Auto {
    function Auto() {
        $this->modelo = "Ford";
    }
}
// create an object
$var1 = new Auto();

// imprimo eo valor del la propiedad "modelo" del objeto var1, perteneciente a la clase Auto.
echo $var1->modelo;
?>
    
</body>
</html>