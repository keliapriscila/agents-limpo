<?php
declare(strict_types=1);

require_once __DIR__ . '/../config/app.php';

/**
 * Escapa texto para saída segura em HTML.
 */
function e(?string $valor): string
{
    return htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8');
}

/**
 * Resposta JSON padrão da API: { success, message, ...extras }.
 * Nunca expõe detalhes internos — apenas a mensagem recebida.
 */
function json_response(bool $sucesso, string $mensagem, int $status = 200, array $extras = []): void
{
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(
        ['success' => $sucesso, 'message' => $mensagem] + $extras,
        JSON_UNESCAPED_UNICODE
    );
    exit;
}

/**
 * Registra erro em arquivo de log (nunca exibido ao usuário final).
 */
function registrar_erro(string $contexto, Throwable $erro): void
{
    $dir = APP_RAIZ . '/storage/logs';
    if (!is_dir($dir)) {
        @mkdir($dir, 0775, true);
    }

    $linha = sprintf(
        "[%s] %s: %s em %s:%d\n",
        date('Y-m-d H:i:s'),
        $contexto,
        $erro->getMessage(),
        $erro->getFile(),
        $erro->getLine()
    );

    @file_put_contents($dir . '/app-' . date('Y-m-d') . '.log', $linha, FILE_APPEND | LOCK_EX);
}
