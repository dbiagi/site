<?php
require_once './globals.php';
require_once SITE_DIR . '/classes/Database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $campos = '';
    $valores = '';
    $parametros_pdo = array();
    
    foreach ($_POST as $key => $value) {
        $parametros_pdo[':' . filter_var($key)] =  filter_input(INPUT_POST, $key, FILTER_SANITIZE_STRING);
        $valores .= ':' . filter_var($key) . ',';
        $campos .= filter_var($key) . ',';
    }
    $campos = substr($campos, 0, strlen($campos) - 1);
    $valores = substr($valores, 0, strlen($valores) - 1);
    
    $insert = "INSERT INTO contato ($campos) VALUES ($valores)";
    
    try {
        $db = Database::getInstance();
        //$db = new Database();
        $stmt = $db->prepare($insert);
        
        $stmt->execute($parametros_pdo);
        
        $msg = $parametros_pdo[':nome'] . ', ';
        $msg .= 'do curso ' . $parametros_pdo[':curso'] . ' encontrou em contato.\n\n';
        $msg .= 'Mensagem: ' . $parametros_pdo[':mensagem'] . '\n';
        $assunto = 'Contato pelo form do  site.';
        
        mail(ADMIN_EMAIL, $assunto, $msg);
        
        header('Location: ' . 'http://' . SITE_URL . '/contato.php?msg=ok');
    } catch (PDOException $exc) {
        header('Location: ' . 'http://' . SITE_URL . '/contato.php?msg=erro');
    }
}
        