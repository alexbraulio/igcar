<?php 
//conectando com o banco de dados /servidor / usuário/ senha.
$db = mysql_connect("localhost","root","");
// selecionando banco de tabelas ou banco de dados.
$dados = mysql_select_db("sistemaigcar", $db);

?>