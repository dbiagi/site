<!doctype html>
<html lang="en">
    <?php include_once 'globals.php'; ?>
    <?php include_once SITE_DIR . '/includes/head.php'; ?>
    <link rel="stylesheet" href="http://<?php echo SITE_URL . '/css/sobre.css' ?>">
    <body>
        <div id="wrap">
            <div class="container content">
                <?php include_once './includes/navbar.php'; ?>

                <div class="container page-header">
                    <h2>Sobre: </h2>
                </div>
                <div class="sobre-content">
                    <p class="row paragraph">
                        <span class="tab">
                            Esse é um site feito com o básico de PHP. E tem como 
                            objetivo mostrar um pouco como funciona a programação 
                            de páginas web utilizando Apache, PHP e Mysql.
                        </span>
                    </p>
                    <p class="row paragraph">
                        <span class="tab">
                            Qualquer dúvida entrar em contato com o Diego pelo form
                            de contato dessa página e pelo endereço do facebook no
                            rodapé da página.
                        </span>
                    </p>

                </div>
            </div>
        </div>

        <!-- Inclusão de scripts comuns a várias paginas -->
        <?php include_once SITE_DIR . '/includes/js.php'; ?>
    </body>
</html>