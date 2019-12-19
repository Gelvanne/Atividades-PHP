<?php
$method = $_SERVER["REQUEST_METHOD"];

if( $method == "POST" ) {

	$min = $_POST["min"];
	$max = $_POST["max"];
	$nDados = $_POST["nDados"];

	$results = array();
	
	
	
	$num = rand($min, $max);

	$historico = array_filter( explode(", ", $_POST["historico"]) );
	$historico[] = $num;
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Dado</title>
</head>
<body>
	<h1>Dado</h1>
	<form action="dado.php" method="post">
		<p>
			<label for="min">Menor: </label> <input type="number" name="min"
				value="<?= $min ?>" />
		</p>
		<p>
			<label for="max">Maior: </label> <input type="number" name="max"
				value="<?= $max ?>" />
		</p>
		<input type="submit" value="Jogar Dado" /> <input type="hidden"
			value="<?= isset($historico) ? implode(", ", $historico) : NULL ?>" name="historico" />
	</form>
	<?php if($method == "POST") { ?>
		<p>
			Resultado:
			<?php echo $num?>
		</p>
		<p>
			Histórico:
			<?php echo implode(", ", $historico);?>
		</p>
	<?php } ?>
</body>
</html>
