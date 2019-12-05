<?php
$method = $_SERVER["REQUEST_METHOD"];
if ($method == "POST"){
	// eu desejo fazer um cadastro novo para esse usuário.
	session_start();

	if (isset($_SESSION["lista"]) == FALSE){
		$_SESSION["lista"] = array();
	}
	$lista= $_SESSION["lista"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	$usuario = array();
	$usuario["email"] = $email;
	$usuario["senha"] = $senha;
	// Condição para testar se o email já está cadastrado.

	$emailCadastrado = false;
	// Percorrer a variavel lista alimentada pelo globação session
	foreach ($lista as $u){
		// compara os itens de lista com o array que o usuário está preenchendo caso seja verdadeiro mude para true.
		if ($u["email"] == $usuario["email"]){
			$emailCadastrado = true;
			break;
		}
	}
// caso a condição seja falsa o codigo segue para cadastrar um novo usuário.
	if ($emailCadastrado == false){
		$lista[] = $usuario;
		$_SESSION["lista"]= $lista;
		header("Location: cadastro_sucesso.php");
		exit();
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Cadastro|Usuário</title>
</head>
<body>
<a href="usuarios.php">Voltar</a>
<br>
<h1> Cadastro Usuário</h1>
<form method = "POST" action="/Atividades-PHP/Aula15/cadastrar.php">
<p>
<label>E-mail:</label><input type="email" name="email">
</p>
<p>
<label>Senha:</label><input type="password" name="senha">
</p>
<input type="submit" value="Cadastrar">

<?php  if (isset($emailCadastrado)and $emailCadastrado == true){?>
<p><font color="red"> Email Já Cadastrado. Tente Novamente.</font></p>
<?php }?>

</form>
</body>
</html>
