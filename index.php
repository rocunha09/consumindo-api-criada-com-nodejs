
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Consumindo API</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<?php
			include_once("curl-listar.php");
		    include_once('menu.php');
			$alerta = '';
			if (isset($_GET['erro']) && $_GET['erro'] == 1){
				$alerta = 	"<div class='alert alert-danger' role='alert'>
								Falha ao tentar CADASTRAR seu artigo! tente novamente mais tarde
							</div>";
			} 

			if (isset($_GET['erro']) && $_GET['erro'] == 2){
				$alerta = 	"<div class='alert alert-danger' role='alert'>
								Falha ao tentar DELETAR seu artigo! tente novamente mais tarde
							</div>";
			}

			if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1){
				$alerta = 	"<div class='alert alert-success' role='alert'>
								Artigo CADASTRADO com sucesso!
							</div>";
			} 

			if (isset($_GET['sucesso']) && $_GET['sucesso'] == 2){
				$alerta = 	"<div class='alert alert-success' role='alert'>
								Artigo DELETADO com sucesso!
							</div>";
			} 
      	?>
		<div class="container mt-5 mb-5">
		<?= $alerta ?>
			<div class="card">
				<div class="card-header">
					<h5>Entre com o novo artigo a ser cadastrado</h5> 
				</div>
				<div class="card-body">
					<form action="curl-cadastrar.php" method="post"> 
						<label for="titulo">Título:</label><br>
						<input type="text" name="titulo" id="titulo" class="form-control"><br>

						<label for="artigo">Artigo:</label><br>
						<textarea class="form-control" name="conteudo" id="conteudo"rows="5"></textarea><br>
						<input type="submit" name="salvar" class="btn btn-success" value="Salvar Artigo">
					</form>
				</div>
			</div>
		</div>
		<div class="container">
		<h5>Lista de Artigos cadastrados</h5> 
			<table class="table table-striped">
				<thead>
				  <tr class="text-center">
					<th scope="col">ID</th>
					<th scope="col">Título</th>
					<th scope="col">Ação</th>
				  </tr>
				</thead>
				<tbody>
				<?php
					foreach ($response as $artigo) { ?>

				  <tr>
					<td class="text-center">
						<h5><?= $artigo->_id ?></h5>
					</td>
					<td class="text-center">
					<h5><?= $artigo->titulo ?></h5>
					</td>
					<td class="text-right">
						<div class="d-inline ml-3">
							<a href="visualizar.php?id=<?= $artigo->_id ?>" class="btn btn-success">Visualizar</a>
						</div>
						<div class="d-inline ml-3">
							<a href="curl-deletar.php?tela=index&id=<?= $artigo->_id ?>" class="btn btn-danger">Deletar</a>
						</div>
					</td>
				  </tr>

				  <?php } ?>

				</tbody>
			  </table>

		</div>
	</body>
</html>