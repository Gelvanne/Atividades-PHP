<?php
// procedimento para iniciar uma sessão
session_start();
if (isset($_SESSION["lista"])== false){
	$_SESSION["lista"] = array();
}
$Sec_lista = $_SESSION["lista"];
?>