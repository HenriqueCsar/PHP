<?php

    switch ($_SERVER['PATH_INFO']){
        case '/listar-cursos':
            require 'listar-cursos.php';
            break;

        case '/novo-curso':
            require 'novo-curso.php';
            break;

        case '/save-curso':
            require '';

        default:
            echo 'Error 404';
    }
