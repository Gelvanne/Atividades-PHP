<?php
include ("banco_de_dados.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$usuario_login=array();
$usuario_login["email"]=$email;
$usuario_login["senha"]=$senha;

$sucesso = FALSE; // uma solução para resolver o problema do laço de repetição.
foreach ($lista_usuarios as $u){
	// login bem sucedido.
	$sucesso = TRUE;
	break; // função que sai do laço de repetição quando executada.
}
if ($sucesso =="TRUE"){
	echo "Login realizado com sucesso!!";
}else {
	echo "E-mail ou senha inválidos.";
}
?>