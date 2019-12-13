<?php
$link = mysqli_connect("localhost", "root", "");
$resultado = mysqli_query($link, "SELECT * FROM db_usuarios.tb_usuarios ");
$usuarios = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>LOCALIZAR|USUARIO-PHP</title>
</head>
<body>
	<h2>APP Localizar Usuário</h2>
	<p>
		<a href="http://localhost/Atividades-PHP/Aula18/usuario.php"> APP
			Usuário com MySQL</a>
	</p>
	<table>
		<thead>
			<tr>
				<td>ID:</td>
				<td>NOME:</td>
				<td>E-MAIL:</td>
				<td>SENHA:</td>
			</tr>
		</thead>
		<tbody>
		<?php foreach($usuarios as $u) {?>
		<tr>
				<td>     <?php echo $u["usuario_id"]; ?>         		 </td>
				<td>     <?php echo $u["usuario_name"]; ?>     	</td>
				<td>     <?php echo $u["usuario_email"]; ?>   	 	 </td>
				<td>     <?php echo $u["usuario_senha"]; ?>     	</td>
			</tr>
		<?php }?>
		</tbody>

	</table>

</body>
</html>
</body>
</html>