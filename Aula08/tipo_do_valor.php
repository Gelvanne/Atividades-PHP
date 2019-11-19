<?php $metodo = $_SERVER["REQUEST_METHOD"];?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Tipo do Valor PHP</title>
</head>
<body>
	<label> Seja bem vindo a Atividade 02.</label>
	<hr>
	<?php if ($metodo == "GET") { ?>
	<form method="POST">
		<label>Digite algo:</label> <input name="v_form" /> <input
			type="submit" />
	</form>
	<?php  }?>
	<?php
	if ($metodo == "POST") {
		$valor = $_POST["v_form"];
		if (is_numeric($valor) ){
			$tipo = "O valor é numerico"; echo "$tipo";
		}
		else {
			$tipo = "O Valor não é numérico."; echo "$tipo";
		}}
		?>

</body>
</html>
