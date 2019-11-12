<?php 
//Criar uma variável
$php_nome = $_GET["HTML_titulo"];
$php_tel = intval($_GET["HTML_tel"]);
$php_peso = floatval($_GET["HTML_peso"]);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>VARIAVEIS PHP</title>
</head>
	<body>
	<br><br>
	<a href="/atividades"> Home </a>
		<hr>
		<br>
	<h1> Seja bem vindo: <?php var_dump($php_nome);?> </h1>
	<hr>
	<h1> Digite Tel: <?php var_dump($php_tel);?> </h1>
	<hr>
	<h1>Digite Seu Peso: <?php var_dump($php_peso);?> </h1>
	</body>
</html>
