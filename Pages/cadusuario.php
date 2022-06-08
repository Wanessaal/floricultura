<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/usuario.css">

    <title>Cadastro de Usuário</title>
</head>

<body>

    <div class="container">
        <form method="post" action="../controle/controleUsuario.php">
            <h2>Cadastro de Usuário</h2>
            <div class="form-group">
                <p>
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nomeusuario" id="nomeusuario" placeholder="Nome Completo">
                </p>

                <p>
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="emailusuario" id="emailusuario" placeholder="Email valido">
                </p>

                <p>
                    <label for="cpf">Senha:</label>
                    <input type="password" class="form-control" name="senhausuario" id="senhausuario">
                </p>
                
                <p>
                    <input type="submit" class="form-control btn btn-secondary" value="Cadastrar">
                </p>
            </div>
        </form>
    </div>

</body>

</html>