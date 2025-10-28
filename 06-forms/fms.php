<!DOCTYPE html>
<html lang="en">
    <head>
        <title>formularios</title>
        <?php include '../templates/assets.php'; ?>

    </head>

    <body>
        <?php include '../templates/header.php';?>

        <div class="container">
            <form action="/procesar" method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        class="form-control"
                    />
                    <div id="passwordHelpBlock" class="form-text">
                        El nombre debe tener entre 3 y 50 caracteres.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo:</label>
                    <input
                        type="email"
                        id="email"
                        name="correo"
                        class="form-control"
                    />
                </div>
                <button type="button" class="btn btn-sm btn-primary w-50">
                    Enviar
                </button>
            </form>
            <form action="/procesar" method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        class="form-control"
                    />
                    <div id="passwordHelpBlock" class="form-text">
                        El nombre debe tener entre 3 y 50 caracteres.
                    </div>
                </div>
                Contraseña:
                <input type="password" name="clave" class="form-control" />

                Género:
                <input type="radio" name="genero" value="M" />
                Masculino
                <input type="radio" name="genero" value="F" />
                Femenino Intereses:
                <input type="checkbox" name="deporte" />
                Deporte
                <input type="checkbox" name="musica" />
                Música <br />
                <button type="submit">Registrar</button>
            </form>

            <textarea name="hola" rows="4" cols="20"></textarea>

            <div class="mb-3">
                <label for="ciudad" class="form-select">Ciudad:</label>
                <select name="ciudad">
                    <option value="1">Bogotá</option>
                    <option value="2">Medellín</option>
                    <option value="3">Cali</option>
                </select>

                <select
                    class="form-select"
                    multiple
                    aria-label="Multiple select example"
                >
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
    </body>
</html>
