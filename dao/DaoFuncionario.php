<?php

require_once 'Conexao.php';
require_once 'model/Funcionario.php';

class DaoFuncionario {

    public static $instance;

    private function __construct() {
        //
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DaoFuncionario();
        return self::$instance;
    }

    public function inserir(Cliente $cliente) {
        try {
            $sql = "INSERT INTO cliente "
                    . " (id,"
                    . " nome,"
                    . " endereco,"
                    . " cidade,"
                    . " estado,"
                    . " telefone,"
                    . " email,"
                    . " cargo,"
                    . " salario,"
                    . " login,"
                    . " senha) "
                    . " VALUES "
                    . " (:id,"
                    . " :nome,"
                    . " :endereco,"
                    . " :cidade,"
                    . " :estado,"
                    . " :telefone,"
                    . " :email";
                    . " :cargo";
                    . " :salario";
                    . " :";
                    . " :email)";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $cliente->getNome());
            $p_sql->bindValue(":cpf_cnpj", $cliente->getCpf_cnpj());
            $p_sql->bindValue(":endereco", $cliente->getEndereco());
            $p_sql->bindValue(":cidade", $cliente->getCidade());
            $p_sql->bindValue(":estado", $cliente->getEstado());
            $p_sql->bindValue(":telefone", $cliente->getTelefone());
            $p_sql->bindValue(":email", $cliente->getEmail());
            return $p_sql->execute();
        } catch (PDOException $exc) {
            return $exc->getMessage();
        }
    }

    public function listar() {
        $sql = "SELECT * FROM cliente ORDER BY nome";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deletar($id) {
        $sql = "DELETE FROM cliente WHERE id =:id";
        try {
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
        } catch (PDOException $exc) {
            return $exc->getMessage();
        }
    }

    public function getCliente($id) {
        $sql = "SELECT * FROM cliente WHERE id=:id";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->bindValue(":id", $id);
        $p_sql->execute();
        return $p_sql->fetch(PDO::FETCH_ASSOC);
    }
    
    public function atualizar(Cliente $cliente) {
        try {
            $sql = "UPDATE cliente set nome=:nome, cpf_cnpj=:cpf_cnpj,endereco=:endereco,"
                    . "cidade=:cidade,estado=:estado,telefone=:telefone,email=:email"
                    . " WHERE id=:id";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $cliente->getId());
            $p_sql->bindValue(":nome", $cliente->getNome());
            $p_sql->bindValue(":cpf_cnpj", $cliente->getCpf_cnpj());
            $p_sql->bindValue(":endereco", $cliente->getEndereco());
            $p_sql->bindValue(":cidade", $cliente->getCidade());
            $p_sql->bindValue(":estado", $cliente->getEstado());
            $p_sql->bindValue(":telefone", $cliente->getTelefone());
            $p_sql->bindValue(":email", $cliente->getEmail());
            return $p_sql->execute();
        } catch (PDOException $exc) {
            return $exc->getMessage();
        }
    }
    
}


