
<!DOCTYPE html>
<html>
<head><title> 25 - Arrays Multilevel</title>
</head>
<body>



<?php


// primeramente declaro un array multi nivel, esto sería varios arrays dentro de un array.

// de esta manera, el primer array del array $autos tendrá el indice cero [0]
// seguidamente, los elementos del primer array cero, tambien tendrán un indice empezando por cero[0]
// de esta manera, para acceder a la palabra Ford del array tendria que escribir: $autos[0][0]


$autos = array
  (
  array("Ford",7,14),  //este array tendrá el indice [0], e internamente estos pares de indice valor: 0="Ford", 1=7, 2=14
  array("BMW",15,13),  //este array tendrá el indice [1], estos pares de indice valor:  0="BMW", 1=15 , 2=13 
  array("Peugeot",5,2),  //este array tendrá el indice [2], estos pares de indice valor:  0="Peugeot", 1=5 , 2=2 
  array("Fiat",17,15) //este array tendrá el indice [3], estos pares de indice valor:  0="Fiat", 1=17 , 2=15 
  );
                          //FORD                             //7                               //14
echo "Los autos marca: ". $autos[0][0]." Tenemos en Stock: ".$autos[0][1].", y se vendieron: ".$autos[0][2].".<br>";
                          //BMW                              //15                              //13
echo "Los autos marca: ". $autos[1][0]." Tenemos en Stock: ".$autos[1][1].", y se vendieron: ".$autos[1][2].".<br>";
                          //Peugeot                          //5                               //2
echo "Los autos marca: ". $autos[2][0]." Tenemos en Stock: ".$autos[2][1].", y se vendieron: ".$autos[2][2].".<br>";
                          //Fiat                             //17                              //15
echo "Los autos marca: ". $autos[3][0]." Tenemos en Stock: ".$autos[3][1].", y se vendieron: ".$autos[3][2].".<br>";



// notese que podriamos referirnos a que el primer valor entre corchetes[ ] del array representaría a la fila que queremos acceder, 
// y el segundo valor entre corchetes[ ] representaría la columna de esa fila.  siempre empezando en CERO


// de este modo nos sería fácil darnos cuenta que si quiero el dato de la fila 2 columna 1 ($autos[2][1]) el dato sería "5"
echo $autos[2][1];



echo "<br> <br> <br>";



// ahora para recorrer un array multinivel se pueden usar dos estructuras FOR anidadas:


// el primer for tiene una variable $fila, inicializada en cero, el for se ejecutará mientras la variable $fila sea menor a 4, e incrementará en uno en cada iteración.    
for ($fila = 0; $fila < 4; $fila++) {
  // una vez dentro del primer for, imprimo el valor del indice, o sea la variable $fila que estará en cero la primera iteración
  echo "<p><b>Numero de Fila: $fila</b></p>";
  //luego arma una lista con la etiqueta html <ul>
  echo "<ul>";
  
    // luego está el segundo for, que tiene una variable $col inicializada en cero, y se ejecutará hasta que $col sea menor a 3, e incrementará en uno en cada iteración.
    for ($col = 0; $col < 3; $col++) {
    //luego arma los elementos de la lista, pasandole como indice las variables $fila y $col.
    echo "<li>".$autos[$fila][$col]."</li>";
    }
  //luego ya fuera del segundo for, cierro la etiqueta de la lista.
  echo "</ul>";
}


echo "<br> <br>  <br>";


echo "<h2>  For anidado mejorado </h2>";




for ($i=0; $i <4 ; $i++) { 
    
    echo "<fieldset> <legend> Numero de Fila: $i </legend>";
    echo " <ul>";

    for ($j=0; $j <3 ; $j++) { 
        echo "<li>" . $autos[$i][$j]. "</li> <br>";
    }

    echo "</ul>";
    echo "</fieldset>";

}








?>

</body>
</html>