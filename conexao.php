<?php 
//conectando com o banco de dados /servidor / usuário/ senha.
//$db = mysql_connect("localhost","root","");
$db = mysqli_connect("mysql.hostinger.com.br","u737997304_igcar","nysMdWJc3bhvPYP9Uy");
// selecionando banco de tabelas ou banco de dados.
$dados = mysqli_select_db("u737997304_siste", $db);

?>