<?php

    use Slim\App;
    
    require_once __DIR__ . '/vendor/autoload.php';

    require_once 'db.php';
    require_once 'Classes/Posts.php';
    require_once 'Model/PostsDAO.php';
    require_once 'Control/PostsController.php';
    
    $config = [
		'settings' => [
			 'displayErrorDetails' => true,
		    	 'addContentLengthHeader' => false,
		]
	];

    $app = new App($config);

    $app->get('/posts', 'PostsController:listar');
    $app->get('/inserir', 'PostsController:inserir');
    $app->get('/busca', 'PostsController:buscaPorPost');

    $app->run();
?>