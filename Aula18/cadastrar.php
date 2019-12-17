<?php
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
	$email = $_POST["fC_email"];
	$nome = $_POST["fC_nome"];
	$senha = $_POST["fC_senha"];
	$link = mysqli_connect("localhost", "root", "");/* Criando conexão com o banco de dados e salvando na variavel $link*/
	/* Realizar o teste da conexão MySQL no caso de valor igual a zero não existe erro*/
	$linkErro = mysqli_connect_errno();
	if ($linkErro == 0){
		/*procedimento de teste para saber se o usuáriojá existe no DB*/
		$check = mysqli_query($link, "SELECT * FROM db_usuarios.tb_usuarios WHERE usuario_email = '$email'");
		// var_dump($_COOKIE);
		if ($check->num_rows > 0){
			$msg = "E-MAIL JÁ CADASTRADO POR FAVOR TENTE OUTRO E-MAIL";
		}/* FIM if ($check->num_rows > 0){*/ else {
			$resultado = mysqli_query($link, "INSERT INTO db_usuarios.tb_usuarios (usuario_email,usuario_name,usuario_senha) values ('$email','$nome','$senha')");
			/* comando para testar as alterações relizadas pelo SQL no banco*/
			if (Rresultado){
				$rowsAfected = mysqli_affected_rows($link);
				if ($rowsAfected >0){
					$msg= "Cadastro realizado com grande sucesso!!!!";
				}
			}
		}/* Fim else*/
	}/*FIM if ($linkErro == 0){ */
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
		<!-- Codigo PHP para verificar se o email já está cadastrado -->
	<?php if (isset($check)and $check->num_rows > 0){ ?>
	<p>E-mail já cadastrado por favor tente outro email.</p>
	<?php } else{ $check = null;}?>

	<!-- Codigo PHP para informar que o usuário está sendo cadastrado -->
	<?php if ( isset($resultado) and $resultado ) { ?>
	<p>Cadastro feito com sucesso.</p>
	<?php } else if ( isset($resultado) and $resultado == false ) {?>
	<p>Algum erro aconteceu. Tente novamente</p>
	<?php } ?>
</body>
</html>
