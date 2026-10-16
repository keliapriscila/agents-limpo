# Regras de Negócio

## Propósito

Consolida as regras de negócio do sistema. **Regras de negócio são aplicadas no backend** (lógica de aplicação), nunca apenas no cliente — o frontend apenas reflete e valida para melhorar a UX.

---

## Como documentar

- Descrever a regra de forma objetiva, indicando a entidade/campo afetado, condições e exceções.
- Indicar **onde é aplicada** (backend obrigatório; frontend apenas UX) com referências de código quando possível.
- Registrar também limites e o que **não** é permitido (campos opcionais, valores mínimos/máximos, regras de exclusão e impacto em cascata).

---

## Regras por módulo/entidade

### Contato / Leads (formulário público)

- **Nome** — obrigatório, entre 2 e 120 caracteres; aplicada em `api/contato.php` (backend), com validação espelhada no frontend.
- **E-mail** — obrigatório, formato válido (FILTER_VALIDATE_EMAIL), até 160 caracteres; aplicada em `api/contato.php`.
- **Telefone** — opcional; se informado, deve conter de 8 a 13 dígitos após remoção de máscara; aplicada em `api/contato.php`.
- **Tipo de projeto** — obrigatório, restrito a: site, sistema, suporte, outro; aplicada em `api/contato.php`.
- **Mensagem** — obrigatória, entre 10 e 2000 caracteres; aplicada em `api/contato.php`.
- **Honeypot (`site`)** — campo oculto que deve permanecer vazio; preenchido indica bot e a requisição é descartada com resposta silenciosa de sucesso; aplicada em `api/contato.php`.
- **Persistência** — leads gravados na tabela `contatos` (MySQL/PDO, prepared statements); erro de banco é registrado em `storage/logs` e nunca exposto ao usuário.
- **Feedback** — respostas JSON no padrão `{ success, message, erros? }`; mensagens ao usuário sempre em PT-BR.
- **Acesso** — a tabela `contatos` não é exposta em nenhuma página pública; consulta interna prevista para rodada futura.

### Exemplo de formato (remover ao preencher)

- **Entidade/Campo** — descrição da regra com condição; aplicada em `arquivo` (backend), com validação espelhada no frontend.

---

## Regras Previstas (ainda não implementadas — objetivo em `projeto.md`)

_(Preencher: regras planejadas para o futuro, ainda não implementadas, que derivam dos objetivos do projeto.)_
