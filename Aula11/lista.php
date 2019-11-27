<?php
$lista = array();
$lista[15] = "gelvanne";
$lista[55] = "php";
$lista[28] = "TESTE LISTA";?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<h1>teste lista</h1>
<p> <?php print_r($lista[15]);?> </p>
<p> <?php echo $lista[55];?> </p>
<p> <?php print_r($lista[28]);?> </p>
</body>
</html>