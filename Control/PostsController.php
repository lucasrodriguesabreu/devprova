<?php

class PostsController{

    public function listar($request, $response, $args){

        $dao = new PostsDAO();
        $lista = $dao->listar();
        $response = $response->withJson($lista);
        $response = $response->withHeader("Content-type", "application/json");
        return $response;
    }
}
?>