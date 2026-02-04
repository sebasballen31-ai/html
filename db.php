<?php

$file = __DIR__ . '/.env';
if (!file_exists($file)) {
    die('El archivo .env no existe');
}

$env = parse_ini_file($file);

$host = $env['DB_HOST'];
$port = $env['DB_PORT'];
$db   = $env['DB_NAME'];
$user = $env['DB_USER'];
$pass = $env['DB_PASS'];

$dsn = "pgsql:host=$host;port=$port;dbname=$db;sslmode=require";
$pdo = null;
try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_TIMEOUT => 5 // Timeout de 5 segundos
    ]);
    // Si deseas probar la conexión, puedes ejecutar una consulta simple
    // $pdo->query("SELECT 1");
} catch (PDOException $e) {
    //
}
?>