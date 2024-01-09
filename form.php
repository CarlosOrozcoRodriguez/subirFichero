<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>
    <main>
        <fieldset class="bordes">
            <legend >Sube dos imágenes, una JPG y otra PNG</legend>
            <form action="procesar.php" method="post" enctype="multipart/form-data">
                <p>
                    <label for="foto1" class="custom-file-upload bordes">
                        Fichero 1
                        <input type="file" name="FotoPNG" id="foto1">
                    </label>
                </p>
                <p>
                    <label for="foto2" class="custom-file-upload bordes">
                        Fichero 2
                        <input type="file" name="FotoJPG" id="foto2">
                    </label>
                </p>
                <p>
                    <input type="submit" value="GO">
                </p>
            </form>
        </fieldset>
    </main>
</body>
</html>