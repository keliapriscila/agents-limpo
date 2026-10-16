# Memória do Projeto

> Este arquivo registra as decisões **permanentes** do projeto (tecnologias, arquitetura, estrutura e convenções). Atualize-o apenas quando houver mudanças duradouras.

## Tecnologias

- PHP 8.x (puro, sem frameworks)
- MySQL / PDO
- Alpine.js via CDN (reatividade no frontend)
- CSS3 com variáveis nativas
- Libs via CDN (se necessário): Chart.js (gráficos)

Sem build step. Sem Node.js em produção.

---

## Estrutura

> Estrutura inicial criada em 15/10/2026 (site institucional público — sem área autenticada).

/
├── index.php            # Página inicial (hero, serviços, processo, CTA)
├── servicos.php         # Detalhe dos serviços (sites, sistemas, suporte)
├── projetos.php         # Projetos profissionais + trabalhos acadêmicos (tabs Alpine.js)
├── sobre.php            # Sobre a profissional
├── contato.php          # Formulário de lead (principal conversão)
├── api/
│   └── contato.php      # POST — validação no backend + gravação do lead (JSON)
├── config/
│   ├── app.php          # Constantes + leitura do .env (APP_NOME, APP_URL, APP_ENV, APP_EMAIL)
│   ├── database.php     # Conexão PDO (singleton db())
│   └── database.sql     # Schema do banco de dados
├── includes/
│   ├── layout/
│   │   ├── head.php     # <!DOCTYPE>, <head>, meta, fontes, CSS e Alpine.js CDN (cache-busting por filemtime nos assets)
│   │   ├── header.php   # Abertura do <body> + header fixo (logo, nav, CTA) + drawer mobile
│   │   └── footer.php   # Footer + fechamento HTML
│   └── helpers.php      # Escapamento (e), JSON response padrão e logs de erro
├── assets/
│   ├── css/main.css     # Estilos globais + variáveis CSS (identidade)
│   ├── js/app.js        # Alpine.data: componente do formulário de contato
│   └── img/             # Favicon e imagens
├── storage/
│   └── logs/            # Logs de erros da aplicação
├── .htaccess            # Proteção de pastas + headers de segurança
├── .env.example         # Modelo das credenciais (copiar para .env — não versionado)
└── agents/              # Documentação do projeto (bloqueada no .htaccess)

---

## Arquitetura

Princípios gerais (adaptar à stack escolhida):

- Separar responsabilidades: apresentação, regra de negócio e acesso a dados em camadas claras.
- Centralizar configuração; credenciais e variáveis de ambiente fora do código versionado.
- Regras de negócio aplicadas no backend — nunca apenas no cliente.
- Reutilizar código; extrair helpers e componentes compartilhados.
- Manter este arquivo sincronizado com o código.
- Um único servidor (Apache) serve tudo.

Segurança: sessões, proteção CSRF, hash de senhas e tratamento de erros seguem as diretrizes de `seguranca.md`.

---

## Design e UI/UX

Inspirado em dashboards modernos e limpos (ex.: Vercel, Linear, Stripe), otimizado para produtividade, densidade de informação e leitura de tabelas de dados. Elementos visuais, componentes, paleta de cores e variáveis CSS definidos em `frontend.md`.

---

## Tipografia

Família, pesos, escala, fallback e regras de uso definidos em `frontend.md`.

---

## Responsividade e Acessibilidade

- Otimizado para Desktop (foco operacional), com suporte total a Tablets e Mobile.
- Detalhes e regras em `frontend.md`.

---

## Regras de Formatação

- Datas: padrão dd/mm/yyyy (ex: 25/07/2026) em todo o sistema.

---

## Performance

- Evitar JavaScript desnecessário.
- Priorizar animações em CSS.
- Evitar repetição de código.
- Carregamento rápido.

---

## Funcionalidades

- Recursos de interface e microinterações definidos em `frontend.md`.
- Recursos adicionais podem ser implementados desde que mantenham a qualidade visual e a performance.
