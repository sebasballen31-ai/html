<?php

$users = [
    [
        'name' => 'Sebas',
        'gender' => 'Masculino'
    ],
    [
        'name' => 'Daniela',
        'gender' => 'Fem'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= 'Nombre: ' . $users[0]['name'] ?>
    <?= 'Genero: ' . $users[0]['gender'] ?>
    <br>
    <?= 'Nombre: ' . $users[1]['name'] ?>
    <?= 'Genero: ' . $users[1]['gender'] ?>

    <?php foreach($users as $user): ?>
        <?= 'Nombre: ' . $user['name'] ?>
        <?= 'Genero: ' . $user['gender'] ?>
    <?php endforeach; ?>
</body>
</html>
