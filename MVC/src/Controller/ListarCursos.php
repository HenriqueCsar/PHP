<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursos{
    private $repositorioDeCursos;

    function __construct(){
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }

    function processaRequisicao(){

        $cursos = $this->repositorioDeCursos->findAll();
    }



}