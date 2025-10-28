<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Documento Base</title>
        <?php include '../templates/assets.php'; ?>

    </head>
    <body>
        <?php include '../templates/header.php';?>

        <div style="display: flex; flex-direction: column; align-items: center">
            <h1 id="letra">Imagenes muchas pro</h1>
            <script src="cancion.js"></script>
            <img src="" alt="Un perro jugando en el pasto" width="1000" />
            <img
                src="gato.webp"
                alt="Un gato durmiendo en el sofá"
                width="300"
            />

            <audio controls>
                <source src="musica.mp3" type="audio/mpeg" />
                <source src="musica.ogg" type="audio/ogg" />
                Tu navegador no soporta audio.
            </audio>

            <video width="400" controls>
                <source src="video.mp4" type="video/mp4" />
                <source src="video.ogg" type="video/ogg" />
                Tu navegador no soporta video.
            </video>
        </div>
    </body>
</html>
