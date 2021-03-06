<?php

require_once 'Conexao.php';
require_once 'model/Produto.php';

class DaoProduto {

    public static $instance;

    private function __construct() {
        //
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DaoProduto();
        return self::$instance;
    }

    public function inserir(Produto $produto) {
        try {
            $sql = "INSERT INTO produto "
                    . " (tipo,"
                    . " descricao,"
                    . " marca,"
                    . " modelo,"
                    . " fornecedor,"
                    . " preco_custo,"
                    . " preco_venda,"
                    . " quantidade_estoque,"
                    . "imagem)"
                    . " VALUES "
                    . " (:tipo,"
                    . " :descricao,"
                    . " :marca,"
                    . " :modelo,"
                    . " :fornecedor,"
                    . " :precocusto,"
                    . " :precovenda,"
                    . " :quantidadeestoque,"
                    . " :imagem)";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":tipo", $produto->getTipoproduto());
            $p_sql->bindValue(":descricao", $produto->getDescricao());
            $p_sql->bindValue(":marca", $produto->getMarca());
            $p_sql->bindValue(":modelo", $produto->getModelo());
            $p_sql->bindValue(":fornecedor", $produto->getFornecedor());
            $p_sql->bindValue(":precocusto", $produto->getPrecocompra());
            $p_sql->bindValue(":precovenda", $produto->getPrecovenda());
            $p_sql->bindValue(":quantidadeestoque", $produto->getQuantidadeestoque());
            $p_sql->bindValue(":imagem", $produto->getImagem());
            return $p_sql->execute();
        } catch (PDOException $exc) {
            return $exc->getMessage();
        }
    }

    public function listar() {
        $sql = "SELECT * FROM produto ORDER BY tipo";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deletar($id) {
        $sql = "DELETE FROM produto WHERE id=:id";
        try {
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
        } catch (PDOException $exc) {
            return $exc->getMessage();
        }
    }

    public function getProduto($id) {
        $sql = "SELECT * FROM produto WHERE id=:id";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->bindValue(":id", $id);
        $p_sql->execute();
        return $p_sql->fetch(PDO::FETCH_ASSOC);
    }
    
    public function atualizar(Produto $produto) {
        try {
            $sql = "UPDATE produto set tipoproduto=:tipoproduto, descricao=:descricao, marca=:marca, "
                    . "modelo=:modelo, fornecedor=:fornecedor, precocompra=:precocompra,"
                    . "precovenda=:precovenda, quantidadeestoque=:quantidadeestoque"
                    . " WHERE id=:id";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $produto->getId());
            $p_sql->bindValue(":tipoproduto", $produto->getTipoproduto());
            $p_sql->bindValue(":descricao", $produto->getDescricao());
            $p_sql->bindValue(":marca", $produto->getMarca());
            $p_sql->bindValue(":modelo", $produto->getModelo());
            $p_sql->bindValue(":fornecedor", $produto->getFornecedor());
            $p_sql->bindValue(":precocompra", $produto->getPrecocompra());
            $p_sql->bindValue(":precovenda", $produto->getPrecovenda());
            $p_sql->bindValue(":quantidadeestoque", $produto->getQuantidadeestoque());
            return $p_sql->execute();
        } catch (PDOException $exc) {
            return $exc->getMessage();
        }
    }
    
}


