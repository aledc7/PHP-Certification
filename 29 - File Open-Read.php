<!DOCTYPE html>
<html>
<head><title>29 - File Open-Read</title>
</head>
<body>

<?php
/*
    la función fopen() es mucho mas completa que la anterior función que vimos readfile().
    fopen() recibe dos parámetros; el primero será el nombre del archivo que abrirá, y el segundo es en que forma lo abrirá.



*/

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);

echo "<br>";



/*
estos son todos los parámetros que pueen pasarse a la funcion fopen()  


r	= Open a file for read only. File pointer starts at the beginning of the file
w	= Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	= Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	= Creates a new file for write only. Returns FALSE and an error if file already exists
r+	= Open a file for read/write. File pointer starts at the beginning of the file
w+	= Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+	= Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	= Creates a new file for read/write. Returns FALSE and an error if file already exists

*/




$mi_archivo = fopen("texto_prueba2.txt", "r");

echo "el valor de la variable mi_archivo es:  $mi_archivo " ;

echo "<br>";

fclose($mi_archivo);


fread($myfile,filesize("webdictionary.txt"));


$myfile = fopen("texto_prueba3.txt", "r");
echo $myfile;
fclose($myfile);

echo "<br>";

$myfile = fopen("texto_prueba2.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);


echo "<br>";



$myfile = fopen("texto_prueba3.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);



?>

</body>
</html>