<<<<<<< HEAD
=======
 
>>>>>>> 4d5c122445152e82126621198f43bd76e1d34376
<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=floricultura', $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
<<<<<<< HEAD

=======
  
>>>>>>> 4d5c122445152e82126621198f43bd76e1d34376
    $stmt = $pdo->prepare('INSERT INTO minhaTabela (usuario) VALUES(:usuario)');
    $stmt->execute(array(
      ':nome' => 'Usuario'
    ));
<<<<<<< HEAD

    echo $stmt->rowCount();
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();

=======
  
    echo $stmt->rowCount();
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  
>>>>>>> 4d5c122445152e82126621198f43bd76e1d34376
     ?>
<?php

$id = 5;
$nome = "Novo nome do Usuario";

try {
  $pdo = new PDO('mysql:host=localhost;dbname=floricultura', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('UPDATE usuario SET nome = :nome WHERE id = :id SET email = :email');
  $stmt->execute(array(
    ':id'   => $id,
    ':nome' => $nome
    ':email' => $email
  ));

  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>

<?php
$id = 5;

try {
  $pdo = new PDO('mysql:host=localhost;dbname=floricultura', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('DELETE FROM usuario WHERE id = :id');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>

<?php
$consulta = $pdo->query("SELECT nome, usuario FROM login;");


while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "Nome: {$linha['nome']} - Usuário: {$linha['usuario']}<br />";
}
?> 
<<<<<<< HEAD
=======

>>>>>>> 4d5c122445152e82126621198f43bd76e1d34376
