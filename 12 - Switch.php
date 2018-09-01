<!DOCTYPE html>
<html>
<head>
<title>12 - Switch</title>
</head>
<body>

<?php

// ejemplo de la estructura Switch en PHP:




$favcolor = "azul";

switch ($favcolor) {
    case "rojo":
        echo "El color es Rojo";
        break;
    case "azul":
        echo "El color es Azul";
        break;
    case "verde":
        echo "El color es Verde";
        break;
    default:
        echo "El color no es ni Rojo, ni Azul, Ni verde... será otro";
}
?>
 
</body>