<?php

require_once("config.php");

echo '<h4 strong align=center>Exemplo de getList</h4>';

$lista = Usuario::getList();

echo json_encode($lista);

echo '<br>';

echo '============================================================================<br>';
echo '<h4 strong align=center>Exemplo de search</h4>';

$usuario = Usuario::search('root');
echo json_encode($usuario).'<br>';


echo '============================================================================<br>';
echo '<h4 strong align=center>Exemplo de login</h4>';

$login = new Usuario;
$login->login('joao', '123654');

echo ($login);

echo '============================================================================<br>';
echo '<h4 strong align=center>Exemplo de INSERT</h4>';

$aluno = new Usuario();

$aluno->setDeslogin("aluno");
$aluno->setDessenha("@alun0");

$aluno->insert();
echo $aluno;

echo '============================================================================<br>';
echo '<h4 strong align=center>Exemplo de UPDATE</h4>';

$user = new Usuario();

$user->loadById(8);

$user->update('professor','!@#$%¨&*');

echo $user;


?>