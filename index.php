
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Consuminfo API</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<?php
			include_once("curl-listar.php");
		    include_once('menu.php');
			$alerta = '';
			if (isset($_GET['erro']) && $_GET['erro'] == 1){
				$alerta = 	"<div class='alert alert-danger' role='alert'>
								Falha ao tentar cadastrar seu artigo! tente novamente mais tarde
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
						<input type="submit" name="salvar" class="btn btn-success" value="Salvar Edição">
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
							<a href="processa-deletar.php?id=<?= $artigo->_id ?>" class="btn btn-danger">Deletar</a>
						</div>
					</td>
				  </tr>

				  <?php } ?>

				</tbody>
			  </table>

		</div>
	</body>
</html>