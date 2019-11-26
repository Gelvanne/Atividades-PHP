<?php $metodo = $_SERVER["REQUEST_METHOD"];?>
<?php if ($metodo == "POST"){
	$valorinicial = $_POST["a_inicial"];
	$valormensal = $_POST["a_mensal"];
	$taxajuros = $_POST["tx_mes"];
	$qntmeses = $_POST["tmp_meses"];
	$parcial = $valorinicial;
	for ($i=1;$i<$qntmeses;$i++){
		$parcial = $parcial*(1+$taxajuros)+$valormensal;
	}
}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>ATIVIDADE 2 INVESTIMENTOS PHP</title>
</head>
<body>
	<h1>Seja bem vindo a ATIVIDADE-2 Aula-11</h1>
	<br>
	<form method="POST"
		action="http://localhost:80/atividades-php/aula11/investimentos.php">
		<hr>
		<br> <label>Aporte inicial:</label> <input name="a_inicial"
			type="number">
		<hr>
		<br> <label>Aporte mensal:</label> <input name="a_mensal"
			type="number">
		<hr>
		<br> <label>Taxa de juros ao mês(%):</label> <input name="tx_mes"
			type="number" step="0.001">
		<hr>
		<br> <label>quantidades de meses do investimento:</label> <input
			type="number" name="tmp_meses" >
		<hr>
		<br> <input type="submit"/>
	</form>
	<hr>
	<br>
	<?php echo "<h2> Soma é igual a: $parcial</h2>";?>
	<hr>
	<br>
	<br>
	<p>
		<a href="http://localhost/Atividades-PHP/index.html">Retornar a Home</a>
	</p>
</body>
</html>
