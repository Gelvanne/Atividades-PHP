<?php /*inicializando a sessão.*/include 'section.inc';?>
<?php /*incluindo a busca do método.*/include 'method.inc';?>
<?php /*Lógica da busca*/
/* A variável $email recebe o campo do formulario fCsenha*/
if ($method == "POST"){
	$email = $_POST["fC_email"];
	/*Criando variaveis para desenvolver a lógica*/
	$uPerfil = null; /*variável utilizada para localizar um perfil no array.*/
	$emailCadastrado = false; /* Parte do pressuposto que não existe no array.*/

	foreach ($Sec_lista as $u){
		/* Foreach busca o array da sessão e coloca os valores na variável $u para saber se o usuário */
		if ($u["email"] == $email){
			/*Se a condição if for positiva salve na variárel $emailCadastrado recebe true*/
			$emailCadastrado = true;
			/* Se a condição if for verdadeira a variavel $uPerfil vai receber a variável $u.*/
			$uPerfil = $u;
			break;
		}
	}/*Fechamento da condição foreach.*/
	/* Se a condição IF a variável $emailCadastrado for falsa*/
	if ($emailCadastrado){
		/* Processo de criação da nova sessão $_SESSION que será usada na pagina perfil.php*/
		$_SESSION["uPerfil"] = $uPerfil;
		header("Location: perfil.php");
		exit();
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>SELECT|USER</title>
</head>
<body>
	<p>
		<a href="cadastrar.php">Cadastrar Usuários</a>
	</p>
	<h2>Buscar usuário</h2>
	<form method="POST">
		<p>
			<label>Email:</label> <input type="email" name="fC_email" />
		</p>
		<input type="submit" value="Serch">
		<p>
		<?php if ( isset($emailCadastrado) and $emailCadastrado == false ) {?>
		
					* E-mail não cadastrado.
			<?php } ?>
		</p>
	</form>
</body>
</html>
