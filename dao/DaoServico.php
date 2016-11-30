<?php

require_once 'Conexao.php';
require_once 'model/Servico.php';

class DaoServico {

    public static $instance;

    private function __construct() {
        //
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DaoServico();
        return self::$instance;
    }

    public function inserir(Servico $servico) {
        try {
            $sql = "INSERT INTO servico "
                    . " (descricao,"
                    . " preco,"
                    . " imagem)"
                    . " VALUES "
                    . " (:descricao,"
                    . " :preco,"
                    . " :imagem)";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":descricao", $servico->getDescricao());
            $p_sql->bindValue(":preco", $servico->getPreco());
            $p_sql->bindValue(":imagem", $servico->getImagem());
            return $p_sql->execute();
        } catch (PDOException $exc) {
            return $exc->getMessage();
        }
    }

    public function listar() {
        $sql = "SELECT * FROM servico ORDER BY descricao";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deletar($id) {
        $sql = "DELETE FROM servico WHERE id=:id";
        try {
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
        } catch (PDOException $exc) {
            return $exc->getMessage();
        }
    }

    public function getServico($id) {
        $sql = "SELECT * FROM servico WHERE id=:id";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->bindValue(":id", $id);
        $p_sql->execute();
        return $p_sql->fetch(PDO::FETCH_ASSOC);
    }
    
    public function atualizar(Servico $servico) {
        try {
            $sql = "UPDATE produto set descricao=:descricao, preco=:preco"
                    . " WHERE id=:id";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $servico->getId());
            $p_sql->bindValue(":descricao", $servico->getDescricao());
            $p_sql->bindValue(":preco", $servico->getPreco());
            return $p_sql->execute();
        } catch (PDOException $exc) {
            return $exc->getMessage();
        }
    }
    
}
