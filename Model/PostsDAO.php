<?php

class PostsDAO{

    public function listar(){
        $query = "SELECT * FROM posts";
        $pdo = db::dbConnection();
        $pdo = new PDO('mysql:host=localhost;dbname=db', 'root', 'root');
        $comando = $pdo->prepare($query);
        $comando->execute();
        $posts = array();
        while($row = $comando->fetch(PDO::FETCH_OBJ)){
            $posts[] = new Posts($row->id, $row->description, $row->completed, $row->update_at, $row->created_at);
        }
        return $posts;
    }

    public function inserir(Posts $posts){
        $query = "INSERT INTO posts(description, completed, update_at, created_at) VALUES 
        (:description, ':completed', NOW(), NOW())";
        $pdo = db::dbConnection();
        $comando = $pdo->prepare($query);
        $comando->bindParam(":description", $posts->description);
        $comando->bindParam(":completed", $posts->completed);
        $comando->execute();
        $posts->id = $pdo->lastInsertId();
        return $posts;
    }

    public function atualizar(Posts $posts){
        $query = "UPDATE produto SET description = :description, completed = :completed, update_at = :update_at, 
        created_at = :created_at, WHERE id = :id";
        $pdo = db::dbConnection();
        $comando = $pdo->prepare($query);
        $comando = bindParam(":description", $posts->description);
        $comando = bindParam(":completed", $posts->completed);
        $comando = bindParam(":update_at", $posts->update_at);
        $comando = bindParam(":created_at", $posts->created_at);
        $comando->execute();
        return $posts;
    }

    public function deletar($id){
        $query = "DELETE from cliente WHERE id = :id";
        $pdo = db::dbConnection();
        $comando = $pdo->prepare($query);
        $comando->bindParam(":id", $id);
        $comando->execute();
    }

    public function buscaPorPost($id){
        $query = "SELECT * FROM posts WHERE id = :id";
        $pdo = db::dbConnection();
        $comando = $pdo->prepare($query);
        $comando = $pdo->bindParam(":id", $id);
        $comando->execute();
        $resultado = $comando->fetch(PDO::FETCH_OBJ);
        return new Posts($resultado->id, $resultado->description, $resultado->update_at, $resultado->created_at);
    }
}
?>