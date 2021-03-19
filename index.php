<?php

    use Slim\App;
    
    require_once __DIR__ . '/vendor/autoload.php';

    require_once 'db.php';
    require_once 'Classes/Funcionarios.php';
    require_once 'Model/FuncionarioDAO.php';
    require_once 'Control/FuncionarioController.php';
    
    $config = [
		'settings' => [
			 'displayErrorDetails' => true,
		    	 'addContentLengthHeader' => false,
		]
	];

    $app = new App($config);

    $app->get('/funcionarios', 'FuncionarioController:listar');
    $app->post('/funcionarios', 'FuncionarioController:inserir');
    $app->put("/funcionarios/{id:[0-9]+}", 'FuncionarioController:atualizar');
    $app->delete('/funcionarios/{id:[0-9]+}', 'FuncionarioController:deletar');
    $app->get('/funcionarios/{id:[0-9]+}', 'FuncionarioController:buscaPorFuncionario');

    $app->run();

?>