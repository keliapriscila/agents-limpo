# Contexto

## Resumo Executivo

- `projeto.md` — o que é o projeto, público e objetivo.

---

Antes de iniciar qualquer tarefa, leia obrigatoriamente:

- `memoria.md` — tecnologias, arquitetura e decisões técnicas (ao iniciar um novo projeto, crie a estrutura inicial e registre na memória que a estrutura inicial foi criada, para que em novas rodadas não seja necessário recriá-la).
- `progresso.md` — o que já foi feito.
- `regras-negocio.md` — regras de negócio do sistema.
- `contexto.md` — este arquivo.

Esses cinco arquivos são a fonte da verdade do projeto.

---

## Especialistas — consultar conforme a tarefa

Leia o especialista correspondente antes de implementar:

| Arquivo | Quando consultar |
|---|---|
| `seguranca.md` | Qualquer implementação com dados, sessões, autenticação ou upload |
| `performance.md` | Qualquer implementação com HTML, CSS, JS ou SQL |
| `frontend.md` | Qualquer alteração de interface ou mobile |
| `backend.md` | Qualquer alteração em backend, API, banco ou arquitetura |

---

## Atualização da documentação

Ao concluir uma tarefa:

- Atualize `progresso.md` com resumo objetivo da implementação.
- Atualize `memoria.md` apenas quando houver mudanças permanentes em arquitetura, tecnologias, convenções ou decisões de design.
- Atualize `regras-negocio.md` apenas quando houver mudanças permanentes nas regras de negócio.

---

## Manutenção do progresso.md

- Manter apenas as **5 últimas alterações** em no máximo 150 caracteres.
- Cada entrada deve conter data e resumo da alteração em uma linha.

---

## Diretrizes gerais

- Reutilize código. Evite duplicação.
- Faça alterações pequenas e objetivas.
- Preserve a identidade visual definida.
- Mantenha documentação sincronizada com o código.
- Priorize economia de tokens.
- Defina o idioma padrão da interface e mantenha mensagens de erro e alertas consistentes.

Este projeto é desenvolvido utilizando Vibe Coding.
