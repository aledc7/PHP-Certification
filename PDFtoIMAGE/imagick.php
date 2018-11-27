


<!DOCTYPE html>
<html>
<head>
<title>pdf-to-image</title>
</head>
<body>


<?php


// Este códig transformará archivos PDF a imágenes de calidad.

// Solo se deberaá reemplazar $im->readimage('ale.pdf[0]')  reemplazando ale.pdf por el nombre y ruta del archivo pdf a transformar.
// luego la linea de $im->writeImage('archivo_de_salida.jpg')   será el nombre que tendrá la imagen creada.



// *******   DEPENDENCIAS   ************
/**
 * Para que imagick funcione pueda que en algunos casos deba tener las librerias y dependencias instaladas.
 *  en tal caso verificar la instalacion con este comando en la terminal
 *  'convert -version
 *  Verificar abriendo el php.info() que  "imagick" se encuentre enable
 * 
 *  INSTALAR EN UBUNTU:
 * sudo apt-get install php-imagick
 * 
 * INSTALAR EN CENTOS:
 * 
 * https://www.vultr.com/docs/install-imagemagick-on-centos-6
 * 
 * 
 */






$im = new imagick();
// baja resolucion 
//$im->setImageColorspace(255); 
$im->setResolution(300, 300);
$im->readimage('ale.pdf[0]');
$im->setImageResolution(300, 300);
$im->setImageBackgroundColor('#ffffff');
$im = $im->flattenImages();
$im->setImageFormat('jpeg');
$im->setImageCompression(imagick::COMPRESSION_JPEG);
$im->setImageCompressionQuality(100);
$im->resizeImage(1200, 0,  imagick::FILTER_LANCZOS, 1); 
$im->writeImage('archivo_de_salida.jpg'); 
$im->clear(); 
$im->destroy();





//  Otro un poco mas rebuscado con validaciones


// $file = 'ale.pdf';

// if($file === null && !file_exists($file)) {
//     throw new \Exception('FILE NOT EXISTS');
// }

// $nop = new \Imagick($file);

// for($i = 0; $i <= $nop->getnumberimages(); $i++) {
//     $image_file = 'e-magazine/1/'.($i+1).'.jpg';

//     $im = new \Imagick();

//     $im->readimage($file.'['.$i.']');
//     $im->setImageCompressionQuality(100);
//     $im->setimageformat('jpeg');
//     $im->resizeImage(1024, 0, \Imagick::FILTER_CATROM, 1);
//     $im->writeimage($image_file);

//     $tm = new \Imagick();
//     $tm->readimage($image_file);
//     $tm->setImageCompressionQuality(60);
//     $tm->setimageformat('jpeg');
//     $tm->resizeImage(200, 0, \Imagick::FILTER_CATROM, 1);
//     $tm->writeimage('e-magazine/1/thumbnails/'.($i+1).'_thumb.jpg');
// }


?>  

</body>
</html>



