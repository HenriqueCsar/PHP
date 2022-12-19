<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\ListarCursos;

switch ($_SERVER['PATH_INFO']){
    case '/listar-cursos':
    
        $controlador = new ListarCursos();
        $controlador->processaRequisicao();

    break;

    case '/novo-curso':
        require 'novo-curso.php';
        break;

    case '/save-curso':
        require '';

    default:
        echo 'Error 404';
}
