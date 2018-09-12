<!DOCTYPE html>
<html>
<head><Title>31 - File Upload</Title></head>
<body>

<!-- Primeramente este capítulo avisa que es necesario habilitar la carda de archivos en la configuración del php.ini
y setear: 

file_uploads = On 

Luego se crea un formulario en html en el que se trabajará para subir archivos mediante php.

Este formulario tiene que enviar los datos por POST, y necesita el siguiente atributo:  enctype="multipart/form-data"
Ese atributo especifica el tipo de contenido a enviar

-->



<form action="31-upload.php" method="post" enctype="multipart/form-data">
    Seleccione archivo:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="cargar" name="submit">
</form>

</body>
</html>