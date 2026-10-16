<?php
declare(strict_types=1);

$pagina_atual     = 'servicos';
$pagina_titulo    = 'Serviços — Kélia Priscila';
$pagina_descricao = 'Sites profissionais, sistemas web sob medida, suporte e manutenção. Conheça os serviços e o que cada projeto entrega.';

require __DIR__ . '/includes/layout/head.php';
require __DIR__ . '/includes/layout/header.php';
?>

<section class="container page-header">
    <h1 class="page-title">Serviços</h1>
    <p class="page-sub">Soluções para presença digital e operação: sites profissionais, sistemas web sob medida e suporte contínuo.</p>
</section>

<section class="section">
    <div class="container">

        <article id="sites" class="card servico-detalhe">
            <div>
                <div class="card-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                </div>
                <h2>Sites profissionais</h2>
                <p class="mt-24">Sites institucionais, portfólios e landing pages com design moderno, carregamento rápido e estrutura pensada para conversão. Ideais para profissionais autônomos, negócios locais e empresas que precisam de presença digital sólida.</p>
            </div>
            <div class="servico-colunas">
                <div>
                    <h3>O que está incluído</h3>
                    <ul class="lista-check">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Design responsivo (desktop, tablet e mobile)</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Páginas institucionais e de contato</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Otimização de performance e SEO básico</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Publicação, domínio e e-mail de contato</li>
                    </ul>
                </div>
                <div>
                    <h3>Ideal para</h3>
                    <ul class="lista-check">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Divulgar serviços e captar clientes</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Construir autoridade profissional</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Apresentar portfólio de trabalhos</li>
                    </ul>
                    <a href="contato.php" class="btn btn-primary btn-sm mt-24">Solicitar orçamento</a>
                </div>
            </div>
        </article>

        <article id="sistemas" class="card servico-detalhe">
            <div>
                <div class="card-icon is-accent" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
                </div>
                <h2>Sistemas web sob medida</h2>
                <p class="mt-24">Sistemas web criados para a rotina do seu negócio: cadastros, painéis administrativos, relatórios e fluxos internos. Cada sistema é modelado com base nas suas regras de operação — sem adaptações forçadas.</p>
            </div>
            <div class="servico-colunas">
                <div>
                    <h3>O que está incluído</h3>
                    <ul class="lista-check">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Painel administrativo completo</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Cadastros com validação e regras de negócio</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Relatórios e consultas filtradas</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Autenticação e perfis de acesso</li>
                    </ul>
                </div>
                <div>
                    <h3>Ideal para</h3>
                    <ul class="lista-check">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Substituir planilhas por um sistema</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Organizar processos internos</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Ganhar visibilidade com relatórios</li>
                    </ul>
                    <a href="contato.php" class="btn btn-primary btn-sm mt-24">Solicitar orçamento</a>
                </div>
            </div>
        </article>

        <article id="suporte" class="card servico-detalhe">
            <div>
                <div class="card-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                </div>
                <h2>Suporte e manutenção</h2>
                <p class="mt-24">Manutenção contínua para seu site ou sistema: correções, atualizações, melhorias de performance e novas funcionalidades conforme a necessidade do negócio.</p>
            </div>
            <div class="servico-colunas">
                <div>
                    <h3>O que está incluído</h3>
                    <ul class="lista-check">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Correções e ajustes sob demanda</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Melhorias de performance e segurança</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Atualizações e backup</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Novas funcionalidades por demanda</li>
                    </ul>
                </div>
                <div>
                    <h3>Ideal para</h3>
                    <ul class="lista-check">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Sites e sistemas já em produção</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Sistemas lentos ou desatualizados</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Evolução contínua do projeto</li>
                    </ul>
                    <a href="contato.php" class="btn btn-primary btn-sm mt-24">Solicitar orçamento</a>
                </div>
            </div>
        </article>

    </div>
</section>

<section class="section faixa">
    <div class="container">
        <div class="section-header">
            <h2>Tecnologias que utilizo</h2>
            <p class="page-sub">Stack moderna, sem excesso de dependências — priorizando velocidade, segurança e manutenibilidade.</p>
        </div>
        <div class="tecnologias">
            <span class="badge badge-outline">HTML5</span>
            <span class="badge badge-outline">CSS3</span>
            <span class="badge badge-outline">JavaScript</span>
            <span class="badge badge-outline">Alpine.js</span>
            <span class="badge badge-outline">PHP 8</span>
            <span class="badge badge-outline">MySQL</span>
            <span class="badge badge-outline">UI/UX</span>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cta-band">
            <h2>Não sabe qual serviço precisa?</h2>
            <p>Descreva sua necessidade e eu indico o melhor caminho, com transparência sobre escopo e investimento.</p>
            <a href="contato.php" class="btn btn-light btn-sm">Solicitar orçamento</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout/footer.php'; ?>
