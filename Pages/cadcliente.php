<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/cadastrocliente.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="alinhar">
        <form method="post" action="index.php"><br></br>
        <div style="text-align:center">
            <h1>Sistema de Clientes</h1><br></br>
            <div style="text-align:center">
            <h2>Cadastro</h2>
            <label for="nome">Nome:</label>   
            <input type="text" size="40" placeholder="Nome Completo"><br></br>
            <label for="cpf">CPF:</label>
            <input type="text" placeholder="231.231.321-00"><br><br>
            <label for="email">Email:</label>
            <input type="text" size="40" placeholder="Email valido"><br></br>
            <h2>Endereço:</h2>
            <label for="cidade">Cidade:</label>
            <input type="text" placeholder=" Cidade"><br><br>
            <label for="cep">CEP:</label>
            <input type="text" placeholder="63100-000">
            <p>
            <div style="text-align:center">
                
            
            <input type="submit" value="Enviar">
            <input type="button" value="Voltar"> 
            </p>
          


        </form></div>
        



</body>

</html>