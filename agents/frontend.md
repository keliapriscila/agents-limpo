# Front-end

- Toda interface deve transmitir qualidade profissional.
- Evite aparência genérica.

---

## Stack

**Alpine.js (CDN)** | Padrão — reatividade leve, sem build, ideal com PHP 

---

## Design

Priorizar interfaces inspiradas em:

- Linear
- Vercel
- Raycast
- Stripe
- Framer

Nunca copiar layouts.
Criar identidade própria.

---

## Tipografia

Família principal:

- **Inter** (Google Fonts), pesos carregados: 400, 500, 600 e 700.
- Fallback: `-apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif`.

Corpo:

- 14px com line-height 1.6.

Títulos (h1–h4):

| Nível | Uso | Tamanho | Peso | Cor | Line-height |
|---|---|---|---|---|---|
| `h1` | Título de página (`.page-title`) | 24px | 600 | `--text-main` (#111827) | 1.3 |
| `h2` | Título de seção (novo — não utilizado ainda) | 20px | 600 | `--text-main` (#111827) | 1.35 |
| `h3` | Título de card / tabela (`.card-title`, `.chart-card-title`, `.dashboard-table-title`) | 16px | 600 | `--text-main` (#111827) | 1.4 |
| `h4` | Subtítulo / metadados (padrão `.alert-card-header`) | 13px | 600 | `--text-tertiary` (#6b7280) | 1.4 |

Regras:

- `h1` é o único nível em 24px+ — reservado a títulos de página.
- `h2` fica disponível para futuras seções internas.
- Cores sempre via variáveis CSS (`--text-main`, `--text-tertiary`), nunca hex inline.
- Não utilizar níveis abaixo de `h4` — corpo é 14px e a hierarquia termina aí.
- Carregar apenas os pesos utilizados.
- Escala consistente e hierarquia clara.

Escala em uso:

- Valores de destaque (KPIs, stats): 28–32px / 700.
- Tabela: 14px (cabeçalho 13px / 500).
- Labels e metadados: 13px / 500 (badges 12px).

Mobile:

- `font-size: 16px` em inputs e textareas (evita zoom no iOS).


---

## Cores

Paleta do projeto com variáveis CSS nativas (definidas em assets/css/main.css):

```css
:root {
  --bg-main: #f3f4f6;
  --bg-card: #ffffff;
  --color-brand: #2a2344;
  --color-brand-light: #070743;
  --color-brand-dark: #3ca2a2;
  --text-main: #111827;
  --text-muted: #4b5563;
  --text-tertiary: #6b7280;
  --border-color: #e5e7eb;
  --status-success: #16a34a;
  --status-error: #dc2626;
  --status-warning: #f59e0b;
}
```

Princípios gerais:

- Paletas modernas. Evitar cores saturadas.
- Cores sempre via variáveis CSS (ex.: `--bg-main`, `--color-brand`, `--text-main`, `--status-error`), nunca hex inline.

---

## Layout

Minimalista.
Boa hierarquia.
Cards.
Glassmorphism quando fizer sentido.
Gradientes sutis.
Sombras discretas.
Bordas suaves.
Blur.
Microinterações.

---

## UX

Sempre destacar:

- ação principal
- leitura fácil
- poucos cliques

---

## Componentes

Princípios gerais:

- Criar componentes reutilizáveis. Evitar estilos inline.
- Padronizar botões, modais, formulários e feedback ao usuário (validação, confirmação de exclusão, toasts).

Componentes:

- Tabs (Alpine.js) — navegação entre seções
- Cards (Alpine.js) — exibição de informações agrupadas
- Modais (Alpine.js) — confirmação de ações, formulários
- Tabelas (Alpine.js) — exibição de dados tabulares, com paginação e ordenação
- Lista de documentos (Alpine.js) — exibição com filtros e ações
- Badges - status, categorias, tags
- Botões de ação - ícones para visualizar/editar/excluir; `.btn-icon`, `.btn-icon-danger`, `.btn-icon-brand`
- Modal de confirmação de exclusão — modal separado do CRUD, com ícone de perigo, mensagem específica por entidade e descrição de impacto em cascata (`.modal-confirm`, `.btn-danger`)
- Alerta de validação de formulário — abrem modal centralizado (`.modal-overlay-confirm` + `.modal-confirm`) com mensagens de erro, campos obrigatórios, feedback visual (`.alert-card`, `.alert-card-header`, `.alert-card-body`)
- Modal wide - variante do modal com `max-width: 900px`
- Fechamento de modal — os modais fecham apenas pelo "x" (`.modal-close`) ou pelo botão Cancelar do rodapé; clique fora e ESC não fecham (overlay sem `@click.self` nem `@keydown.escape.window`). Modais de confirmação de exclusão fecham pelos botões e por clique fora/ESC (`@click.self` + `@keydown.escape.window`)
- Drawer mobile — abaixo de 768px a sidebar vira painel deslizante à direita acionado pelo hamburger fixo no topo-esquerdo, com overlay (`.sidebar-open .sidebar`, `.sidebar-overlay`, `.menu-toggle`).

---

## Botões

Tamanho único e obrigatório: `btn-sm`. Todo botão textual do sistema usa `btn-sm` — não usar botão textual sem `btn-sm`. Exceções: `.btn-icon`, `.btn-icon-danger`, `.btn-icon-brand`, `.modal-close`, `.sidebar-toggle`, `.menu-toggle` e `.combobox-clear`/`.search-clear` são icon-only e não usam `btn-sm` por serem 32×32/40×40.

## Rodapé de modal / formulário

- Tamanho: sempre `btn-sm` para não destoar dentro do modal.
- Ação secundária ("Cancelar", "Voltar"): `btn btn-ghost btn-sm` — transparente, texto `--text-muted`, hover com fundo `--bg-main`.
- Ação primária ("Salvar", "Próximo", "Fechar", "OK"): `btn btn-primary btn-sm`.
- Aplica-se a modais de CRUD, modais de confirmação de exclusão ("Cancelar" ghost + "Excluir" `btn-danger btn-sm`) e ao rodapé de formulários de página (ex.: Salvar/Cancelar em).

Exemplo:

```html
<div class="modal-footer">
    <button type="button" class="btn btn-ghost btn-sm" @click="fecharModal()">Cancelar</button>
    <button type="button" class="btn btn-primary btn-sm" @click="salvar()">Salvar</button>
</div>
```

## Edição de documento

- Classes: `btn-icon` — mesmo padrão de ação de edição das tabelas (lápis + `title`)

Exemplo:

```html
<button class="btn-icon" title="Editar" @click="editarDocumento(item)">
    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
</button>
```

## Campo de busca

Padrão usado nas páginas de listagem (`.search-inline`):

- **Estrutura:** container flex `.search-inline` com ícone de lupa (`.search-inline-icon`), input (`.form-input`, sem borda interna) e botão de limpar `.search-clear`.
- **Placeholder:** no formato "Buscar ..." / "Pesquisar ..." (ex.: "Pesquisar", "Buscar... no cabeçalho").
- **Botão de limpar (×):** visível apenas com texto digitado (`x-show="busca"`), limpa o estado (`@click="busca = ''"`); ícone com `stroke-width="3"` na cor brand (`--color-brand`); hover com fundo `--color-brand-light` e ícone `--color-brand-dark`.
- **Estado:** `x-model` ligado ao estado de busca do componente (ex.: `busca` no Dashboard).

Exemplo:

```html
<div class="search-inline">
    <svg class="search-inline-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
    <input type="text" class="form-input" placeholder="Pesquisar documentos" x-model="busca">
    <button type="button" class="search-clear" title="Limpar busca" x-show="busca" @click="busca = ''">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
</div>
```

---

## CSS

Mobile First.

Flexbox.

Grid.

Variáveis CSS.

Sem frameworks (exceto quando o uso de um framework for escolha deliberada do projeto).

---

## JavaScript

Apenas quando necessário.

Preferir CSS para animações.

Módulos quando possível.

Sem jQuery.

---

## Acessibilidade

HTML semântico.

Contraste adequado.

Foco visível.

Navegação por teclado nos formulários de cadastro.

---

## Responsividade

Otimizado para Desktop (foco operacional), com suporte total a Tablets e Mobile.

Utilização nativa de CSS Grid e Flexbox.

Breakpoints definidos por necessidade de layout — testar nos tamanhos reais usados pelo público.

---

## Mobile

- Área mínima de toque: 44x44px. Espaçamento entre clicáveis: 8px.
- `font-size: 16px` em inputs e textareas no mobile (evita zoom no iOS).
- Tipo correto nos inputs: `email`, `tel`, `number`, `date`.
- Mobile First: estilos base para mobile, breakpoints para telas maiores.
- Testar com teclado virtual aberto.

---

## Funcionalidades

- Recursos adicionais podem ser implementados desde que mantenham a qualidade visual e a performance.

---

## Revisão

Antes de concluir:

- Parece uma interface profissional?
- Existe muito espaço em branco?
- O layout ficou moderno?
- Existe identidade visual?
- A interface poderia ser confundida com Bootstrap?
- Os componentes seguem o mesmo padrão visual?
- Área de toque mínima 44x44px?
- Inputs com font-size 16px no mobile?
- Layout funciona com teclado virtual aberto?
