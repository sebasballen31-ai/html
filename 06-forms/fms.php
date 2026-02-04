<?php include_once "../db.php"; ?>
<?php

if ($pdo) {
    $users = $pdo->query("SELECT * FROM public.users")->fetchAll(PDO::FETCH_ASSOC);
} else {
    $users = [];
}
$i = 1;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>formularios</title>
        <?php include "../templates/assets.php"; ?>
    </head>

    <body>
        <?php include "../templates/header.php"; ?>
        <div class="container mb-4">
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
                <button type="submit" class="btn btn-sm btn-primary w-50">
                    Enviar
                </button>
            </form>
        </div>
        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['email'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
         <?php include "../templates/footer.php"; ?>
    </body>
</html>
