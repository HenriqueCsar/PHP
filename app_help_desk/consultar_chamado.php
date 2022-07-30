<?php 

//*COLOCANDO SESSÃO PARA IMPEDIR DE ACESSAR A PÁGINA SEM AUTORIZAÇÃO*//
require_once('validador_acesso.php');

if(file_exists('banco_de_dados.txt')){
  $arquivo = fopen('banco_de_dados.txt', 'r');
  while(!feof($arquivo)){
   $chamado[] = fgets($arquivo);
  }
}

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            <div class="card-body">
            <? foreach($chamado as $chamados) { ?>
              <? $chamados2 = explode('#', $chamados) ?> 
              <? if(count($chamados2)<3){continue;} ?>       
              
              <? if($_SESSION['id_acesso']==2 && $chamados2[0] == 2){ ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamados2[1] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamados2[2] ?></h6>
                  <p class="card-text"><?= $chamados2[3] ?></p>
                </div>
              </div>
              <? } ?>

              <? if($_SESSION['id_acesso']==1){ ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamados2[1] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamados2[2] ?></h6>
                  <p class="card-text"><?= $chamados2[3] ?></p>
                </div>
              </div>
              <? } ?>

            <? }?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>