/**
 * Kélia Priscila — JavaScript global (Alpine.js).
 * Componentes registrados antes da inicialização do Alpine.
 */

/** Normaliza texto para busca (minúsculas, sem acentos). */
function normalizarTexto(valor) {
    return String(valor)
        .normalize('NFD')
        .replace(/[\u0300-\u036f]/g, '')
        .toLowerCase()
        .trim();
}

document.addEventListener('alpine:init', () => {
    /**
     * Formulário de contato (contato.php).
     * Validação espelhada do backend (apenas UX) + envio via fetch.
     * Erros de validação são exibidos no modal padrão (frontend.md).
     */
    Alpine.data('formContato', () => ({
        enviando: false,
        sucesso: false,
        erroGeral: '',
        modalErros: false,
        listaErros: [],
        erros: {},
        campos: {
            nome: '',
            email: '',
            telefone: '',
            tipo: '',
            mensagem: '',
            site: '' // honeypot
        },

        validar() {
            const erros = {};

            if (this.campos.nome.trim().length < 2) {
                erros.nome = 'Informe seu nome.';
            }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.campos.email.trim())) {
                erros.email = 'Informe um e-mail válido.';
            }
            const digitos = this.campos.telefone.replace(/\D/g, '');
            if (this.campos.telefone.trim() !== '' && (digitos.length < 8 || digitos.length > 13)) {
                erros.telefone = 'Informe um telefone válido com DDD.';
            }
            if (this.campos.tipo === '') {
                erros.tipo = 'Selecione o tipo de projeto.';
            }
            if (this.campos.mensagem.trim().length < 10) {
                erros.mensagem = 'Descreva seu projeto com pelo menos 10 caracteres.';
            }

            this.erros = erros;
            return Object.keys(erros).length === 0;
        },

        abrirModalErros() {
            this.listaErros = Object.values(this.erros);
            this.modalErros = true;
        },

        async enviar() {
            this.erroGeral = '';

            if (!this.validar()) {
                this.abrirModalErros();
                return;
            }

            this.enviando = true;
            try {
                const resposta = await fetch('api/contato.php', {
                    method: 'POST',
                    body: new FormData(this.$refs.formulario)
                });
                const dados = await resposta.json();

                if (dados.success) {
                    this.sucesso = true;
                    return;
                }

                if (dados.erros) {
                    this.erros = dados.erros;
                    this.abrirModalErros();
                    return;
                }

                this.erroGeral = dados.message || 'Não foi possível enviar sua mensagem.';
            } catch {
                this.erroGeral = 'Não foi possível enviar agora. Tente novamente em instantes.';
            } finally {
                this.enviando = false;
            }
        },

        recomecar() {
            this.sucesso = false;
            this.erroGeral = '';
            this.erros = {};
            this.listaErros = [];
            this.campos = { nome: '', email: '', telefone: '', tipo: '', mensagem: '', site: '' };
        }
    }));

    /**
     * Busca em listagens (projetos.php).
     * Recebe a lista de textos pesquisáveis e filtra os itens por índice.
     */
    Alpine.data('buscaLista', (lista) => ({
        busca: '',
        textos: (lista || []).map(normalizarTexto),

        visivel(indice) {
            const termo = normalizarTexto(this.busca);
            return termo === '' || (this.textos[indice] || '').includes(termo);
        },

        get semResultados() {
            return this.busca.trim() !== '' && this.textos.every((_, indice) => !this.visivel(indice));
        }
    }));
});
