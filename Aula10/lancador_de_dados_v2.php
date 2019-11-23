<?php
$metodo = $_SERVER["REQUEST_METHOD"];
?>

<?php if ($metodo == "POST"){
	$n1 = $_POST["valor1"];
	$n2 = $_POST["valor2"];
	$resultado = rand($n1, $n2);
	$metodo = "GET";
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>LANCADOR DE DADOS</title>
</head>
<body>
	<h1>Bem vindo ao lançador de Dados da Aula 10</h1>
	<br>
	<p> <label>Seu resultado é:</label> </p>
	<?php echo "$resultado";?>
	<hr>
	<form method="POST">
		<p> <label> Entre com outro número primário:</label></p> <input name="valor1">
		<br>
		<p><label> Entre com outro numero secundario:</label></p> <input
			name="valor2"> <br>
		<hr>
		<input type="submit">
	</form>
</body>


	<?php }else {?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>LANCADOR DE DADOS</title>
</head>
<body>
	<h1>Bem vindo ao lançador de Dados da Aula 10</h1>
	<form method="POST">
		<label> Entre cm o primeiro número</label> <input name="valor1"> <label>
			Entre cm o Segundo número</label> <input name="valor2"> <br>
		<hr>
		<input type="submit">
	</form>

	<?php }?>
	<br><p><a href="http://localhost/Atividades-PHP/aula10/index.html">Retornar início Aula 10</a></p>
</body>
</html>



