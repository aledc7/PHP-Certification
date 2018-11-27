## Transformar archivos PDF a Imagenes de alta calidad usando la libreria de PHP "imagick"

## How to transform PDF to Images using imagick Library


### Este códig transformará archivos PDF a imágenes de calidad.

Solo se deberaá reemplazar $im->readimage('ale.pdf[0]')  reemplazando ale.pdf por el nombre y ruta del archivo pdf a transformar.
Luego la linea de $im->writeImage('archivo_de_salida.jpg')   será el nombre que tendrá la imagen creada.



### DEPENDENCIAS

  Para que imagick funcione necesitaras tener las librerias y dependencias instaladas.
   En tal caso verificar la instalacion con este comando en la terminal.
   
   En windows la instalación puede ser bastante complicada pero en servidores es mas simple.
   ```
   'convert -version
   ```
   Verificar abriendo el php.info() que  "imagick" se encuentre enable
  
   INSTALAR EN UBUNTU:
   ```
  sudo apt-get install php-imagick
  ```
  INSTALAR EN CENTOS:
  
  https://www.vultr.com/docs/install-imagemagick-on-centos-6
  
 INSTALAR EN MAC
 ```
 brew install ImageMagick
 ```
 
 


CODIGO PROBADO FUNCIONANDO:


```javascript

# Configuración para máxima calidad.


<?php
$im = new imagick();
$im->setResolution(300, 300);
//reemplazar por la ruta correcta
$im->readimage('ale.pdf[0]');
$im->setImageResolution(300, 300);
$im->setImageBackgroundColor('#ffffff');
$im = $im->flattenImages();
$im->setImageFormat('jpeg');
$im->setImageCompression(imagick::COMPRESSION_JPEG);
$im->setImageCompressionQuality(100);
// verificar otras alternativas de filtros si quieres hilar fino.
$im->resizeImage(1200, 0,  imagick::FILTER_LANCZOS, 1); 
// setear el nombre del archivo de salida
$im->writeImage('archivo_de_salida.jpg'); 
$im->clear(); 
$im->destroy();

?>
```


###### Se adjunta el archivo .php completo probado y funcionando


