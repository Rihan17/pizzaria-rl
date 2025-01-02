<?php include('conexao.php')
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/produtos.css">
	<link rel="icon" type="image/x-icon" href="icon-pizza.ico">
	<title>Produtos</title>
</head>

<body>
	<!-- nav bar  -->
	<div class="container-fluid text-center  barra">
		<div class="row justify-content-between">
			<div class="col-3">
				<h2 class="nav">Ola! Leonardo</span>
			</div>
			<div class="col-4 ">
				<h2 class="nav">GERENCIAR-PRODUTOS</span>
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


			<div class="col-8">
				<form>
					<div class="row ">
						<label>Nova categoria</label>
						<hr>
						<div class="col-6">
							<label class="col-form-label" for="nm_produto">Nome do produto :</label>
							<input type="text" name="nm_produto" class="form-control">
						</div>
						<div class="col-3">
							<label class="col-form-label" for="vl_produto">valor do produto :</label>
							<input type="text" name="vl_produto" class="form-control">
						</div>
						<div class="col-3">
							<label class="col-form-label" for="vl_produto">Tipo do produto :</label>
							<select name="categoria_produto" class="form-select">
								<option></option>
								<option></option>
								<option></option>
							</select>
						</div>

						<div class="row  g-3 align-items-center">
							<div class="col-5">
								<label class="col-form-label" for="ds_produto">Descrição :</label>
								<input type="text" name="ds_produto" class="form-control">
							</div>
							<div class="col-4">
								<label class="col-form-label" for="vl_produto">Foto do produto :</label>
								<input type="file" name="vl_produto" class="form-control">
							</div>
							<div class="col-3">
								<button class="btn btn-secondary mt-4">Cadastrar</button>
							</div>

				</form>
				<!-- linha para poder separar as row  -->

				<div class="row">
					<div class="col" style="height:50px;"></div>
				</div>

				<!-- parte inferior do sistema  -->
				<div class="col">

					<div class="row">
						<div class="col-1">
							<label>Cod</label>
						</div>
						<div class="col-2">
							<label>Nome</label>
						</div>
						<div class="col-2">
							<label>Descrição</label>
						</div>
						<div class="col-2">
							<label></label>
						</div>
						<div class="col-2">
							<label>Categoria</label>
						</div>
						<div class="col">
							<label>#controles</label>
						</div>
						<hr>
					</div>

					<div class="row">
						<hr>
						<div class="col-1">
							<label>1</label>
						</div>
						<div class="col-2 align-items-start">
							<label>Pizza de calabresa</label>
						</div>
						<div class="col-4 align-items-start">
							<label>calabresa, cebola e azeitonas</label>
						</div>
						<div class="col-2 align-items-start">
							<label>Pizzas salgada</label>
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
							<label>Pizza de palmito</label>
						</div>
						<div class="col-4 align-items-start">
							<label>Mussarela, palmito e orégano</label>
						</div>
						<div class="col-2 align-items-start">
							<label>Pizzas salgada</label>
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
							<label>Pizza de frango</label>
						</div>
						<div class="col-4 align-items-start">
							<label>Frango, mussarela e azeitonas</label>
						</div>
						<div class="col-2 align-items-start">
							<label>Pizzas salgada</label>
						</div>
						<div class="col">
							<button class="btn btn-secondary btn-sm">Atualizar</button>
							<button class="btn btn-secondary btn-sm">Excluir</button>
						</div>
					</div>

					<div class="row">
						<hr>
						<div class="col-1">
							<label>4</label>
						</div>
						<div class="col-2 align-items-start">
							<label>Refrigerante</label>
						</div>
						<div class="col-4 align-items-start">
							<label>2 litros</label>
						</div>
						<div class="col-2 align-items-start">
							<label>Bebidas</label>
						</div>
						<div class="col">
							<button class="btn btn-secondary btn-sm">Atualizar</button>
							<button class="btn btn-secondary btn-sm">Excluir</button>
						</div>
					</div>

					<div class="row">
						<hr>
						<div class="col-1">
							<label>5</label>
						</div>
						<div class="col-2 align-items-start">
							<label>Sorvete</label>
						</div>
						<div class="col-4 align-items-start">
							<label>Picolé sabores</label>
						</div>
						<div class="col-2 align-items-start">
							<label>Sobremesas</label>
						</div>
						<div class="col">
							<button class="btn btn-secondary btn-sm">Atualizar</button>
							<button class="btn btn-secondary btn-sm">Excluir</button>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</body>

</html>