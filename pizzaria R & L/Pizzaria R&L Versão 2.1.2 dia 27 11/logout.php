<?php

session_start();

//Apaga uma a uma as variáveis da sessão
unset($_session['cd']);
unset($_session['nome']);
unset($_session['tipo']);

//Destroi a sessão
session_destroy();

//Redireciona a sessão
header('location: login.php');