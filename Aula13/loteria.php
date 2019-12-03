<?php $method =$_SERVER["REQUEST_METHOD"];?>
<?php
if ($method == "POST") {
	$min = $_POST["minimo"];
	$max = $_POST["maximo"];
	$nDezenas = $_POST["repeticao"];
	$sorteado = array();
	for ($i = 0; $i < $nDezenas; $i ++) {
		$adicionado = FALSE;
		while($adicionado == false){
			$dezena = rand($min, $max);
			if (in_array($dezena, $sorteado) == false){
				$sorteado[] = $dezena;
				$adicionado = true;
			}
		}
	}
}
sort($sorteado); // coloca em ordem crescente
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>LOTERIA PHP</title>
</head>
<body>
	<h1>Programa Mega da Virada!!</h1>
	<form method="POST"
		action="http://localhost:80/atividades-php/aula13/loteria.php">
		<hr>
		<br> <label>Digite o numero mínimo:</label> <input name="minimo"
			value="<?php echo $min;?>" type="number">
		<hr>
		<br> <label>Digite o número máximo:</label> <input name="maximo"
			value="<?php echo $max;?>" type="number">
		<hr>
		<br> <label>Quantidade de números:</label> <input name="repeticao"
			type="number" value="<?php echo $nDezenas;?>">
		<hr>
		<br> <input type="submit"> <br>
	</form>
	<label> Mostra o resultado concatenando:</label>
	<p>
	<?php echo implode(" | ",$sorteado); // mostra resultado concatenanando?>
	</p>
	<br>
	<label> Mostra o resultado com foreach:</label>
	<p>
	<?php foreach ($sorteado as $valor){
		echo "<p>$valor</p>";

	}// mostra resultado com foreach?>
	</p>
	<br>
	<label> Mostra o resultado com for:</label>
	<p>
	<?php for ($i = 0; $i < $nDezenas; $i++ ) {
		echo "<p>$sorteado[$i]</p>";
	}// mostra resultado com for?>
	</p>
	<br>
	<p>
		<a href="http://localhost/Atividades-PHP/index.html">Retornar a Home</a>
	</p>
</body>
</html>
