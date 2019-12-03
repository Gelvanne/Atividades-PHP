<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>USUARIOS.PHP</title>
</head>
<body>
	<p>
		<label>Seja bem vindo!</label>
	</p>
	<form  method="post">
		<?php $metodo =$_SERVER["REQUEST_METHOD"];?>

		<input type="submit" value="Já sou cadastrado"
			action="http://localhost:80/atividades-php/aula14/usuario.php" />
			<?php if ($metodo == "POST"){?>
		<p>
			<label>E-mail: </label><input name="email" type="email" />
		</p>
		<p>
			<label>Senha: </label><input  name="senha" type="password" />
		</p>
		<p>
			<input type="submit" value="Acessar" action="http://localhost:80/atividades-php/aula14/login.php" />
		</p>
		<?php }?>

	</form>

	<br>
	<p>
		<a href="http://localhost/Atividades-PHP/index.html">Retornar a Home</a>
	</p>
</body>
</html>
