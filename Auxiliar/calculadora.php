<?php

// Parte 1
$soma = 10 + 5;
$sub = 10 - 5;
$mult = 10 * 5;
$div = 10 / 5;

// Parte 2: usando variáveis
$num1 = 10;
$num2 = 5;

$soma = $num1 + $num2;
$sub = $num1 + $num2;
$mult = $num1 + $num2;
$div = $num1 + $num2;

// Parte 3: usando entrada do usuário
$num1 = isset($_GET["num1"]) ? $_GET["num1"] : 0;
$num2 = isset($_GET["num2"]) ? $_GET["num2"] : 0;

$soma   = $num1 + $num2;
$sub    = $num1 - $num2;
$mult   = $num1 * $num2;
$div    = $num1 / $num2;

?>

<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<title>Calculadora</title>
</head>
<body>
	<h1>Calculadora</h1>
	<form action="calculadora.php">
		<fieldset>
			<legend>Calculadora</legend>
			<p>
				<label for="num1">Número 1: </label> <input type="number"
					name="num1" />
			</p>
			<p>
				<label for="num2">Número 2: </label> <input type="number"
					name="num2" />
			</p>
			<input type="submit" value="Calcular" />
		</fieldset>
	</form>


	<p>Número 1: <?php echo $num1; ?></p>
	<p>Número 2: <?php echo $num2; ?></p>

	<p>Soma = <?php echo $soma; ?></p>
	<p>Sub 	= <?php echo $sub; ?></p>
	<p>Mult = <?php echo $mult; ?></p>
	<p>Div 	= <?php echo $div; ?></p>
</body>
</html>