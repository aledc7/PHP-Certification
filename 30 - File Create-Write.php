<!DOCTYPE html>
<html lang="en">
<head>
    <title>30 - File Create-Write</title>
</head>
<body>


<?php

/**
 *  Este ejemplo creará un archivo de texto llamado "newfile.txt
 */

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);




//aca sobreescribe el archivo newfile.txt pisando los datos que tenía

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);


// por último, existem muchisimas funciones para hacer todo tipo se operaciones manipulando los archivos del filesystem.




?>

    
</body>
</html>