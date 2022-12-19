<?php


if($_SERVER['PATH_INFO'] === '/listar-cursos'){
    require 'listar-cursos.php';
}


    switch (isset($_SERVER['PATH_INFO'])){
        case '/listar-cursos':
            require 'listar-cursos.php';
            break;

        case '/novo-curso':
            require 'novo_curso.php';
            break;
            
        default:
            require 'listar-cursos.php';
            break;
    }
