<?php include('conexao.php')
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/Usuários.css">
	<link rel="icon" type="image/x-icon" href="icon-pizza.ico">
	<title>Usuários</title>
</head>

<body>
	<!-- nav bar  -->
	<div class="container-fluid text-center  barra">
		<div class="row justify-content-between">
			<div class="col-3">
				<h2 class="nav">Ola! Leonardo</span>
			</div>
			<div class="col-4 ">
				<h2 class="nav">GERENCIAR-USUÁRIOS</span>
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
				<form method="post" id="formUser">
					<div class="row ">
						<label>Novo Usuário</label>
						<hr>
						<div class="col-6">
							<label class="col-form-label" for="nm_usuario">Nome do Usuário :</label>
							<input type="text" name="nome" id="nome" class="form-control">
						</div>
						<div class="col-3">
							<label class="col-form-label" for="ds_tipo">Tipo :</label>
							<select name="tipo" id="tipo" class="form-select">
							</select>
						</div>

						<div class="row  g-3 align-items-center">
							<div class="col-4">
								<label class="col-form-label" for="nm_login">Login :</label>
								<input type="text" name="login" id="login" class="form-control">
							</div>
							<div class="col-4">
								<label class="col-form-label" for="nm_senha">Senha:</label>
								<input type="password" name="senha" id="senha" class="form-control">
							</div>
							<div class="col-4">
								<button class="btn btn-secondary mt-4" type="submit">Cadastrar</button>
							</div>
				</form>
				<!-- linha para poder separar as row  -->

				<div style="height: 60px;"></div>

				<div class="row-6">
					<div style="font-size: 30px; color: #FFFFFF;">Registros</div>
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
							<label>Login</label>
						</div>
						<div class="col-2">
							<label></label>
						</div>
						<div class="col-2">
							<label>Tipo</label>
						</div>
						<div class="col">
							<label>#controles</label>
						</div>
						<hr>
					</div>


					<div class="row" id="user">
						<!-- <hr>
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
						</div> -->
					</div>

					<!-- <div class="row">
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
						</div> -->
				</div>
			</div>
		</div>
	</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	<script>
		var tipo = document.getElementById('tipo');
		var user = document.getElementById('user');

		carregar();

		//Função que irá buscar os dados
		//Assíncrona: depende dos dados para carregar 
		async function carregar() {
			var retorno = await fetch('ajax_usuario.php?todos=tipos');
			var tipos = await retorno.json();

			var select = '<option>Selecione..</option>';
			for (var i = 0; i < tipos.length; i++) {
				select += '<option value=' + tipos[i].cd_tipo_usuario + '>';
				select += tipos[i].nm_tipo_usuario + '</option>';
			}
			tipo.innerHTML = select;

			var retorno = await fetch('ajax_usuario.php?todos=users');
			var users = await retorno.json();

			var linhas = '';
			for (var i = 0; i < users.length; i++) {


				linhas += '<hr>';
				linhas += '<div class="col-1">';
				linhas += '<label>' + users[i].cd_usuario + '</label>';
				linhas += '</div>';
				linhas += '<div class="col-2 align-items-start">';
				linhas += '<label>' + users[i].nm_usuario + '</label>';
				linhas += '</div>';
				linhas += '<div class="col-4 align-items-start">';
				linhas += '<label>' + users[i].nm_login + '</label>';
				linhas += '</div>';
				linhas += '<div class="col-2 align-items-start">';
				linhas += '<label>' + users[i].cd_tipo + '</label>';
				linhas += '</div>';
				linhas += '<div class="col">';
				linhas += '<button onclick="delUser(' + users[i].cd_usuario + ')" class="btn btn-secondary btn-sm">Excluir</button>';
				linhas += '<button onclick="edit(' + users[i].cd_usuario + ')" class="btn btn-secondary btn-sm">Editar</button>';
				linhas += '</div>';
				linhas += '</div>';

			}
			user.innerHTML = linhas;
		}
			async function delUser(id) {
				var certeza = confirm("Tem certeza amigão?");
				if (certeza) {
					var retorno = await fetch('ajax_usuario.php?del=' + id);
					carregar();
				}
			}

			async function edit(id) {
				var retorno = await fetch('ajax_usuario.php?usuario=' + id);
				var user = await retorno.json();
				document.getElementById('nome').value = user.nm_usuario;
				document.getElementById('login').value = user.nm_login;
				document.getElementById('login').readOnly = true; //Bloqueio
				document.getElementById('senha').value = user.cd_senha;
				document.getElementById('tipo').value = user.cd_tipo;
			}

			var form = document.getElementById('formUser');

			form.addEventListener('submit', function(evento) {
				evento.preventDefault();

				//Vamos criar um objeto de dados de formulário a partir dele 
				const dados = new FormData(form);

				//Enviando a requisição
				fetch('ajax_usuario.php', {
						method: 'POST',
						body: dados
					})
					.then(retorno => retorno.json())
					.then(function(retorno) {
						alert(retorno.msg);
						carregar();
					});
			});

		
	</script>

</body>

</html>