<?php
declare(strict_types=1);

$pagina_atual     = 'inicio';
$pagina_titulo    = 'Kélia Priscila — Desenvolvimento de sites e sistemas web';
$pagina_descricao = 'Sites profissionais, sistemas web sob medida, suporte e manutenção. Do design à entrega, com qualidade técnica e foco em resultado.';

require __DIR__ . '/includes/layout/head.php';
require __DIR__ . '/includes/layout/header.php';
?>

<section class="hero">
    <div class="container hero-content">
        <div>
            <span class="badge badge-accent">Sites • Sistemas web • Suporte</span>
            <h1 class="hero-title">Desenvolvimento de <span class="destaque">sites e sistemas web</span> para o seu negócio</h1>
            <p class="hero-sub">Projeto, desenvolvo e mantenho sites profissionais e sistemas web sob medida — da experiência do usuário ao código, com foco em clareza, performance e resultado.</p>
            <div class="hero-acoes">
                <a href="contato.php" class="btn btn-primary btn-sm">Solicitar orçamento</a>
                <a href="servicos.php" class="btn btn-outline btn-sm">Conhecer os serviços</a>
            </div>
        </div>

        <div class="hero-panel">
            <h3>Por que trabalhar comigo?</h3>
            <ul class="lista-check">
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span>Interfaces modernas, responsivas e fáceis de usar</span>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span>Código limpo, seguro e performático</span>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span>Comunicação clara em todas as etapas do projeto</span>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span>Suporte e evolução após a entrega</span>
                </li>
            </ul>
            <div class="hero-panel-meta">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                <span>Atendimento remoto para todo o Brasil</span>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header">
            <h2>O que eu faço</h2>
            <p class="page-sub">Soluções completas para presença digital e operação — do site institucional ao sistema sob medida.</p>
        </div>

        <div class="grid-cards cols-3">
            <article class="card card-hover">
                <div class="card-body">
                    <div class="card-icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                    </div>
                    <h3 class="card-title">Sites profissionais</h3>
                    <p class="card-text">Sites institucionais, portfólios e landing pages rápidas e responsivas, pensadas para apresentar seu trabalho e converter visitantes em contatos.</p>
                    <a href="servicos.php#sites" class="card-link">
                        Saiba mais
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </article>

            <article class="card card-hover">
                <div class="card-body">
                    <div class="card-icon is-accent" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
                    </div>
                    <h3 class="card-title">Sistemas web sob medida</h3>
                    <p class="card-text">Sistemas com painéis administrativos, cadastros, relatórios e integração com banco de dados — modelados para a rotina do seu negócio.</p>
                    <a href="servicos.php#sistemas" class="card-link">
                        Saiba mais
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </article>

            <article class="card card-hover">
                <div class="card-body">
                    <div class="card-icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                    </div>
                    <h3 class="card-title">Suporte e manutenção</h3>
                    <p class="card-text">Manutenção contínua, correções, melhorias de performance e evolução do seu site ou sistema, com acompanhamento próximo.</p>
                    <a href="servicos.php#suporte" class="card-link">
                        Saiba mais
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="section faixa">
    <div class="container">
        <div class="section-header">
            <h2>Como funciona</h2>
            <p class="page-sub">Um processo simples e transparente, do primeiro contato à entrega.</p>
        </div>

        <ol class="processo">
            <li class="passo">
                <span class="passo-numero">01</span>
                <h3>Briefing</h3>
                <p>Conversamos sobre o objetivo, o público e o que o projeto precisa resolver.</p>
            </li>
            <li class="passo">
                <span class="passo-numero">02</span>
                <h3>Design</h3>
                <p>Defino a interface com foco em clareza, usabilidade e identidade visual.</p>
            </li>
            <li class="passo">
                <span class="passo-numero">03</span>
                <h3>Desenvolvimento</h3>
                <p>Implemento com código limpo, seguro e otimizado para carregar rápido.</p>
            </li>
            <li class="passo">
                <span class="passo-numero">04</span>
                <h3>Entrega e suporte</h3>
                <p>Publico o projeto e permaneço disponível para evoluções e manutenção.</p>
            </li>
        </ol>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cta-band">
            <h2>Tem um projeto em mente?</h2>
            <p>Conte o que você precisa e receba uma resposta objetiva sobre prazo, escopo e investimento.</p>
            <a href="contato.php" class="btn btn-light btn-sm">Solicitar orçamento</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout/footer.php'; ?>
