<?php
include ("login.php");
if ($metodo=="POST"){
$lista_usuarios = array();
$usuario = array();
$usuario["email"]= "gelvanne@msn.com";
$usuario["senha"]= "gel12345";

$usuario1 = array();
$usuario1["email"]= "assis@yandex.com";
$usuario1["senha"]= "as12345";

$usuario2 = array();
$usuario2["email"]= "oliveira@hotmail.com";
$usuario2["senha"]= "ol12345";

$lista_usuarios=$usuario;
$lista_usuarios=$usuario1;
$lista_usuarios=$usuario2;
}
?>

