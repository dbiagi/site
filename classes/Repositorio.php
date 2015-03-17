<?php

require_once 'Database.php';

/**
 * Recupera informações armazenadas no banco de dados
 *
 * @author Diego
 */
class Repositorio {

    /**
     * Busca no banco todas os registros da tabela notícia.
     * @return Array Retorna array contentdo os objetos contento as informações das noticias.
     */
    public static function getNoticias() {
        $dados = array();
        try {
            $db = Database::getInstance();
            $sql = 'SELECT * FROM noticia';
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $dados = $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return;
        }
        
        return $dados;
    }

    /**
     * Busca a notícia de id igual a <b>$codnoticia</b>
     * @param Integer $codnoticia Id da notícia
     * @return stdClass Objeto contendo os dados da notícia
     */
    public static function getNoticia($codnoticia) {
        $dado = null;
        try {
            $db = Database::getInstance();
            $sql = 'SELECT * FROM noticia WHERE codnoticia = :codnoticia';
            $stmt = $db->prepare($sql);
            $stmt->execute(array(':codnoticia' => $codnoticia));
            $dado = $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
        }
        
        return $dado;
    }
}
