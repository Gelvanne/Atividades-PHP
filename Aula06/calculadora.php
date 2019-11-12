<?php

// Descobrindo o metodo que está sendo utilizado.
echo $_SERVER["REQUEST_METHOD"];
// Gravando na variável metodo o resultado de (echo $_SERVER["REQUEST_METHOD"])
$metodo = $_SERVER["REQUEST_METHOD"];

// a variavel post criada é testada para retornar um valor verdadeiro ou falso.
$post = $metodo == "POST";

// Variáveis para os níumeros

// Design Patterns estudar esse assunto.

// Entrada de numeros
if ($post){
	$num1=floatval($_POST["num01"]);
	$num2=floatval($_POST["num02"]);

	//Calculos realizados.
	$soma=($num1+$num2);
	$sub=($num1-$num2);
	$mult=($num1*$num2);
	$div=($num1/$num2);
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Calculadora</title>
</head>
<body>
	<h1>Calculadora</h1>

	<form method="post">
		<label>Numero:1 <?php $num1=1;?> </label> <input name="num01" />
		<hr>
		<label>Numero:2 <?php $num2=1; ?> </label> <input name="num02" />
		<hr>
		<input type="submit" />
	</form>
	<?php // inicio da condição if para o corpo do html.
	if ($post){	?>
	<h2>Resultados:</h2>
	<hr>
	<p>
		Soma =
		<?php echo	"$soma";?>
	</p>
	<p>
		Sub =
		<?php echo	"$sub";?>
	</p>
	<p>
		Mult =
		<?php echo	"$mult";?>
	</p>
	<p>
		Div =
		<?php echo	"$div";?>
	</p>

	<?php // fechamento da condição
	}?>
</body>
</html>
