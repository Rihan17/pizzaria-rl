<?php include('conexao.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style-login.css">
	<link rel="icon" type="image/x-icon" href="icon-pizza.ico">
	<title>Cadastre-se</title>
</head>
<body>

	<div class="login">
		<div style="height: 300px; margin: 50px;">
			<h1 class="display-1 col-5 offset-4 row justify-content-center text-light ">R&L Pizzas</h1>
			<h6 class="col-3 offset-5 row justify-content-center text-white-50">(Acesso somente para funcionários)</h6>
		</div>
			</div>

			<div style="height: 250px;"></div>
		<div class="container">
  		<div class="row justify-content-center">
    	<div class="col-4 offset-9">
    		<div class="caixalogin">
    		<form action="" method="post">
    			<br>
      			<label class="lablogin">Login:</label>
      			<input class="form-control" type="text" id="nome" name="nome" placeholder="Sua matrícula">
      			<br>
      			<label class="labsenha">Senha:</label>
      			<input class="form-control" type="password" id="senha" name="senha" placeholder="Sua senha">
      			<br>
      			<div class="container text-center">
      				<button type= "submit" class="btn btn-danger">Entrar</button>
      			<?php
					if($_POST){
					login($_POST['nome'], $_POST['senha']);
						}
				?>
      			</div>
	      	</form>
			</div>
    	</div>

    	<div style="padding: 170px;">
    		<h6 class="row-align-items-end text-white-50 col-5 offset-5 ">Rihan & Léo Systems, todos os direitos reservados®</h6>
    	</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>