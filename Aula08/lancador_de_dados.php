<?php $metodo = $_SERVER ["REQUEST_METHOD"];?>
<?php if ($metodo == "GET") {?>

<!DOCTYPE htlm>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Lançador de dados PHP</title>

</head>

<body>
	<a href="http://localhost:80/atividades-php/index.html"> Home </a>
	<hr>
	<br>
	<br>
	<label> Seja bem vindo a Aula 08 - Atividade 03</label>
	<br>
	<hr>
	<form method="POST">
		<label>Digite o valor mínimo:</label> <input name="minimo" />
		<hr>
		<a></a><label>Digite o valor máximo:</label> <input name="maximo" />
		<hr>
		<input type="submit" />
	</form>
<?php }?>

<?php

if ($metodo == "POST") {
    $min = $_POST["minimo"];
    $max = $_POST["maximo"];
    $resultado = rand($min, $max);
    echo $resultado;
}
?>
	</body>

</html>
