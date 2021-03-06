<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>visualizar</title>
  </head>
  <body>
      <?php
        include_once('menu.php');
        require_once('curl-visualizar.php');
        $alerta = '';
        if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1){
          $alerta = 	"<div class='alert alert-success' role='alert'>
                  Artigo editado com sucesso!
                </div>";
        } 

        if (isset($_GET['id']) && $_GET['id'] !=''){
          $response->_id = $_GET['id'];
        };
        
      ?>
      <div class="container mt-5">
      <?= $alerta ?>
        <div class="card">
            <div class="card-header">
              <h5>id: <?= $response->_id?></h5> 
            </div>
            <div class="card-body">
                
                <h5 class="card-title"><?= $response->titulo?></h5>
                
                <p class="card-text"><?= $response->conteudo?></p>

                <a href="editar.php?id=<?= $response->_id?>" class="btn btn-warning"> Editar</a>
                <a href="curl-deletar.php?tela=visualizar&id=<?= $response->_id?>" class="btn btn-danger"> Deletar</a>
            </div>
        </div>
        <div class="text-end">
            <a href="index.php" class="btn btn-primary mt-5"> Voltar</a>
        </div>
      </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>