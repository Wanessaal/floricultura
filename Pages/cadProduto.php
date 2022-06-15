<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cadproduto.css">
    <title>Cadastro de Produto</title>
</head> 
<body>
    <div class="container">
        <form method="post" action="../controle/inserir.php">
            <h2>Cadastro de Produto</h2>
            <!-- <label for="categoria">Categoria:</label>
            <input type="text" size="100" placeholder="Categoria"> -->
            <p>
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome do Produto">
            </p>
            <p>
                <label for="descricao">Descricao</label>
                <input type="text" name="descricao" class="form-control" placeholder="Descriçao do Produto">
            </p>
            <p>
                <label for="quantidade">Quantidade</label>
                <input type="number" name="quantidade" class="form-control" placeholder="Quantidade do Produto">
            </p>
            <p>
                <input type="submit" class="form-control" value="Salvar">
            </p>
        </form>
</body>

</html>