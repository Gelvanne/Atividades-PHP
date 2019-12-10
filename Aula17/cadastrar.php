<?php
// include para buscar o metodo para vaildar se e GET ou POST.
include 'method.inc';
if ($method == "POST"){
	//Se o metodo POST foi validado agora inicio a seção com o include.
	include 'section.inc';
	// Crio duas variaveis para guardar a informação enviada pelo formulario pelo usuário.
	/*
	$email = $_POST["fC_email"];
	$senha = $_POST["fC_senha"];
	*/
	// Criar uma variavel do tipo ARRAY para guardar os cadastros
	$usuario = array();
	$usuario["email"] = $_POST["fC_email"];
	$usuario["senha"] = $_POST["fC_senha"];
	//Criar uma variável para comparar com a leitura da lista para saber se o e-mail já existe.
	$emailCadastrado = false;
	foreach ($Sec_lista as $u){
		//foreach busca indice por indice e coloca na variável $u para depois comparar com o valor enviado pelo formulario do usuário.
		if ($u["email"] == $usuario["email"]){
			$emailCadastrado = true;
			break;
		}
	}// fechamento do foreach. caso a condição acima seja falsa.
	if ($emailCadastrado == false){
		$Sec_lista[] = $usuario;
		$_SESSION["lista"]= $Sec_lista;
		header("Location: CadUsuarioSucesso.php");
		// opcional de criar uma mensagem em outra pagina e usar a função header("Location: cadastro_sucesso.php").
		exit();
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>CADASTRAR|USUÁRIO</title>
</head>
<body>
	<!-- Condição 01 testar se o metodo de envio é o POST -->
	<h2>
		<font color="blue"> Cadastro de Usuários</font>
	</h2>
	<form action="/Atividades-PHP/aula16/cadastrar.php" method="post">
		<p>
			<label>E-mail:</label> <input type="email" name="fC_email">
		</p>
		<p>
			<label>Senha:</label> <input type="password" name="fC_senha">
		</p>
		<input type="submit" value="Cadastrar">
		<!-- Se a condição de teste de email cadastrado for positiva informe ao usuário que o email já existe -->
		<?php  // isset verifica se exite valor dentro de $emailCadastrado AND compara se esse valor é TRUE
		if (isset($emailCadastrado)and $emailCadastrado ==true ){?>
		<p>
			<font color="red"> Email Já Cadastrado. Tente Novamente.</font>
		</p>
		<?php }?>


	</form>
</body>
</html>
