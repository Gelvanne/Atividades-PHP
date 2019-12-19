<?php 

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
	
	$email = $_POST["email"];
	
	include('conexao.php');
	global $link;
	
	$resultado = mysqli_query($link, "DELETE FROM cadastro_usuarios.usuario WHERE email = '$email'");
	
	if ($resultado) {
		
		$affectedRows = mysqli_affected_rows($link);
		
		if ($affectedRows > 0) {
			$mensagem = "Usuário removido com sucesso";
		} else {
			$mensagem = "E-mail não cadastrado";
		}
		
	}
	
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Remover | Cadastro de Usuários</title>
</head>
<body>

	<a href="usuarios.php">Voltar</a>
	<h1>Remova um usuário</h1>
	<form method="POST" action="remover.php">
		<p>
			<label>E-mail: </label>
			<input type="email" name="email" />
		</p>
		<input type="submit" value="Remover" />
		<?php if ( isset($mensagem) ) {?>
		<p><?php echo $mensagem; ?></p>
		<?php } else if ($method == "POST") {?>
		<p>Algo deu errado ao remover usuário. Tente novamente</p>
		<?php } ?>
	</form>
</body>
</html>