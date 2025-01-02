<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/Atendimento-mesas.css">
	<link rel="icon" type="image/x-icon" href="icon-pizza.ico">
	<title>Atendimento-Restaurante</title>
</head>

<body>
	<!-- nav bar  -->
	<div class="container-fluid text-center  barra">
		<div class="row justify-content-between">
			<div class="col-3">
				<h2 class="nav">Ola! Leonardo</span>
			</div>
			<div class="col-4 ">
				<h2 class="nav">ATENDIMENTO-RESTAURANTE</span>
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
					<label>Restaurante</label>
					<hr>
					<br>
				</div>

				<div class="row-align-items-center ">
					<div class="col-4">
						<div class="d-grid gap-2">
							<a href="" class="btn btn-outline-secondary active">Visualizar Pedidos</a>
						</div>
						<br>
					</div>
				</div>


				<div class="row-align-items-center ">
					<div class="col-4">
						<div class="d-grid gap-2">
							<a href="" class="btn btn-outline-secondary">Novo Pedido</a>
						</div>
						<br>
					</div>
				</div>


				<div class="row-align-items-center">
					<div class="col-4">
						<div class="d-grid gap-2">
							<a href="" class="btn btn-outline-secondary">Fechar Mesa</a>
						</div>
						<br>
					</div>
				</div>

				<br>
				<br>


				<div class="col-4 text-center">
					<label>Delivery</label>
					<hr>
					<br>
				</div>


				<div class="row-align-items-center ">
					<div class="col-4">
						<div class="d-grid gap-2">
							<a href="" class="btn btn-outline-secondary">Visualizar Pedidos</a>
						</div>
						<br>
					</div>
				</div>


				<div class="row-align-items-center ">
					<div class="col-4">
						<div class="d-grid gap-2">
							<a href="" class="btn btn-outline-secondary">Novo Pedido</a>
						</div>
						<br>
					</div>
				</div>
			</div>





			<div class="col-7">
				<form>
					<div class="row ">
						<label>Atendimento Mesas:</label>
					<hr>
				<!-- linha para poder separar as row  -->

				<div class="row">
					<div class="col" style="height:50px;"></div>
				</div>

				<!-- parte inferior do sistema  -->
				<div class="col-12">

					<div class="row">
						<div class="col-1">
							<label>Mesa</label>
						</div>
						<div class="col-2">
							<label>Pedidos</label>
						</div>
						<div class="col-1">
							<label>Valor</label>
						</div>
						<div class="col-2">
							<label>Atendimento</label>
						</div>
						<div class="col-2">
							<label >Status</label>
						</div>

						<div class="col">
							<label>Opção</label>
						</div>

						<div class="col">
							<label>#controles</label>
						</div>
						<hr>
					</div>

					<div class="row">
						<hr>
						<div class="col-1">
							<label>12</label>
						</div>
						<div class="col-2 align-items-start">
							<label style="font-size: 13px;">1x Pizza de calabresa</label>
							<label style="font-size: 13px;">1x Refrigerante 2lt</label>
						</div>
						<div class="col-1 align-items-start">
							<label style="font-size: 13px;">R$ 72,50</label>
							<label style="font-size: 13px;">R$ 12,99</label>
						</div>
						<div class="col-2 align-items-start">
							<label>Júlio</label>
							<br>
							<label>Júlio</label>
						</div>
						<div class="col-2 align-items-start">
							<button class="btn btn-success btn-sm">Em Produção</button>
							<button class="btn btn-light btn-sm">Foi Entregue</button>
						</div>
						<div class="col-2 align-items-start">
							<button class="btn btn-secondary btn-sm">Cancelar</button>
						</div>
						<div class="col">
							<button class="btn btn-dark btn-sm">Fechar Mesa</button>
						</div>
					</div>

					<br>
					<hr>
					<br>

						<div class="row">

						<div class="col-1">
							<label>19</label>
						</div>
						<div class="col-2 align-items-start">
							<label style="font-size: 13px;">1x Pizza de Frango</label>
							<label style="font-size: 13px;">1x Pizza de Calabresa</label>
						</div>
						<div class="col-1 align-items-start">
							<label style="font-size: 13px;">R$ 72,50</label>
							<label style="font-size: 13px;">R$ 59,90</label>
						</div>
						<div class="col-2 align-items-start">
							<label>Júlio</label>
							<br>
							<label>Júlio</label>
						</div>
						<div class="col-2 align-items-start">
							<button class="btn btn-success btn-sm">Em Produção</button>
							<button class="btn btn-light btn-sm">Foi Entregue</button>
						</div>
						<div class="col-2 align-items-start">
							<button class="btn btn-secondary btn-sm">Cancelar</button>
						</div>
						<div class="col">
							<button class="btn btn-dark btn-sm">Fechar Mesa</button>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</body>

</html>
