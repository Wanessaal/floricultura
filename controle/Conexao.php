<?php
//conexao com banco de dados
$conexao = null;
try{
    $conexao = new PDO('mysql:host=localhost;
    dbnam=floricultura', 'root','');
    echo "conectado com sucesso<br>";
}catch(Exception $e){
    echo $e.getMessage();
    die();
}
