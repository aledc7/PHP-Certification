<head><Title>31 - File Upload</Title></head>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

// compruebo que el formulario venga por POST
if(isset($_POST["submit"])) {
    
    // comprueba el tamaño de la imágen
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    // si la cadena de arriba es true
    if($check !== false) {
        echo " El archivo es una imágen - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo " El archivo no es una imágen";
        $uploadOk = 0;
    }
}
// Checkea si el archivo existe
if (file_exists($target_file)) {
    echo " El archivo que estas subiendo ya existe";
    $uploadOk = 0;
}
// Checkeo el tamaño máximo del archivo, donde un millon, será un 1MB (1000000)
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo " El archivo no debe exceder los 5 MB.";
    $uploadOk = 0;
}
// Permito solo formatos de imágen
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo " Solo se admiten formatos del tipo: JPG, JPEG, PNG y GIF .";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo " No se ha subido ningún archivo.";

// Recien en este punto, si todo fue bien, se subirá el archivo.
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo " El Archivo". basename( $_FILES["fileToUpload"]["name"]). " Se subió correctamente.";
    } else {
        echo " ERROR al subir el archivo.";
    }
}
?>