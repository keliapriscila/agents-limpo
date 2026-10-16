<?php
declare(strict_types=1);

require_once __DIR__ . '/app.php';

/**
 * Conexão PDO única (singleton por requisição).
 * Credenciais vêm do .env — nunca versionadas.
 */
function db(): PDO
{
    static $pdo = null;

    if ($pdo instanceof PDO) {
        return $pdo;
    }

    $dsn = sprintf(
        'mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4',
        env('DB_HOST', 'localhost'),
        env('DB_PORT', '3306'),
        env('DB_NOME', 'kelia_priscila')
    );

    $pdo = new PDO($dsn, env('DB_USUARIO', ''), env('DB_SENHA', ''), [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);

    return $pdo;
}
