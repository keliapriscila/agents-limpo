<?php
declare(strict_types=1);

/**
 * Configuração geral da aplicação (constantes + leitura do .env).
 * Carregado por todas as páginas e endpoints.
 */

define('APP_RAIZ', dirname(__DIR__));

// Leitura simples do .env (sem dependências externas).
$caminho_env = APP_RAIZ . '/.env';
if (is_file($caminho_env)) {
    foreach (file($caminho_env, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $linha) {
        $linha = trim($linha);
        if ($linha === '' || str_starts_with($linha, '#') || !str_contains($linha, '=')) {
            continue;
        }
        [$chave, $valor] = explode('=', $linha, 2);
        $_ENV[trim($chave)] = trim($valor, " \t\"'");
    }
}

function env(string $chave, ?string $padrao = null): ?string
{
    $valor = $_ENV[$chave] ?? getenv($chave);
    if ($valor === false || $valor === null || $valor === '') {
        return $padrao;
    }
    return (string) $valor;
}

define('APP_NOME', env('APP_NOME', 'Kélia Priscila'));
define('APP_URL', env('APP_URL', 'http://localhost'));
define('APP_ENV', env('APP_ENV', 'local'));
define('APP_EMAIL', env('APP_EMAIL', 'keliapriscila@hotmail.com'));

date_default_timezone_set('America/Sao_Paulo');

if (APP_ENV === 'producao') {
    ini_set('display_errors', '0');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
}
