<?php $method =$_SERVER["REQUEST_METHOD"];?>
<?php
if ($method == "POST") {
    $min = $_POST["minimo"];
    $max = $_POST["maximo"];
    $rep = $_POST["repeticao"];
    $resultado = array();
    for ($i = 0; $i < $rep; $i ++) {
        $resultado[] = rand($min, $max);
    }
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>LOTERIA PHP</title>
</head>
<body>
	<h1>Seja bem Vindo a Aula 11 Programa LOTERIA</h1>
	<form method="POST"
		action="http://localhost:80/atividades-php/aula11/loteria.php">
		<hr>
		<br> <label>Digite o numero mínimo:</label> <input name="minimo"
			value="<?php echo $min;?>" type="number">
		<hr>
		<br> <label>Digite o número máximo:</label> <input name="maximo"
			value="<?php echo $max;?>" type="number">
		<hr>
		<br> <label>Quantidade de apostas:</label> <input name="repeticao"
			type="number" value="<?php echo $rep;?>">
		<hr>
		<br> <input type="submit"> <br>
	</form>
	<label> O resultado é:</label><p><?php print_r($resultado);?></p>
	<br>
	<p>
		<a href="http://localhost/Atividades-PHP/index.html">Retornar a Home</a>
	</p>
</body>
</html>