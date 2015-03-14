<!doctype html>
<html lang="en">
    <?php include_once './globals.php'; ?>
    <?php include_once './includes/head.php'; ?>
    <body>
        <div id="wrap">
            <div class="container content">
                <?php include_once './includes/navbar.php'; ?>

                <div class="container page-header">
                    <h2>Contato: </h2>
                </div>

                <form class='form-horizontal' action="formContato.php" method="POST">
                    <fieldset>
                        <div class='form-group'>
                            <label class='control-label col-sm-3' for='nome'>Nome: </label>
                            <div class='col-lg-5'>
                                <input class='form-control' type='text' name='nome' placeholder='Nome' maxlength='200' />
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label col-sm-3' for='nome'>Email: </label>
                            <div class='col-lg-5'>
                                <input class='form-control' type='email' name='email' placeholder='Email' maxlength='200' />
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label col-sm-3' for='nome'>Curso: </label>
                            <div class='col-lg-5'>
                                <select class='form-control' name='curso'>
                                    <option>>>Selecione</option>
                                    <option value='Bacharelado em Sistemas de Informação'>Bacharelado em Sistemas de Informação</option>
                                    <option value='Bacharelado em Sistemas de Informação'>Bacharelado em Ciência da Computação</option>
                                </select>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class="control-label col-sm-3" for="mensagem">Mensagem: </label>
                            <div class='col-lg-5'>
                                <textarea class="form-control" id="mensagem" name='mensagem' placeholder="Digite sua mensagem aqui."></textarea>
                            </div>
                        </div>
                        <div class='form-group'>
                            <div class="col-sm-offset-7 col-sm-10">
                                <input class='btn btn-default' type='submit' value='Enviar'/>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <div class="message-div">
                    <?php if (isset($_GET['msg']) && $_GET['msg'] == 'ok'): ?>
                        <div class="bg-success ok"><p class="text-center"> Seu contato foi enviado com <strong>sucesso</strong>.</p></div>
                    <?php elseif (isset($_GET['msg']) && $_GET['msg'] == 'erro'): ?>
                        <div class="bg-danger ok"><p> Ops, algo deu errado.</p></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Inclusão de scripts comuns a várias paginas -->
        <?php include_once SITE_DIR . '/includes/js.php'; ?>
    </body>
</html>