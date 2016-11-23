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

    public function inserir(Funcionario $funcionario) {
        try {
            $sql = "INSERT INTO funcionario "
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
                    . " senha)"
                    . " VALUES "
                    . " (:id,"
                    . " :nome,"
                    . " :endereco,"
                    . " :cidade,"
                    . " :estado,"
                    . " :telefone,"
                    . " :email"
                    . " :cargo"
                    . " :salario"
                    . " :login"
                    . " :senha";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $funcionario->getId());
            $p_sql->bindValue(":nome", $funcionario->getNome());
            $p_sql->bindValue(":endereco", $funcionario->getEndereco());
            $p_sql->bindValue(":cidade", $funcionario->getCidade());
            $p_sql->bindValue(":estado", $funcionario->getEstado());
            $p_sql->bindValue(":telefone", $funcionario->getTelefone());
            $p_sql->bindValue(":email", $funcionario->getEmail());
            $p_sql->bindValue(":cargo", $funcionario->getCargo());
            $p_sql->bindValue(":salario", $funcionario->getSalario());
            $p_sql->bindValue(":login", $funcionario->getLogin());
            $p_sql->bindValue(":senha", $funcionario->getSenha());
            return $p_sql->execute();
        } catch (PDOException $exc) {
            return $exc->getMessage();
        }
    }

    public function listar() {
        $sql = "SELECT * FROM funcionario ORDER BY nome";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deletar($id) {
        $sql = "DELETE FROM funcionario WHERE id =:id";
        try {
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
        } catch (PDOException $exc) {
            return $exc->getMessage();
        }
    }

    public function getFuncionario($id) {
        $sql = "SELECT * FROM funcionario WHERE id=:id";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->bindValue(":id", $id);
        $p_sql->execute();
        return $p_sql->fetch(PDO::FETCH_ASSOC);
    }
    
    public function atualizar(Funcionario $funcionario) {
        try {
            $sql = "UPDATE funcionario set id=:id, nome=:nome, endereco=:endereco,"
                    . "cidade=:cidade,estado=:estado,telefone=:telefone,email=:email,"
                    . "cargo=:cargo, salario=:salario, login=:login, senha=:senha"
                    . " WHERE id=:id";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $funcionario->getId());
            $p_sql->bindValue(":nome", $funcionario->getNome());
            $p_sql->bindValue(":endereco", $funcionario->getEndereco());
            $p_sql->bindValue(":cidade", $funcionario->getCidade());
            $p_sql->bindValue(":estado", $funcionario->getEstado());
            $p_sql->bindValue(":telefone", $funcionario->getTelefone());
            $p_sql->bindValue(":email", $funcionario->getEmail());
            $p_sql->bindValue(":cargo", $funcionario->getCargo());
            $p_sql->bindValue(":salario", $funcionario->getSalario());
            $p_sql->bindValue(":login", $funcionario->getLogin());
            $p_sql->bindValue(":senha", $funcionario->getSenha());
            return $p_sql->execute();
        } catch (PDOException $exc) {
            return $exc->getMessage();
        }
    }
    
}


