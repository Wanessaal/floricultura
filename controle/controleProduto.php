<?php

class Produto
{
    /*@var <PDO*/
    private $conexao;

    public function_construct() 
}
    try{
        $this->conexao = new PDO('mysql:host=mysql;dbname=floricultura', 'root', '');
    }   catch(Exception $e){
        echo $e->getMessage();
        die();
    }


    public function list() : arry{
        $sql = 'select * from produtos';

        $produtos = [];

        foreach ($this->conexao->query($sql) as $key => $value){
            array_push($produtos, $value);
            return $produtos;
        }
    }

    public function insert(string $descricao) : int{
    $sql = 'insert into produtos(descricao) values(?)'; 

    $prepare = $conexao->prepare($sql);

    $prepare->bindParam(1, $descricao);
    $prepare->execute();

    echo $prepare->rowCount();

    }

    public function update(int $quantidade, int $id) : int{
        $sql = 'update produtos set quantidade = ? where id = ?';

        $prepare = $conexao->prepare($sql);

        $prepare->bindParam(1, quantidade);
        $prepare->bindParam(2,id);

        $prepare->execute();

        echo $prepare->rowCount();
    }

    public function delete(int $id) : int{
        $sql = 'delete from produtos where id = ?';

        $prepare = $conexao->prepare($sql);

        $prepare->bindParam(1, $id);
        $prepare->execute();

        echo $prepare->rowCount();

    }





