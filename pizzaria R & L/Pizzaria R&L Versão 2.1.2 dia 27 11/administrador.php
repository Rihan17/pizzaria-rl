<?php include('conexao.php');
	Proteger(2);
 ?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/administrador.css">
	<link rel="icon" type="image/x-icon" href="icon-pizza.ico">
	<title>administrador</title>
</head>

<body>
	<!-- nav bar  -->
	<div class="container-fluid text-center  barra">
		<div class="row justify-content-between">
			<div class="col-3">
				<h2 class="nav"> Ola! <?php echo $_SESSION['nome'];?> </span>
			</div>
			<div class="col-3 ">
				<h2 class="nav">DASHBOARD</span>
			</div>
			<div class="col-3  ms-4">
				<a class="btn btn-secondary " href="logout.php" role="button">Sair</a>
			</div>
		</div>
	</div>
	<br>



	<div class="container-fluid">
		<div class="row">
			<div class="col-4">
				<div class="col-4 text-center">
					<label>Configuração</label>
					<hr>
					<br>
				</div>

<!-- texto centrais e linhas -->

			<?php include('menu.inc'); ?>
				


			</div>

			<!-- parte central -->
			<div class="col-8">
				<!-- nomes principal -->
				<div class="row">
						<label>sistemas</label>
						<hr>

					<div class="row">
						<div class="col-3  text-center mt-3 ms-5">
							<h2><?php Total('produtos'); ?></h2>
							<div class="d-grid gap-2">
								<button class="btn btn-secondary">Produtos</button>
							</div>
						</div>
						<div class="col-3  offset-1 text-center mt-3">
							<h2><?php Total('categorias'); ?></h2>
							<div class="d-grid gap-2">
								<button class="btn btn-secondary">Categorias</button>
							</div>
						</div>
						<div class="col-3  offset-1 text-center mt-3">
							<h2><?php Total('usuarios'); ?></h2>
							<div class="d-grid gap-2">
								<button class="btn btn-secondary">Usuarios</button>
							</div>
						</div>
					</div>

				</div>
				<br>
				<br>
				<br>
				<div class="row">
					<div class="col">
						<label>Operações</label>
						<hr>
					</div>
					<div class="row">
						<div class="col-3  text-center ">
							<h2>18</h2>
							<div class="d-grid gap-2">
								<button class="btn btn-secondary">Restaurante fechado</button>
							</div>
						</div>
						<div class="col-3   text-center ">
							<h2>51</h2>
							<div class="d-grid gap-2">
								<button class="btn btn-secondary">Delivery Fechado</button>
							</div>
						</div>
						<div class="col-3   text-center ">
							<h2>18</h2>
							<div class="d-grid gap-2">
								<button class="btn btn-secondary">Restaurante Aberto</button>
							</div>
						</div>
						<div class="col-3   text-center ">
							<h2>51</h2>
							<div class="d-grid gap-2">
								<button class="btn btn-secondary">Delivey Aberto</button>
							</div>
						</div>



					</div>

				</div>
			</div>
		</div>
	</div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
	crossorigin="anonymous"></script>

</html>

</html>