<?php 

require_once 'cliente.php';

$db = new PDO("mysql:host=localhost;dbname=u737997304_siste","root","");

$cliente = new cliente($db);
$cliente->setNome("Diego");
$cliente->setEmail("diego@gmail.com");

$id = $cliente->insert();

echo $id;


 ?>