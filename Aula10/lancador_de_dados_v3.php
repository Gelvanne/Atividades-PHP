<?php $metodo = $_SERVER["REQUEST_METHOD"];?>
<?php  if ($metodo == "POST"){
	$repetir =$_POST["lancamentos"];
	$n1 = $_POST["valor1"];
	$n2 = $_POST["valor2"];
	for ($i=0;$i < $repetir;$i++){
	$resultado = rand($n1, $n2);
		echo "<p> Resultado é $resultado";}
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>LANCADOR DE DADOS V3</title>
</head>
<body>
	<h1>Bem vindo ao lançador de Dados V3 da Aula 10</h1>
	<br>
	<form method="POST">
		<p>
			<label> Entre com outro número primário:</label>
		</p>
		<input name="valor1"> <br>
		<p>
			<label> Entre com outro numero secundario:</label>
		</p>
		<input name="valor2"> <br>
		<hr>
		<p>
			<label> Lançar o dados quantas vezes?</label>
		</p>
		<input name="lancamentos"> <br>
		<p>
		<input type="submit">
	</form>
	<?php if ($metodo != "GET"){?>
	<hr>
	<br>
	<label>O resultado aleatório foi:</label>
	<hr>
	<br>
	<?php echo "$resultado";}?>
	<hr>
	<br>
	<p>
		<a href="http://localhost/Atividades-PHP/aula10/index.html">Retornar
			início Aula 10</a>
	</p>
</body>
</html>
