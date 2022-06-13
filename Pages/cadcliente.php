<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/usuario.css">
    <title>Cadastro de Cliente</title>
</head>

<body>
    <div class="container">
        <form method="post" action="index.php">
            <div class="form-group">
                <div style="text-align:center">
                    <h2>Cadastro de Cliente</h2>
                    <p>
                        <label for="nome"></label>
                        <input type="text" size="40" class="form-control" placeholder="Nome Completo">
                    </p>
                    <p>
                        <label for="cpf"></label>
                        <input type="text" class="form-control" placeholder="231.231.321-00">
                    </p>
                    <p>
                        <label for="email"></label>
                        <input type="text" size="40" class="form-control" placeholder="Email valido">
                    </p>
                    <p>
                        <label for="cidade"></label>
                        <input type="text" class="form-control" placeholder=" Cidade">
                    </p>
                    <p>
                        <label for="cep"></label>
                        <input type="text" class="form-control" placeholder="63100-000">
                    <p>
                    <div>
                        <p>
                            <input type="submit" class="form-control" value="Enviar">
                            <input type="button" class="form-control btn btn-secondary" value="Voltar">
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>