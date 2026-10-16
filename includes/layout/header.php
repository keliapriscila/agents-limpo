<?php
declare(strict_types=1);

$menu = [
    'inicio'   => ['rotulo' => 'Início',   'url' => 'index.php'],
    'servicos' => ['rotulo' => 'Serviços', 'url' => 'servicos.php'],
    'projetos' => ['rotulo' => 'Projetos', 'url' => 'projetos.php'],
    'sobre'    => ['rotulo' => 'Sobre',    'url' => 'sobre.php'],
    'contato'  => ['rotulo' => 'Contato',  'url' => 'contato.php'],
];
?>
<body class="pagina-<?= e($pagina_atual) ?>">
    <a class="skip-link" href="#conteudo">Pular para o conteúdo</a>

    <header class="site-header" x-data="{ aberto: false }"
            x-effect="document.body.classList.toggle('nav-aberto', aberto)"
            @keydown.escape.window="aberto = false">
        <div class="container site-header-inner">
            <a href="index.php" class="logo" aria-label="<?= e(APP_NOME) ?> — página inicial">
                <span class="logo-mark" aria-hidden="true">KP</span>
                <span><?= e(APP_NOME) ?></span>
            </a>

            <nav class="site-nav" id="menu-principal" :class="aberto && 'is-open'" aria-label="Navegação principal">
                <?php foreach ($menu as $chave => $item): ?>
                    <a class="nav-link<?= $pagina_atual === $chave ? ' is-active' : '' ?>"
                       href="<?= e($item['url']) ?>"
                       <?= $pagina_atual === $chave ? 'aria-current="page"' : '' ?>>
                        <?= e($item['rotulo']) ?>
                    </a>
                <?php endforeach; ?>
                <a href="contato.php" class="btn btn-primary btn-sm nav-cta" @click="aberto = false">Solicitar orçamento</a>
            </nav>

            <button type="button" class="menu-toggle" @click="aberto = !aberto"
                    :aria-expanded="aberto.toString()" aria-controls="menu-principal"
                    :aria-label="aberto ? 'Fechar menu' : 'Abrir menu'">
                <svg x-show="!aberto" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                <svg x-show="aberto" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>

        <div class="site-nav-overlay" :class="aberto && 'is-open'" @click="aberto = false" aria-hidden="true"></div>
    </header>

    <main id="conteudo">
