<?php 
$method = $_SERVER["REQUEST_METHOD"];


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>CADASTRAR|USUARIO-PHP</title>
</head>
<body>
<h2> APP Cadastramento usuário</h2>
<form action="http://localhost/Atividades-PHP/Aula18/cadastrar.php" method="post">
<p><label>Digite o email:</label><input type="email" name="fC_email"></p>
<p><label>Digite a senha:</label><input type="password" name="fC_senha"></p>
<p><input type="submit" value="Cadastrar"></p>
</form>

</body>
</html>