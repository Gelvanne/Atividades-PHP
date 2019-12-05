<?php
session_start(); // Iniciando uma sessão

if (isset($_SESSION["lista"])== FALSE){
	$_SESSION["lista"] = array();   // Ciando uma sessão
}
$lista = $_SESSION["lista"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Lista|Usuário</title>
</head>
<body>
<a href="usuarios.php">Voltar</a>
<h1>Usuários Cadstrados</h1>
	<table>
		<thead>
			<tr>
				<td><strong>Email:</strong></td> 	<!-- Comentário: Coluna de título da tabela  -->
				<td><strong>Senha:</strong></td>  <!-- Comentário: Coluna de título da tabela  -->
			</tr>
		</thead>
		<tbody>
		<?php foreach ($lista as $u){?>
			<tr>
				<td><em><font color="blue"><?php echo $u["email"];?></font></em></td>
				<td><em><?php echo $u["senha"];?></em></td>
			</tr>
			<?php }?>
		</tbody>
	</table>
</body>
</html>