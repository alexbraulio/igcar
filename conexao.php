<?php 
//conectando com o banco de dados /servidor / usuário/ senha.
//$db = mysql_connect("localhost","root","");
//$db = mysqli_connect("mysql.hostinger.com.br","u737997304_igcar","nysMdWJc3bhvPYP9Uy");
// selecionando banco de tabelas ou banco de dados.
//$dados = mysqli_select_db("u737997304_siste", $db);


$servidor = 'mysql.hostinger.com.br';
$usuario = 'u737997304_igcar';
$senha = 'nysMdWJc3bhvPYP9Uy';
$banco = 'u737997304_siste';
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

/*
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'mydb';
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());*/
?>