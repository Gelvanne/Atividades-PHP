<?php
$method = $_SERVER["REQUEST_METHOD"];
if ($method == "POST"){
	$email= $_POST["fP_email"];
	$link = mysqli_connect("localhost","root","");
	$busca = mysqli_query($link,"SELECT * FROM db_usuarios.tb_usuarios");
	$resultado = mysqli_fetch_all($busca, MYSQLI_ASSOC);
	foreach ($resultado as $u){
		if ($u["usuario_email"] == $email){
			$delet = mysqli_query($link, "delete from db_usuarios.tb_usuarios where usuario_email = '$email'");
			var_dump($delet);
		}
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>APAGAR|USUARIO-PHP</title>
</head>
<body>
<p>
		<a href="http://localhost/Atividades-PHP/Aula18/usuario.php"> APP
			Usuário com MySQL</a>
	</p>
	<form method="post"
		action="http://localhost/Atividades-PHP/Aula18/apagar.php">
		<p>
			<label>Digite o e-mail do usuário a ser apagado:</label><input
				type="email" name="fP_email">
		</p>
		<p>
			<input type="submit" values="Buscar">
		</p>
	</form>
	<?php if ($method == "POST"){
		if ($delet == true){
			echo "e-mail deletado com sucesso";
		}
	}?>
</body>
</html>
