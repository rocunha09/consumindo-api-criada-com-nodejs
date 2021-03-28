<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Editar</title>
  </head>
  <body>
        <?php
		      include_once('menu.php');
      	?>
      <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                aqui entra o id
            </div>
            <div class="card-body">
              
              <label for="titulo">Título:</label><br>
              <input type="text" name="titulo" id="" class="form-control"><br>
              <label for="artigo">Artigo:</label><br>
              <textarea class="form-control" name="artigo" rows="5"></textarea><br>

                <a href="#" class="btn btn-warning"> Editar</a>
                <a href="#" class="btn btn-danger"> Deletar</a>
            </div>
        </div>
        <div class="text-end">
          <a href="#" class="btn btn-primary mt-5"> Voltar</a>
        </div>
      </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>