<!doctype html>
<html lang="en">
    <?php include_once 'globals.php'; ?>
    <?php include_once SITE_DIR . '/includes/head.php' ?>
    <?php require_once SITE_DIR . '/classes/Repositorio.php' ?>    
    <?php
    $cod = filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_STRING);
    if (!is_numeric($cod) || !$cod) {
        header('Location: ' . SITE_DIR);
        exit;
    }
    $noticia = Repositorio::getNoticia($cod);
    ?>
    <body>
        <div id="wrap">
            <div class="container content">
                <?php include_once './includes/navbar.php'; ?>
                <?php if ($noticia): ?>
                <div class="page-header"><h2><?php echo $noticia->titulo ?></h2></div>
                    <p class="text-justify"><?php echo nl2br($noticia->conteudo) ?></p>
                <?php else: ?>
                    <div class="bg-danger erro">
                        <h2>Notícia não encontrada D:</h2>
                    </div>
                    
                    <div class="container content">
                        <p>
                            Infelizmente a notícia que você procura não existe ou foi excluída.
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- Inclusão de scripts comuns a várias paginas -->
        <?php include_once SITE_DIR . '/includes/js.php'; ?>
    </body>
</html>