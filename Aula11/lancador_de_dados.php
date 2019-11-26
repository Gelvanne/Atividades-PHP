<?php $metodo = $_SERVER["REQUEST_METHOD"];
echo "<p> Metodo usado e:$metodo</p>";?>
<?php if ($metodo == "POST"){
	$n1 = $_POST["numero1"];
	$n2 = $_POST["numero2"];
	$lancador = $_POST["lancamento"];
	for ($i=0;$i < $lancador;$i ++){
		$resultado = rand($n1, $n2);
		echo "<p>$resultado</p>";
	}
}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>ATIVIDADE-1 PHP</title>
</head>
<body>
	<h1>Seja bem vindo a ATIVIDADE-1 do curso PHP</h1>
	<hr>
	<br>
	<form method="POST"
		action="http://localhost:80/atividades-php/aula11/lancador_de_dados.php">
		<hr>
		<br> <label>Digite o Primeiro número:</label> <input name="numero1"
			value="<?php echo $n1;?>" type="number">
		<hr>
		<br> <label>Digite o Segundo número:</label> <input name="numero2"
			value="<?php echo $n2;?>" type="number">
		<hr>
		<br> <label>Digite o número de lançamentos do dado:</label> <input
			name="lancamento" type="number" value="<?php echo $lancador;?>">
		<hr>
		<br> <input type="submit"> <br>
	</form>
	<br>
	<p>
		<a href="http://localhost/Atividades-PHP/index.html">Retornar a Home</a>
	</p>
	<?php ?>
</body>
</html>
