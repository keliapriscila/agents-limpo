<?php
declare(strict_types=1);

$pagina_atual     = 'projetos';
$pagina_titulo    = 'Projetos — Kélia Priscila';
$pagina_descricao = 'Projetos profissionais e trabalhos acadêmicos em desenvolvimento web: sites, landing pages, sistemas web e manutenção.';

require __DIR__ . '/includes/layout/head.php';
require __DIR__ . '/includes/layout/header.php';

$projetos = [
    [
        'tipo'      => 'Site',
        'titulo'    => 'Site institucional',
        'descricao' => 'Estrutura moderna para apresentar serviços e fortalecer a presença digital, com foco em clareza e conversão.',
        'tags'      => ['HTML', 'CSS', 'JavaScript', 'PHP'],
        'icone'     => 'layout',
    ],
    [
        'tipo'      => 'Site',
        'titulo'    => 'Landing page',
        'descricao' => 'Página única pensada para campanhas e captação de contatos, com chamada para ação direta e carregamento rápido.',
        'tags'      => ['UI/UX', 'SEO', 'Performance'],
        'icone'     => 'zap',
    ],
    [
        'tipo'      => 'Sistema',
        'titulo'    => 'Sistema de gestão',
        'descricao' => 'Painel administrativo com cadastros, controle de registros, filtros e relatórios para a rotina do negócio.',
        'tags'      => ['PHP', 'MySQL', 'Alpine.js'],
        'icone'     => 'server',
    ],
    [
        'tipo'      => 'Sistema',
        'titulo'    => 'Portal de conteúdo',
        'descricao' => 'Área administrativa para publicação, organização e consulta de conteúdos e materiais.',
        'tags'      => ['PHP', 'MySQL', 'UX'],
        'icone'     => 'book',
    ],
    [
        'tipo'      => 'Sistema',
        'titulo'    => 'Automação de processos',
        'descricao' => 'Fluxos internos e integrações para reduzir tarefas manuais e centralizar informações.',
        'tags'      => ['PHP', 'APIs', 'Banco de dados'],
        'icone'     => 'code',
    ],
    [
        'tipo'      => 'Manutenção',
        'titulo'    => 'Suporte e evolução',
        'descricao' => 'Manutenção contínua, correções e melhorias de performance e segurança em sites e sistemas existentes.',
        'tags'      => ['Performance', 'Segurança', 'Backup'],
        'icone'     => 'shield',
    ],
];

$icones = [
    'layout' => '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line>',
    'zap'    => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>',
    'server' => '<rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line>',
    'book'   => '<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>',
    'code'   => '<polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline>',
    'shield' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>',
];

// Textos pesquisáveis de cada projeto (índice alinhado ao loop da listagem).
$busca_textos = array_map(
    static fn(array $projeto): string => mb_strtolower(
        $projeto['titulo'] . ' ' . $projeto['descricao'] . ' ' . $projeto['tipo'] . ' ' . implode(' ', $projeto['tags'])
    ),
    $projetos
);
?>

<section class="container page-header">
    <h1 class="page-title">Projetos</h1>
    <p class="page-sub">Uma seleção de frentes de trabalho que desenvolvo. Os estudos de caso completos serão publicados conforme forem concluídos.</p>
</section>

<section class="section" x-data="{ aba: 'profissionais' }">
    <div class="container">
        <div class="tabs mt-24" role="tablist" aria-label="Categorias de projetos">
            <button type="button" class="tab" role="tab" id="aba-profissionais"
                    :class="aba === 'profissionais' && 'is-active'"
                    :aria-selected="(aba === 'profissionais').toString()"
                    aria-controls="painel-profissionais"
                    @click="aba = 'profissionais'">Projetos profissionais</button>
            <button type="button" class="tab" role="tab" id="aba-academicos"
                    :class="aba === 'academicos' && 'is-active'"
                    :aria-selected="(aba === 'academicos').toString()"
                    aria-controls="painel-academicos"
                    @click="aba = 'academicos'">Trabalhos acadêmicos</button>
        </div>

        <div id="painel-profissionais" role="tabpanel" aria-labelledby="aba-profissionais"
             x-show="aba === 'profissionais'"
             x-data='buscaLista(<?= e(json_encode($busca_textos, JSON_UNESCAPED_UNICODE)) ?>)'>
            <div class="barra-lista mt-32">
                <div class="search-inline">
                    <svg class="search-inline-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <input type="text" class="form-input" placeholder="Buscar projeto" x-model="busca" aria-label="Buscar projeto">
                    <button type="button" class="search-clear" title="Limpar busca" x-show="busca" x-cloak @click="busca = ''">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
            </div>

            <div class="grid-cards cols-3 mt-24">
                <?php foreach ($projetos as $indice_projeto => $projeto): ?>
                <article class="card card-hover projeto-card" x-show="visivel(<?= (int) $indice_projeto ?>)">
                    <div class="projeto-capa" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><?= $icones[$projeto['icone']] ?></svg>
                    </div>
                    <div class="projeto-body">
                        <span class="badge badge-accent"><?= e($projeto['tipo']) ?></span>
                        <h3 class="card-title"><?= e($projeto['titulo']) ?></h3>
                        <p class="card-text"><?= e($projeto['descricao']) ?></p>
                        <div class="tags">
                            <?php foreach ($projeto['tags'] as $tag): ?>
                                <span class="badge badge-outline"><?= e($tag) ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>

            <div class="card estado-vazio mt-24" x-show="semResultados" x-cloak>
                <div class="card-icon is-accent" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
                <h3 class="card-title">Nenhum projeto encontrado</h3>
                <p>Não encontrei projetos para essa busca. Tente outras palavras.</p>
                <button type="button" class="btn btn-outline btn-sm" @click="busca = ''">Limpar busca</button>
            </div>
        </div>

        <div id="painel-academicos" role="tabpanel" aria-labelledby="aba-academicos"
             x-show="aba === 'academicos'" x-cloak class="mt-32">
            <div class="card estado-vazio">
                <div class="card-icon is-accent" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                </div>
                <h3 class="card-title">Produção acadêmica em breve</h3>
                <p>Trabalhos acadêmicos e de pesquisa serão publicados aqui conforme forem concluídos. Quer conversar sobre algum tema?</p>
                <a href="contato.php" class="btn btn-primary btn-sm">Entrar em contato</a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cta-band">
            <h2>Quer ver seu projeto nesta página?</h2>
            <p>Vamos conversar sobre o que você precisa e transformar a ideia em um site ou sistema pronto para uso.</p>
            <a href="contato.php" class="btn btn-light btn-sm">Solicitar orçamento</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout/footer.php'; ?>
