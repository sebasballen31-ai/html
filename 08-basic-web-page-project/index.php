<!doctype html>
<html lang="en">
    <head>
        <title>Document</title>
        <?php include '../templates/assets.php'; ?>
    </head>
    <body>
        <?php include '../templates/header.php';?>
        <div onclick="alert('click en e div')">
            <button id="play">play</button>
            <button
                id="pause"
                onclick="event.stopPropagation(); alert('click en el boton pause')"
            >
                pause
            </button>
        </div>
        <script>
            const buttonPlay = document.getElementById("play");
            buttonPlay.addEventListener("click", e => {
                console.log(e);

                if (e.defaultPrevented) return;

                alert(
                    "otro evento play desde addEventListener " +
                        e.defaultPrevented,
                );
            });
            buttonPlay.addEventListener("click", e => {
                e.stopPropagation();
                e.preventDefault();
                alert("play desde addEventListener");
            });
        </script>
         <?php include '../templates/footer.php';?>
    </body>
</html>
