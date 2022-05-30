<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Página de Login</title>

</head>

<body>
    <div class="container">
        <div class="content">
            <div id="login">
                <form action="loginControle.php" method="post">
                    <h1>Entrar</h1>
                    <p>
                        <label for="email">E-mail</label>
                        <input type="text" name="email">
                    </p>
                    <p>
                        <label for="senha">Senha</label>
                        <input type="password" name="senha">
                    </p>
                    <p>
                        <input type="submit" value="Logar">
                    </p>
                    <p class="link">
                        Ainda não tem cadastro?
                        <a href="./cadCliente.php">Cadastre-se</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>