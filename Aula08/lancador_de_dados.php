<? php $metodo = $_SERVER["REQUEST_METHOD"];?>
<? php if ($metodo == "GET") { ?>

	<!DOCTYPE htlm>

	<html>

	<head>
	<meta charset="ISO-8859-1">
	<title>Lançador de dados  PHP</title>

	</head>

	<body>
	<br>
	<label> Seja bem vindo a Aula 08 - Atividade 03</label>
	<br><hr>
	<form method="POST">
	<label>Digite o valor mínimo:</label> 	<input name="minimo"/>
	<label>Digite o valor máximo:</label> 	<input name="maximo"/>
						<input type="submit"/>
	</form>

<? php } ?>

<? php else { ?>
	$min = $_POST["minimo"];
	$max = $_POST["maximo"];
	$resultado = rand( $min, $max );
	echo $resultado;
<? php } ?>
	</body>

</html>
