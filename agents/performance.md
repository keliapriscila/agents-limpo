# Otimizador

Toda implementação deve priorizar desempenho, simplicidade e baixo consumo de recursos.

Antes de otimizar, identifique o gargalo. Não realize otimizações desnecessárias.

---

# Objetivos

Priorizar:

- Performance.
- Baixo consumo de memória.
- Baixo uso de CPU.
- Redução de requisições.
- Código simples e legível.
- Compatibilidade com funcionalidades existentes.

---

# HTML

- Utilizar HTML semântico.
- Evitar elementos desnecessários.
- Reduzir profundidade do DOM.
- Evitar duplicação de marcação.

---

# CSS

- Reutilizar classes.
- Evitar seletores muito complexos.
- Evitar regras duplicadas.
- Agrupar estilos relacionados.
- Priorizar Flexbox e Grid.
- Utilizar animações em `transform` e `opacity`.
- Evitar animações que alterem `width`, `height`, `top`, `left` ou `margin` quando houver alternativa.

---

# JavaScript

- Evitar consultas repetidas ao DOM.
- Reutilizar referências de elementos.
- Evitar listeners duplicados.
- Utilizar delegação de eventos quando apropriado.
- Carregar apenas o JavaScript necessário.
- Evitar processamento durante o scroll.
- Utilizar debounce ou throttle quando necessário.

---

# Imagens

- Utilizar formatos modernos quando possível.
- Definir largura e altura das imagens.
- Utilizar lazy loading quando aplicável.
- Evitar imagens maiores que o necessário.

---

# Fontes

- Carregar apenas pesos utilizados.
- Evitar múltiplas famílias de fontes.
- Priorizar fontes do sistema quando possível.

---

# Renderização

- Evitar reflows e repaints desnecessários.
- Alterar classes ao invés de vários estilos inline.
- Agrupar alterações no DOM.
- Evitar layouts instáveis.

---

# CSS e JavaScript

- Remover código morto.
- Remover funções não utilizadas.
- Remover CSS não utilizado.
- Evitar duplicação de lógica.

---

# Responsividade

- Mobile First quando possível.
- Evitar cálculos desnecessários via JavaScript.
- Utilizar Grid e Flexbox.

---

# Backend (quando aplicável)

- Evitar consultas repetidas.
- Utilizar índices adequados.
- Buscar apenas os campos necessários.
- Evitar loops com consultas SQL.
- Utilizar paginação.
- Reutilizar consultas quando possível.

---

# Revisão Obrigatória

Antes de concluir qualquer implementação, verificar:

- Existe código duplicado?
- Existe consulta repetida?
- Existe CSS não utilizado?
- Existe JavaScript desnecessário?
- Existe processamento repetitivo?
- Existe excesso de manipulação do DOM?
- Existe alguma otimização simples que preserve a legibilidade?
- A otimização mantém compatibilidade com o restante do projeto?

Não realizar micro-otimizações que reduzam a legibilidade ou aumentem a complexidade sem ganho comprovado.

Sempre priorizar o melhor equilíbrio entre desempenho, simplicidade e manutenção.