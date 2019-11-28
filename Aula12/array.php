<?php
$method =$_SERVER["REQUEST_METHOD"];
if ($method == "POST"){
	$pessoa = array();
	$pessoa ["nome"]=$_POST["html_nome"];
	$pessoa ["end"]=$_POST["html_end"];
	$pessoa ["tel"]=$_POST["html_tel"];
	$pessoa ["email"]=$_POST["html_email"];
	$pessoa ["cidade"]=$_POST["html_cidade"];}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Pagina PHP Array</title>
</head>
<body>
	<h1>Página PHP Array</h1>

	<form method="POST"
		action="http://localhost/atividades-php/aula12/array.php">

		<label>Digite seu nome:</label> <input name="html_nome"><br>
		<hr>
		<label>Digite seu endereço:</label> <input name="html_end"><br>
		<hr>
		<label>Digite seu telefone:</label> <input name="html_tel"><br>
		<hr>
		<label>Digite seu email:</label> <input name="html_email"><br>
		<hr>
		<label>Digite seu cidade:</label> <input name="html_cidade"><br>
		<hr>
		<input type="submit"><br>
		<hr>
	</form>
	<label>Dados pessoais:</label>
	<?php echo "{$pessoa ["nome"]} {$pessoa ["end"]} {$pessoa ["tel"]} {$pessoa ["email"]} {$pessoa ["cidade"]}";?>
	<br>
	<p>
		<a href="http://localhost/Atividades-PHP/index.html">Retornar a Home</a>
	</p>
</body>
</html>
