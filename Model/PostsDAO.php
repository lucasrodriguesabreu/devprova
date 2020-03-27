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
}
?>