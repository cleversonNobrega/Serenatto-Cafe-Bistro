<?php

$envFile = __DIR__ . '/../.env';

if (!is_readable($envFile)) {
    die('Arquivo .env não encontrado. Copie o .env.example para .env e preencha os valores.');
}

$env = [];
foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $linha) {
    $linha = trim($linha);
    if ($linha === '' || $linha[0] === '#' || !str_contains($linha, '=')) {
        continue;
    }
    [$chave, $valor] = explode('=', $linha, 2);
    $env[trim($chave)] = trim($valor, " \t\"'");
}

$pdo = new PDO(
    'mysql:host=localhost;dbname=' . $env['DB_NAME'],
    $env['DB_USER'],
    $env['DB_PASSWORD']
);
