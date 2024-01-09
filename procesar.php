<?
$pngFILE = false;
$jpgFILE = false;
$jpgName = "FotoJPG";
$pngName = "FotoPNG";

$ficheros = [];
foreach ($_FILES as $key => $name) {
    if ($key == $jpgName || $key == $pngName ){
        foreach ($name as $key => $value) {
            if ($key == "type") {
                if ($value == "image/jpeg") {
                    $pngFILE = true;
                }
                if ($value == "image/png") {
                    $jpgFILE = true;
                }
            }
        }
    }
}

if ($pngFILE && $jpgFILE) {
    $carpeta= "SUBIRARCHIVOS/";
    opendir($carpeta);
    $destinoJPG = $carpeta.$_FILES[$jpgName]['name'];
    $destinoPNG = $carpeta.$_FILES[$pngName]['name'];
        
        copy($_FILES[$jpgName]['tmp_name'], $destinoJPG);
        copy($_FILES[$pngName]['tmp_name'], $destinoPNG);   
        //TODO comprobar tipos de errores

        if ($_FILES[$jpgName]["error"] == 0 && $_FILES[$pngName]["error"] == 0) { //subido de forma correcta

            echo "<p>Archivos subidos exitosamente</p>";

            $JPG=$carpeta.$_FILES[$jpgName]['name'];
            $pesoJPG=$_FILES[$jpgName]['size'];
            $tipoJPG=$_FILES[$jpgName]['type'];

            $PNG=$carpeta.$_FILES[$pngName]['name'];
            $pesoPNG=$_FILES[$pngName]['size'];
            $tipoPNG=$_FILES[$pngName]['type'];
        } else {
            echo "<p>error .$_FILES[$jpgName]['error']</p>";
            echo "<p>error .$_FILES[$pngName]['error']</p>";
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/procesar.css">
</head>
<body>
    <main>

<?php
    
    echo "<div>";
    echo "<fieldset>";
    echo "<img src='$PNG'>";
    echo "<p>El tipo de esta imagen es $tipoPNG</p>";
    echo "<p>El peso de esta imagen es $pesoPNG bytes</p>";
    echo "</fieldset>";
    echo "</div>";

    echo "<div>";
    echo "<fieldset>";
    echo "<img src='$JPG'>";
    echo "<p>El tipo de esta imagen es $tipoJPG</p>";
    echo "<p>El peso de esta imagen es $pesoJPG bytes</p>";
    echo "</fieldset>";
    echo "</div>";


} else {
    echo "<p>Ha habido un error</p>";
}

?>
    </div>
</body>
</html>