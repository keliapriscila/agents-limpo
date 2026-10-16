# Segurança

Toda implementação deve seguir estas diretrizes e passar pela revisão de segurança antes da conclusão.

---

## Banco de Dados

- Utilizar Prepared Statements em todas as consultas SQL.
- Nunca concatenar dados do usuário em consultas.
- Validar e sanitizar todos os dados antes de utilizá-los.
- Utilizar o menor nível de privilégio possível para o acesso ao banco.

---

## Autenticação

- Nunca armazenar senhas em texto puro.
- Utilizar hash forte e próprio para senha (ex.: bcrypt ou Argon2).
- Regenerar o ID da sessão após o login.
- Encerrar corretamente a sessão no logout.

---

## Autorização

- Validar permissões no backend.
- Nunca confiar apenas nas permissões do frontend.
- Verificar perfil e permissões antes de qualquer ação administrativa.

---

## Entrada de Dados

- Validar todos os dados recebidos via GET, POST, COOKIE, HEADER e FILES.
- Validar tipo, formato, tamanho e valores permitidos.
- Nunca confiar em dados enviados pelo cliente.

---

## Saída de Dados

- Escapar dados exibidos em HTML conforme a tecnologia utilizada.
- Evitar exposição de informações sensíveis.
- Não exibir mensagens técnicas para usuários finais.

---

## Upload de Arquivos

- Validar extensão e MIME Type.
- Limitar tamanho dos arquivos.
- Gerar nomes únicos para arquivos enviados.
- Não permitir execução de arquivos enviados.
- Armazenar uploads fora da área pública sempre que possível.

---

## Sessões

- Utilizar sessões apenas para informações necessárias.
- Não armazenar dados sensíveis em sessão.
- Invalidar sessões expiradas ou inválidas.

---

## Tratamento de Erros

- Registrar erros em log.
- Não exibir erros internos em ambiente de produção.
- Evitar exposição de consultas SQL, caminhos de arquivos ou stack traces.

---

## Arquivos Sensíveis

Proteger contra acesso público a:

- `.env`
- `.git`
- arquivos de backup
- logs
- arquivos de configuração
- credenciais

---

## Dependências

- Utilizar bibliotecas confiáveis e mantidas.
- Remover dependências não utilizadas.
- Manter dependências atualizadas quando possível.

---

## Pendências / Melhorias Futuras (verificar antes da conclusão)

Itens levantados em auditoria de segurança e que devem ser verificados/implementados conforme o projeto evolui:

_(Nenhuma pendência registrada. Adicionar aqui itens encontrados em auditorias, com referência ao arquivo/código e o que deve ser feito — ex.: rate limiting no login, validação completa de entrada no backend, autorização em todos os endpoints, privilégio mínimo no banco, upload de arquivos, SRI em recursos de CDN.)_

Itens identificados na implementação inicial (15/10/2026):

- **Rate limiting no formulário de contato** — `api/contato.php` hoje conta apenas com honeypot; avaliar limite por IP/intervalo quando houver tráfego real.
- **SRI nos recursos de CDN** — Alpine.js é carregado de `cdn.jsdelivr.net` sem `integrity`; fixar versão + hash quando o projeto entrar em produção.
- **Privilégio mínimo no banco** — usuário MySQL do `.env` deve ter apenas os privilégios necessários (SELECT/INSERT em `contatos`), sem uso de root.

---

# Revisão Obrigatória

Antes de concluir qualquer implementação, verificar:

- SQL Injection
- XSS
- CSRF (quando aplicável)
- Controle de acesso
- Validação de entradas
- Escapamento de saídas
- Upload de arquivos (quando aplicável)
- Tratamento adequado de erros
- Exposição de informações sensíveis
- Uso correto de sessões
- Compatibilidade com as regras de negócio
- Compatibilidade com funcionalidades existentes

Caso alguma vulnerabilidade seja identificada durante a implementação, ela deve ser corrigida antes da conclusão da tarefa.
