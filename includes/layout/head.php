<?php
declare(strict_types=1);

require_once __DIR__ . '/../../config/app.php';
require_once APP_RAIZ . '/includes/helpers.php';

$pagina_atual     = $pagina_atual ?? '';
$pagina_titulo    = $pagina_titulo ?? APP_NOME;
$pagina_descricao = $pagina_descricao ?? 'Desenvolvimento de sites profissionais e sistemas web sob medida.';

// Cache-busting por data de modificação dos assets.
$versao_css = @filemtime(APP_RAIZ . '/assets/css/main.css') ?: '1';
$versao_js  = @filemtime(APP_RAIZ . '/assets/js/app.js') ?: '1';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($pagina_titulo) ?></title>
    <meta name="description" content="<?= e($pagina_descricao) ?>">
    <meta name="theme-color" content="#2a2344">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($pagina_titulo) ?>">
    <meta property="og:description" content="<?= e($pagina_descricao) ?>">

    <link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/main.css?v=<?= e((string) $versao_css) ?>">

    <script defer src="assets/js/app.js?v=<?= e((string) $versao_js) ?>"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
