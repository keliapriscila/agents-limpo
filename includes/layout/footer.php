<?php
declare(strict_types=1);
?>
    </main>

    <footer class="site-footer">
        <div class="container footer-grid">
            <div>
                <a href="index.php" class="logo">
                    <span class="logo-mark" aria-hidden="true">KP</span>
                    <span><?= e(APP_NOME) ?></span>
                </a>
                <p class="footer-sobre">Desenvolvimento de sites profissionais e sistemas web sob medida. Do design à entrega, com qualidade técnica e foco em resultado.</p>
            </div>

            <div>
                <h4 class="footer-titulo">Navegação</h4>
                <ul class="footer-links">
                    <?php foreach ($menu as $item): ?>
                        <li><a href="<?= e($item['url']) ?>"><?= e($item['rotulo']) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div>
                <h4 class="footer-titulo">Serviços</h4>
                <ul class="footer-links">
                    <li><a href="servicos.php#sites">Sites profissionais</a></li>
                    <li><a href="servicos.php#sistemas">Sistemas web</a></li>
                    <li><a href="servicos.php#suporte">Suporte e manutenção</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-titulo">Contato</h4>
                <ul class="footer-links">
                    <li><a href="mailto:<?= e(APP_EMAIL) ?>"><?= e(APP_EMAIL) ?></a></li>
                    <li><a href="contato.php">Solicitar orçamento</a></li>
                </ul>
            </div>
        </div>

        <div class="container footer-bottom">
            <span>© <?= date('Y') ?> <?= e(APP_NOME) ?>. Todos os direitos reservados.</span>
        </div>
    </footer>
</body>
</html>
