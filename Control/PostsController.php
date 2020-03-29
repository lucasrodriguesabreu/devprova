<?php

class PostsController{

    public function listar($request, $response, $args){
        $dao = new PostsDAO();
        $lista = $dao->listar();
        $response = $response->withJson($lista);
        $response = $response->withHeader("Content-type", "application/json");
        return $response;
    }
    
        
    public function inserir($request, $response, $args){
        $var = $request->getParsedBody();
        $post = new Posts(0, $var['description'], $var['completed']);
        //$post = new Posts(0, $var['description'], $var['completed'], date($_POST['created_at']), date($_POST['update_at']));
        $dao = new PostsDAO();
        $post = $dao->inserir($post);
        $response = $response->withJson($post);
        $response = $response->withHeader('Content-type', 'application/json');
        $response = $response->withStatus(201);
        return $response;
    }
        
    public function atualizar($request, $response, $args){
        $id = (int) $args['id'];
        $var = $request->getParsedBody();
        $post = new Posts($id, $var['description'], $var['completed']);
        $dao = new PostsDAO();
        $dao->atualizar($post);
        $response = $response->withJson($post);
        $response = $response->withHeader('Content-type', 'application/json');
        return $response;
    }

    public function deletar(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response, $args){
        $id = (int) $args['id'];
        $dao = new PostsDAO();
        $posts = $dao->deletar($id);
        $dao->deletar($id);
        return $response->withStatus(200)->withHeader('Location', "http://localhost/devprova/posts");
    }

    public function buscaPorPost($request, $response, $args){
        $id = (int) $args['id'];
        $dao = new PostsDAO();
        $post = $dao->buscaPorPost($id);
        $response = $response->withJson($post);
        $response = $response->withHeader('Content-type', 'application/json');
        return $response;
    }
}
?>