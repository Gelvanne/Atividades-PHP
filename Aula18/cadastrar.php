<?php
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
    $email = $_POST["fC_email"];
    $nome = $_POST["fC_nome"];
    $senha = $_POST["fC_senha"];
    $link = mysqli_connect("localhost", "root", "");
    $resultado = mysqli_query($link, "insert into db_usuarios.tb_usuarios (usuario_email,usuario_name,usuario_senha) values ('$email','$nome','$senha')");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>CADASTRAR|USUARIO-PHP</title>
</head>
<body>
	<h2>APP Cadastramento usuário</h2>
	<p>
		<a href="http://localhost/Atividades-PHP/Aula18/usuario.php"> APP
			Usuário com MySQL</a>
	</p>
	<form method="POST"
		action="http://localhost/Atividades-PHP/Aula18/cadastrar.php">
		<p>
			<label>Digite o email:</label><input type="email" name="fC_email">
		</p>
		<p>
			<label>Digite o nome:</label><input name="fC_nome">
		</p>
		<p>
			<label>Digite a senha:</label><input type="password" name="fC_senha">
		</p>
		<p>
			<input type="submit" value="Cadastrar">
		</p>
	</form>
<?php if ( isset($resultado) and $resultado ) { ?>
	<p>Cadastro feito com sucesso.</p>
	<?php } else if ( isset($resultado) and $resultado == false ) {?>
	<p>Algum erro aconteceu. Tente novamente</p>
	<?php } ?>
</body>
</html>