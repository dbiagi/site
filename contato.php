<!doctype html>
<html lang="en">
    <?php include_once './globals.php'; ?>
    <?php include_once './includes/head.php'; ?>
    <body>
        <div class="container content">
            <?php include_once './includes/navbar.php'; ?>

            <h2>Contato: </h2>
            <form class='form-horizontal'>
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
                        <label class='control-label col-sm-3' for='nome'>Cidade: </label>
                        <div class='col-lg-5'>
                            <select class='form-control' name='cidade'>
                                <option>>>Selecione</option>
                                <option value='1'>Bauru</option>
                                <option value='2'>Tupã</option>
                                <option value='2'>São Paulo</option>
                            </select>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-sm-3' for='nome'>Escolariadade: </label>
                        <div class='col-lg-5'>
                            <label class='checkbox-inline'>
                                <input type='checkbox' name='escolaridade' value='1' />
                                Ensino Fundamental
                            </label>
                            <label class='checkbox-inline'>
                                <input type='checkbox' name='escolaridade' value='2' />
                                Ensino Médio
                            </label>
                            <label class='checkbox-inline'>
                                <input type='checkbox' name='escolaridade' value='3' />
                                Superior
                            </label>
                        </div>
                    </div>
                    <div class='form-group'>
                        <div class="col-sm-offset-7 col-sm-10">
                            <input class='btn btn-default' type='submit' value='Enviar'/>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        
        <!-- Inclusão de scripts comuns a várias paginas -->
        <?php include_once 'includes/js.php'; ?>
    </body>
</html>