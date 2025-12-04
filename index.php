<?php include_once "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include "templates/assets.php"; ?>

    <style>
        body {
            background-color: #f0f8ff;
            font-family: "Poppins", sans-serif;
        }

        .index table {
            border-collapse: collapse;
            width: 80%;
            margin: 50px auto;
            background: linear-gradient(to right, #b3e5fc, #e1f5fe);
            font-size: 20px;
            font-weight: bold;
            color: #0b72e7;
            text-align: center;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .index th,
        .index td {
            border: 3px solid rgba(15, 181, 241, 0.5);
            padding: 15px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        /* Efecto cuando pasas el mouse */
        .index td:hover,
        .index th:hover {
            background-color: #0e76ed;
            color: rgb(60, 230, 14);
            transform: scale(1.05);
            box-shadow: inset 0 0 10px rgba(221, 214, 214, 0.6);
        }

        .index a {
            color: inherit; 
        }

        /* Efecto cuando haces clic */
        .index td:active,
        .index th:active {
            background-color: #16e9f8;
            transform: scale(0.98);
        }

        .index a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php include "templates/header.php"; ?>
    <div class="container">
        <?php if($pdo): ?>
            <?php 
                $count = $pdo->query("SELECT COUNT(*) FROM public.users")->fetchColumn();
                echo "<h2>Total de usuarios: $count</h2>";
                $users = $pdo->query("SELECT * FROM public.users")->fetchAll(PDO::FETCH_ASSOC);
                echo "<pre>";
                print_r($users);
                echo "</pre>";
            ?>
        <?php else: ?>
            <h1>Intententolo mas tarde 🔄</h1>
            <a href="index.php">Intentar nuevamente</a>
        <?php endif; ?>
    </div>
    <?php include "templates/footer.php"; ?>
</body>
</html>