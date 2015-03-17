<!doctype html>
<html lang="en">
    <?php include_once 'globals.php'; ?>
    <?php include_once SITE_DIR . '/includes/head.php' ?>
    <?php require_once SITE_DIR . '/classes/Repositorio.php' ?>
    <body>
        <div id="wrap">
            <div class="container content ">
                <?php include_once './includes/navbar.php'; ?>
                <div class="jumbotron">
                    <h1>Site funcional em PHP</h1>
                    <p>Olá pessoas. Esse aqui é um site feito com o básico de php.</p>
                    <p><a target="_blank" href="http://www.w3schools.com/php/" class="btn btn-primary">Começe a aprender agora!</a></p>
                </div>

                <div class="noticias">
                    <h2>Notícias: </h2>
                    <?php foreach (Repositorio::getNoticias() as $noticia): ?>
                        <blockquote>
                            <h2><?php echo $noticia->titulo ?></h2>
                            <p>- <?php echo $noticia->resumo ?> 
                                <a href="<?php echo 'http://' . SITE_URL . '/noticia.php?cod=' . $noticia->codnoticia ?>">saiba mais</a>
                            </p>
                        </blockquote>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>

        <!-- Inclusão de scripts comuns a várias paginas -->
        <?php include_once SITE_DIR . '/includes/js.php'; ?>
        <script src="js/index.js"></script>
    </body>
</html>