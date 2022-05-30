<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>

</head>

<body>
    <div class="form">
        <form method="post" action="../controle/inserir.php">
            <h1>Sistema para Gerenciamento de Floricultura</h1>
            <h2>Cadastro de Produto</h2>
            <!-- <label for="categoria">Categoria:</label>
            <input type="text" size="100" placeholder="Categoria"> -->

            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Nome do Produto">
            <br></br>
            <label for="descricao">Descricao</label>
            <input type="text" name="descricao" placeholder="Descriçao do Produto">
            <br></br>
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" placeholder="Quantidade do Produto">
            <br></br>
            <input type="submit" value="Salvar">



        </form>
</body>

</html>