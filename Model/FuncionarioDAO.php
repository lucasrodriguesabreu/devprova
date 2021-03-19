<?php

class FuncionarioDAO{

    public function listar(){
        $query = "SELECT * FROM funcionarios";
        $pdo = db::dbConnection();
        $pdo = new PDO('mysql:host=localhost;dbname=db', 'root', 'root');
        $comando = $pdo->prepare($query);
        $comando->execute();
        $funcionarios = array();
        while($row = $comando->fetch(PDO::FETCH_OBJ)){
            $funcionarios[] = new Funcionarios($row->id, $row->nome, $row->salario, $row->cpf, $row->conta_bancaria);
        }
        return $funcionarios;
    }

    public function inserir(Funcionarios $funcionarios){
        $query = "INSERT INTO posts(nome, salario, cpf, conta_bancaria ) VALUES 
        (:nome, :salario, :cpf, :conta_bancaria)";
        $pdo = db::dbConnection();
        $comando = $pdo->prepare($query);
        $comando->bindParam(":nome", $funcionarios->nome);
        $comando->bindParam(":salario", $funcionarios->salario);
        $comando->bindParam(":cpf", $funcionarios->cpf);
        $comando->bindParam(":conta_bancaria", $funcionarios->conta_bancaria);
        $comando->execute();
        $funcionarios->id = $pdo->lastInsertId();
        return $funcionarios;
    }
    public function atualizar(Funcionarios $funcionarios){
        $query = "UPDATE funcionarios SET nome = :nome, salario = :salario, cpf = :cpf, conta_bancaria = :conta_bancaria WHERE id = :id";
        $pdo = db::dbConnection();
        $comando = $pdo->prepare($query);
        $comando->bindParam(":nome", $funcionarios->nome);
        $comando->bindParam(":salario", $funcionarios->salario);
        $comando->bindParam(":cpf", $funcionarios->cpf);
        $comando->bindParam(":conta_bancaria", $funcionarios->conta_bancaria);
        $comando->execute();
        return $funcionarios;
    }
    
    public function deletar($id){
        $query = "DELETE from funcionarios WHERE id = :id";
        $pdo = db::dbConnection();
        $comando = $pdo->prepare($query);
        $comando->bindParam(":id", $id);
        $comando->execute();
    }
    public function buscaPorFuncionario($id){
        $query = "SELECT * FROM posts WHERE id = :id";
        $pdo = db::dbConnection();
        $comando = $pdo->prepare($query);
        $comando->bindParam(":id", $id);
        $comando->execute();
        $resultado = $comando->fetch(PDO::FETCH_OBJ);
        return new Funcionarios($resultado->id, $resultado->nome, $resultado->salario, $resultado->cpf, $resultado->conta_bancaria);
    }
}
?>