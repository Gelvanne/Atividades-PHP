<?php
$metodo= $_SERVER["REQUEST_METHOD"];?>

<label>O método utilizado para envio do form é:</label>

<?php echo $metodo;?>

<?php $cond = $metodo == "POST";?>
<?php if ($cond){?>
<?php $num1= $_POST["n1_form"];?>
<?php $num2= $_POST["n2_form"];?>
<?php };?>
<!DOCTYPE html>
<html>
<head>
<a href="http://localhost:8080/Atividades-PHP/"> Home</a>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<form method="POST">
		<label>Digite o Primeiro número:</label> <input name="n1_form" />
		<hr>
		<label>Digite o Segundo número:</label> <input name="n2_form" />
		<hr>
		<hr>
		<input type="submit" />
	</form>
	<?php if ($cond){	?>
	<?php if (is_numeric($num1)){
		if (is_numeric($num2)){
			if ($num2 != 0){

			}
			else {
				echo "O segundo número precisa ser diferente de zero.";
			}
		} else {
			echo "Inserir dois numero válidos";
		}

	}
	else {
		echo "Inserir dois numero válidos";}
		?>
		<?php if (is_numeric($num1)){?>
		<?php if (is_numeric($num2)){?>
		<?php if ($num2 != 0){?>
	<h2>Resultados:</h2>
	<hr>
	<p>
		Soma =
		<?php $soma= ($num1+$num2); echo	"$soma";?>
	</p>
	<p>
		Sub =
		<?php $sub = ($num1-$num2); echo	"$sub";?>
	</p>
	<p>
		Mult =
		<?php $mult = ($num1*$num2); echo	"$mult";?>
	</p>
	<p>
		Div =
		<?php $div = ($num1/$num2); echo	"$div";?>
	</p>
	<?php }?>
	<?php }?>
	<?php }?>
	<?php }?>
</body>
</html>
