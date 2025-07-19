<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

var_dump("$usuarios");*/

//carrega um usuário
/*$root = new Usuario();
$root->loadById(3);*/

// Carrega uma lista de usuários
//$lista = Usuario::getList();

// Carrega uma lista de usuários buscando pelo login

//$search = Usuario::search("jo");

$usuario = new Usuario();

$usuario->login("root", "!@#$");

echo $usuario;

?>