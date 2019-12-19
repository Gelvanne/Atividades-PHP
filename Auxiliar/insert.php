<?php
$link = mysqli_connect("localhost", "root", "");
$email = "igor@igor.com";
$senha = "123";
$resultado = mysqli_query($link, "INSERT INTO cadastro_usuarios.usuario (email, senha) VALUES ('$email', '$senha')");

if($resultado) {
	print("OK");
} else {
	print("erro");
}