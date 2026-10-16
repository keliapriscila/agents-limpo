<?php
declare(strict_types=1);

/**
 * POST /api/contato.php — recebe leads do formulário de contato.
 * Regras de negócio aplicadas no backend (validação espelhada no frontend apenas como UX).
 */

require_once __DIR__ . '/../config/app.php';
require_once __DIR__ . '/../config/database.php';
require_once APP_RAIZ . '/includes/helpers.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_response(false, 'Método não permitido.', 405);
}

/** Lê um campo de texto do POST (nunca confia em arrays ou tipos inesperados). */
function campo_post(string $chave): string
{
    $valor = $_POST[$chave] ?? '';
    return is_string($valor) ? trim($valor) : '';
}

// Honeypot: bots preenchem o campo oculto — resposta silenciosa de sucesso.
if (campo_post('site') !== '') {
    json_response(true, 'Mensagem recebida.', 200);
}

$nome     = campo_post('nome');
$email    = campo_post('email');
$telefone = campo_post('telefone');
$tipo     = campo_post('tipo');
$mensagem = campo_post('mensagem');

$tipos_validos = ['site' => 'Site profissional', 'sistema' => 'Sistema web', 'suporte' => 'Suporte e manutenção', 'outro' => 'Outro'];

$erros = [];

if (mb_strlen($nome) < 2 || mb_strlen($nome) > 120) {
    $erros['nome'] = 'Informe seu nome (entre 2 e 120 caracteres).';
}

if ($email === '' || mb_strlen($email) > 160 || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $erros['email'] = 'Informe um e-mail válido.';
}

if ($telefone !== '') {
    $digitos = preg_replace('/\D/', '', $telefone);
    if (strlen((string) $digitos) < 8 || strlen((string) $digitos) > 13) {
        $erros['telefone'] = 'Informe um telefone válido com DDD.';
    }
}

if (!array_key_exists($tipo, $tipos_validos)) {
    $erros['tipo'] = 'Selecione o tipo de projeto.';
}

$tamanho_mensagem = mb_strlen($mensagem);
if ($tamanho_mensagem < 10 || $tamanho_mensagem > 2000) {
    $erros['mensagem'] = 'Descreva seu projeto com pelo menos 10 caracteres.';
}

if ($erros !== []) {
    json_response(false, 'Verifique os campos destacados e tente novamente.', 422, ['erros' => $erros]);
}

try {
    $sql = 'INSERT INTO contatos (nome, email, telefone, tipo_projeto, mensagem) VALUES (?, ?, ?, ?, ?)';
    $stmt = db()->prepare($sql);
    $stmt->execute([
        $nome,
        $email,
        $telefone !== '' ? $telefone : null,
        $tipo,
        $mensagem,
    ]);
} catch (Throwable $erro) {
    registrar_erro('api/contato', $erro);
    json_response(false, 'Não foi possível enviar sua mensagem agora. Tente novamente em instantes.', 500);
}

json_response(true, 'Mensagem enviada com sucesso. Entrarei em contato em breve.', 201);
