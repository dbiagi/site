<!doctype html>
<html lang="en">
    <?php include_once 'globals.php'; ?>
    <?php include_once SITE_DIR . '/includes/head.php'; ?>

    <body>
        <div class="container content">
            <?php include_once SITE_DIR . '/includes/navbar.php' ?>

            <div class="container page-header">
                <h2>Tabela com informações: </h2>
            </div>
            
            <table class='table table-striped table-hover'>
                <tr>
                    <th>Col 1</th>
                    <th>Col 2</th>
                    <th>Col 3</th>
                    <th>Col 4</th>
                </tr>
                <tr>
                    <td>user a</td>
                    <td>user.a@email.com</td>
                    <td>escolaridade</td>
                    <td>cidade</td>
                </tr>
                <tr>
                    <td>user b</td>
                    <td>user.b@email.com</td>
                    <td>escolaridade</td>
                    <td>cidade</td>
                </tr>
                <tr>
                    <td>user v</td>
                    <td>user.v@email.com</td>
                    <td>escolaridade</td>
                    <td>cidade</td>
                </tr>
                <tr>
                    <td>user d</td>
                    <td>user.d@email.com</td>
                    <td>escolaridade</td>
                    <td>cidade</td>
                </tr>
                <tr>
                    <td>user e</td>
                    <td>user.e@email.com</td>
                    <td>escolaridade</td>
                    <td>cidade</td>
                </tr>
            </table>
        </div>

        <!-- Inclusão de scripts comuns a várias paginas -->
        <?php include_once 'includes/js.php'; ?>
    </body>
</html>