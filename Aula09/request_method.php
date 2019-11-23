
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Request_Method</title>
</head>
<body>
	<a href="http://localhost:80/atividades-php/index.html"> Home </a>
	<hr>
	<br>
	<h1>Request Method</h1>
	<?php
$metodo = $_SERVER["REQUEST_METHOD"];
?>
	<label>O método do momento é o: <?php echo $metodo;?> </label>
	<br>
	<br>
	<?php

if ($metodo == "GET") {
    echo "BEM VINDO!";
} else {
    echo "REQUEST REALIZADO COM SUCESSO!!";
}
?>
	</body>
</html>
