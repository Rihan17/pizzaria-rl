<?php include('conexao.php')
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/atendente.css">
	<link rel="icon" type="image/x-icon" href="icon-pizza.ico">
	<title>Atendente</title>
</head>

<body>
	<!-- nav bar  -->
	<div class="container-fluid text-center  barra">
		<div class="row justify-content-between">
			<div class="col-3">
				<h2 class="nav">Ola! Leonardo</span>
			</div>
			<div class="col-4 ">
				<h2 class="nav">ÁREA DO ATENDENTE</span>
			</div>
			<div class="col-3  ms-4">
				<a class="btn btn-secondary " href="logout.php" role="button">Sair</a>
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





			<div class="col-8">
				<form method="post" id="formUser">
					<div class="row ">
						<div style="font-size: 30px; color: #FFFFFF;">Novo Pedido</div>
						<hr>
							<div class="col-5">
								<label class="col-form-label" for="nm_login">Categoria</label>
								<select name="tipo" id="tipo" class="form-select">
							</select>
							<div class="col-5">
								<button class="btn btn-secondary mt-4" type="submit">Realizar Pedido</button>
							</div>
						</div>

						
				</form>
				<!-- linha para poder separar as row  -->

				<div style="height: 60px;"></div>

				<div class="row-6">
					<div style="font-size: 30px; color: #FFFFFF;">Produtos</div>
				</div>

				<hr>

				<br>

				<!-- parte inferior do sistema  -->

				<div class="card bg-transparent border border-2 border-secondary rounded-3" style="width: 18rem;">
					<br>
  					<img src="Pizza.jpg" class="card-img-top rounded-3" alt="Pizza de mussarela">
  						<div class="card-body">
    						<h5 class="card-title text-light">Pizza de mussarela</h5>
    						<p class="card-text text-light opacity-50">Deliciosa pizza de mussarela com molho de tomate, mussarela, tomate e orégano</p>
    						<p class="card-text text-light">Valor: R$ 50,00</p>
    						<a href="#" class="btn btn-danger">Adicionar ao pedido</a>
  						</div>
				</div>
				

				<!-- <div class="col-3 border border-2 rounded border-secondary">
					<br>
						<img class="images" src="Pizza.jpg">
						<label class="fs-3 ">Pizza de Mussarela</label>
						<label class="text-secondary text-opacity-75">Deliciosa pizza de mussarela com molho de tomate, mussarela, tomate e orégano</label>
				</div> -->


					<!-- <div class="row" id="user">
						<hr>
						<div class="col-1">
							<label>1</label>
						</div>
						<div class="col-2 align-items-start">
							<label>Rodolfo Araújo</label>
						</div>
						<div class="col-4 align-items-start">
							<label>admin</label>
						</div>
						<div class="col-2 align-items-start">
							<label>Administrador</label>
						</div>
						<div class="col">
							<button class="btn btn-secondary btn-sm">Atualizar</button>
							<button class="btn btn-secondary btn-sm">Excluir</button>
						</div> 
					</div>

					 <div class="row">
						<hr>
						<div class="col-1">
							<label>2</label>
						</div>
						<div class="col-2 align-items-start">
							<label>Larissa Rosa</label>
						</div>
						<div class="col-4 align-items-start">
							<label>lariossa</label>
						</div>
						<div class="col-2 align-items-start">
							<label>Atendente</label>
						</div>
						<div class="col">
							<button class="btn btn-secondary btn-sm">Atualizar</button>
							<button class="btn btn-secondary btn-sm">Excluir</button>
						</div>
					</div>

					<div class="row">
						<hr>
						<div class="col-1">
							<label>3</label>
						</div>
						<div class="col-2 align-items-start">
							<label>Júlio Silva</label>
						</div>
						<div class="col-4 align-items-start">
							<label>julinho</label>
						</div>
						<div class="col-2 align-items-start">
							<label>Cozinha</label>
						</div>
						<div class="col">
							<button class="btn btn-secondary btn-sm">Atualizar</button>
							<button class="btn btn-secondary btn-sm">Excluir</button>
						</div>
						</div> 
				</div> -->
			</div>
		</div>
	</div>
	</div>


</body>

</html>