<!doctype html>
<html lang="en">
    <?php include_once 'globals.php'; ?>
    <?php include_once SITE_DIR . '/includes/head.php' ?>
    <?php require_once SITE_DIR . '/classes/Repositorio.php' ?>    
    <?php
        $cod = filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_STRING);
        if(!is_numeric($cod) || !$cod) {
            header('Location: ' . SITE_DIR); 
            exit;
        }
        $noticia = Repositorio::getNoticia($cod);
    ?>
    <body>
        <div id="wrap">
            <div class="container content">
                <?php include_once './includes/navbar.php'; ?>
                
                <div class="page-header"><?php echo $noticia->titulo ?></div>
                <p class="text-justify"><?php echo $noticia->conteudo ?></p>
            </div>
        </div>
        <?php include_once SITE_DIR . '/includes/footer.php' ?>
        <!-- Inclusão de scripts comuns a várias paginas -->
        <?php include_once SITE_DIR . '/includes/js.php'; ?>
    </body>
</html>