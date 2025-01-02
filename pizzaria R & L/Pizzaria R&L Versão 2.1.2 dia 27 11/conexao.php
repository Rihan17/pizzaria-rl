<?php

session_start();

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_pizzaria';
$con = new mysqli($server, $user, $pass, $db);


if (!$con) {
	echo "Erro na conexão !";
}

function getUsers($cd)
{
	$sql = 'SELECT cd_usuario, nm_usuario, nm_login, cd_tipo 
				FROM tb_usuario';

	if ($cd > 0) {
		$sql = ' WHERE cd_usuario ='.$cd;
	}

	$res = $GLOBALS['con']->query($sql);
	return $res;
}

function getTiposUsers()
{
	$sql = 'SELECT * FROM tb_tipo_usuario';
	$res = $GLOBALS['con']->query($sql);
	return $res;
}

function login($usuario, $senha)
{
	$comando = 'SELECT * FROM tb_usuario WHERE nm_login = "' . $usuario . '" AND cd_senha ="' . $senha . '"';

	//Envia o comando para o banco e armazena a resposta

	$resp = $GLOBALS['con']->query($comando);

	if ($resp->num_rows == 1) {
		$usuario = $resp->fetch_array();

		//Armazenando dados na sessão

		$_SESSION['cd'] = $usuario['cd_usuario'];
		$_SESSION['nome'] = $usuario['nm_usuario'];
		$_SESSION['tipo'] = $usuario['cd_tipo'];

		//Verifica nível de acesso

		if ($usuario['cd_tipo'] == 2) {

			//Redireciona para a página certa

			header('location: administrador.php');
		} else {
			echo "Não é o gerente !";
		}
	} else {
		echo  "<script>alert('Usuário e/ou senha inválidos !');</script>";
	};
}

function Proteger($nivel)
{
	if ($_SESSION['tipo'] != $nivel) {
		header('location: login.php');
	}
}

function Total($deque)
{
	if ($deque == 'usuarios') {
		$comando = 'SELECT COUNT(cd_usuario) as Total FROM tb_usuario';
	} else if ($deque == 'categorias') {
		$comando = 'SELECT COUNT(cd_categoria) as Total FROM tb_categoria';
	} else if ($deque == 'produtos') {
		$comando = 'SELECT COUNT(cd_produto) as Total FROM tb_produto';
	}

	$resposta = $GLOBALS['con']->query($comando);

	$Total = $resposta->fetch_array();

	echo $Total['Total'];
}

function addCategoria($nome)
{
	$categoria = $_POST['categoria'];
	$comando = 'INSERT INTO tb_categoria VALUES (NULL,"' . $categoria . '");';
	$resposta = $GLOBALS['con']->query($comando);

	if ($resposta) {
		alert('Categoria cadastrada com sucesso !');;
	} else {
		alert('Erro ao cadastrar !');
	}
}

function getCategorias()
{
	$comando = 'SELECT * FROM tb_categoria';
	$resposta = $GLOBALS['con']->query($comando);
	return $resposta;
}

function delCategoria($cd)
{
	$comando = 'DELETE FROM tb_categoria WHERE cd_categoria=' . $cd;
	$resposta = $GLOBALS['con']->query($comando);
	if ($resposta) {
		alert('Excluído com sucesso !');
		vai('restaurante.php');
	} else {
		alert('Erro ao excluir !');
	}
}

function vai($onde)
{
	echo '<script>
				window.location = "' . $onde . '";
		  </script>';
}

function alert($msg)
{
	echo '<style>
	*{margin:0;overflow:hidden;}
.fundo{
	position: absolute;
	z-index: 99;	
	width: 100vw;
	height: 100vh;
	background-color: black;
	opacity: 0.7;
	display: block;
	overflow: hidden;
}
#modal{
	z-index: 99;
	width: 40vw;
	margin-left:30vw;
	margin-top:20vh;
	border-radius:1vw;
	border:1px solid black;
	display:block;
	position:absolute;
	padding: 10px;
	background-color: white;
}
#modal h1{
	margin-top:0px;
	text-align: center;
}
#modal span{
	float:right;
	padding:10px;
	background-color:gray;
	color:white;
	border-radius:100%;
	font-size:10px;
	cursor:pointer;
}
#modal button{	
	width: 5vw;	
	margin-left: 17.5vw;
}
</style>
<script>
	function fechar(){
		let fundo = document.querySelector(".fundo");
		let modal = document.querySelector("#modal");
		fundo.style.display = "none";
		modal.style.display = "none";
	}
</script>
<div class="fundo"></div>
<div id="modal">
<h1>' . $msg . '</h1>
<button class="btn btn-primary" onclick="fechar()">Ok</button>
</div>';
}

function addProduto($nome, $valor, $descricao, $foto, $cat)
{

	$destino = '/img/';

	$comando = 'INSERT INTO tb_produto VALUES (null,"' . $nome . '",' . $valor . ', "' . $descricao . '", "' . $foto . '", ' . $cat . ')';

	$resultado = $GLOBALS['con']->query($comando);

	$destino .= $GLOBALS['con']->insert_id . '/';

	//Verificamos se não existir, criamos a pasta
	if (!is_dir($destino)) {
		mkdir($destino, 0777);
	}

	$destino .= $foto['foto']['name'];

	if (move_uploaded_file($destino, $foto['foto']['tmp_name'])) {
		alert('Cadastrado com sucesso !');
	} else {
		alert('Erro ao cadastrar !');
	}
}

function delUser($id)
{
	$sql = 'DELETE FROM tb_usuario WHERE cd_usuario = ' . $id;
	$GLOBALS['con']->query($sql);
}

function addUser($nome, $login, $senha, $tipo)
{
	$sql = 'INSERT INTO tb_usuario VALUES (null , "' . $nome . '", "' . $login . '", "' . $senha . '", ' . $tipo . ')';
	$resposta = $GLOBALS['con']->query($sql);

	$retorno['erro'] = false;
	if ($resposta)
		$retorno['msg'] = "Cadastrado com sucesso !";
	else {
		$retorno['msg'] = "Erro ao cadastrar !";
		$retorno['erro'] = true;
	}
	echo json_encode($retorno);
}

function updateUser($nome, $login, $senha, $tipo)
{
	$sql = 'UPDATE tb_usuario SET nm_usuario="' . $nome . '", nm_usuario="' . $login . '", nm_usuario="' . $senha . '", nm_usuario=' . $tipo . ' WHERE cd_usuario=.$cd_usuario.';

	$resposta = $GLOBALS['con']->query($sql);

	$retorno['erro'] = false;
	if ($resposta)
		$retorno['msg'] = "Atualizado com sucesso !";
	else {
		$retorno['msg'] = "Erro ao Atualizar !";
		$retorno['erro'] = true;
	}
	echo json_encode($retorno);
}


// function addProdutos($nome){
// 	$categoria = $_POST['categoria'];
// 	$comando = 'INSERT INTO tb_categoria VALUES (NULL,"'.$categoria.'");';
// 	$resposta = $GLOBALS['con']->query($comando);

// 	if($resposta){
// 	alert  ('Categoria cadastrada com sucesso !');;
// 	}else{
// 		alert ('Erro ao cadastrar !');
// 	}
// }

// function getProdutos(){
// 	$comando = 'SELECT * FROM tb_categoria';
// 	$resposta = $GLOBALS['con']->query($comando);
// 	return $resposta;
// }
