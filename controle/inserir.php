<?php
$pdo = require 'conexao.php';
$sql = 'insert into produto(nome, descricao, 
quantidade) values(?,?,?)';
$prepare = $pdo->prepare($sql);
$prepare->bindParam(1, $_GET['nome']);
$prepare->bindParam(2, $_GET['descricao']);
$prepare->bindParam(3, $_GET['quantidade']);
$prepare->execute();
echo $prepare->rowCount();
