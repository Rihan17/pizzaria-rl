<?php include('conexao.php') ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/restaurante.css">
	<link rel="icon" type="image/x-icon" href="icon-pizza.ico">
	<title></title>
</head>

<body>
	<?php
	if (isset($_GET['excluir'])) {
		delCategoria($_GET['excluir']);
		echo '<script>
				setInterval(function()){
					history.go(-1);
					},2000;			
			</script>';
	}
	?>
	<!-- nav bar  -->
	<div class="container-fluid text-center  barra">
		<div class="row justify-content-between">
			<div class="col-3">
				<h2 class="nav">Ola! Leonardo</span>
			</div>
			<div class="col-4 ">
				<h2 class="nav">GERENCIAR-CATEGORIAS</span>
			</div>
			<div class="col-3  ms-4">
				<a class="btn btn-secondary " href="C:/xampp/htdocs/18.09.2024/index.html" role="button">Sair</a>
			</div>
		</div>
	</div>
	<br>

	<!-- texto centrais e linhas -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-4">
				<div class="col-4 text-center">
					<div style="font-size: 30px; color: #FFFFFF;">Menu</div>
					<hr>
					<br>
				</div>

				<?php include('menu.inc'); ?>




			</div>

			<!-- parte central -->

			<div class="col-8">
				<div class="row">

					<label>Nova categoria</label>
					<hr>
				</div>

				<form method="post">
					<div class="row  g-3 align-items-center">
						<div></div>
						<div class="col-2">
							<label class="col-form-label" for="nm_categoria">Nome da categoria:</label>
						</div>
						<div class="col-6">
							<input type="text" name="categoria" class="form-control">
						</div>
						<div class="col-2">
							<button type="submit" class="btn btn-secondary">Cadastrar</button>
						</div>
					</div>
				</form>
				<?php if ($_POST) {
					addCategoria($_POST['categoria']);
				}
				?>

				<!-- linha para poder separar as row  -->

				<div class="row">
					<div class="col" style="height:200px;"></div>
				</div>


				<div class="row">
					<label>Registros</label>
					<hr>
				</div>
				<!-- parte inferior do sistema  -->
				<div class="col">

					<div class="row">
						<div class="col-1">
							<label>Cod</label>
						</div>
						<div class="col-7">
							<label>Nome</label>
						</div>
						<div class="col">
							<label>#controles</label>
						</div>
						<hr>
					</div>

					<?php

					$todas = getCategorias();

					while ($linha = $todas->fetch_array()) {
						echo '<div class="row">
						<div class="col-1">
							<label>' . $linha['cd_categoria'] . '</label>
						</div>
						<div class="col-7 align-items-start">
							<label>' . $linha['nm_categoria'] . '</label>
						</div>
						<div class="col">
							<a href="?atualizar=' . $linha['cd_categoria'] . '" class="btn btn-secondary btn-sm">Atualizar</a>
							<a href="?excluir=' . $linha['cd_categoria'] . '" class="btn btn-secondary btn-sm">Excluir</a>
						</div>
					</div>';
					}
					?>
				</div>
			</div>
		</div>
	</div>
</body>

</html>