<?php

class FuncionarioController{

    public function listar($request, $response, $args){
        $dao = new FuncionarioDAO();
        $lista = $dao->listar();
        $response = $response->withJson($lista);
        $response = $response->withHeader("Content-type", "application/json");
        return $response;
    }
    
        
    public function inserir($request, $response, $args){
        $var = $request->getParsedBody();
        //$post = new Funcionarios(0, $var['description'], $var['completed']);
        $post = new Funcionarios(0, $var['nome'], $var['salario'], $var['cpf'], $var['conta_bancaria']);
        $dao = new FuncionarioDAO();
        $post = $dao->inserir($post);
        $response = $response->withJson($post);
        $response = $response->withHeader('Content-type', 'application/json');
        $response = $response->withStatus(201);
        return $response;
    }
        
    public function atualizar($request, $response, $args){
        $id = (int) $args['id'];
        $var = $request->getParsedBody();
        $post = new Funcionarios(0, $var['nome'], $var['salario'], $var['cpf'], $var['conta_bancaria']);
        $dao = new FuncionarioDAO();
        $dao->atualizar($post);
        $response = $response->withJson($post);
        $response = $response->withHeader('Content-type', 'application/json');
        return $response;
    }

    public function deletar(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response, $args){
        $id = (int) $args['id'];
        $dao = new FuncionarioDAO();
        $posts = $dao->deletar($id);
        $dao->deletar($id);
        return $response->withStatus(200)->withHeader('Location', "http://localhost/devprova/posts");
    }

    public function buscaPorFuncionario($request, $response, $args){
        $id = (int) $args['id'];
        $dao = new FuncionarioDAO();
        $post = $dao->buscaPorFuncionario($id);
        $response = $response->withJson($post);
        $response = $response->withHeader('Content-type', 'application/json');
        return $response;
    }
}
?>