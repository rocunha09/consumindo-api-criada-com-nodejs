
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Consuminfo API</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<?php
			$url = "http://localhost:8081/";
			$resultado = json_decode(file_get_contents($url));
		    include_once('menu.php');
      	?>
		<div class="container">
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
					foreach ($resultado as $artigo) { ?>

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