<?php
declare(strict_types=1);

$pagina_atual     = 'contato';
$pagina_titulo    = 'Contato — Kélia Priscila';
$pagina_descricao = 'Solicite um orçamento para seu site ou sistema web. Descreva o projeto e receba uma resposta objetiva.';

require __DIR__ . '/includes/layout/head.php';
require __DIR__ . '/includes/layout/header.php';
?>

<section class="container page-header">
    <h1 class="page-title">Contato</h1>
    <p class="page-sub">Descreva o que você precisa — respondo com uma orientação objetiva sobre escopo, prazo e investimento.</p>
</section>

<section class="section">
    <div class="container contato-grid">
        <div class="card" x-data="formContato">
            <div class="card-body">
                <template x-if="sucesso">
                    <div class="alert-card is-success">
                        <div class="alert-card-header">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                            Mensagem enviada
                        </div>
                        <div class="alert-card-body">
                            <p>Obrigada pelo contato! Sua mensagem foi recebida e responderei em até 1 dia útil no e-mail informado.</p>
                            <div class="sucesso-acoes">
                                <button type="button" class="btn btn-ghost btn-sm" @click="recomecar()">Enviar outra mensagem</button>
                                <a href="projetos.php" class="btn btn-outline btn-sm">Ver projetos</a>
                            </div>
                        </div>
                    </div>
                </template>

                <form x-show="!sucesso" x-ref="formulario" novalidate @submit.prevent="enviar()">
                    <div class="alert-card is-error" x-show="erroGeral" x-cloak role="alert">
                        <div class="alert-card-header">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                            Não foi possível enviar
                        </div>
                        <div class="alert-card-body">
                            <p x-text="erroGeral"></p>
                        </div>
                    </div>

                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label" for="campo-nome">Nome <span class="form-obrigatorio" aria-hidden="true">*</span></label>
                            <input type="text" id="campo-nome" name="nome" class="form-input"
                                   :class="erros.nome && 'is-invalid'"
                                   x-model="campos.nome" autocomplete="name" required
                                   :aria-invalid="erros.nome ? 'true' : 'false'">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="campo-email">E-mail <span class="form-obrigatorio" aria-hidden="true">*</span></label>
                            <input type="email" id="campo-email" name="email" class="form-input"
                                   :class="erros.email && 'is-invalid'"
                                   x-model="campos.email" autocomplete="email" required
                                   :aria-invalid="erros.email ? 'true' : 'false'">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="campo-telefone">WhatsApp / Telefone</label>
                            <input type="tel" id="campo-telefone" name="telefone" class="form-input"
                                   :class="erros.telefone && 'is-invalid'"
                                   x-model="campos.telefone" autocomplete="tel" inputmode="tel"
                                   placeholder="(00) 00000-0000"
                                   :aria-invalid="erros.telefone ? 'true' : 'false'">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="campo-tipo">Tipo de projeto <span class="form-obrigatorio" aria-hidden="true">*</span></label>
                            <select id="campo-tipo" name="tipo" class="form-select"
                                    :class="erros.tipo && 'is-invalid'"
                                    x-model="campos.tipo" required
                                    :aria-invalid="erros.tipo ? 'true' : 'false'">
                                <option value="">Selecione…</option>
                                <option value="site">Site profissional</option>
                                <option value="sistema">Sistema web</option>
                                <option value="suporte">Suporte e manutenção</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>

                        <div class="form-group campo-full">
                            <label class="form-label" for="campo-mensagem">Mensagem <span class="form-obrigatorio" aria-hidden="true">*</span></label>
                            <textarea id="campo-mensagem" name="mensagem" class="form-textarea"
                                      :class="erros.mensagem && 'is-invalid'"
                                      x-model="campos.mensagem" required
                                      placeholder="Conte um pouco sobre o seu projeto: objetivo, prazo e o que ele precisa ter."
                                      :aria-invalid="erros.mensagem ? 'true' : 'false'"></textarea>
                        </div>

                        <div class="campo-oculto" aria-hidden="true">
                            <label for="campo-site">Não preencha este campo</label>
                            <input type="text" id="campo-site" name="site" x-model="campos.site" tabindex="-1" autocomplete="off">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm" :disabled="enviando">
                        <span x-show="!enviando">Enviar mensagem</span>
                        <span x-show="enviando" x-cloak>Enviando…</span>
                    </button>

                    <p class="form-ajuda nota-privacidade mt-24">Seus dados são utilizados apenas para responder ao seu contato.</p>
                </form>

                <div class="modal-overlay modal-overlay-confirm" x-show="modalErros" x-cloak x-transition.opacity.duration.150ms>
                    <div class="modal-confirm" role="dialog" aria-modal="true" aria-labelledby="titulo-validacao"
                         x-effect="modalErros && $nextTick(() => $refs.botaoErros.focus())">
                        <div class="modal-header">
                            <h3 id="titulo-validacao">Verifique os campos</h3>
                            <button type="button" class="modal-close" aria-label="Fechar" @click="modalErros = false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="alert-card is-error">
                                <div class="alert-card-header">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                                    Não foi possível enviar
                                </div>
                                <div class="alert-card-body">
                                    <ul class="lista-erros">
                                        <template x-for="(mensagem, indice) in listaErros" :key="indice">
                                            <li x-text="mensagem"></li>
                                        </template>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-ghost btn-sm" @click="modalErros = false">Voltar e corrigir</button>
                            <button type="button" class="btn btn-primary btn-sm" x-ref="botaoErros" @click="modalErros = false">Entendi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <aside class="aside-stack">
            <div class="card">
                <div class="card-body">
                    <h3>Outras formas de contato</h3>
                    <div class="info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <div>
                            <strong>E-mail</strong>
                            <a href="mailto:<?= e(APP_EMAIL) ?>"><?= e(APP_EMAIL) ?></a>
                        </div>
                    </div>
                    <div class="info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                        <div>
                            <strong>Atendimento</strong>
                            Remoto para todo o Brasil
                        </div>
                    </div>
                    <div class="info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        <div>
                            <strong>Resposta</strong>
                            Em até 1 dia útil
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3>O que acontece depois</h3>
                    <div class="diagrama-passo">
                        <span class="diagrama-numero">1</span>
                        <div>Você envia a mensagem com o que precisa.</div>
                    </div>
                    <div class="diagrama-passo">
                        <span class="diagrama-numero">2</span>
                        <div>Respondo com orientação sobre escopo, prazo e investimento.</div>
                    </div>
                    <div class="diagrama-passo">
                        <span class="diagrama-numero">3</span>
                        <div>Alinhamos os detalhes e o projeto começa.</div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</section>

<?php require __DIR__ . '/includes/layout/footer.php'; ?>
