<?php
declare(strict_types=1);

$pagina_atual     = 'sobre';
$pagina_titulo    = 'Sobre — Kélia Priscila';
$pagina_descricao = 'Kélia Priscila — profissional de tecnologia especializada em desenvolvimento de sites e sistemas web. Conheça a forma de trabalho e as especialidades.';

require __DIR__ . '/includes/layout/head.php';
require __DIR__ . '/includes/layout/header.php';
?>

<section class="container page-header">
    <h1 class="page-title">Sobre</h1>
    <p class="page-sub">Conheça a profissional e a forma de trabalho.</p>
</section>

<section class="section">
    <div class="container sobre-grid">
        <div class="card">
            <div class="card-body prosa">
                <p>Sou <strong>Kélia Priscila</strong>, profissional de tecnologia especializada no desenvolvimento de sites e sistemas web. Meu trabalho une design de interface, desenvolvimento de qualidade e atenção aos detalhes — do primeiro rascunho à publicação.</p>
                <p>Acredito que um bom site ou sistema precisa ser <strong>claro, rápido e fácil de usar</strong>. Por isso, cada projeto começa entendendo o objetivo do negócio e o público que será atendido, para depois definir a solução técnica mais adequada.</p>
                <p>Atuo de forma próxima durante todo o projeto: comunicação direta, etapas transparentes e entregas acompanhadas. Depois da publicação, sigo disponível para <strong>suporte, manutenção e evolução</strong> do que foi construído.</p>

                <ul class="valores">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <div><strong>Clareza</strong>Sem termos técnicos desnecessários — você entende cada etapa do projeto.</div>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <div><strong>Qualidade técnica</strong>Código limpo, seguro e performático, seguindo boas práticas de desenvolvimento.</div>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <div><strong>Compromisso</strong>Prazos combinados são prazos cumpridos, com acompanhamento próximo.</div>
                    </li>
                </ul>
            </div>
        </div>

        <aside class="aside-stack">
            <div class="card">
                <div class="card-body">
                    <h3>Especialidades</h3>
                    <div class="tecnologias">
                        <span class="badge">Desenvolvimento web</span>
                        <span class="badge">Interfaces (UI/UX)</span>
                        <span class="badge">Sistemas web</span>
                        <span class="badge">Banco de dados</span>
                        <span class="badge">Suporte e manutenção</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3>Tecnologias</h3>
                    <div class="tecnologias">
                        <span class="badge badge-outline">HTML5</span>
                        <span class="badge badge-outline">CSS3</span>
                        <span class="badge badge-outline">JavaScript</span>
                        <span class="badge badge-outline">Alpine.js</span>
                        <span class="badge badge-outline">PHP 8</span>
                        <span class="badge badge-outline">MySQL</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3>Vamos conversar?</h3>
                    <p class="card-text">Conte o que você precisa e receba uma resposta objetiva sobre o seu projeto.</p>
                    <a href="contato.php" class="btn btn-primary btn-sm">Solicitar orçamento</a>
                </div>
            </div>
        </aside>
    </div>
</section>

<?php require __DIR__ . '/includes/layout/footer.php'; ?>
