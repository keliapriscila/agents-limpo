# Backend

_(Este arquivo documenta a arquitetura e as convenções do backend. Preencha as seções assim que a stack for definida — os princípios listados valem para qualquer tecnologia.)_

---

## Arquitetura

_(Preencher: árvore de pastas do backend, fluxo de uma requisição, organização de páginas/rotas/endpoints e a responsabilidade de cada camada.)_

---

## Convenções

_(Preencher após definir a stack: versão da linguagem, estilo de código, nomenclatura de funções/classes/arquivos, organização por responsabilidade.)_

Princípios gerais:

- Um arquivo por responsabilidade.
- Sem lógica de negócio misturada com configuração.
- Regra de negócio no backend; no frontend apenas a UX correspondente.

---

## Banco de Dados

_(Preencher: SGBD, acesso a dados, schema, migrações e seeds.)_

Princípios gerais (quando houver banco):

- Consultas sempre parametrizadas (prepared statements). Nunca concatenar entrada do usuário em SQL.
- Buscar apenas os campos necessários. Evitar `SELECT *`.
- Índices em campos usados em `WHERE`, `JOIN` e `ORDER BY`.
- Paginar resultados grandes. Evitar consultas dentro de loops.
- Manter o schema versionado e sempre atualizado.

---

## API

_(Preencher quando houver API: formato de resposta padrão, códigos HTTP, autenticação, estrutura de um endpoint.)_

Princípios gerais:

- Respostas consistentes (ex.: `{ success, data | message }`) e `Content-Type` correto.
- Validar todos os campos antes de processar (tipo, tamanho, formato).
- Autorização sempre no backend — nunca confiar apenas no frontend.
- Nunca expor stack trace, SQL ou caminhos internos ao cliente.

---

## Erros

- Tratamento de exceções em operações críticas (banco, arquivos).
- Registrar erros em log. Nunca exibir mensagem interna ao cliente.

---

## Proteção

_(Preencher conforme a stack: bloqueio de pastas/arquivos sensíveis, headers de segurança, credenciais fora do versionamento.)_

---

## Revisão

- Entrada validada antes de processar?
- Consultas parametrizadas (sem concatenação de entrada)?
- Erros internos não expostos ao cliente?
- Autorização verificada no backend?
- Credenciais/configuração fora do código versionado?
- Pastas e arquivos sensíveis inacessíveis publicamente?
